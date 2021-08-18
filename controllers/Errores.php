<?php
class Errores extends Controller{

    function __construct(){
        parent::__construct();
        error_log('Error construct -> Inicio');
    }

    function render(){
        $this->view->render("error");

    }
}
?>