<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-06 16:02:12
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Registrations\Editor\processor.php]
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
$request = service('request');
$bootstrap = service('bootstrap');
$dates = service('dates');
$strings = service('strings');
$authentication = service('authentication');
//[services]------------------------------------------------------------------------------------------------------------
$model = model("App\Modules\Sie\Models\Sie_Registrations");
//[Process]-----------------------------------------------------------------------------
$f = service("forms", array("lang" => "Sie_Registrations."));
$tab = $f->get_Value("tab");
if ($tab == "1") {
    $d = array(
        "registration" => $f->get_Value("registration"),
        "period" => $f->get_Value("period"),
        "journey" => $f->get_Value("journey"),
        "program" => $f->get_Value("program"),
        "first_name" => $f->get_Value("first_name"),
        "second_name" => $f->get_Value("second_name"),
        "first_surname" => $f->get_Value("first_surname"),
        "second_surname" => $f->get_Value("second_surname"),
        "identification_type" => $f->get_Value("identification_type"),
        "identification_number" => $f->get_Value("identification_number"),
        "document_issue_place" => $f->get_Value("document_issue_place"),
        "gender" => $f->get_Value("gender"),
        "email_address" => $f->get_Value("email_address"),
        "phone" => $f->get_Value("phone"),
        "mobile" => $f->get_Value("mobile"),
        "date_of_birth" => $f->get_Value("date_of_birth"),
        "place_of_birth" => $f->get_Value("place_of_birth"),
        "address" => $f->get_Value("address"),
        "place_of_residence" => $f->get_Value("place_of_residence"),
        "neighborhood" => $f->get_Value("neighborhood"),
        "status" => $f->get_Value("status"),
        "observations" => $f->get_Value("observations"),
    );
} elseif ($tab == "2") {
    $d = array(
        "registration" => $f->get_Value("registration"),
        "linkage_type" => $f->get_Value("linkage_type"),
        "ethnic_group" => $f->get_Value("ethnic_group"),
        "indigenous_people" => $f->get_Value("indigenous_people"),
        "afro_descendant" => $f->get_Value("afro_descendant"),
        "disability" => $f->get_Value("disability"),
        "disability_type" => $f->get_Value("disability_type"),
        "exceptional_ability" => $f->get_Value("exceptional_ability"),
        "responsible" => $f->get_Value("responsible"),
        "responsible_relationship" => $f->get_Value("responsible_relationship"),
        "responsible_phone" => $f->get_Value("responsible_phone"),
        "num_people_living_with_you" => $f->get_Value("num_people_living_with_you"),
        "num_people_contributing_economically" => $f->get_Value("num_people_contributing_economically"),
        "num_people_depending_on_you" => $f->get_Value("num_people_depending_on_you"),
        "first_in_family_to_study_university" => $f->get_Value("first_in_family_to_study_university"),
        "border_population" => $f->get_Value("border_population"),
        "identified_population_group" => $f->get_Value("identified_population_group"),
        "highlighted_population" => $f->get_Value("highlighted_population"),
        "area" => $f->get_Value("area"),
        "stratum" => $f->get_Value("stratum"),
        "transport_method" => $f->get_Value("transport_method"),
        "sisben_group" => $f->get_Value("sisben_group"),
        "sisben_subgroup" => $f->get_Value("sisben_subgroup"),
        "document_issue_place" => $f->get_Value("document_issue_place"),
        "blood_type" => $f->get_Value("blood_type"),
        "marital_status" => $f->get_Value("marital_status"),
        "number_children" => $f->get_Value("number_children"),
        "military_card" => $f->get_Value("military_card"),
        "ars" => $f->get_Value("ars"),
        "insurer" => $f->get_Value("insurer"),
        "eps" => $f->get_Value("eps"),
        "education_level" => $f->get_Value("education_level"),
        "occupation" => $f->get_Value("occupation"),
        "health_regime" => $f->get_Value("health_regime"),
        "document_issue_date" => $f->get_Value("document_issue_date"),
        "saber11" => $f->get_Value("saber11"),
    );
} elseif ($tab == "3") {
    $d = array(
        "registration" => $f->get_Value("registration"),
        "interview" => $f->get_Value("interview"),
    );
}
//[Elements]-----------------------------------------------------------------------------
$row = $model->get_Registration($d["registration"]);
$l["back"] = "/sie/agreements/list/" . lpk();
$l["edit"] = "/sie/registrations/edit/{$d["registration"]}";
$asuccess = "sie/registrations-edit-success-message.mp3";
$anoexist = "sie/registrations-edit-noexist-message.mp3";
//[build]---------------------------------------------------------------------------------------------------------------
if (is_array($row)) {
    $edit = $model->update($d['registration'], $d);
    cache()->clean();
    $c = $bootstrap->get_Card("success", array(
        "class" => "card-success",
        "icon" => "fa-duotone fa-triangle-exclamation",
        "title" => lang("Registrations.edit-success-title"),
        "text-class" => "text-center",
        "text" => lang("Registrations.edit-success-message"),
        "footer-continue" => $l["back"],
        "footer-class" => "text-center",
        "voice" => $asuccess,
    ));
} else {
    $create = $model->insert($d);
    //echo($model->getLastQuery()->getQuery());
    $c = $bootstrap->get_Card("warning", array(
        "class" => "card-warning",
        "icon" => "fa-duotone fa-triangle-exclamation",
        "title" => lang("Registrations.edit-noexist-title"),
        "text-class" => "text-center",
        "text" => sprintf(lang("Registrations.edit-noexist-message"), $d['registration']),
        "footer-continue" => $l["back"],
        "footer-class" => "text-center",
        "voice" => $anoexist,
    ));
}
echo($c);
?>
