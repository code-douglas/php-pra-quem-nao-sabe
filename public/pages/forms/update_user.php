<?php

require("../../../bootstrap.php");

$id = filter_input(INPUT_POST,"id", FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {

  flash('message', 'Preencha todos os campos');

  return redirect("/edit_user&=" . $id);
}

$validate = validate([
  'name' => 's',
  'sobrenome' => 's',
  'email' => 'e',
]);


$atualizado = update('users', $validate, ['id', $id]);

if ($atualizado) {
  flash('message', 'Atualizado com sucesso', 'success');

  return redirect("/edit_user&=" . $id);
}


flash('message', 'Erro ao atualizar usuário');
redirect("/edit_user&=" . $id);