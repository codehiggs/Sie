<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-07-18 06:39:28
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Spaces\Creator\index.php]
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
return [
    // - Spaces fields
    "label_space" => "Código del espacio",
    "label_headquarter" => "Sede",
    "label_type" => "Tipo",
    "label_block" => "Bloque",
    "label_name" => "Nombre",
    "label_description" => "Descripción",
    "label_area" => "Area",
    "label_static_capacity" => "Capacidad estática",
    "label_dynamic_capacity" => "Capacidad dinámica",
    "label_tv" => "TV",
    "label_split_wall" => "Proyector de pared",
    "label_split_ceiling" => "Proyector de techo",
    "label_videobeam" => "Videobeam",
    "label_sound" => "Sonido",
    "label_author" => "Autor",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_space" => "Código del espacio",
    "placeholder_headquarter" => "Sede",
    "placeholder_type" => "Tipo",
    "placeholder_block" => "Bloque",
    "placeholder_name" => "Nombre",
    "placeholder_description" => "Descripción",
    "placeholder_area" => "Área",
    "placeholder_static_capacity" => "Capacidad estática",
    "placeholder_dynamic_capacity" => "Capacidad dinámica",
    "placeholder_tv" => "TV",
    "placeholder_split_wall" => "Proyector de pared",
    "placeholder_split_ceiling" => "Proyector de techo",
    "placeholder_videobeam" => "videobeam",
    "placeholder_sound" => "Sonido",
    "placeholder_author" => "Autor",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_space" => "Código de espacio",
    "help_headquarter" => "Sede",
    "help_type" => "Tipo",
    "help_block" => "Bloque",
    "help_name" => "Nombre",
    "help_description" => "Descripción",
    "help_area" => "Área",
    "help_static_capacity" => "Capacidad estática",
    "help_dynamic_capacity" => "Capacidad dinámica",
    "help_tv" => "TV",
    "help_split_wall" => "Proyector de pared",
    "help_split_ceiling" => "Proyector de techo",
    "help_videobeam" => "videobeam",
    "help_sound" => "Sonido",
    "help_author" => "Autor",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Spaces creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos espacios. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, contacte al personal de soporte técnico para que estos le sean asignados, según sea el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nuevo espacio",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Espacio existente!",
    "create-duplicate-message" => "Este espacio ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de espacios.",
    "create-success-title" => "¡Espacio registrado exitosamente!",
    "create-success-message" => "El espacio se registró exitosamente. Para retornar al listado general de espacios, presione continuar en la parte inferior de este mensaje.",
    // - Spaces viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar espacios en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Spaces editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar espacios en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar espacio!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El espacio a actualizar no existe o se eliminó previamente. Para retornar al listado general de espacios, presione continuar en la parte inferior de este mensaje.",
    "edit-success-title" => "¡Espacio actualizado!",
    "edit-success-message" => "Los datos del espacio se <b>actualizaron exitosamente</b>. Para retornar al listado general de espacios, presione el botón continuar en la parte inferior del presente mensaje.

",
    // - Spaces deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar espacios en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para solicitar la asignación de los permisos necesarios. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar espacio!",
    "delete-message" => "Para confirmar la eliminación del espacio <b>%s</b>, presione eliminar. Para retornar al listado general de espacios, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de espacios, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Espacio eliminado exitosamente!",
    "delete-success-message" => "El espacio se eliminó exitosamente. Para retornar al listado general de espacios, presione el botón continuar en la parte inferior de este mensaje.",
    // - Spaces list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para acceder al listado general de espacios en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de espacios",
];

?>