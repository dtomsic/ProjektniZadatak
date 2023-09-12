<?php

    include_once "Database.php";
    
    class Ocjena
    {
        private $conn;
        private $table="studenti";
        private $table2="ocjene";

        public $id;
        public $konacna_ocjena;
        public $fk_id_student;
       

        public function __construct($db)
        {
            $this->conn=$db;
        }

        public function dodajOcjenu()
        {
            $query="INSERT INTO ".$this->table2." (konacna_ocjena, fk_id_student) VALUES (:konacna_ocjena, :fk_id_student)";
            $stmt=$this->conn->prepare($query);
            $this->konacna_ocjena=htmlspecialchars(strip_tags($this->konacna_ocjena));
            $this->fk_id_student=htmlspecialchars(strip_tags($this->fk_id_student));
            $stmt->bindParam(":konacna_ocjena",$this->konacna_ocjena);
            $stmt->bindParam(":fk_id_student",$this->fk_id_student);
            if($stmt->execute())
            {
                return true;
            }
            return false;
        }

    }

?>