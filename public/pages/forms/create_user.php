<?php

require("../../../bootstrap.php");

if (isEmpty()) {

  flash('message', 'Preencha todos os campos');

  return redirect('create_user');
}

$validate = validate([
  'name' => 's',
  'sobrenome' => 's',
  'email' => 'e',
  'password' => 's'
]);


$cadastrado = create('users', $validate);

if ($cadastrado) {
  flash('message', 'Cadastrado com sucesso', 'success');

  return redirect('create_user');
}


flash('message', 'Erro ao cadastrar usuário');
redirect('create_user');