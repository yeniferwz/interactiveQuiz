<?php
    session_start();
    $info_quiz = file_get_contents("Quiz.json");
    $quiz = json_decode($info_quiz);
    $correct_answers = $_SESSION["success"];

    echo $correct_answers."/5 right answers";
?>

<form action = "index.php">
    <button>Start the quiz again</button>
</form>