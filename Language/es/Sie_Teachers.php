<?php

/*
 * **
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ ░FRAMEWORK                                  2024-08-06 14:39:02
 *  ** █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Account\Views\Processes\Creator\deny.php]
 *  ** █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2024 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 *  ** █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 *  ** █                                             consulte la LICENCIA archivo que se distribuyó con este código fuente.
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 *  ** █ IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 *  ** █ APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
 *  ** █ LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
 *  ** █ RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
 *  ** █ AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
 *  ** █ O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 *  ** █ @Editor Jhon Alejandro Martinez Potes <jalejandromp1@hotmail.com>
 *  ** █ @link https://www.codehiggs.com
 *  ** █ @Version 1.5.0 @since PHP 7, PHP 8
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ Datos recibidos desde el controlador - @ModuleController
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ @authentication, @request, @dates, @parent, @component, @view, @oid, @views, @prefix
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  **
 */
return [
    'rol-info' => 'Un profesor en el SIE es un individuo con experiencia y conocimiento en un área específica de estudio que se desempeña como educador y guía para los alumnos. Su rol principal es facilitar el aprendizaje, impartiendo conocimientos, enseñando habilidades, y promoviendo el desarrollo intelectual y personal de los estudiantes. Los profesores diseñan y entregan planes de estudio, crean materiales didácticos, evalúan el progreso de los alumnos a través de exámenes, tareas y proyectos, y proporcionan retroalimentación constructiva para mejorar el rendimiento académico. Además, los profesores también desempeñan un papel importante en el asesoramiento académico y profesional de los alumnos, brindando orientación sobre carreras, oportunidades de investigación y desarrollo profesional.',
    "view-title" => "Usuario: %s",
    "importer-title" => "Importador de usuarios",
    "importer-label_attachment" => "Archivo a adjuntar",
    "importer-label_offset" => "Compensación",
    "importer-help_offset" => "Número de filas a omitir 2 próximo 102",
    "importer-label_limit" => "Límite",
    "importer-help_limit" => "Número de filas a procesar",
    "importer-success-title" => "Importación exitosa!",
    "importer-success-message" => "El archivo se importó exitosamente...",
    // Fields
    "label_user" => "Código de usuario",
    "label_alias" => "Alias",
    "label_type" => "Tipo de usuario",
    "label_password" => "Contraseña",
    "label_confirm" => "Confirmación",
    "label_firstname" => "Nombres",
    "label_lastname" => "Apellidos",
    "label_address" => "Dirección de residencia",
    "label_email" => "Correo Electrónico",
    "label_phone" => "Teléfono",
    "label_birthday" => "Fecha de nacimiento (Cumpleaños)",
    "label_sex" => "Sexo",
    "label_citizenshipcard" => "Cédula",
    "label_expedition_date" => "Fecha de expedición ",
    "label_expedition_place" => "Lugar de expedición ",
    "label_fb-uid" => "Facebook UID",
    "label_reference" => "Referencia",
    "label_moodle-username" => "Usuario en Moodle",
    "label_moodle-password" => "Contraseña en Moodle",
    "help_expedition_date" => "Fecha de expedición de la cédula",
    "label_notes" => "Notas",
    "edit-denied-message" => "Su rol en la plataforma <b>no posee los privilegios necesarios para acceder a este componente</b>, para hacer uso del mismo al menos uno de sus roles en la plataforma deberá disponer del permiso <code>SECURITY-EDIT</code> o <code>SECURITY-EDIT-ALL</code>, solo un administrador del sistema podrá concederle tal nivel de acceso, por favor contacte al soporte técnico para solicitar a su rol le sean asignados los privilegios requeridos si es el caso, o presione continuar para retornar al listado de usuarios. ",
    "help_citizenshipcard" => "Número del documento de identificación (Obligatorio)",
    "help_phone" => "Número telefónico incluyendo prefijo de nacionalidad (Obligatorio)",
    "help_expedition_place" => "Generalmente el nombre textual de una ciudad (Obligatorio)",
    "help_email" => "Correo electrónico válido (Obligatorio)",
    "help_birthday" => "Fecha válida (Requerida)",
    "help_alias" => "Alias o sobrenombre de usuario",
    "help_type" => "Predefinido (Profesor)",
    "help_password" => "Contraseña de acceso",
    "help_confirm" => "Confirmación de la contraseña",
    "help_firstname" => "Nombres del usuario (Obligatorio)",
    "help_lastname" => "Apellidos del usuario (Obligatorio)",
    "help_address" => "Dirección de residencia del usuario (Obligatorio)",
    "help_reference" => "Referencia general",
    "help_notes" => "Notas u observaciones",
    "placeholder_expedition_place" => "Ciudad / Lugar de Expedición",
    "placeholder_alias" => "Alias",
    "placeholder_password" => "Contraseña",
    "placeholder_confirm" => "Confirmación",
    "placeholder_firstname" => "Nombres",
    "placeholder_lastname" => "Apellidos",
    "placeholder_address" => "Dirección de residencia",
    "placeholder_phone" => "Ejemplo: (+57)-318-413-6417",
    "placeholder_citizenshipcard" => "Cédula de ciudadanía",
    "placeholder_email" => "Ejemplo: usuario@mail.com",
    "placeholder_reference" => "Ejemplo: Algo",
    "placeholder_notes" => "Notas u observaciones",
    "placeholder_birthday" => "Fecha de nacimiento",
    "placeholder_expedition_date" => "Fecha de expedición",
    "placeholder_moodle-username" => "Ej: estudiantexyz",
    "placeholder_moodle-password" => "Ej: est123",
    "label_file-citizenshipcard" => "Archivo adjunto de imagen de la cédula de ciudadanía",
    "label_file-drivinglicense" => "Archivo adjunto de imagen de la licencia de conducción",
    "help_file-citizenshipcard" => "Generalmente una imagen en JPG, GIF, BMP o PDF",
    "help_file-drivinglicense" => "Generalmente una imagen en JPG, GIF, BMP o PDF",
    "edit-title" => "Actualizar Usuario: %s",
    "profile-photo" => "Foto de perfil",
    //[list]------------------------------------------------------------------------------------------------------------
    'list-title' => 'Listado de profesores',
    "list-info" => "Un usuario se define como una entidad identificable, que puede ser una persona, un sistema automatizado o incluso un bot, que se relaciona con un sistema o plataforma a través de una identidad validada y autenticada. Esta identidad, comúnmente referida como cuenta de usuario, está protegida por elementos de seguridad denominados credenciales, que generalmente consisten en un identificador de usuario y una contraseña.",
    // Users Editor
    "edit-errors-title" => "Datos incorrectos o faltantes",
    "edit-errors-message" => "No fue posible actualizar la información del usuario seleccionado debido a que los datos proporcionados son incorrectos o faltan datos requeridos para realizar este procedimiento. Por favor, verifique e inténtelo nuevamente.",
    "edit-success-title" => "Actualización Exitosa!",
    "edit-success-message" => "Los datos del perfil del usuario <b>%s</b> se actualizaron exitosamente. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    // Users Create
    "create-title" => "Crear nuevo profesor",
    "create-errors-title" => "Advertencia",
    "create-errors-message" => "No fue posible crear el nuevo usuario debido a que los datos proporcionados son incorrectos o faltan datos requeridos para realizar este procedimiento. Por favor, verifique e inténtelo nuevamente.",
    "create-success-title" => "Usuario creado exitosamente!",
    "create-success-message" => "El usuario <b>%s</b> se creó exitosamente. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    // Users Delete
    "delete-title" => "Eliminar Usuario: %s",
    "delete-message" => "Confirmación: ¿Realmente desea eliminar el usuario seleccionado <b>%s</b>? Para confirmar, presione eliminar; para retornar al listado general de usuarios activos, presione cancelar.",
    "delete-success-title" => "¡Usuario eliminado satisfactoriamente!",
    "delete-success-message" => "El usuario seleccionado se eliminó satisfactoriamente. Para continuar, presione el botón en la parte inferior de este mensaje.",
    //[info]------------------------------------------------------------------------------------------------------------
    "users-info" => "Un usuario es una persona o entidad que interactúa con un sistema o plataforma para realizar actividades específicas.",
];
?>
