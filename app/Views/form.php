<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Edição</title>
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
    <div class="container mt-5">
    <?php if(isset($errors)) foreach ($errors as $error): ?>
    <li><?= esc($error) ?></li>
<?php endforeach ?>
        <h2>Cadastro de Alunos</h2>
        <?php echo form_open_multipart('aluno/store') ?>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" value="<?php echo isset($aluno['name']) ? $aluno['name'] : '' ?>" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Endereço</label>
            <input type="text" value="<?php echo isset($aluno['address']) ? $aluno['address'] : '' ?>" name="address" id="address" class="form-control">
        </div>

        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" value="<?php echo isset($aluno['photo']) ? $aluno['photo'] : '' ?>" name="photo" id="photo" class="form-control">
        </div>
       
        <input type="submit" value="Salvar" class="btn btn-primary">
        <input type="hidden" name="id" value="<?php echo isset($aluno['id']) ? $aluno['id'] : '' ?>">
        <?php echo form_close(); ?>

    </div>
</body>

</html>