<?php

  error_reporting(E_ALL);

  ini_set('display_errors', '1');



  $subject = $_POST["subject"];

  $contents = $_POST["contents"];



  $conn = mysqli_connect("localhost", "root", "iL0ve64Ever!", "sdhs");



  $sql = " INSERT INTO SDHS_NOTICE(SUBJECT, CONTENTS, REG_DT) ";

  $sql .= " VALUES ('$subject', '$contents', NOW()) ";



  echo $sql;



  mysqli_query($conn, $sql);



  Header("Location: /index.php"); 

?>