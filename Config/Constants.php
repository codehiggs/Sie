<?php


const LIST_LINKAGE_TYPES = array(
    array("value" => "", "label" => "Seleccione un tipo..."),
    array("value" => "01", "label" => "Nuevo"),
    array("value" => "02", "label" => "Transferencia Interna"),
    array("value" => "03", "label" => "Transferencia Externa"),
    array("value" => "04", "label" => "Transferencia entre seccionales"),
    array("value" => "05", "label" => "Doble Programa"),
    array("value" => "06", "label" => "Ciclo propedeútico"),
    array("value" => "07", "label" => "Co-Titulación o Titulación Conjunta o Doble Titulación"),
    array("value" => "08", "label" => "Estudiante de Articulación"),
    array("value" => "09", "label" => "Estudiante SPP"),
    array("value" => "10", "label" => "Opción de Grado"),
    array("value" => "11", "label" => "Semestre de intercambio académico"),
    array("value" => "12", "label" => "Requisito para Convalidar Título o Homologación"),
    array("value" => "99", "label" => "Formación por extensión"),
);

const LIST_ETHNIC_GROUPS = array(
    array("value" => "", "label" => "Seleccione una opción..."),
    array("value" => "0", "label" => "No Informa"),
    array("value" => "1", "label" => "Pueblo indígena"),
    array("value" => "2", "label" => "Comunidad negra"),
    array("value" => "3", "label" => "Pueblo RROM"),
    array("value" => "4", "label" => "No pertenece"),
);

