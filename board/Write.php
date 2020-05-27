<?
	if(!$_POST["id"]){
		echo "<script>
			alert(\"로그인을 해 주세요.\");
			location.href = \"Main_Board.html\";
			</script>";
	}
	$con = mysql_connect("localhost", "root", "apmsetup");
	$dbcon = mysql_select_db("getsipan", $con);
	$query = "
	insert into getsipan(id, title, contents, date, hits, lastdate) values('"
	.$_POST["id"].
	"', '"
	.$_POST["title"].
	
	"', '"
	.$_POST["contents"].
	"',now(), '1', now())";
	mysql_query($query);
	echo "
		<script>
		alert(\"게시글이 저장되었습니다.\");
		location.href = \"Main_Board.html\";
		</script>";
?>