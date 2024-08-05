<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-05 16:45:30
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Orders\Creator\index.php]
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
    // - Orders fields
    "label_order" => "Código de pedido",
    "label_user" => "Código de usuario",
    "label_ticket" => "Ticket (Factura)",
    "label_parent" => "Principal",
    "label_period" => "Periodo",
    "label_total" => "Total",
    "label_paid" => "Pago",
    "label_status" => "Estado",
    "label_author" => "Autor",
    "label_type" => "Tipo",
    "label_date" => "Fecha",
    "label_time" => "Hora",
    "label_expiration" => "Expiración",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "label_installments" => "Número de Cuotas",
    "placeholder_order" => "Código de pedido",
    "placeholder_user" => "Código de usuario",
    "placeholder_ticket" => "ticket (Factura)",
    "placeholder_parent" => "Principal",
    "placeholder_period" => "Periodo",
    "placeholder_total" => "Total",
    "placeholder_paid" => "Pago",
    "placeholder_status" => "Estado",
    "placeholder_author" => "Autor",
    "placeholder_type" => "Tipo",
    "placeholder_date" => "Fecha",
    "placeholder_time" => "Hora",
    "placeholder_expiration" => "Expiración",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_order" => "Código de pedido",
    "help_user" => "Coódigo de usuario",
    "help_ticket" => "ticket (Factura)",
    "help_parent" => "Principal",
    "help_period" => "periodo",
    "help_total" => "Total",
    "help_paid" => "Pago",
    "help_status" => "Estado",
    "help_author" => "Autor",
    "help_type" => "Tipo",
    "help_date" => "Fecha",
    "help_time" => "Hora",
    "help_expiration" => "Expiración",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    "help_installments" => "Seleccione el número de cuotas",
    // - Orders creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos pedidos. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, con el personal de soporte técnico para que le sean asignados, según sea el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nuevo pedido",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Pedido existente!",
    "create-duplicate-message" => "Este pedido ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de pedidos.",
    "create-success-title" => "¡Pedido registrado exitosamente!",
    "create-success-message" => "El pedido se registró exitosamente. Para retornar al listado general de pedidos, presione continuar en la parte inferior de este mensaje.",
    // - Orders viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar pedidos en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Orders editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar pedidos en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar pedido!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o se eliminó previamente. Para retornar al listado general de pedidos, presione continuar en la parte inferior de este mensaje.",
    "edit-success-title" => "¡Pedido actualizada!",
    "edit-success-message" => "Los datos del pedido se actualizaron exitosamente, para retornar al listado general de pedidos, presione el botón continuar en la parte inferior del presente mensaje.",
    // - Orders deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar pedidos en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar pedido",
    "delete-message" => "Para confirmar la eliminación del pedido <b>%s</b>, presione eliminar. Para retornar al listado general de pedidos, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de #plural, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Pedido eliminado exitosamente!",
    "delete-success-message" => "La pedido se eliminó exitosamente. Para retornar al listado general de pedidos, presione el botón continuar en la parte inferior de este mensaje.",
    // - Orders list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de pedidos en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de pedidos",
    // - Credits
    "credit-create-title" => "Generar créditos",
    "credit-alert-create-title" => "¡Recuerde!",
    "credit-alert-create-message" => "El presente formulario le permite generar créditos a partir de una orden existente. Deberá indicar el número de créditos que el sistema generará para la orden seleccionada. Por defecto, cada crédito esparcirá las cuotas o subpagos con plazos de 1 mes de diferencia entre ellas. Si desea modificar los plazos, deberá hacerlo en cada orden por separado.",
    "create-credit-success-title" => "¡Créditos generados exitosamente!",
    "create-credit-success-message" => "Los créditos se generaron exitosamente, para retornar al cliente presioné continuar en la parte inferior de este mensaje.",
];

?>