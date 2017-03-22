<?php
$host = "localhost";
$user = "it58160421";
$passwd = "27798619l30x";
$dbname = "it58160421";
$conn = new mysqli($host,$user,$passwd,$dbname);
$conn->query('SET NAMES UTF8');
$query ="SELECT * FROM register NATURAL JOIN provinces WHERE register.PROVINCE_ID=provinces.PROVINCE_ID ";
$result = $conn->query($query);
?>
<html>
<head>
<title>Register</title>
<meta charset="UTF-8">
<br>
<center><b><font size="5">รายชื่อผู้ลงทะเบียน</font></center>
<br>
</head>
<style>
	.black-ribbon {
  position: fixed;
  z-index: 9999;
  width: 70px;
}
@media only all and (min-width: 768px) {
  .black-ribbon {
    width: auto;
  }
}
.stick-left { left: 0; }
.stick-right { right: 0; }
.stick-top { top: 0; }
.stick-bottom { bottom: 0; }
</style>
<img src="http://image.coolz-server.com/s/VgJDQdCt" class="black-ribbon stick-top stick-left"/>
<body bgcolor="#00FF7F">
<table align=center border=1>
<tr>
<td align=center>#</td>
<td align=center>ชื่อ</td>
<td align=center>อีเมล์</td>
<td align=center>เพศ</td>
<td align=center>ความสนใจ</td>
<td align=center>ที่อยู่</td>
<td align=center>จังหวัด</td>
</tr>
<?php while ($row = $result->fetch_array()) { ?>
<tr>
<td align=center><?php echo $row['id']; ?></td>
<td align=center><?php echo $row['name']; ?></td>
<td align=center><?php echo $row['email']; ?></td>
<td align=center><?php echo $row['sex']; ?></td>
<td align=center><?php echo $row['intr1']; ?><?php if ($row['intr1'] != '') echo "<br>"; ?><?php echo $row['intr2']; ?></td>
<td align=center><?php echo $row['address']; ?></td>
<td align=center><?php echo $row['PROVINCE_NAME']; ?></td>
</tr>
<?php }
$result->close();
?>
</table><br>
    <center><button type="button"><a href="http://angsila.cs.buu.ac.th/~58160421/887371/lab07/register_form.php" style="text-decoration: none;">
		Register
	</a></button>
</body>
<html>