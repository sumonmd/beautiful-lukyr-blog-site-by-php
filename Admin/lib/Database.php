<?php
include'config/config.php';
 class Database{
	 public $dbhost=db_host;
	 public $dbuser=db_user;
	 public $dbpass=db_pass;
	 public $dbname=db_name;
	 public $link;
	 public $error;
	 
	 public function __construct(){
		 $this->dbconnect();
	 }
	 
	 public function dbconnect(){
		 
		 $link=new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
		 if(!$this->link){
			 $this->error="connection failed";
			 return false;
		 }
	 }
	 public function insert($query){
		 $insert=$this->link->query($query) or die($this->link->error.__LINE__);
		 if($insert){
			 return $insert;
		 }
		 else{
			 return false;
		 }
	 }
 }



?>