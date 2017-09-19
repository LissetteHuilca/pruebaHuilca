<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-23-23-248-247.compute-1.amazonaws.com");
define("DB_USER", "lgjgrefbvyumaf");
define("DB_PASS", "b9c2bb6707cccfda26a529e857c02f207e6f4534bf0ce6918cf047c43ba893ba");
define("DB_NAME", "d40ls4mc63goeo");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
