<?php

/**
* █ ---------------------------------------------------------------------------------------------------------------------
* █ ░FRAMEWORK                                  2024-08-08 10:02:27
* █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Orders\Items\Editor\form.php]
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
$authentication =service('authentication');
$f = service("forms",array("lang" => "Sie_Orders."));
//[models]--------------------------------------------------------------------------------------------------------------
//$model = model("App\Modules\Sie\Models\Sie_Orders");
//[vars]----------------------------------------------------------------------------------------------------------------
$row= $model->get_Orders($oid);
$r["item"] = $f->get_Value("item",$row["item"]);
$r["order"] = $f->get_Value("order",$row["order"]);
$r["type"] = $f->get_Value("type",$row["type"]);
$r["value"] = $f->get_Value("value",$row["value"]);
$r["amount"] = $f->get_Value("amount",$row["amount"]);
$r["description"] = $f->get_Value("description",$row["description"]);
$r["percentage"] = $f->get_Value("percentage",$row["percentage"]);
$r["author"] = $f->get_Value("author",safe_get_user());
$r["created_at"] = $f->get_Value("created_at",$row["created_at"]);
$r["updated_at"] = $f->get_Value("updated_at",$row["updated_at"]);
$r["deleted_at"] = $f->get_Value("deleted_at",$row["deleted_at"]);
$back= "/sie/orders/list/".lpk();
//[fields]----------------------------------------------------------------------------------------------------------------
$f->fields["item"] = $f->get_FieldText("item", array("value" => $r["item"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["order"] = $f->get_FieldText("order", array("value" => $r["order"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["type"] = $f->get_FieldText("type", array("value" => $r["type"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["value"] = $f->get_FieldText("value", array("value" => $r["value"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["amount"] = $f->get_FieldText("amount", array("value" => $r["amount"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["description"] = $f->get_FieldText("description", array("value" => $r["description"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["percentage"] = $f->get_FieldText("percentage", array("value" => $r["percentage"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->add_HiddenField("author",$r["author"]);
$f->fields["created_at"] = $f->get_FieldText("created_at", array("value" => $r["created_at"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["updated_at"] = $f->get_FieldText("updated_at", array("value" => $r["updated_at"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["deleted_at"] = $f->get_FieldText("deleted_at", array("value" => $r["deleted_at"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["cancel"]=$f->get_Cancel("cancel", array("href" =>$back,"text" =>lang("App.Cancel"),"type"=>"secondary","proportion" =>"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["submit"] =$f->get_Submit("submit", array("value" =>lang("App.Edit"),"proportion" =>"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-left"));
//[groups]----------------------------------------------------------------------------------------------------------------
$f->groups["g1"]=$f->get_Group(array("legend"=>"","fields"=>($f->fields["item"].$f->fields["order"].$f->fields["type"])));
$f->groups["g2"]=$f->get_Group(array("legend"=>"","fields"=>($f->fields["value"].$f->fields["amount"].$f->fields["description"])));
$f->groups["g3"]=$f->get_Group(array("legend"=>"","fields"=>($f->fields["percentage"].$f->fields["author"].$f->fields["created_at"])));
$f->groups["g4"]=$f->get_Group(array("legend"=>"","fields"=>($f->fields["updated_at"].$f->fields["deleted_at"])));
//[buttons]-------------------------------------------------------------------------------------------------------------
$f->groups["gy"] =$f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields"=>$f->fields["submit"].$f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $bootstrap->get_Card("create", array(
		 "title" => lang("Orders.edit-title"),
		 "content" =>$f,
		 "header-back" =>$back
));
echo($card);
?>
