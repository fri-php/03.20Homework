<html>

<head>

  <meta charset="utf-8">
  <title>A1083345 訂票結果</title>

</head>

<body bgcolor="#DFDFDF">

	<br/>

	<table bgcolor="black" align="center">

		<tr align="center">
			<th bgcolor="#4B4C4E" width="150"><font color="white">Name</font></th>
			<td bgcolor="white" width="300"><?php echo $name=$_POST["name"]; ?></td>
		</tr>

		<tr align="center">
			<th bgcolor="#4B4C4E"><font color="white">Student ID</font></th>
			<td bgcolor="white"><?php echo $id=$_POST["id"]; ?></td>
		</tr>

		<tr align="center">
			<th bgcolor="#4B4C4E"><font color="white">Gender</font></th>
			<td bgcolor="white"><?php echo $gender=$_POST["gender"]; ?></td>
		</tr>

		<tr align="center">
			<th bgcolor="#4B4C4E" rowspan="3"><font color="white">Ticket</font></th>
			<td bgcolor="white">regular: <?php echo $ticket_A=$_POST["ticket_A"]; ?></td>
		</tr>

		<tr align="center">
			<td bgcolor="white">senior: <?php echo $ticket_B=$_POST["ticket_B"]; ?></td>
		</tr>

		<tr align="center">
			<td bgcolor="white">disabled: <?php echo $ticket_C=$_POST["ticket_C"]; ?></td>
		</tr>

		<tr align="center">
			<th bgcolor="#4B4C4E"><font color="white">Start</font></th>
			<td bgcolor="white"><?php echo $start=$_POST["start"]; ?></td>
		</tr>

		<tr align="center">
			<th bgcolor="#4B4C4E"><font color="white">End</font></th>
			<td bgcolor="white"><?php echo $end=$_POST["end"]; ?></td>
		</tr>

		<tr align="center">
			<th bgcolor="#4B4C4E"><font color="white">Seat</font></th>
			<td bgcolor="white"><?php echo $seat=$_POST["seat"]; ?></td>
		</tr>

		<tr align="center">
			<th bgcolor="#4B4C4E"><font color="white">Phone</font></th>
			<td bgcolor="white"><?php echo $phone=$_POST["phone"]; ?></td>
		</tr>

		<tr align="center">
			<th bgcolor="#4B4C4E"><font color="white">E-mail</font></th>
			<td bgcolor="white"><?php echo $email=$_POST["email"]; ?></td>
		</tr>

		<tr>
			<th bgcolor="#4B4C4E"><font color="white">Comment</font></th>
			<td bgcolor="white"><?php echo nl2br(htmlspecialchars($comment=$_POST["comment"])); ?></td>
		</tr>

	</table>

</body>

</html>