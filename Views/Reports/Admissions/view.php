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
//[Services]-------------------------------------------------------------------------------------------------------------
$request = service('Request');
$bootstrap = service('Bootstrap');
$dates = service('Dates');
$strings = service('strings');
$authentication = service('authentication');
//[Models]---------------------------------------------------------------------------------------------------------------
$mregistrations = model('App\Modules\Sie\Models\Sie_Registrations');

$total_inproccess = $mregistrations->get_TotalWithoutAgreements("");
$total_following = "";
$total_admitted = $mregistrations->get_TotalAdmitted("");

$registrations = $mregistrations->get_ListAdmitted(10000, 0, "");

$code = "";

//$code .= "<table id='table' class='table table-striped table-bordered table-hover mb-3' >";
//$code .= "<tr><td colspan='2'>Reporte de Admisiones</td></tr>";
//$code .= "<tr><td class='w-50 align-content-end'><b>Aspirantes en proceso</b></td><td>{$total_inproccess} </td></tr>";
//$code .= "<tr><td class='w-50 align-content-end'><b>Aspirantes para seguimiento</b></td><td> {$total_following} </td></tr>";
//$code .= "<tr><td class='w-50 align-content-end'><b>Aspirantes admitidos</b></td><td>{$total_admitted}</td></tr>";
//$code .= "<tr><td class='w-50 align-content-end'><b>Aspirantes Admitidos Homologación</b></td><td> </td></tr>";
//$code .= "<tr><td class='w-50 align-content-end'><b>Aspirantes Admitidos Reingreso</b></td><td> </td></tr>";
//$code .= "<tr><td class='w-50 align-content-end'><b>Aspirante desiste del proceso</b></td><td> </td></tr>";
//$code .= "<tr><td class='w-50 align-right'><b>Aspirantes para seguimiento</b></td><td> </td></tr>";
//$code .= "</table>";

$code .= "<div class=\"container\">";
$code .= "<table\n";
$code .= "\t\tid=\"table-registrations\"\n";
$code .= "\t\tclass=\"table\ttable-responsive p-0 m-0\"\n";
$code .= "\t\tdata-locale=\"es-ES\"\n";
$code .= "\t\tdata-toolbar=\"#table\"\n";
$code .= "\t\tdata-height=\"640\"\n";
$code .= "\t\tdata-show-button-icons=\"true\"\n";
$code .= "\t\tdata-show-export=\"true\"\n";
$code .= "\t\tdata-search=\"true\"\n";
$code .= "\t\tdata-search-align=\"right\"\n";
$code .= "\t\tdata-pagination=\"true\"\n";
$code .= "\t\tdata-side-pagination=\"local\"\n";
$code .= "\t\tdata-data-field=\"data\"\n";
$code .= "\t\tdata-show-pagination-switch=\"true\"\n";
$code .= "\t\tdata-page-size=\"250\"\n";
$code .= "\t\tdata-show-extended-pagination=\"true\"\n";
$code .= "\t\tdata-toggle=\"table\"\n";
$code .= "\t\tdata-show-columns=\"true\"\n";
$code .= "\t\tdata-show-columns-toggle-all=\"true\"\n";
$code .= "\t\tdata-show-refresh=\"true\"\n";
$code .= "\t\tdata-show-fullscreen=\"true\"\n";
$code .= "\t\tdata-id-field=\"data-field\"\n";
$code .= "\t\tdata-select-item-name=\"data-id-field\"\n";
$code .= "\t\tdata-show-sticky-header=\"true\"\n";
$code .= "\t\tdata-page-list=\"[50, 100, 200, 400, 800, 1600]\"\n";

