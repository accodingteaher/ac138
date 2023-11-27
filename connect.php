<?php
//ระบุ server username password ชื่อฐานข้อมูล
//ติดต่อกับฐานข้อมูล
$servername = "localhost";
$username = "teacherco1";
$password = "Lucky2518";
$dbname = "teacherco1_wp";
$conn = new mysqli($servername, $username, $password, $dbname);
//ให้ข้อมูลในฐานข้อมูลแสดงผลเป็นภาษาไทยได้
	$conn->query("SET character_set_results = utf8") or die('Error query: ' . mysqli_error());
        $conn->query("SET character_set_client = utf8") or die('Error query: ' . mysqli_error());
        $conn->query("SET character_set_connection = utf8") or die('Error query: ' . mysqli_error());
        $conn->query("SET NAMES 'utf8' COLLATE 'utf8_general_ci';") or die('Error query: ' . mysqli_error());
// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
}