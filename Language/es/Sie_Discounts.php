<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-05 14:18:19
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Discounts\Creator\index.php]
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
    // - Discounts fields
    "label_discount" => "Código de descuento",
    "label_reference" => "Referencia del descuento",
    "label_name" => "Nombre del descuento",
    "label_description" => "Descripción del descuento",
    "label_value" => "Valor del descuento",
    "label_type" => "Tipo de descuento",
    "label_character" => "Características del descuento",
    "label_status" => "Estado del descuento",
    "label_author" => "Autor del descuento",
    "placeholder_discount" => "Código de descuento",
    "placeholder_reference" => "Ej: D2024-01",
    "placeholder_name" => "Ej: Descuento de temporada",
    "placeholder_description" => "Ej: Descuento de temporada de verano 2024",
    "placeholder_type" => "Tipo de descuento",
    "placeholder_character" => "Características del descuento",
    "placeholder_status" => "Estado del descuento",
    "placeholder_author" => "Autor del descuento",
    "help_discount" => "Código de descuento",
    "help_name" => "Nombre del descuento",
    "help_description" => "Descripción del descuento",
    "help_type" => "Tipo de descuento",
    "help_character" => "Características del descuento",
    "help_status" => "Estado del descuento",
    "help_author" => "Autor del descuento",
    // - Discounts creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos descuentos. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, con el personal de soporte técnico para que le sean asignados los permisos necesarios, si es el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nuevo descuento",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Descuento existente!",
    "create-duplicate-message" => "Este descuento ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para regresar al listado general de descuentos.",
    "create-success-title" => "¡Descuento registrado exitosamente!",
    "create-success-message" => "El descuento se registró exitosamente. Para regresar al listado general de descuentos, presione continuar en la parte inferior de este mensaje.",
    // - Discounts viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "LLos roles asignados a su perfil no le conceden los privilegios necesarios para visualizar descuentos en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Discounts editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar descuentos en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar descuento!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o fue eliminado previamente. Para regresar al listado general de descuentos, presione continuar en la parte inferior de este mensaje.",
    "edit-success-title" => "¡Descuento actualizado!",
    "edit-success-message" => "Los datos del descuento se <b>actualizaron exitosamente</b>. Para regresar al listado general de descuentos, presione el botón continuar en la parte inferior de este mensaje.",
    // - Discounts deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar descuentos en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar descuento!",
    "delete-message" => "Para confirmar la eliminación del descuento <b>%s</b>, presione eliminar. Para regresar al listado general de descuentos, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o fue eliminado previamente. Para regresar al listado general de descuentos, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Descuento eliminado exitosamente!",
    "delete-success-message" => "El descuento se eliminó exitosamente. Para regresar al listado general de descuentos, presione el botón continuar en la parte inferior de este mensaje.",
    // - Discounts list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de descuentos en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de descuentos",
    "list-title-products-to-which-it-is-applicable" => "Productos a los que aplica",
    "list-info-products-to-which-it-is-applicable" => "A continuación se presenta el listado de productos a los que se aplica el descuento. Aunque un descuento puede asignarse en cualquier momento, solo se aplicará si el producto correspondiente está siendo facturado.",
];

?>