<?php
	
	class Conexao{

		private $usuario;
		private $banco;
		private $host;
		private $senha;
		private $link;

		public static function ExecutarQuery($sql) {

			$this->usuario  = "root";
			$this->banco    = "entrevista";
			$this->host   	= "localhost";
			$this->senha  	= "";
			$this->link   	= mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);

			if (mysqli_connect_errno()) {
				print_f("Erro de Conexao: %s\n", mysqli_connect_error());
				exit();
			}else{
				if ($result = mysqli_query($link, $sql)){
					if(strpos($sql, "select") !== false){
						return $result;
					}
					mysqli_free_result($result);
				}
			}
		}
	}
?>