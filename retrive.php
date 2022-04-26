<?php
 session_start();
 if(isset($_POST['submit']))
 {
  $sr=$_POST['fname'];
  $_SESSION['sr']=$sr;
  session_start();
  echo "Your name is : ".$_SESSION['sr'];
 }
 session_destroy();