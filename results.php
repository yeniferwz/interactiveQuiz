<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $MAX_QUESTIONS_ATZAR = 10;
        $info_quiz = file_get_contents("Quiz.json");
        $quiz = json_decode($info_quiz);
        $correct_answers = $_SESSION["success"];

        echo $correct_answers."/".$MAX_QUESTIONS_ATZAR. " right answers";
    ?>

    <form action = "index.php">
        <button>Start the quiz again</button>
    </form>
</body>
</html>
