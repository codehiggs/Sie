<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-06-20 06:59:21
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Payments\List\json.php]
 * █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2023 - CloudEngine S.A.S., Inc. <admin@cgine.com>
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
 * █ @var object $mpayments Modelo de datos utilizado en la vista y trasferido desde el index
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/

//[Uses]----------------------------------------------------------------------------------------------------------------
use App\Libraries\Html\HtmlTag;
use App\Libraries\Authentication;
use Config\Services;

//[Services]-------------------------------------------------------------------------------------------------------------
$request = service('Request');
$bootstrap = service('Bootstrap');
$dates = service('Dates');
$strings = service('strings');
$authentication = service('authentication');
$numbers = service('numbers');
//[Models]---------------------------------------------------------------------------------------------------------------
$mpayments = model('App\Modules\Sie\Models\Sie_Payments');
$mregistration = model('App\Modules\Sie\Models\Sie_Registrations');
//[Requests]------------------------------------------------------------------------------------------------------------
$columns = $request->getGet("columns");
$offset = $request->getGet("offset");
$search = $request->getGet("search");
$draw = empty($request->getGet("draw")) ? 1 : $request->getGet("draw");
$limit = empty($request->getGet("limit")) ? 10 : $request->getGet("limit");
$note = array();
//[Query]---------------------------------------------------------------------------------------------------------------
$list = $mpayments->get_List($limit, $offset, $search);
$recordsTotal = $mpayments->get_Total($search);
//$sql=$mpayments->getLastQuery()->getQuery();
//[Asignations]---------------------------------------------------------------------------------------------------------
$data = array();
$component = '/sie/payments';
foreach ($list as $item) {
    $registration = $mregistration->get_RegistrationByTicket($item["ticket"]);
    if (!$registration || is_null($registration['registration']) || empty($registration['registration'])) {
        $ticket = $item["ticket"] - 10000;
        $registration = $mregistration->get_RegistrationByTicket($ticket);
        $note[] = $ticket;
    }
    //[Buttons]---------------------------------------------------------------------------------------------------------
    $viewer = "{$component}/view/{$item["payment"]}";
    $editor = "{$component}/edit/{$item["payment"]}";
    $deleter = "{$component}/delete/{$item["payment"]}";
    $lviewer = $bootstrap::get_Link('view', array('href' => $viewer, 'icon' => ICON_VIEW, 'text' => lang("App.View"), 'class' => 'btn-primary'));
    $leditor = $bootstrap::get_Link('edit', array('href' => $editor, 'icon' => ICON_EDIT, 'text' => lang("App.Edit"), 'class' => 'btn-secondary'));
    $ldeleter = $bootstrap::get_Link('delete', array('href' => $deleter, 'icon' => ICON_DELETE, 'text' => lang("App.Delete"), 'class' => 'btn-danger'));
    $options = $bootstrap::get_BtnGroup('options', array('content' => array($lviewer, $leditor, $ldeleter)));
    //[Fields]----------------------------------------------------------------------------------------------------------
    $row["payment"] = $item["payment"];
    $row["date"] = @$row["created_at"];
    $row["record_type"] = $item["record_type"];
    $row["agreement"] = $item["agreement"];
    $row["id_number"] = $item["id_number"];
    $row["identification_type"] = @$registration["identification_type"];
    $row["identification_number"] = @$registration["identification_number"];
    $row["fullname"] = @$registration["first_name"] . " " . @$registration["second_name"] . " " . @$registration["first_surname"] . " " . @$registration["second_surname"];
    $row["ticket"] = $item["ticket"];
    $row["value"] = "$ " . $numbers->get_NumberFormat($item["value"]);
    $row["payment_origin"] = $item["payment_origin"];
    $row["payment_methods"] = $item["payment_methods"];
    $row["operation_number"] = $item["operation_number"];
    $row["authorization"] = $item["authorization"];
    $row["financial_entity"] = $item["financial_entity"];
    $row["branch"] = $item["branch"];
    $row["sequence"] = $item["sequence"];
    $row["created_at"] = $item["created_at"];
    $row["updated_at"] = $item["updated_at"];
    $row["deleted_at"] = $item["deleted_at"];
    $row['payment_origin'] = "Otro";
    if (isset($item["payment_origin"])) {
        if ($item['payment_origin'] == "01") {
            $row['payment_origin'] = "Asobancaria";
        } elseif ($item['payment_origin'] == "02") {
            $row['payment_origin'] = "Corresponsal";
        } elseif ($item['payment_origin'] == "03") {
            $row['payment_origin'] = "PSE";
        } elseif ($item['payment_origin'] == "04") {
            $row['payment_origin'] = "Trasferencia";
        } elseif ($item['payment_origin'] == "05") {
            $row['payment_origin'] = "Consignación";
        }
    }
    $row["options"] = $options;
    //[Push]------------------------------------------------------------------------------------------------------------
    array_push($data, $row);
}
//[Build]---------------------------------------------------------------------------------------------------------------
$json["draw"] = $draw;
$json["columns"] = $columns;
$json["offset"] = $offset;
$json["search"] = $search;
$json["limit"] = $limit;
//$json["sql"] = $sql;
$json["total"] = $recordsTotal;
$json["data"] = $data;
$json["note"] = $note;
echo(json_encode($json));
?>