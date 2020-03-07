<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="css/styles.css">
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

<fieldset class="border box mar_pad no_pad back_color animate_block" id="result">
<p class="mar_pad font_larger white growing"><br><br> Well done <?php echo $_SESSION['username'] ?> You scored <br><br> <?php echo $score ?> <br>--<br>20</p>
        <img class="top down" src="images/confetti.png">
</fieldset>


</body>
</html>