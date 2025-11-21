<!-- No servidor pode-se usar a tag html -->
<html>
<body>

<!-- O método $_POST extrai os dados da requisição que chegam nesse método. No caso, o conteúdo do
    nome é o name -->
<!-- Depois disso o echo vai retornar o valor exibindo ele na tela -->
<!-- O método <br> é uma quebra de linha -->
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</hmtl>