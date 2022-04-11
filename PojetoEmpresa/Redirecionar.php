<?php
session_start();

if (isset($_POST['Acao']) && ($_POST['Acao'])==1) {
    header('Location: Cadastrar.html');
}
elseif (isset($_POST['Acao']) && ($_POST['Acao'])==2) {
    header('Location: ')
}
?>