<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/aluno">Listar Alunos <span class="sr-only">(current)</span></a>
      </li>
      <li  class="nav-item ">
        <a class="nav-link" href="/aluno/create">Cadastrar Alunos <span class="sr-only">(current)</span></a>
      </li> 
    </ul>
  </div>
</nav>
<div class="card" style="width: 18rem; margin: 5%;text-align:center">
  <div class="card-body">
    <h5 class="card-title">Alunos cadastrados</h5>
    <h4><b><?php echo count($quantidadeAlunos) ?></b></h4>
  </div>
</div>
</body>
</html>