<?php

  error_reporting(E_ALL);

  ini_set('display_errors', '1');



  $noticeSeq = $_GET["noticeSeq"];



  $conn = mysqli_connect("localhost", "root", "iL0ve64Ever!", "sdhs");



  $sql = "  SELECT ";

  $sql .= "   NOTICE_SEQ, ";

  $sql .= "   SUBJECT, ";

  $sql .= "   CONTENTS, ";

  $sql .= "   REG_DT ";

  $sql .= " FROM SDHS_NOTICE ";

  $sql .= " WHERE NOTICE_SEQ = $noticeSeq ";



  $result = mysqli_query($conn, $sql);



  $row = mysqli_fetch_array($result);

?>

<html>

<head>

  <title>수정</title>

</head>

<body>



<form action="/modify.php" method="post">

<input type="hidden" name="noticeSeq" value="<?php echo $noticeSeq ?>" />

<div style="width: 400px">

 <h1>게시판</h1>



 <table border="2" bgcolor="white" style="width: 100%">



  <tr>

   <th>제목</th>

   <td><input type="text" name="subject" style="width: 100%;" value="<?php echo $row["SUBJECT"] ?>" /></td>

  </tr>



  <tr>

   <th>내용</th>

   <td>

      <textarea name="contents" style="width: 100%; height: 300px;"><?php echo $row["SUBJECT"] ?></textarea>

   </td>

  </tr>



 </table>

 <br>

 <div style="text-align: center;">

  <button type="submit">저장</button>

 </div>

</div>

</form>



</body>

</html>