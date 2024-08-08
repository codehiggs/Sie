<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-07-08 09:51:37
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Orders\Creator\processor.php]
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
 * * █ @Editor Jhon Alejandro Martinez Potes <jalejandromp1@hotmail.com>
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
 * █ @var object $morders Modelo de datos utilizado en la vista y trasferido desde el index
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
//[Services]-----------------------------------------------------------------------------
$request = service('Request');
$bootstrap = service('Bootstrap');
$dates = service('Dates');
$strings = service('strings');
$authentication = service('authentication');
$numbers = service('numbers');
//[Models]--------------------------------------------------------------------------------------------------------------
$morders = model("App\Modules\Sie\Models\Sie_Orders");
//[Vars]----------------------------------------------------------------------------------------------------------------
$f = service("forms", array("lang" => "Sie_Orders."));
$order = $morders->get_Order($oid);

$origin = !empty($request->getGet("origin")) ? $request->getGet("origin") : $f->get_Value("origin");

if ($origin == "registrations") {
    $back = "/sie/registrations/edit/{$order['user']}";
} else {
    $back = "NOBACK: " . $origin;
}

$d = array(
    "order" => $f->get_Value("order"),
    "installments" => $f->get_Value("installments"),
    "ticket" => $f->get_Value("ticket"),
);

$row = $morders->get_Order($d["order"]);
$l["back"] = $back;
$l["edit"] = "/sie/orders/edit/{$d["order"]}";
$asuccess = "sie/orders-create-success-message.mp3";
$aexist = "sie/orders-create-exist-message.mp3";
if (is_array($row)) {

    $values = $numbers->get_WholeParts($row["total"], $d["installments"]);

    for ($i = 0; $i < $d["installments"]; $i++) {
        $d["order"] = pk();
        $d["user"] = $row["user"];
        $d["ticket"] = $d["ticket"];
        $d["parent"] = $d["ticket"];
        $d["period"] = $row["period"];
        $d["total"] = $values[$i];
        $d["amount"] = "1.00";
        $d["paid"] = "0.00";
        $d["status"] = "CREDIT";
        $d["author"] = safe_get_user();
        $d["type"] = "CREDIT";
        $d["date"] = safe_get_date();
        $d["time"] = safe_get_time();
        $d["expiration"] = $dates->addDaysExact("2024-07-17", 30 * ($i));
        $create = $morders->insert($d);
        // faltaria agregar los items para el recibo
    }
    //echo($morders->getLastQuery()->getQuery());
    $c = $bootstrap->get_Card("success", array(
        "class" => "card-success",
        "icon" => "fa-duotone fa-triangle-exclamation",
        "title" => lang("Orders.create-credit-success-title"),
        "text-class" => "text-center",
        "text" => sprintf(lang("Orders.create-credit-success-message"), $d['order']),
        "footer-continue" => $l["back"],
        "footer-class" => "text-center",
        "voice" => $asuccess,
    ));
} else {
    $c = $bootstrap->get_Card("duplicate", array(
        "class" => "card-warning",
        "icon" => "fa-duotone fa-triangle-exclamation",
        "title" => lang("Orders.create-duplicate-title"),
        "text-class" => "text-center",
        "text" => lang("Orders.create-duplicate-message"),
        "footer-continue" => $l["back"],
        "footer-class" => "text-center",
        "voice" => $aexist,
    ));
}
echo($c);
?>