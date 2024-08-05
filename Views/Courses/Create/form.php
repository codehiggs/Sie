<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-03-15 06:53:06
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Sie\Views\Courses\Creator\form.php]
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
//[services]------------------------------------------------------------------------------------------------------------
$b = service("bootstrap");
$f = service("forms", array("lang" => "Courses."));
//[models]--------------------------------------------------------------------------------------------------------------
//$model = model("App\Modules\Sie\Models\Sie_Courses");
$mprogams = model("App\Modules\Sie\Models\Sie_Programs");
$musers = model("App\Modules\Sie\Models\Sie_Users");
//[vars]----------------------------------------------------------------------------------------------------------------
$r["course"] = $f->get_Value("course", pk());
$r["reference"] = $f->get_Value("reference");
$r["program"] = $f->get_Value("program");
$r["grid"] = $f->get_Value("grid");
$r["version"] = $f->get_Value("version");
$r["module"] = $f->get_Value("module");
$r["teacher"] = $f->get_Value("teacher");
$r["name"] = $f->get_Value("name");
$r["description"] = $f->get_Value("description");
$r["maximum_quota"] = $f->get_Value("maximum_quota", "25");
$r["start"] = $f->get_Value("start");
$r["end"] = $f->get_Value("end");
$r["period"] = $f->get_Value("period");
$r["space"] = $f->get_Value("space");
$r["author"] = $f->get_Value("author", safe_get_user());
$r["created_at"] = $f->get_Value("created_at");
$r["updated_at"] = $f->get_Value("updated_at");
$r["deleted_at"] = $f->get_Value("deleted_at");
$back = "/sie/courses/list/" . lpk();

$programs = array(
    array("value" => "", "label" => "Seleccione un programa"),
);
$programs = array_merge($programs, $mprogams->get_SelectData());

$modules = array(
    array("value" => "", "label" => "Seleccione un módulo"),
);

$uteachers = $musers->get_ListByType(1000, 0, "TEACHER", "");
$teachers = array(
    array("value" => "", "label" => "Seleccione un profesor"),
);
foreach ($uteachers as $teacher) {
    $firstname = safe_urldecode($teacher["firstname"]);
    $lastname = safe_urldecode($teacher["lastname"]);
    $teachers[] = array("value" => $teacher["user"], "label" => "{$firstname} {$lastname}");
}


$grids = array(
    array("value" => "", "label" => "Seleccione una..."),
);

