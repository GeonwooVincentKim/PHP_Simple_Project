<?php

  error_reporting(E_ALL);

  ini_set('display_errors', '1');



  $noticeSeq = $_POST["noticeSeq"];

  $subject = $_POST["subject"];

  $contents = $_POST["contents"];



 $conn = mysqli_connect("localhost", "root", "iL0ve64Ever!", "sdhs");



  $sql = "  UPDATE SDHS_NOTICE ";

  $sql .= "   SET SUBJECT = '$subject', ";

  $sql .= "   CONTENTS = '$contents' ";

  $sql .= " WHERE NOTICE_SEQ = $noticeSeq ";



  mysqli_query($conn, $sql);



  Header("Location: /index.php"); 

?>