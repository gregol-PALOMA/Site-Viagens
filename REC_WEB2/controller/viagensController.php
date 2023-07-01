<?php 
    require('./../model/database.php');
    require('./../model/viagens.class.php');
    require('./../model/Imagem.class.php');

    if(isset($_GET['act'])&& $_GET['act'] == 'delete'){//veio pedido de delete
        if(!isset($_GET['id'])){
            die("ID não informado");
        }else {
            $id = $_GET['id'];
            $deuCerto = viagens::apagar($id);

            $_SESSION['msg'] = $deuCerto ?
            'Registro excluido' : "DEU PAU";

            header('location:./../view/menu.php');
            exit;
        }
    }
    else if(isset($_GET['act']) && $_GET['act']=='cad'){ //veio novo cadastro
        include('./../view/cadastroViagens.php');
        
    }
    else if(isset($_POST['act']) && $_POST['act']== 'save'){ //salva cadastro que veio


        //TODO: salva imagem que vem do form
        $caminho = ImagemPHP::salvaImagem('imagem');

        //TODO: cria objeto materia
        $v = new viagens($_POST['nome'], $_POST['descricao'], $caminho, $_POST['favorito']);

        //TODO: tenta salvar objeto
        $salvou = $v->cadastrarViagen();

        $_SESSION['msg'] = $salvou? 'salvou com sucesso' : 'DEU PAU';
        

        header('location:./../view/menu.php');
        exit;
    }
?>