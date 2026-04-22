<?php
session_start();

if (isset($_SESSION['isLogged'])) {
  header('location: pages/home.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body class="container flex flex-col justify-content-center align-items-center" style="padding-top: 150px">
  <div class="container flex flex-col justify-content-center align-items-center">
    <form style="width: 250px;" class="d-flex flex-column" action="../funcoes/cadastroUsuario.php" method="post">
      <label for="nome">Nome</label>
      <input required type="text" name="nome" placeholder="Informe seu nome">
      <label for="email">E-mail</label>
      <input required type="email" name="email" id="email" placeholder="Informe seu e-mail">
      <label for="senha">Senha</label>
      <input required type="password" name="senha" id="senha" placeholder="Informe sua senha">
      <button class="btn btn-outline-primary mt-2" type="submit">Entrar</button>
    </form>
    <span>Já possui uma conta? <a href="../login.php">faça login</a></span>
  </div>
</body>

</html>