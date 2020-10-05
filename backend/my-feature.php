<?php

$name = getUsername();
echo $name;
storeData($name);
emptyFunc();

function getUsername() {
  return $_GET['username'];
}

function storeData($username) {
  mysql_query("UPDATE users SET username=$username WHERE id=1");
}

function emptyFunc() {}

shell_exec($test);