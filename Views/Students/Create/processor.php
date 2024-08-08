<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-08 11:21:05
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Security\Views\Users\Creator\processor.php]
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
 * █ @authentication, @request, @dates, @parent, @component, @view, @oid, @views, @prefix
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
//[Services]-----------------------------------------------------------------------------
$request = service('Request');
$bootstrap = service('Bootstrap');
$dates = service('Dates');
$strings = service('strings');
$authentication = service('authentication');
//[Models]-----------------------------------------------------------------------------
$f = service("forms", array("lang" => "Sie_Users."));
$model = model("App\Modules\Security\Models\Security_Users");
$d = array(
    "user" => $f->get_Value("user"),
    "author" => safe_get_user(),
);
$row = $model->find($d["user"]);
$l["back"] = "/sie/students/list/" . lpk();
$l["edit"] = "/sie/students/edit/{$d["user"]}";
$asuccess = "security/users-create-success-message.mp3";
$aexist = "security/users-create-exist-message.mp3";
if (is_array($row)) {
    $c = $bootstrap->get_Card("duplicate", array(
        "class" => "card-warning",
        "icon" => "fa-duotone fa-triangle-exclamation",
        "title" => lang("Users.create-duplicate-title"),
        "text-class" => "text-center",
        "text" => lang("Users.create-duplicate-message"),
        "footer-continue" => $l["back"],
        "footer-class" => "text-center",
        "voice" => $aexist,
    ));
} else {
    $create = $model->insert($d);
    $mfields = model("App\Modules\Security\Models\Security_Users_Fields");
    $user = $d["user"];
    $firstname = $f->get_Value("firstname");
    $lastname = $f->get_Value("lastname");
    $alias = strtoupper($f->get_Value("alias"));
    $type = "STUDENT";
    $password = strtoupper($f->get_Value("password"));
    $phone = $f->get_Value("phone");
    $email = $f->get_Value("email");
    $birthday = $f->get_Value("birthday");
    $reference = $f->get_Value("reference");
    $notes = $f->get_Value("notes");
    $citizenshipcard = $f->get_Value("citizenshipcard");
    $token_email = md5(uniqid(rand(), true));
    $address = $f->get_Value("address");
    $expedition_date = $f->get_Value("expedition_date");
    $expedition_place = $f->get_Value("expedition_place");
    $moodle_username = $f->get_Value("moodle-username");
    $moodle_password = $f->get_Value("moodle-password");
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "alias", "value" => $alias));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "type", "value" => $type));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "password", "value" => $password));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "firstname", "value" => $firstname));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "lastname", "value" => $lastname));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "email", "value" => $email));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "phone", "value" => $phone));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "birthday", "value" => $birthday));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "citizenshipcard", "value" => $citizenshipcard));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "token-email", "value" => $token_email));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "address", "value" => $address));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "expedition_date", "value" => $expedition_date));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "expedition_place", "value" => $expedition_place));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "reference", "value" => $reference));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "notes", "value" => $notes));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "moodle-username", "value" => $moodle_username));
    $mfields->insert(array("field" => pk(), "user" => $user, "name" => "moodle-password", "value" => $moodle_password));
    cache()->delete($mfields->get_CacheKey("profile-{$user}"));

    //echo($model->getLastQuery()->getQuery());
    $c = $bootstrap->get_Card("success", array(
        "class" => "card-success",
        "icon" => "fa-duotone fa-triangle-exclamation",
        "title" => lang("Users.create-success-title"),
        "text-class" => "text-center",
        "text" => sprintf(lang("Users.create-success-message"), $d['user']),
        "footer-continue" => $l["back"],
        "footer-class" => "text-center",
        "voice" => $asuccess,
    ));
}
echo($c);
?>
