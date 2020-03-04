<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz HomePage</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <form action="quiz.php" method="post">    
        <fieldset class="border mar_pad back_color animate_block" id="question1">
            <legend class="font_larger heading_color border mar_pad animate_block">A basic HTML & CSS quiz</legend>
                <p class="font_larger mar_pad animate_block">So you think you got what it takes to <strong>ACE</strong> this simple HTML & CSS quiz? <br>
                    <pre class="font_larger mar_pad animate_block">
                    If (feeling lucky) {</pre> </p><br>
                        <input class="font_large mar_pad border animate_block" type="text" name="name" placeholder="Enter your Name"><br>
                            <p class="mar_pad font_larger animate_block"> Once your ready press the button and start the quiz</p>
        </fieldset>
      <button class="font_larger heading_color border mar_pad animate_block attention" type="submit">Start Quiz</button>
    </form>
  
</body>
</html>