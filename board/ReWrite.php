<?
	if(!$_POST["num"]){
		echo "<script>
			alert(\"올바른 접근이 아닙니다.\");
			location.href = \"Main_Board.html\";
			</script>";
	}
	$con = mysql_connect("localhost", "root", "apmsetup");
	$dbcon = mysql_select_db("getsipan", $con);
	$result = mysql_query("SELECT * from getsipan WHERE num = '".$_POST["num"]."'");
	$row = mysql_fetch_array($result, MYSQL_BOTH);
	$query = "
	UPDATE getsipan SET title = '".$row["title"]."', contents = '".$row["contents"]."', lastdate = now() WHERE num = '".$row["num"]."'";
	mysql_query($query);
	echo "
		<script>
		alert(\"게시글이 저장되었습니다.\");
		location.href = \"Main_Board.html\";
		</script>";
?>