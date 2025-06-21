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
        <li>
          <a href="./index.html">Home</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">FAQ</a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="card">
    <h1>Obrigado pelo envio!</h1>
    <p>
      <?php
      // Coleta os dados via GET
      $nome = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Não informado';
      $sobrenome = isset($_GET['sobrenome']) ? htmlspecialchars($_GET['sobrenome']) : 'Não informado';

      echo "<p>
        Seja bem-vindo(a), <strong>$nome $sobrenome</strong>. 
        </p>
        <p>
        É um prazer tê-lo(a) conosco!
        </p>
        ";
      ?>
    </p>
  </div>
</body>

</html>