<?php

class Conection{

    public static $instance;
    
    public static function getConection(){
        //o que vai fazer? verifica se existe uma instancia da concexao
        if(!isset(self::$instance)){
            self::$instance = new PDO('mysql:host=localhost;dbname=pdo1;charset=utf8','root'.'');
            
        }else{
            return self::$instance;
        }
    }
}

// depois dessa etapa vamos criar o ficheiro DAO incluindo o padrao DAO




/*
class Conection{
    private static $instance;

    public static function getConn(){

        /* abaixo tens uma verificacao ou validacao: !isset() signf.. se nao existir uma instancia 
        (instancia = instance "new") propria, entao vai exibir os dados que estao no pdo ou banco de dados. 
        se existir entao volta a propria instancia 

        if(!isset(self::$instance)):
            self::$instance = new PDO('mysql:host=localhost; dbname=pdo; charset=utf-8','root', '');
        else:
            return self::$instance; // se existir entao volta ou exibe a propria instancia
        endif;
    }
} 
*/

// depois dessa etapa vamos criar o ficheiro incluindo o padrao DAO
/*
class Conection{

    public static $instance;

    public static function getConn(){
        if(!isset('self::$instance')){
            self::$instance = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8','');
        }
        else{
            return self::$instance;
        }
    }
    
}
*/
