<?php

    class Database{

        /**
         * Database Property
         */
        public $host = HOST;
        public $username = USERNAME;
        public $password = PASSWORD;
        public $bd_name = DB_NAME;

        /**
         * Flug Property
         */
        public $conn;
        public $error;

        /**
         * Database Connection Loaded
         */
        public function __construct()
        {
            $this->db_connection();
        }

        /**
         * Database Connection
         */
        public function db_connection(){
            $this->conn = new mysqli($this->host,$this->username,$this->password,$this->db_name);
            if (!$this->conn) {
                $this->error = 'Database Connection Failed.';
                return false;
            }
        }

        /**
         * Select Query
         */
        public function select($query){
            $result = mysqli_query($this->conn,$query) or die($this->conn->error.__LINE__);
            if (mysqli_num_rows($result) > 0) {
                return $result;
            }else{
                return false;
            }
        }

        /**
         * Insert Query
         */
        public function insert($query){
            $result = mysqli_query($this->conn,$query) or die($this->conn->error.__LINE__);
            if ($result) {
                return $result;
            }else{
                return false;
            }
        }

        /**
         * Update Query
         */
        public function update($query){
            $result = mysqli_query($this->conn,$query) or die($this->conn->error.__LINE__);
            if ($result) {
                return $result;
            }else{
                return false;
            }
        }


        /**
         * Delete Query
         */
        public function delete($query){
            $result = mysqli_query($this->conn,$query) or die($this->conn->error.__LINE__);
            if ($result) {
                return $result;
            }else{
                return false;
            }
        }


    }

?>