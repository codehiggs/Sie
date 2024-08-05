<?php

$bootstrap = service('bootstrap');
$mmodules = model('App\Modules\Sie\Models\Sie_Modules');
$mversions = model('App\Modules\Sie\Models\Sie_Versions');
$mpensums = model('App\Modules\Sie\Models\Sie_Pensums');


$bgrid = $bootstrap->get_Grid();
$bgrid->set_Headers(array(
    "#",
    "Código",
    "Módulo",
    "Nombre",
    "Creditos",
    "Opciones",
));

$count = 0;
$pensums = $mpensums->where('version', $oid)->findAll();
if (is_array($pensums)) {
    foreach ($pensums as $pensum) {
        $count++;
        $code = $pensum["pensum"];
        $version = $pensum["version"];
        $module = $mmodules->get_Module($pensum["module"]);
        $opciones = "<div class=\"btn-group\">";
        //$opciones = "<a href=\"/sie/versions/view/{$version["version"]}\" class=\"btn btn-sm btn-primary mx-1\"><i class=\"fa-light fa-eye\"></i></a>";
        $opciones .= "<a href=\"/sie/pensums/edit/{$code}\" class=\"btn btn-sm btn-primary mx-1\"><i class=\"fa-light fa-pen-to-square\"></i></a>";
        $opciones .= "<a href=\"/sie/pensums/delete/{$code}\" class=\"btn btn-sm btn-danger\"><i class=\"fa-light fa-trash\"></i></a>";
        $opciones .= "</div>";
        $bgrid->add_Row(array($count, $code, $module['module'], $module['name'], $pensum['credits'], $opciones));
    }
} else {
    //mensaje no hay mallas
}

echo($bgrid);
?>