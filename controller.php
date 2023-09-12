<?php

    include_once "ModelStudenti.php";
    include_once "ViewStudenti.php";

    class StudentiController
    {
        private $model;
        private $view;

        public function __construct($model,$view)
        {
            $this->model=$model;
            $this->view=$view;
        }

        public function prikaziSveStudente()
        {
            $biljeske=$this->model->dohvatiSveStudente()->fetchAll(PDO::FETCH_ASSOC);
            $this->view->prikaziStudente($biljeske);
        }

        public function dodajBiljesku($ime, $prezime, $jmbag)
        {
            $this->model->ime=$ime;
            $this->model->prezime=$prezime;
            $this->model->jmbag=$jmbag;
            $this->model->dodajStudenta();
        }
    }

?>