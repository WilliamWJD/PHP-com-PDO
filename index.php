<?php
	
	$dsn='mysql:host=localhost;dbname=php_com_pdo';
	$usuario='root';
	$senha='';

	try {

		$conexao=new PDO($dsn, $usuario, $senha);
		$query='
			CREATE TABLE tbl_usuarios(
				id int not null primary key auto_increment,
				nome varchar(100) not null,
				email varchar(100) not null,
				senha varchar(32) not null
			)
		';
		$retorno=$conexao->exec($query);
		echo $retorno;

		
		$query='
			insert into tbl_usuarios(
				nome,email,senha
			)values(
				"William José Dias","william@william.com.br","william"
			)
		';
		$retorno=$conexao->exec($query);
		echo $retorno;


		$query='
			DELETE FROM tbl_usuarios
		';

		$conexao->exec($query);

	} catch (PDOException $e) {
		echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();

	}

?>