<?php 
    session_start(); 
    $info_quiz = file_get_contents("Quiz.json");
    $quiz = json_decode($info_quiz);
    $i_question = $_SESSION["index"]; //inicialitzar a 0
    $questions = $_SESSION["arr_questions"];
?>

<hr>
    <?= $quiz[$_SESSION["arr_questions"][$i_question]] ->question; ?>
<hr>

<?php 
    //echo $i_question; //per saber quina pregunta esta
    $i = 0; //iterator per recorrer el vector quiz
    foreach($quiz[$_SESSION["arr_questions"][$i_question]]->answers as $answer){
        $i++; 
        ?>
        <form action = "validate.php" method="get">
            Answers <?= $i; ?> => <?= $answer; ?>
            <input type = "hidden" name="id_answer" value="<?=$i - 1; ?>"></input>
            <input type = "submit" value = "Select"></input>
        </form>
    <?php } 
?>