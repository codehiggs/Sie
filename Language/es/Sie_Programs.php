<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-03-14 07:59:35
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Programs\Creator\index.php]
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
    // - Campos de Programas
    "label_program" => "Código del programa",
    "label_reference" => "Referencia del programa",
    "label_name" => "Nombre legible del programa",
    "label_acronym" => "Siglas del programa",
    "label_snies" => "Código SNIES",
    "label_ies" => "IES",
    "label_ies_parent" => "IES Padre",
    "label_credits" => "Créditos académicos",
    "label_resolution" => "Resolución de autorización",
    "label_resolution_date" => "Fecha de la resolución",
    "label_resolution_execution" => "Fecha de ejecutoria",
    "label_evaluation" => "Tipo de evaluación",
    "label_academic_level" => "Nivel académico",
    "label_modality" => "Modalidad",
    "label_education_level" => "Nivel de formación",
    "label_awarded_title" => "Título otorgado",
    "label_groups" => "Aplica para grupos",
    "label_preregistration" => "Preinscripciones Abiertas?",
    "label_status" => "Estado del programa",
    "label_author" => "Autor del registro",
    "label_created_at" => "Creado el",
    "label_updated_at" => "Actualizado el",
    "label_deleted_at" => "Eliminado el",
    "placeholder_program" => "Programa",
    "placeholder_reference" => "Ej.: ECO2023A",
    "placeholder_name" => "Ej.: Tecnología en Gestión X",
    "placeholder_acronym" => "Ej.: TEGX",
    "placeholder_snies" => "Ej.: 123456789",
    "placeholder_ies" => "Ej.: 12345-456",
    "placeholder_ies_parent" => "Ej.: 12345",
    "placeholder_credits" => "0",
    "placeholder_resolution" => "Ej.: 1234",
    "placeholder_resolution_date" => "Fecha de resolución",
    "placeholder_evaluation" => "Evaluación",
    "placeholder_groups" => "Grupos",
    "placeholder_preregistration" => "Preinscripción",
    "placeholder_status" => "Estado",
    "placeholder_author" => "Autor",
    "placeholder_created_at" => "Creado el",
    "placeholder_updated_at" => "Actualizado el",
    "placeholder_deleted_at" => "Eliminado el",
    "help_program" => "Programa",
    "help_reference" => "Referencia del programa (Opcional)",
    "help_name" => "Nombre del programa (Obligatorio)",
    "help_acronym" => "Siglas del programa (Opcional)",
    "help_snies" => "Código (Obligatorio)",
    "help_ies" => "Código (Obligatorio)",
    "help_ies_parent" => "Código (Obligatorio)",
    "help_credits" => "Número (Obligatorio)",
    "help_resolution" => "Número de resolución (Obligatorio)",
    "help_resolution_date" => "Ingrese una fecha (Obligatorio)",
    "help_resolution_execution" => "Ingrese una fecha (Obligatorio)",
    "help_evaluation" => "Seleccione una opción (Obligatorio)",
    "help_groups" => "Seleccione una opción (Obligatorio)",
    "help_preregistration" => "Seleccione una opción (Obligatorio)",
    "help_status" => "Seleccione una opción (Obligatorio)",
    "help_author" => "Autor",
    "help_created_at" => "Creado el",
    "help_updated_at" => "Actualizado el",
    "help_deleted_at" => "Eliminado el",
    // - Creador de Programas
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos programas. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, contacte al personal de soporte técnico para que estos le sean asignados, según sea el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nuevo programa",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Programa existente!",
    "create-duplicate-message" => "Este programa ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de programas.",
    "create-success-title" => "¡Programa registrado exitosamente!",
    "create-success-message" => "El programa se registró exitosamente. Para retornar al listado general de programas, presione continuar en la parte inferior de este mensaje.",
    // - Visor de Programas
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar programas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Programa: %s",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Editor de Programas
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar programas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar programa!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que desea actualizar no existe o se eliminó previamente. Para retornar al listado general de programas, presione continuar en la parte inferior de este mensaje.",
    "edit-success-title" => "¡Programa actualizado!",
    "edit-success-message" => "Los datos del programa se <b>actualizaron exitosamente</b>. Para retornar al listado general de programas, presione el botón continuar en la parte inferior del presente mensaje.",
    // - Eliminador de Programas
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar programas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar programa!",
    "delete-message" => "Para confirmar la eliminación del programa <b>%s</b>, presione eliminar. Para retornar al listado general de programas, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de programas, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Programa eliminado exitosamente!",
    "delete-success-message" => "El programa se eliminó exitosamente. Para retornar al listado general de programas, presione el botón continuar en la parte inferior de este mensaje.",
    // - Lista de Programas
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de programas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de programas",
];

?>