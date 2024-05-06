<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

// connect to our MySQL db
$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

//RULE: when accepting user input from a string or form, never inline as part of a sql query
$query= "select * from posts where id = ?"; //instead of '?' you can also use :'name of key'

$posts = $db->query($query, [$id])->fetchAll( ); //second arg would then need to be [':'name of key'' => $'name of var'

dd($posts);