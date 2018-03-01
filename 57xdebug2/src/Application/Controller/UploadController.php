<?php
/**
 * Created by PhpStorm.
 * User: Manel
 * Date: 10/02/2018
 * Time: 20:52
 */

namespace Application\Controller;

use Twig_Environment;

class UploadController
{
    private $twig;

    public function __construct(Twig_Environment $twig)
    {
        $this->twig = $twig;
    }
    public function index()
    {
        $errors= $success='';
        if(isset($_FILES['file'])){
            $file=$_FILES['file']['name'];
            if(!is_dir("uploads/")){
                mkdir("uploads/",0777);
            }

            if($file && move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$file)){
                $success="Archivo subido";
            }else{
                $errors="El archivo no se pudo subir";
            }
        }
        echo $this->twig->render("uploads.twig",['errors=>$errors', 'success'=>$success]);
    }
}