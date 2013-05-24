<?php

require 'functions.php';
require 'db.php';
require 'class/classes.php';

//Connect to the db
$conn = Invoice\DB\connect($config);
if ( !$conn ) die('Problem connecting to the db.');