<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-06 8:34:57
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Pensums\Creator\index.php]
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
    // - Pensums fields
    "label_pensum" => "Código del pensum",
    "label_version" => "Código de versión",
    "label_module" => "Módulo",
    "label_cycle" => "Ciclo",
    "label_level" => "Nivel",
    "label_moment" => "Momento",
    "label_credits" => "Créditos",
    "label_weekly_hourly_intensity" => "Intensidad horaria semanal (IHS)",
    "label_monthly_hourly_intensity" => "Intensidad horaria total (IHT)",
    "label_evaluation" => "Evaluación",
    "label_author" => "Autor",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_pensum" => "Código del pensum",
    "placeholder_version" => "Código de versión",
    "placeholder_module" => "Módulo",
    "placeholder_cycle" => "Ciclo",
    "placeholder_level" => "Nivel",
    "placeholder_credits" => "Créditos",
    "placeholder_weekly_hourly_intensity" => "Intensidad horaria semanal (IHS)",
    "placeholder_monthly_hourly_intensity" => "Intensidad horaria total (IHT)",
    "placeholder_evaluation" => "Evaluación",
    "placeholder_author" => "Autor",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_pensum" => "Código automático(Obligatorio)",
    "help_version" => "Código automático(Heredado)",
    "help_module" => "Seleccione el módulo",
    "help_cycle" => "Ciclo académico(Obligatorio)",
    "help_level" => "Nivel académico",
    "help_credits" => "Créditos académicos",
    "help_weekly_hourly_intensity" => "Horas de trabajo por semana",
    "help_monthly_hourly_intensity" => "Horas de trabajo por mes",
    "help_evaluation" => "Evaluar para cerrar",
    "help_author" => "Autor",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Pensums creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos pensums. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, contacte al personal de soporte técnico para que se le asignen los permisos necesarios, según sea el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nuevo pensum",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Pensum existente!",
    "create-duplicate-message" => "Este pensum ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de pensums.",
    "create-success-title" => "¡Pensum registrado exitosamente!",
    "create-success-message" => "El pensum se registró exitosamente. Para retornar al listado general de pensums, presione continuar en la parte inferior de este mensaje.",
    // - Pensums viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar pensums en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Pensums editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para actualizar #plural en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar pensum!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o ha sido eliminado previamente. Para retornar al listado general de pensums, presione continuar en la parte inferior de este mensaje. ",
    "edit-success-title" => "¡Pensum actualizado!",
    "edit-success-message" => "Los datos de pensum se <b>actualizaron exitosamente</b>. Para retornar al listado general de pensums, presione el botón continuar en la parte inferior de este mensaje.",
    // - Pensums deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar pensums en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar pensum",
    "delete-message" => "Para confirmar la eliminación del pensum <b>%s</b>, presione eliminar. Para retornar al listado general de pensums, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de pensums, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Pensum eliminado exitosamente!",
    "delete-success-message" => "El pensum se eliminó exitosamente. Para retornar al listado general de pensums, presione el botón continuar en la parte inferior de este mensaje.",
    // - Pensums list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de pensums en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de pensums",
];

?>