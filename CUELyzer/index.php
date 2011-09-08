<html>
<head>
	<title>CUELyzer</title>
</head>
<body>
<center>
	
<img src="./images/logo.png" />

<form enctype="multipart/form-data" action="analyse.php" method="post">
	<input type="hidden" name="max_file_size" value="1000" />
	CUE-Datei: <input name="upload" type="file" />
	<br /><br />
	<input type="submit" value="Analysieren" />
</form>
	
</center>
</body>
</html>