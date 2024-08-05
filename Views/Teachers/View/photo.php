<?php
/**
 * @var $oid
 */
$bootstrap = service("bootstrap");
$mfields = model("App\Modules\Security\Models\Security_Users_Fields");
$profile = $mfields->get_Profile($oid);

$code = "<img src=\"" . $profile['avatar'] . "\" id=\"croppie\" class=\"img-fluid\">";

$card = $bootstrap->get_Card("create", array(
    "title" => sprintf(lang("Users.profile-photo"), $oid),
    "content" => $code,
));
echo($card);
?>