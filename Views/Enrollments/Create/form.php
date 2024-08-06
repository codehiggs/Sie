<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-06 16:44:11
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Enrollments\Creator\form.php]
 * █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2024 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 * █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 * █                                             consulte la LICENCIA archivo que se distribuyó con este código fuente.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 * █ IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 * █ APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
 * █ LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
 * █ RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
 * █ AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
 * █ O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 * █ @Editor Jhon Alejandro Martinez Potes <jalejandromp1@hotmail.com>
 * █ @link https://www.codehiggs.com
 * █ @Version 1.5.0 @since PHP 7, PHP 8
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ Datos recibidos desde el controlador - @ModuleController
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @var object $parent Trasferido desde el controlador
 * █ @var object $authentication Trasferido desde el controlador
 * █ @var object $request Trasferido desde el controlador
 * █ @var object $dates Trasferido desde el controlador
 * █ @var string $component Trasferido desde el controlador
 * █ @var string $view Trasferido desde el controlador
 * █ @var string $oid Trasferido desde el controlador
 * █ @var string $views Trasferido desde el controlador
 * █ @var string $prefix Trasferido desde el controlador
 * █ @var array $data Trasferido desde el controlador
 * █ @var object $model Modelo de datos utilizado en la vista y trasferido desde el index
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
//[services]------------------------------------------------------------------------------------------------------------
$b = service("bootstrap");
$f = service("forms", array("lang" => "Sie_Enrollments."));
$server = service("server");
//[models]--------------------------------------------------------------------------------------------------------------
//$model = model("App\Modules\Sie\Models\Sie_Enrollments");
$mprograms = model("App\Modules\Sie\Models\Sie_Programs");
$mregistrations = model("App\Modules\Sie\Models\Sie_Registrations");
$mgrids = model("App\Modules\Sie\Models\Sie_Grids");
$mversions = model("App\Modules\Sie\Models\Sie_Versions");
//[vars]----------------------------------------------------------------------------------------------------------------
$registration = $mregistrations->get_Registration($oid);
$program = $mprograms->get_Program($registration["program"]);
$grid = $mgrids->get_GridByProgram($program["program"]);
$version = $mversions->get_Active($grid["grid"]);

$r["enrollment"] = $f->get_Value("enrollment", pk());
$r["student"] = $f->get_Value("student", $oid);
$r["student_name"] = $f->get_Value("student_name", $registration["first_name"] . " " . $registration["second_name"] . " " . $registration["first_surname"] . " " . $registration["second_surname"]);
$r["program"] = $f->get_Value("program", $program["program"]);
$r["program_name"] = $f->get_Value("program_name", $program["name"]);
$r["grid"] = $f->get_Value("grid", $grid["grid"]);
$r["version"] = $f->get_Value("version", @$version["version"]);
$r["version_reference"] = $f->get_Value("version_reference", @$version["reference"]);
$r["observation"] = $f->get_Value("observation");
$r["date"] = $f->get_Value("date", service("dates")::get_Date());
$r["time"] = $f->get_Value("time", service("dates")::get_Time());
$r["author"] = $f->get_Value("author", safe_get_user());
$r["created_at"] = $f->get_Value("created_at");
$r["updated_at"] = $f->get_Value("updated_at");
$r["deleted_at"] = $f->get_Value("deleted_at");
$back = $server->get_Referer();
//[fields]----------------------------------------------------------------------------------------------------------------
$f->add_HiddenField("back", $back);
$f->fields["enrollment"] = $f->get_FieldText("enrollment", array("value" => $r["enrollment"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12", "readonly" => true));
$f->fields["student"] = $f->get_FieldText("student", array("value" => $r["student"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12", "readonly" => true));
$f->fields["student_name"] = $f->get_FieldText("student_name", array("value" => $r["student_name"], "proportion" => "col-12", "readonly" => true));
$f->fields["program"] = $f->get_FieldText("program", array("value" => $r["program"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12", "readonly" => true));
$f->fields["program_name"] = $f->get_FieldText("program_name", array("value" => $r["program_name"], "proportion" => "col-12", "readonly" => true));
$f->fields["grid"] = $f->get_FieldText("grid", array("value" => $r["grid"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12", "readonly" => true));
$f->fields["version"] = $f->get_FieldText("version", array("value" => $r["version"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12", "readonly" => true));
$f->fields["version_reference"] = $f->get_FieldText("version_reference", array("value" => $r["version_reference"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12", "readonly" => true));
$f->fields["observation"] = $f->get_FieldTextArea("observation", array("value" => $r["observation"], "proportion" => "col-12"));
$f->fields["date"] = $f->get_FieldText("date", array("value" => $r["date"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["time"] = $f->get_FieldText("time", array("value" => $r["time"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->add_HiddenField("author", $r["author"]);
$f->fields["created_at"] = $f->get_FieldText("created_at", array("value" => $r["created_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["updated_at"] = $f->get_FieldText("updated_at", array("value" => $r["updated_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["deleted_at"] = $f->get_FieldText("deleted_at", array("value" => $r["deleted_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["cancel"] = $f->get_Cancel("cancel", array("href" => $back, "text" => lang("App.Cancel"), "type" => "secondary", "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["submit"] = $f->get_Submit("submit", array("value" => lang("App.Create"), "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-left"));
//[groups]----------------------------------------------------------------------------------------------------------------
$f->groups["g1"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["enrollment"] . $f->fields["student"] . $f->fields["program"])));
$f->groups["g2"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["student_name"])));
$f->groups["g3"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["program_name"])));
$f->groups["g4"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["grid"] . $f->fields["version"] . $f->fields["version_reference"])));
$f->groups["g5"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["observation"])));
//[buttons]-------------------------------------------------------------------------------------------------------------
$f->groups["gy"] = $f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields" => $f->fields["submit"] . $f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $b->get_Card("create", array(
    "title" => lang("Enrollments.create-title"),
    "content" => $f,
    "header-back" => $back
));
echo($card);
?>