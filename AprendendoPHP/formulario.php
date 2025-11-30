CREATE TABLE cliente (
     id_cliente serial NOT NULL,
     nome_cliente varchar(255),
     cpf_cliente varchar(11),
     email_cliente varchar(255),
     data_nascimento_cliente timestamp,
     PRIMARY KEY (id_cliente)
);

<?php
/***CONEXÃO COM O BD ***/
//Parâmetros utilizados na conexão.
define('HOST', '192.168.52.128');
define('PORT', '5432');
define('DBNAME', 'minimundo');
define('USER', 'postgres');
define('PASSWORD', '159753');
try {
              //Estabelecimento da conexão:
	$dsn = new PDO("pgsql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
	echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' .$e->getMessage();
}
/***PREPARAÇÃO E INSERÇÃO NO BANCO DE DADOS ***/
$instrucaoSQL = "Select id_cliente, nome_cliente, cpf_cliente, email_cliente,data_nascimento_cliente From cliente";
$resultSet = $dsn->query($instrucaoSQL);
?>

<?php
	while ($row = $resultSet->fetch(PDO::FETCH_ASSOC){
	echo $row['id_cliente']; 
	echo $row['nome_cliente'];
	echo preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4",$row['cpf_cliente']); 
	

echo $row['email_cliente']; 
	echo date('d/m/Y', strtotime($row['data_nascimento_cliente'])); 
	}
?>