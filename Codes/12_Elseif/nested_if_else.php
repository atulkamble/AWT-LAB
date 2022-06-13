<!DOCTYPE html>
<html>
<center>
    <head>
        <title>
            Nested If Else
        </title>
        <style>
            body {
                background-image: url("white.gif");
                background-color: grey;
            }
        </style>
    </head>
    <body>
        <h1>Topic: Statements</h1>
        <h2>SubTopic: Nested If Else Statement in PHP</h2>
        <?php
        // Setting the variable
        $native_language = "Marathi";
        // IF native language is French
        if ($native_language == "Hindi") {
            // Echo some Hindi!
            echo "Namastey!";
            // else if native language is Spanish   
        } else if ($native_language == "Marathi") {
            // Echo some Marathi!
            echo "Namaskar!";
            // ELSE native language is neither of the above
        } else {
            // Echo some english!
            echo "Hello!";
        }
        ?>
    </body>
</center>
</html>