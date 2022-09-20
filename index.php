<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive quiz</title>
    <link rel = "stylesheet" href="./bootstrap.min (1).css"><link>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        if(file_exists("Quiz.json")){
            $info_quiz = file_get_contents("Quiz.json");
            $quiz = json_decode($info_quiz);
            $arr_length = count($quiz);
        }
        $random_questions = rand(0,$arr_length - 1); //agafar 5 preguntes aleatories

        $_SESSION["success"] = 0;
        $_SESSION["index"] = 0;
        $_SESSION["arr_questions"] = array(); //de moment agafa les 5 primeres preguntes per test
        $arr_questions = $_SESSION["arr_questions"];

        $MAX_QUESTIONS_ATZAR = 10;
        $j = 0;
        do{
            $random = rand(0,$arr_length - 1);
            if(!in_array($random,$arr_questions)){
                $arr_questions[] = $random;
                $j++;
            }
        }while($j < $MAX_QUESTIONS_ATZAR);
        $_SESSION["arr_questions"] = $arr_questions;
    ?>

    <form action = "question.php">
        <button class="btn btn-outline-warning centro">Start the quiz </button>
    </form>
</body>

</html>