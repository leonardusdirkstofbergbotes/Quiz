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
        //tally the score from each correct answer
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
            //different result message for different cases
        switch ($score) {
            case $score < 10:
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

            //an appropaite image and audio for the different cases 
    echo "<img class=\"image\" id=\"award\" src=\"images/$var\"><br>";
    echo "<audio id=\"my_audio\" src=\"sound/$sound\"></audio>";
    echo "<p class=\"mar_pad font_larger white\">you scored <em class=\"orange\">$score </em> out of 20</p>";
    ?>
    <img class="top down" src="images/confetti.png"> 

</fieldset>

<?php 
    if ($score < 10) {
        echo "<a href=\"quiz.php\"><button class=\"mar_pad back_orange font_larger border white\">Try again</button></a>";
    }
?>

<script>
        //lower the volume of the audio file
    $('#my_audio').prop("volume", 0.2);

        //let the audio play ONLY once the page has been FULLY loaded
    $(document).ready(function() {
        $("#my_audio").get(0).play();
    });

</script>



</body>
</html>