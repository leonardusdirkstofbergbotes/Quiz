<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="css/styles01.css">
</head>
<body>
<?php 
    $score=0;
    foreach ($_POST as $userInput) {
        if ($userInput == 'd') {
        $score++;
        }
    };
?>


</body>
</html>