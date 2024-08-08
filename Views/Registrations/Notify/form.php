<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-08 11:00:27
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Registrations\Editor\form.php]
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
$f = service("forms", array("lang" => "Sie_Registrations."));
//[models]--------------------------------------------------------------------------------------------------------------
//$model = model("App\Modules\Sie\Models\Sie_Registrations");
//[vars]----------------------------------------------------------------------------------------------------------------
$row = $model->get_Registration($oid);
$r["registration"] = $f->get_Value("registration", $row["registration"]);
$r["first_name"] = $f->get_Value("first_name", $row["first_name"]);
$r["second_name"] = $f->get_Value("second_name", $row["second_name"]);
$r["first_surname"] = $f->get_Value("first_surname", $row["first_surname"]);
$r["second_surname"] = $f->get_Value("second_surname", $row["second_surname"]);
$r["identification_type"] = $f->get_Value("identification_type", $row["identification_type"]);
$r["identification_number"] = $f->get_Value("identification_number", $row["identification_number"]);
$r["gender"] = $f->get_Value("gender", $row["gender"]);
$r["email_address"] = $f->get_Value("email_address", $row["email_address"]);
$r["phone"] = $f->get_Value("phone", $row["phone"]);
$r["mobile"] = $f->get_Value("mobile", $row["mobile"]);
$r["date_of_birth"] = $f->get_Value("date_of_birth", $row["date_of_birth"]);
$r["address"] = $f->get_Value("address", $row["address"]);
$r["place_of_residence"] = $f->get_Value("place_of_residence", $row["place_of_residence"]);
$r["neighborhood"] = $f->get_Value("neighborhood", $row["neighborhood"]);
$r["area"] = $f->get_Value("area", $row["area"]);
$r["stratum"] = $f->get_Value("stratum", $row["stratum"]);
$r["transport_method"] = $f->get_Value("transport_method", $row["transport_method"]);
$r["sisben_group"] = $f->get_Value("sisben_group", $row["sisben_group"]);
$r["sisben_subgroup"] = $f->get_Value("sisben_subgroup", $row["sisben_subgroup"]);
$r["document_issue_place"] = $f->get_Value("document_issue_place", $row["document_issue_place"]);
$r["place_of_birth"] = $f->get_Value("place_of_birth", $row["place_of_birth"]);
$r["blood_type"] = $f->get_Value("blood_type", $row["blood_type"]);
$r["marital_status"] = $f->get_Value("marital_status", $row["marital_status"]);
$r["number_children"] = $f->get_Value("number_children", $row["number_children"]);
$r["military_card"] = $f->get_Value("military_card", $row["military_card"]);
$r["ars"] = $f->get_Value("ars", $row["ars"]);
$r["insurer"] = $f->get_Value("insurer", $row["insurer"]);
$r["eps"] = $f->get_Value("eps", $row["eps"]);
$r["education_level"] = $f->get_Value("education_level", $row["education_level"]);
$r["occupation"] = $f->get_Value("occupation", $row["occupation"]);
$r["health_regime"] = $f->get_Value("health_regime", $row["health_regime"]);
$r["document_issue_date"] = $f->get_Value("document_issue_date", $row["document_issue_date"]);
$r["saber11"] = $f->get_Value("saber11", $row["saber11"]);
$back = "/sie/registrations/list/" . lpk();
//[fields]----------------------------------------------------------------------------------------------------------------
$f->add_HiddenField("registration", $r["registration"]);
$f->fields["to"] = $f->get_FieldText("to", array("value" => $r["email_address"], "proportion" => "col-12"));
$f->fields["subject"] = $f->get_FieldText("subject", array("value" => lang("Registrations.notify-subject"), "proportion" => "col-12", "readonly" => true));

$code = "<p style=\"font-size: 1.3rem;font-weight: bold;\"'>¡Gracias por tu interés en unirte a nuestra comunidad!\n</p>";
$code .= "<p>¡Hola {$r["first_name"]}!</p>\n";
$code .= "<p>Espero que este mensaje te encuentre bien.\tEstamos emocionados de que hayas decidido dar el primer paso hacia la educación superior en Utedé, enviando tu solicitud de preinscripción para el semestre 2024B.</p>\n";
$code .= "<p><b>Primero lo primero</b>: el pago de la preinscripción.\tEncontrarás adjunto el recibo necesario para realizar este pago.\tPor favor, efectúa el pago según las indicaciones y no olvides subir los documentos requeridos a nuestra plataforma usando este enlace:\t <a href=\"https://intranet.utede.edu.co/sie/registrations/create/fullscreen\">Cargar Documentos!</a>. Recuerda que al escribir de nuevo donde debes registrar tu número de documento podrás completar el registro hasta el último paso donde debes cargar estos documentos escaneados.</p>\n";
$code .= "<ol>\n";
$code .= "<li>Documento de identidad ampliado al 150% (No aceptamos scans desde el móvil).</li>\n";
$code .= "<li>Resultados de las pruebas Saber ICFES 11 o un acta de compromiso si aún no los tienes.</li>\n";
$code .= "<li>Acta de grado de bachiller.</li>\n";
$code .= "<li>Diploma de bachiller.</li>\n";
$code .= "<li>Certificado de tu EPS, que puedes consultar aquí: <a href=\"https://www.adres.gov.co/consulte-su-eps\" target=\"_blank\">https://www.adres.gov.co/consulte-su-eps</a>.</li>\n";
$code .= "<li>Certificado del Sisbén, disponible aquí: <a href=\"https://www.sisben.gov.co/Paginas/consulta-tu-grupo.html\">https://www.sisben.gov.co/sisben/</a>.</li>\n";
$code .= "<li>Foto digital tamaño 3x4 cm con fondo blanco para tu carnet.</li>\n";
$code .= "<li>Si tienes más de 18 años y votaste en las elecciones de 2023, incluye tu certificado de votación.</li>\n";
$code .= "<li>Una copia de un recibo de servicio público que confirme tu dirección.</li>\n";
$code .= "</ol>\n";
$code .= "<p>¡Esperamos verte pronto!</b></p>\n";
$code .= "<p>Atentamente,</p>\n";
$code .= "</br>\n";
$code .= "<p><b>Leidy Johana Ortiz</b>\n";
$code .= "<br>Psicología de Bienestar \n";
//$code .= "<br>Tel: +57 3104218097";
$code .= "</p>\n";
$code .= "\n";


$f->fields["message"] = $f->get_FieldCKEditor("message", array("value" => $code, "proportion" => "col-12"));

$f->fields["cancel"] = $f->get_Cancel("cancel", array("href" => $back, "text" => lang("App.Cancel"), "type" => "secondary", "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["submit"] = $f->get_Submit("submit", array("value" => lang("App.Send"), "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-left"));
//[groups]----------------------------------------------------------------------------------------------------------------
$f->groups["g1"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["to"])));
$f->groups["g2"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["subject"])));
$f->groups["g3"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["message"])));
//[buttons]-------------------------------------------------------------------------------------------------------------
$f->groups["gy"] = $f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields" => $f->fields["submit"] . $f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $bootstrap->get_Card("create", array(
    "title" => lang("Registrations.notify-title"),
    "content" => $f,
    "header-back" => $back
));
echo($card);
?>
