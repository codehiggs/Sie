<?php

if (!function_exists("generate_sie_permissions")) {

    /**
     * Permite registrar los permisos asociados al modulo, tecnicamente su
     * ejecucion regenera los permisos asignables definidos por el modulo DISA
     */
    function generate_sie_permissions(): void
    {
        $permissions = array(
            "sie-access",
            //[students]------------------------------------------------------------------------------------------------
            "sie-students-access",
            "sie-students-view",
            "sie-students-view-all",
            "sie-students-create",
            "sie-students-edit",
            "sie-students-edit-all",
            "sie-students-delete",
            "sie-students-delete-all",
            //[teachers]------------------------------------------------------------------------------------------------
            "sie-teachers-access",
            "sie-teachers-view",
            "sie-teachers-view-all",
            "sie-teachers-create",
            "sie-teachers-edit",
            "sie-teachers-edit-all",
            "sie-teachers-delete",
            "sie-teachers-delete-all",
            //[programs]------------------------------------------------------------------------------------------------
            "sie-programs-access",
            "sie-programs-view",
            "sie-programs-view-all",
            "sie-programs-create",
            "sie-programs-edit",
            "sie-programs-edit-all",
            "sie-programs-delete",
            "sie-programs-delete-all",
            //[Grids]----------------------------------------------------------------------------------------
            "sie-grids-access",
            "sie-grids-view",
            "sie-grids-view-all",
            "sie-grids-create",
            "sie-grids-edit",
            "sie-grids-edit-all",
            "sie-grids-delete",
            "sie-grids-delete-all",
            //[modules]------------------------------------------------------------------------------------------------
            "sie-modules-access",
            "sie-modules-view",
            "sie-modules-view-all",
            "sie-modules-create",
            "sie-modules-edit",
            "sie-modules-edit-all",
            "sie-modules-delete",
            "sie-modules-delete-all",
            //[pensums]--------------------------------------------------------------------------------------------------
            "sie-pensums-access",
            "sie-pensums-view",
            "sie-pensums-view-all",
            "sie-pensums-create",
            "sie-pensums-edit",
            "sie-pensums-edit-all",
            "sie-pensums-delete",
            "sie-pensums-delete-all",
            //[courses]-------------------------------------------------------------------------------------------------
            "sie-courses-access",
            "sie-courses-view",
            "sie-courses-view-all",
            "sie-courses-create",
            "sie-courses-edit",
            "sie-courses-edit-all",
            "sie-courses-delete",
            "sie-courses-delete-all",
            //[enrrolleds]-------------------------------------------------------------------------------------------------
            "sie-enrolleds-access",
            "sie-enrolleds-view",
            "sie-enrolleds-view-all",
            "sie-enrolleds-create",
            "sie-enrolleds-edit",
            "sie-enrolleds-edit-all",
            "sie-enrolleds-delete",
            "sie-enrolleds-delete-all",
            //[settings]------------------------------------------------------------------------------------------------
            "sie-settings-access",
            //[Products]----------------------------------------------------------------------------------------
            "sie-products-access",
            "sie-products-view",
            "sie-products-view-all",
            "sie-products-create",
            "sie-products-edit",
            "sie-products-edit-all",
            "sie-products-delete",
            "sie-products-delete-all",
            //[Discounts]----------------------------------------------------------------------------------------
            "sie-discounts-access",
            "sie-discounts-view",
            "sie-discounts-view-all",
            "sie-discounts-create",
            "sie-discounts-edit",
            "sie-discounts-edit-all",
            "sie-discounts-delete",
            "sie-discounts-delete-all",
            //[Registrations]----------------------------------------------------------------------------------------
            "sie-registrations-access",
            "sie-registrations-view",
            "sie-registrations-view-all",
            "sie-registrations-create",
            "sie-registrations-edit",
            "sie-registrations-edit-all",
            "sie-registrations-delete",
            "sie-registrations-delete-all",
            //[Payments]----------------------------------------------------------------------------------------
            "sie-payments-access",
            "sie-payments-view",
            "sie-payments-view-all",
            "sie-payments-create",
            "sie-payments-edit",
            "sie-payments-edit-all",
            "sie-payments-delete",
            "sie-payments-delete-all",
            //[Orders]----------------------------------------------------------------------------------------
            "sie-orders-access",
            "sie-orders-view",
            "sie-orders-view-all",
            "sie-orders-create",
            "sie-orders-edit",
            "sie-orders-edit-all",
            "sie-orders-delete",
            "sie-orders-delete-all",
            //[Institutions]----------------------------------------------------------------------------------------
            "sie-institutions-access",
            "sie-institutions-view",
            "sie-institutions-view-all",
            "sie-institutions-create",
            "sie-institutions-edit",
            "sie-institutions-edit-all",
            "sie-institutions-delete",
            "sie-institutions-delete-all",
            //[Agreements]----------------------------------------------------------------------------------------
            "sie-agreements-access",
            "sie-agreements-view",
            "sie-agreements-view-all",
            "sie-agreements-create",
            "sie-agreements-edit",
            "sie-agreements-edit-all",
            "sie-agreements-delete",
            "sie-agreements-delete-all",
            //[Spaces]----------------------------------------------------------------------------------------
            "sie-spaces-access",
            "sie-spaces-view",
            "sie-spaces-view-all",
            "sie-spaces-create",
            "sie-spaces-edit",
            "sie-spaces-edit-all",
            "sie-spaces-delete",
            "sie-spaces-delete-all",
            //[Headquarters]----------------------------------------------------------------------------------------
            "sie-headquarters-access",
            "sie-headquarters-view",
            "sie-headquarters-view-all",
            "sie-headquarters-create",
            "sie-headquarters-edit",
            "sie-headquarters-edit-all",
            "sie-headquarters-delete",
            "sie-headquarters-delete-all",
            //[Enrollments]----------------------------------------------------------------------------------------
            "sie-enrollments-access",
            "sie-enrollments-view",
            "sie-enrollments-view-all",
            "sie-enrollments-create",
            "sie-enrollments-edit",
            "sie-enrollments-edit-all",
            "sie-enrollments-delete",
            "sie-enrollments-delete-all",
            //[Qualifications]----------------------------------------------------------------------------------------
            "sie-qualifications-access",
            "sie-qualifications-view",
            "sie-qualifications-view-all",
            "sie-qualifications-create",
            "sie-qualifications-edit",
            "sie-qualifications-edit-all",
            "sie-qualifications-delete",
            "sie-qualifications-delete-all",
        );
        generate_permissions($permissions, "sie");
    }

}

