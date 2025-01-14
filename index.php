<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mt-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="Index.php">Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="?page=novo">Novo Usuário</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=listar">Listar Usuário</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <?php
            include("conexao.php");
            switch(@$_REQUEST["page"]){
              case "novo":
                include("novo_usuario.php");
                break;
              case "listar":
                include("listar_usuario.php");
                break;
              case "salvar":
                include("salvar_usuario.php");
                break;
              case "editar":
                include("editar_usuario.php");
                break;
              default:
                print "<h1>Bem Vindos ao Sistema de Cadastro!</h1>";
            }
          ?>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+rk0FOC1LlLFpL0x0xF1cHvbAjZNu" crossorigin="anonymous"></script>
  </body>
</html>
