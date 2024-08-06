<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-06 09:51:23
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Qualifications\Creator\index.php]
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
return [
    // - Qualifications fields
    "label_qualification" => "Código de competencia",
    "label_teacher" => "Código del profesor",
    "label_score" => "Puntuación",
    "label_weighting" => "Ponderación",
    "label_author" => "Autor",
    "label_created_at" => "created_at",
    "label_update_at" => "update_at",
    "label_delete_at" => "delete_at",
    "placeholder_qualification" => "Código de competencia",
    "placeholder_teacher" => "Código del profesor",
    "placeholder_score" => "Puntuación",
    "placeholder_weighting" => "Ponderación",
    "placeholder_author" => "Autor",
    "placeholder_created_at" => "created_at",
    "placeholder_update_at" => "update_at",
    "placeholder_delete_at" => "delete_at",
    "help_qualification" => "Código de competencia",
    "help_teacher" => "Código del profesor",
    "help_score" => "Puntuación",
    "help_weighting" => "Ponderación",
    "help_author" => "Autor",
    "help_created_at" => "created_at",
    "help_update_at" => "update_at",
    "help_delete_at" => "delete_at",
    // - Qualifications creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevas competencias, por favor póngase en contacto con el administrador del sistema o, en su efecto, contacte al personal de soporte técnico para que estos le sean asignados, según sea el caso. Para continuar presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nueva competencia",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Competencia existente!",
    "create-duplicate-message" => "Este competencia ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de competencias.",
    "create-success-title" => "Competencia registrada exitosamente!",
    "create-success-message" => "La competencia se registró exitosamente. Para retornar al listado general de competencias, presione continuar en la parte inferior de este mensaje.",
    // - Qualifications viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar competencias en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Qualifications editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar competencias en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar competencia!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o se eliminó previamente. Para retornar al listado general de competencias, presione continuar en la parte inferior de este mensaje.",
    "edit-success-title" => "¡Competencia actualizada!",
    "edit-success-message" => "Los datos de la competencia se <b>actualizaron exitosamente</b>. Para retornar al listado general de competencias, presione el botón continuar en la parte inferior del presente mensaje.",
    // - Qualifications deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar competencias en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje..",
    "delete-title" => "¡Eliminar competencia",
    "delete-message" => "Para confirmar la eliminación de la competencia <b>%s</b>, presione Eliminar. Para retornar al listado general de competencias, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de competencias, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Competencia eliminada exitosamente!",
    "delete-success-message" => "La competencia se eliminó exitosamente. Para retornar al listado general de competencias, presione el botón continuar en la parte inferior de este mensaje.",
    // - Qualifications list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de competencias en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de competencias",
];

?>