
<?php
//eu usei essa database em mysql, a em postgres esta comentada abaixo

class database{

    const hostname = '127.0.0.1:3376';
    const bancodedados = 'viagem';
    const usuario = 'root';
    const senha = '';
    static $conexao = null;

    static function conecta(){
        try {
            database::$conexao = new PDO('mysql:host='.database::hostname.';dbname='.database::bancodedados, database::usuario, database::senha);

            database::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //TODO: Retorna conexão PDO
            return database::$conexao;

        } catch (Exception $e) {
                throw new Exception("Erro ao conectar com o banco de dados: ".$e->getMessage());
            }
    }
}


// class database{
   

//     private const DSN = 'pgsql:dbname=viagem;host=localhost';
//     private const DUSER = 'postgres';
//     private const DPASSWORD = 'postgres';
//     private static $conexao = null;

//     static function conecta(){
        
//         try {
//             //TODO: Cria objeto PDO, conecta com BD e retorna conexão.
//             database::$conexao = new PDO(database::DSN, database::DUSER, database::DPASSWORD);

//             //TODO: Diz que erros relacionados ao BD serão tratados
//             database::$conexao->setAttribute(
//                 PDO::ATTR_ERRMODE, 
//                 PDO::ERRMODE_EXCEPTION
//             );

//             //TODO: Retorna conexão PDO
//             return database::$conexao;

//         } catch (Exception $e) {
//             throw new Exception("Erro ao conectar com o banco de dados: ".$e->getMessage());
//         }
//     }
// }