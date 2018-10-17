<html>
<head>
<title>Self Services Library System</title> 
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
</head>
<body>
<br>
<table width="1306" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td width="10" bgcolor="#80FF00">&nbsp;</td>
	<td width="140" height="120" bgcolor="#80FF00"><div align="center">SIAK</div></td>
	<td width="10" bgcolor="#80FF00">&nbsp;</td>
	<td width="1136" bgcolor="#80FF00"><div align="center"><span class="header">Self Services Library System<br><br></span>
	<b></b><span class="header"><br></span></div></td>
	<td width="10" bgcolor="#80FF00"></td>
</tr>
<tr bgcolor="#F8F8FF">
	<td>&nbsp;</td>
	<td height="27"><div align="left"><? echo "Tanggal : ".date("d-M-y");?></div></td>
	<td>&nbsp;</td>
	<td align="right">Selamat Datang &nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
	<td>&nbsp;</td>
	<td rowspan="4" valign="top"><table width="144" height="400" bgcolor="#80FF00" border="0" cellspacing="0" cellpadding="0" align="top">
		<tr>
		<td valign="top"><ul class="navbar">
			<li><b>MAIN MENU</b></li><br>
			<li><a href="index.php" title="Balik">&nbsp;Home</a></li>
            <li><a href="index.php?page=peminjaman" title="input data">&nbsp;Peminjaman</a></li>
            <li><a href="index.php?page=pengembalian" title="input data">&nbsp;Pengembalian</a></li>
			<li><a href="index.php?page=about" title="tentang programmer">&nbsp;About</a></li>
		</ul></td>
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
	<td rowspan="4" valign="top"><table width="1136" height="400" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="936" valign="top">
			<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'about': include "about.php"; break;
				case 'peminjaman' : include "peminjaman.php"; break;
				case 'pengembalian' : include "pengembalian.php"; break;
				case 'main' :
				default : include 'about.php';	
			}
			?></td>	
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>	
</tr>
<tr bgcolor="#80FF00">
	<td height="36" colspan="5" bgcolor="#80FF00"><div align="right" style="margin:0 10px 0 0;"><font color="#FFFFE0">Sugihnemen407@gmail.com</font><br></div></td>
</tr>
</table>
<div align="center"></div>
</body>
</html>