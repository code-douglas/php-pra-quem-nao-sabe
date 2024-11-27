<?php

function validate(array $fields)
{

  $request = request();

  $validate = [];
  foreach ($fields as $field => $type) {
    $value = $request[$field] ?? null;
    switch ($type) {
      case 's':
        $validate[$field] = strip_tags($value);
        break;
      case 'i':
        $validate[$field] = strip_tags($value);
        break;
      case 'e':
        $validate[$field] = strip_tags($value);
        break;
    }
  }
  return (object) $validate;
}
function isEmpty()
{
  $request = request();

  $empty = false;

  foreach ($request as $key => $value) {
    if (empty($request[$key])) {
      $empty = true;
    }
  }
  return $empty;
}