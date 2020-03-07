<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

    $name = $_SESSION['username'];
?>

<fieldset class="border box mar_pad no_pad back_color animate_block" id="result">
<!-- <p class="mar_pad font_larger white growing"><br><br> Well done <?php echo $_SESSION['username'] ?> You scored <br><br> <?php echo $score ?> <br>--<br>20</p>-->
        
        <?php
        switch ($score) {
            case $score < 9:
                $var = "thumbsDown.png";
                $sound = "sad.mp3";
                echo "<h2 class=\"mar_pad font_larger blue\">You will need some more practice $name<h2>";
            break;
            case $score < 15:
                $var = "thumbsUp.png";
                $sound = "small_clap.mp3";
                echo "<h2 class=\"mar_pad font_larger blue\">You are getting there $name, Practice makes perfect<h2>";
            break;
            case $score < 19:
                $var = "star.png";
                $sound = "small_clap.mp3";
                echo "<h2 class=\"mar_pad font_larger blue\">Well done $name, You are a star<h2>";
            break;
            case $score = 20:
                $var = "trophy.png";
                $sound = "crowd.mp3";
                echo "<h2 class=\"mar_pad font_larger blue\">You ACED the quiz $name. You are a coding JEDI<h2>";    
            break;
        }

    echo "<img class=\"image\" id=\"award\" src=\"images/$var\"><br>";
    echo "<p class=\"mar_pad font_larger white\">you scored <em class=\"orange\">$score </em> out of 20</p>";
    ?>
    <img class="top down" src="images/confetti.png"> 

    <?php echo "<audio id=\"my_audio\" src=\"sound/$sound\"></audio>" ?>
</fieldset>

<script>
    $('#my_audio').prop("volume", 0.2);

    $(document).ready(function() {
        $("#my_audio").get(0).play();
    });

</script>

<?php session_destroy() ?>

</body>
</html>