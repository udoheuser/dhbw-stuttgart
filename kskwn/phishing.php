<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Willkommen im Club</title>
</head>

<body>
	<h1>Willkommen im Club der Phishing-Opfer!</h1>
  <p>Wir haben ihre Zugangsdaten in unserer Datenbank gespeichert und werden bei nächster Gelegenheit ihr Bankkonto leerräumen.</p>
  <ul>
  	<li>Konto-Nummer: <?php echo $_POST["konto"]; ?></li>
  	<li>Ihre PIN: <?php echo $_POST["pin"]; ?></li>
  </ul>
</body>
</html>
