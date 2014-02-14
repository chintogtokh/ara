<?php 

session_start();
error_reporting(E_ALL);  // will report any errors your code may have
ini_set("display_errors", 1); // will display those errors


define("ARA_PATH", "/var/ara/src");

/* ARA version */
define("ARA_VERSION", "0.6");

/* access levels */
define("ARA_ACCESS_NONE",     1); /* guess :) */
define("ARA_ACCESS_VIEW",     2); /* can view (without valuable information */
define("ARA_ACCESS_VIEW_ALL", 3); /* can view everything */
define("ARA_ACCESS_EDIT",     4); /* saving of forms */
define("ARA_ACCESS_ALL",      5); /* Charlie Root */


$username = $_POST['username'];
$password = $_POST['password'];

require_once "../config/config.php";

if ($config["use_auth"]) {
	if (file_exists("../config/users/" .$username .  ".php")) {
		require "../config/users/" . $username . ".php";
		if (isset($ara_user["pass"])) {
			if ($ara_user["pass"] == $password) {
				$_SESSION['loggedin'] = true;
				header("Location: index.php");
			}
			else{
				header("Location: login.php?msg=WRONG");
			}
		}
		//$_SESSION['loggedin'] = true;
		//header("Location: index.php");
	}
	else{
		header("Location: login.php?msg=WRONG");
	}
}
else{
	header("Location: index.php");
}

?>