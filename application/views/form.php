<form action="<?php echo site_url('welcome/add') ?>" method="post">
	<table border="0" width="0" cellspacing="4">
	<tr>
		<td> Username </td><td> : </td><td><input type="text" name="nama"></td><br>
	</tr>
	<tr>
		<td> Password </td><td> : </td><td><input type="Password" name="pass" required="@" ></td><br>
	</tr>
	<tr>
		<td> Level </td><td> : </td><td><input type="text" name="level"></td>
	</tr>
	<tr>
		<td> Fullname </td><td> : </td><td><input type="text" name="fullname"></td><br>
	</tr>
	<tr>
		<td><input type="submit" value="Submit"></td>
	</tr>
		</table>
</form>