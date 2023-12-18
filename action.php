<?php

require_once 'db.php';

$task = $_POST['task'];

$sql = "INSERT INTO tasks(task) VALUES('$task')";

$conn->exec($sql);

$conn = null;

header("Location: ". $_SERVER['HTTP_REFERER']);