<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Links Bootstrap--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!--Links CSS--> 
    <link href="./styles.css" rel="stylesheet">


    <?php
        //TODO: Se há mensagem msg na sessão, mostra com alerta
        if(isset($_SESSION['msg'])){
            $msg = $_SESSION['msg'];
            echo "<script>alert('$msg')</script>";
            unset($_SESSION['msg']); //!destroi variável $_SESSION['msg']
        }
    ?>

    <title>Escola Sesamo</title>
</head>
<body>
    <?php 
        require_once('./../model/viagens.class.php');
        require_once('./../model/database.php');

        //TODO: inclui a nav na pagina
        include('./../view/nav.php');
    ?>
    
    <div id="caixa-amostras" class="mb-5 mx-auto">
        <?php
            print_r(viagens::listarHTML());
        ?>
    </div>

</body>
<footer>

</footer>
</html>