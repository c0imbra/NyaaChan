<!DOCTYPE html>
<html>
	<head>
		<title>NyaaChan - Anime</title>
		<link rel="icon" href="Favicon.png">
		<link rel="stylesheet" type="text/css" href="../../NyaaChan.css">
	</head>
	<body>
		<a href="../../Home" id="Title">NyaaChan</a>
		<div id="GroupTitle">/Anime/</div>

		<br>

		<center>
			<form action="CreateThread.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td><label><b>File</b></label></td>
						<td><input type="file" name="fileToUpload" id="fileToUpload" accept="image/x-png,image/gif,image/jpeg" required></td>
					</tr>
					<tr>
						<td><label><b>Comment</b></label></td>
						<td><textarea cols="30" rows="5" name="Comment" required></textarea></td>
					</tr>
					<tr align="center">
						<td colspan="2"><input type="submit" name="submit"value="Create Thread"></td>
					</tr>
				</table>
			</form>
		</center>

		<div id="Split"></div>

		<?php
		include 'SQL_Connection.php';

		$query = "SELECT * FROM threads";
		$result = $Connection->query($query);

		while($row = $result->fetch_array())
		{
			echo "<div id='Thread'>
				<img src='$row[ThreadFile]' id='ThreadIMG'>
				<div id='ThreadText'>
					<p>[Anonymous]  $row[ThreadID] <a href='Thread.php?ThreadID=$row[ThreadID]'>[Open Thread]</a></p>
					<p>$row[ThreadComment]</p>
				</div>
			</div>";
		}
		?>

		<?php include '../../Footer.php'; ?>
	</body>
</html>

<style type="text/css">
#Split
{
	width: 100%;
}
</style>