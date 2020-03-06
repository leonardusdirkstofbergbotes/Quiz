<?php 
    session_start();

    $username = $_POST["name"];
    $_SESSION['username'] = $username; //to be used on other pages
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

    <h1 class="mar_pad font_larger blue" id="greeting">Hello <em class="orange"><?php echo $username ?></em></h1>

    <form method="post" action="result.php">
        <?php  
        include 'include/array.php';
            $number = 1;
                foreach ($master as $questionkey => $Options_array) {
                    echo "<fieldset class=\"border mar_pad back_color blue back_colorB rotate \" id=\"$number\">";
                    echo "<legend class=\"heading_color white border mar_pad font_larger\">$questionkey</legend><br>";
                        foreach($Options_array as $key => $Boolean_value) {
                        echo "<label class=\"font_larger blue\"><input type=\"radio\" class=\"mar_pad border enlarge\" value=\"$Boolean_value\" name=\"$questionkey\" required>$key</label><br>";
                    }
                    echo "</fieldset>";
                    $number++;
                }
        ?>

        <button class="font_larger heading_color border mar_pad white" type="submit"> Submit </button>
    </form>

</body>
</html>