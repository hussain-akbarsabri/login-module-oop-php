<?php 

include "db.php";

class dataOperation extends Database
{
	public function insertData($table, $fields)
	{
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (". implode(", ", array_keys($fields)).") VALUES";
		$sql .= "('".implode("', '", array_values($fields))."');";
		$query = mysqli_query($this->con,$sql);
		if ($query)
			return true;
	}

	public function fetch_record($table)
	{
		$sql = "SELECT * FROM ".$table.";";
		$arr = array();
		$query = mysqli_query($this->con,$sql);
		while ($row = mysqli_fetch_assoc($query)) {
			$arr[] = $row;
		}
		return $arr;
	}

	public function select_record($table,$where)
	{
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key."='".$value."'";
		}
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition.";";
		$query = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_array($query);
		return $row;
	}

	public function update_record($table, $where, $my_array)
	{
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key."='".$value."'";
		}
		foreach ($my_array as $key => $value) {
			$sql .= $key."='".$value."', ";
		}
		$sql = substr($sql, 0, -2);
		$sql = "UPDATE ".$table." SET ".$sql." WHERE ".$condition.";";
		if (mysqli_query($this->con,$sql)) {
			return true;
		}
	}

	public function delete_record($table,$where)
	{
		$sql="";
		$condition="";
		foreach ($where as $key => $value) {
			$condition .= $key."='".$value."'";
		}
		$sql = "DELETE FROM ".$table." WHERE ".$condition.";";
		if (mysqli_query($this->con,$sql)) {
			return true;
		}
	}
}

$obj = new dataOperation;

if (isset($_POST["reg"]))
{
	$my_array = array(
		'username' => $_POST["username"], 
		'email' => $_POST["email"],
		'Nationalid' => $_POST["nic"],
		'password' => $_POST["password"]);
	if ($obj->insertData("users", $my_array)) {
		header("location:index.php?msg=Record_Inserted_Successfully");
	}
}

if (isset($_POST["edit"]))
{
	$id = $_POST["id"];
	$where = array('userID' => $id);
	$my_array = array(
		'username' => $_POST["username"], 
		'email' => $_POST["email"],
		'Nationalid' => $_POST["nic"],
		'password' => $_POST["password"]);
	if ($obj->update_record("users", $where, $my_array)) {
		header("location:index.php?msg=Record_Updated_Successfully");
	}
}

if (isset($_GET["delete"])) {
	$id = $_GET["id"] ?? null;
	$where = array('userID' => $id);
	if ($obj->delete_record("users", $where)) {
		header("location:index.php?msg=Record_Deleted_Successfully");
	}
}

 ?>