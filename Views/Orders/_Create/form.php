<?php

/**
* █ ---------------------------------------------------------------------------------------------------------------------
* █ ░FRAMEWORK                                  2024-08-08 09:48:37
* █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Orders\Creator\form.php]
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
$f = service("forms",array("lang" => "Sie_Orders."));
//[models]--------------------------------------------------------------------------------------------------------------
//$model = model("App\Modules\Sie\Models\Sie_Orders");
//[vars]----------------------------------------------------------------------------------------------------------------
$r["order"] = $f->get_Value("order");
$r["user"] = $f->get_Value("user");
$r["ticket"] = $f->get_Value("ticket");
$r["parent"] = $f->get_Value("parent");
$r["period"] = $f->get_Value("period");
$r["total"] = $f->get_Value("total");
$r["paid"] = $f->get_Value("paid");
$r["status"] = $f->get_Value("status");
$r["author"] = $f->get_Value("author",safe_get_user());
$r["type"] = $f->get_Value("type");
$r["date"] = $f->get_Value("date",service("dates")::get_Date());
$r["time"] = $f->get_Value("time",service("dates")::get_Time());
$r["expiration"] = $f->get_Value("expiration");
$r["created_at"] = $f->get_Value("created_at");
$r["updated_at"] = $f->get_Value("updated_at");
$r["deleted_at"] = $f->get_Value("deleted_at");
$back= "/sie/orders/list/".lpk();
//[fields]----------------------------------------------------------------------------------------------------------------
$f->fields["order"] = $f->get_FieldText("order", array("value" => $r["order"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["user"] = $f->get_FieldText("user", array("value" => $r["user"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["ticket"] = $f->get_FieldText("ticket", array("value" => $r["ticket"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["parent"] = $f->get_FieldText("parent", array("value" => $r["parent"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["period"] = $f->get_FieldText("period", array("value" => $r["period"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["total"] = $f->get_FieldText("total", array("value" => $r["total"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["paid"] = $f->get_FieldText("paid", array("value" => $r["paid"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["status"] = $f->get_FieldText("status", array("value" => $r["status"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->add_HiddenField("author",$r["author"]);
$f->fields["type"] = $f->get_FieldText("type", array("value" => $r["type"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["date"] = $f->get_FieldText("date", array("value" => $r["date"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["time"] = $f->get_FieldText("time", array("value" => $r["time"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["expiration"] = $f->get_FieldText("expiration", array("value" => $r["expiration"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["created_at"] = $f->get_FieldText("created_at", array("value" => $r["created_at"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["updated_at"] = $f->get_FieldText("updated_at", array("value" => $r["updated_at"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["deleted_at"] = $f->get_FieldText("deleted_at", array("value" => $r["deleted_at"],"proportion"=>"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["cancel"]=$f->get_Cancel("cancel", array("href" =>$back,"text" =>lang("App.Cancel"),"type"=>"secondary","proportion" =>"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["submit"] =$f->get_Submit("submit", array("value" =>lang("App.Create"),"proportion" =>"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-left"));
//[groups]----------------------------------------------------------------------------------------------------------------
$f->groups["g1"]=$f->get_Group(array("legend"=>"","fields"=>($f->fields["order"].$f->fields["user"].$f->fields["ticket"])));
$f->groups["g2"]=$f->get_Group(array("legend"=>"","fields"=>($f->fields["parent"].$f->fields["period"].$f->fields["total"])));
$f->groups["g3"]=$f->get_Group(array("legend"=>"","fields"=>($f->fields["paid"].$f->fields["status"].)));
$f->groups["g4"]=$f->get_Group(array("legend"=>"","fields"=>($f->fields["type"].$f->fields["date"].$f->fields["time"])));
$f->groups["g5"]=$f->get_Group(array("legend"=>"","fields"=>($f->fields["expiration"].)));
//[buttons]-------------------------------------------------------------------------------------------------------------
$f->groups["gy"] =$f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields"=>$f->fields["submit"].$f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $b->get_Card("create", array(
		 "title" => lang("Orders.create-title"),
		 "content" =>$f,
		 "header-back" =>$back
));
echo($card);
?>
