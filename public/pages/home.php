<a href="?page=create_user" class="btn btn-success " style="margin-top: 30px; margin-bottom: 30px;">Cadastrar user</a>

<h2>Página inicial</h2>

<?= getFlash('message'); ?>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $users = all('users');
    foreach ($users as $user):
      ?>
      <tr>
        <td><?= $user->id; ?></td>
        <td><?= $user->name; ?></td>
        <td><?= $user->email; ?></td>
        <td>
          <a href="?page=edit_user&id=<?= $user->id; ?>" class="btn btn-success">Editar</a>
        </td>
        <td>
          <a href="?page=delete_user&id=<?= $user->id; ?>" class="btn btn-danger">Deletar</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>