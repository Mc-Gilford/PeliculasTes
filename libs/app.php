<?php
require_once 'controllers/Errores.php';

class App{

    function __construct(){

        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        //var_dump($url);
        /*
            controlador->[0]
            metodo->[1]
            parameter->[2]
        */
        $url = explode('/', $url);

        // cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $archivoController = "controllers/Films.php";
            require_once $archivoController;
            $controller = new Films();
            $controller->loadModel("films");
            //$controller->render();
            return false;
        }
        else
        {
        $archivoController = 'controllers/' . $url[0] . '.php';
        error_log("APP:: archivo Controller $archivoController");
            if(file_exists($archivoController)){
                require_once $archivoController;

                // inicializar controlador
                $controller = new $url[0];
                $controller->loadModel($url[0]);
                // si hay un método que se requiere cargar
                if(isset($url[1])){
                    if(method_exists($controller, $url[1])){
                        if(isset($url[2])){
                            //el método tiene parámetros
                            //sacamos e # de parametros
                            $nparam = sizeof($url) - 2;
                            //crear un arreglo con los parametros
                            $params = [];
                            //iterar
                            for($i = 0; $i < $nparam; $i++){
                                array_push($params, $url[$i + 2]);
                            }
                            //pasarlos al metodo   
                            $controller->{$url[1]}($params);
                        }else{
                            $controller->{$url[1]}();    
                        }
                    }else{
                        error_log('No existe el metodo');
                        $controller = new Errores();
                        $controller->render();
                    }
                }else{
                    //$controller->render();
                }
            }   
            else{
                // No existe el archivo
                error_log('No existe el archivo');
                $controller = new Errores();
                $controller->render();
            }
        }
    }
}

?>