const LIST_INDIGENOUS_PEOPLE = array(
    array("value" => "", "label" => "Seleccione uno..."),
    array("value" => "88", "label" => "No pertenece(No informa)"),
    array("value" => "1", "label" => "Achagua"),
    array("value" => "2", "label" => "Amorúa"),
    array("value" => "3", "label" => "Andoque o andoke"),
    array("value" => "4", "label" => "Arhuaco (ijka)"),
    array("value" => "5", "label" => "Awa (cuaiker)"),
    array("value" => "6", "label" => "Barea"),
    array("value" => "7", "label" => "Barí (motilón)"),
    array("value" => "8", "label" => "Betoye"),
    array("value" => "9", "label" => "Bara"),
    array("value" => "10", "label" => "Cañamomo"),
    array("value" => "11", "label" => "Carapana"),
    array("value" => "12", "label" => "Carijona o karijona"),
    array("value" => "13", "label" => "Chimila (ette e´neka)"),
    array("value" => "14", "label" => "Chiricoa"),
    array("value" => "15", "label" => "Cocama"),
    array("value" => "16", "label" => "Coconuco"),
    array("value" => "17", "label" => "Coyaima-Natagaima"),
    array("value" => "18", "label" => "Pijaos"),
    array("value" => "19", "label" => "Cubeo o kubeo"),
    array("value" => "20", "label" => "Cuiba o kuiba"),
    array("value" => "21", "label" => "Curripaco o kurripaco"),
    array("value" => "22", "label" => "Desano"),
    array("value" => "23", "label" => "Dujos"),
    array("value" => "24", "label" => "Embera catio o katío"),
    array("value" => "25", "label" => "Embera chami"),
    array("value" => "26", "label" => "Eperara siapidara"),
    array("value" => "27", "label" => "Guambiano"),
    array("value" => "28", "label" => "Guanaca"),
    array("value" => "29", "label" => "Guane"),
    array("value" => "30", "label" => "Guyabero"),
    array("value" => "31", "label" => "Hitnú"),
    array("value" => "32", "label" => "Hupdu"),
    array("value" => "33", "label" => "Inga"),
    array("value" => "34", "label" => "Juhup"),
    array("value" => "35", "label" => "Kamsa o kamëntsá"),
    array("value" => "36", "label" => "Kankuamo"),
    array("value" => "37", "label" => "Kakua"),
    array("value" => "38", "label" => "Kogui"),
    array("value" => "39", "label" => "Koreguaje o coreguaje"),
    array("value" => "40", "label" => "Letuama"),
    array("value" => "41", "label" => "Macaguaje o makaguaje"),
    array("value" => "42", "label" => "Nukak (makú)"),
    array("value" => "43", "label" => "Macuna o makuna (sara)"),
    array("value" => "44", "label" => "Masiguare"),
    array("value" => "45", "label" => "Matapí"),
    array("value" => "46", "label" => "Miraña"),
    array("value" => "47", "label" => "Mokaná"),
    array("value" => "48", "label" => "Muinane"),
    array("value" => "49", "label" => "Muisca"),
    array("value" => "50", "label" => "Nonuya"),
    array("value" => "51", "label" => "Ocaina"),
    array("value" => "52", "label" => "Nasa (paéz)"),
    array("value" => "53", "label" => "Pastos"),
    array("value" => "54", "label" => "Piapoco (dzase)"),
    array("value" => "55", "label" => "Piaroa"),
    array("value" => "56", "label" => "Piratapuyo"),
    array("value" => "57", "label" => "Pisamira"),
    array("value" => "58", "label" => "Puinave"),
    array("value" => "59", "label" => "Sánha"),
    array("value" => "60", "label" => "Sikuani"),
    array("value" => "61", "label" => "Siona"),
    array("value" => "62", "label" => "Siriano"),
    array("value" => "63", "label" => "Siripu o tsiripu (mariposo)"),
    array("value" => "64", "label" => "Taiwano (tajuano)"),
    array("value" => "65", "label" => "Tanimuka"),
    array("value" => "66", "label" => "Tariano"),
    array("value" => "67", "label" => "Tatuyo"),
    array("value" => "68", "label" => "Tikuna"),
    array("value" => "69", "label" => "Tororó"),
    array("value" => "70", "label" => "Tucano (desea) o tukano"),
    array("value" => "71", "label" => "Tule (kuna)"),
    array("value" => "72", "label" => "Tuyuka (dojkapuara)"),
    array("value" => "73", "label" => "U´wa(tunebo)"),
    array("value" => "74", "label" => "Wanano"),
    array("value" => "75", "label" => "Wayuu"),
    array("value" => "76", "label" => "Witoto - huitoto"),
    array("value" => "77", "label" => "Wiwa (arzario)"),
    array("value" => "78", "label" => "Waunan (wuanana)"),
    array("value" => "79", "label" => "Yagua"),
    array("value" => "80", "label" => "Yanacona"),
    array("value" => "81", "label" => "Yauna"),
    array("value" => "82", "label" => "Yukuna"),
    array("value" => "83", "label" => "Yuko (yukpa)"),
    array("value" => "84", "label" => "Yurí (carabayo)"),
    array("value" => "85", "label" => "Yuruti"),
    array("value" => "86", "label" => "Zenú / senú"),
    array("value" => "87", "label" => "Quillacingas"),
    array("value" => "89", "label" => "Otro"),
);


const LIST_YN = array(
    array("value" => "Y", "label" => "Si"),
    array("value" => "N", "label" => "No"),
);


const LIST_TYPES_OF_DISABILITIES = array(
    array("value" => "", "label" => "No aplica..."),
    array("value" => "01", "label" => "Discapacidad Sensorial - Sordera Profunda"),
    array("value" => "02", "label" => "Discapacidad Sensorial - Hipoacusia"),
    array("value" => "03", "label" => "Discapacidad Sensorial - Ceguera"),
    array("value" => "04", "label" => "Discapacidad Sensorial - Baja Visión"),
    array("value" => "05", "label" => "Discapacidad Sensorial - Sordoceguera"),
    array("value" => "06", "label" => "Discapacidad Intelectual"),
    array("value" => "07", "label" => "Discapacidad Psicosocial"),
    array("value" => "08", "label" => "Discapacidad Múltiple"),
    array("value" => "09", "label" => "Discapacidad Fisica o motora"),
    array("value" => "10", "label" => "Discapacidad Sistémica (válido hasta el 2019)"),
);

