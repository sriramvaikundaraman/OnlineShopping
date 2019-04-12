<html>
<head>
	<script>
	alert("Logged Out");
</script>
</head>
<body>
	
</body>
</html>
<?php
session_start();
if(session_destroy())
{
	header("Location:index.php");
}
?>
