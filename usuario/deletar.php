<?php 
require_once "../banco.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    query(deletar("usuario", ["id_usuario", $id]));
    query(listar('usuario'));
    header('Location: /Danielle_albano-SAEP/usuario');
}