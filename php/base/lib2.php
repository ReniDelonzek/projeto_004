<?php
	class Conexao {
		//Cria a conexão com banco de dados usando o PDO e a porta do banco de dados
		var $cnx;
		
		//Variaveis contendo dados de conexão
		var $_HOST = "hard.uniguacu.edu.br";
		var $_DBNAME = "2016201393";
		var $_USER = "2016201393";
		var $_PASSWORD = "1393";
		
		function __construct() {
			$this->cnx=pg_connect("host=$this->_HOST dbname=$this->_DBNAME user=$this->_USER password=$this->_PASSWORD") or die ("Nao conectou");
		}
	}
	class Login{
		var $cnx;
		
		//Iniciando conexão
		function __construct($cnx) {
			$this->cnx = $cnx;
		}
		//Verificando dados recebidos do usuario 
		function valida($email = '',$senha = ''){
			$email = pg_escape_string($email);
			$senha = pg_escape_string($senha);
			
			$res = pg_query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");
			
			if($reg=@pg_fetch_object($res)){
				echo("FOI");
		    }else{
			  echo("ERRO");
		    }
		}
	}
?>
