<?php
	if(isset($_GET['submit']))
	{
		$file = fopen('user.txt', 'a');
		fwrite($file, "<b>".$_COOKIE['uname']."</b><br>". $_GET['sendAdmin']."<br>");
	}
?>
<html>
<body>
	<table  width="700px">
			<tr>
				<td height="20px" width="100px">
					<b><p style="font-size:20px">Admin</p></b>
				</td>
			</tr>
			<tr>
				<td height="20px" width="30px">
				<p style="font-size:20px">you are doing a great job</p></b>
				</td>
			</tr>
			
	</table>
	<?php 
				$file = fopen('user.txt', 'r');
				$data = fread($file, filesize('user.txt'));
				echo $data;

			?>
	<center><br><br><br><br>
		<table  width="700px">
			<tr>
				<td height="20px" width="100px">
					<form>
					<input name="sendAdmin" type="text">
				</td>
				<td>
				<input name="submit" type="submit" value="SEND">
			</form>
			</td>
			</tr>
		
	</center>
	
	</table>

</body>
</html>