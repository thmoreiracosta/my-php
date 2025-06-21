<?php
$user = isset($_GET['user']) ? htmlspecialchars($_GET['user']) : 'Não informado';
$password = isset($_GET['password']) ? htmlspecialchars($_GET['password']) : '';

// Se senha estiver errada, exibe alerta e redireciona
if ($password !== 'phplife') {
  echo "<script>
    alert('Senha incorreta! Tente novamente.');
    window.location.href = 'index.html';
  </script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro recebido</title>
  <link rel="stylesheet" href="style-cad.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href='./index.html'>Home</a></li>
        <li><a href='#'>About</a></li>
        <li><a href='#'>FAQ</a></li>
      </ul>
    </nav>
  </header>

  <div class="card sucesso">
    <h1>Obrigado pelo envio!</h1>
    <p>
      Seja bem-vindo(a), <strong><?= $user ?></strong>.
    </p>
    <p>
      É um prazer tê-lo(a) conosco!
    </p>
  </div>
</body>
</html>
