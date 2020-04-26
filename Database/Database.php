<?php

Class Database{

	private $server_name=SERVER_NAME;
	private $user_name=USER_NAME;
	private $password=PASSWORD;
	private $db_name=DB_NAME;

	public $connect;
	public function __construct()
	{
		$this->Connection();
	}
	private function Connection()
	{

		$this->connect= new mysqli($this->server_name,$this->user_name,$this->password,$this->db_name);
		echo($this->connect ? "" : "NOT CONNECTED");
	}


	public function select($table,$condition)
	{
		$query="SELECT * FROM $table WHERE $condition";
		$select=$this->connect->query($query) or die("ERROR".__LINE__);
		if($this->connect->affected_rows>0)
		{
			return $select;
		}
		else
		{
			return false;
		}
	}

}

?>