<?
class cliente {

var $nome;
var $rg;
var $cpf;

public function cliente(){
}
public function cadastrar_cliente(){
	$sql = "insert into cliente(nome,
									rg,
									cpf
									) 
									values ('".$this->nome."',
											'".$this->rg."',
											'".$this->cpf."')";
		$mysql = new mysql();
		$result = $mysqli->query($sql);
		
}	
public function selecionar_cliente(){
	        $sql = "select * from cliente order by nome";
        	$mysql = new mysql();
        	$result = $mysqli->query($sql);
        	return $result;
    }
public function alterar_cliente(){
	if($this->id){

	$sql = "update cliente set nome = '".$this->nome."',
									rg = '".$this->rg."',
									cpf = '".$this->cpf."'
									where cliente_id = ".$this->cliente_id;
									
	$mysql = new mysql();
	$result = $mysqli->query($sql);
	}
}
public function excluir_cliente($id){
	if(is_numeric($id)){
			$sql = "delete from cliente where id = ".$id;
									
			$mysql = new mysql();
			$result = $mysqli->query($sql);

	}
echo "Cliente excluido com sucesso";
}


}//fechamento codigo coplicado para o developer Junior (6)
?>