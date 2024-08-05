<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2023-12-18 11:03:17
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Security\Views\Users\Editor\form.php]
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
 * █ @authentication, @request, @dates, @parent, @component, @view, @oid, @views, @prefix
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
//[services]------------------------------------------------------------------------------------------------------------
$request = service('request');
$bootstrap = service('bootstrap');
$dates = service('dates');
$strings = service('strings');
$authentication = service('authentication');
$f = service("forms", array("lang" => "Users."));
//[models]--------------------------------------------------------------------------------------------------------------
//$model = model("App\Modules\Security\Models\Security_Users");
$musers = model("App\Modules\Security\Models\Security_Users");
$mfields = model("App\Modules\Security\Models\Security_Users_Fields");
$mattachments = model("App\Modules\Security\Models\Security_Attachments");
//[vars]----------------------------------------------------------------------------------------------------------------
$attachment = $mattachments->get_ByReference($oid, 'AVATAR');
$firstname = $strings->get_URLDecode($mfields->get_Field($oid, "firstname"));
$lastname = $strings->get_URLDecode($mfields->get_Field($oid, "lastname"));

$r["alias"] = $f->get_Value("alias", $mfields->get_Field($oid, "alias"));
$r["birthday"] = $f->get_Value("birthday", $mfields->get_Field($oid, "birthday"));
$r["citizenshipcard"] = $f->get_Value("citizenshipcard", $mfields->get_Field($oid, "citizenshipcard"));
$r["email"] = $f->get_Value("email", safe_urldecode($mfields->get_Field($oid, "email")));
$r["firstname"] = $f->get_Value("firstname", $firstname);
$r["lastname"] = $f->get_Value("lastname", $lastname);
$r["password"] = $f->get_Value("password", $mfields->get_Field($oid, "password"));
$r["confirm"] = $f->get_Value("confirm", $mfields->get_Field($oid, "password"));
$r["phone"] = $f->get_Value("phone", $mfields->get_Field($oid, "phone"));
$r["address"] = $f->get_Value("address", $mfields->get_Field($oid, "address"));
$r["reference"] = $f->get_Value("reference", $mfields->get_Field($oid, "reference"));
$r["notes"] = $f->get_Value("notes", $mfields->get_Field($oid, "notes"));
$r["expedition_date"] = $f->get_Value("expedition_date", $mfields->get_Field($oid, "expedition_date"));
$r["expedition_place"] = $f->get_Value("expedition_place", $mfields->get_Field($oid, "expedition_place"));
$r["moodle-username"] = $f->get_Value("moodle-username", $mfields->get_Field($oid, "moodle-username"));
$r["moodle-password"] = $f->get_Value("moodle-password", $mfields->get_Field($oid, "moodle-password"));
$row = $musers->where("user", $oid)->first();
$r["user"] = $f->get_Value("user", $row["user"]);
$r["author"] = $f->get_Value("author", $authentication->get_User());
$r["created_at"] = $f->get_Value("created_at", $row["created_at"]);
$r["updated_at"] = $f->get_Value("updated_at", $row["updated_at"]);
$r["deleted_at"] = $f->get_Value("deleted_at", $row["deleted_at"]);
//[fields]----------------------------------------------------------------------------------------------------------------
$musers = model("App\Modules\Security\Models\Security_Users");
$mfields = model("App\Modules\Security\Models\Security_Users_Fields");
$mattachments = model("App\Modules\Security\Models\Security_Attachments");
$r["civil_status"] = $f->get_Value("civil_status", $mfields->get_Field($oid, "civil_status"));
$r["ethnic_group"] = $f->get_Value("ethnic_group", $mfields->get_Field($oid, "ethnic_group"));
$r["indigenous_people"] = $f->get_Value("indigenous_people", $mfields->get_Field($oid, "indigenous_people"));
$r["black_community"] = $f->get_Value("black_community", $mfields->get_Field($oid, "black_community"));
$r["disability"] = $f->get_Value("disability", $mfields->get_Field($oid, "disability"));
$r["exceptional_ability"] = $f->get_Value("exceptional_ability", $mfields->get_Field($oid, "exceptional_ability"));
$r["urban_area"] = $f->get_Value("urban_area", $mfields->get_Field($oid, "urban_area"));
$r["received_financial_aid"] = $f->get_Value("received_financial_aid", $mfields->get_Field($oid, "received_financial_aid"));
$r["received_academic_assistance"] = $f->get_Value("received_academic_assistance", $mfields->get_Field($oid, "received_academic_assistance"));
$r["received_other_assistance"] = $f->get_Value("received_other_assistance", $mfields->get_Field($oid, "received_other_assistance"));
$r["school"] = $f->get_Value("school", $mfields->get_Field($oid, "school"));
$r["SABER_11_test_code"] = $f->get_Value("SABER_11_test_code", $mfields->get_Field($oid, "SABER_11_test_code"));
$r["test_date"] = $f->get_Value("test_date", $mfields->get_Field($oid, "test_date"));
$r["year_of_presentation"] = $f->get_Value("year_of_presentation", $mfields->get_Field($oid, "year_of_presentation"));
$r["semester_of_presentation"] = $f->get_Value("semester_of_presentation", $mfields->get_Field($oid, "semester_of_presentation"));
$r["average_score"] = $f->get_Value("average_score", $mfields->get_Field($oid, "average_score"));
$r["enrollment_program"] = $f->get_Value("enrollment_program", $mfields->get_Field($oid, "enrollment_program"));
$r["year_of_enrollment"] = $f->get_Value("year_of_enrollment", $mfields->get_Field($oid, "year_of_enrollment"));
$r["semester_of_enrollment"] = $f->get_Value("semester_of_enrollment", $mfields->get_Field($oid, "semester_of_enrollment"));
$r["stratum"] = $f->get_Value("stratum", $mfields->get_Field($oid, "stratum"));
$r["means_of_transportation"] = $f->get_Value("means_of_transportation", $mfields->get_Field($oid, "means_of_transportation"));
$r["sisben_group"] = $f->get_Value("sisben_group", $mfields->get_Field($oid, "sisben_group"));
$r["sisben_subgroup"] = $f->get_Value("sisben_subgroup", $mfields->get_Field($oid, "sisben_subgroup"));
$r["health_insurance"] = $f->get_Value("health_insurance", $mfields->get_Field($oid, "health_insurance"));
$r["health_promoting_entity"] = $f->get_Value("health_promoting_entity", $mfields->get_Field($oid, "health_promoting_entity"));
$r["insurance_company"] = $f->get_Value("insurance_company", $mfields->get_Field($oid, "insurance_company"));
$r["blood_type"] = $f->get_Value("blood_type", $mfields->get_Field($oid, "blood_type"));
$r["number_of_children"] = $f->get_Value("number_of_children", $mfields->get_Field($oid, "number_of_children"));
$r["military_ID_number"] = $f->get_Value("military_ID_number", $mfields->get_Field($oid, "military_ID_number"));
$r["previous_identification"] = $f->get_Value("previous_identification", $mfields->get_Field($oid, "previous_identification"));
$r["border_area"] = $f->get_Value("border_area", $mfields->get_Field($oid, "border_area"));
$r["educational_level"] = $f->get_Value("educational_level", $mfields->get_Field($oid, "educational_level"));
$r["occupation"] = $f->get_Value("occupation", $mfields->get_Field($oid, "occupation"));
$r["tuition_payment"] = $f->get_Value("tuition_payment", $mfields->get_Field($oid, "tuition_payment"));
$r["guardianship"] = $f->get_Value("guardianship", $mfields->get_Field($oid, "guardianship"));
$r["schedule_code"] = $f->get_Value("schedule_code", $mfields->get_Field($oid, "schedule_code"));
$r["calendar"] = $f->get_Value("calendar", $mfields->get_Field($oid, "calendar"));
$r["character"] = $f->get_Value("character", $mfields->get_Field($oid, "character"));
$r["specialty"] = $f->get_Value("specialty", $mfields->get_Field($oid, "specialty"));
$r["methodology"] = $f->get_Value("methodology", $mfields->get_Field($oid, "methodology"));
$r["language"] = $f->get_Value("language", $mfields->get_Field($oid, "language"));
$r["pension_value"] = $f->get_Value("pension_value", $mfields->get_Field($oid, "pension_value"));
$r["validated_high_school"] = $f->get_Value("validated_high_school", $mfields->get_Field($oid, "validated_high_school"));
$r["family_group_members"] = $f->get_Value("family_group_members", $mfields->get_Field($oid, "family_group_members"));
$r["economic_contributors"] = $f->get_Value("economic_contributors", $mfields->get_Field($oid, "economic_contributors"));
$r["total_income"] = $f->get_Value("total_income", $mfields->get_Field($oid, "total_income"));
$r["own_housing"] = $f->get_Value("own_housing", $mfields->get_Field($oid, "own_housing"));
$r["housing_debt"] = $f->get_Value("housing_debt", $mfields->get_Field($oid, "housing_debt"));
$r["father_educational_level"] = $f->get_Value("father_educational_level", $mfields->get_Field($oid, "father_educational_level"));
$r["father_occupation"] = $f->get_Value("father_occupation", $mfields->get_Field($oid, "father_occupation"));
$r["mother_educational_level"] = $f->get_Value("mother_educational_level", $mfields->get_Field($oid, "mother_educational_level"));
$r["mother_occupation"] = $f->get_Value("mother_occupation", $mfields->get_Field($oid, "mother_occupation"));
$r["number_of_siblings"] = $f->get_Value("number_of_siblings", $mfields->get_Field($oid, "number_of_siblings"));
$r["position_among_siblings"] = $f->get_Value("position_among_siblings", $mfields->get_Field($oid, "position_among_siblings"));
$r["siblings_with_higher_studies"] = $f->get_Value("siblings_with_higher_studies", $mfields->get_Field($oid, "siblings_with_higher_studies"));
$r["requires_financial_aid"] = $f->get_Value("requires_financial_aid", $mfields->get_Field($oid, "requires_financial_aid"));
$r["percentage_of_financial_aid"] = $f->get_Value("percentage_of_financial_aid", $mfields->get_Field($oid, "percentage_of_financial_aid"));
$r["requires_academic_assistance"] = $f->get_Value("requires_academic_assistance", $mfields->get_Field($oid, "requires_academic_assistance"));
$r["satisfaction_with_academic_assistance"] = $f->get_Value("satisfaction_with_academic_assistance", $mfields->get_Field($oid, "satisfaction_with_academic_assistance"));
$r["requires_other_assistance"] = $f->get_Value("requires_other_assistance", $mfields->get_Field($oid, "requires_other_assistance"));
$r["satisfaction_with_other_assistance"] = $f->get_Value("satisfaction_with_other_assistance", $mfields->get_Field($oid, "satisfaction_with_other_assistance"));
$r["conflict_victim"] = $f->get_Value("conflict_victim", $mfields->get_Field($oid, "conflict_victim"));
$r["victim_municipality"] = $f->get_Value("victim_municipality", $mfields->get_Field($oid, "victim_municipality"));
$r["vulnerable_group"] = $f->get_Value("vulnerable_group", $mfields->get_Field($oid, "vulnerable_group"));
$r["total_paid"] = $f->get_Value("total_paid", $mfields->get_Field($oid, "total_paid"));
$r["number_of_dependents"] = $f->get_Value("number_of_dependents", $mfields->get_Field($oid, "number_of_dependents"));
$r["work_semester"] = $f->get_Value("work_semester", $mfields->get_Field($oid, "work_semester"));
$r["type_of_work"] = $f->get_Value("type_of_work", $mfields->get_Field($oid, "type_of_work"));
$r["income_range_of_work"] = $f->get_Value("income_range_of_work", $mfields->get_Field($oid, "income_range_of_work"));
$r["duration_of_work"] = $f->get_Value("duration_of_work", $mfields->get_Field($oid, "duration_of_work"));
$r["presentation_reason"] = $f->get_Value("presentation_reason", $mfields->get_Field($oid, "presentation_reason"));
$r["career_selection_reason"] = $f->get_Value("career_selection_reason", $mfields->get_Field($oid, "career_selection_reason"));
$r["comes_from_private_sector"] = $f->get_Value("comes_from_private_sector", $mfields->get_Field($oid, "comes_from_private_sector"));
$r["special_educational_needs"] = $f->get_Value("special_educational_needs", $mfields->get_Field($oid, "special_educational_needs"));
//[arrays]---------------------------------------------------------------------------------------------------------------
$civil_status = LIST_MARITALS;
$ethnic_group = LIST_ETHNIC_GROUPS;


