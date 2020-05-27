<?
	$con = mysql_connect("localhost", "root", "apmsetup");
	$dbcon = mysql_select_db("getsipan", $con);
	$result = mysql_query("SELECT * FROM userinfo WHERE id = '".$_POST["fn_ID"]."' AND pw = '".$_POST["fn_PW"]."'");
	
	while($row = mysql_fetch_array($result, MYSQL_BOTH)) {		
		setcookie("Coo_ID", $row["id"]);
		echo "
			<script>
				alert(\"Login Success.\");
				location.href = \"Main_Board.html\";
			</script>
		";
		exit;
	}
	
	echo "
		<script>
			alert(\"LogIn Failed.\");
			history.back();
		</script>
	";
?>