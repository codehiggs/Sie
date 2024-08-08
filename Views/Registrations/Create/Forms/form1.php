<?php

/*
 * **
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ ░FRAMEWORK                                  2024-08-08 10:46:00
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
//[services]------------------------------------------------------------------------------------------------------------
$b = service("bootstrap");
$f = service("forms", array("lang" => "Sie_Registrations."));
//[models]--------------------------------------------------------------------------------------------------------------
//$model = model("App\Modules\Sie\Models\Sie_Registrations");
$mprograms = model("App\Modules\Sie\Models\Sie_Programs");
$mcountries = model("App\Modules\Sie\Models\Sie_Countries");
$mregions = model("App\Modules\Sie\Models\Sie_Regions");
$mcities = model("App\Modules\Sie\Models\Sie_Cities");
//[vars]----------------------------------------------------------------------------------------------------------------
$r["period"] = $f->get_Value("period");
$r["journey"] = $f->get_Value("journey");
$r["program"] = $f->get_Value("program");

$r["registration"] = $f->get_Value("registration", pk());
$r["first_name"] = $f->get_Value("first_name");
$r["second_name"] = $f->get_Value("second_name");
$r["first_surname"] = $f->get_Value("first_surname");
$r["second_surname"] = $f->get_Value("second_surname");
$r["identification_type"] = $f->get_Value("identification_type");
$r["identification_number"] = $f->get_Value("identification_number");
$r["gender"] = $f->get_Value("gender");
$r["email_address"] = $f->get_Value("email_address");
$r["phone"] = $f->get_Value("phone");
$r["mobile"] = $f->get_Value("mobile");
$r["date_of_birth"] = $f->get_Value("date_of_birth");

$r["place_of_birth"] = $f->get_Value("place_of_birth");
if (!empty($r["place_of_birth"])) {
    $city = $mcities->get_City($r["place_of_birth"]);
    $r["regions_birth"] = $city["region"];
    $r["countries_birth"] = $city["country"];
} else {
    $r["countries_birth"] = $f->get_Value("countries_birth", "CO");
    $r["regions_birth"] = $f->get_Value("regions_birth", "076");
}

$r["place_of_residence"] = $f->get_Value("place_of_residence");
if (!empty($r["place_of_residence"])) {
    $city = $mcities->get_City($r["place_of_residence"]);
    $r["regions_residence"] = $city["region"];
    $r["countries_residence"] = $city["country"];
} else {
    $r["countries_residence"] = $f->get_Value("countries_residence", "CO");
    $r["regions_residence"] = $f->get_Value("regions_residence", "076");
}

$r["address"] = $f->get_Value("address");

$r["neighborhood"] = $f->get_Value("neighborhood");
$r["area"] = $f->get_Value("area");
$r["stratum"] = $f->get_Value("stratum");
$r["transport_method"] = $f->get_Value("transport_method");
$r["sisben_group"] = $f->get_Value("sisben_group");
$r["sisben_subgroup"] = $f->get_Value("sisben_subgroup");
$r["document_issue_place"] = $f->get_Value("document_issue_place");
$r["blood_type"] = $f->get_Value("blood_type");
$r["marital_status"] = $f->get_Value("marital_status");
$r["number_children"] = $f->get_Value("number_children");
$r["military_card"] = $f->get_Value("military_card");
$r["ars"] = $f->get_Value("ars");
$r["insurer"] = $f->get_Value("insurer");
$r["eps"] = $f->get_Value("eps");
$r["education_level"] = $f->get_Value("education_level");
$r["occupation"] = $f->get_Value("occupation");
$r["health_regime"] = $f->get_Value("health_regime");
$r["document_issue_date"] = $f->get_Value("document_issue_date");
$r["saber11"] = $f->get_Value("saber11");
$back = (($oid == "fullscreen") ? "/sie/registrations/cancel/fullscreen" : "/sie/registrations/list/" . lpk());

$programs = array(array("value" => "", "label" => "Seleccione un programa"),);

$countries = array(
    array("value" => "", "label" => "Seleccione un país"),
    array("value" => "CO", "label" => "Colombia"),
    array("value" => "VE", "label" => "Venezuela"),
);
$regions_birth = array(array("value" => "", "label" => "Seleccione una región"),);
$cities_birth = array(array("value" => "", "label" => "Seleccione una ciudad"),);
$regions_birth = array_merge($regions_birth, $mregions->get_SelectData($r["countries_birth"]));
$cities_birth = array_merge($cities_birth, $mcities->get_SelectData($r["regions_birth"]));

$regions_residence = array(array("value" => "", "label" => "Seleccione una región"),);
$cities_residence = array(array("value" => "", "label" => "Seleccione una ciudad"),);
$regions_residence = array_merge($regions_residence, $mregions->get_SelectData($r["countries_residence"]));
$cities_residence = array_merge($cities_residence, $mcities->get_SelectData($r["regions_residence"]));

$programs = array_merge($programs, $mprograms->get_SelectPreregistration());


$fid = $f->get_fid();
//[fields]----------------------------------------------------------------------------------------------------------------
$f->add_HiddenField("step", "1");
$f->fields["period"] = $f->get_FieldSelect("period", array("selected" => $r["period"], "data" => LIST_PERIODS, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["journey"] = $f->get_FieldSelect("journey", array("selected" => $r["journey"], "data" => LIST_JOURNEYS, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["program"] = $f->get_FieldSelect("program", array("selected" => $r["program"], "data" => $programs, "proportion" => "col-12"));
$f->fields["registration"] = $f->get_FieldText("registration", array("value" => $r["registration"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12", "readonly" => "true"));
$f->fields["first_name"] = $f->get_FieldText("first_name", array("value" => $r["first_name"], "proportion" => "col-md-3 col-sm-12 col-12"));
$f->fields["second_name"] = $f->get_FieldText("second_name", array("value" => $r["second_name"], "proportion" => "col-md-3 col-sm-12 col-12"));
$f->fields["first_surname"] = $f->get_FieldText("first_surname", array("value" => $r["first_surname"], "proportion" => "col-md-3 col-sm-12 col-12"));
$f->fields["second_surname"] = $f->get_FieldText("second_surname", array("value" => $r["second_surname"], "proportion" => "col-md-3 col-sm-12 col-12"));
$f->fields["identification_type"] = $f->get_FieldSelect("identification_type", array("selected" => $r["identification_type"], "data" => LIST_IDENTIFICATION_TYPES, "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["identification_number"] = $f->get_FieldText("identification_number", array("value" => $r["identification_number"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["gender"] = $f->get_FieldSelect("gender", array("selected" => $r["gender"], "data" => LIST_SEX, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["email_address"] = $f->get_FieldText("email_address", array("value" => $r["email_address"], "proportion" => "col-md-6 col-sm-12 col-12"));

$f->fields["date_of_birth"] = $f->get_FieldDate("date_of_birth", array("value" => $r["date_of_birth"], "proportion" => "col-md-3 col-sm-12 col-12"));
$f->fields["countries_birth"] = $f->get_FieldSelect("countries_birth", array("selected" => $r["countries_birth"], "data" => $countries, "proportion" => "col-md-3 col-sm-12 col-12"));
$f->fields["regions_birth"] = $f->get_FieldSelect("regions_birth", array("selected" => $r["regions_birth"], "data" => $regions_birth, "proportion" => "col-md-3 col-sm-12 col-12"));
$f->fields["place_of_birth"] = $f->get_FieldSelect("place_of_birth", array("selected" => $r["place_of_birth"], "data" => $cities_birth, "proportion" => "col-md-3 col-sm-12 col-12"));

$f->fields["phone"] = $f->get_FieldText("phone", array("value" => $r["phone"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["mobile"] = $f->get_FieldText("mobile", array("value" => $r["mobile"], "proportion" => "col-md-6 col-sm-12 col-12"));

$f->fields["countries_residence"] = $f->get_FieldSelect("countries_residence", array("selected" => $r["countries_residence"], "data" => $countries, "proportion" => "col-md-4 col-sm-12 col-12"));
$f->fields["regions_residence"] = $f->get_FieldSelect("regions_residence", array("selected" => $r["regions_residence"], "data" => $regions_residence, "proportion" => "col-md-4 col-sm-12 col-12"));
$f->fields["place_of_residence"] = $f->get_FieldSelect("place_of_residence", array("selected" => $r["place_of_residence"], "data" => $cities_residence, "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["address"] = $f->get_FieldText("address", array("value" => $r["address"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["neighborhood"] = $f->get_FieldText("neighborhood", array("value" => $r["neighborhood"], "proportion" => "col-md-6 col-sm-12 col-12"));

$f->fields["area"] = $f->get_FieldText("area", array("value" => $r["area"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["stratum"] = $f->get_FieldText("stratum", array("value" => $r["stratum"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["transport_method"] = $f->get_FieldText("transport_method", array("value" => $r["transport_method"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["sisben_group"] = $f->get_FieldText("sisben_group", array("value" => $r["sisben_group"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["sisben_subgroup"] = $f->get_FieldText("sisben_subgroup", array("value" => $r["sisben_subgroup"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["document_issue_place"] = $f->get_FieldText("document_issue_place", array("value" => $r["document_issue_place"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["blood_type"] = $f->get_FieldText("blood_type", array("value" => $r["blood_type"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["marital_status"] = $f->get_FieldText("marital_status", array("value" => $r["marital_status"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["number_children"] = $f->get_FieldText("number_children", array("value" => $r["number_children"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["military_card"] = $f->get_FieldText("military_card", array("value" => $r["military_card"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["ars"] = $f->get_FieldText("ars", array("value" => $r["ars"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["insurer"] = $f->get_FieldText("insurer", array("value" => $r["insurer"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["eps"] = $f->get_FieldText("eps", array("value" => $r["eps"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["education_level"] = $f->get_FieldText("education_level", array("value" => $r["education_level"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["occupation"] = $f->get_FieldText("occupation", array("value" => $r["occupation"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["health_regime"] = $f->get_FieldText("health_regime", array("value" => $r["health_regime"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["document_issue_date"] = $f->get_FieldText("document_issue_date", array("value" => $r["document_issue_date"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["saber11"] = $f->get_FieldText("saber11", array("value" => $r["saber11"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["cancel"] = $f->get_Cancel("cancel", array("href" => $back, "text" => lang("App.Cancel"), "type" => "secondary", "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["submit"] = $f->get_Submit("submit", array("value" => lang("App.Continue"), "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-left"));
//[groups]----------------------------------------------------------------------------------------------------------------
$f->groups["g01"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["registration"] . $f->fields["identification_type"] . $f->fields["identification_number"])));
$f->groups["g02"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["period"] . $f->fields["journey"])));
$f->groups["g03"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["program"])));
$f->groups["g04"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["first_name"] . $f->fields["second_name"] . $f->fields["first_surname"] . $f->fields["second_surname"])));
$f->groups["g06"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["gender"] . $f->fields["email_address"])));
$f->groups["g07"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["date_of_birth"] . $f->fields["countries_birth"] . $f->fields["regions_birth"] . $f->fields["place_of_birth"])));
$f->groups["g09"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["phone"] . $f->fields["mobile"])));
$f->groups["g10"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["countries_residence"] . $f->fields["regions_residence"] . $f->fields["place_of_residence"])));
$f->groups["g11"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["address"] . $f->fields["neighborhood"])));
//[buttons]-------------------------------------------------------------------------------------------------------------
$f->groups["gy"] = $f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields" => $f->fields["submit"] . $f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $b->get_Card("create", array(
    "title" => "Formulario de preinscripción",
    "alert" => array(
        'type' => 'info',
        'title' => "¡Atención!",
        'message' => "Formulario solo valido para el registro de estudiantes pertenecientes al convenio CALIMA DARIEN  ",
    ), "content" => $f,
    "header-back" => (($oid == "fullscreen") ? false : $back),
));
echo($card);
$fidentification_number = $f->get_FieldID("identification_number");
$fid = $f->get_fid();
?>

<div class="modal fade" id="statusSuccessModal" tabindex="-1" role="dialog" data-bs-backdrop="static"
     data-bs-keyboard="false">
    <div id="anunce" class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center p-lg-4">
                <h4 class="text-success mt-3">¡Bienvenido!</h4>
                <p class="mt-3">En cumplimiento de la Ley 1581 de 2012, los Decretos Reglamentarios 1377 de 2013 y el
                    886 de 2014, así como las normativas legales correspondientes, manifiesto de manera expresa y
                    voluntaria mi autorización al ESTABLECIMIENTO PÚBLICO DE EDUCACIÓN SUPERIOR UTEDE, para llevar a
                    cabo
                    el tratamiento de los datos suministrados por mí a través de este formulario. Autorizo al mencionado
                    establecimiento, en el ejercicio de sus funciones como Institución de Educación Superior, a utilizar
                    las fotografías en las que aparezco con fines informativos de comunicación interna y externa, así
                    como con propósitos administrativos, incluyendo la facultad de recolectar, almacenar, circular,
                    suprimir, procesar, intercambiar, compilar, dar tratamiento y/o transferir a terceros los datos e
                    imágenes suministrados, que se incorporarán en distintas bases de datos o repositorios electrónicos.
                    Asimismo, autorizo el uso de los datos de acuerdo con el Manual de Política de Tratamiento de Datos
                    Personales del ESTABLECIMIENTO PÚBLICO DE EDUCACIÓN SUPERIOR, conforme a la Resolución N°. 229 de
                    julio 18 de 2018</p>
                <div class="btn-group">
                    <!--<a href="/sie/registrations/cancel/fullscreen" class="btn mt-3 btn-secondary">Inicio</a>//-->
                    <a href="#" class="btn mt-3 btn-primary" data-bs-dismiss="modal">Acepto</a>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {


        // Obtén el elemento del campo de entrada
        var inputField = document.getElementById('<?php echo($fidentification_number);?>');

        // Agrega un event listener para el evento 'keyup'
        inputField.addEventListener('keyup', function () {
                var identificationNumber = this.value;
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '/sie/api/registrations/json/identification/' + identificationNumber, true);
                xhr.onload = function () {
                    if (this.status == 200) {
                        var data = JSON.parse(this.responseText);
                        if (data.registration) {
                            document.getElementById('<?php echo($fid);?>_registration').value = data.registration;
                        }
                        if (data.first_name) {
                            document.getElementById('<?php echo($fid);?>_first_name').value = data.first_name;
                        }
                        if (data.period) {
                            document.getElementById('<?php echo($fid);?>_period').value = data.period;
                        }
                        if (data.journey) {
                            document.getElementById('<?php echo($fid);?>_journey').value = data.journey;
                        }
                        if (data.program) {
                            document.getElementById('<?php echo($fid);?>_program').value = data.program;
                        }
                        if (data.second_name) {
                            document.getElementById('<?php echo($fid);?>_second_name').value = data.second_name;
                        }
                        if (data.first_surname) {
                            document.getElementById('<?php echo($fid);?>_first_surname').value = data.first_surname;
                        }
                        if (data.second_surname) {
                            document.getElementById('<?php echo($fid);?>_second_surname').value = data.second_surname;
                        }
                        if (data.identification_type) {
                            document.getElementById('<?php echo($fid);?>_identification_type').value = data.identification_type;
                        }
                        if (data.gender) {
                            document.getElementById('<?php echo($fid);?>_gender').value = data.gender;
                        }
                        if (data.email_address) {
                            document.getElementById('<?php echo($fid);?>_email_address').value = data.email_address;
                        }
                        if (data.phone) {
                            document.getElementById('<?php echo($fid);?>_phone').value = data.phone;
                        }
                        if (data.mobile) {
                            document.getElementById('<?php echo($fid);?>_mobile').value = data.mobile;
                        }
                        if (data.date_of_birth) {
                            document.getElementById('<?php echo($fid);?>_date_of_birth').value = data.date_of_birth;
                        }

                        if (data.address) {
                            document.getElementById('<?php echo($fid);?>_address').value = data.address;
                        }

                        if (data.neighborhood) {
                            document.getElementById('<?php echo($fid);?>_neighborhood').value = data.neighborhood;
                        }

                        if (data.countries_birth) {
                            document.getElementById('<?php echo($fid);?>_countries_birth').value = data.countries_birth;
                            if (data.regions_birth) {
                                document.getElementById('<?php echo($fid);?>_regions_birth').value = data.regions_birth;
                                change_region_city(data.regions_birth, data.place_of_birth);
                            }
                        }

                    }
                }
                xhr.send();
            }
        );


        var myModal = new bootstrap.Modal(document.getElementById('statusSuccessModal'));
        myModal.show();

        var countries_birth = document.getElementById('<?php echo($fid);?>_countries_birth');
        var regions_birth = document.getElementById('<?php echo($fid);?>_regions_birth');
        var place_of_birth = document.getElementById('<?php echo($fid);?>_place_of_birth');
        var countries_residence = document.getElementById('<?php echo($fid);?>_countries_residence');
        var regions_residence = document.getElementById('<?php echo($fid);?>_regions_residence');
        var place_of_residence = document.getElementById('<?php echo($fid);?>_place_of_residence');

        countries_birth.addEventListener('change', function () {
            var country = this.value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/sie/api/registrations/json/regions/' + country, true);
            xhr.onload = function () {
                if (this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    regions_birth.innerHTML = '<option value="">Seleccione una región</option>';
                    data.forEach(function (region) {
                        var option = document.createElement('option');
                        option.value = region.value;
                        option.text = region.label;
                        regions_birth.add(option);
                    });
                }
            }
            xhr.send();
        });

        regions_birth.addEventListener('change', function () {
            var region = this.value;
            change_region(region);
        });


        function change_region(region) {
            console.log("Change: Region");
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/sie/api/registrations/json/cities/' + region, true);
            xhr.onload = function () {
                if (this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    place_of_birth.innerHTML = '<option value="">Seleccione una ciudad</option>';
                    data.forEach(function (city) {
                        var option = document.createElement('option');
                        option.value = city.value;
                        option.text = city.label;
                        place_of_birth.add(option);
                    });
                }
            }
            xhr.send();
        }

        function change_region_city(region, city) {
            console.log("Change And City : Region");
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/sie/api/registrations/json/cities/' + region, true);
            xhr.onload = function () {
                if (this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    place_of_birth.innerHTML = '<option value="">Seleccione una ciudad</option>';
                    data.forEach(function (city) {
                        var option = document.createElement('option');
                        option.value = city.value;
                        option.text = city.label;
                        place_of_birth.add(option);
                    });
                    place_of_birth.value = city;
                }
            }
            xhr.send();
        }


        countries_residence.addEventListener('change', function () {
            var country = this.value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/sie/api/registrations/json/regions/' + country, true);
            xhr.onload = function () {
                if (this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    regions_residence.innerHTML = '<option value="">Seleccione una región</option>';
                    data.forEach(function (region) {
                        var option = document.createElement('option');
                        option.value = region.value;
                        option.text = region.label;
                        regions_residence.add(option);
                    });
                }
            }
            xhr.send();
        });

        regions_residence.addEventListener('change', function () {
            var region = this.value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/sie/api/registrations/json/cities/' + region, true);
            xhr.onload = function () {
                if (this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    place_of_residence.innerHTML = '<option value="">Seleccione una ciudad</option>';
                    data.forEach(function (city) {
                        var option = document.createElement('option');
                        option.value = city.value;
                        option.text = city.label;
                        place_of_residence.add(option);
                    });
                }

            }
            xhr.send();
        });


    });
</script>

