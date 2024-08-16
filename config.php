<?php

/*Credenciais do banco de dados. Supondo que você esteja executando o MySql servidor 
com configuração padrão (usuário 'root' sem senha) */

 define('DB_SERVER', 'localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','test');


/* Tentativa de conexão com o banco de dadps MySql */
 try {
    $pdo = new PDO("mysql:host" . DB_SERVER . ";dbname" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $e) {
    die("ERROR: Não foi possível conectar." . $e->getMessage());
 }