<?php
require __DIR__.'/src/Controller/Bcrypt.php';
// Encriptando a senha
$senha = 'marcelo';
$hash = Bcrypt::hash($senha);

file_put_contents('senha.txt', $hash );

// $hash = $2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm
// Salve $hash no banco de dados