//[fields]----------------------------------------------------------------------------------------------------------------
$f->fields["course"] = $f->get_FieldText("course", array("value" => $r["course"], "proportion" => "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12", "readonly" => true));
$f->fields["reference"] = $f->get_FieldText("reference", array("value" => $r["reference"], "proportion" => "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"));
$f->fields["program"] = $f->get_FieldSelect("program", array("selected" => $r["program"], "data" => $programs, "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"));
$f->fields["grid"] = $f->get_FieldSelect("grid", array("selected" => $r["grid"], "data" => $grids, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["version"] = $f->get_FieldText("version", array("value" => $r["version"], "proportion" => "col-md-3 col-sm-12 col-12", "readonly" => true));
$f->fields["version_reference"] = $f->get_FieldText("version_reference", array("value" => "", "proportion" => "col-md-3 col-sm-12 col-12", "readonly" => true));
$f->fields["module"] = $f->get_FieldSelect("module", array("selected" => $r["module"], "data" => $modules, "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"));
$f->fields["teacher"] = $f->get_FieldSelect("teacher", array("selected" => $r["teacher"], "data" => $teachers, "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"));
$f->fields["name"] = $f->get_FieldText("name", array("value" => $r["name"], "proportion" => "col-12"));
$f->fields["description"] = $f->get_FieldTextArea("description", array("value" => $r["description"], "proportion" => "col-12"));
$f->fields["maximum_quota"] = $f->get_FieldNumber("maximum_quota", array("value" => $r["maximum_quota"], "proportion" => "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"));
$f->fields["start"] = $f->get_FieldDate("start", array("value" => $r["start"], "proportion" => "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"));
$f->fields["end"] = $f->get_FieldDate("end", array("value" => $r["end"], "proportion" => "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"));
$f->fields["period"] = $f->get_FieldSelect("period", array("selected" => $r["period"], "data" => LIST_PERIODS, "proportion" => "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"));
$f->fields["space"] = $f->get_FieldText("space", array("value" => $r["space"], "proportion" => "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"));
$f->add_HiddenField("author", $r["author"]);
$f->fields["created_at"] = $f->get_FieldText("created_at", array("value" => $r["created_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["updated_at"] = $f->get_FieldText("updated_at", array("value" => $r["updated_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["deleted_at"] = $f->get_FieldText("deleted_at", array("value" => $r["deleted_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["cancel"] = $f->get_Cancel("cancel", array("href" => $back, "text" => lang("App.Cancel"), "type" => "secondary", "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["submit"] = $f->get_Submit("submit", array("value" => lang("App.Create"), "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-left"));
//[groups]----------------------------------------------------------------------------------------------------------------
$f->groups["g1"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["course"] . $f->fields["reference"] . $f->fields["program"])));
$f->groups["g2"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["grid"] . $f->fields["version"] . $f->fields["version_reference"])));
$f->groups["g3"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["module"] . $f->fields["teacher"])));
$f->groups["g4"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["name"])));
$f->groups["g5"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["description"])));
$f->groups["g6"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["maximum_quota"] . $f->fields["start"] . $f->fields["end"] . $f->fields["period"])));
//[buttons]-------------------------------------------------------------------------------------------------------------
$f->groups["gy"] = $f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields" => $f->fields["submit"] . $f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $b->get_Card("create", array(
    "title" => lang("Courses.create-title"),
    "content" => $f,
    "header-back" => $back
));
echo($card);
$fprogram = $f->get_FieldId("program");
$fgrid = $f->get_FieldId("grid");
$fversion = $f->get_FieldId("version");
$fversion_reference = $f->get_FieldId("version_reference");
$fmodule = $f->get_FieldId("module");
$fname = $f->get_FieldId("name");
$fversion_reference = $f->get_FieldId("version_reference");
$fperiod = $f->get_FieldId("period");
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var fprogram = document.getElementById('<?php echo($fprogram); ?>');
        var fgrid = document.getElementById('<?php echo($fgrid); ?>');
        var fversion = document.getElementById('<?php echo($fversion); ?>');
        var fmodule = document.getElementById('<?php echo($fmodule); ?>');
        var fversion_reference = document.getElementById('<?php echo($fversion_reference); ?>');
        var fname = document.getElementById('<?php echo($fname); ?>');
        var fversion_reference = document.getElementById('<?php echo($fversion_reference); ?>');
        var fperiod = document.getElementById('<?php echo($fperiod); ?>');
        fprogram.addEventListener('change', function () {
            var program = this.value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', "/sie/api/grids/json/select/" + program, true);
            xhr.responseType = 'json';
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var data = xhr.response.data;
                    console.log(data);
                    var html = "";
                    html += '<option value="">Seleccione una (Actualizado)...</option>';
                    for (var count = 0; count < data.length; count++) {
                        html += '<option value="' + data[count].value + '">' + data[count].label + '</option>';
                    }
                    fgrid.innerHTML = html;
                }
            };
            xhr.send();
        });


        fgrid.addEventListener('change', function () {
            gridChange();
        });

        function gridChange() {
            var program = fprogram.value;
            var grid = fgrid.value;
            if (grid && grid.trim() !== "") {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', "/sie/api/versions/json/active/" + grid, true);
                xhr.responseType = 'json';
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        var data = xhr.response.data;
                        console.log(data);
                        fversion.value = data.version;
                        fversion_reference.value = data.reference;
                        pensums();
                    }
                };
                xhr.send();
            } else {
                console.log("No se consulta la version de la malla ya que no hay una malla seleccionada");
            }
        }




        function pensums() {
            var version = fversion.value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', "/sie/api/pensums/json/select/" + version, true);
            xhr.responseType = 'json';
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var data = xhr.response.data;
                    console.log(data);
                    var html = "";
                    html += '<option value="">Seleccione uno (Actualizado)...</option>';
                    for (var count = 0; count < data.length; count++) {
                        html += '<option value="' + data[count].value + '">' + data[count].label + '</option>';
                    }
                    fmodule.innerHTML = html;
                }
            };
            xhr.send();
        }


        fmodule.addEventListener('change', function () {
            courseName();
        });

        function courseName() {
            var name = fmodule.options[fmodule.selectedIndex].text;
            var reference = fversion_reference.value;
            var period = fperiod.value;
            fname.value = name + reference + "p" + period;
        }


    });
</script>
