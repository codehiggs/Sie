<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-06 16:33:26
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Enrolleds\Editor\validator.php]
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
$f = service("forms", array("lang" => "Sie_Enrolleds."));
/*
* -----------------------------------------------------------------------------
* [Request]
* -----------------------------------------------------------------------------
*/
$f->set_ValidationRule("enrolled", "trim|required");
$f->set_ValidationRule("course", "trim|required");
$f->set_ValidationRule("student", "trim|required");
$f->set_ValidationRule("status", "trim|required");
$f->set_ValidationRule("author", "trim|required");
$f->set_ValidationRule("created_at", "trim|required");
$f->set_ValidationRule("updated_at", "trim|required");
$f->set_ValidationRule("deleted_at", "trim|required");
/*
* -----------------------------------------------------------------------------
* [Validation]
* -----------------------------------------------------------------------------
*/
if ($f->run_Validation()) {
    $c = view($component . '\processor', $parent->get_Array());
} else {
    $errors = $f->validation->listErrors();
    $smarty = service("smarty");
    $smarty->set_Mode("bs5x");
    $smarty->assign("title", lang("Enrolleds.view-errors-title"));
    $smarty->assign("message", lang("Enrolleds.view-errors-message"));
    $smarty->assign("errors", $errors);
    $smarty->assign("continue", null);
    $smarty->assign("voice", "sie/enrolleds-view-errors-message.mp3");
    $c = $smarty->view('alerts/card/danger.tpl');
    $c .= view($component . '\form', $parent->get_Array());
}
/*
* -----------------------------------------------------------------------------
* [Build]
* -----------------------------------------------------------------------------
*/
echo($c);
?>
