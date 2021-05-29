<?php


class DBController
{
    // Database Connection Properties
    protected $host = 'wrapngo.ezyro.com';
    protected $user = 'eezyro_28728121';
    protected $password = 'kh674bfyxl';
    protected $database = "epiz_28698417";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
