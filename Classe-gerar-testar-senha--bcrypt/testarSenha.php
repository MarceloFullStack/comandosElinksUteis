<?php
require __DIR__.'/src/Controller/Bcrypt.php';
$hashGuardada = file_get_contents('senha.txt');
// Verificando a senha
$senha = 'marcelo';
$hash = $hashGuardada; // Valor retirado do banco

if (Bcrypt::check($senha, $hash)) {
    echo 'Senha OK!';
} else {
    echo 'Senha incorreta!';
}