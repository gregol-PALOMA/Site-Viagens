<?php
require_once('./../model/database.php');


class ImagemPHP
{
    public const DIRETORIO_IMG = './../imgs/';
    private static $ultimoUpload;

    public static function salvaImagem($file_input_name)
    {
        $erro = null;
        
        if (!file_exists(ImagemPHP::DIRETORIO_IMG)) { //Se não exsitir pasta, cria
            mkdir(ImagemPHP::DIRETORIO_IMG);
        }

        //caminho completo para salvar imagem
        $target_file = ImagemPHP::DIRETORIO_IMG . basename($_FILES[$file_input_name]["name"]);

        $ok = 1;
        //! $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //TODO: verifica se é um arquivo
        if (isset($_POST["submit"])) {
            
            $check = getimagesize($_FILES[$file_input_name]["tmp_name"]);
            if ($check == false) {
                $erro = new Exception("ARQUIVO NAO E IMAGEM.");
            }
        }

        //TODO: verifica se não é muito grande
        if ($_FILES[$file_input_name]["size"] > 1500000) {
            $erro = new Exception("ARQUIVO MUITO GRANDE!");
        }

        if ($erro != null) {
            throw $erro;
        } else {

            //TODO: move arquivo para pasta e retorna o caminho+nome
            $ok = move_uploaded_file($_FILES[$file_input_name]["tmp_name"], $target_file);
            if ($ok)
                return ImagemPHP::$ultimoUpload = htmlspecialchars( $target_file);
            else
                return null;
        }
    }
}
