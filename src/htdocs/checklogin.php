<?php 

session_start();
error_reporting(E_ALL);  // will report any errors your code may have
ini_set("display_errors", 1); // will display those errors

$username = $_POST['username'];
$password = $_POST['password'];

echo $username;
echo $password;

require_once "../config/config.php";

if ($config["use_auth"]) {
	echo "use auth";
	if (file_exists("../config/users/" .$username .  ".php")) {
		require "../config/users/" . $username . ".php";
		if (isset($ara_user["pass"])) {
			if ($ara_user["pass"] == $password) {
				echo "OK";
				$_SESSION['loggedin'] = true;
				header("Location: index.php");
			}
		}
		//$_SESSION['loggedin'] = true;
		//header("Location: index.php");
	}
}

?>