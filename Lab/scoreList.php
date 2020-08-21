<?php
    $scoreList = Array(100, 95, 55, 60, 50);
    $viewModel = [];
    foreach($scoreList as $score) {
        $student = (object) ["score" => $score, "style" => ""];
        if($score >= 60){
            $student->style = "pass";
        }
        else{
            $student->style = "fail";
        }
        $viewModel[] = $student;
    }

    // $obj = (object) ["firstName" => "Paul", "lastName" => "Chen"];
    // var_dump($obj);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .fail {
        color: red;
    }
    .pass {
        color: green;
    }
    </style>
</head>
<body>
    <ul>
        <?php foreach($viewModel as $student) { ?>
            <li class="<?php echo $student->style ?>"><?php echo $student->score ?></li>
        <?php } ?>
    </ul>
</body>
</html>