const LIST_BLACK_COMMUNITY = array(
    array("value" => "", "label" => "No aplica..."),
    array("value" => "1", "label" => "Afrocolombianos"),
    array("value" => "2", "label" => "Raizales"),
    array("value" => "3", "label" => "Palenqueros"),
    array("value" => "4", "label" => "Otras comunidades negras"),
);

const LIST_OF_EXCEPTIONAL_CAPABILITIES = array(
    array("value" => "", "label" => "No aplica..."),
    array("value" => "1", "label" => "Talento excepcional general"),
    array("value" => "2", "label" => "Talento excepcional específico"),
);

const LIST_PERIODS = array(
    array("value" => "", "label" => "Seleccione un periodo..."),
    //array("value" => "2024A", "label" => "2024A"),
    array("value" => "2024B", "label" => "2024B (Abiertas)"),
    //array("value" => "2025A", "label" => "2025A"),
    //array("value" => "2025B", "label" => "2025B"),
);

const LIST_JOURNEYS = array(
    array("value" => "", "label" => "Seleccione una jornada..."),
    //array("value" => "J01M", "label" => "Principal - Mañana"),
    //array("value" => "J01T", "label" => "Principal - Tarde"),
    array("value" => "J01N", "label" => "Principal - Noche"),
    array("value" => "J01S", "label" => "Principal - Sábado"),
);

const LIST_IDENTIFICATION_TYPES = array(
    array("value" => "", "label" => "Seleccione un tipo"),
    array("value" => "CC", "label" => "Cédula de Ciudadanía"),
    array("value" => "DE", "label" => "Documento de Identidad de Extranjería"),
    array("value" => "CE", "label" => "Cédula de Extranjería"),
    array("value" => "TI", "label" => "Tarjeta de Identidad"),
    array("value" => "PAS", "label" => "Pasaporte"),
    array("value" => "CA", "label" => "Certificado Cabildo"),
    array("value" => "PPT", "label" => "Permiso por Protección Temporal"),
    array("value" => "ETC", "label" => "Otro"),
);

const LIST_SEX = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "M", "label" => "Masculino"),
    array("value" => "F", "label" => "Femenino"),
);

const LIST_AREAS = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "RURAL", "label" => "Rural"),
    array("value" => "URBAN", "label" => "Urbana"),
);

const LIST_STRATUMS = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "1", "label" => "1"),
    array("value" => "2", "label" => "2"),
    array("value" => "3", "label" => "3"),
    array("value" => "4", "label" => "4"),
    array("value" => "5", "label" => "5"),
    array("value" => "6", "label" => "6"),
);

const LIST_TRANSPORTS = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "PUB", "label" => "Público Bus o Buseta"),
    array("value" => "PUT", "label" => "Público Taxi"),
    array("value" => "PUM", "label" => "Público Metro"),
    array("value" => "PUO", "label" => "Público Otro"),
    array("value" => "PAU", "label" => "Particular Automóvil"),
    array("value" => "PAM", "label" => "Particular Motocicleta"),
    array("value" => "PAB", "label" => "Particular Bicicleta"),
    array("value" => "PAO", "label" => "Particular Otro"),
    array("value" => "SIT", "label" => "SITP o Bus"),
    array("value" => "TRA", "label" => "Transmilenio"),
    array("value" => "TAX", "label" => "Taxi"),
    array("value" => "CAR", "label" => "Carro Particular"),
    array("value" => "PEA", "label" => "Peatón"),
    array("value" => "BIC", "label" => "Bicicleta"),
    array("value" => "MOT", "label" => "Moto"),
    array("value" => "MIO", "label" => "Masivo Integrado de Occidente"),
    array("value" => "API", "label" => "A Pie"),
    array("value" => "OTR", "label" => "Otro"),
    array("value" => "RUT", "label" => "Ruta Escolar"),
    array("value" => "FLU", "label" => "Fluvial")
);

