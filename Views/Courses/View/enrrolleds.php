<?php
$bootstrap = service('bootstrap');
$menrrolleds = model('App\Modules\Sie\Models\Sie_Enrolleds');
$mfields = model('App\Modules\Sie\Models\Sie_Users_Fields');
$enrrolleds = $menrrolleds->where("course", $oid)->findAll();

$grid = $bootstrap->get_Grid();
$grid->set_Headers(array(
    "#",
    "Estudiante",
    "Nombres",
    "Apellidos",
    "Opciones",
));

$count = 0;
$enrroleds = $menrrolleds->where('course', $oid)->findAll();
foreach ($enrroleds as $enrroled) {
    $count++;
    $student = $mfields->get_Profile($enrroled["student"]);
    if (is_array($student)) {
        $name = $student["name"];
        $opciones = "<a href=\"/sie/enrolleds/edit/{$enrroled["enrolled"]}\" class=\"btn btn-sm btn-primary mx-1\"><i class=\"fa-light fa-pen-to-square\"></i></a>";
        $opciones .= "<a href=\"/sie/enrolleds/delete/{$enrroled["enrolled"]}\" class=\"btn btn-sm btn-danger\"><i class=\"fa-light fa-trash\"></i></a>";
        $grid->add_Row(array($count, $student['user'], $student['firstname'], $student['lastname'], $opciones));
    }
}

echo($grid);
?>