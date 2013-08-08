<?php
header("Content-Type: application/javascript");
/*
	Derived from one of my project :p
*/
function is_Name($string) {
		if (!preg_match("/([@!#$%^&*()`'\"<>{}\[\],~?:;|\\+=_\/-])/", $string) && is_bool(strrpos($string, ".")))
			return true;
		else
			return false;
}
	if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && is_Name($_POST["name"]) && strlen($_POST["message"])>10 && strlen($_POST["message"])<500) {
			@mail("events@mozillaindia.org", $_POST["name"]." | Hive Request", $_POST["name"]."<".$_POST["email"].">"." sent a request from hive:\r\n".$_POST["message"]);
			echo "{data={error:1}}";
		} else {
			if (!isset($_POST["_ajax"])) {
				echo "Following Errors occured<br/>Name can only contains alphabets<br/>The Email address is not valid<br/>Message should be of length greater then 10 but less then 500 characters.";
				exit(0);
			} else {
				echo "{data={error:-1}}";
				exit(0);
			}
		}
	} else {
				echo "{data={error:-1}}";
				exit(0);
	}
?>