<?php

    include_once "Database.php";
    
    class Student
    {
        private $conn;
        private $table="studenti";

        public $id;
        public $ime;
        public $prezime;
        public $jmbag;

        public function __construct($db)
        {
            $this->conn=$db;
        }

        public function dohvatiSveStudente()
        {
            $query="SELECT * FROM ".$this->table;
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }

        public function dodajStudenta()
        {
            $query="INSERT INTO ".$this->table." (ime, prezime, jmbag) VALUES (:ime, :prezime, :jmbag)";
            $stmt=$this->conn->prepare($query);
            $this->ime=htmlspecialchars(strip_tags($this->ime));
            $this->prezime=htmlspecialchars(strip_tags($this->prezime));
            $this->jmbag=htmlspecialchars(strip_tags($this->jmbag));
            $stmt->bindParam(":ime",$this->ime);
            $stmt->bindParam(":prezime",$this->prezime);
            $stmt->bindParam(":jmbag",$this->jmbag);  
            if($stmt->execute())
            {
                return true;
                echo "Uspješno dodano u bazu!";
            }
            return false;
        }

    }

?>