const LIST_SISBEN_GROUPS = array(
    array("value" => "0", "label" => "No aplica"),
    array("value" => "A", "label" => "Grupo A: Población en pobreza extrema, desde A1 hasta A5."),
    array("value" => "B", "label" => "Grupo B: Población en pobreza moderada, desde B1 hasta B7."),
    array("value" => "C", "label" => "Grupo C: Población vulnerable, desde C1 hasta C18."),
    array("value" => "D", "label" => "Grupo D: Población no pobre, no vulnerable, desde D1 hasta D21."),
);


const LIST_EPS = array(
    ['value' => 'No Aplica', 'label' => 'No Aplica'],
    ['value' => '1', 'label' => 'COOSALUD EPS-S ESS024 - EPS042 ESSC24 - EPSS42 900226715 AMBOS REGÍMENES'],
    ['value' => '2', 'label' => 'NUEVA EPS EPS037 - EPSS41 EPSS37 - EPS041 900156264 AMBOS REGÍMENES'],
    ['value' => '3', 'label' => 'MUTUAL SER ESS207 - EPS048 ESSC07 - EPSS48 806008394 AMBOS REGÍMENES'],
    ['value' => '4', 'label' => 'ALIANSALUD EPS EPS001 EPSS01 830113831 CONTRIBUTIVO'],
    ['value' => '5', 'label' => 'SALUD TOTAL EPS S.A. EPS002 EPSS02 800130907 CONTRIBUTIVO'],
    ['value' => '6', 'label' => 'EPS SANITAS EPS005 EPSS05 800251440 CONTRIBUTIVO'],
    ['value' => '7', 'label' => 'EPS SURA EPS010 EPSS10 800088702 AMBOS REGÍMENES'],
    ['value' => '8', 'label' => 'FAMISANAR EPS017 EPSS17 830003564 CONTRIBUTIVO'],
    ['value' => '9', 'label' => 'SERVICIO OCCIDENTAL DE SALUD EPS SOS EPS018 EPSS18 805001157 CONTRIBUTIVO'],
    ['value' => '10', 'label' => 'SALUD MIA EPS046 EPSS46 900914254 CONTRIBUTIVO'],
    ['value' => '11', 'label' => 'COMFENALCO VALLE EPS012 EPSS12 890303093 CONTRIBUTIVO'],
    ['value' => '12', 'label' => 'COMPENSAR EPS EPS008 EPSS08 860066942 CONTRIBUTIVO'],
    ['value' => '13', 'label' => 'EPM - EMPRESAS PUBLICAS DE MEDELLIN EAS016 N/A 890904996 CONTRIBUTIVO'],
    ['value' => '14', 'label' => 'FONDO DE PASIVO SOCIAL DE FERROCARRILES NACIONALES DE COLOMBIA EAS027 N/A 800112806 CONTRIBUTIVO'],
    ['value' => '15', 'label' => 'CAJACOPI ATLANTICO CCF055 CCFC55 890102044 SUBSIDIADO'],
    ['value' => '16', 'label' => 'CAPRESOCA EPS025 EPSC25 891856000 SUBSIDIADO'],
    ['value' => '17', 'label' => 'COMFACHOCO CCF102 CCFC20 891600091 SUBSIDIADO'],
    ['value' => '18', 'label' => 'COMFAORIENTE CCF050 CCFC50 890500675 SUBSIDIADO'],
    ['value' => '19', 'label' => 'EPS FAMILIAR DE COLOMBIA CCF033 CCFC33 901543761 SUBSIDIADO'],
    ['value' => '20', 'label' => 'ASMET SALUD ESS062 ESSC62 900935126 SUBSIDIADO'],
    ['value' => '21', 'label' => 'EMSSANAR E.S.S. ESS118 ESSC18 901021565 SUBSIDIADO'],
    ['value' => '22', 'label' => 'CAPITAL SALUD EPS-S EPSS34 EPSC34 900298372 SUBSIDIADO'],
    ['value' => '23', 'label' => 'SAVIA SALUD EPS EPSS40 EPS040 900604350 SUBSIDIADO'],
    ['value' => '24', 'label' => 'DUSAKAWI EPSI EPSI01 EPSIC1 824001398 SUBSIDIADO'],
    ['value' => '25', 'label' => 'ASOCIACION INDIGENA DEL CAUCA EPSI EPSI03 EPSIC3 817001773 SUBSIDIADO'],
    ['value' => '26', 'label' => 'ANAS WAYUU EPSI EPSI04 EPSIC4 839000495 SUBSIDIADO'],
    ['value' => '27', 'label' => 'MALLAMAS EPSI EPSI05 EPSIC5 837000084 SUBSIDIADO'],
    ['value' => '28', 'label' => 'PIJAOS SALUD EPSI EPSI06 EPSIC6 809008362 SUBSIDIADO'],
    ['value' => '29', 'label' => 'SALUD BÓLIVAR EPS SAS EPS047 EPSS47 901438242 CONTRIBUTIVO'],
);

