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
	if (isset($_POST["name"]) && isset($_POST["email"])) {
		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && is_Name($_POST["name"])) {
			@mail("events@mozillaindia.org", $_POST["name"]." | Hive Signup", $_POST["name"]."<".$_POST["email"].">"." sent a hve signup request from hive:\r\n");
			echo "{data={error:1}}";
		} else {
			if (!isset($_POST["_ajax"])) {
				echo "Following Errors occured<br/>Name can only contains alphabets<br/>The Email address is not valid<br/>";
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