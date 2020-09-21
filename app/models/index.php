<?php
  $host="localhost";
  $login="root";
  $password="";
  $dataBase="ugc";

  $mysqli = new mysqli($host, $login, $password, $dataBase);
  $mysqli->set_charset("utf8");

  if ($mysqli->connect_errno) {
  	echo "Failed to connect to MySQL : ".$mysqli->connect_error;

  	$mysqli ->close();
  }