const LIST_HEALTH_INSURANCES = array(
    array("value" => "1", "label" => "SISBEN"),
    array("value" => "2", "label" => "EPS"),
    array("value" => "3", "label" => "IPS"),
    array("value" => "4", "label" => "OTRO"),
);


const LIST_BLOOD = array(
    array("value" => "", "label" => "Seleccione una opción..."),
    array("value" => "O-", "label" => "O-"),
    array("value" => "O+", "label" => "O&plus;"),
    array("value" => "A-", "label" => "A-"),
    array("value" => "A+", "label" => "A&plus;"),
    array("value" => "B-", "label" => "B-"),
    array("value" => "B+", "label" => "B&plus;"),
    array("value" => "AB-", "label" => "AB-"),
    array("value" => "AB+", "label" => "AB&plus;"),
);


const LIST_MARITALS = array(
    array("value" => "", "label" => "Seleccione una opción..."),
    array("value" => "SOL", "label" => "Soltero"),
    array("value" => "CAS", "label" => "Casado"),
    array("value" => "DIV", "label" => "Divorciado"),
    array("value" => "VIU", "label" => "Viudo"),
    array("value" => "UNI", "label" => "Unión libre"),
    array("value" => "SEP", "label" => "Separado"),
);

const LIST_ARS = array(
    array("value" => "", "label" => "Ninguna..."),
    array("value" => "", "label" => "Axa Colpatria Seguros S.A."),
    array("value" => "COLMENA", "label" => "Colmena Seguros S.A."),
    array("value" => "AURORA", "label" => "Compañía de Seguros de Vida Aurora S.A."),
    array("value" => "COLSANITA", "label" => "Colsanitas Seguros"),
    array("value" => "BOLIVAR", "label" => "Seguros Bolívar S.A."),
    array("value" => "EQUIDAD", "label" => "La Equidad Seguros Generales Organismo Cooperativo"),
    array("value" => "POSITIVA", "label" => "Positiva Compañía de Seguros S.A."),
    array("value" => "MAPFRE", "label" => "Mapfre Seguros Generales de Colombia S.A."),
    array("value" => "ALFA", "label" => "Seguros Alfa"),
    array("value" => "SURAMERICANA", "label" => "Seguros Generales Suramericana S.A"),
);


const LIST_INSURANCES = [
    array("value" => "", "label" => "Seleccione..."),
    array("value" => "855456566658", "label" => "Aseguradora Sura(EPS)"),
    ["value" => "51000", "label" => "Aseguradora de Vida COLSEGUROS"],
    ["value" => "500012", "label" => "Aseguradora Solidaria"],
    ["value" => "51006", "label" => "BBVA Seguros de Vida Colombia S.A."],
    ["value" => "51001", "label" => "Compañía Agricola de Seguros de Vida S.A."],
    ["value" => "51003", "label" => "Compañía de Seguros de Vida Aurora"],
    ["value" => "51007", "label" => "Compañía Suramericana Administradora de Riesgos Profesionales y Seguros de Vida"],
    ["value" => "85545656", "label" => "Generali"],
    ["value" => "52005", "label" => "Humana Vivir S.A."],
    ["value" => "51013", "label" => "Instituto de Seguros Sociales ISS Riesgos Profesionales"],
    ["value" => "51012", "label" => "La Equidad Seguros de Vida"],
    ["value" => "51008", "label" => "La Previsora Vida S.A."],
    ["value" => "51011", "label" => "Liberty Seguros de Vida"],
    ["value" => "2097473", "label" => "Positiva"],
    ["value" => "51004", "label" => "Riesgos Profesionales Colmena S.A."],
    ["value" => "51002", "label" => "Seguros Bolivar S.A."],
    ["value" => "51009", "label" => "Seguros de Vida Alfa S.A."],
    ["value" => "51005", "label" => "Seguros de Vida Colpatria S.A."],
    ["value" => "51010", "label" => "Seguros de Vida del Estado S.A."],
];


