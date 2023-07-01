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
    
    <style>
        body{
            background-image: url('https://img.freepik.com/vetores-premium/linhas-abstratas-labirinto-fundo-branco-sem-costura_676326-501.jpg');
            background-position: center;
            background-repeat: repeat;
            background-size: 7%;
            background-color: #fff;
            overflow-x: hidden;
        }

        #div{
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            transition: 0.7s;
        }

        form input, textarea{
            margin-top: 2vh;
            background-color: transparent;
            padding: 2% 2% 2% 1%;
            display:block;
            width: 100%;
            border: none;
            border-bottom: 0.5px solid #ffffff;;
        }

        input:focus, input:visited, textarea { outline:none; }

        input[type="file"]::-webkit-file-upload-button {
            width: auto;
            height: auto;
            padding: 2%;
            background-color: #3baea0;
            color: white;
            border: none;
            border-radius: 5%;
            content: icon;
        }

        /*BOTAO DE CADASTRO DE MATERIAIS */
        #botao-cadastro {
                width: 3rem;
                height: 3rem;
                cursor: pointer;
                background-color: #3baea0;
                border: none;
                border-radius: 50%;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                transition: 200ms;
            }

            #botao-cadastro:hover {
                box-shadow: rgba(111, 111, 112, 0.2) 0px 9px 32px 0px;
                width: 3.1rem;
                height: 3.1rem;

            }

            #botao-cadastro:focus {
                outline: none;
            }

            #botao-cadastro span{
                color: white;
                height: 2rem;
                width: 2rem;
                transform: translatey(11%);
            }
            /* https://img2.migalhas.com.br/_MEDPROC_/https__img.migalhas.com.br__SL__gf_base__SL__empresas__SL__MIGA__SL__imagens__SL__2022__SL__01__SL__04__SL__a326a4e9-8f3b-4ce7-b329-c64672ce93b0.jpg._PROC_CP65.jpg */
    </style>

    <title>Document</title>
</head>
<body>

    <div id="div" style="width: 28rem; margin-top: 15vh; border: 0.1px solid rgb(255, 253, 253); border-radius: 3%; backdrop-filter: blur(0.1rem);" class="mx-auto p-5">
        <h2>CADASTRO VIAGENS</h2>
        <form action="./../controller/viagensController.php"  class="mx-auto p-3" enctype="multipart/form-data" method="post">
        <input type="hidden" name="act" value="save">   
        <div class="mb-3">
                <input required name="nome" type="text"  id="nomeinput" placeholder="ex: Alcapuco">
            </div>
            <div class="mb-3">
                <textarea required name="descricao" type="text"  placeholder="Viagem para Alcapuco.." ></textarea>
            </div>
            <div class="mb-3 mt-5">
                <input required name="imagem" id="arquivo" accept="image/*" type="file" >
            </div>
            <div class="container-fluid d-flex justify-content-around mt-5">
                <button id="botao-cadastro" name="submit" type="submit"><span class="material-symbols-outlined">library_add_check</span></button>
            </div>
        </form>
    </div>
       
</body>
</html>