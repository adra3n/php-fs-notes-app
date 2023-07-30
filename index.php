
<?php

require 'functions.php';
// require 'router.php';

class Database{

    public $connection;
    public function __construct(){
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }
    public function querry($querry){

        $statement = $this->connection->prepare("select * from posts");
        $statement->execute();

        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($posts as $post) {
            echo "<li>" . $post['title'] . "</li>";
        }
    }


}