const LIST_EDUCATION_LEVELS = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "1", "label" => "Básica secundaria"),
    array("value" => "2", "label" => "Media (Grado 9 Finalizado)"),
    array("value" => "3", "label" => "Pregrado"),
    array("value" => "4", "label" => "Técnico"),
    array("value" => "5", "label" => "Tecnólogo"),
    array("value" => "6", "label" => "Postgrado"),
    array("value" => "7", "label" => "Sin estudios"),
    array("value" => "8", "label" => "Sin formación"),
);


const LIST_OCCUPATIONS = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "1", "label" => "Empleado"),
    array("value" => "2", "label" => "Estudiante básica"),
    array("value" => "3", "label" => "Estudiante superior"),
    array("value" => "4", "label" => "Desempleado"),
    array("value" => "5", "label" => "Independiente"),
    array("value" => "6", "label" => "Pensionado")
);

const LIST_STATUSES = array(
    array("label" => "En proceso", "value" => "PROCESS"),
    array("label" => "Admitido", "value" => "ADMITTED"),
    array("label" => "No admitido", "value" => "UNADMITTED"),
    array("label" => "Admitido proceso homologación", "value" => "HOMOLOGATION"),
    array("label" => "Desiste del proceso", "value" => "DESISTEMENT"),
    array("label" => "Admitido por reingreso", "value" => "RE-ENTRY"),
);


const LIST_RESPONSIBLE_RELATIONSHIP = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "1", "label" => "Responsable legal"),
    array("value" => "1", "label" => "Padre"),
    array("value" => "2", "label" => "Madre"),
    array("value" => "3", "label" => "Hermano(a)"),
    array("value" => "4", "label" => "Abuelo(a)"),
    array("value" => "5", "label" => "Tío(a)"),
    array("value" => "6", "label" => "Otro"),
);


const LIST_0_10 = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "0", "label" => "0"),
    array("value" => "1", "label" => "1"),
    array("value" => "2", "label" => "2"),
    array("value" => "3", "label" => "3"),
    array("value" => "4", "label" => "4"),
    array("value" => "5", "label" => "5"),
    array("value" => "6", "label" => "6"),
    array("value" => "7", "label" => "7"),
    array("value" => "8", "label" => "8"),
    array("value" => "9", "label" => "9"),
    array("value" => "10", "label" => "10"),
);


const LIST_IDENTIFIED_POPULATION_GROUP = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "1", "label" => "Victima del conflicto armado"),
    array("value" => "2", "label" => "Negro/a, mulato/a, Afrodescendiente, afrocolombiano(a)"),
    array("value" => "3", "label" => "Desplazado"),
    array("value" => "4", "label" => "Indígena"),
    array("value" => "5", "label" => "Gitano /Room"),
    array("value" => "6", "label" => "Raizal"),
    array("value" => "7", "label" => "Palenquero"),
    array("value" => "8", "label" => "LGTBIQ+"),
    array("value" => "9", "label" => "Ninguna de las anteriores"),
);

const LIST_HIGHLIGHTED_POPULATION = array(
    array("value" => "", "label" => "Seleccione una opción"),
    array("value" => "1", "label" => "Deportistas"),
    array("value" => "2", "label" => "Artistas"),
    array("value" => "3", "label" => "Mejores Pruebas saber 11"),
    array("value" => "4", "label" => "Ninguna de las anteriores"),
);

?>