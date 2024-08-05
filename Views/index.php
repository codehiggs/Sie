<?php
/** @var string $parent */
/** @var string $views */
/** @var string $prefix */
/** @var object $parent */
$server = service('server');
$benchmark = service('timer');
$benchmark->start('time');
$version = round(($server->get_DirectorySize(APPPATH . 'Modules/Sie') / 102400), 6);
$data = $parent->get_Array();
$rviews = array(
    "default" => "{$views}\E404\index",
    "sie-denied" => "{$views}\Denied\index",
    "sie-home" => "{$views}\Home\index",
    //[students]--------------------------------------------------------------------------------------------------------
    "sie-students-create" => "{$views}\Students\Create\index",
    "sie-students-list" => "{$views}\Students\List\index",
    "sie-students-view" => "{$views}\Students\View\index",
    "sie-students-edit" => "{$views}\Students\Edit\index",
    "sie-students-delete" => "{$views}\Students\Delete\index",
    //[teachers]--------------------------------------------------------------------------------------------------------
    "sie-teachers-create" => "{$views}\Teachers\Create\index",
    "sie-teachers-list" => "{$views}\Teachers\List\index",
    "sie-teachers-view" => "{$views}\Teachers\View\index",
    "sie-teachers-edit" => "{$views}\Teachers\Edit\index",
    "sie-teachers-delete" => "{$views}\Teachers\Delete\index",
    //[programs]--------------------------------------------------------------------------------------------------------
    "sie-programs-home" => "$views\Programs\Home\index",
    "sie-programs-list" => "$views\Programs\List\index",
    "sie-programs-view" => "$views\Programs\View\index",
    "sie-programs-create" => "$views\Programs\Create\index",
    "sie-programs-edit" => "$views\Programs\Edit\index",
    "sie-programs-delete" => "$views\Programs\Delete\index",
    //[Grids]----------------------------------------------------------------------------------------
    "sie-grids-home" => "$views\Grids\Home\index",
    "sie-grids-list" => "$views\Grids\List\index",
    "sie-grids-view" => "$views\Grids\View\index",
    "sie-grids-create" => "$views\Grids\Create\index",
    "sie-grids-edit" => "$views\Grids\Edit\index",
    "sie-grids-delete" => "$views\Grids\Delete\index",
    //[Versions]----------------------------------------------------------------------------------------
    "sie-versions-home" => "$views\Versions\Home\index",
    "sie-versions-list" => "$views\Versions\List\index",
    "sie-versions-view" => "$views\Versions\View\index",
    "sie-versions-create" => "$views\Versions\Create\index",
    "sie-versions-edit" => "$views\Versions\Edit\index",
    "sie-versions-delete" => "$views\Versions\Delete\index",
    "sie-versions-status" => "$views\Versions\Status\index",
    //[modules]---------------------------------------------------------------------------------------------------------
    "sie-modules-home" => "$views\Modules\Home\index",
    "sie-modules-list" => "$views\Modules\List\index",
    "sie-modules-view" => "$views\Modules\View\index",
    "sie-modules-create" => "$views\Modules\Create\index",
    "sie-modules-edit" => "$views\Modules\Edit\index",
    "sie-modules-delete" => "$views\Modules\Delete\index",
    //[pensums]---------------------------------------------------------------------------------------------------------
    "sie-pensums-home" => "$views\Pensums\Home\index",
    "sie-pensums-list" => "$views\Pensums\List\index",
    "sie-pensums-view" => "$views\Pensums\View\index",
    "sie-pensums-create" => "$views\Pensums\Create\index",
    "sie-pensums-edit" => "$views\Pensums\Edit\index",
    "sie-pensums-delete" => "$views\Pensums\Delete\index",
    //[courses]---------------------------------------------------------------------------------------------------------
    "sie-courses-home" => "$views\Courses\Home\index",
    "sie-courses-list" => "$views\Courses\List\index",
    "sie-courses-view" => "$views\Courses\View\index",
    "sie-courses-create" => "$views\Courses\Create\index",
    "sie-courses-edit" => "$views\Courses\Edit\index",
    "sie-courses-delete" => "$views\Courses\Delete\index",
    //[enrolleds]-------------------------------------------------------------------------------------------------------
    "sie-enrolleds-home" => "$views\Enrolleds\Home\index",
    "sie-enrolleds-list" => "$views\Enrolleds\List\index",
    "sie-enrolleds-view" => "$views\Enrolleds\View\index",
    "sie-enrolleds-create" => "$views\Enrolleds\Create\index",
    "sie-enrolleds-edit" => "$views\Enrolleds\Edit\index",
    "sie-enrolleds-delete" => "$views\Enrolleds\Delete\index",
    //[enrolleds]-------------------------------------------------------------------------------------------------------
    "sie-settings-home" => "$views\Settings\Home\index",
    //[financial]-------------------------------------------------------------------------------------------------------
    "sie-financial-home" => "$views\Financial\Home\index",
    //[Products]----------------------------------------------------------------------------------------
    "sie-products-home" => "$views\Products\Home\index",
    "sie-products-list" => "$views\Products\List\index",
    "sie-products-view" => "$views\Products\View\index",
    "sie-products-create" => "$views\Products\Create\index",
    "sie-products-edit" => "$views\Products\Edit\index",
    "sie-products-delete" => "$views\Products\Delete\index",
    //[Discounts]----------------------------------------------------------------------------------------
    "sie-discounts-home" => "$views\Discounts\Home\index",
    "sie-discounts-list" => "$views\Discounts\List\index",
    "sie-discounts-view" => "$views\Discounts\View\index",
    "sie-discounts-create" => "$views\Discounts\Create\index",
    "sie-discounts-edit" => "$views\Discounts\Edit\index",
    "sie-discounts-delete" => "$views\Discounts\Delete\index",
    //[Registrations]----------------------------------------------------------------------------------------
    "sie-registrations-home" => "$views\Registrations\Home\index",
    "sie-registrations-list" => "$views\Registrations\List\index",
    "sie-registrations-view" => "$views\Registrations\View\index",
    "sie-registrations-create" => "$views\Registrations\Create\index",
    "sie-registrations-edit" => "$views\Registrations\Edit\index",
    "sie-registrations-delete" => "$views\Registrations\Delete\index",
    "sie-registrations-cancel" => "$views\Registrations\Cancel\index",
    "sie-registrations-billing" => "$views\Registrations\Billing\index",
    "sie-registrations-notify" => "$views\Registrations\Notify\index",
    "sie-registrations-schedule" => "$views\Registrations\Schedule\index",
    //[certifications]----------------------------------------------------------------------------------------
    "sie-certifications-home" => "$views\Certifications\Home\index",
    //[Enrrollments]----------------------------------------------------------------------------------------
    "sie-enrollments-home" => "$views\Enrollments\Home\index",
    "sie-enrollments-list" => "$views\Enrollments\List\index",
    "sie-enrollments-academic" => "$views\Enrollments\Academic\index",
    "sie-enrollments-view" => "$views\Enrollments\View\index",
    "sie-enrollments-create" => "$views\Enrollments\Create\index",
    "sie-enrollments-edit" => "$views\Enrollments\Edit\index",
    "sie-enrollments-delete" => "$views\Enrollments\Delete\index",
    "sie-enrollments-cancel" => "$views\Enrollments\Cancel\index",
    "sie-enrollments-billing" => "$views\Enrollments\Billing\index",
    "sie-enrollments-notify" => "$views\Enrollments\Notify\index",
    //[agreements]------------------------------------------------------------------------------------------------------
    "sie-agreements-home" => "$views\Agreements\Home\index",
    "sie-agreements-list" => "$views\Agreements\List\index",
    "sie-agreements-view" => "$views\Agreements\View\index",
    "sie-agreements-create" => "$views\Agreements\Create\index",
    "sie-agreements-edit" => "$views\Agreements\Edit\index",
    "sie-agreements-delete" => "$views\Agreements\Delete\index",
    "sie-agreements-cancel" => "$views\Agreements\Cancel\index",
    "sie-agreements-billing" => "$views\Agreements\Billing\index",
    "sie-agreements-notify" => "$views\Agreements\Notify\index",
    //[importers]---------------------------------------------------------------------------------------------------------
    "sie-importers-asobancaria" => "$views\Importers\Asobancaria\index",
    //[Payments]----------------------------------------------------------------------------------------
    "sie-payments-home" => "$views\Payments\Home\index",
    "sie-payments-list" => "$views\Payments\List\index",
    "sie-payments-view" => "$views\Payments\View\index",
    "sie-payments-create" => "$views\Payments\Create\index",
    "sie-payments-edit" => "$views\Payments\Edit\index",
    "sie-payments-delete" => "$views\Payments\Delete\index",
    //[reports]---------------------------------------------------------------------------------------------------------
    "sie-reports-home" => "$views\Reports\Home\index",
    "sie-reports-admissions" => "$views\Reports\Admissions\index",
    //[Orders]----------------------------------------------------------------------------------------
    "sie-orders-home" => "$views\Orders\Home\index",
    "sie-orders-list" => "$views\Orders\List\index",
    "sie-orders-view" => "$views\Orders\View\index",
    "sie-orders-create" => "$views\Orders\Create\index",
    "sie-orders-edit" => "$views\Orders\Edit\index",
    "sie-orders-delete" => "$views\Orders\Delete\index",
    "sie-orders-credit" => "$views\Orders\Credit\index",
    "sie-orders-print" => "$views\Orders\Print\index",
    //[Institutions]----------------------------------------------------------------------------------------------------
    "sie-institutions-home" => "$views\Institutions\Home\index",
    "sie-institutions-list" => "$views\Institutions\List\index",
    "sie-institutions-view" => "$views\Institutions\View\index",
    "sie-institutions-create" => "$views\Institutions\Create\index",
    "sie-institutions-edit" => "$views\Institutions\Edit\index",
    "sie-institutions-delete" => "$views\Institutions\Delete\index",
    //[Agreements]----------------------------------------------------------------------------------------
    "sie-agreements-home" => "$views\Agreements\Home\index",
    "sie-agreements-list" => "$views\Agreements\List\index",
    "sie-agreements-view" => "$views\Agreements\View\index",
    "sie-agreements-create" => "$views\Agreements\Create\index",
    "sie-agreements-edit" => "$views\Agreements\Edit\index",
    "sie-agreements-delete" => "$views\Agreements\Delete\index",
    //[Spaces]----------------------------------------------------------------------------------------
    "sie-spaces-home" => "$views\Spaces\Home\index",
    "sie-spaces-list" => "$views\Spaces\List\index",
    "sie-spaces-view" => "$views\Spaces\View\index",
    "sie-spaces-create" => "$views\Spaces\Create\index",
    "sie-spaces-edit" => "$views\Spaces\Edit\index",
    "sie-spaces-delete" => "$views\Spaces\Delete\index",
    //[Headquarters]----------------------------------------------------------------------------------------
    "sie-headquarters-home" => "$views\Headquarters\Home\index",
    "sie-headquarters-list" => "$views\Headquarters\List\index",
    "sie-headquarters-view" => "$views\Headquarters\View\index",
    "sie-headquarters-create" => "$views\Headquarters\Create\index",
    "sie-headquarters-edit" => "$views\Headquarters\Edit\index",
    "sie-headquarters-delete" => "$views\Headquarters\Delete\index",
    //[Qualifications]----------------------------------------------------------------------------------------
    "sie-qualifications-home" => "$views\Qualifications\Home\index",
    "sie-qualifications-list" => "$views\Qualifications\List\index",
    "sie-qualifications-view" => "$views\Qualifications\View\index",
    "sie-qualifications-create" => "$views\Qualifications\Create\index",
    "sie-qualifications-edit" => "$views\Qualifications\Edit\index",
    "sie-qualifications-delete" => "$views\Qualifications\Delete\index",
    //[others]----------------------------------------------------------------------------------------------------------

);
$uri = !isset($rviews[$prefix]) ? $rviews["default"] : $rviews[$prefix];
$json = view($uri, $data);
$mmu = model("App\Modules\Messenger\Models\Messenger_Users");
//[build]---------------------------------------------------------------------------------------------------------------
$assign = array();
$assign['theme'] = "Higgs";
$assign['main_template'] = safe_json($json, 'main_template', "c8c4");
$assign['breadcrumb'] = safe_json($json, 'breadcrumb');
$assign['main'] = safe_json($json, 'main');
$assign['left'] = get_sie_sidebar();
$assign['right'] = safe_json($json, 'right') . get_application_copyright();
$assign['logo_portrait'] = get_logo("logo_portrait");
$assign['logo_landscape'] = get_logo("logo_landscape");
$assign['logo_portrait_light'] = get_logo("logo_portrait_light");
$assign['logo_landscape_light'] = get_logo("logo_landscape_light");
$assign['type'] = safe_json($json, 'type');
$assign['canonical'] = safe_json($json, 'canonical');
$assign['title'] = safe_json($json, 'title');
$assign['description'] = safe_json($json, 'description');
$assign['categories'] = safe_json($json, 'categories');
$assign['featureds'] = safe_json($json, 'featureds');
$assign['sponsoreds'] = safe_json($json, 'sponsoreds');
$assign['articles'] = safe_json($json, 'articles');
$assign['themostseens'] = safe_json($json, 'themostseens');
$assign['article'] = safe_json($json, 'article');
$assign['next'] = safe_json($json, 'next');
$assign['previus'] = safe_json($json, 'previus');
$assign['messenger'] = true;
$assign['messenger_users'] = false;
$benchmark->stop('time');
$assign['benchmark'] = $benchmark->getElapsedTime('time', 4);
$assign['version'] = $version;
//[print]---------------------------------------------------------------------------------------------------------------
$template = view("App\Views\Themes\Higgs\index", $assign);
echo($template);
?>
