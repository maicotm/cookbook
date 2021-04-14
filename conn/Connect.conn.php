<?php

/**
 * Classe responsável por fazer a conexão com o banco de dados
 * @author Maico Tedesco Mendes
 */
class Connection {

    private const DBNAME = 'db-cookbook'; // Nome do banco
    private const DBHOST = 'localhost'; // Endereço do banco
    private const DBPORT = 5432; // Porta padrão do PostgreSQL
    private const DBUSER = 'postgres'; // Usuário/Administrador
    private const DBPASS = '123456'; // Senha de acesso ao banco

    private $conn; // Varivel responsável por fazer a conexão

    // Função de conexão do banco
    public function conectaDB() {
        $sconn = 'host='.self::DBHOST.' port='.self::DBPORT.' dbname='.self::DBNAME.' user='.self::DBUSER.' password='.self::DBPASS;
//        echo $sconn . '<br>';
        $this->conn = pg_connect($sconn)
            or die("ERRO:<br><hr><li>Falha ao conectar com o banco!!!</li><hr>") ;

        return $this->conn;
    }

    // Função para fechar a conexão com o banco
    public function desconectaDB() {
        pg_close($this->conn);
    }
}
