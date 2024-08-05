<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-05 15:07:50
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Grids\Creator\index.php]
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
    // - Grids fields
    "label_grid" => "Código de la malla",
    "label_program" => "Código del programa",
    "label_name" => "Nombre legible",
    "label_description" => "Descripción (Objetivo de formación)",
    "label_status" => "Estado",
    "label_author" => "Autor",
    "label_date" => "Fecha",
    "label_time" => "Hora",
    "placeholder_grid" => "Código de la malla",
    "placeholder_program" => "Código del programa",
    "placeholder_name" => "Ej: Técnico Profesional en Prospección y Exploración Minero-Energética",
    "placeholder_description" => "Ej: Operar equipos de geoinformación para la adquisición, procesamiento y almacenamiento de datos geoespaciales, con el propósito de generar productos cartográficos y de teledetección que contribuyan a la precisión en el dimensionamiento de la exploración y explotación minero-energética, aplicando técnicas y procedimientos estandarizados en el marco de proyectos de infraestructura multidisciplinarios.",
    "placeholder_status" => "Estado",
    "placeholder_author" => "Autor",
    "placeholder_date" => "Fecha",
    "placeholder_time" => "Hora",
    "help_grid" => "Código automático (Obligatorio)",
    "help_program" => "Código heredado (Obligatorio)",
    "help_name" => "Nombre legible (Obligatorio)",
    "help_description" => "Descripción (Obligatorio)",
    "help_status" => "Estado(Obligatorio)",
    "help_author" => "Autor",
    "help_date" => "Fecha",
    "help_time" => "Hora",
    // - Grids creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevas mallas. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, con el personal de soporte técnico para que le sean asignados los permisos necesarios, si es el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nueva malla",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Malla existente!",
    "create-duplicate-message" => "Esta malla ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de mallas.",
    "create-success-title" => "¡Malla registrada exitosamente!",
    "create-success-message" => "La malla se registró exitosamente. Para retornar al listado general de mallas, presione continuar en la parte inferior de este mensaje.",
    // - Grids viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar mallas en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique eh inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Grids editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar mallas en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar malla!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o fue eliminado previamente. Para retornar al listado general de mallas, presione continuar en la parte inferior de este mensaje.",
    "edit-success-title" => "¡Malla actualizada!",
    "edit-success-message" => "Los datos de la malla se <b>actualizaron exitosamente</b>. Para retornar al listado general de mallas, presione el botón continuar en la parte inferior del presente mensaje.",
    // - Grids deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar mallas en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar malla!",
    "delete-message" => "Para confirmar la eliminación de la malla <b>%s</b>, presione eliminar. Para retornar al listado general de mallas, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de mallas, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡malla eliminada exitosamente!",
    "delete-success-message" => "La malla se eliminó exitosamente. Para retornar al listado general de mallas, presione el botón continuar en la parte inferior de este mensaje.",
    // - Grids list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de mallas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de mallas",
];

?>