$indigenous_people = array(
    array("label" => "Ninguno", "value" => "0"),
    array("label" => "Achagua", "value" => "1"),
    array("label" => "Amorúa", "value" => "2"),
    array("label" => "Andoque o andoke", "value" => "3"),
    array("label" => "Arhuaco (ijka)", "value" => "4"),
    array("label" => "Awa (cuaiker)", "value" => "5"),
    array("label" => "Bara", "value" => "9"),
    array("label" => "Barea", "value" => "6"),
    array("label" => "Barí (motilón)", "value" => "7"),
    array("label" => "Betoye", "value" => "8"),
    array("label" => "Cañamomo", "value" => "10"),
    array("label" => "Carapana", "value" => "11"),
    array("label" => "Carijona o karijona", "value" => "12"),
    array("label" => "Chimila (ette e´neka)", "value" => "13"),
    array("label" => "Chiricoa", "value" => "14"),
    array("label" => "Cocama", "value" => "15"),
    array("label" => "Coconuco", "value" => "16"),
    array("label" => "Coyaima-Natagaima", "value" => "17"),
    array("label" => "Cubeo o kubeo", "value" => "19"),
    array("label" => "Cuiba o kuiba", "value" => "20"),
    array("label" => "Curripaco o kurripaco", "value" => "21"),
    array("label" => "Desano", "value" => "22"),
    array("label" => "Dujos", "value" => "23"),
    array("label" => "Embera catio o katío", "value" => "24"),
    array("label" => "Embera chami", "value" => "25"),
    array("label" => "Eperara siapidara", "value" => "26"),
    array("label" => "Guambiano", "value" => "27"),
    array("label" => "Guanaca", "value" => "28"),
    array("label" => "Guane", "value" => "29"),
    array("label" => "Guyabero", "value" => "30"),
    array("label" => "Hitnú", "value" => "31"),
    array("label" => "Hupdu", "value" => "32"),
    array("label" => "Inga", "value" => "33"),
    array("label" => "Juhup", "value" => "34"),
    array("label" => "Kakua", "value" => "37"),
    array("label" => "Kamsa o kamëntsá", "value" => "35"),
    array("label" => "Kankuamo", "value" => "36"),
    array("label" => "Kogui", "value" => "38"),
    array("label" => "Koreguaje o coreguaje", "value" => "39"),
    array("label" => "Letuama", "value" => "40"),
    array("label" => "Macaguaje o makaguaje", "value" => "41"),
    array("label" => "Macuna o makuna (sara)", "value" => "43"),
    array("label" => "Masiguare", "value" => "44"),
    array("label" => "Matapí", "value" => "45"),
    array("label" => "Miraña", "value" => "46"),
    array("label" => "Mokaná", "value" => "47"),
    array("label" => "Muinane", "value" => "48"),
    array("label" => "Muisca", "value" => "49"),
    array("label" => "Nonuya", "value" => "50"),
    array("label" => "Nukak (makú)", "value" => "42"),
    array("label" => "Ocaina", "value" => "51"),
    array("label" => "Páez", "value" => "52"),
    array("label" => "Pastos", "value" => "53"),
    array("label" => "Pijao", "value" => "54"),
    array("label" => "Puinave", "value" => "55"),
    array("label" => "Quenba o kambiwa", "value" => "56"),
    array("label" => "Quillacinga o kichwa", "value" => "57"),
    array("label" => "Quimbaya", "value" => "58"),
    array("label" => "Sáliba", "value" => "59"),
    array("label" => "Sáliba de hinterland", "value" => "60"),
    array("label" => "Secoya o siekopaai", "value" => "61"),
    array("label" => "Siona", "value" => "62"),
    array("label" => "Siriano", "value" => "63"),
    array("label" => "Tanimuca o letuama", "value" => "64"),
    array("label" => "Tatuyo", "value" => "67"),
    array("label" => "Tikuna", "value" => "65"),
    array("label" => "Totoró", "value" => "66"),
    array("label" => "Tucano", "value" => "68"),
    array("label" => "Tukano ocaina", "value" => "69"),
    array("label" => "Tulima o lerma", "value" => "70"),
    array("label" => "Uitoto", "value" => "71"),
    array("label" => "Urarina", "value" => "72"),
    array("label" => "Wanano", "value" => "73"),
    array("label" => "Waraño", "value" => "74"),
    array("label" => "Waunana", "value" => "75"),
    array("label" => "Wayuunaiki", "value" => "76"),
    array("label" => "Yanacona", "value" => "77"),
    array("label" => "Yucuna", "value" => "79"),
    array("label" => "Yuhup o matapihue", "value" => "85"),
    array("label" => "Yukpa", "value" => "78"),
    array("label" => "Yuruti", "value" => "80"),
    array("label" => "Zenu o zenú", "value" => "81")
);


