<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $countriesFr = array(
            'AF' => 'Afghanistan',
            'ZA' => 'Afrique du Sud',
            'AL' => 'Albanie',
            'DZ' => 'Algérie',
            'DE' => 'Allemagne',
            'AD' => 'Andorre',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctique',
            'AG' => 'Antigua-et-Barbuda',
            'SA' => 'Arabie saoudite',
            'AR' => 'Argentine',
            'AM' => 'Arménie',
            'AW' => 'Aruba',
            'AU' => 'Australie',
            'AT' => 'Autriche',
            'AZ' => 'Azerbaïdjan',
            'BS' => 'Bahamas',
            'BH' => 'Bahreïn',
            'BD' => 'Bangladesh',
            'BB' => 'Barbade',
            'BE' => 'Belgique',
            'BZ' => 'Belize',
            'BJ' => 'Bénin',
            'BM' => 'Bermudes',
            'BT' => 'Bhoutan',
            'BY' => 'Biélorussie',
            'BO' => 'Bolivie',
            'BA' => 'Bosnie-Herzégovine',
            'BW' => 'Botswana',
            'BR' => 'Brésil',
            'BN' => 'Brunéi Darussalam',
            'BG' => 'Bulgarie',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodge',
            'CM' => 'Cameroun',
            'CA' => 'Canada',
            'CV' => 'Cap-Vert',
            'CL' => 'Chili',
            'CN' => 'Chine',
            'CY' => 'Chypre',
            'CO' => 'Colombie',
            'KM' => 'Comores',
            'CG' => 'Congo-Brazzaville',
            'CD' => 'Congo-Kinshasa',
            'KP' => 'Corée du Nord',
            'KR' => 'Corée du Sud',
            'CR' => 'Costa Rica',
            'CI' => 'Côte d’Ivoire',
            'HR' => 'Croatie',
            'CU' => 'Cuba',
            'CW' => 'Curaçao',
            'DK' => 'Danemark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominique',
            'EG' => 'Égypte',
            'AE' => 'Émirats arabes unis',
            'EC' => 'Équateur',
            'ER' => 'Érythrée',
            'ES' => 'Espagne',
            'EE' => 'Estonie',
            'SZ' => 'Eswatini',
            'VA' => 'État de la Cité du Vatican',
            'FM' => 'États fédérés de Micronésie',
            'US' => 'États-Unis',
            'ET' => 'Éthiopie',
            'FJ' => 'Fidji',
            'FI' => 'Finlande',
            'FR' => 'France',
            'GA' => 'Gabon',
            'GM' => 'Gambie',
            'GE' => 'Géorgie',
            'GS' => 'Géorgie du Sud et îles Sandwich du Sud',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Grèce',
            'GD' => 'Grenade',
            'GL' => 'Groenland',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernesey',
            'GN' => 'Guinée',
            'GQ' => 'Guinée équatoriale',
            'GW' => 'Guinée-Bissau',
            'GY' => 'Guyana',
            'GF' => 'Guyane française',
            'HT' => 'Haïti',
            'HN' => 'Honduras',
            'HU' => 'Hongrie',
            'BV' => 'Île Bouvet',
            'CX' => 'Île Christmas',
            'IM' => 'Île de Man',
            'NF' => 'Île Norfolk',
            'AX' => 'Îles Åland',
            'KY' => 'Îles Caïmans',
            'CC' => 'Îles Cocos',
            'CK' => 'Îles Cook',
            'FO' => 'Îles Féroé',
            'HM' => 'Îles Heard et McDonald',
            'FK' => 'Îles Malouines',
            'MP' => 'Îles Mariannes du Nord',
            'MH' => 'Îles Marshall',
            'UM' => 'Îles mineures éloignées des États-Unis',
            'PN' => 'Îles Pitcairn',
            'SB' => 'Îles Salomon',
            'TC' => 'Îles Turques-et-Caïques',
            'VG' => 'Îles Vierges britanniques',
            'VI' => 'Îles Vierges des États-Unis',
            'IN' => 'Inde',
            'ID' => 'Indonésie',
            'IQ' => 'Irak',
            'IR' => 'Iran',
            'IE' => 'Irlande',
            'IS' => 'Islande',
            'IL' => 'Israël',
            'IT' => 'Italie',
            'JM' => 'Jamaïque',
            'JP' => 'Japon',
            'JE' => 'Jersey',
            'JO' => 'Jordanie',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KG' => 'Kirghizistan',
            'KI' => 'Kiribati',
            'KW' => 'Koweït',
            'RE' => 'La Réunion',
            'LA' => 'Laos',
            'LS' => 'Lesotho',
            'LV' => 'Lettonie',
            'LB' => 'Liban',
            'LR' => 'Libéria',
            'LY' => 'Libye',
            'LI' => 'Liechtenstein',
            'LT' => 'Lituanie',
            'LU' => 'Luxembourg',
            'MK' => 'Macédoine du Nord',
            'MG' => 'Madagascar',
            'MY' => 'Malaisie',
            'MW' => 'Malawi',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malte',
            'MA' => 'Maroc',
            'MQ' => 'Martinique',
            'MU' => 'Maurice',
            'MR' => 'Mauritanie',
            'YT' => 'Mayotte',
            'MX' => 'Mexique',
            'MD' => 'Moldavie',
            'MC' => 'Monaco',
            'MN' => 'Mongolie',
            'ME' => 'Monténégro',
            'MS' => 'Montserrat',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar (Birmanie)',
            'NA' => 'Namibie',
            'NR' => 'Nauru',
            'NP' => 'Népal',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigéria',
            'NU' => 'Niue',
            'NO' => 'Norvège',
            'NC' => 'Nouvelle-Calédonie',
            'NZ' => 'Nouvelle-Zélande',
            'OM' => 'Oman',
            'UG' => 'Ouganda',
            'UZ' => 'Ouzbékistan',
            'PK' => 'Pakistan',
            'PW' => 'Palaos',
            'PA' => 'Panama',
            'PG' => 'Papouasie-Nouvelle-Guinée',
            'PY' => 'Paraguay',
            'NL' => 'Pays-Bas',
            'BQ' => 'Pays-Bas caribéens',
            'PE' => 'Pérou',
            'PH' => 'Philippines',
            'PL' => 'Pologne',
            'PF' => 'Polynésie française',
            'PR' => 'Porto Rico',
            'PT' => 'Portugal',
            'QA' => 'Qatar',
            'HK' => 'R.A.S. chinoise de Hong Kong',
            'MO' => 'R.A.S. chinoise de Macao',
            'CF' => 'République centrafricaine',
            'DO' => 'République dominicaine',
            'RO' => 'Roumanie',
            'GB' => 'Royaume-Uni',
            'RU' => 'Russie',
            'RW' => 'Rwanda',
            'EH' => 'Sahara occidental',
            'BL' => 'Saint-Barthélemy',
            'KN' => 'Saint-Christophe-et-Niévès',
            'SM' => 'Saint-Marin',
            'MF' => 'Saint-Martin',
            'SX' => 'Saint-Martin (partie néerlandaise)',
            'PM' => 'Saint-Pierre-et-Miquelon',
            'VC' => 'Saint-Vincent-et-les-Grenadines',
            'SH' => 'Sainte-Hélène',
            'LC' => 'Sainte-Lucie',
            'SV' => 'Salvador',
            'WS' => 'Samoa',
            'AS' => 'Samoa américaines',
            'ST' => 'Sao Tomé-et-Principe',
            'SN' => 'Sénégal',
            'RS' => 'Serbie',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapour',
            'SK' => 'Slovaquie',
            'SI' => 'Slovénie',
            'SO' => 'Somalie',
            'SD' => 'Soudan',
            'SS' => 'Soudan du Sud',
            'LK' => 'Sri Lanka',
            'SE' => 'Suède',
            'CH' => 'Suisse',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard et Jan Mayen',
            'SY' => 'Syrie',
            'TJ' => 'Tadjikistan',
            'TW' => 'Taïwan',
            'TZ' => 'Tanzanie',
            'TD' => 'Tchad',
            'CZ' => 'Tchéquie',
            'TF' => 'Terres australes françaises',
            'IO' => 'Territoire britannique de l’océan Indien',
            'PS' => 'Territoires palestiniens',
            'TH' => 'Thaïlande',
            'TL' => 'Timor oriental',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinité-et-Tobago',
            'TN' => 'Tunisie',
            'TM' => 'Turkménistan',
            'TR' => 'Turquie',
            'TV' => 'Tuvalu',
            'UA' => 'Ukraine',
            'UY' => 'Uruguay',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Vietnam',
            'WF' => 'Wallis-et-Futuna',
            'YE' => 'Yémen',
            'ZM' => 'Zambie',
            'ZW' => 'Zimbabwe',
        );
        $countriesPt = array(
            'AF' => 'Afeganistão',
            'ZA' => 'África do Sul',
            'AL' => 'Albânia',
            'DE' => 'Alemanha',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguila',
            'AQ' => 'Antártida',
            'AG' => 'Antígua e Barbuda',
            'SA' => 'Arábia Saudita',
            'DZ' => 'Argélia',
            'AR' => 'Argentina',
            'AM' => 'Armênia',
            'AW' => 'Aruba',
            'AU' => 'Austrália',
            'AT' => 'Áustria',
            'AZ' => 'Azerbaijão',
            'BS' => 'Bahamas',
            'BH' => 'Bahrein',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BE' => 'Bélgica',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermudas',
            'BY' => 'Bielorrússia',
            'BO' => 'Bolívia',
            'BA' => 'Bósnia e Herzegovina',
            'BW' => 'Botsuana',
            'BR' => 'Brasil',
            'BN' => 'Brunei',
            'BG' => 'Bulgária',
            'BF' => 'Burquina Faso',
            'BI' => 'Burundi',
            'BT' => 'Butão',
            'CV' => 'Cabo Verde',
            'CM' => 'Camarões',
            'KH' => 'Camboja',
            'CA' => 'Canadá',
            'QA' => 'Catar',
            'KZ' => 'Cazaquistão',
            'TD' => 'Chade',
            'CL' => 'Chile',
            'CN' => 'China',
            'CY' => 'Chipre',
            'VA' => 'Cidade do Vaticano',
            'CO' => 'Colômbia',
            'KM' => 'Comores',
            'CD' => 'Congo - Kinshasa',
            'KP' => 'Coreia do Norte',
            'KR' => 'Coreia do Sul',
            'CI' => 'Costa do Marfim',
            'CR' => 'Costa Rica',
            'HR' => 'Croácia',
            'CU' => 'Cuba',
            'CW' => 'Curaçao',
            'DK' => 'Dinamarca',
            'DJ' => 'Djibuti',
            'DM' => 'Dominica',
            'EG' => 'Egito',
            'SV' => 'El Salvador',
            'AE' => 'Emirados Árabes Unidos',
            'EC' => 'Equador',
            'ER' => 'Eritreia',
            'SK' => 'Eslováquia',
            'SI' => 'Eslovênia',
            'ES' => 'Espanha',
            'SZ' => 'Essuatíni',
            'US' => 'Estados Unidos',
            'EE' => 'Estônia',
            'ET' => 'Etiópia',
            'FJ' => 'Fiji',
            'PH' => 'Filipinas',
            'FI' => 'Finlândia',
            'FR' => 'França',
            'GA' => 'Gabão',
            'GM' => 'Gâmbia',
            'GH' => 'Gana',
            'GE' => 'Geórgia',
            'GI' => 'Gibraltar',
            'GD' => 'Granada',
            'GR' => 'Grécia',
            'GL' => 'Groenlândia',
            'GP' => 'Guadalupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernsey',
            'GY' => 'Guiana',
            'GF' => 'Guiana Francesa',
            'GN' => 'Guiné',
            'GQ' => 'Guiné Equatorial',
            'GW' => 'Guiné-Bissau',
            'HT' => 'Haiti',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong, RAE da China',
            'HU' => 'Hungria',
            'YE' => 'Iêmen',
            'BV' => 'Ilha Bouvet',
            'CX' => 'Ilha Christmas',
            'IM' => 'Ilha de Man',
            'NF' => 'Ilha Norfolk',
            'AX' => 'Ilhas Aland',
            'KY' => 'Ilhas Cayman',
            'CC' => 'Ilhas Cocos (Keeling)',
            'CK' => 'Ilhas Cook',
            'FO' => 'Ilhas Faroe',
            'GS' => 'Ilhas Geórgia do Sul e Sandwich do Sul',
            'HM' => 'Ilhas Heard e McDonald',
            'FK' => 'Ilhas Malvinas',
            'MP' => 'Ilhas Marianas do Norte',
            'MH' => 'Ilhas Marshall',
            'UM' => 'Ilhas Menores Distantes dos EUA',
            'PN' => 'Ilhas Pitcairn',
            'SB' => 'Ilhas Salomão',
            'TC' => 'Ilhas Turcas e Caicos',
            'VI' => 'Ilhas Virgens Americanas',
            'VG' => 'Ilhas Virgens Britânicas',
            'IN' => 'Índia',
            'ID' => 'Indonésia',
            'IR' => 'Irã',
            'IQ' => 'Iraque',
            'IE' => 'Irlanda',
            'IS' => 'Islândia',
            'IL' => 'Israel',
            'IT' => 'Itália',
            'JM' => 'Jamaica',
            'JP' => 'Japão',
            'JE' => 'Jersey',
            'JO' => 'Jordânia',
            'KW' => 'Kuwait',
            'LA' => 'Laos',
            'LS' => 'Lesoto',
            'LV' => 'Letônia',
            'LB' => 'Líbano',
            'LR' => 'Libéria',
            'LY' => 'Líbia',
            'LI' => 'Liechtenstein',
            'LT' => 'Lituânia',
            'LU' => 'Luxemburgo',
            'MO' => 'Macau, RAE da China',
            'MK' => 'Macedônia do Norte',
            'MG' => 'Madagascar',
            'MY' => 'Malásia',
            'MW' => 'Malaui',
            'MV' => 'Maldivas',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MA' => 'Marrocos',
            'MQ' => 'Martinica',
            'MU' => 'Maurício',
            'MR' => 'Mauritânia',
            'YT' => 'Mayotte',
            'MX' => 'México',
            'MM' => 'Mianmar (Birmânia)',
            'FM' => 'Micronésia',
            'MZ' => 'Moçambique',
            'MD' => 'Moldova',
            'MC' => 'Mônaco',
            'MN' => 'Mongólia',
            'ME' => 'Montenegro',
            'MS' => 'Montserrat',
            'NA' => 'Namíbia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NI' => 'Nicarágua',
            'NE' => 'Níger',
            'NG' => 'Nigéria',
            'NU' => 'Niue',
            'NO' => 'Noruega',
            'NC' => 'Nova Caledônia',
            'NZ' => 'Nova Zelândia',
            'OM' => 'Omã',
            'NL' => 'Países Baixos',
            'BQ' => 'Países Baixos Caribenhos',
            'PW' => 'Palau',
            'PA' => 'Panamá',
            'PG' => 'Papua-Nova Guiné',
            'PK' => 'Paquistão',
            'PY' => 'Paraguai',
            'PE' => 'Peru',
            'PF' => 'Polinésia Francesa',
            'PL' => 'Polônia',
            'PR' => 'Porto Rico',
            'PT' => 'Portugal',
            'KE' => 'Quênia',
            'KG' => 'Quirguistão',
            'KI' => 'Quiribati',
            'GB' => 'Reino Unido',
            'CF' => 'República Centro-Africana',
            'CG' => 'República do Congo',
            'DO' => 'República Dominicana',
            'RE' => 'Reunião',
            'RO' => 'Romênia',
            'RW' => 'Ruanda',
            'RU' => 'Rússia',
            'EH' => 'Saara Ocidental',
            'WS' => 'Samoa',
            'AS' => 'Samoa Americana',
            'SM' => 'San Marino',
            'SH' => 'Santa Helena',
            'LC' => 'Santa Lúcia',
            'BL' => 'São Bartolomeu',
            'KN' => 'São Cristóvão e Névis',
            'MF' => 'São Martinho',
            'PM' => 'São Pedro e Miquelão',
            'ST' => 'São Tomé e Príncipe',
            'VC' => 'São Vicente e Granadinas',
            'SC' => 'Seicheles',
            'SN' => 'Senegal',
            'SL' => 'Serra Leoa',
            'RS' => 'Sérvia',
            'SG' => 'Singapura',
            'SX' => 'Sint Maarten',
            'SY' => 'Síria',
            'SO' => 'Somália',
            'LK' => 'Sri Lanka',
            'SD' => 'Sudão',
            'SS' => 'Sudão do Sul',
            'SE' => 'Suécia',
            'CH' => 'Suíça',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard e Jan Mayen',
            'TJ' => 'Tadjiquistão',
            'TH' => 'Tailândia',
            'TW' => 'Taiwan',
            'TZ' => 'Tanzânia',
            'CZ' => 'Tchéquia',
            'IO' => 'Território Britânico do Oceano Índico',
            'TF' => 'Territórios Franceses do Sul',
            'PS' => 'Territórios palestinos',
            'TL' => 'Timor-Leste',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad e Tobago',
            'TN' => 'Tunísia',
            'TM' => 'Turcomenistão',
            'TR' => 'Turquia',
            'TV' => 'Tuvalu',
            'UA' => 'Ucrânia',
            'UG' => 'Uganda',
            'UY' => 'Uruguai',
            'UZ' => 'Uzbequistão',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Vietnã',
            'WF' => 'Wallis e Futuna',
            'ZM' => 'Zâmbia',
            'ZW' => 'Zimbábue',
        );
        $countriesEn = array(
            'AF' => 'Afghanistan',
            'AX' => 'Åland Islands',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua & Barbuda',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia & Herzegovina',
            'BW' => 'Botswana',
            'BV' => 'Bouvet Island',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'VG' => 'British Virgin Islands',
            'BN' => 'Brunei',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'BQ' => 'Caribbean Netherlands',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CG' => 'Congo - Brazzaville',
            'CD' => 'Congo - Kinshasa',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'CI' => 'Côte d’Ivoire',
            'HR' => 'Croatia',
            'CU' => 'Cuba',
            'CW' => 'Curaçao',
            'CY' => 'Cyprus',
            'CZ' => 'Czechia',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'SZ' => 'Eswatini',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernsey',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HM' => 'Heard & McDonald Islands',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong SAR China',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran',
            'IQ' => 'Iraq',
            'IE' => 'Ireland',
            'IM' => 'Isle of Man',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JE' => 'Jersey',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Laos',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macao SAR China',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia',
            'MD' => 'Moldova',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar (Burma)',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'NF' => 'Norfolk Island',
            'KP' => 'North Korea',
            'MK' => 'North Macedonia',
            'MP' => 'Northern Mariana Islands',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PW' => 'Palau',
            'PS' => 'Palestinian Territories',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn Islands',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar',
            'RE' => 'Réunion',
            'RO' => 'Romania',
            'RU' => 'Russia',
            'RW' => 'Rwanda',
            'WS' => 'Samoa',
            'SM' => 'San Marino',
            'ST' => 'São Tomé & Príncipe',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SX' => 'Sint Maarten',
            'SK' => 'Slovakia',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'GS' => 'South Georgia & South Sandwich Islands',
            'KR' => 'South Korea',
            'SS' => 'South Sudan',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'BL' => 'St. Barthélemy',
            'SH' => 'St. Helena',
            'KN' => 'St. Kitts & Nevis',
            'LC' => 'St. Lucia',
            'MF' => 'St. Martin',
            'PM' => 'St. Pierre & Miquelon',
            'VC' => 'St. Vincent & Grenadines',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard & Jan Mayen',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syria',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania',
            'TH' => 'Thailand',
            'TL' => 'Timor-Leste',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad & Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks & Caicos Islands',
            'TV' => 'Tuvalu',
            'UM' => 'U.S. Outlying Islands',
            'VI' => 'U.S. Virgin Islands',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'US' => 'United States',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VA' => 'Vatican City',
            'VE' => 'Venezuela',
            'VN' => 'Vietnam',
            'WF' => 'Wallis & Futuna',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe',
        );
        if (DB::table('countries')->count() < 1) {
            foreach ($countriesFr as $key => $name) {
                DB::table('countries')->insert(
                    array('code' => $key, 'name' => '{"fr": "' . $name . '"}'),
                );
            }
            foreach ($countriesPt as $key => $name) {
                $in = Country::where('code', $key)->get()->first();
                $in->setTranslation('name', 'pt', $name)->save();
            }
            foreach ($countriesEn as $key => $name) {
                $in = Country::where('code', $key)->get()->first();
                $in->setTranslation('name', 'en', $name)->save();
            }
        }
    }
}
