<?php

function load()
{
  $page = isset($_GET["page"]) ? strip_tags($_GET["page"]) : null;

  $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

  if (!file_exists($page)) {
    throw new Exception("Ops, algo deu errado. Tente novamente mais tarde!", 1);
  }
  return $page;
}