$black_community = array(
    array("label" => "No aplica", "value" => "0"),
    array("label" => "Afrocolombiano", "value" => "1"),
    array("label" => "Palenquero", "value" => "2"),
    array("label" => "Raizal", "value" => "3"),
);


$disability = array(
    array("label" => "No aplica", "value" => "0"),
    array("label" => "Auditiva", "value" => "1"),
    array("label" => "Cognitiva", "value" => "2"),
    array("label" => "Física", "value" => "3"),
    array("label" => "Intelectual", "value" => "4"),
    array("label" => "Múltiple", "value" => "5"),
    array("label" => "Psicosocial", "value" => "6"),
    array("label" => "Sensitiva", "value" => "7"),
    array("label" => "Visual", "value" => "8"),
    array("label" => "Otra", "value" => "9")
);


$skills = array(
    array("label" => "No aplica", "value" => "0"),
    array("label" => "Talento excepcional general", "value" => "1"),
    array("label" => "Talento excepcional especifico", "value" => "2")
);

$areas = LIST_AREAS;

$yn = array(
    array("label" => "No", "value" => "0"),
    array("label" => "Si", "value" => "1")
);

$semesters = array(
    array("label" => "1", "value" => "1"),
    array("label" => "2", "value" => "2")
);


$stratums = LIST_STRATUMS;
$transportations = LIST_TRANSPORTS;
$sisbengroups = LIST_SISBEN_GROUPS;
$eps = LIST_EPS;
$ars = LIST_ARS;
$insurances = LIST_INSURANCES;
$blood_types = LIST_BLOOD;

