<?php
class db{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'classes';
    public $PDO;

    public function __construct($host = null, $username = null, $password = null, $database = null)
    {
        if ($host != null) {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }
    }
    public function connectDb(){
    
    try {
        $this->PDO = new PDO(
            'mysql:host=' . $this->host . 
            ';dbname=' . $this->database,
            $this->username,
            $this->password,
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            )
        );
        return $this->PDO;
    } catch (PDOException $e) {
        print_r("Erreur de connexion à la base de données : " . $e->getMessage() . "<br/>");
        die();
        
    }
}
    public function destructeur(){
    echo 'déconnecté';

}
    public function close(){
echo 'vous etes bien déconnecté';
}

    public function execute($query){

    var_dump($query);
}
    public function getLastQuery(){

    }

    public function getLastResult(){

    }

    public function getTables(){

    }

    public function getFields($table){

    }

}


?>
