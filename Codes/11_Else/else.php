<!DOCTYPE html>
<html>
<center>
    <head>
        <title>
            Else
        </title>
        <style>
            body {
                background-image: url("gamer.gif");
                background-color: whitesmoke;
            }
        </style>
    </head>
    <body>
        <h1>Topic: Statements</h1>
        <h2>SubTopic: Else Statement in PHP</h2>
        <?php
        $fav_fruit = "mango";
        if ($fav_fruit == "pineapple") {
            echo "Pineapple is the best.";
        } else {
            echo "I like mango";
        }
        ?>
    </body>
</center>
</html>