if (!function_exists("get_sie_sidebar")) {
    function get_sie_sidebar($active_url = false): string
    {
        $bootstrap = service("bootstrap");
        $lpk = safe_strtolower(pk());
        $options = array(
            "home" => array("text" => lang("App.Home"), "href" => "/sie/", "svg" => "home.svg"),
            "courses" => array("text" => lang("App.Courses"), "href" => "/sie/courses/list/" . lpk(), "icon" => ICON_COURSES, "permission" => "sie-access"),
            "students" => array("text" => lang("App.Students"), "href" => "/sie/students/list/" . lpk(), "icon" => ICON_STUDENTS, "permission" => "sie-access"),
            "teachers" => array("text" => lang("App.Teachers"), "href" => "/sie/teachers/list/" . lpk(), "icon" => ICON_TEACHERS, "permission" => "sie-access"),
            "programs" => array("text" => lang("App.Programs"), "href" => "/sie/programs/list/" . lpk(), "icon" => ICON_ACADEMIC_PROGRAMS, "permission" => "sie-access"),
            "modules" => array("text" => lang("App.Modules"), "href" => "/sie/modules/list/" . lpk(), "icon" => ICON_MODULES, "permission" => "sie-access"),
            "settings" => array("text" => lang("App.Settings"), "href" => "/sie/settings/home/" . lpk(), "icon" => ICON_TOOLS, "permission" => "sie-access"),
        );
        $o = get_application_custom_sidebar($options, $active_url);
        $return = $bootstrap->get_NavPills($o, $active_url);
        return ($return);
    }
}

