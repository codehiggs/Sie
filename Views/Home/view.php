<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                                                    2024-02-12 10:12:28
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Home\breadcrumb.php]
 * █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2024 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 * █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 * █                                                                                         consulte la LICENCIA archivo que se distribuyó con este código fuente.
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
 * █ @authentication, @request, @dates, @parent, @component, @view, @oid, @views, @prefix
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
//[vars]----------------------------------------------------------------------------------------------------------------
/** @var object $parent */
/** @var string $component */
/** @var string $view */
/** @var object $authentication */
/** @var object $request */
generate_sie_permissions($module);
$server = service("server");
$bootstrap = service("bootstrap");
$version = round(($server->get_DirectorySize(APPPATH . 'Modules/Sie') / 102400), 6);


if ($authentication->get_LoggedIn()) {
    $shortcuts = $bootstrap->get_Shortcuts(array("id" => "shortcuts-panel"));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/students/list/" . lpk(), "icon" => ICON_STUDENTS, "value" => lang("App.Students"), "description" => "Listado")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/teachers/list/" . lpk(), "icon" => ICON_TEACHERS, "value" => lang("App.Teachers"), "description" => "Listado")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/programs/list/" . lpk(), "icon" => ICON_ACADEMIC_PROGRAMS, "value" => lang("App.Programs"), "description" => "Académicos")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/modules/list/" . lpk(), "icon" => ICON_MODULES, "value" => lang("App.Modules"), "description" => "Académicos")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/courses/list/" . lpk(), "icon" => ICON_COURSES, "value" => lang("App.Courses"), "description" => "Académicos")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/financial/home/" . lpk(), "icon" => "fa-light fa-money-check-dollar", "value" => "Área", "description" => "Financiera")));
    //$shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/agreements/list/" . lpk(), "icon" => "fa-light fa-rocket-launch", "value" => "Convenios", "description" => "Componente")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/registrations/list/" . lpk(), "icon" => "fa-light fa-list-check", "value" => "Preinscripciones", "description" => "Componente")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/certifications/home/" . lpk(), "icon" => "fa-light fa-file-certificate", "value" => "Certificaciones", "description" => "Componente")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/reports/home/" . lpk(), "icon" => "fa-light fa-file-chart-column", "value" => "Reportes", "description" => "Componente")));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/enrollments/home/" . lpk(), "icon" => "fa-light fa-address-card", "value" => "Matriculas", "description" => "Componente")));
    echo($shortcuts);
} else {
    $shortcuts = $bootstrap->get_Shortcuts(array("id" => "shortcuts-panel"));
    $shortcuts->add($bootstrap->get_Shortcut(array("href" => "/sie/registrations/create/fullscreen/?" . lpk(), "icon" => ICON_TOOLS, "value" => "Preinscripciones", "description" => "Formato")));
    echo($shortcuts);
}

$card = $bootstrap->get_Card("card-view-Sie", array(
    "class" => "mb-3",
    "title" => lang("Sie.module") . ": <span class='text-muted'>v{$version}</span>",
    "header-back" => "/",
    "image" => "/themes/assets/images/header/logo-sie.png?v=3",
    "image-class" => "img-fluid p-3",
    "content" => lang("Sie.intro-1")
));
echo($card);
?>