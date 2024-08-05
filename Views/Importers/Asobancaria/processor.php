<?php
set_time_limit(0);
/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-04-03 07:01:44
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Databreaches\Views\Breaches\Editor\processor.php]
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
 * █ @var object $model Modelo de datos utilizado en la vista y trasferido desde el index
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
//[services]------------------------------------------------------------------------------------------------------------
$numbers = service('numbers');
$request = service('Request');
$bootstrap = service('Bootstrap');
$dates = service('Dates');
$strings = service('strings');
$authentication = service('authentication');
$server = service('server');
//[vars]----------------------------------------------------------------------------------------------------------------
$f = service("forms", array("lang" => "Breaches."));
$breach = $f->get_Value("breach");
$code = "";
$back = "/sie/importers/asobancaria/{$oid}";
//[models]--------------------------------------------------------------------------------------------------------------
//$entidad = "7709998818828";
//$convenio = "0700";
//"(415){$entidad}(8020){$convenido}{$cedula}{$ticket}(3900){$pago}(96){$fecha}";
//[file]----------------------------------------------------------------------------------------------------------------
$path = '/storages/' . md5($server->get_FullName()) . "/databreaches/{$breach}";
$file = $request->getFile($f->get_fieldId('file'));
if (!is_null($file) && $file->isValid()) {

    $handle = fopen($file->getPathname(), 'r');
    $processedData = [];
    while (($line = fgets($handle)) !== false) {
        // Calcula la longitud de la línea
        if (strlen(safe_trim($line)) == 97) {
            $lineLength = strlen(safe_trim($line));
            $processedData[] = [
                'line' => $line,
                'length' => $lineLength,
            ];
        }

    }
    fclose($handle);


    //No. de Autorización 6
    //Código de la entidad financiera debitada 3
    //Código de sucursal  4
    //Secuencia 7
    //Causal de devolución 3
    //Reservado 65

    $code .= "<table class=\"table table-bordered table-responsive\">";
    $code .= "<tr>";
    $code .= "<th>Código Registro</th>";
    //$code .= "<th>Referencia Principal</th>";
    $code .= "<th>Convenio</th>";
    $code .= "<th>Cedula</th>";
    $code .= "<th>Orden</th>";
    $code .= "<th>Valor Recaudado</th>";
    $code .= "<th>Procedencia Pago</th>";
    $code .= "<th>Medios Pago</th>";
    $code .= "<th>Número Operación</th>";
    $code .= "<th>Autorización</th>";
    $code .= "<th>Entidad Financiera</th>";
    $code .= "<th>Sucursal</th>";
    $code .= "<th>Secuencia</th>";
    $code .= "</tr>";
    foreach ($processedData as $data) {
        $line = $data['line'];
        $data = array(
            'tipo_registro' => substr($line, 0, 2),
            'referencia_principal' => substr($line, 2, 48),
            'valor_recaudado' => substr($line, 50, 12),
            'procedencia_pago' => substr($line, 64, 2),
            'medios_pago' => substr($line, 66, 2),
            'numero_operacion' => substr($line, 68, 6),
            'autorizacion' => substr($line, 74, 6),
            'entidad_financiera' => substr($line, 80, 3),
            'sucursal' => substr($line, 83, 4),
            'secuencia' => substr($line, 87, 7),
            'causal_devolucion' => substr($line, 94, 3),
        );


        $rp = [];
        $rp['convenio'] = substr($data['referencia_principal'], 28, 4);
        $rp['cedula'] = substr($data['referencia_principal'], 32, 10);
        $rp['orden'] = substr($data['referencia_principal'], 42, 6);
        $code .= "<tr>";
        $code .= "<td>{$data['tipo_registro'] }</td>";
        $code .= "<td>{$rp['convenio'] }</td>";
        $code .= "<td>{$rp['cedula'] }</td>";
        $code .= "<td>{$rp['orden'] }</td>";
        $code .= "<td class='text-end'>$" . $numbers->to_Currency($data['valor_recaudado']) . "</td>";
        $code .= "<td>{$data['procedencia_pago'] }</td>";
        $code .= "<td>{$data['medios_pago'] }</td>";
        $code .= "<td>{$data['numero_operacion'] }</td>";
        $code .= "<td>{$data['autorizacion'] }</td>";
        $code .= "<td>{$data['entidad_financiera'] }</td>";
        $code .= "<td>{$data['sucursal'] }</td>";
        $code .= "<td>{$data['secuencia'] }</td>";
        $code .= "</tr>";

        /**
         * tipo_registro -> record_type
         * convenio -> agreement
         * cedula -> id_number
         * orden -> order
         * valor_recaudado -> collected_value
         * procedencia_pago -> payment_origin
         * medios_pago -> payment_methods
         * numero_operacion -> operation_number
         * autorizacion -> authorization
         * entidad_financiera -> financial_entity
         * sucursal -> branch
         * secuencia -> sequence
         */
        $mpayments = model('App\Modules\Sie\Models\Sie_Payments');


        $mpayments->save(array(
            "payment" => pk(),
            "record_type" => $data['tipo_registro'],
            "agreement" => $rp['convenio'],
            "id_number" => $rp['cedula'],
            "ticket" => $rp['orden'],
            "value" => $data['valor_recaudado'],
            "payment_origin" => $data['procedencia_pago'],
            "payment_methods" => $data['medios_pago'],
            "operation_number" => $data['numero_operacion'],
            "authorization" => $data['autorizacion'],
            "financial_entity" => $data['entidad_financiera'],
            "branch" => $data['sucursal'],
            "sequence" => $data['secuencia'],
        ));


    }
    $code .= "</table>";

    $card = $bootstrap->get_Card("success", array(
        "class" => "card",
        "title" => "Archivo cargado",
        "text-class" => "text-center",
        "text" => $code,
        "footer-continue" => $back,
        "footer-class" => "text-center",
        "voice" => false,
    ));
    echo($card);
} else {

}
?>