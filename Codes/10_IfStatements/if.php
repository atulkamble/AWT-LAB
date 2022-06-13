<!DOCTYPE html>
<html>
<center>
    <head>
        <title>
            If
        </title>
        <link rel="icon" type="image/x-icon" href="/home/atul/mit/10_IfStatements/favicon.ico">
        <style>
            body {
                background-image: url("paper.gif");
                background-color: darkcyan;
            }
        </style>
    </head>

    <body>
        <p>style="color:white"> White </p>
        <p>style="color:green"> Green </p>
        <p>style="color:blue"> Blue </p>
        <h1>Topic: Statements</h1>
        <h2>SubTopic: If Statement in PHP</h2>
        <?php
        // Set some variables
        $a = 20;
        $b = 50;
        if ($a < $b) {
            echo "$a is less than $b.";
        }
        ?>
    </body>
</center> 
</html>