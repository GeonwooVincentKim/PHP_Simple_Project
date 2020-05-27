<?php

  error_reporting(E_ALL);

  ini_set('display_errors', '1');



  $noticeSeq = $_POST["noticeSeq"];



  $conn = mysqli_connect("localhost", "root", "iL0ve64Ever!", "sdhs");



  $sql = "  DELETE FROM SDHS_NOTICE ";

  $sql .= " WHERE NOTICE_SEQ = $noticeSeq ";



  echo $sql;



  mysqli_query($conn, $sql);



  Header("Location: /index.php"); 

?>