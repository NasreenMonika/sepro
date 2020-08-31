<?php 
	if(isset($_POST['submit']))
	{
			$filedir=$_COOKIE['uname'].".png";
			move_uploaded_file($_FILES['picture']['tmp_name'], $filedir) ;
	}			
?>
<form method="post" enctype="multipart/form-data">
	<h1> PROFILE</h1> <input type="file" name="picture">
	<br>
	<input type="submit" name="submit">
	<img src=<?php
	echo '"'.$_COOKIE['uname'].".png".'"'; ?> width="200" height="200">
</form>