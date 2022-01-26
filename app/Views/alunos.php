<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Alunos</title>
    <style>
        ul.pagination li {
            display: inline;
        }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
    <script>
        function confirma() {
            if (!confirm('Desejar excluir o registro?')) {
                return false;
            }

            return true;
        }
    </script>
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
        <?php echo anchor(base_url('aluno/create'), '+Cadastrar Aluno', ['class' => 'btn btn-success mb-3']) ?>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($alunos as $aluno) : ?>
                <tr>
                    <td><?php echo $aluno['id'] ?></td>
                    <td><?php echo $aluno['name'] ?></td>
                    <td><?php echo $aluno['address'] ?></td>
                    <td><img src="<?php echo  $_SERVER['DOCUMENT_ROOT'].'\assets\images\1643206457_698d565941b309603802.jpg' ; ?>" > </td>
                    <td>
                        <?php echo anchor('aluno/edit/' . $aluno['id'], 'Editar') ?>
                        -
                        <?php echo anchor('aluno/delete/' . $aluno['id'], 'Excluir', ['onclick' => 'return confirma()']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php echo $pager->links(); ?>
    </div>

</body>

</html>