$f->add_HiddenField("user", $r["user"]);
$f->add_HiddenField("option", "SNIES");
$f->add_HiddenField("author", $r["author"]);
$f->fields["alias"] = $f->get_FieldAlias("alias", array("value" => $r["alias"], "proportion" => "col-xl-4 col-md-12 col-12"));
$f->fields["civil_status"] = $f->get_FieldSelect("civil_status", array("selected" => $r["civil_status"], "data" => $civil_status, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["ethnic_group"] = $f->get_FieldSelect("ethnic_group", array("selected" => $r["ethnic_group"], "data" => $ethnic_group, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["indigenous_people"] = $f->get_FieldSelect("indigenous_people", array("selected" => $r["indigenous_people"], "data" => $indigenous_people, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["black_community"] = $f->get_FieldSelect("black_community", array("selected" => $r["black_community"], "data" => $black_community, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["disability"] = $f->get_FieldSelect("disability", array("selected" => $r["disability"], "data" => $disability, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["exceptional_ability"] = $f->get_FieldSelect("exceptional_ability", array("selected" => $r["exceptional_ability"], "data" => $skills, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["urban_area"] = $f->get_FieldSelect("urban_area", array("selected" => $r["urban_area"], "data" => $areas, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["received_financial_aid"] = $f->get_FieldSelect("received_financial_aid", array("selected" => $r["received_financial_aid"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["received_academic_assistance"] = $f->get_FieldSelect("received_academic_assistance", array("selected" => $r["received_academic_assistance"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["received_other_assistance"] = $f->get_FieldSelect("received_other_assistance", array("selected" => $r["received_other_assistance"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["school"] = $f->get_FieldText("school", array("value" => $r["school"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["SABER_11_test_code"] = $f->get_FieldText("SABER_11_test_code", array("value" => $r["SABER_11_test_code"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["test_date"] = $f->get_FieldDate("test_date", array("value" => $r["test_date"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["year_of_presentation"] = $f->get_FieldNumber("year_of_presentation", array("min" => "1970", "max" => "2025", "value" => $r["year_of_presentation"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["semester_of_presentation"] = $f->get_FieldSelect("semester_of_presentation", array("selected" => $r["semester_of_presentation"], "data" => $semesters, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["average_score"] = $f->get_FieldText("average_score", array("value" => $r["average_score"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["enrollment_program"] = $f->get_FieldText("enrollment_program", array("value" => $r["enrollment_program"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["year_of_enrollment"] = $f->get_FieldText("year_of_enrollment", array("value" => $r["year_of_enrollment"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["semester_of_enrollment"] = $f->get_FieldSelect("semester_of_enrollment", array("selected" => $r["semester_of_enrollment"], "data" => $semesters, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["stratum"] = $f->get_FieldSelect("stratum", array("selected" => $r["stratum"], "data" => $stratums, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["means_of_transportation"] = $f->get_FieldSelect("means_of_transportation", array("selected" => $r["means_of_transportation"], "data" => $transportations, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["sisben_group"] = $f->get_FieldSelect("sisben_group", array("selected" => $r["sisben_group"], "data" => $sisbengroups, "proportion" => "col-md-8 col-sm-12 col-12"));
$f->fields["sisben_subgroup"] = $f->get_FieldSelect("sisben_subgroup", array("selected" => $r["sisben_subgroup"], "data" => array(), "proportion" => "col-md-4 col-sm-12 col-12"));
$f->fields["health_insurance"] = $f->get_FieldSelect('health_insurance', array("selected" => $r["health_insurance"], "data" => $eps, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["health_promoting_entity"] = $f->get_FieldSelect('health_promoting_entity', array("selected" => $r["health_promoting_entity"], "data" => $ars, "proportion" => "col-12"));
$f->fields["insurance_company"] = $f->get_FieldSelect("insurance_company", array("selected" => $r["insurance_company"], "data" => $insurances, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["blood_type"] = $f->get_FieldSelect("blood_type", array("selected" => $r["blood_type"], "data" => $blood_types, "proportion" => "col-md-6 col-sm-12 col-12"));

$f->fields["number_of_children"] = $f->get_FieldText("number_of_children", array("value" => $r["number_of_children"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["military_ID_number"] = $f->get_FieldText("military_ID_number", array("value" => $r["military_ID_number"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["previous_identification"] = $f->get_FieldText("previous_identification", array("value" => $r["previous_identification"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["border_area"] = $f->get_FieldSelect("border_area", array("selected" => $r["border_area"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["educational_level"] = $f->get_FieldText("educational_level", array("value" => $r["educational_level"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["occupation"] = $f->get_FieldText("occupation", array("value" => $r["occupation"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["tuition_payment"] = $f->get_FieldText("tuition_payment", array("value" => $r["tuition_payment"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["guardianship"] = $f->get_FieldText("guardianship", array("value" => $r["guardianship"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["schedule_code"] = $f->get_FieldText("schedule_code", array("value" => $r["schedule_code"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["calendar"] = $f->get_FieldText("calendar", array("value" => $r["calendar"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["character"] = $f->get_FieldText("character", array("value" => $r["character"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["specialty"] = $f->get_FieldText("specialty", array("value" => $r["specialty"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["methodology"] = $f->get_FieldText("methodology", array("value" => $r["methodology"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["language"] = $f->get_FieldText("language", array("value" => $r["language"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["pension_value"] = $f->get_FieldText("pension_value", array("value" => $r["pension_value"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["validated_high_school"] = $f->get_FieldText("validated_high_school", array("value" => $r["validated_high_school"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["family_group_members"] = $f->get_FieldText("family_group_members", array("value" => $r["family_group_members"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["economic_contributors"] = $f->get_FieldText("economic_contributors", array("value" => $r["economic_contributors"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["total_income"] = $f->get_FieldText("total_income", array("value" => $r["total_income"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["own_housing"] = $f->get_FieldText("own_housing", array("value" => $r["own_housing"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["housing_debt"] = $f->get_FieldText("housing_debt", array("value" => $r["housing_debt"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["father_educational_level"] = $f->get_FieldText("father_educational_level", array("value" => $r["father_educational_level"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["father_occupation"] = $f->get_FieldText("father_occupation", array("value" => $r["father_occupation"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["mother_educational_level"] = $f->get_FieldText("mother_educational_level", array("value" => $r["mother_educational_level"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["mother_occupation"] = $f->get_FieldText("mother_occupation", array("value" => $r["mother_occupation"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["number_of_siblings"] = $f->get_FieldText("number_of_siblings", array("value" => $r["number_of_siblings"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["position_among_siblings"] = $f->get_FieldText("position_among_siblings", array("value" => $r["position_among_siblings"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["siblings_with_higher_studies"] = $f->get_FieldText("siblings_with_higher_studies", array("value" => $r["siblings_with_higher_studies"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["requires_financial_aid"] = $f->get_FieldSelect("requires_financial_aid", array("selected" => $r["requires_financial_aid"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["percentage_of_financial_aid"] = $f->get_FieldText("percentage_of_financial_aid", array("value" => $r["percentage_of_financial_aid"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["requires_academic_assistance"] = $f->get_FieldSelect("requires_academic_assistance", array("selected" => $r["requires_academic_assistance"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["satisfaction_with_academic_assistance"] = $f->get_FieldText("satisfaction_with_academic_assistance", array("value" => $r["satisfaction_with_academic_assistance"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["requires_other_assistance"] = $f->get_FieldSelect("requires_other_assistance", array("selected" => $r["requires_other_assistance"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["satisfaction_with_other_assistance"] = $f->get_FieldText("satisfaction_with_other_assistance", array("value" => $r["satisfaction_with_other_assistance"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["conflict_victim"] = $f->get_FieldSelect("conflict_victim", array("selected" => $r["conflict_victim"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["victim_municipality"] = $f->get_FieldText("victim_municipality", array("value" => $r["victim_municipality"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["vulnerable_group"] = $f->get_FieldSelect("vulnerable_group", array("selected" => $r["vulnerable_group"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["total_paid"] = $f->get_FieldText("total_paid", array("value" => $r["total_paid"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["number_of_dependents"] = $f->get_FieldText("number_of_dependents", array("value" => $r["number_of_dependents"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["work_semester"] = $f->get_FieldText("work_semester", array("value" => $r["work_semester"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["type_of_work"] = $f->get_FieldText("type_of_work", array("value" => $r["type_of_work"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["income_range_of_work"] = $f->get_FieldText("income_range_of_work", array("value" => $r["income_range_of_work"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["duration_of_work"] = $f->get_FieldText("duration_of_work", array("value" => $r["duration_of_work"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["presentation_reason"] = $f->get_FieldText("presentation_reason", array("value" => $r["presentation_reason"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["career_selection_reason"] = $f->get_FieldText("career_selection_reason", array("value" => $r["career_selection_reason"], "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["comes_from_private_sector"] = $f->get_FieldSelect("comes_from_private_sector", array("selected" => $r["comes_from_private_sector"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["special_educational_needs"] = $f->get_FieldSelect("special_educational_needs", array("selected" => $r["special_educational_needs"], "data" => $yn, "proportion" => "col-md-6 col-sm-12 col-12"));
$f->fields["cancel"] = $f->get_Cancel("cancel", array("href" => "/sie/students/list/" . lpk(), "text" => lang("App.Cancel"), "type" => "secondary", "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["submit"] = $f->get_Submit("submit", array("value" => lang("App.Edit"), "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-left"));
//[groups]----------------------------------------------------------------------------------------------------------------
$f->groups["g01"] = $f->get_Group(array("fields" => $f->fields["civil_status"] . $f->fields["ethnic_group"]));
$f->groups["g02"] = $f->get_Group(array("fields" => $f->fields["indigenous_people"] . $f->fields["black_community"]));
$f->groups["g03"] = $f->get_Group(array("fields" => $f->fields["disability"] . $f->fields["exceptional_ability"]));
$f->groups["g04"] = $f->get_Group(array("fields" => $f->fields["urban_area"] . $f->fields["received_financial_aid"]));
$f->groups["g05"] = $f->get_Group(array("fields" => $f->fields["received_academic_assistance"] . $f->fields["received_other_assistance"]));
$f->groups["g06"] = $f->get_Group(array("fields" => $f->fields["school"] . $f->fields["SABER_11_test_code"]));
$f->groups["g07"] = $f->get_Group(array("fields" => $f->fields["test_date"] . $f->fields["year_of_presentation"]));
$f->groups["g08"] = $f->get_Group(array("fields" => $f->fields["semester_of_presentation"] . $f->fields["average_score"]));
$f->groups["g09"] = $f->get_Group(array("fields" => $f->fields["enrollment_program"] . $f->fields["year_of_enrollment"]));
$f->groups["g10"] = $f->get_Group(array("fields" => $f->fields["semester_of_enrollment"] . $f->fields["means_of_transportation"]));
$f->groups["g11"] = $f->get_Group(array("fields" => $f->fields["stratum"] . $f->fields["health_insurance"]));
$f->groups["g12"] = $f->get_Group(array("fields" => $f->fields["sisben_group"] . $f->fields["sisben_subgroup"]));
$f->groups["g13"] = $f->get_Group(array("fields" => $f->fields["health_promoting_entity"]));
$f->groups["g14"] = $f->get_Group(array("fields" => $f->fields["insurance_company"] . $f->fields["blood_type"]));
$f->groups["g15"] = $f->get_Group(array("fields" => $f->fields["number_of_children"] . $f->fields["military_ID_number"]));
$f->groups["g16"] = $f->get_Group(array("fields" => $f->fields["previous_identification"] . $f->fields["border_area"]));
$f->groups["g17"] = $f->get_Group(array("fields" => $f->fields["educational_level"] . $f->fields["occupation"]));
$f->groups["g18"] = $f->get_Group(array("fields" => $f->fields["tuition_payment"] . $f->fields["guardianship"]));
$f->groups["g19"] = $f->get_Group(array("fields" => $f->fields["schedule_code"] . $f->fields["calendar"]));
$f->groups["g20"] = $f->get_Group(array("fields" => $f->fields["character"] . $f->fields["specialty"]));
$f->groups["g21"] = $f->get_Group(array("fields" => $f->fields["methodology"] . $f->fields["language"]));
$f->groups["g22"] = $f->get_Group(array("fields" => $f->fields["pension_value"] . $f->fields["validated_high_school"]));
$f->groups["g23"] = $f->get_Group(array("fields" => $f->fields["family_group_members"] . $f->fields["economic_contributors"]));
$f->groups["g24"] = $f->get_Group(array("fields" => $f->fields["total_income"] . $f->fields["own_housing"]));
$f->groups["g25"] = $f->get_Group(array("fields" => $f->fields["housing_debt"] . $f->fields["father_educational_level"]));
$f->groups["g26"] = $f->get_Group(array("fields" => $f->fields["father_occupation"] . $f->fields["mother_educational_level"]));
$f->groups["g27"] = $f->get_Group(array("fields" => $f->fields["mother_occupation"] . $f->fields["number_of_siblings"]));
$f->groups["g28"] = $f->get_Group(array("fields" => $f->fields["position_among_siblings"] . $f->fields["siblings_with_higher_studies"]));
$f->groups["g29"] = $f->get_Group(array("fields" => $f->fields["requires_financial_aid"] . $f->fields["percentage_of_financial_aid"]));
$f->groups["g30"] = $f->get_Group(array("fields" => $f->fields["requires_academic_assistance"] . $f->fields["satisfaction_with_academic_assistance"]));
$f->groups["g31"] = $f->get_Group(array("fields" => $f->fields["requires_other_assistance"] . $f->fields["satisfaction_with_other_assistance"]));
$f->groups["g32"] = $f->get_Group(array("fields" => $f->fields["conflict_victim"] . $f->fields["victim_municipality"]));
$f->groups["g33"] = $f->get_Group(array("fields" => $f->fields["vulnerable_group"] . $f->fields["total_paid"]));
$f->groups["g34"] = $f->get_Group(array("fields" => $f->fields["number_of_dependents"] . $f->fields["work_semester"]));
$f->groups["g35"] = $f->get_Group(array("fields" => $f->fields["type_of_work"] . $f->fields["income_range_of_work"]));
$f->groups["g36"] = $f->get_Group(array("fields" => $f->fields["duration_of_work"] . $f->fields["presentation_reason"]));
$f->groups["g37"] = $f->get_Group(array("fields" => $f->fields["career_selection_reason"] . $f->fields["comes_from_private_sector"]));
$f->groups["g38"] = $f->get_Group(array("fields" => $f->fields["special_educational_needs"]));
//[buttons]-------------------------------------------------------------------------------------------------------------
$f->groups["gy"] = $f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields" => $f->fields["submit"] . $f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
echo($f);
?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sisbenGroup = document.getElementById("<?php echo($f->get_FieldId("sisben_group")); ?>");
        const sisbenSubgroup = document.getElementById("<?php echo($f->get_FieldId("sisben_subgroup")); ?>");
        sisbenGroup.addEventListener("change", (e) => {
            const selectedSisbenGroup = e.target.value;
            let sisbenSubgroups = [];
            switch (selectedSisbenGroup) {
                case "A":
                    sisbenSubgroups = ["A1", "A2", "A3", "A4", "A5"];
                    break;
                case "B":
                    sisbenSubgroups = ["B1", "B2", "B3", "B4", "B5", "B6", "B7"];
                    break;
                case "C":
                    sisbenSubgroups = ["C1", "C2", "C3", "C4", "C5", "C6", "C7", "C8", "C9", "C10", "C11", "C12", "C13", "C14", "C15", "C16", "C17", "C18"];
                    break;
                case "D":
                    sisbenSubgroups = ["D1", "D2", "D3", "D4", "D5", "D6", "D7", "D8", "D9", "D10", "D11", "D12", "D13", "D14", "D15", "D16", "D17", "D18", "D19", "D20", "D21"];
                    break;
            }
            sisbenSubgroup.innerHTML = "";
            sisbenSubgroups.forEach((subgroup) => {
                const option = document.createElement("option");
                option.value = subgroup;
                option.textContent = subgroup;
                sisbenSubgroup.appendChild(option);
            });
        });
    });
</script>
