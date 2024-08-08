<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-05 14:58:42
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Enrollments\Creator\index.php]
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
    'Enrollments' => 'Matrículas',
    'Enrollment' => 'Matrícula',
    'message-list-description' => 'Este listado incluye únicamente a los prematriculados que fueron admitidos después del proceso de entrevista. Con él, podrán generar el comprobante para la matrícula financiera. Una vez realizado el pago, procederán a la matrícula académica. Por <u>disposición rectoral, se permite realizar la matrícula académica</u> a quienes aún no hayan completado los trámites financieros.',
    'academic_enrollment' => 'Matrícula Académica',
    'financial_enrollment' => 'Matrícula Financiera',
    'list_of_enrolled' => 'Listado de Matriculados',
    // - Enrollments fields
    "label_enrollment" => "Código de matrícula",
    "label_student" => "Código de estudiante",
    "label_student_name" => "Nombre del estudiante",
    "label_program" => "Código del programa académico",
    "label_program_name" => "Nombre del programa académico",
    "label_grid" => "Código de la malla curricular",
    "label_version" => "Versión de la malla",
    "label_version_reference" => "Referencia de la versión",
    "label_observation" => "Observaciones",
    "label_date" => "Fecha",
    "label_time" => "Hora",
    "label_author" => "Autor",
    "label_created_at" => "Creado el",
    "label_updated_at" => "Actualizado el",
    "label_deleted_at" => "Eliminado el",
    "placeholder_enrollment" => "Matrícula",
    "placeholder_student" => "Estudiante",
    "placeholder_program" => "Programa",
    "placeholder_grid" => "Malla",
    "placeholder_version" => "Versión",
    "placeholder_observation" => "Observación",
    "placeholder_date" => "Fecha",
    "placeholder_time" => "Hora",
    "placeholder_author" => "Autor",
    "placeholder_created_at" => "Creado el",
    "placeholder_updated_at" => "Actualizado el",
    "placeholder_deleted_at" => "Eliminado el",
    "help_enrollment" => "Matrícula",
    "help_student" => "Estudiante",
    "help_program" => "Programa",
    "help_grid" => "Malla",
    "help_version" => "Versión",
    "help_observation" => "Observación",
    "help_date" => "Fecha",
    "help_time" => "Hora",
    "help_author" => "Autor",
    "help_created_at" => "Creado el",
    "help_updated_at" => "Actualizado el",
    "help_deleted_at" => "Eliminado el",
    // - Enrollments creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevas matrículas. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, contacte al personal de soporte técnico para que estos le sean asignados, según sea el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nueva matrícula",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Matrícula existente!",
    "create-duplicate-message" => "Esta matrícula ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de matrículas.",
    "create-success-title" => "¡Matrícula registrada exitosamente!",
    "create-success-message" => "La matrícula se registró exitosamente. Para retornar al listado general de matrículas, presione continuar en la parte inferior de este mensaje.",
    // - Enrollments viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar matrículas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "El elemento que intenta ver no existe o fue eliminado previamente.",
    "view-success-title" => "Visualización exitosa",
    "view-success-message" => "Se ha cargado correctamente la información de la matrícula.",
    // - Enrollments editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar matrículas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar matrícula!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o se eliminó previamente. Para retornar al listado general de matrículas, presione continuar en la parte inferior de este mensaje.",
    "edit-success-title" => "¡Matrícula actualizada!",
    "edit-success-message" => "Los datos de la matrícula se <b>actualizaron exitosamente</b>. Para retornar al listado general de matrículas, presione el botón continuar en la parte inferior del presente mensaje.",
    // - Enrollments deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar matrículas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar matrícula!",
    "delete-message" => "Para confirmar la eliminación de la matrícula <b>%s</b>, presione eliminar. Para retornar al listado general de matrículas, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de matrículas, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Matrícula eliminada exitosamente!",
    "delete-success-message" => "La matrícula se eliminó exitosamente. Para retornar al listado general de matrículas, presione el botón continuar en la parte inferior de este mensaje.",
    // - Enrollments list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de matrículas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de matrículas",
];

?>