<?php
    require_once "../vendor/autoload.php";

    error_reporting(E_ALL);
ini_set('display_errors', '1');

    \App\areas::getInstance(json_decode(file_get_contents("php://input"), true))->getAllAreas();

/*     function autoload($class){
        $directories = array();     
        $directorio = dirname(__DIR__) . '/scripts';     
        $elementos = scandir($directorio);     
        foreach ($elementos as $elemento) {         
            $rutaElemento = $directorio . '/' . $elemento . '/';         
            if (is_dir($rutaElemento) && $elemento !== '.' && $elemento !== '..') {             
                $directories[] = $rutaElemento;         
            }     
        }
        $classFile = str_replace("\\","/", $class). ".php";

        foreach($directories as $directory){
            $file = $directory.$classFile;
            if (file_exists($file)){
                require $file;
                return;
            }
        }
    }

    spl_autoload_register("autoload"); */

    
?>
