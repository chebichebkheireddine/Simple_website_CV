<?php
class  Databases{
    // Make connection 
    public $connection;

    // Call config file to Run Databases
    public function __construct($config)
    {
        // Make DNS file to run Mysql
        $dns="mysql:".http_build_query($config,"",";");
        dd($dns);
        $this->connection = new PDO($dns, "root", "",[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
        // dd(http_build_query($config,"",";"));
    }
    public function fetch($query){
        // connect to databsese
        $statement = $this->connection->prepare($query);
        $statement->execute();
        // To fetch all record 
        // return $statement->fetchAll(PDO::FETCH_ASSOC);
        // To fetch one record 
        return $statement->fetch();
    }
}
?>