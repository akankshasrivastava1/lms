<?php 

class manage_profile_class
 {


 	public $host="localhost";
 	public $username="root";
 	public $pass="";
 	public $db_name="uniquedeveloper";
 	public $conn;
 	public $profile_list;
 	

 	public function __construct()
 	{
 		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
 		if ($this->conn->connect_errno)
 		 {
 			die("connection failed");
 		}
 	}

 	public function display_profile()
 	{
 		$query="select * from profile";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->profile_list[]=$row;
 		}
 		return $this->profile_list;
 	}
}

 ?>