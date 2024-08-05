<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-05 11:29:16
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Courses\Creator\index.php]
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
    // - Courses fields
    "label_course" => "Código del curso",
    "label_reference" => "Referencia del curso",
    "label_program" => "Código del programa",
    "label_grid" => "Malla curricular(MC)",
    "label_version" => "Versión(VMC)",
    "label_version_reference" => "Referencia (VMC)",
    "label_module" => "Código del módulo",
    "label_teacher" => "Código del profesor",
    "label_name" => "Nombre del curso",
    "label_description" => "Descripción del curso",
    "label_maximum_quota" => "Cupo máximo de estudiantes",
    "label_start" => "Fecha de inicio",
    "label_end" => "Fecha de finalización",
    "label_period" => "Periodo académico",
    "label_space" => "Espacio físico",
    "label_author" => "Autor del registro",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_course" => "Código del curso",
    "placeholder_reference" => "Ej: CURSO-001",
    "placeholder_program" => "Código del programa",
    "placeholder_grid" => "",
    "placeholder_version" => "",
    "placeholder_version_reference" => "",
    "placeholder_module" => "Código del módulo",
    "placeholder_teacher" => "Código del profesor",
    "placeholder_name" => "Ej: Curso de programación en PHP",
    "placeholder_description" => "Ej: Curso de programación en PHP, nivel básico, dirigido a estudiantes de primer semestre de técnologia de sistemas.",
    "placeholder_maximum_quota" => "Cupo máximo de estudiantes",
    "placeholder_start" => "Fecha de inicio",
    "placeholder_end" => "Fecha finalización",
    "placeholder_period" => "Periodo académico",
    "placeholder_space" => "Espacio físico",
    "placeholder_author" => "Autor del registro",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_course" => "Curso",
    "help_reference" => "Código personalizado(Opcional)",
    "help_program" => "Seleccione el programa al que pertenece el curso.",
    "help_grid" => "Seleccione la malla curricular a la que pertenece el curso.",
    "help_version" => "Automático",
    "help_version_reference" => "Automático",
    "help_module" => "Código del módulo",
    "help_teacher" => "Código del profesor",
    "help_name" => "Nombre del curso",
    "help_description" => "Descripción del curso",
    "help_maximum_quota" => "Cupo Máximo de estudiantes",
    "help_start" => "Fecha de inicio",
    "help_end" => "Fecha finalización",
    "help_period" => "Periodo académico",
    "help_space" => "Espacio físico",
    "help_author" => "Autor del registro",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Courses creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos cursos. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, contacte al personal de soporte técnico para que le sean asignados los permisos necesarios, si es el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nuevo curso",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Curso existente!",
    "create-duplicate-message" => "Este curso ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para regresar al listado general de cursos.",
    "create-success-title" => "¡Curso registrado exitosamente!",
    "create-success-message" => "El curso se registró exitosamente. Para regresar al listado general de cursos, presione continuar en la parte inferior de este mensaje.",
    // - Courses viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar cursos en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Curso %s",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Courses editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar cursos en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar curso!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o fue eliminado previamente. Para regresar al listado general de cursos, presione continuar en la parte inferior de este mensaje.",
    "edit-success-title" => "¡Curso actualizado!",
    "edit-success-message" => "Los datos del curso se <b>actualizaron exitosamente</b>. Para regresar al listado general de cursos, presione el botón continuar en la parte inferior de este mensaje.",
    // - Courses deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar cursos en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar curso!",
    "delete-message" => "Para confirmar la eliminación del curso <b>%s</b>, presione eliminar. Para regresar al listado general de cursos, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o fue eliminado previamente. Para regresar al listado general de cursos, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Curso eliminado exitosamente!",
    "delete-success-message" => "El curso se eliminó exitosamente. Para regresar al listado general de cursos, presione el botón continuar en la parte inferior de este mensaje.",
    // - Courses list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de cursos en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de cursos",
];

?>