<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Links Bootstrap--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!--Links IconsGoogle--> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
</head>
<body>
    <div class="shadow-sm bg-white rounded">
        <nav class="navbar bg-transparent text-dark mx-5">
            <div class="container-fluid bg-transparent justify-content-between">
                <a class="navbar-brand" href="./../view/menu.php">
                    <img src="https://image.freepik.com/vetores-gratis/modelo-de-logotipo-de-viagens-com-mapa-e-aviao_23-2148615383.jpg" alt="Logo" width="auto" height="100" >
                </a>

                <a href="./../controller/viagensController.php?act=cad" id="botao-cadastro">
                    <span class="material-symbols-outlined">library_add</span>
                </a>
            </div>
        </nav>
    </div>
    
</body>
</html>