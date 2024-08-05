<?php

use App\Libraries\Html\Bootstrap\Tabs;

$bootstrap = service('bootstrap');
$data = $parent->get_Array();

$fprofile = view('App\Modules\Sie\Views\Teachers\View\Tabs\profile', $data);
$fevaluation = view('App\Modules\Sie\Views\Teachers\View\Tabs\evaluation', $data);

$tabs = array(
    array("id" => "profile", "text" => "Perfil", "content" => $fprofile, "active" => true),
    array("id" => "evaluation", "text" => "Evaluación de ingreso", "content" => $fevaluation, "active" => false),
);

$tabs = new Tabs($tabs);
//[build]---------------------------------------------------------------------------------------------------------------
$card = $bootstrap->get_Card("create", array(
    "title" => sprintf(lang("Users.edit-title"), $oid),
    "content" => $tabs,
    "header-back" => "/sie/teachers/list/" . lpk(),
));
echo($card);
?>