$code .= "\t\t>\n";
$code .= "<thead>";
$code .= "  <tr>";
$code .= "    <th data-field='id'>#</th>";
$code .= "    <th data-field='registro'>Registro</th>";
$code .= "    <th data-field='convenio'>Convenio</th>";
$code .= "    <th data-field='pais_convenio'>País del convenio</th>";
$code .= "    <th data-field='region_convenio'>Región del convenio</th>";
$code .= "    <th data-field='ciudad_convenio'>Ciudad del convenio</th>";
$code .= "    <th data-field='institucion_convenio'>Institución del convenio</th>";
$code .= "    <th data-field='periodo'>Periodo</th>";
$code .= "    <th data-field='jornada'>Jornada</th>";
$code .= "    <th data-field='programa'>Programa</th>";
$code .= "    <th data-field='primer_nombre'>Primer nombre</th>";
$code .= "    <th data-field='segundo_nombre'>Segundo nombre</th>";
$code .= "    <th data-field='primer_apellido'>Primer apellido</th>";
$code .= "    <th data-field='segundo_apellido'>Segundo apellido</th>";
$code .= "    <th data-field='tipo_identificacion'>Tipo de identificación</th>";
$code .= "    <th data-field='numero_identificacion'>Número de identificación</th>";
$code .= "    <th data-field='genero'>Género</th>";
$code .= "    <th data-field='correo_electronico'>Correo electrónico</th>";
$code .= "    <th data-field='telefono'>Teléfono</th>";
$code .= "    <th data-field='movil'>Móvil</th>";
$code .= "    <th data-field='fecha_nacimiento'>Fecha de nacimiento</th>";
$code .= "    <th data-field='direccion'>Dirección</th>";
$code .= "    <th data-field='lugar_residencia'>Lugar de residencia</th>";
$code .= "    <th data-field='barrio'>Barrio</th>";
$code .= "    <th data-field='area'>Área</th>";
$code .= "    <th data-field='estrato'>Estrato</th>";
$code .= "    <th data-field='metodo_transporte'>Método de transporte</th>";
$code .= "    <th data-field='grupo_sisben'>Grupo SISBEN</th>";
$code .= "    <th data-field='subgrupo_sisben'>Subgrupo SISBEN</th>";
$code .= "    <th data-field='lugar_expedicion_documento'>Lugar de expedición del documento</th>";
$code .= "    <th data-field='lugar_nacimiento'>Lugar de nacimiento</th>";
$code .= "    <th data-field='tipo_sangre'>Tipo de sangre</th>";
$code .= "    <th data-field='estado_civil'>Estado civil</th>";
$code .= "    <th data-field='numero_hijos'>Número de hijos</th>";
$code .= "    <th data-field='tarjeta_militar'>Tarjeta militar</th>";
$code .= "    <th data-field='ars'>ARS</th>";
$code .= "    <th data-field='aseguradora'>Aseguradora</th>";
$code .= "    <th data-field='eps'>EPS</th>";
$code .= "    <th data-field='nivel_educativo'>Nivel educativo</th>";
$code .= "    <th data-field='ocupacion'>Ocupación</th>";
$code .= "    <th data-field='regimen_salud'>Régimen de salud</th>";
$code .= "    <th data-field='fecha_expedicion_documento'>Fecha de expedición del documento</th>";
$code .= "    <th data-field='saber_11'>Saber 11</th>";
$code .= "    <th data-field='ticket'>Ticket</th>";
$code .= "    <th data-field='observaciones'>Observaciones</th>";
$code .= "    <th data-field='estado'>Estado</th>";
$code .= "    <th data-field='entrevista'>Entrevista</th>";
$code .= "    <th data-field='tipo_vinculacion'>Tipo de vinculación</th>";
$code .= "    <th data-field='grupo_etnico'>Grupo étnico</th>";
$code .= "    <th data-field='pueblo_indigena'>Pueblo indígena</th>";
$code .= "    <th data-field='afrodescendiente'>Afrodescendiente</th>";
$code .= "    <th data-field='discapacidad'>Discapacidad</th>";
$code .= "    <th data-field='tipo_discapacidad'>Tipo de discapacidad</th>";
$code .= "    <th data-field='habilidad_excepcional'>Habilidad excepcional</th>";
$code .= "    <th data-field='responsable'>Responsable</th>";
$code .= "    <th data-field='relacion_responsable'>Relación con el responsable</th>";
$code .= "    <th data-field='telefono_responsable'>Teléfono del responsable</th>";
$code .= "    <th data-field='personas_convivientes'>Número de personas que viven con usted</th>";
$code .= "    <th data-field='personas_aportantes'>Número de personas que aportan económicamente</th>";
$code .= "    <th data-field='personas_dependientes'>Personas que dependen económicamente de usted</th>";
$code .= "    <th data-field='primera_generacion_universidad'>Primera persona en la familia en estudiar en universidad</th>";
$code .= "    <th data-field='poblacion_frontera'>Población de frontera</th>";
$code .= "    <th data-field='grupo_poblacional'>Grupo poblacional con el que se identifica</th>";
$code .= "    <th data-field='poblacion_destacada'>Población destacada</th>";
$code .= "    <th data-field='autor'>Autor</th>";
$code .= "    <th data-field='observaciones_academicas'>Observaciones académicas</th>";
$code .= "    <th data-field='creado_en'>Creado en</th>";
$code .= "    <th data-field='actualizado_en'>Actualizado en</th>";
$code .= "    <th data-field='eliminado_en'>Eliminado en</th>";
$code .= "  </tr>";
$code .= "</thead>";
$count = 0;
foreach ($registrations as $registration) {
    $count++;
    $code .= "<tr>";
    $code .= "    <td>{$count}</td>";
    $code .= "    <td>{$registration['registration']}</td>";
    $code .= "    <td>{$registration['agreement']}</td>";
    $code .= "    <td>{$registration['agreement_country']}</td>";
    $code .= "    <td>{$registration['agreement_region']}</td>";
    $code .= "    <td>{$registration['agreement_city']}</td>";
    $code .= "    <td>{$registration['agreement_institution']}</td>";
    $code .= "    <td>{$registration['period']}</td>";
    $code .= "    <td>{$registration['journey']}</td>";
    $code .= "    <td>{$registration['program']}</td>";
    $code .= "    <td>{$registration['first_name']}</td>";
    $code .= "    <td>{$registration['second_name']}</td>";
    $code .= "    <td>{$registration['first_surname']}</td>";
    $code .= "    <td>{$registration['second_surname']}</td>";
    $code .= "    <td>{$registration['identification_type']}</td>";
    $code .= "    <td>{$registration['identification_number']}</td>";
    $code .= "    <td>{$registration['gender']}</td>";
    $code .= "    <td>{$registration['email_address']}</td>";
    $code .= "    <td>{$registration['phone']}</td>";
    $code .= "    <td>{$registration['mobile']}</td>";
    $code .= "    <td>{$registration['date_of_birth']}</td>";
    $code .= "    <td>{$registration['address']}</td>";
    $code .= "    <td>{$registration['place_of_residence']}</td>";
    $code .= "    <td>{$registration['neighborhood']}</td>";
    $code .= "    <td>{$registration['area']}</td>";
    $code .= "    <td>{$registration['stratum']}</td>";
    $code .= "    <td>{$registration['transport_method']}</td>";
    $code .= "    <td>{$registration['sisben_group']}</td>";
    $code .= "    <td>{$registration['sisben_subgroup']}</td>";
    $code .= "    <td>{$registration['document_issue_place']}</td>";
    $code .= "    <td>{$registration['place_of_birth']}</td>";
    $code .= "    <td>{$registration['blood_type']}</td>";
    $code .= "    <td>{$registration['marital_status']}</td>";
    $code .= "    <td>{$registration['number_children']}</td>";
    $code .= "    <td>{$registration['military_card']}</td>";
    $code .= "    <td>{$registration['ars']}</td>";
    $code .= "    <td>{$registration['insurer']}</td>";
    $code .= "    <td>{$registration['eps']}</td>";
    $code .= "    <td>{$registration['education_level']}</td>";
    $code .= "    <td>{$registration['occupation']}</td>";
    $code .= "    <td>{$registration['health_regime']}</td>";
    $code .= "    <td>{$registration['document_issue_date']}</td>";
    $code .= "    <td>{$registration['saber11']}</td>";
    $code .= "    <td>{$registration['ticket']}</td>";
    $code .= "    <td>{$registration['observations']}</td>";
    $code .= "    <td>{$registration['status']}</td>";
    $code .= "    <td>{$registration['interview']}</td>";
    $code .= "    <td>{$registration['linkage_type']}</td>";
    $code .= "    <td>{$registration['ethnic_group']}</td>";
    $code .= "    <td>{$registration['indigenous_people']}</td>";
    $code .= "    <td>{$registration['afro_descendant']}</td>";
    $code .= "    <td>{$registration['disability']}</td>";
    $code .= "    <td>{$registration['disability_type']}</td>";
    $code .= "    <td>{$registration['exceptional_ability']}</td>";
    $code .= "    <td>{$registration['responsible']}</td>";
    $code .= "    <td>{$registration['responsible_relationship']}</td>";
    $code .= "    <td>{$registration['responsible_phone']}</td>";
    $code .= "    <td>{$registration['num_people_living_with_you']}</td>";
    $code .= "    <td>{$registration['num_people_contributing_economically']}</td>";
    $code .= "    <td>{$registration['num_people_depending_on_you']}</td>";
    $code .= "    <td>{$registration['first_in_family_to_study_university']}</td>";
    $code .= "    <td>{$registration['border_population']}</td>";
    $code .= "    <td>{$registration['identified_population_group']}</td>";
    $code .= "    <td>{$registration['highlighted_population']}</td>";
    $code .= "    <td>{$registration['author']}</td>";
    $code .= "    <td>{$registration['observations_academic']}</td>";
    $code .= "    <td>{$registration['created_at']}</td>";
    $code .= "    <td>{$registration['updated_at']}</td>";
    $code .= "    <td>{$registration['deleted_at']}</td>";
    $code .= "</tr>";
}
$code .= "</table>";
$code .= "</div>";
echo($code);
?>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF/jspdf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
<link rel="stylesheet" href="/themes/assets/libraries/bootstrap/tables/1.22.1/dist/bootstrap-table.css">
<link rel="stylesheet"
      href="/themes/assets/libraries/bootstrap/tables/1.22.1/dist/extensions/sticky-header/bootstrap-table-sticky-header.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<script src="/themes/assets/libraries/bootstrap/tables/1.22.1/dist/bootstrap-table.js"></script>
<script src="/themes/assets/libraries/bootstrap/tables/1.22.1/dist/bootstrap-table-locale-all.js"></script>
<script src="/themes/assets/libraries/bootstrap/tables/1.22.1/dist/extensions/export/bootstrap-table-export.js"></script>
<script src="/themes/assets/libraries/bootstrap/tables/1.22.1/dist/extensions/sticky-header/bootstrap-table-sticky-header.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var table = document.getElementById('table-registrations');
        var bsTable = new bootstrap.Table(table, {
            search: true,
            pageList: [50, 100, 200, 400, 800, 1600],
            pagination: true,
            sortable: true
        });
    });
</script>
