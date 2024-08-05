<?php
$bootstrap = service('bootstrap');
$data = $parent->get_Array();

$fprofile = view('App\Modules\Sie\Views\Students\Edit\Tabs\profile', $data);
$fsnies = view('App\Modules\Sie\Views\Students\Edit\Tabs\snies', $data);
$fphotos = view('App\Modules\Sie\Views\Students\Edit\Tabs\photos', $data);
$ffles = view('App\Modules\Sie\Views\Students\Edit\Tabs\files', $data);

$tabs = array(
    array("id" => "profile", "text" => "Perfil", "content" => $fprofile, "active" => true),
    array("id" => "snies", "text" => "Snies", "content" => $fsnies, "active" => false),
    array("id" => "photos", "text" => "Fotos", "content" => $fphotos, "active" => false),
    array("id" => "documents", "text" => "Archivos", "content" => $ffles, "active" => false),
);
$tabs = new \App\Libraries\Html\Bootstrap\Tabs($tabs);
//[build]---------------------------------------------------------------------------------------------------------------
$card = $bootstrap->get_Card("create", array(
    "title" => sprintf("Actualizar estudiante: %s", $oid),
    "content" => $tabs,
    "header-back" => "/sie/students/list/" . lpk(),
));
echo($card);

?>