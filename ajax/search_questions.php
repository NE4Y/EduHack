<?php
require_once '../inc/config.inc.php';
require_once '../classes/dbhandler.class.php';
require_once '../classes/db.class.php';
require_once '../classes/question.class.php';
require_once '../classes/hashtag.class.php';
DBHandler::initDB();

if(isset($_GET["q"]))
{
	$q = $_GET["q"];
	$keywords = explode(' ', $q);
	$search_result = Question::findManyByKeywords($keywords);
	header('Content-Type: application/json');
	echo json_encode($search_result);
}
else
{
	die("query string missing");
}