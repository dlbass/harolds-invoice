<?php namespace Invoice\DB;

$config = array(
	'username' => 'harolds2_user',
	'password' => 'JQ5HD^~}75?a',
	'database' => 'harolds2_harolds'
);

function connect($config) {
	try {
		$conn = new \PDO('mysql:host=localhost;dbname=' . $config['database'],
						$config['username'],
						$config['password']);
		$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		
		return $conn;
	} catch(Exception $e) {
		return false;
	}
}

function query($query, $bindings, $conn) {
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);
	return ($stmt->rowCount() > 0) ? $stmt : false;
}

function get($tableName, $conn, $limit = 50) {
	try {
		$result = $conn->query("SELECT * FROM $tableName ORDER BY id ASC LIMIT $limit");
		return ( $result->rowCount() > 0 )
			? $result
			: false;
	} catch(Exception $e) {
		return false;
	}
}

function get_by_id($table, $id, $conn)
{
	$query = query(
		"SELECT * FROM :table WHERE id = :id LIMIT 1",
		array(	'table' => $table,
				'id' => $id),
		$conn
	);
	
	if ( $query ) return $query->fetchAll();
}