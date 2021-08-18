<?php
class Controller{
    function __construct(){
        $this->view = new View();
    }
    function loadModel($model)
    {
        $url = 'models/'.$model.'Model.php';
        error_log("Nombre de modelo $url");
        if(file_exists($url))
        {
            require_once($url);
            $modelName = $model."Model";
            $this->model = new $modelName();
            $data["envios"]=$this->model->getAll();
            //$actores=$this->model->getActors(1);
            require_once "views/".$model.".php";
        }
        else{
            error_log("No encontro el archivo Model");
        }
    }
    function existPOST($params)
    {
        foreach ($params as $param) {
            if(!isset($_POST[$param])){
                error_log("ExistPOST: No existe el parametro $param" );
                return false;
            }
        }
        error_log( "ExistPOST: Existen parámetros" );
        return true;
    }

    function existGET($params)
    {
        foreach ($params as $param) {
            if(!isset($_GET[$param])){
                return false;
            }
        }
        return true;
    }

    function getGet($name)
    {
        return $_GET[$name];
    }

    function getPost($name)
    {
        return $_POST[$name];
    }

    function redirect($url, $mensajes = [])
    {
        $data = [];
        $params = '';
        
        foreach ($mensajes as $key => $value) {
            array_push($data, $key . '=' . $value);
        }
        $params = join('&', $data);
        
        if($params != ''){
            $params = '?' . $params;
        }
        header('location: ' . constant('URL') . $url . $params);
    }
}
?>