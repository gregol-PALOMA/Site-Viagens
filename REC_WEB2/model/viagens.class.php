<?php
require_once('./../model/database.php');

class viagens{

    private $id;
    private $nome;
    private $descricao;
    private $path_imagem;

    //TODO: Cria um construtor para a classe
    public function __construct( $nome, $descricao, $path_imagem){

        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->path_imagem = $path_imagem;
    }


    //TODO: Cria getters para todos os atributos do objeto
    public function __get($n){
        return $this->$n;
    }

    //TODO: Cria setter para todos os atributos do objeto
    public function __set($nome, $value){
        if (property_exists('viagen', $nome)) {
            $this->$nome = $value;
        }else {
            null;
        }
    }


    public function cadastrarViagen(){

        //TODO: Faz a conexão com o Database
        $con = database::conecta();

        //TODO: Prepara o SQL com a tabela correta
        $stmt = $con->prepare("INSERT INTO viagem(nome, descricao, path_imagem) VALUES(:nome,:descricao, :path_imagem)");

        //TODO: Insere os valores no comando
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':descricao', $this->descricao);
        $stmt->bindValue(':path_imagem', $this->path_imagem);

        //TODO: Executa o comando
        $stmt->execute();

    }

    public static function listarViagens(){

        $viagens = array();

        //TODO: Faz a conexão com o Database
        $con = database::conecta();

        //TODO: Prepara o SQL com a tabela correta
        $stmt = $con->prepare("SELECT * FROM viagem");


        //TODO: Executa o comando
        $stmt->execute();

        while ($linha = $stmt->fetch()) {
            $v = new viagens(
                mb_strtoupper($linha['nome']),
                $linha['descricao'],
                $linha['path_imagem'],
            );

            $v->id = $linha['id'];

            $viagens[] = $v;
        }

        return $viagens;
    }

    public static function listarHTML(){
        foreach(viagens::listarViagens() as $viagen){
            echo"
                <div>
                    <button class=\"justify-content-between\">{$viagen->nome} 
                    <a href=\"./../controller/viagensController.php?act=delete&id={$viagen->id}\"><span class=\"material-symbols-outlined\">close</span><span class=\"material-symbols-outlined\">
                    done</span></a></button>
                    <img src=\"{$viagen->path_imagem}\" alt=\"foto-imagem\">
                    <p>{$viagen->descricao}</p>
                </div>";
        }
    }

    public static function apagar($id){
        try {
        //TODO: Faz a conexão com o Database
        $con = database::conecta();

        //TODO: Prepara o SQL com a tabela correta
        $stmt = $con->prepare("DELETE FROM viagem WHERE id=:id");
        $stmt -> bindParam(':id', $id);
        
        //TODO: Executa o comando
        return $stmt->execute();

        
        } catch (PDOException $e) {
            die("Erro ao excluir viagen".$e->getMessage());
        }
    }

}