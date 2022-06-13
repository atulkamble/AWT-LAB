<html>
   <center>
   <head>
      <title>
         Logical Operators
      </title>
      <style>
            body {
                background-image: url("white.gif");
                background-color: grey;
            }
        </style>
   </head>
   
   <body>
      <h1>Logical Operators</h1>
      <?php
         $a = t;
         $b = f;
         
         if( $a && $b ) {
            echo "TEST1 : Both a and b are true<br/>";
         }else{
            echo "TEST1 : Either a or b is false<br/>";
         }
         
         if( $a and $b ) {
            echo "TEST2 : Both a and b are true<br/>";
         }else{
            echo "TEST2 : Either a or b is false<br/>";
         }
         
         if( $a || $b ) {
            echo "TEST3 : Either a or b is true<br/>";
         }else{
            echo "TEST3 : Both a and b are false<br/>";
         }
         
         if( $a or $b ) {
            echo "TEST4 : Either a or b is true<br/>";
         }else {
            echo "TEST4 : Both a and b are false<br/>";
         }
         
         $a = t;
         $b = t;
         
         if( $a ) {
            echo "TEST5 : a is true <br/>";
         }else {
            echo "TEST5 : a  is false<br/>";
         }
         
         if( $b ) {
            echo "TEST6 : b is true <br/>";
         }else {
            echo "TEST6 : b  is false<br/>";
         }
         
         if( !$a ) {
            echo "TEST7 : a is true <br/>";
         }else {
            echo "TEST7 : a  is false<br/>";
         }
         
         if( !$b ) {
            echo "TEST8 : b is true <br/>";
         }else {
            echo "TEST8 : b  is false<br/>";
         }
      ?>
      
   </body>
   </center>
</html>