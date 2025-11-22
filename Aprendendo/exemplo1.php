<?

/* O $ serve para indicar que é um variável */
/* O $_POST é a "caixa de correio" onde o PHP busca as informações que o usuário digitou e enviou de forma segura/oculta*/
$nome = $_POST['Nome'];
$email = $_POST['email'];

/* O echo serve para exibir o texto no navegador*/
echo "Os dados recebidos do formulário HTML foram: ";
echo "</br/>";

/* O . serve para concatenar o as parte*/
echo "Nome: "   .$nome;
echo "</br/>";
echo "E-mail:"  .$email;