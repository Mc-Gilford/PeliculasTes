<?php
    //Nos sive para crear metodos que deben de ser implementados
    interface IModel{
        public function All();
        public function getActors($actor);
        public function getDirectors($actor);
    }
?>