<?php
    session_start();
    $info_quiz = file_get_contents("Quiz.json");
    $quiz = json_decode($info_quiz);

    $id_answer = $_GET["id_answer"]; //agafa data del input type hide de question.php
    $index = $_SESSION["index"];
    $id_question = $_SESSION["arr_questions"][$index];
    $success = $_SESSION["success"];

    //si el index correcte del index del vector es igual al valor de la resposta
    if($quiz[$id_question]->correctIndex == $id_answer){
        echo "Correct! ";
        $success++;
    }else{
        echo "Incorrect! ";
    }

    $index++;
    $_SESSION["index"] = $index;
    $_SESSION["success"] = $success;
?>


<?php 
    if($index == 5){ ?>
        <form action ="results.php">
            <input type ="submit" value="Check the results"></input>
        </form>
        <?php 
    }else {?>
        <form action = "question.php">
            <button>Next Questions</button>
    </form>
    <?php
    }
?>