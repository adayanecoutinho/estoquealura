<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/app.css"
    <title>Controle de estoque</title>
</head>
<body>
  <h1>Primeira lógica com Laravel</h1>
  <table class="table">
    <?php foreach ($produtos as $p){?>
    <tr>
      <td><?= $p->nome ?></td>
      <td><?= $p->valor ?></td>
      <td><?= $p->descricao ?></td>
      <td><?= $p->quantidade ?></td>
      <td>
        <a href="/produtos/mostra">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </a>
      </td>
      <td>
    </tr>
  <?php } ?>
  </table>

</body>
</html>
