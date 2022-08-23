<?php
    namespace app\Core;
    use mysqli;
    class Database {
        public function connect()
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "asm_php2";

            $conn = new mysqli($servername,$username,$password,$dbname);
            if(!$conn){
                die("Connection failed: ".$conn->connect_error());
            }
           return $conn;

        }
        public function HelloWorld(){
            echo "Hello World";
        }
    }
?>