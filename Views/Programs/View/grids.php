<?php
$bootstrap = service('bootstrap');
$mmodules = model('App\Modules\Sie\Models\Sie_Modules');
$mgrids = model('App\Modules\Sie\Models\Sie_Grids');
$bgrid = $bootstrap->get_Grid();
$bgrid->set_Headers(array(
    "#",
    "Código",
    "Nombre",
    "Versión",
    "Opciones",
));

$count = 0;
$grids = $mgrids->where('program', $oid)->findAll();
if (is_array($grids)) {
    foreach ($grids as $grid) {
        $count++;
        $code = @$grid["grid"];
        $name = @$grid["name"];
        $version = @$grid["version"];
        $opciones = "<a href=\"/sie/grids/view/{$grid["grid"]}\" class=\"btn btn-sm btn-primary mx-1\"><i class=\"fa-light fa-eye\"></i></a>";
        $opciones .= "<a href=\"/sie/grids/edit/{$grid["grid"]}\" class=\"btn btn-sm btn-primary mx-1\"><i class=\"fa-light fa-pen-to-square\"></i></a>";
        $opciones .= "<a href=\"/sie/grids/delete/{$grid["grid"]}\" class=\"btn btn-sm btn-danger\"><i class=\"fa-light fa-trash\"></i></a>";
        $bgrid->add_Row(array($count, $code, $name, $version, $opciones));
    }
} else {
    //mensaje no hay mallas
}

echo($bgrid);
?>