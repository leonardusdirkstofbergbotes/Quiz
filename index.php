<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz HomePage</title>

    <!-- The font that i use throughout the pages -->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    <form action="quiz.php" method="post">    
        <fieldset class="border mar_pad back_color animate_block" id="question1">
            <legend class="font_larger white back_blue border mar_pad animate_block">A basic HTML & CSS quiz</legend>
                <p class="font_large white mar_pad animate_block">So you think you got what it takes to <strong>ACE</strong> this simple HTML & CSS quiz? <br>
                <pre class="font_larger white mar_pad animate_block">
                If (feeling lucky) {</pre> </p><br>
                <input class="font_large glow_orange blue mar_pad border animate_block" type="text" name="name" placeholder="Enter your Name" required><br>
                    <p class="mar_pad white font_larger animate_block"> Once your ready press the button and start the quiz</p>
        </fieldset>
      <button class="font_larger white back_orange border mar_pad animate_block attention" type="submit">Start Quiz</button>
    </form>

   <script>
            //expand the name field if you hover over it
       $("input[type=text]").focus(function(){
            $(this).animate({
                width: "40%"
                }, 300);
            }).mouseleave(function(){
                $(this).animate({
                    width: '250px'
                },300);
            });
   </script>
</body>
</html>