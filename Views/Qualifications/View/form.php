<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-08 10:39:16
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Qualifications\Editor\form.php]
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
//[Services]-----------------------------------------------------------------------------
$request = service('Request');
$bootstrap = service('Bootstrap');
$dates = service('Dates');
$strings = service('strings');
$authentication = service('authentication');
$f = service("forms", array("lang" => "Sie_Qualifications."));
//[Request]-----------------------------------------------------------------------------
$row = $model->get_Qualifications($oid);
$r["qualification"] = $row["qualification"];
$r["teacher"] = $row["teacher"];
$r["score"] = $row["score"];
$r["weighting"] = $row["weighting"];
$r["author"] = $row["author"];
$r["created_at"] = $row["created_at"];
$r["update_at"] = $row["update_at"];
$r["delete_at"] = $row["delete_at"];
$back = "/sie/qualifications/list/" . lpk();
//[Fields]-----------------------------------------------------------------------------
$f->fields["qualification"] = $f->get_FieldView("qualification", array("value" => $r["qualification"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["teacher"] = $f->get_FieldView("teacher", array("value" => $r["teacher"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["score"] = $f->get_FieldView("score", array("value" => $r["score"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["weighting"] = $f->get_FieldView("weighting", array("value" => $r["weighting"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->add_HiddenField("author", $r["author"]);
$f->fields["created_at"] = $f->get_FieldView("created_at", array("value" => $r["created_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["update_at"] = $f->get_FieldView("update_at", array("value" => $r["update_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["delete_at"] = $f->get_FieldView("delete_at", array("value" => $r["delete_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["cancel"] = $f->get_Cancel("cancel", array("href" => $back, "text" => lang("App.Cancel"), "type" => "secondary", "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["edit"] = $f->get_Button("edit", array("href" => "/sie/qualifications/edit/" . $oid, "text" => lang("App.Edit"), "class" => "btn btn-secondary", "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
//[Groups]-----------------------------------------------------------------------------
$f->groups["g1"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["qualification"] . $f->fields["teacher"] . $f->fields["score"])));
$f->groups["g2"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["weighting"] . $f->fields["author"] . $f->fields["created_at"])));
$f->groups["g3"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["update_at"] . $f->fields["delete_at"])));
//[Buttons]-----------------------------------------------------------------------------
$f->groups["gy"] = $f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields" => $f->fields["edit"] . $f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
$bootstrap = service("bootstrap");
$card = $bootstrap->get_Card("card-view-service", array(
    "title" => lang("Qualifications.view-title"),
    "header-back" => $back,
    "content" => $f,
));
echo($card);
?>