if (!function_exists("get_sie_count_users")) {

    function get_sie_count_users()
    {
        $musers = model('App\Modules\Sie\Models\Sie_Users');
        $count = $musers->get_CountAllResults();
        $code = "";
        $code .= "<div class=\"card flex-row align-items-center align-items-stretch mb-3\">\n";
        $code .= "\t\t<div class=\"col-4 d-flex align-items-center bg-gray justify-content-center rounded-left\">\n";
        $code .= "\t\t\t\t<i class=\"icon fa-light fa-screen-users fa-3x\"></i>\n";
        $code .= "\t\t</div>\n";
        $code .= "\t\t<div class=\"col-8 py-3 bg-gray rounded-right\">\n";
        $code .= "\t\t\t\t<div class=\"fs-5 lh-5 my-0\">\n";
        $code .= "\t\t\t\t\t\t{$count}\t\t\t\t</div>\n";
        $code .= "\t\t\t\t<div class=\"\t\tmy-0\">\n";
        $code .= "\t\t\t\t\t\t" . lang("App.Students") . "\t\t\t\t</div>\n";
        $code .= "\t\t</div>\n";
        $code .= "</div>\n";
        return ($code);
    }

}


if (!function_exists("get_sie_help_registrations")) {

    function get_sie_help_registrations()
    {
        $code = "<div class=\"card mb-3\">\n";
        $code .= "<div class=\"card-header\">";
        $code .= "<h2 class=\"card-header-title p-1  m-0 opacity-7\">";
        $code .= "Filtros Avanzados";
        $code .= "</h2>";
        $code .= "</div>";
        $code .= "<div class=\"card-body \">\n";
        $code .= "<p>Para consultar  los resultados según el estado del proceso de preinscripción puede utilizar los siguientes filtros digitándolos en la casilla de búsqueda:</p>";
        $code .= "<ul class=\"m-0 \">";
        $code .= "<li><b>PROCESS</b>: En proceso</b></li>";
        $code .= "<li><b>ADMITTED</b>: Admitidos</b></li>";
        $code .= "<li><b>UNADMITTED</b>: No admitidos</b></li>";
        $code .= "<li><b>PROCESS</b>: En proceso</b></li>";
        $code .= "<li><b>HOMOLOGATION</b>: Admitidos proceso homologación</b></li>";
        $code .= "<li><b>DESISTEMENT</b>: Desiste del proceso</b></li>";
        $code .= "<li><b>RE-ENTRY</b>: Admitido por reingreso</b></li>";
        $code .= "</ul>";
        $code .= "</div>\n";
        $code .= "</div>\n";
        return ($code);
    }

}

if (!function_exists("get_sie_count_teachers")) {

    function get_sie_count_teachers()
    {
        $musers = model('App\Modules\Sie\Models\Sie_Users');
        $count = $musers->get_TotalByType("TEACHER");
        $code = "";
        $code .= "<div class=\"card flex-row align-items-center align-items-stretch mb-3\">\n";
        $code .= "\t\t<div class=\"col-4 d-flex align-items-center bg-gray justify-content-center rounded-left\">\n";
        $code .= "\t\t\t\t<i class=\"fa-light fa-person-chalkboard fa-3x\"></i>\n";
        $code .= "\t\t</div>\n";
        $code .= "\t\t<div class=\"col-8 py-3 bg-gray rounded-right\">\n";
        $code .= "\t\t\t\t<div class=\"fs-5 lh-5 my-0\">\n";
        $code .= "\t\t\t\t\t\t{$count}\t\t\t\t</div>\n";
        $code .= "\t\t\t\t<div class=\"\t\tmy-0\">\n";
        $code .= "\t\t\t\t\t\t" . lang("App.Teachers") . "\t\t\t\t</div>\n";
        $code .= "\t\t</div>\n";
        $code .= "</div>\n";
        return ($code);
    }

}


?>
