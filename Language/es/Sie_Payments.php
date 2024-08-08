<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-05 17:15:26
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Payments\Creator\index.php]
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
    // - Payments fields
    "label_payment" => "Código del pago",
    "label_record_type" => "Tipo de registro",
    "label_agreement" => "Código de convenio",
    "label_id_number" => "Numero de Identificación",
    "label_ticket" => "Numero del Ticket(Factura)",
    "label_value" => "Valor",
    "label_description" => "Descripción del pago",
    "label_payment_origin" => "Origen del pago",
    "label_payment_methods" => "Métodos de pago",
    "label_operation_number" => "Numero de operación",
    "label_authorization" => "Autorización",
    "label_financial_entity" => "Entidad financiera",
    "label_branch" => "Rama",
    "label_sequence" => "Secuencia",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_payment" => "Código del pago",
    "placeholder_record_type" => "Tipo de registro",
    "placeholder_agreement" => "Código de convenio",
    "placeholder_id_number" => "Ejemplo: 1234567890",
    "placeholder_ticket" => "Ejemplo: 1234567890",
    "placeholder_value" => "Ejemplo: 91000",
    "placeholder_payment_origin" => "Origen del pago",
    "placeholder_payment_methods" => "Métodos de pago",
    "placeholder_operation_number" => "Número de operación",
    "placeholder_authorization" => "Autorización",
    "placeholder_financial_entity" => "Entidad financiera",
    "placeholder_branch" => "Rama",
    "placeholder_sequence" => "Secuencia",
    "placeholder_description" => "Ejemplo: Pago de matricula por Servientrega",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_payment" => "Código del pago",
    "help_record_type" => "Tipo de registro",
    "help_agreement" => "Convenio",
    "help_id_number" => "Número de identificación",
    "help_ticket" => "ticket (Factura)",
    "help_value" => "Valor",
    "help_payment_origin" => "Origen del pago",
    "help_payment_methods" => "Métodos de pago",
    "help_operation_number" => "Número de operación",
    "help_authorization" => "Autorización",
    "help_financial_entity" => "Entidad financiera",
    "help_branch" => "Rama",
    "help_sequence" => "Secuencia",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Payments creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos pagos. Por favor, póngase en contacto con el administrador del sistema o con el personal de soporte técnico para que estos le sean asignados, según sea el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nuevo pago",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Pago existente!",
    "create-duplicate-message" => "Este pago ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de pagos.",
    "create-success-title" => "¡Pago registrado exitosamente!",
    "create-success-message" => "El pago se registró exitosamente. Para retornar al listado general de pagos, presione continuar en la parte inferior de este mensaje.",
    // - Payments viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar pagos en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Payments editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar pagos en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar pago!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o ha sido eliminado previamente. Para retornar al listado general de pagos, presione continuar en la parte inferior de este mensaje.",
    "edit-success-title" => "¡Pago actualizado!",
    "edit-success-message" => "Los datos de pago se <b>actualizaron exitosamente</b>. Para retornar al listado general de pagos, presione el botón continuar en la parte inferior de este mensaje.",
    // - Payments deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para eliminar pagos en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar pago!",  
    "delete-message" => "Para confirmar la eliminación del pago <b>%s</b>, presione eliminar. Para retornar al listado general de pagos, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de pagos, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Pago eliminado exitosamente!",
    "delete-success-message" => "El pago se eliminó exitosamente. Para retornar al listado general de pagos, presione el botón continuar en la parte inferior de este mensaje.",
    // - Payments list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de pagos en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de pagos",
];

?>