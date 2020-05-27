<?
	$con = mysql_connect("localhost", "root", "apmsetup");
	$dbcon = mysql_select_db("getsipan", $con);
	$result = mysql_query("SELECT * from userinfo WHERE id = '".$_POST["fn_ID"]."'");
	$query = "insert into userinfo values('"
				.$_POST["fn_ID"].
				"', '"
				.$_POST["fn_PW"].
				"')";
	while($row = mysql_fetch_array($result, MYSQL_BOTH)){
		echo "
			<script>
				alert(\"이미 있는 아이디입니다.\");
				history.back();
			</script>";
		exit;
	}
	//$query =
	//insert into userinfo values('123', '125')
	//$query 자체엔 쌍따옴표로 묶어주지 않았는데 정상작동하는 이유?
	mysql_query($query);
	echo "
		<script>
			alert(\"회원가입에 성공했습니다.\");
			location.href = \"Main_Board.html\";
		</script>";	
?>