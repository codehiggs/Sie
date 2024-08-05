<?php
$mfields = model("App\Modules\Security\Models\Security_Users_Fields");
$profile = $mfields->get_Profile($oid);

print_r($profile);
?>