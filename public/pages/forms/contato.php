<?php

require("../../../bootstrap.php");

if (isEmpty()) {

  flash('message', 'Preencha todos os campos');

  return redirect('contato');
}

$validate = validate([
  'name' => 's',
  'email' => 'e',
  'subject' => 's',
  'message' => 's'
]);

