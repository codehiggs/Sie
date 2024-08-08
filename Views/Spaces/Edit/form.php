<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-08 11:16:29
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Spaces\Editor\form.php]
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
$request = service('request');
$bootstrap = service('bootstrap');
$dates = service('dates');
$strings = service('strings');
$authentication = service('authentication');
$f = service("forms", array("lang" => "Sie_Spaces."));
//[models]--------------------------------------------------------------------------------------------------------------
//$model = model("App\Modules\Sie\Models\Sie_Spaces");
//[vars]----------------------------------------------------------------------------------------------------------------
$row = $model->get_Spaces($oid);
$r["space"] = $f->get_Value("space", $row["space"]);
$r["headquarters"] = $f->get_Value("headquarters", $row["headquarters"]);
$r["type"] = $f->get_Value("type", $row["type"]);
$r["block"] = $f->get_Value("block", $row["block"]);
$r["name"] = $f->get_Value("name", $row["name"]);
$r["description"] = $f->get_Value("description", $row["description"]);
$r["area"] = $f->get_Value("area", $row["area"]);
$r["static_capacity"] = $f->get_Value("static_capacity", $row["static_capacity"]);
$r["dynamic_capacity"] = $f->get_Value("dynamic_capacity", $row["dynamic_capacity"]);
$r["tv"] = $f->get_Value("tv", $row["tv"]);
$r["split_wall"] = $f->get_Value("split_wall", $row["split_wall"]);
$r["split_ceiling"] = $f->get_Value("split_ceiling", $row["split_ceiling"]);
$r["videobeam"] = $f->get_Value("videobeam", $row["videobeam"]);
$r["sound"] = $f->get_Value("sound", $row["sound"]);
$r["author"] = $f->get_Value("author", safe_get_user());
$r["created_at"] = $f->get_Value("created_at", $row["created_at"]);
$r["updated_at"] = $f->get_Value("updated_at", $row["updated_at"]);
$r["deleted_at"] = $f->get_Value("deleted_at", $row["deleted_at"]);
$back = "/sie/spaces/list/" . lpk();
//[fields]----------------------------------------------------------------------------------------------------------------
$f->fields["space"] = $f->get_FieldText("space", array("value" => $r["space"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["headquarters"] = $f->get_FieldText("headquarters", array("value" => $r["headquarters"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["type"] = $f->get_FieldText("type", array("value" => $r["type"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["block"] = $f->get_FieldText("block", array("value" => $r["block"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["name"] = $f->get_FieldText("name", array("value" => $r["name"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["description"] = $f->get_FieldText("description", array("value" => $r["description"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["area"] = $f->get_FieldText("area", array("value" => $r["area"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["static_capacity"] = $f->get_FieldText("static_capacity", array("value" => $r["static_capacity"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["dynamic_capacity"] = $f->get_FieldText("dynamic_capacity", array("value" => $r["dynamic_capacity"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["tv"] = $f->get_FieldText("tv", array("value" => $r["tv"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["split_wall"] = $f->get_FieldText("split_wall", array("value" => $r["split_wall"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["split_ceiling"] = $f->get_FieldText("split_ceiling", array("value" => $r["split_ceiling"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["videobeam"] = $f->get_FieldText("videobeam", array("value" => $r["videobeam"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["sound"] = $f->get_FieldText("sound", array("value" => $r["sound"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->add_HiddenField("author", $r["author"]);
$f->fields["created_at"] = $f->get_FieldText("created_at", array("value" => $r["created_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["updated_at"] = $f->get_FieldText("updated_at", array("value" => $r["updated_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["deleted_at"] = $f->get_FieldText("deleted_at", array("value" => $r["deleted_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["cancel"] = $f->get_Cancel("cancel", array("href" => $back, "text" => lang("App.Cancel"), "type" => "secondary", "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["submit"] = $f->get_Submit("submit", array("value" => lang("App.Edit"), "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-left"));
//[groups]----------------------------------------------------------------------------------------------------------------
$f->groups["g1"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["space"] . $f->fields["headquarters"] . $f->fields["type"])));
$f->groups["g2"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["block"] . $f->fields["name"] . $f->fields["description"])));
$f->groups["g3"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["area"] . $f->fields["static_capacity"] . $f->fields["dynamic_capacity"])));
$f->groups["g4"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["tv"] . $f->fields["split_wall"] . $f->fields["split_ceiling"])));
$f->groups["g5"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["videobeam"] . $f->fields["sound"] . $f->fields["author"])));
$f->groups["g6"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["created_at"] . $f->fields["updated_at"] . $f->fields["deleted_at"])));
//[buttons]-------------------------------------------------------------------------------------------------------------
$f->groups["gy"] = $f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields" => $f->fields["submit"] . $f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $bootstrap->get_Card("create", array(
    "title" => lang("Spaces.edit-title"),
    "content" => $f,
    "header-back" => $back
));
echo($card);
?>
