<?
	if(!$_COOKIE["Coo_ID"]){
		echo "<script>
			alert(\"No Cookie.\");
			location.href = \"Main_Board.html\";
			</script>";
	}

	setcookie("Coo_ID", "", time() - 3600);
	echo "<script>location.href = \"Main_Board.html\";</script>";
?>