<?php
// *** Logout the current user.
$logoutGoTo = "../index.php";
if (!isset($_SESSION)) {
  session_start();
}
session_destroy();
if ($logoutGoTo != "") {header("Location: $logoutGoTo");
exit;
}
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
</head>

<body>
</body>
</html>
