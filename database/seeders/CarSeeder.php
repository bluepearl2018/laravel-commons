<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Seeder;
use Eutranet\Commons\Models\AssetCategory;
use Eutranet\Commons\Models\Car;

class CarSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{

		$cars =
			[
				[
					'id' => '1',
					'car_brand_id' => '1',
					'name' => '500'
				],
				[
					'id' => '2',
					'car_brand_id' => '1',
					'name' => '500C'
				],
				[
					'id' => '3',
					'car_brand_id' => '1',
					'name' => '595'
				],
				[
					'id' => '4',
					'car_brand_id' => '1',
					'name' => '595C'
				],
				[
					'id' => '5',
					'car_brand_id' => '1',
					'name' => '695'
				],
				[
					'id' => '6',
					'car_brand_id' => '1',
					'name' => '695C'
				],
				[
					'id' => '7',
					'car_brand_id' => '1',
					'name' => 'Grande Punto'
				],
				[
					'id' => '8',
					'car_brand_id' => '1',
					'name' => 'Punto Evo'
				],
				[
					'id' => '9',
					'car_brand_id' => '3',
					'name' => 'MDX'
				],
				[
					'id' => '10',
					'car_brand_id' => '3',
					'name' => 'NSX'
				],
				[
					'id' => '11',
					'car_brand_id' => '3',
					'name' => 'RL'
				],
				[
					'id' => '12',
					'car_brand_id' => '3',
					'name' => 'RSX'
				],
				[
					'id' => '13',
					'car_brand_id' => '3',
					'name' => 'TL'
				],
				[
					'id' => '14',
					'car_brand_id' => '3',
					'name' => 'TSX'
				],
				[
					'id' => '15',
					'car_brand_id' => '4',
					'name' => 'City'
				],
				[
					'id' => '16',
					'car_brand_id' => '4',
					'name' => 'Crossline'
				],
				[
					'id' => '17',
					'car_brand_id' => '4',
					'name' => 'Roadline'
				],
				[
					'id' => '18',
					'car_brand_id' => '4',
					'name' => 'Scouty R'
				],
				[
					'id' => '19',
					'car_brand_id' => '5',
					'name' => '4C'
				],
				[
					'id' => '20',
					'car_brand_id' => '5',
					'name' => '8C'
				],
				[
					'id' => '21',
					'car_brand_id' => '5',
					'name' => 'Alfa 145'
				],
				[
					'id' => '22',
					'car_brand_id' => '5',
					'name' => 'Alfa 146'
				],
				[
					'id' => '23',
					'car_brand_id' => '5',
					'name' => 'Alfa 147'
				],
				[
					'id' => '24',
					'car_brand_id' => '5',
					'name' => 'Alfa 155'
				],
				[
					'id' => '25',
					'car_brand_id' => '5',
					'name' => 'Alfa 156'
				],
				[
					'id' => '26',
					'car_brand_id' => '5',
					'name' => 'Alfa 159'
				],
				[
					'id' => '27',
					'car_brand_id' => '5',
					'name' => 'Alfa 164'
				],
				[
					'id' => '28',
					'car_brand_id' => '5',
					'name' => 'Alfa 166'
				],
				[
					'id' => '29',
					'car_brand_id' => '5',
					'name' => 'Alfa 33'
				],
				[
					'id' => '30',
					'car_brand_id' => '5',
					'name' => 'Alfa 75'
				],
				[
					'id' => '31',
					'car_brand_id' => '5',
					'name' => 'Alfa 90'
				],
				[
					'id' => '32',
					'car_brand_id' => '5',
					'name' => 'Alfasud'
				],
				[
					'id' => '33',
					'car_brand_id' => '5',
					'name' => 'Alfetta'
				],
				[
					'id' => '34',
					'car_brand_id' => '5',
					'name' => 'Brera'
				],
				[
					'id' => '35',
					'car_brand_id' => '5',
					'name' => 'Crosswagon'
				],
				[
					'id' => '36',
					'car_brand_id' => '5',
					'name' => 'Giulia'
				],
				[
					'id' => '37',
					'car_brand_id' => '5',
					'name' => 'Giulietta'
				],
				[
					'id' => '38',
					'car_brand_id' => '5',
					'name' => 'GT'
				],
				[
					'id' => '39',
					'car_brand_id' => '5',
					'name' => 'GTV'
				],
				[
					'id' => '40',
					'car_brand_id' => '5',
					'name' => 'Junior'
				],
				[
					'id' => '41',
					'car_brand_id' => '5',
					'name' => 'MiTo'
				],
				[
					'id' => '42',
					'car_brand_id' => '5',
					'name' => 'Spider'
				],
				[
					'id' => '43',
					'car_brand_id' => '5',
					'name' => 'Sprint'
				],
				[
					'id' => '44',
					'car_brand_id' => '6',
					'name' => 'B10'
				],
				[
					'id' => '45',
					'car_brand_id' => '6',
					'name' => 'B12'
				],
				[
					'id' => '46',
					'car_brand_id' => '6',
					'name' => 'B3'
				],
				[
					'id' => '47',
					'car_brand_id' => '6',
					'name' => 'B4'
				],
				[
					'id' => '48',
					'car_brand_id' => '6',
					'name' => 'B5'
				],
				[
					'id' => '49',
					'car_brand_id' => '6',
					'name' => 'B6'
				],
				[
					'id' => '50',
					'car_brand_id' => '6',
					'name' => 'B7'
				],
				[
					'id' => '51',
					'car_brand_id' => '6',
					'name' => 'B8'
				],
				[
					'id' => '52',
					'car_brand_id' => '6',
					'name' => 'D 10'
				],
				[
					'id' => '53',
					'car_brand_id' => '6',
					'name' => 'D3'
				],
				[
					'id' => '54',
					'car_brand_id' => '6',
					'name' => 'D5'
				],
				[
					'id' => '55',
					'car_brand_id' => '6',
					'name' => 'Roadster S'
				],
				[
					'id' => '56',
					'car_brand_id' => '6',
					'name' => 'XD3'
				],
				[
					'id' => '57',
					'car_brand_id' => '7',
					'name' => 'GT'
				],
				[
					'id' => '58',
					'car_brand_id' => '8',
					'name' => 'Rocsta'
				],
				[
					'id' => '59',
					'car_brand_id' => '9',
					'name' => 'AR1'
				],
				[
					'id' => '60',
					'car_brand_id' => '9',
					'name' => 'Cygnet'
				],
				[
					'id' => '61',
					'car_brand_id' => '9',
					'name' => 'DB'
				],
				[
					'id' => '62',
					'car_brand_id' => '9',
					'name' => 'DB7'
				],
				[
					'id' => '63',
					'car_brand_id' => '9',
					'name' => 'DB9'
				],
				[
					'id' => '64',
					'car_brand_id' => '9',
					'name' => 'DBS'
				],
				[
					'id' => '65',
					'car_brand_id' => '9',
					'name' => 'Lagonda'
				],
				[
					'id' => '66',
					'car_brand_id' => '9',
					'name' => 'Rapide'
				],
				[
					'id' => '67',
					'car_brand_id' => '9',
					'name' => 'V12 Vantage'
				],
				[
					'id' => '68',
					'car_brand_id' => '9',
					'name' => 'V8 Vantage'
				],
				[
					'id' => '69',
					'car_brand_id' => '9',
					'name' => 'Vanquish'
				],
				[
					'id' => '70',
					'car_brand_id' => '9',
					'name' => 'Virage'
				],
				[
					'id' => '71',
					'car_brand_id' => '10',
					'name' => '100'
				],
				[
					'id' => '72',
					'car_brand_id' => '10',
					'name' => '200'
				],
				[
					'id' => '73',
					'car_brand_id' => '10',
					'name' => '80'
				],
				[
					'id' => '74',
					'car_brand_id' => '10',
					'name' => '90'
				],
				[
					'id' => '75',
					'car_brand_id' => '10',
					'name' => 'A1'
				],
				[
					'id' => '76',
					'car_brand_id' => '10',
					'name' => 'A2'
				],
				[
					'id' => '77',
					'car_brand_id' => '10',
					'name' => 'A3'
				],
				[
					'id' => '78',
					'car_brand_id' => '10',
					'name' => 'A4'
				],
				[
					'id' => '79',
					'car_brand_id' => '10',
					'name' => 'A4 Allroad'
				],
				[
					'id' => '80',
					'car_brand_id' => '10',
					'name' => 'A5'
				],
				[
					'id' => '81',
					'car_brand_id' => '10',
					'name' => 'A6'
				],
				[
					'id' => '82',
					'car_brand_id' => '10',
					'name' => 'A6 Allroad'
				],
				[
					'id' => '83',
					'car_brand_id' => '10',
					'name' => 'A7'
				],
				[
					'id' => '84',
					'car_brand_id' => '10',
					'name' => 'A8'
				],
				[
					'id' => '85',
					'car_brand_id' => '10',
					'name' => 'Cabriolet'
				],
				[
					'id' => '86',
					'car_brand_id' => '10',
					'name' => 'CoupÃ©'
				],
				[
					'id' => '87',
					'car_brand_id' => '10',
					'name' => 'Q3'
				],
				[
					'id' => '88',
					'car_brand_id' => '10',
					'name' => 'Q5'
				],
				[
					'id' => '89',
					'car_brand_id' => '10',
					'name' => 'Q7'
				],
				[
					'id' => '90',
					'car_brand_id' => '10',
					'name' => 'QUATTRO'
				],
				[
					'id' => '91',
					'car_brand_id' => '10',
					'name' => 'R8'
				],
				[
					'id' => '92',
					'car_brand_id' => '10',
					'name' => 'RS2'
				],
				[
					'id' => '93',
					'car_brand_id' => '10',
					'name' => 'RS3'
				],
				[
					'id' => '94',
					'car_brand_id' => '10',
					'name' => 'RS4'
				],
				[
					'id' => '95',
					'car_brand_id' => '10',
					'name' => 'RS5'
				],
				[
					'id' => '96',
					'car_brand_id' => '10',
					'name' => 'RS6'
				],
				[
					'id' => '97',
					'car_brand_id' => '10',
					'name' => 'RS7'
				],
				[
					'id' => '98',
					'car_brand_id' => '10',
					'name' => 'RSQ3'
				],
				[
					'id' => '99',
					'car_brand_id' => '10',
					'name' => 'S1'
				],
				[
					'id' => '100',
					'car_brand_id' => '10',
					'name' => 'S2'
				],
				[
					'id' => '101',
					'car_brand_id' => '10',
					'name' => 'S3'
				],
				[
					'id' => '102',
					'car_brand_id' => '10',
					'name' => 'S4'
				],
				[
					'id' => '103',
					'car_brand_id' => '10',
					'name' => 'S5'
				],
				[
					'id' => '104',
					'car_brand_id' => '10',
					'name' => 'S6'
				],
				[
					'id' => '105',
					'car_brand_id' => '10',
					'name' => 'S7'
				],
				[
					'id' => '106',
					'car_brand_id' => '10',
					'name' => 'S8'
				],
				[
					'id' => '107',
					'car_brand_id' => '10',
					'name' => 'SQ5'
				],
				[
					'id' => '108',
					'car_brand_id' => '10',
					'name' => 'TT'
				],
				[
					'id' => '109',
					'car_brand_id' => '10',
					'name' => 'V8'
				],
				[
					'id' => '110',
					'car_brand_id' => '13',
					'name' => 'Arnage'
				],
				[
					'id' => '111',
					'car_brand_id' => '13',
					'name' => 'Azure'
				],
				[
					'id' => '112',
					'car_brand_id' => '13',
					'name' => 'Brooklands'
				],
				[
					'id' => '113',
					'car_brand_id' => '13',
					'name' => 'Continental'
				],
				[
					'id' => '114',
					'car_brand_id' => '13',
					'name' => 'Eight'
				],
				[
					'id' => '115',
					'car_brand_id' => '13',
					'name' => 'Flying Spur'
				],
				[
					'id' => '116',
					'car_brand_id' => '13',
					'name' => 'Mulsanne'
				],
				[
					'id' => '117',
					'car_brand_id' => '13',
					'name' => 'Turbo R'
				],
				[
					'id' => '118',
					'car_brand_id' => '13',
					'name' => 'Turbo RT'
				],
				[
					'id' => '119',
					'car_brand_id' => '13',
					'name' => 'Turbo S'
				],
				[
					'id' => '120',
					'car_brand_id' => '14',
					'name' => 'Series 1'
				],
				[
					'id' => '121',
					'car_brand_id' => '14',
					'name' => '2002'
				],
				[
					'id' => '122',
					'car_brand_id' => '14',
					'name' => 'Series 2'
				],
				[
					'id' => '123',
					'car_brand_id' => '14',
					'name' => 'Series 3'
				],
				[
					'id' => '124',
					'car_brand_id' => '14',
					'name' => 'Series 4'
				],
				[
					'id' => '125',
					'car_brand_id' => '14',
					'name' => 'Series 5'
				],
				[
					'id' => '126',
					'car_brand_id' => '14',
					'name' => 'Series 6'
				],
				[
					'id' => '127',
					'car_brand_id' => '14',
					'name' => 'Series 7'
				],
				[
					'id' => '128',
					'car_brand_id' => '14',
					'name' => '840'
				],
				[
					'id' => '129',
					'car_brand_id' => '14',
					'name' => '850'
				],
				[
					'id' => '130',
					'car_brand_id' => '14',
					'name' => 'i3'
				],
				[
					'id' => '131',
					'car_brand_id' => '14',
					'name' => 'i8'
				],
				[
					'id' => '132',
					'car_brand_id' => '14',
					'name' => 'M Models'
				],
				[
					'id' => '133',
					'car_brand_id' => '14',
					'name' => 'Series X'
				],
				[
					'id' => '134',
					'car_brand_id' => '14',
					'name' => 'Series Z'
				],
				[
					'id' => '135',
					'car_brand_id' => '16',
					'name' => 'BC3'
				],
				[
					'id' => '136',
					'car_brand_id' => '16',
					'name' => 'BS2'
				],
				[
					'id' => '137',
					'car_brand_id' => '16',
					'name' => 'BS4'
				],
				[
					'id' => '138',
					'car_brand_id' => '16',
					'name' => 'BS6'
				],
				[
					'id' => '139',
					'car_brand_id' => '17',
					'name' => 'EB 110'
				],
				[
					'id' => '140',
					'car_brand_id' => '17',
					'name' => 'Veyron'
				],
				[
					'id' => '141',
					'car_brand_id' => '18',
					'name' => 'Century'
				],
				[
					'id' => '142',
					'car_brand_id' => '18',
					'name' => 'Electra'
				],
				[
					'id' => '143',
					'car_brand_id' => '18',
					'name' => 'Enclave'
				],
				[
					'id' => '144',
					'car_brand_id' => '18',
					'name' => 'La Crosse'
				],
				[
					'id' => '145',
					'car_brand_id' => '18',
					'name' => 'Le Sabre'
				],
				[
					'id' => '146',
					'car_brand_id' => '18',
					'name' => 'Park Avenue'
				],
				[
					'id' => '147',
					'car_brand_id' => '18',
					'name' => 'Regal'
				],
				[
					'id' => '148',
					'car_brand_id' => '18',
					'name' => 'Riviera'
				],
				[
					'id' => '149',
					'car_brand_id' => '18',
					'name' => 'Roadmaster'
				],
				[
					'id' => '150',
					'car_brand_id' => '18',
					'name' => 'Skylark'
				],
				[
					'id' => '151',
					'car_brand_id' => '19',
					'name' => 'Allante'
				],
				[
					'id' => '152',
					'car_brand_id' => '19',
					'name' => 'ATS'
				],
				[
					'id' => '153',
					'car_brand_id' => '19',
					'name' => 'BLS'
				],
				[
					'id' => '154',
					'car_brand_id' => '19',
					'name' => 'CTS'
				],
				[
					'id' => '155',
					'car_brand_id' => '19',
					'name' => 'Deville'
				],
				[
					'id' => '156',
					'car_brand_id' => '19',
					'name' => 'Eldorado'
				],
				[
					'id' => '157',
					'car_brand_id' => '19',
					'name' => 'Escalade'
				],
				[
					'id' => '158',
					'car_brand_id' => '19',
					'name' => 'Fleetwood'
				],
				[
					'id' => '159',
					'car_brand_id' => '19',
					'name' => 'Seville'
				],
				[
					'id' => '160',
					'car_brand_id' => '19',
					'name' => 'SRX'
				],
				[
					'id' => '161',
					'car_brand_id' => '19',
					'name' => 'STS'
				],
				[
					'id' => '162',
					'car_brand_id' => '19',
					'name' => 'XLR'
				],
				[
					'id' => '163',
					'car_brand_id' => '23',
					'name' => '2500'
				],
				[
					'id' => '164',
					'car_brand_id' => '23',
					'name' => 'Alero'
				],
				[
					'id' => '165',
					'car_brand_id' => '23',
					'name' => 'Astro'
				],
				[
					'id' => '166',
					'car_brand_id' => '23',
					'name' => 'Avalanche'
				],
				[
					'id' => '167',
					'car_brand_id' => '23',
					'name' => 'Aveo'
				],
				[
					'id' => '168',
					'car_brand_id' => '23',
					'name' => 'Beretta'
				],
				[
					'id' => '169',
					'car_brand_id' => '23',
					'name' => 'Blazer'
				],
				[
					'id' => '170',
					'car_brand_id' => '23',
					'name' => 'C1500'
				],
				[
					'id' => '171',
					'car_brand_id' => '23',
					'name' => 'Camaro'
				],
				[
					'id' => '172',
					'car_brand_id' => '23',
					'name' => 'Caprice'
				],
				[
					'id' => '173',
					'car_brand_id' => '23',
					'name' => 'Captiva'
				],
				[
					'id' => '174',
					'car_brand_id' => '23',
					'name' => 'Cavalier'
				],
				[
					'id' => '175',
					'car_brand_id' => '23',
					'name' => 'Chevelle'
				],
				[
					'id' => '176',
					'car_brand_id' => '23',
					'name' => 'Chevy Van'
				],
				[
					'id' => '177',
					'car_brand_id' => '23',
					'name' => 'Citation'
				],
				[
					'id' => '178',
					'car_brand_id' => '23',
					'name' => 'Colorado'
				],
				[
					'id' => '179',
					'car_brand_id' => '23',
					'name' => 'Corsica'
				],
				[
					'id' => '180',
					'car_brand_id' => '23',
					'name' => 'Cruze'
				],
				[
					'id' => '181',
					'car_brand_id' => '23',
					'name' => 'El Camino'
				],
				[
					'id' => '182',
					'car_brand_id' => '23',
					'name' => 'Epica'
				],
				[
					'id' => '183',
					'car_brand_id' => '23',
					'name' => 'Evanda'
				],
				[
					'id' => '184',
					'car_brand_id' => '23',
					'name' => 'Express'
				],
				[
					'id' => '185',
					'car_brand_id' => '23',
					'name' => 'G'
				],
				[
					'id' => '186',
					'car_brand_id' => '23',
					'name' => 'HHR'
				],
				[
					'id' => '187',
					'car_brand_id' => '23',
					'name' => 'Impala'
				],
				[
					'id' => '188',
					'car_brand_id' => '23',
					'name' => 'K1500'
				],
				[
					'id' => '189',
					'car_brand_id' => '23',
					'name' => 'K30'
				],
				[
					'id' => '190',
					'car_brand_id' => '23',
					'name' => 'Kalos'
				],
				[
					'id' => '191',
					'car_brand_id' => '23',
					'name' => 'Lacetti'
				],
				[
					'id' => '192',
					'car_brand_id' => '23',
					'name' => 'Lumina'
				],
				[
					'id' => '193',
					'car_brand_id' => '23',
					'name' => 'Malibu'
				],
				[
					'id' => '194',
					'car_brand_id' => '23',
					'name' => 'Matiz'
				],
				[
					'id' => '195',
					'car_brand_id' => '23',
					'name' => 'Nubira'
				],
				[
					'id' => '196',
					'car_brand_id' => '23',
					'name' => 'Orlando'
				],
				[
					'id' => '197',
					'car_brand_id' => '23',
					'name' => 'Rezzo'
				],
				[
					'id' => '198',
					'car_brand_id' => '23',
					'name' => 'S-10'
				],
				[
					'id' => '199',
					'car_brand_id' => '23',
					'name' => 'Silverado'
				],
				[
					'id' => '200',
					'car_brand_id' => '23',
					'name' => 'Spark'
				],
				[
					'id' => '201',
					'car_brand_id' => '23',
					'name' => 'SSR'
				],
				[
					'id' => '202',
					'car_brand_id' => '23',
					'name' => 'Suburban'
				],
				[
					'id' => '203',
					'car_brand_id' => '23',
					'name' => 'Tahoe'
				],
				[
					'id' => '204',
					'car_brand_id' => '23',
					'name' => 'Trailblazer'
				],
				[
					'id' => '205',
					'car_brand_id' => '23',
					'name' => 'Trans Sport'
				],
				[
					'id' => '206',
					'car_brand_id' => '23',
					'name' => 'Trax'
				],
				[
					'id' => '207',
					'car_brand_id' => '23',
					'name' => 'Venture'
				],
				[
					'id' => '208',
					'car_brand_id' => '23',
					'name' => 'Volt'
				],
				[
					'id' => '209',
					'car_brand_id' => '24',
					'name' => '300 M'
				],
				[
					'id' => '210',
					'car_brand_id' => '24',
					'name' => '300C'
				],
				[
					'id' => '211',
					'car_brand_id' => '24',
					'name' => 'Aspen'
				],
				[
					'id' => '212',
					'car_brand_id' => '24',
					'name' => 'Crossfire'
				],
				[
					'id' => '213',
					'car_brand_id' => '24',
					'name' => 'Daytona'
				],
				[
					'id' => '214',
					'car_brand_id' => '24',
					'name' => 'ES'
				],
				[
					'id' => '215',
					'car_brand_id' => '24',
					'name' => 'Grand Voyager'
				],
				[
					'id' => '216',
					'car_brand_id' => '24',
					'name' => 'GS'
				],
				[
					'id' => '217',
					'car_brand_id' => '24',
					'name' => 'GTS'
				],
				[
					'id' => '218',
					'car_brand_id' => '24',
					'name' => 'Imperial'
				],
				[
					'id' => '219',
					'car_brand_id' => '24',
					'name' => 'Le Baron'
				],
				[
					'id' => '220',
					'car_brand_id' => '24',
					'name' => 'Neon'
				],
				[
					'id' => '221',
					'car_brand_id' => '24',
					'name' => 'New Yorker'
				],
				[
					'id' => '222',
					'car_brand_id' => '24',
					'name' => 'Pacifica'
				],
				[
					'id' => '223',
					'car_brand_id' => '24',
					'name' => 'PT Cruiser'
				],
				[
					'id' => '224',
					'car_brand_id' => '24',
					'name' => 'Saratoga'
				],
				[
					'id' => '225',
					'car_brand_id' => '24',
					'name' => 'Sebring'
				],
				[
					'id' => '226',
					'car_brand_id' => '24',
					'name' => 'Stratus'
				],
				[
					'id' => '227',
					'car_brand_id' => '24',
					'name' => 'Valiant'
				],
				[
					'id' => '228',
					'car_brand_id' => '24',
					'name' => 'Viper'
				],
				[
					'id' => '229',
					'car_brand_id' => '24',
					'name' => 'Vision'
				],
				[
					'id' => '230',
					'car_brand_id' => '24',
					'name' => 'Voyager'
				],
				[
					'id' => '231',
					'car_brand_id' => '25',
					'name' => '2 CV'
				],
				[
					'id' => '232',
					'car_brand_id' => '25',
					'name' => 'AX'
				],
				[
					'id' => '233',
					'car_brand_id' => '25',
					'name' => 'Berlingo'
				],
				[
					'id' => '234',
					'car_brand_id' => '25',
					'name' => 'BX'
				],
				[
					'id' => '235',
					'car_brand_id' => '25',
					'name' => 'C-Crosser'
				],
				[
					'id' => '236',
					'car_brand_id' => '25',
					'name' => 'C-ElysÃ©e'
				],
				[
					'id' => '237',
					'car_brand_id' => '25',
					'name' => 'C-Zero'
				],
				[
					'id' => '238',
					'car_brand_id' => '25',
					'name' => 'C1'
				],
				[
					'id' => '239',
					'car_brand_id' => '25',
					'name' => 'C2'
				],
				[
					'id' => '240',
					'car_brand_id' => '25',
					'name' => 'C3'
				],
				[
					'id' => '241',
					'car_brand_id' => '25',
					'name' => 'C3 Picasso'
				],
				[
					'id' => '242',
					'car_brand_id' => '25',
					'name' => 'C4'
				],
				[
					'id' => '243',
					'car_brand_id' => '25',
					'name' => 'C4 Aircross'
				],
				[
					'id' => '244',
					'car_brand_id' => '25',
					'name' => 'C4 Cactus'
				],
				[
					'id' => '245',
					'car_brand_id' => '25',
					'name' => 'C4 Picasso'
				],
				[
					'id' => '246',
					'car_brand_id' => '25',
					'name' => 'C5'
				],
				[
					'id' => '247',
					'car_brand_id' => '25',
					'name' => 'C6'
				],
				[
					'id' => '248',
					'car_brand_id' => '25',
					'name' => 'C8'
				],
				[
					'id' => '249',
					'car_brand_id' => '25',
					'name' => 'CX'
				],
				[
					'id' => '250',
					'car_brand_id' => '25',
					'name' => 'DS'
				],
				[
					'id' => '251',
					'car_brand_id' => '25',
					'name' => 'DS3'
				],
				[
					'id' => '252',
					'car_brand_id' => '25',
					'name' => 'DS4'
				],
				[
					'id' => '253',
					'car_brand_id' => '25',
					'name' => 'DS5'
				],
				[
					'id' => '254',
					'car_brand_id' => '25',
					'name' => 'Evasion'
				],
				[
					'id' => '255',
					'car_brand_id' => '25',
					'name' => 'Grand C4 Picasso'
				],
				[
					'id' => '256',
					'car_brand_id' => '25',
					'name' => 'GSA'
				],
				[
					'id' => '257',
					'car_brand_id' => '25',
					'name' => 'Jumper'
				],
				[
					'id' => '258',
					'car_brand_id' => '25',
					'name' => 'Jumpy'
				],
				[
					'id' => '259',
					'car_brand_id' => '25',
					'name' => 'Nemo'
				],
				[
					'id' => '260',
					'car_brand_id' => '25',
					'name' => 'SAXO'
				],
				[
					'id' => '261',
					'car_brand_id' => '25',
					'name' => 'SM'
				],
				[
					'id' => '262',
					'car_brand_id' => '25',
					'name' => 'Visa'
				],
				[
					'id' => '263',
					'car_brand_id' => '25',
					'name' => 'Xantia'
				],
				[
					'id' => '264',
					'car_brand_id' => '25',
					'name' => 'XM'
				],
				[
					'id' => '265',
					'car_brand_id' => '25',
					'name' => 'Xsara'
				],
				[
					'id' => '266',
					'car_brand_id' => '25',
					'name' => 'Xsara Picasso'
				],
				[
					'id' => '267',
					'car_brand_id' => '25',
					'name' => 'ZX'
				],
				[
					'id' => '268',
					'car_brand_id' => '27',
					'name' => 'C1'
				],
				[
					'id' => '269',
					'car_brand_id' => '27',
					'name' => 'C2'
				],
				[
					'id' => '270',
					'car_brand_id' => '27',
					'name' => 'C3'
				],
				[
					'id' => '271',
					'car_brand_id' => '27',
					'name' => 'C4'
				],
				[
					'id' => '272',
					'car_brand_id' => '27',
					'name' => 'C5'
				],
				[
					'id' => '273',
					'car_brand_id' => '27',
					'name' => 'C6'
				],
				[
					'id' => '274',
					'car_brand_id' => '27',
					'name' => 'C7'
				],
				[
					'id' => '275',
					'car_brand_id' => '27',
					'name' => 'Z06'
				],
				[
					'id' => '276',
					'car_brand_id' => '27',
					'name' => 'ZR 1'
				],
				[
					'id' => '277',
					'car_brand_id' => '28',
					'name' => 'Dokker'
				],
				[
					'id' => '278',
					'car_brand_id' => '28',
					'name' => 'Duster'
				],
				[
					'id' => '279',
					'car_brand_id' => '28',
					'name' => 'Lodgy'
				],
				[
					'id' => '280',
					'car_brand_id' => '28',
					'name' => 'Logan'
				],
				[
					'id' => '281',
					'car_brand_id' => '28',
					'name' => 'Logan Pick-Up'
				],
				[
					'id' => '282',
					'car_brand_id' => '28',
					'name' => 'Pick Up'
				],
				[
					'id' => '283',
					'car_brand_id' => '28',
					'name' => 'Sandero'
				],
				[
					'id' => '284',
					'car_brand_id' => '29',
					'name' => 'Espero'
				],
				[
					'id' => '285',
					'car_brand_id' => '29',
					'name' => 'Evanda'
				],
				[
					'id' => '286',
					'car_brand_id' => '29',
					'name' => 'Kalos'
				],
				[
					'id' => '287',
					'car_brand_id' => '29',
					'name' => 'Korando'
				],
				[
					'id' => '288',
					'car_brand_id' => '29',
					'name' => 'Lacetti'
				],
				[
					'id' => '289',
					'car_brand_id' => '29',
					'name' => 'Lanos'
				],
				[
					'id' => '290',
					'car_brand_id' => '29',
					'name' => 'Leganza'
				],
				[
					'id' => '291',
					'car_brand_id' => '29',
					'name' => 'Matiz'
				],
				[
					'id' => '292',
					'car_brand_id' => '29',
					'name' => 'Musso'
				],
				[
					'id' => '293',
					'car_brand_id' => '29',
					'name' => 'Nexia'
				],
				[
					'id' => '294',
					'car_brand_id' => '29',
					'name' => 'Nubira'
				],
				[
					'id' => '295',
					'car_brand_id' => '29',
					'name' => 'Rezzo'
				],
				[
					'id' => '296',
					'car_brand_id' => '29',
					'name' => 'Tacuma'
				],
				[
					'id' => '297',
					'car_brand_id' => '30',
					'name' => 'Applause'
				],
				[
					'id' => '298',
					'car_brand_id' => '30',
					'name' => 'Charade'
				],
				[
					'id' => '299',
					'car_brand_id' => '30',
					'name' => 'Charmant'
				],
				[
					'id' => '300',
					'car_brand_id' => '30',
					'name' => 'Copen'
				],
				[
					'id' => '301',
					'car_brand_id' => '30',
					'name' => 'Cuore'
				],
				[
					'id' => '302',
					'car_brand_id' => '30',
					'name' => 'Feroza/Sportrak'
				],
				[
					'id' => '303',
					'car_brand_id' => '30',
					'name' => 'Freeclimber'
				],
				[
					'id' => '304',
					'car_brand_id' => '30',
					'name' => 'Gran Move'
				],
				[
					'id' => '305',
					'car_brand_id' => '30',
					'name' => 'Hijet'
				],
				[
					'id' => '306',
					'car_brand_id' => '30',
					'name' => 'MATERIA'
				],
				[
					'id' => '307',
					'car_brand_id' => '30',
					'name' => 'Move'
				],
				[
					'id' => '308',
					'car_brand_id' => '30',
					'name' => 'Rocky/Fourtrak'
				],
				[
					'id' => '309',
					'car_brand_id' => '30',
					'name' => 'Sirion'
				],
				[
					'id' => '310',
					'car_brand_id' => '30',
					'name' => 'Terios'
				],
				[
					'id' => '311',
					'car_brand_id' => '30',
					'name' => 'TREVIS'
				],
				[
					'id' => '312',
					'car_brand_id' => '30',
					'name' => 'YRV'
				],
				[
					'id' => '313',
					'car_brand_id' => '31',
					'name' => 'GuarÃ '
				],
				[
					'id' => '314',
					'car_brand_id' => '31',
					'name' => 'Pantera'
				],
				[
					'id' => '315',
					'car_brand_id' => '32',
					'name' => 'Avenger'
				],
				[
					'id' => '316',
					'car_brand_id' => '32',
					'name' => 'Caliber'
				],
				[
					'id' => '317',
					'car_brand_id' => '32',
					'name' => 'Challenger'
				],
				[
					'id' => '318',
					'car_brand_id' => '32',
					'name' => 'Charger'
				],
				[
					'id' => '319',
					'car_brand_id' => '32',
					'name' => 'Dakota'
				],
				[
					'id' => '320',
					'car_brand_id' => '32',
					'name' => 'Demon'
				],
				[
					'id' => '321',
					'car_brand_id' => '32',
					'name' => 'Durango'
				],
				[
					'id' => '322',
					'car_brand_id' => '32',
					'name' => 'Grand Caravan'
				],
				[
					'id' => '323',
					'car_brand_id' => '32',
					'name' => 'Hornet'
				],
				[
					'id' => '324',
					'car_brand_id' => '32',
					'name' => 'Journey'
				],
				[
					'id' => '325',
					'car_brand_id' => '32',
					'name' => 'Magnum'
				],
				[
					'id' => '326',
					'car_brand_id' => '32',
					'name' => 'Neon'
				],
				[
					'id' => '327',
					'car_brand_id' => '32',
					'name' => 'Nitro'
				],
				[
					'id' => '328',
					'car_brand_id' => '32',
					'name' => 'RAM'
				],
				[
					'id' => '329',
					'car_brand_id' => '32',
					'name' => 'Stealth'
				],
				[
					'id' => '330',
					'car_brand_id' => '32',
					'name' => 'Viper'
				],
				[
					'id' => '331',
					'car_brand_id' => '33',
					'name' => '208'
				],
				[
					'id' => '332',
					'car_brand_id' => '33',
					'name' => '246'
				],
				[
					'id' => '333',
					'car_brand_id' => '33',
					'name' => '250'
				],
				[
					'id' => '334',
					'car_brand_id' => '33',
					'name' => '275'
				],
				[
					'id' => '335',
					'car_brand_id' => '33',
					'name' => '288'
				],
				[
					'id' => '336',
					'car_brand_id' => '33',
					'name' => '308'
				],
				[
					'id' => '337',
					'car_brand_id' => '33',
					'name' => '328'
				],
				[
					'id' => '338',
					'car_brand_id' => '33',
					'name' => '330'
				],
				[
					'id' => '339',
					'car_brand_id' => '33',
					'name' => '348'
				],
				[
					'id' => '340',
					'car_brand_id' => '33',
					'name' => '360'
				],
				[
					'id' => '341',
					'car_brand_id' => '33',
					'name' => '365'
				],
				[
					'id' => '342',
					'car_brand_id' => '33',
					'name' => '400'
				],
				[
					'id' => '343',
					'car_brand_id' => '33',
					'name' => '412'
				],
				[
					'id' => '344',
					'car_brand_id' => '33',
					'name' => '456'
				],
				[
					'id' => '345',
					'car_brand_id' => '33',
					'name' => '458'
				],
				[
					'id' => '346',
					'car_brand_id' => '33',
					'name' => '512'
				],
				[
					'id' => '347',
					'car_brand_id' => '33',
					'name' => '550'
				],
				[
					'id' => '348',
					'car_brand_id' => '33',
					'name' => '575'
				],
				[
					'id' => '349',
					'car_brand_id' => '33',
					'name' => '599 GTB'
				],
				[
					'id' => '350',
					'car_brand_id' => '33',
					'name' => '612'
				],
				[
					'id' => '351',
					'car_brand_id' => '33',
					'name' => '750'
				],
				[
					'id' => '352',
					'car_brand_id' => '33',
					'name' => 'California'
				],
				[
					'id' => '353',
					'car_brand_id' => '33',
					'name' => 'Daytona'
				],
				[
					'id' => '354',
					'car_brand_id' => '33',
					'name' => 'Dino GT4'
				],
				[
					'id' => '355',
					'car_brand_id' => '33',
					'name' => 'Enzo Ferrari'
				],
				[
					'id' => '356',
					'car_brand_id' => '33',
					'name' => 'F12'
				],
				[
					'id' => '357',
					'car_brand_id' => '33',
					'name' => 'F355'
				],
				[
					'id' => '358',
					'car_brand_id' => '33',
					'name' => 'F40'
				],
				[
					'id' => '359',
					'car_brand_id' => '33',
					'name' => 'F430'
				],
				[
					'id' => '360',
					'car_brand_id' => '33',
					'name' => 'F50'
				],
				[
					'id' => '361',
					'car_brand_id' => '33',
					'name' => 'FF'
				],
				[
					'id' => '362',
					'car_brand_id' => '33',
					'name' => 'LaFerrari'
				],
				[
					'id' => '363',
					'car_brand_id' => '33',
					'name' => 'Mondial'
				],
				[
					'id' => '364',
					'car_brand_id' => '33',
					'name' => 'Superamerica'
				],
				[
					'id' => '365',
					'car_brand_id' => '33',
					'name' => 'Testarossa'
				],
				[
					'id' => '366',
					'car_brand_id' => '34',
					'name' => '124'
				],
				[
					'id' => '367',
					'car_brand_id' => '34',
					'name' => '126'
				],
				[
					'id' => '368',
					'car_brand_id' => '34',
					'name' => '127'
				],
				[
					'id' => '369',
					'car_brand_id' => '34',
					'name' => '130'
				],
				[
					'id' => '370',
					'car_brand_id' => '34',
					'name' => '131'
				],
				[
					'id' => '371',
					'car_brand_id' => '34',
					'name' => '500'
				],
				[
					'id' => '372',
					'car_brand_id' => '34',
					'name' => '500C'
				],
				[
					'id' => '373',
					'car_brand_id' => '34',
					'name' => '500L'
				],
				[
					'id' => '374',
					'car_brand_id' => '34',
					'name' => '500L Living'
				],
				[
					'id' => '375',
					'car_brand_id' => '34',
					'name' => '500L Trekking'
				],
				[
					'id' => '376',
					'car_brand_id' => '34',
					'name' => '500X'
				],
				[
					'id' => '377',
					'car_brand_id' => '34',
					'name' => 'Barchetta'
				],
				[
					'id' => '378',
					'car_brand_id' => '34',
					'name' => 'Brava'
				],
				[
					'id' => '379',
					'car_brand_id' => '34',
					'name' => 'Bravo'
				],
				[
					'id' => '380',
					'car_brand_id' => '34',
					'name' => 'Cinquecento'
				],
				[
					'id' => '381',
					'car_brand_id' => '34',
					'name' => 'Coupe'
				],
				[
					'id' => '382',
					'car_brand_id' => '34',
					'name' => 'Croma'
				],
				[
					'id' => '383',
					'car_brand_id' => '34',
					'name' => 'Dino'
				],
				[
					'id' => '384',
					'car_brand_id' => '34',
					'name' => 'Doblo'
				],
				[
					'id' => '385',
					'car_brand_id' => '34',
					'name' => 'Ducato'
				],
				[
					'id' => '386',
					'car_brand_id' => '34',
					'name' => 'Fiorino'
				],
				[
					'id' => '387',
					'car_brand_id' => '34',
					'name' => 'Freemont'
				],
				[
					'id' => '388',
					'car_brand_id' => '34',
					'name' => 'Grande Punto'
				],
				[
					'id' => '389',
					'car_brand_id' => '34',
					'name' => 'Idea'
				],
				[
					'id' => '390',
					'car_brand_id' => '34',
					'name' => 'Linea'
				],
				[
					'id' => '391',
					'car_brand_id' => '34',
					'name' => 'Marea'
				],
				[
					'id' => '392',
					'car_brand_id' => '34',
					'name' => 'Marengo'
				],
				[
					'id' => '393',
					'car_brand_id' => '34',
					'name' => 'Multipla'
				],
				[
					'id' => '394',
					'car_brand_id' => '34',
					'name' => 'New Panda'
				],
				[
					'id' => '395',
					'car_brand_id' => '34',
					'name' => 'Palio'
				],
				[
					'id' => '396',
					'car_brand_id' => '34',
					'name' => 'Panda'
				],
				[
					'id' => '397',
					'car_brand_id' => '34',
					'name' => 'Punto'
				],
				[
					'id' => '398',
					'car_brand_id' => '34',
					'name' => 'Punto Evo'
				],
				[
					'id' => '399',
					'car_brand_id' => '34',
					'name' => 'Qubo'
				],
				[
					'id' => '400',
					'car_brand_id' => '34',
					'name' => 'Regata'
				],
				[
					'id' => '401',
					'car_brand_id' => '34',
					'name' => 'Ritmo'
				],
				[
					'id' => '402',
					'car_brand_id' => '34',
					'name' => 'Scudo'
				],
				[
					'id' => '403',
					'car_brand_id' => '34',
					'name' => 'Sedici'
				],
				[
					'id' => '404',
					'car_brand_id' => '34',
					'name' => 'Seicento'
				],
				[
					'id' => '405',
					'car_brand_id' => '34',
					'name' => 'Spider Europa'
				],
				[
					'id' => '406',
					'car_brand_id' => '34',
					'name' => 'Stilo'
				],
				[
					'id' => '407',
					'car_brand_id' => '34',
					'name' => 'Strada'
				],
				[
					'id' => '408',
					'car_brand_id' => '34',
					'name' => 'Tempra'
				],
				[
					'id' => '409',
					'car_brand_id' => '34',
					'name' => 'Tipo'
				],
				[
					'id' => '410',
					'car_brand_id' => '34',
					'name' => 'Ulysse'
				],
				[
					'id' => '411',
					'car_brand_id' => '34',
					'name' => 'Uno'
				],
				[
					'id' => '412',
					'car_brand_id' => '34',
					'name' => 'X 1/9'
				],
				[
					'id' => '413',
					'car_brand_id' => '35',
					'name' => 'Karma'
				],
				[
					'id' => '414',
					'car_brand_id' => '36',
					'name' => 'Aerostar'
				],
				[
					'id' => '415',
					'car_brand_id' => '36',
					'name' => 'B-Max'
				],
				[
					'id' => '416',
					'car_brand_id' => '36',
					'name' => 'Bronco'
				],
				[
					'id' => '417',
					'car_brand_id' => '36',
					'name' => 'C-Max'
				],
				[
					'id' => '418',
					'car_brand_id' => '36',
					'name' => 'Capri'
				],
				[
					'id' => '419',
					'car_brand_id' => '36',
					'name' => 'Cougar'
				],
				[
					'id' => '420',
					'car_brand_id' => '36',
					'name' => 'Courier'
				],
				[
					'id' => '421',
					'car_brand_id' => '36',
					'name' => 'Crown'
				],
				[
					'id' => '422',
					'car_brand_id' => '36',
					'name' => 'Econoline'
				],
				[
					'id' => '423',
					'car_brand_id' => '36',
					'name' => 'Econovan'
				],
				[
					'id' => '424',
					'car_brand_id' => '36',
					'name' => 'EcoSport'
				],
				[
					'id' => '425',
					'car_brand_id' => '36',
					'name' => 'Edge'
				],
				[
					'id' => '426',
					'car_brand_id' => '36',
					'name' => 'Escape'
				],
				[
					'id' => '427',
					'car_brand_id' => '36',
					'name' => 'Escort'
				],
				[
					'id' => '428',
					'car_brand_id' => '36',
					'name' => 'Excursion'
				],
				[
					'id' => '429',
					'car_brand_id' => '36',
					'name' => 'Expedition'
				],
				[
					'id' => '430',
					'car_brand_id' => '36',
					'name' => 'Explorer'
				],
				[
					'id' => '431',
					'car_brand_id' => '36',
					'name' => 'Express'
				],
				[
					'id' => '432',
					'car_brand_id' => '36',
					'name' => 'F 150'
				],
				[
					'id' => '433',
					'car_brand_id' => '36',
					'name' => 'F 250'
				],
				[
					'id' => '434',
					'car_brand_id' => '36',
					'name' => 'F 350'
				],
				[
					'id' => '435',
					'car_brand_id' => '36',
					'name' => 'Fairlane'
				],
				[
					'id' => '436',
					'car_brand_id' => '36',
					'name' => 'Falcon'
				],
				[
					'id' => '437',
					'car_brand_id' => '36',
					'name' => 'Fiesta'
				],
				[
					'id' => '438',
					'car_brand_id' => '36',
					'name' => 'Flex'
				],
				[
					'id' => '439',
					'car_brand_id' => '36',
					'name' => 'Focus'
				],
				[
					'id' => '440',
					'car_brand_id' => '36',
					'name' => 'Fusion'
				],
				[
					'id' => '441',
					'car_brand_id' => '36',
					'name' => 'Galaxy'
				],
				[
					'id' => '442',
					'car_brand_id' => '36',
					'name' => 'Granada'
				],
				[
					'id' => '443',
					'car_brand_id' => '36',
					'name' => 'Grand C-Max'
				],
				[
					'id' => '444',
					'car_brand_id' => '36',
					'name' => 'Grand Tourneo'
				],
				[
					'id' => '445',
					'car_brand_id' => '36',
					'name' => 'GT'
				],
				[
					'id' => '446',
					'car_brand_id' => '36',
					'name' => 'Ka'
				],
				[
					'id' => '447',
					'car_brand_id' => '36',
					'name' => 'Kuga'
				],
				[
					'id' => '448',
					'car_brand_id' => '36',
					'name' => 'Maverick'
				],
				[
					'id' => '449',
					'car_brand_id' => '36',
					'name' => 'Mercury'
				],
				[
					'id' => '450',
					'car_brand_id' => '36',
					'name' => 'Mondeo'
				],
				[
					'id' => '451',
					'car_brand_id' => '36',
					'name' => 'Mustang'
				],
				[
					'id' => '452',
					'car_brand_id' => '36',
					'name' => 'Orion'
				],
				[
					'id' => '453',
					'car_brand_id' => '36',
					'name' => 'Probe'
				],
				[
					'id' => '454',
					'car_brand_id' => '36',
					'name' => 'Puma'
				],
				[
					'id' => '455',
					'car_brand_id' => '36',
					'name' => 'Ranger'
				],
				[
					'id' => '456',
					'car_brand_id' => '36',
					'name' => 'Raptor'
				],
				[
					'id' => '457',
					'car_brand_id' => '36',
					'name' => 'S-Max'
				],
				[
					'id' => '458',
					'car_brand_id' => '36',
					'name' => 'Scorpio'
				],
				[
					'id' => '459',
					'car_brand_id' => '36',
					'name' => 'Sierra'
				],
				[
					'id' => '460',
					'car_brand_id' => '36',
					'name' => 'Sportka'
				],
				[
					'id' => '461',
					'car_brand_id' => '36',
					'name' => 'Streetka'
				],
				[
					'id' => '462',
					'car_brand_id' => '36',
					'name' => 'Taunus'
				],
				[
					'id' => '463',
					'car_brand_id' => '36',
					'name' => 'Taurus'
				],
				[
					'id' => '464',
					'car_brand_id' => '36',
					'name' => 'Thunderbird'
				],
				[
					'id' => '465',
					'car_brand_id' => '36',
					'name' => 'Tourneo'
				],
				[
					'id' => '466',
					'car_brand_id' => '36',
					'name' => 'Transit'
				],
				[
					'id' => '467',
					'car_brand_id' => '36',
					'name' => 'Windstar'
				],
				[
					'id' => '468',
					'car_brand_id' => '39',
					'name' => 'Acadia'
				],
				[
					'id' => '469',
					'car_brand_id' => '39',
					'name' => 'Envoy'
				],
				[
					'id' => '470',
					'car_brand_id' => '39',
					'name' => 'Safari'
				],
				[
					'id' => '471',
					'car_brand_id' => '39',
					'name' => 'Savana'
				],
				[
					'id' => '472',
					'car_brand_id' => '39',
					'name' => 'Sierra'
				],
				[
					'id' => '473',
					'car_brand_id' => '39',
					'name' => 'Sonoma'
				],
				[
					'id' => '474',
					'car_brand_id' => '39',
					'name' => 'Syclone'
				],
				[
					'id' => '475',
					'car_brand_id' => '39',
					'name' => 'Typhoon'
				],
				[
					'id' => '476',
					'car_brand_id' => '39',
					'name' => 'Vandura'
				],
				[
					'id' => '477',
					'car_brand_id' => '39',
					'name' => 'Yukon'
				],
				[
					'id' => '478',
					'car_brand_id' => '40',
					'name' => 'Sonique'
				],
				[
					'id' => '479',
					'car_brand_id' => '43',
					'name' => 'Accord'
				],
				[
					'id' => '480',
					'car_brand_id' => '43',
					'name' => 'Aerodeck'
				],
				[
					'id' => '481',
					'car_brand_id' => '43',
					'name' => 'Civic'
				],
				[
					'id' => '482',
					'car_brand_id' => '43',
					'name' => 'Concerto'
				],
				[
					'id' => '483',
					'car_brand_id' => '43',
					'name' => 'CR-V'
				],
				[
					'id' => '484',
					'car_brand_id' => '43',
					'name' => 'CR-Z'
				],
				[
					'id' => '485',
					'car_brand_id' => '43',
					'name' => 'CRX'
				],
				[
					'id' => '486',
					'car_brand_id' => '43',
					'name' => 'Element'
				],
				[
					'id' => '487',
					'car_brand_id' => '43',
					'name' => 'FR-V'
				],
				[
					'id' => '488',
					'car_brand_id' => '43',
					'name' => 'HR-V'
				],
				[
					'id' => '489',
					'car_brand_id' => '43',
					'name' => 'Insight'
				],
				[
					'id' => '490',
					'car_brand_id' => '43',
					'name' => 'Integra'
				],
				[
					'id' => '491',
					'car_brand_id' => '43',
					'name' => 'Jazz'
				],
				[
					'id' => '492',
					'car_brand_id' => '43',
					'name' => 'Legend'
				],
				[
					'id' => '493',
					'car_brand_id' => '43',
					'name' => 'Logo'
				],
				[
					'id' => '494',
					'car_brand_id' => '43',
					'name' => 'NSX'
				],
				[
					'id' => '495',
					'car_brand_id' => '43',
					'name' => 'Odyssey'
				],
				[
					'id' => '496',
					'car_brand_id' => '43',
					'name' => 'Prelude'
				],
				[
					'id' => '497',
					'car_brand_id' => '43',
					'name' => 'S2000'
				],
				[
					'id' => '498',
					'car_brand_id' => '43',
					'name' => 'Shuttle'
				],
				[
					'id' => '499',
					'car_brand_id' => '43',
					'name' => 'Stream'
				],
				[
					'id' => '500',
					'car_brand_id' => '44',
					'name' => 'H1'
				],
				[
					'id' => '501',
					'car_brand_id' => '44',
					'name' => 'H2'
				],
				[
					'id' => '502',
					'car_brand_id' => '44',
					'name' => 'H3'
				],
				[
					'id' => '503',
					'car_brand_id' => '45',
					'name' => 'Accent'
				],
				[
					'id' => '504',
					'car_brand_id' => '45',
					'name' => 'Atos'
				],
				[
					'id' => '505',
					'car_brand_id' => '45',
					'name' => 'Azera'
				],
				[
					'id' => '506',
					'car_brand_id' => '45',
					'name' => 'Coupe'
				],
				[
					'id' => '507',
					'car_brand_id' => '45',
					'name' => 'Elantra'
				],
				[
					'id' => '508',
					'car_brand_id' => '45',
					'name' => 'Excel'
				],
				[
					'id' => '509',
					'car_brand_id' => '45',
					'name' => 'Galloper'
				],
				[
					'id' => '510',
					'car_brand_id' => '45',
					'name' => 'Genesis'
				],
				[
					'id' => '511',
					'car_brand_id' => '45',
					'name' => 'Getz'
				],
				[
					'id' => '512',
					'car_brand_id' => '45',
					'name' => 'Grand Santa Fe'
				],
				[
					'id' => '513',
					'car_brand_id' => '45',
					'name' => 'Grandeur'
				],
				[
					'id' => '514',
					'car_brand_id' => '45',
					'name' => 'H 100'
				],
				[
					'id' => '515',
					'car_brand_id' => '45',
					'name' => 'H 200'
				],
				[
					'id' => '516',
					'car_brand_id' => '45',
					'name' => 'H-1'
				],
				[
					'id' => '517',
					'car_brand_id' => '45',
					'name' => 'H-1 Starex'
				],
				[
					'id' => '518',
					'car_brand_id' => '45',
					'name' => 'i10'
				],
				[
					'id' => '519',
					'car_brand_id' => '45',
					'name' => 'i20'
				],
				[
					'id' => '520',
					'car_brand_id' => '45',
					'name' => 'i30'
				],
				[
					'id' => '521',
					'car_brand_id' => '45',
					'name' => 'i40'
				],
				[
					'id' => '522',
					'car_brand_id' => '45',
					'name' => 'i50'
				],
				[
					'id' => '523',
					'car_brand_id' => '45',
					'name' => 'ix20'
				],
				[
					'id' => '524',
					'car_brand_id' => '45',
					'name' => 'ix35'
				],
				[
					'id' => '525',
					'car_brand_id' => '45',
					'name' => 'ix55'
				],
				[
					'id' => '526',
					'car_brand_id' => '45',
					'name' => 'Lantra'
				],
				[
					'id' => '527',
					'car_brand_id' => '45',
					'name' => 'Matrix'
				],
				[
					'id' => '528',
					'car_brand_id' => '45',
					'name' => 'Pony'
				],
				[
					'id' => '529',
					'car_brand_id' => '45',
					'name' => 'S-Coupe'
				],
				[
					'id' => '530',
					'car_brand_id' => '45',
					'name' => 'Santa Fe'
				],
				[
					'id' => '531',
					'car_brand_id' => '45',
					'name' => 'Santamo'
				],
				[
					'id' => '532',
					'car_brand_id' => '45',
					'name' => 'Sonata'
				],
				[
					'id' => '533',
					'car_brand_id' => '45',
					'name' => 'Terracan'
				],
				[
					'id' => '534',
					'car_brand_id' => '45',
					'name' => 'Trajet'
				],
				[
					'id' => '535',
					'car_brand_id' => '45',
					'name' => 'Tucson'
				],
				[
					'id' => '536',
					'car_brand_id' => '45',
					'name' => 'Veloster'
				],
				[
					'id' => '537',
					'car_brand_id' => '45',
					'name' => 'Veracruz'
				],
				[
					'id' => '538',
					'car_brand_id' => '45',
					'name' => 'XG 30'
				],
				[
					'id' => '539',
					'car_brand_id' => '45',
					'name' => 'XG 350'
				],
				[
					'id' => '540',
					'car_brand_id' => '46',
					'name' => 'EX30'
				],
				[
					'id' => '541',
					'car_brand_id' => '46',
					'name' => 'EX35'
				],
				[
					'id' => '542',
					'car_brand_id' => '46',
					'name' => 'EX37'
				],
				[
					'id' => '543',
					'car_brand_id' => '46',
					'name' => 'FX'
				],
				[
					'id' => '544',
					'car_brand_id' => '46',
					'name' => 'G35'
				],
				[
					'id' => '545',
					'car_brand_id' => '46',
					'name' => 'G37'
				],
				[
					'id' => '546',
					'car_brand_id' => '46',
					'name' => 'M30'
				],
				[
					'id' => '547',
					'car_brand_id' => '46',
					'name' => 'M35'
				],
				[
					'id' => '548',
					'car_brand_id' => '46',
					'name' => 'M37'
				],
				[
					'id' => '549',
					'car_brand_id' => '46',
					'name' => 'Q45'
				],
				[
					'id' => '550',
					'car_brand_id' => '46',
					'name' => 'Q50'
				],
				[
					'id' => '551',
					'car_brand_id' => '46',
					'name' => 'Q60'
				],
				[
					'id' => '552',
					'car_brand_id' => '46',
					'name' => 'Q70'
				],
				[
					'id' => '553',
					'car_brand_id' => '46',
					'name' => 'QX50'
				],
				[
					'id' => '554',
					'car_brand_id' => '46',
					'name' => 'QX56'
				],
				[
					'id' => '555',
					'car_brand_id' => '46',
					'name' => 'QX70'
				],
				[
					'id' => '556',
					'car_brand_id' => '47',
					'name' => 'Campo'
				],
				[
					'id' => '557',
					'car_brand_id' => '47',
					'name' => 'D-Max'
				],
				[
					'id' => '558',
					'car_brand_id' => '47',
					'name' => 'Gemini'
				],
				[
					'id' => '559',
					'car_brand_id' => '47',
					'name' => 'Midi'
				],
				[
					'id' => '560',
					'car_brand_id' => '47',
					'name' => 'PICK UP'
				],
				[
					'id' => '561',
					'car_brand_id' => '47',
					'name' => 'Trooper'
				],
				[
					'id' => '562',
					'car_brand_id' => '48',
					'name' => 'Massif'
				],
				[
					'id' => '563',
					'car_brand_id' => '49',
					'name' => 'Daimler'
				],
				[
					'id' => '564',
					'car_brand_id' => '49',
					'name' => 'E-Type'
				],
				[
					'id' => '565',
					'car_brand_id' => '49',
					'name' => 'F-Type'
				],
				[
					'id' => '566',
					'car_brand_id' => '49',
					'name' => 'MK II'
				],
				[
					'id' => '567',
					'car_brand_id' => '49',
					'name' => 'S-Type'
				],
				[
					'id' => '568',
					'car_brand_id' => '49',
					'name' => 'X-Type'
				],
				[
					'id' => '569',
					'car_brand_id' => '49',
					'name' => 'XE'
				],
				[
					'id' => '570',
					'car_brand_id' => '49',
					'name' => 'XF'
				],
				[
					'id' => '571',
					'car_brand_id' => '49',
					'name' => 'XJ'
				],
				[
					'id' => '572',
					'car_brand_id' => '49',
					'name' => 'XJ12'
				],
				[
					'id' => '573',
					'car_brand_id' => '49',
					'name' => 'XJ40'
				],
				[
					'id' => '574',
					'car_brand_id' => '49',
					'name' => 'XJ6'
				],
				[
					'id' => '575',
					'car_brand_id' => '49',
					'name' => 'XJ8'
				],
				[
					'id' => '576',
					'car_brand_id' => '49',
					'name' => 'XJR'
				],
				[
					'id' => '577',
					'car_brand_id' => '49',
					'name' => 'XJS'
				],
				[
					'id' => '578',
					'car_brand_id' => '49',
					'name' => 'XJSC'
				],
				[
					'id' => '579',
					'car_brand_id' => '49',
					'name' => 'XK'
				],
				[
					'id' => '580',
					'car_brand_id' => '49',
					'name' => 'XKR'
				],
				[
					'id' => '581',
					'car_brand_id' => '50',
					'name' => 'Cherokee'
				],
				[
					'id' => '582',
					'car_brand_id' => '50',
					'name' => 'CJ'
				],
				[
					'id' => '583',
					'car_brand_id' => '50',
					'name' => 'Comanche'
				],
				[
					'id' => '584',
					'car_brand_id' => '50',
					'name' => 'Commander'
				],
				[
					'id' => '585',
					'car_brand_id' => '50',
					'name' => 'Compass'
				],
				[
					'id' => '586',
					'car_brand_id' => '50',
					'name' => 'Grand Cherokee'
				],
				[
					'id' => '587',
					'car_brand_id' => '50',
					'name' => 'Patriot'
				],
				[
					'id' => '588',
					'car_brand_id' => '50',
					'name' => 'Renegade'
				],
				[
					'id' => '589',
					'car_brand_id' => '50',
					'name' => 'Wagoneer'
				],
				[
					'id' => '590',
					'car_brand_id' => '50',
					'name' => 'Willys'
				],
				[
					'id' => '591',
					'car_brand_id' => '50',
					'name' => 'Wrangler'
				],
				[
					'id' => '592',
					'car_brand_id' => '51',
					'name' => 'Besta'
				],
				[
					'id' => '593',
					'car_brand_id' => '51',
					'name' => 'Borrego'
				],
				[
					'id' => '594',
					'car_brand_id' => '51',
					'name' => 'Carens'
				],
				[
					'id' => '595',
					'car_brand_id' => '51',
					'name' => 'Carnival'
				],
				[
					'id' => '596',
					'car_brand_id' => '51',
					'name' => 'ceed'
				],
				[
					'id' => '597',
					'car_brand_id' => '51',
					'name' => 'ceed Sportswagon'
				],
				[
					'id' => '598',
					'car_brand_id' => '51',
					'name' => 'Cerato'
				],
				[
					'id' => '599',
					'car_brand_id' => '51',
					'name' => 'Clarus'
				],
				[
					'id' => '600',
					'car_brand_id' => '51',
					'name' => 'Elan'
				],
				[
					'id' => '601',
					'car_brand_id' => '51',
					'name' => 'Joice'
				],
				[
					'id' => '602',
					'car_brand_id' => '51',
					'name' => 'K2500'
				],
				[
					'id' => '603',
					'car_brand_id' => '51',
					'name' => 'K2700'
				],
				[
					'id' => '604',
					'car_brand_id' => '51',
					'name' => 'Leo'
				],
				[
					'id' => '605',
					'car_brand_id' => '51',
					'name' => 'Magentis'
				],
				[
					'id' => '606',
					'car_brand_id' => '51',
					'name' => 'Mentor'
				],
				[
					'id' => '607',
					'car_brand_id' => '51',
					'name' => 'Mini'
				],
				[
					'id' => '608',
					'car_brand_id' => '51',
					'name' => 'Opirus'
				],
				[
					'id' => '609',
					'car_brand_id' => '51',
					'name' => 'Optima'
				],
				[
					'id' => '610',
					'car_brand_id' => '51',
					'name' => 'Picanto'
				],
				[
					'id' => '611',
					'car_brand_id' => '51',
					'name' => 'Pregio'
				],
				[
					'id' => '612',
					'car_brand_id' => '51',
					'name' => 'Pride'
				],
				[
					'id' => '613',
					'car_brand_id' => '51',
					'name' => 'proceedd'
				],
				[
					'id' => '614',
					'car_brand_id' => '51',
					'name' => 'Retona'
				],
				[
					'id' => '615',
					'car_brand_id' => '51',
					'name' => 'Rio'
				],
				[
					'id' => '616',
					'car_brand_id' => '51',
					'name' => 'Roadster'
				],
				[
					'id' => '617',
					'car_brand_id' => '51',
					'name' => 'Rocsta'
				],
				[
					'id' => '618',
					'car_brand_id' => '51',
					'name' => 'Sephia'
				],
				[
					'id' => '619',
					'car_brand_id' => '51',
					'name' => 'Shuma'
				],
				[
					'id' => '620',
					'car_brand_id' => '51',
					'name' => 'Sorento'
				],
				[
					'id' => '621',
					'car_brand_id' => '51',
					'name' => 'Soul'
				],
				[
					'id' => '622',
					'car_brand_id' => '51',
					'name' => 'Sportage'
				],
				[
					'id' => '623',
					'car_brand_id' => '51',
					'name' => 'Venga'
				],
				[
					'id' => '624',
					'car_brand_id' => '52',
					'name' => 'CCR'
				],
				[
					'id' => '625',
					'car_brand_id' => '53',
					'name' => 'X - BOW'
				],
				[
					'id' => '626',
					'car_brand_id' => '54',
					'name' => '110'
				],
				[
					'id' => '627',
					'car_brand_id' => '54',
					'name' => '111'
				],
				[
					'id' => '628',
					'car_brand_id' => '54',
					'name' => '112'
				],
				[
					'id' => '629',
					'car_brand_id' => '54',
					'name' => '1200'
				],
				[
					'id' => '630',
					'car_brand_id' => '54',
					'name' => '2107'
				],
				[
					'id' => '631',
					'car_brand_id' => '54',
					'name' => '2110'
				],
				[
					'id' => '632',
					'car_brand_id' => '54',
					'name' => '2111'
				],
				[
					'id' => '633',
					'car_brand_id' => '54',
					'name' => '2112'
				],
				[
					'id' => '634',
					'car_brand_id' => '54',
					'name' => 'Aleko'
				],
				[
					'id' => '635',
					'car_brand_id' => '54',
					'name' => 'Forma'
				],
				[
					'id' => '636',
					'car_brand_id' => '54',
					'name' => 'Granta'
				],
				[
					'id' => '637',
					'car_brand_id' => '54',
					'name' => 'Kalina'
				],
				[
					'id' => '638',
					'car_brand_id' => '54',
					'name' => 'Niva'
				],
				[
					'id' => '639',
					'car_brand_id' => '54',
					'name' => 'Nova'
				],
				[
					'id' => '640',
					'car_brand_id' => '54',
					'name' => 'Priora'
				],
				[
					'id' => '641',
					'car_brand_id' => '54',
					'name' => 'Samara'
				],
				[
					'id' => '642',
					'car_brand_id' => '55',
					'name' => 'Aventador'
				],
				[
					'id' => '643',
					'car_brand_id' => '55',
					'name' => 'Countach'
				],
				[
					'id' => '644',
					'car_brand_id' => '55',
					'name' => 'Diablo'
				],
				[
					'id' => '645',
					'car_brand_id' => '55',
					'name' => 'Espada'
				],
				[
					'id' => '646',
					'car_brand_id' => '55',
					'name' => 'Gallardo'
				],
				[
					'id' => '647',
					'car_brand_id' => '55',
					'name' => 'HuracÃ¡n'
				],
				[
					'id' => '648',
					'car_brand_id' => '55',
					'name' => 'Jalpa'
				],
				[
					'id' => '649',
					'car_brand_id' => '55',
					'name' => 'LM'
				],
				[
					'id' => '650',
					'car_brand_id' => '55',
					'name' => 'Miura'
				],
				[
					'id' => '651',
					'car_brand_id' => '55',
					'name' => 'MurciÃ©lago'
				],
				[
					'id' => '652',
					'car_brand_id' => '55',
					'name' => 'Urraco'
				],
				[
					'id' => '653',
					'car_brand_id' => '56',
					'name' => 'Beta'
				],
				[
					'id' => '654',
					'car_brand_id' => '56',
					'name' => 'Dedra'
				],
				[
					'id' => '655',
					'car_brand_id' => '56',
					'name' => 'Delta'
				],
				[
					'id' => '656',
					'car_brand_id' => '56',
					'name' => 'Flaminia'
				],
				[
					'id' => '657',
					'car_brand_id' => '56',
					'name' => 'Flavia'
				],
				[
					'id' => '658',
					'car_brand_id' => '56',
					'name' => 'Fulvia'
				],
				[
					'id' => '659',
					'car_brand_id' => '56',
					'name' => 'Gamma'
				],
				[
					'id' => '660',
					'car_brand_id' => '56',
					'name' => 'Kappa'
				],
				[
					'id' => '661',
					'car_brand_id' => '56',
					'name' => 'Lybra'
				],
				[
					'id' => '662',
					'car_brand_id' => '56',
					'name' => 'MUSA'
				],
				[
					'id' => '663',
					'car_brand_id' => '56',
					'name' => 'Phedra'
				],
				[
					'id' => '664',
					'car_brand_id' => '56',
					'name' => 'Prisma'
				],
				[
					'id' => '665',
					'car_brand_id' => '56',
					'name' => 'Stratos'
				],
				[
					'id' => '666',
					'car_brand_id' => '56',
					'name' => 'Thema'
				],
				[
					'id' => '667',
					'car_brand_id' => '56',
					'name' => 'Thesis'
				],
				[
					'id' => '668',
					'car_brand_id' => '56',
					'name' => 'Voyager'
				],
				[
					'id' => '669',
					'car_brand_id' => '56',
					'name' => 'Ypsilon'
				],
				[
					'id' => '670',
					'car_brand_id' => '56',
					'name' => 'Zeta'
				],
				[
					'id' => '671',
					'car_brand_id' => '57',
					'name' => 'Defender'
				],
				[
					'id' => '672',
					'car_brand_id' => '57',
					'name' => 'Discovery'
				],
				[
					'id' => '673',
					'car_brand_id' => '57',
					'name' => 'Discovery Sport'
				],
				[
					'id' => '674',
					'car_brand_id' => '57',
					'name' => 'Freelander'
				],
				[
					'id' => '675',
					'car_brand_id' => '57',
					'name' => 'Range Rover'
				],
				[
					'id' => '676',
					'car_brand_id' => '57',
					'name' => 'Range Rover Evoque'
				],
				[
					'id' => '677',
					'car_brand_id' => '57',
					'name' => 'Range Rover Sport'
				],
				[
					'id' => '678',
					'car_brand_id' => '57',
					'name' => 'Serie I'
				],
				[
					'id' => '679',
					'car_brand_id' => '57',
					'name' => 'Serie II'
				],
				[
					'id' => '680',
					'car_brand_id' => '57',
					'name' => 'Serie III'
				],
				[
					'id' => '681',
					'car_brand_id' => '58',
					'name' => 'CV - 9'
				],
				[
					'id' => '682',
					'car_brand_id' => '58',
					'name' => 'S'
				],
				[
					'id' => '683',
					'car_brand_id' => '58',
					'name' => 'SC2'
				],
				[
					'id' => '684',
					'car_brand_id' => '58',
					'name' => 'SC4'
				],
				[
					'id' => '685',
					'car_brand_id' => '59',
					'name' => 'CT 200h'
				],
				[
					'id' => '686',
					'car_brand_id' => '59',
					'name' => 'ES Series'
				],
				[
					'id' => '687',
					'car_brand_id' => '59',
					'name' => 'GS Series'
				],
				[
					'id' => '688',
					'car_brand_id' => '59',
					'name' => 'GX 470'
				],
				[
					'id' => '689',
					'car_brand_id' => '59',
					'name' => 'IS Series'
				],
				[
					'id' => '690',
					'car_brand_id' => '59',
					'name' => 'LS Series'
				],
				[
					'id' => '691',
					'car_brand_id' => '59',
					'name' => 'LX Series'
				],
				[
					'id' => '692',
					'car_brand_id' => '59',
					'name' => 'NX Series'
				],
				[
					'id' => '693',
					'car_brand_id' => '59',
					'name' => 'RC F'
				],
				[
					'id' => '694',
					'car_brand_id' => '59',
					'name' => 'RX Series'
				],
				[
					'id' => '695',
					'car_brand_id' => '59',
					'name' => 'SC 400'
				],
				[
					'id' => '696',
					'car_brand_id' => '59',
					'name' => 'SC 430'
				],
				[
					'id' => '697',
					'car_brand_id' => '60',
					'name' => 'Ambra'
				],
				[
					'id' => '698',
					'car_brand_id' => '60',
					'name' => 'Be Sun'
				],
				[
					'id' => '699',
					'car_brand_id' => '60',
					'name' => 'JS 50'
				],
				[
					'id' => '700',
					'car_brand_id' => '60',
					'name' => 'JS 50 L'
				],
				[
					'id' => '701',
					'car_brand_id' => '60',
					'name' => 'JS RC'
				],
				[
					'id' => '702',
					'car_brand_id' => '60',
					'name' => 'Nova'
				],
				[
					'id' => '703',
					'car_brand_id' => '60',
					'name' => 'Optima'
				],
				[
					'id' => '704',
					'car_brand_id' => '60',
					'name' => 'X - Too'
				],
				[
					'id' => '705',
					'car_brand_id' => '61',
					'name' => 'Aviator'
				],
				[
					'id' => '706',
					'car_brand_id' => '61',
					'name' => 'Continental'
				],
				[
					'id' => '707',
					'car_brand_id' => '61',
					'name' => 'LS'
				],
				[
					'id' => '708',
					'car_brand_id' => '61',
					'name' => 'Mark'
				],
				[
					'id' => '709',
					'car_brand_id' => '61',
					'name' => 'Navigator'
				],
				[
					'id' => '710',
					'car_brand_id' => '61',
					'name' => 'Town Car'
				],
				[
					'id' => '711',
					'car_brand_id' => '62',
					'name' => '340 R'
				],
				[
					'id' => '712',
					'car_brand_id' => '62',
					'name' => 'Cortina'
				],
				[
					'id' => '713',
					'car_brand_id' => '62',
					'name' => 'Elan'
				],
				[
					'id' => '714',
					'car_brand_id' => '62',
					'name' => 'Elise'
				],
				[
					'id' => '715',
					'car_brand_id' => '62',
					'name' => 'Elite'
				],
				[
					'id' => '716',
					'car_brand_id' => '62',
					'name' => 'Esprit'
				],
				[
					'id' => '717',
					'car_brand_id' => '62',
					'name' => 'Europa'
				],
				[
					'id' => '718',
					'car_brand_id' => '62',
					'name' => 'Evora'
				],
				[
					'id' => '719',
					'car_brand_id' => '62',
					'name' => 'Excel'
				],
				[
					'id' => '720',
					'car_brand_id' => '62',
					'name' => 'Exige'
				],
				[
					'id' => '721',
					'car_brand_id' => '62',
					'name' => 'Super Seven'
				],
				[
					'id' => '722',
					'car_brand_id' => '64',
					'name' => '222'
				],
				[
					'id' => '723',
					'car_brand_id' => '64',
					'name' => '224'
				],
				[
					'id' => '724',
					'car_brand_id' => '64',
					'name' => '228'
				],
				[
					'id' => '725',
					'car_brand_id' => '64',
					'name' => '3200'
				],
				[
					'id' => '726',
					'car_brand_id' => '64',
					'name' => '418'
				],
				[
					'id' => '727',
					'car_brand_id' => '64',
					'name' => '420'
				],
				[
					'id' => '728',
					'car_brand_id' => '64',
					'name' => '4200'
				],
				[
					'id' => '729',
					'car_brand_id' => '64',
					'name' => '422'
				],
				[
					'id' => '730',
					'car_brand_id' => '64',
					'name' => '424'
				],
				[
					'id' => '731',
					'car_brand_id' => '64',
					'name' => '430'
				],
				[
					'id' => '732',
					'car_brand_id' => '64',
					'name' => 'Biturbo'
				],
				[
					'id' => '733',
					'car_brand_id' => '64',
					'name' => 'Ghibli'
				],
				[
					'id' => '734',
					'car_brand_id' => '64',
					'name' => 'GranCabrio'
				],
				[
					'id' => '735',
					'car_brand_id' => '64',
					'name' => 'Gransport'
				],
				[
					'id' => '736',
					'car_brand_id' => '64',
					'name' => 'Granturismo'
				],
				[
					'id' => '737',
					'car_brand_id' => '64',
					'name' => 'Indy'
				],
				[
					'id' => '738',
					'car_brand_id' => '64',
					'name' => 'Karif'
				],
				[
					'id' => '739',
					'car_brand_id' => '64',
					'name' => 'MC12'
				],
				[
					'id' => '740',
					'car_brand_id' => '64',
					'name' => 'Merak'
				],
				[
					'id' => '741',
					'car_brand_id' => '64',
					'name' => 'Quattroporte'
				],
				[
					'id' => '742',
					'car_brand_id' => '64',
					'name' => 'Shamal'
				],
				[
					'id' => '743',
					'car_brand_id' => '64',
					'name' => 'Spyder'
				],
				[
					'id' => '744',
					'car_brand_id' => '65',
					'name' => '57'
				],
				[
					'id' => '745',
					'car_brand_id' => '65',
					'name' => '62'
				],
				[
					'id' => '746',
					'car_brand_id' => '66',
					'name' => '121'
				],
				[
					'id' => '747',
					'car_brand_id' => '66',
					'name' => '2'
				],
				[
					'id' => '748',
					'car_brand_id' => '66',
					'name' => '3'
				],
				[
					'id' => '749',
					'car_brand_id' => '66',
					'name' => '323'
				],
				[
					'id' => '750',
					'car_brand_id' => '66',
					'name' => '5'
				],
				[
					'id' => '751',
					'car_brand_id' => '66',
					'name' => '6'
				],
				[
					'id' => '752',
					'car_brand_id' => '66',
					'name' => '626'
				],
				[
					'id' => '753',
					'car_brand_id' => '66',
					'name' => '929'
				],
				[
					'id' => '754',
					'car_brand_id' => '66',
					'name' => 'B series'
				],
				[
					'id' => '755',
					'car_brand_id' => '66',
					'name' => 'Bongo'
				],
				[
					'id' => '756',
					'car_brand_id' => '66',
					'name' => 'BT - 50'
				],
				[
					'id' => '757',
					'car_brand_id' => '66',
					'name' => 'CX - 3'
				],
				[
					'id' => '758',
					'car_brand_id' => '66',
					'name' => 'CX - 5'
				],
				[
					'id' => '759',
					'car_brand_id' => '66',
					'name' => 'CX - 7'
				],
				[
					'id' => '760',
					'car_brand_id' => '66',
					'name' => 'CX - 9'
				],
				[
					'id' => '761',
					'car_brand_id' => '66',
					'name' => 'Demio'
				],
				[
					'id' => '762',
					'car_brand_id' => '66',
					'name' => 'E series'
				],
				[
					'id' => '763',
					'car_brand_id' => '66',
					'name' => 'Millenia'
				],
				[
					'id' => '764',
					'car_brand_id' => '66',
					'name' => 'MPV'
				],
				[
					'id' => '765',
					'car_brand_id' => '66',
					'name' => 'MX - 3'
				],
				[
					'id' => '766',
					'car_brand_id' => '66',
					'name' => 'MX - 5'
				],
				[
					'id' => '767',
					'car_brand_id' => '66',
					'name' => 'MX - 6'
				],
				[
					'id' => '768',
					'car_brand_id' => '66',
					'name' => 'Premacy'
				],
				[
					'id' => '769',
					'car_brand_id' => '66',
					'name' => 'Protege'
				],
				[
					'id' => '770',
					'car_brand_id' => '66',
					'name' => 'RX - 6'
				],
				[
					'id' => '771',
					'car_brand_id' => '66',
					'name' => 'RX - 7'
				],
				[
					'id' => '772',
					'car_brand_id' => '66',
					'name' => 'RX - 8'
				],
				[
					'id' => '773',
					'car_brand_id' => '66',
					'name' => 'Tribute'
				],
				[
					'id' => '774',
					'car_brand_id' => '66',
					'name' => 'Xedos'
				],
				[
					'id' => '775',
					'car_brand_id' => '67',
					'name' => '650S CoupÃ©'
				],
				[
					'id' => '776',
					'car_brand_id' => '67',
					'name' => '650S Spider'
				],
				[
					'id' => '777',
					'car_brand_id' => '67',
					'name' => 'MP4 - 12C'
				],
				[
					'id' => '778',
					'car_brand_id' => '68',
					'name' => '190'
				],
				[
					'id' => '779',
					'car_brand_id' => '68',
					'name' => '200'
				],
				[
					'id' => '780',
					'car_brand_id' => '68',
					'name' => '220'
				],
				[
					'id' => '781',
					'car_brand_id' => '68',
					'name' => '230'
				],
				[
					'id' => '782',
					'car_brand_id' => '68',
					'name' => '240'
				],
				[
					'id' => '783',
					'car_brand_id' => '68',
					'name' => '250'
				],
				[
					'id' => '784',
					'car_brand_id' => '68',
					'name' => '260'
				],
				[
					'id' => '785',
					'car_brand_id' => '68',
					'name' => '270'
				],
				[
					'id' => '786',
					'car_brand_id' => '68',
					'name' => '280'
				],
				[
					'id' => '787',
					'car_brand_id' => '68',
					'name' => '290'
				],
				[
					'id' => '788',
					'car_brand_id' => '68',
					'name' => '300'
				],
				[
					'id' => '789',
					'car_brand_id' => '68',
					'name' => '320'
				],
				[
					'id' => '790',
					'car_brand_id' => '68',
					'name' => '350'
				],
				[
					'id' => '791',
					'car_brand_id' => '68',
					'name' => '380'
				],
				[
					'id' => '792',
					'car_brand_id' => '68',
					'name' => '400'
				],
				[
					'id' => '793',
					'car_brand_id' => '68',
					'name' => '416'
				],
				[
					'id' => '794',
					'car_brand_id' => '68',
					'name' => '420'
				],
				[
					'id' => '795',
					'car_brand_id' => '68',
					'name' => '450'
				],
				[
					'id' => '796',
					'car_brand_id' => '68',
					'name' => '500'
				],
				[
					'id' => '797',
					'car_brand_id' => '68',
					'name' => '560'
				],
				[
					'id' => '798',
					'car_brand_id' => '68',
					'name' => '600'
				],
				[
					'id' => '799',
					'car_brand_id' => '68',
					'name' => 'A - Klasse'
				],
				[
					'id' => '800',
					'car_brand_id' => '68',
					'name' => 'AMG GT'
				],
				[
					'id' => '801',
					'car_brand_id' => '68',
					'name' => 'AMG GT S'
				],
				[
					'id' => '802',
					'car_brand_id' => '68',
					'name' => 'B - Klasse'
				],
				[
					'id' => '803',
					'car_brand_id' => '68',
					'name' => 'C - Klasse'
				],
				[
					'id' => '804',
					'car_brand_id' => '68',
					'name' => 'CE - Klasse'
				],
				[
					'id' => '805',
					'car_brand_id' => '68',
					'name' => 'Citan'
				],
				[
					'id' => '806',
					'car_brand_id' => '68',
					'name' => 'CL - Klasse'
				],
				[
					'id' => '807',
					'car_brand_id' => '68',
					'name' => 'CLA - Klasse'
				],
				[
					'id' => '808',
					'car_brand_id' => '68',
					'name' => 'CLC - Klasse'
				],
				[
					'id' => '809',
					'car_brand_id' => '68',
					'name' => 'CLK - Klasse'
				],
				[
					'id' => '810',
					'car_brand_id' => '68',
					'name' => 'CLS - Klasse'
				],
				[
					'id' => '811',
					'car_brand_id' => '68',
					'name' => 'E - Klasse'
				],
				[
					'id' => '812',
					'car_brand_id' => '68',
					'name' => 'G - Klasse'
				],
				[
					'id' => '813',
					'car_brand_id' => '68',
					'name' => 'GL - Klasse'
				],
				[
					'id' => '814',
					'car_brand_id' => '68',
					'name' => 'GLA - Klasse'
				],
				[
					'id' => '815',
					'car_brand_id' => '68',
					'name' => 'GLE 450 AMG'
				],
				[
					'id' => '816',
					'car_brand_id' => '68',
					'name' => 'GLK - Klasse'
				],
				[
					'id' => '817',
					'car_brand_id' => '68',
					'name' => 'MB 100'
				],
				[
					'id' => '818',
					'car_brand_id' => '68',
					'name' => 'ML - Klasse'
				],
				[
					'id' => '819',
					'car_brand_id' => '68',
					'name' => 'R - Klasse'
				],
				[
					'id' => '820',
					'car_brand_id' => '68',
					'name' => 'S - Klasse'
				],
				[
					'id' => '821',
					'car_brand_id' => '68',
					'name' => 'SL - Klasse'
				],
				[
					'id' => '822',
					'car_brand_id' => '68',
					'name' => 'SLK - Klasse'
				],
				[
					'id' => '823',
					'car_brand_id' => '68',
					'name' => 'SLR'
				],
				[
					'id' => '824',
					'car_brand_id' => '68',
					'name' => 'SLS AMG'
				],
				[
					'id' => '825',
					'car_brand_id' => '68',
					'name' => 'Sprinter'
				],
				[
					'id' => '826',
					'car_brand_id' => '68',
					'name' => 'V - Klasse'
				],
				[
					'id' => '827',
					'car_brand_id' => '68',
					'name' => 'Vaneo'
				],
				[
					'id' => '828',
					'car_brand_id' => '68',
					'name' => 'Vario'
				],
				[
					'id' => '829',
					'car_brand_id' => '68',
					'name' => 'Viano'
				],
				[
					'id' => '830',
					'car_brand_id' => '68',
					'name' => 'Vito'
				],
				[
					'id' => '831',
					'car_brand_id' => '69',
					'name' => 'MGA'
				],
				[
					'id' => '832',
					'car_brand_id' => '69',
					'name' => 'MGB'
				],
				[
					'id' => '833',
					'car_brand_id' => '69',
					'name' => 'MGF'
				],
				[
					'id' => '834',
					'car_brand_id' => '69',
					'name' => 'Midget'
				],
				[
					'id' => '835',
					'car_brand_id' => '69',
					'name' => 'Montego'
				],
				[
					'id' => '836',
					'car_brand_id' => '69',
					'name' => 'TD'
				],
				[
					'id' => '837',
					'car_brand_id' => '69',
					'name' => 'TF'
				],
				[
					'id' => '838',
					'car_brand_id' => '69',
					'name' => 'ZR'
				],
				[
					'id' => '839',
					'car_brand_id' => '69',
					'name' => 'ZS'
				],
				[
					'id' => '840',
					'car_brand_id' => '69',
					'name' => 'ZT'
				],
				[
					'id' => '841',
					'car_brand_id' => '70',
					'name' => 'DUÃˆ'
				],
				[
					'id' => '842',
					'car_brand_id' => '70',
					'name' => 'Flex'
				],
				[
					'id' => '843',
					'car_brand_id' => '70',
					'name' => 'M . Go'
				],
				[
					'id' => '844',
					'car_brand_id' => '70',
					'name' => 'M - 8'
				],
				[
					'id' => '845',
					'car_brand_id' => '70',
					'name' => 'MC1'
				],
				[
					'id' => '846',
					'car_brand_id' => '70',
					'name' => 'MC2'
				],
				[
					'id' => '847',
					'car_brand_id' => '71',
					'name' => 'Cabrio Series'
				],
				[
					'id' => '848',
					'car_brand_id' => '71',
					'name' => 'Clubman Series'
				],
				[
					'id' => '849',
					'car_brand_id' => '71',
					'name' => 'Clubvan'
				],
				[
					'id' => '850',
					'car_brand_id' => '71',
					'name' => 'Countryman Series'
				],
				[
					'id' => '851',
					'car_brand_id' => '71',
					'name' => 'Coupe Series'
				],
				[
					'id' => '852',
					'car_brand_id' => '71',
					'name' => 'MINI'
				],
				[
					'id' => '853',
					'car_brand_id' => '71',
					'name' => 'Paceman Series'
				],
				[
					'id' => '854',
					'car_brand_id' => '71',
					'name' => 'Roadster Series'
				],
				[
					'id' => '855',
					'car_brand_id' => '72',
					'name' => '3000 GT'
				],
				[
					'id' => '856',
					'car_brand_id' => '72',
					'name' => 'ASX'
				],
				[
					'id' => '857',
					'car_brand_id' => '72',
					'name' => 'Canter'
				],
				[
					'id' => '858',
					'car_brand_id' => '72',
					'name' => 'Carisma'
				],
				[
					'id' => '859',
					'car_brand_id' => '72',
					'name' => 'Colt'
				],
				[
					'id' => '860',
					'car_brand_id' => '72',
					'name' => 'Cordia'
				],
				[
					'id' => '861',
					'car_brand_id' => '72',
					'name' => 'Cosmos'
				],
				[
					'id' => '862',
					'car_brand_id' => '72',
					'name' => 'Diamante'
				],
				[
					'id' => '863',
					'car_brand_id' => '72',
					'name' => 'Eclipse'
				],
				[
					'id' => '864',
					'car_brand_id' => '72',
					'name' => 'Galant'
				],
				[
					'id' => '865',
					'car_brand_id' => '72',
					'name' => 'Galloper'
				],
				[
					'id' => '866',
					'car_brand_id' => '72',
					'name' => 'Grandis'
				],
				[
					'id' => '867',
					'car_brand_id' => '72',
					'name' => 'Electric Vehicle(i - MiEV)'
				],
				[
					'id' => '868',
					'car_brand_id' => '72',
					'name' => 'L200'
				],
				[
					'id' => '869',
					'car_brand_id' => '72',
					'name' => 'L300'
				],
				[
					'id' => '870',
					'car_brand_id' => '72',
					'name' => 'L400'
				],
				[
					'id' => '871',
					'car_brand_id' => '72',
					'name' => 'Lancer'
				],
				[
					'id' => '872',
					'car_brand_id' => '72',
					'name' => 'Mirage'
				],
				[
					'id' => '873',
					'car_brand_id' => '72',
					'name' => 'Montero'
				],
				[
					'id' => '874',
					'car_brand_id' => '72',
					'name' => 'Outlander'
				],
				[
					'id' => '875',
					'car_brand_id' => '72',
					'name' => 'Pajero'
				],
				[
					'id' => '876',
					'car_brand_id' => '72',
					'name' => 'Pajero Pinin'
				],
				[
					'id' => '877',
					'car_brand_id' => '72',
					'name' => 'Pick - up'
				],
				[
					'id' => '878',
					'car_brand_id' => '72',
					'name' => 'Plug - in Hybrid Outlander'
				],
				[
					'id' => '879',
					'car_brand_id' => '72',
					'name' => 'Santamo'
				],
				[
					'id' => '880',
					'car_brand_id' => '72',
					'name' => 'Sapporo'
				],
				[
					'id' => '881',
					'car_brand_id' => '72',
					'name' => 'Sigma'
				],
				[
					'id' => '882',
					'car_brand_id' => '72',
					'name' => 'Space Gear'
				],
				[
					'id' => '883',
					'car_brand_id' => '72',
					'name' => 'Space Runner'
				],
				[
					'id' => '884',
					'car_brand_id' => '72',
					'name' => 'Space Star'
				],
				[
					'id' => '885',
					'car_brand_id' => '72',
					'name' => 'Space Wagon'
				],
				[
					'id' => '886',
					'car_brand_id' => '72',
					'name' => 'Starion'
				],
				[
					'id' => '887',
					'car_brand_id' => '72',
					'name' => 'Tredia'
				],
				[
					'id' => '888',
					'car_brand_id' => '73',
					'name' => '4 / 4'
				],
				[
					'id' => '889',
					'car_brand_id' => '73',
					'name' => 'Aero 8'
				],
				[
					'id' => '890',
					'car_brand_id' => '73',
					'name' => 'Plus 4'
				],
				[
					'id' => '891',
					'car_brand_id' => '73',
					'name' => 'Plus 8'
				],
				[
					'id' => '892',
					'car_brand_id' => '73',
					'name' => 'Roadster'
				],
				[
					'id' => '893',
					'car_brand_id' => '74',
					'name' => '100 NX'
				],
				[
					'id' => '894',
					'car_brand_id' => '74',
					'name' => '200 SX'
				],
				[
					'id' => '895',
					'car_brand_id' => '74',
					'name' => '240 SX'
				],
				[
					'id' => '896',
					'car_brand_id' => '74',
					'name' => '280 ZX'
				],
				[
					'id' => '897',
					'car_brand_id' => '74',
					'name' => '300 ZX'
				],
				[
					'id' => '898',
					'car_brand_id' => '74',
					'name' => '350Z'
				],
				[
					'id' => '899',
					'car_brand_id' => '74',
					'name' => '370Z'
				],
				[
					'id' => '900',
					'car_brand_id' => '74',
					'name' => 'Almera'
				],
				[
					'id' => '901',
					'car_brand_id' => '74',
					'name' => 'Almera Tino'
				],
				[
					'id' => '902',
					'car_brand_id' => '74',
					'name' => 'Altima'
				],
				[
					'id' => '903',
					'car_brand_id' => '74',
					'name' => 'Armada'
				],
				[
					'id' => '904',
					'car_brand_id' => '74',
					'name' => 'Bluebird'
				],
				[
					'id' => '905',
					'car_brand_id' => '74',
					'name' => 'Cabstar'
				],
				[
					'id' => '906',
					'car_brand_id' => '74',
					'name' => 'Cargo'
				],
				[
					'id' => '907',
					'car_brand_id' => '74',
					'name' => 'Cherry'
				],
				[
					'id' => '908',
					'car_brand_id' => '74',
					'name' => 'Cube'
				],
				[
					'id' => '909',
					'car_brand_id' => '74',
					'name' => 'e - NV200'
				],
				[
					'id' => '910',
					'car_brand_id' => '74',
					'name' => 'Evalia'
				],
				[
					'id' => '911',
					'car_brand_id' => '74',
					'name' => 'Frontier'
				],
				[
					'id' => '912',
					'car_brand_id' => '74',
					'name' => 'GT - R'
				],
				[
					'id' => '913',
					'car_brand_id' => '74',
					'name' => 'Interstar'
				],
				[
					'id' => '914',
					'car_brand_id' => '74',
					'name' => 'Juke'
				],
				[
					'id' => '915',
					'car_brand_id' => '74',
					'name' => 'King Cab'
				],
				[
					'id' => '916',
					'car_brand_id' => '74',
					'name' => 'Kubistar'
				],
				[
					'id' => '917',
					'car_brand_id' => '74',
					'name' => 'Laurel'
				],
				[
					'id' => '918',
					'car_brand_id' => '74',
					'name' => 'Leaf'
				],
				[
					'id' => '919',
					'car_brand_id' => '74',
					'name' => 'Maxima'
				],
				[
					'id' => '920',
					'car_brand_id' => '74',
					'name' => 'Micra'
				],
				[
					'id' => '921',
					'car_brand_id' => '74',
					'name' => 'Murano'
				],
				[
					'id' => '922',
					'car_brand_id' => '74',
					'name' => 'Navara'
				],
				[
					'id' => '923',
					'car_brand_id' => '74',
					'name' => 'Note'
				],
				[
					'id' => '924',
					'car_brand_id' => '74',
					'name' => 'NP 300'
				],
				[
					'id' => '925',
					'car_brand_id' => '74',
					'name' => 'NV200'
				],
				[
					'id' => '926',
					'car_brand_id' => '74',
					'name' => 'NV400'
				],
				[
					'id' => '927',
					'car_brand_id' => '74',
					'name' => 'Pathfinder'
				],
				[
					'id' => '928',
					'car_brand_id' => '74',
					'name' => 'Patrol'
				],
				[
					'id' => '929',
					'car_brand_id' => '74',
					'name' => 'PickUp'
				],
				[
					'id' => '930',
					'car_brand_id' => '74',
					'name' => 'Pixo'
				],
				[
					'id' => '931',
					'car_brand_id' => '74',
					'name' => 'Prairie'
				],
				[
					'id' => '932',
					'car_brand_id' => '74',
					'name' => 'Primastar'
				],
				[
					'id' => '933',
					'car_brand_id' => '74',
					'name' => 'Primera'
				],
				[
					'id' => '934',
					'car_brand_id' => '74',
					'name' => 'Pulsar'
				],
				[
					'id' => '935',
					'car_brand_id' => '74',
					'name' => 'Qashqai'
				],
				[
					'id' => '936',
					'car_brand_id' => '74',
					'name' => 'Qashqai + 2'
				],
				[
					'id' => '937',
					'car_brand_id' => '74',
					'name' => 'Quest'
				],
				[
					'id' => '938',
					'car_brand_id' => '74',
					'name' => 'Sentra'
				],
				[
					'id' => '939',
					'car_brand_id' => '74',
					'name' => 'Serena'
				],
				[
					'id' => '940',
					'car_brand_id' => '74',
					'name' => 'Silvia'
				],
				[
					'id' => '941',
					'car_brand_id' => '74',
					'name' => 'Skyline'
				],
				[
					'id' => '942',
					'car_brand_id' => '74',
					'name' => 'Sunny'
				],
				[
					'id' => '943',
					'car_brand_id' => '74',
					'name' => 'Terrano'
				],
				[
					'id' => '944',
					'car_brand_id' => '74',
					'name' => 'Tiida'
				],
				[
					'id' => '945',
					'car_brand_id' => '74',
					'name' => 'Titan'
				],
				[
					'id' => '946',
					'car_brand_id' => '74',
					'name' => 'Trade'
				],
				[
					'id' => '947',
					'car_brand_id' => '74',
					'name' => 'Urvan'
				],
				[
					'id' => '948',
					'car_brand_id' => '74',
					'name' => 'Vanette'
				],
				[
					'id' => '949',
					'car_brand_id' => '74',
					'name' => 'X - Trail'
				],
				[
					'id' => '950',
					'car_brand_id' => '76',
					'name' => 'Bravada'
				],
				[
					'id' => '951',
					'car_brand_id' => '76',
					'name' => 'Custom Cruiser'
				],
				[
					'id' => '952',
					'car_brand_id' => '76',
					'name' => 'Cutlass'
				],
				[
					'id' => '953',
					'car_brand_id' => '76',
					'name' => 'Delta 88'
				],
				[
					'id' => '954',
					'car_brand_id' => '76',
					'name' => 'Silhouette'
				],
				[
					'id' => '955',
					'car_brand_id' => '76',
					'name' => 'Supreme'
				],
				[
					'id' => '956',
					'car_brand_id' => '76',
					'name' => 'Toronado'
				],
				[
					'id' => '957',
					'car_brand_id' => '77',
					'name' => 'Adam'
				],
				[
					'id' => '958',
					'car_brand_id' => '77',
					'name' => 'Agila'
				],
				[
					'id' => '959',
					'car_brand_id' => '77',
					'name' => 'Ampera'
				],
				[
					'id' => '960',
					'car_brand_id' => '77',
					'name' => 'Antara'
				],
				[
					'id' => '961',
					'car_brand_id' => '77',
					'name' => 'Arena'
				],
				[
					'id' => '962',
					'car_brand_id' => '77',
					'name' => 'Ascona'
				],
				[
					'id' => '963',
					'car_brand_id' => '77',
					'name' => 'Astra'
				],
				[
					'id' => '964',
					'car_brand_id' => '77',
					'name' => 'Calibra'
				],
				[
					'id' => '965',
					'car_brand_id' => '77',
					'name' => 'Campo'
				],
				[
					'id' => '966',
					'car_brand_id' => '77',
					'name' => 'Cascada'
				],
				[
					'id' => '967',
					'car_brand_id' => '77',
					'name' => 'Cavalier'
				],
				[
					'id' => '968',
					'car_brand_id' => '77',
					'name' => 'Combo'
				],
				[
					'id' => '969',
					'car_brand_id' => '77',
					'name' => 'Commodore'
				],
				[
					'id' => '970',
					'car_brand_id' => '77',
					'name' => 'Corsa'
				],
				[
					'id' => '971',
					'car_brand_id' => '77',
					'name' => 'Diplomat'
				],
				[
					'id' => '972',
					'car_brand_id' => '77',
					'name' => 'Frontera'
				],
				[
					'id' => '973',
					'car_brand_id' => '77',
					'name' => 'GT'
				],
				[
					'id' => '974',
					'car_brand_id' => '77',
					'name' => 'Insignia'
				],
				[
					'id' => '975',
					'car_brand_id' => '77',
					'name' => 'Insignia CT'
				],
				[
					'id' => '976',
					'car_brand_id' => '77',
					'name' => 'Kadett'
				],
				[
					'id' => '977',
					'car_brand_id' => '77',
					'name' => 'Karl'
				],
				[
					'id' => '978',
					'car_brand_id' => '77',
					'name' => 'Manta'
				],
				[
					'id' => '979',
					'car_brand_id' => '77',
					'name' => 'Meriva'
				],
				[
					'id' => '980',
					'car_brand_id' => '77',
					'name' => 'Mokka'
				],
				[
					'id' => '981',
					'car_brand_id' => '77',
					'name' => 'Monterey'
				],
				[
					'id' => '982',
					'car_brand_id' => '77',
					'name' => 'Monza'
				],
				[
					'id' => '983',
					'car_brand_id' => '77',
					'name' => 'Movano'
				],
				[
					'id' => '984',
					'car_brand_id' => '77',
					'name' => 'Nova'
				],
				[
					'id' => '985',
					'car_brand_id' => '77',
					'name' => 'Omega'
				],
				[
					'id' => '986',
					'car_brand_id' => '77',
					'name' => 'Pick Up Sportscap'
				],
				[
					'id' => '987',
					'car_brand_id' => '77',
					'name' => 'Rekord'
				],
				[
					'id' => '988',
					'car_brand_id' => '77',
					'name' => 'Senator'
				],
				[
					'id' => '989',
					'car_brand_id' => '77',
					'name' => 'Signum'
				],
				[
					'id' => '990',
					'car_brand_id' => '77',
					'name' => 'Sintra'
				],
				[
					'id' => '991',
					'car_brand_id' => '77',
					'name' => 'Speedster'
				],
				[
					'id' => '992',
					'car_brand_id' => '77',
					'name' => 'Tigra'
				],
				[
					'id' => '993',
					'car_brand_id' => '77',
					'name' => 'Vectra'
				],
				[
					'id' => '994',
					'car_brand_id' => '77',
					'name' => 'Vivaro'
				],
				[
					'id' => '995',
					'car_brand_id' => '77',
					'name' => 'Zafira'
				],
				[
					'id' => '996',
					'car_brand_id' => '77',
					'name' => 'Zafira Tourer'
				],
				[
					'id' => '997',
					'car_brand_id' => '79',
					'name' => '1007'
				],
				[
					'id' => '998',
					'car_brand_id' => '79',
					'name' => '104'
				],
				[
					'id' => '999',
					'car_brand_id' => '79',
					'name' => '106'
				],
				[
					'id' => '1000',
					'car_brand_id' => '79',
					'name' => '107'
				],
				[
					'id' => '1001',
					'car_brand_id' => '79',
					'name' => '108'
				],
				[
					'id' => '1002',
					'car_brand_id' => '79',
					'name' => '2008'
				],
				[
					'id' => '1003',
					'car_brand_id' => '79',
					'name' => '204'
				],
				[
					'id' => '1004',
					'car_brand_id' => '79',
					'name' => '205'
				],
				[
					'id' => '1005',
					'car_brand_id' => '79',
					'name' => '206'
				],
				[
					'id' => '1006',
					'car_brand_id' => '79',
					'name' => '207'
				],
				[
					'id' => '1007',
					'car_brand_id' => '79',
					'name' => '208'
				],
				[
					'id' => '1008',
					'car_brand_id' => '79',
					'name' => '3008'
				],
				[
					'id' => '1009',
					'car_brand_id' => '79',
					'name' => '301'
				],
				[
					'id' => '1010',
					'car_brand_id' => '79',
					'name' => '304'
				],
				[
					'id' => '1011',
					'car_brand_id' => '79',
					'name' => '305'
				],
				[
					'id' => '1012',
					'car_brand_id' => '79',
					'name' => '306'
				],
				[
					'id' => '1013',
					'car_brand_id' => '79',
					'name' => '307'
				],
				[
					'id' => '1014',
					'car_brand_id' => '79',
					'name' => '308'
				],
				[
					'id' => '1015',
					'car_brand_id' => '79',
					'name' => '309'
				],
				[
					'id' => '1016',
					'car_brand_id' => '79',
					'name' => '4007'
				],
				[
					'id' => '1017',
					'car_brand_id' => '79',
					'name' => '4008'
				],
				[
					'id' => '1018',
					'car_brand_id' => '79',
					'name' => '404'
				],
				[
					'id' => '1019',
					'car_brand_id' => '79',
					'name' => '405'
				],
				[
					'id' => '1020',
					'car_brand_id' => '79',
					'name' => '406'
				],
				[
					'id' => '1021',
					'car_brand_id' => '79',
					'name' => '407'
				],
				[
					'id' => '1022',
					'car_brand_id' => '79',
					'name' => '5008'
				],
				[
					'id' => '1023',
					'car_brand_id' => '79',
					'name' => '504'
				],
				[
					'id' => '1024',
					'car_brand_id' => '79',
					'name' => '505'
				],
				[
					'id' => '1025',
					'car_brand_id' => '79',
					'name' => '508'
				],
				[
					'id' => '1026',
					'car_brand_id' => '79',
					'name' => '604'
				],
				[
					'id' => '1027',
					'car_brand_id' => '79',
					'name' => '605'
				],
				[
					'id' => '1028',
					'car_brand_id' => '79',
					'name' => '607'
				],
				[
					'id' => '1029',
					'car_brand_id' => '79',
					'name' => '806'
				],
				[
					'id' => '1030',
					'car_brand_id' => '79',
					'name' => '807'
				],
				[
					'id' => '1031',
					'car_brand_id' => '79',
					'name' => 'Bipper'
				],
				[
					'id' => '1032',
					'car_brand_id' => '79',
					'name' => 'Bipper Tepee'
				],
				[
					'id' => '1033',
					'car_brand_id' => '79',
					'name' => 'Boxer'
				],
				[
					'id' => '1034',
					'car_brand_id' => '79',
					'name' => 'Expert'
				],
				[
					'id' => '1035',
					'car_brand_id' => '79',
					'name' => 'Expert Tepee'
				],
				[
					'id' => '1036',
					'car_brand_id' => '79',
					'name' => 'iOn'
				],
				[
					'id' => '1037',
					'car_brand_id' => '79',
					'name' => 'J5'
				],
				[
					'id' => '1038',
					'car_brand_id' => '79',
					'name' => 'Partner'
				],
				[
					'id' => '1039',
					'car_brand_id' => '79',
					'name' => 'Partner Tepee'
				],
				[
					'id' => '1040',
					'car_brand_id' => '79',
					'name' => 'RCZ'
				],
				[
					'id' => '1041',
					'car_brand_id' => '79',
					'name' => 'TePee'
				],
				[
					'id' => '1042',
					'car_brand_id' => '80',
					'name' => 'APE'
				],
				[
					'id' => '1043',
					'car_brand_id' => '80',
					'name' => 'APE TM'
				],
				[
					'id' => '1044',
					'car_brand_id' => '80',
					'name' => 'Porter'
				],
				[
					'id' => '1045',
					'car_brand_id' => '81',
					'name' => 'Prowler'
				],
				[
					'id' => '1046',
					'car_brand_id' => '82',
					'name' => '6000'
				],
				[
					'id' => '1047',
					'car_brand_id' => '82',
					'name' => 'Bonneville'
				],
				[
					'id' => '1048',
					'car_brand_id' => '82',
					'name' => 'Fiero'
				],
				[
					'id' => '1049',
					'car_brand_id' => '82',
					'name' => 'Firebird'
				],
				[
					'id' => '1050',
					'car_brand_id' => '82',
					'name' => 'G6'
				],
				[
					'id' => '1051',
					'car_brand_id' => '82',
					'name' => 'Grand - Am'
				],
				[
					'id' => '1052',
					'car_brand_id' => '82',
					'name' => 'Grand - Prix'
				],
				[
					'id' => '1053',
					'car_brand_id' => '82',
					'name' => 'GTO'
				],
				[
					'id' => '1054',
					'car_brand_id' => '82',
					'name' => 'Montana'
				],
				[
					'id' => '1055',
					'car_brand_id' => '82',
					'name' => 'Solstice'
				],
				[
					'id' => '1056',
					'car_brand_id' => '82',
					'name' => 'Sunbird'
				],
				[
					'id' => '1057',
					'car_brand_id' => '82',
					'name' => 'Sunfire'
				],
				[
					'id' => '1058',
					'car_brand_id' => '82',
					'name' => 'Targa'
				],
				[
					'id' => '1059',
					'car_brand_id' => '82',
					'name' => 'Trans Am'
				],
				[
					'id' => '1060',
					'car_brand_id' => '82',
					'name' => 'Trans Sport'
				],
				[
					'id' => '1061',
					'car_brand_id' => '82',
					'name' => 'Vibe'
				],
				[
					'id' => '1062',
					'car_brand_id' => '83',
					'name' => '356'
				],
				[
					'id' => '1063',
					'car_brand_id' => '83',
					'name' => '911'
				],
				[
					'id' => '1064',
					'car_brand_id' => '83',
					'name' => '912'
				],
				[
					'id' => '1065',
					'car_brand_id' => '83',
					'name' => '914'
				],
				[
					'id' => '1066',
					'car_brand_id' => '83',
					'name' => '918'
				],
				[
					'id' => '1067',
					'car_brand_id' => '83',
					'name' => '924'
				],
				[
					'id' => '1068',
					'car_brand_id' => '83',
					'name' => '928'
				],
				[
					'id' => '1069',
					'car_brand_id' => '83',
					'name' => '944'
				],
				[
					'id' => '1070',
					'car_brand_id' => '83',
					'name' => '959'
				],
				[
					'id' => '1071',
					'car_brand_id' => '83',
					'name' => '962'
				],
				[
					'id' => '1072',
					'car_brand_id' => '83',
					'name' => '968'
				],
				[
					'id' => '1073',
					'car_brand_id' => '83',
					'name' => 'Boxster'
				],
				[
					'id' => '1074',
					'car_brand_id' => '83',
					'name' => 'Carrera GT'
				],
				[
					'id' => '1075',
					'car_brand_id' => '83',
					'name' => 'Cayenne'
				],
				[
					'id' => '1076',
					'car_brand_id' => '83',
					'name' => 'Cayman'
				],
				[
					'id' => '1077',
					'car_brand_id' => '83',
					'name' => 'Macan'
				],
				[
					'id' => '1078',
					'car_brand_id' => '83',
					'name' => 'Panamera'
				],
				[
					'id' => '1079',
					'car_brand_id' => '84',
					'name' => '300 Serie'
				],
				[
					'id' => '1080',
					'car_brand_id' => '84',
					'name' => '400 Serie'
				],
				[
					'id' => '1081',
					'car_brand_id' => '85',
					'name' => 'Alpine A110'
				],
				[
					'id' => '1082',
					'car_brand_id' => '85',
					'name' => 'Alpine A310'
				],
				[
					'id' => '1083',
					'car_brand_id' => '85',
					'name' => 'Alpine V6'
				],
				[
					'id' => '1084',
					'car_brand_id' => '85',
					'name' => 'Avantime'
				],
				[
					'id' => '1085',
					'car_brand_id' => '85',
					'name' => 'Captur'
				],
				[
					'id' => '1086',
					'car_brand_id' => '85',
					'name' => 'Clio'
				],
				[
					'id' => '1087',
					'car_brand_id' => '85',
					'name' => 'Coupe'
				],
				[
					'id' => '1088',
					'car_brand_id' => '85',
					'name' => 'Espace'
				],
				[
					'id' => '1089',
					'car_brand_id' => '85',
					'name' => 'Express'
				],
				[
					'id' => '1090',
					'car_brand_id' => '85',
					'name' => 'Fluence'
				],
				[
					'id' => '1091',
					'car_brand_id' => '85',
					'name' => 'Fuego'
				],
				[
					'id' => '1092',
					'car_brand_id' => '85',
					'name' => 'Grand Espace'
				],
				[
					'id' => '1093',
					'car_brand_id' => '85',
					'name' => 'Grand Modus'
				],
				[
					'id' => '1094',
					'car_brand_id' => '85',
					'name' => 'Grand Scenic'
				],
				[
					'id' => '1095',
					'car_brand_id' => '85',
					'name' => 'Kadjar'
				],
				[
					'id' => '1096',
					'car_brand_id' => '85',
					'name' => 'Kangoo'
				],
				[
					'id' => '1097',
					'car_brand_id' => '85',
					'name' => 'Koleos'
				],
				[
					'id' => '1098',
					'car_brand_id' => '85',
					'name' => 'Laguna'
				],
				[
					'id' => '1099',
					'car_brand_id' => '85',
					'name' => 'Latitude'
				],
				[
					'id' => '1100',
					'car_brand_id' => '85',
					'name' => 'Mascott'
				],
				[
					'id' => '1101',
					'car_brand_id' => '85',
					'name' => 'Master'
				],
				[
					'id' => '1102',
					'car_brand_id' => '85',
					'name' => 'Megane'
				],
				[
					'id' => '1103',
					'car_brand_id' => '85',
					'name' => 'Modus'
				],
				[
					'id' => '1104',
					'car_brand_id' => '85',
					'name' => 'P 1400'
				],
				[
					'id' => '1105',
					'car_brand_id' => '85',
					'name' => 'R 11'
				],
				[
					'id' => '1106',
					'car_brand_id' => '85',
					'name' => 'R 14'
				],
				[
					'id' => '1107',
					'car_brand_id' => '85',
					'name' => 'R 18'
				],
				[
					'id' => '1108',
					'car_brand_id' => '85',
					'name' => 'R 19'
				],
				[
					'id' => '1109',
					'car_brand_id' => '85',
					'name' => 'R 20'
				],
				[
					'id' => '1110',
					'car_brand_id' => '85',
					'name' => 'R 21'
				],
				[
					'id' => '1111',
					'car_brand_id' => '85',
					'name' => 'R 25'
				],
				[
					'id' => '1112',
					'car_brand_id' => '85',
					'name' => 'R 30'
				],
				[
					'id' => '1113',
					'car_brand_id' => '85',
					'name' => 'R 4'
				],
				[
					'id' => '1114',
					'car_brand_id' => '85',
					'name' => 'R 5'
				],
				[
					'id' => '1115',
					'car_brand_id' => '85',
					'name' => 'R 6'
				],
				[
					'id' => '1116',
					'car_brand_id' => '85',
					'name' => 'R 9'
				],
				[
					'id' => '1117',
					'car_brand_id' => '85',
					'name' => 'Rapid'
				],
				[
					'id' => '1118',
					'car_brand_id' => '85',
					'name' => 'Safrane'
				],
				[
					'id' => '1119',
					'car_brand_id' => '85',
					'name' => 'Scenic'
				],
				[
					'id' => '1120',
					'car_brand_id' => '85',
					'name' => 'Spider'
				],
				[
					'id' => '1121',
					'car_brand_id' => '85',
					'name' => 'Trafic'
				],
				[
					'id' => '1122',
					'car_brand_id' => '85',
					'name' => 'Twingo'
				],
				[
					'id' => '1123',
					'car_brand_id' => '85',
					'name' => 'Twizy'
				],
				[
					'id' => '1124',
					'car_brand_id' => '85',
					'name' => 'Vel Satis'
				],
				[
					'id' => '1125',
					'car_brand_id' => '85',
					'name' => 'Wind'
				],
				[
					'id' => '1126',
					'car_brand_id' => '85',
					'name' => 'ZOE'
				],
				[
					'id' => '1127',
					'car_brand_id' => '86',
					'name' => 'Corniche'
				],
				[
					'id' => '1128',
					'car_brand_id' => '86',
					'name' => 'Flying Spur'
				],
				[
					'id' => '1129',
					'car_brand_id' => '86',
					'name' => 'Ghost'
				],
				[
					'id' => '1130',
					'car_brand_id' => '86',
					'name' => 'Park Ward'
				],
				[
					'id' => '1131',
					'car_brand_id' => '86',
					'name' => 'Phantom'
				],
				[
					'id' => '1132',
					'car_brand_id' => '86',
					'name' => 'Silver Cloud'
				],
				[
					'id' => '1133',
					'car_brand_id' => '86',
					'name' => 'Silver Dawn'
				],
				[
					'id' => '1134',
					'car_brand_id' => '86',
					'name' => 'Silver Seraph'
				],
				[
					'id' => '1135',
					'car_brand_id' => '86',
					'name' => 'Silver Shadow'
				],
				[
					'id' => '1136',
					'car_brand_id' => '86',
					'name' => 'Silver Spirit'
				],
				[
					'id' => '1137',
					'car_brand_id' => '86',
					'name' => 'Silver Spur'
				],
				[
					'id' => '1138',
					'car_brand_id' => '86',
					'name' => 'Wraith'
				],
				[
					'id' => '1139',
					'car_brand_id' => '87',
					'name' => '100'
				],
				[
					'id' => '1140',
					'car_brand_id' => '87',
					'name' => '111'
				],
				[
					'id' => '1141',
					'car_brand_id' => '87',
					'name' => '114'
				],
				[
					'id' => '1142',
					'car_brand_id' => '87',
					'name' => '115'
				],
				[
					'id' => '1143',
					'car_brand_id' => '87',
					'name' => '200'
				],
				[
					'id' => '1144',
					'car_brand_id' => '87',
					'name' => '213'
				],
				[
					'id' => '1145',
					'car_brand_id' => '87',
					'name' => '214'
				],
				[
					'id' => '1146',
					'car_brand_id' => '87',
					'name' => '216'
				],
				[
					'id' => '1147',
					'car_brand_id' => '87',
					'name' => '218'
				],
				[
					'id' => '1148',
					'car_brand_id' => '87',
					'name' => '220'
				],
				[
					'id' => '1149',
					'car_brand_id' => '87',
					'name' => '25'
				],
				[
					'id' => '1150',
					'car_brand_id' => '87',
					'name' => '400'
				],
				[
					'id' => '1151',
					'car_brand_id' => '87',
					'name' => '414'
				],
				[
					'id' => '1152',
					'car_brand_id' => '87',
					'name' => '416'
				],
				[
					'id' => '1153',
					'car_brand_id' => '87',
					'name' => '418'
				],
				[
					'id' => '1154',
					'car_brand_id' => '87',
					'name' => '420'
				],
				[
					'id' => '1155',
					'car_brand_id' => '87',
					'name' => '45'
				],
				[
					'id' => '1156',
					'car_brand_id' => '87',
					'name' => '600'
				],
				[
					'id' => '1157',
					'car_brand_id' => '87',
					'name' => '618'
				],
				[
					'id' => '1158',
					'car_brand_id' => '87',
					'name' => '620'
				],
				[
					'id' => '1159',
					'car_brand_id' => '87',
					'name' => '623'
				],
				[
					'id' => '1160',
					'car_brand_id' => '87',
					'name' => '75'
				],
				[
					'id' => '1161',
					'car_brand_id' => '87',
					'name' => '800'
				],
				[
					'id' => '1162',
					'car_brand_id' => '87',
					'name' => '820'
				],
				[
					'id' => '1163',
					'car_brand_id' => '87',
					'name' => '825'
				],
				[
					'id' => '1164',
					'car_brand_id' => '87',
					'name' => '827'
				],
				[
					'id' => '1165',
					'car_brand_id' => '87',
					'name' => 'City Rover'
				],
				[
					'id' => '1166',
					'car_brand_id' => '87',
					'name' => 'Metro'
				],
				[
					'id' => '1167',
					'car_brand_id' => '87',
					'name' => 'Montego'
				],
				[
					'id' => '1168',
					'car_brand_id' => '87',
					'name' => 'SD'
				],
				[
					'id' => '1169',
					'car_brand_id' => '87',
					'name' => 'Streetwise'
				],
				[
					'id' => '1170',
					'car_brand_id' => '89',
					'name' => '9 - 3'
				],
				[
					'id' => '1171',
					'car_brand_id' => '89',
					'name' => '9 - 4X'
				],
				[
					'id' => '1172',
					'car_brand_id' => '89',
					'name' => '9 - 5'
				],
				[
					'id' => '1173',
					'car_brand_id' => '89',
					'name' => '9 - 7X'
				],
				[
					'id' => '1174',
					'car_brand_id' => '89',
					'name' => '90'
				],
				[
					'id' => '1175',
					'car_brand_id' => '89',
					'name' => '900'
				],
				[
					'id' => '1176',
					'car_brand_id' => '89',
					'name' => '9000'
				],
				[
					'id' => '1177',
					'car_brand_id' => '89',
					'name' => '96'
				],
				[
					'id' => '1178',
					'car_brand_id' => '89',
					'name' => '99'
				],
				[
					'id' => '1179',
					'car_brand_id' => '91',
					'name' => 'Alhambra'
				],
				[
					'id' => '1180',
					'car_brand_id' => '91',
					'name' => 'Altea'
				],
				[
					'id' => '1181',
					'car_brand_id' => '91',
					'name' => 'Arosa'
				],
				[
					'id' => '1182',
					'car_brand_id' => '91',
					'name' => 'Cordoba'
				],
				[
					'id' => '1183',
					'car_brand_id' => '91',
					'name' => 'Exeo'
				],
				[
					'id' => '1184',
					'car_brand_id' => '91',
					'name' => 'Ibiza'
				],
				[
					'id' => '1185',
					'car_brand_id' => '91',
					'name' => 'Inca'
				],
				[
					'id' => '1186',
					'car_brand_id' => '91',
					'name' => 'Leon'
				],
				[
					'id' => '1187',
					'car_brand_id' => '91',
					'name' => 'Malaga'
				],
				[
					'id' => '1188',
					'car_brand_id' => '91',
					'name' => 'Marbella'
				],
				[
					'id' => '1189',
					'car_brand_id' => '91',
					'name' => 'Mii'
				],
				[
					'id' => '1190',
					'car_brand_id' => '91',
					'name' => 'Terra'
				],
				[
					'id' => '1191',
					'car_brand_id' => '91',
					'name' => 'Toledo'
				],
				[
					'id' => '1192',
					'car_brand_id' => '92',
					'name' => '105'
				],
				[
					'id' => '1193',
					'car_brand_id' => '92',
					'name' => '120'
				],
				[
					'id' => '1194',
					'car_brand_id' => '92',
					'name' => '130'
				],
				[
					'id' => '1195',
					'car_brand_id' => '92',
					'name' => '135'
				],
				[
					'id' => '1196',
					'car_brand_id' => '92',
					'name' => 'Citigo'
				],
				[
					'id' => '1197',
					'car_brand_id' => '92',
					'name' => 'Fabia'
				],
				[
					'id' => '1198',
					'car_brand_id' => '92',
					'name' => 'Favorit'
				],
				[
					'id' => '1199',
					'car_brand_id' => '92',
					'name' => 'Felicia'
				],
				[
					'id' => '1200',
					'car_brand_id' => '92',
					'name' => 'Forman'
				],
				[
					'id' => '1201',
					'car_brand_id' => '92',
					'name' => 'Octavia'
				],
				[
					'id' => '1202',
					'car_brand_id' => '92',
					'name' => 'Pick - up'
				],
				[
					'id' => '1203',
					'car_brand_id' => '92',
					'name' => 'Praktik'
				],
				[
					'id' => '1204',
					'car_brand_id' => '92',
					'name' => 'Rapid'
				],
				[
					'id' => '1205',
					'car_brand_id' => '92',
					'name' => 'Roomster'
				],
				[
					'id' => '1206',
					'car_brand_id' => '92',
					'name' => 'Superb'
				],
				[
					'id' => '1207',
					'car_brand_id' => '92',
					'name' => 'Yeti'
				],
				[
					'id' => '1208',
					'car_brand_id' => '93',
					'name' => 'Crossblade'
				],
				[
					'id' => '1209',
					'car_brand_id' => '93',
					'name' => 'ForFour'
				],
				[
					'id' => '1210',
					'car_brand_id' => '93',
					'name' => 'ForTwo'
				],
				[
					'id' => '1211',
					'car_brand_id' => '93',
					'name' => 'Roadster'
				],
				[
					'id' => '1212',
					'car_brand_id' => '95',
					'name' => 'C8'
				],
				[
					'id' => '1213',
					'car_brand_id' => '95',
					'name' => 'C8 AILERON'
				],
				[
					'id' => '1214',
					'car_brand_id' => '95',
					'name' => 'C8 DOUBLE 12 S'
				],
				[
					'id' => '1215',
					'car_brand_id' => '95',
					'name' => 'C8 LAVIOLETTE SWB'
				],
				[
					'id' => '1216',
					'car_brand_id' => '95',
					'name' => 'C8 SPYDER SWB'
				],
				[
					'id' => '1217',
					'car_brand_id' => '96',
					'name' => 'Actyon'
				],
				[
					'id' => '1218',
					'car_brand_id' => '96',
					'name' => 'Family'
				],
				[
					'id' => '1219',
					'car_brand_id' => '96',
					'name' => 'Korando'
				],
				[
					'id' => '1220',
					'car_brand_id' => '96',
					'name' => 'Kyron'
				],
				[
					'id' => '1221',
					'car_brand_id' => '96',
					'name' => 'MUSSO'
				],
				[
					'id' => '1222',
					'car_brand_id' => '96',
					'name' => 'REXTON'
				],
				[
					'id' => '1223',
					'car_brand_id' => '96',
					'name' => 'Rodius'
				],
				[
					'id' => '1224',
					'car_brand_id' => '96',
					'name' => 'Tivoli'
				],
				[
					'id' => '1225',
					'car_brand_id' => '97',
					'name' => 'B9 Tribeca'
				],
				[
					'id' => '1226',
					'car_brand_id' => '97',
					'name' => 'Baja'
				],
				[
					'id' => '1227',
					'car_brand_id' => '97',
					'name' => 'BRZ'
				],
				[
					'id' => '1228',
					'car_brand_id' => '97',
					'name' => 'Forester'
				],
				[
					'id' => '1229',
					'car_brand_id' => '97',
					'name' => 'Impreza'
				],
				[
					'id' => '1230',
					'car_brand_id' => '97',
					'name' => 'Justy'
				],
				[
					'id' => '1231',
					'car_brand_id' => '97',
					'name' => 'Legacy'
				],
				[
					'id' => '1232',
					'car_brand_id' => '97',
					'name' => 'Libero'
				],
				[
					'id' => '1233',
					'car_brand_id' => '97',
					'name' => 'OUTBACK'
				],
				[
					'id' => '1234',
					'car_brand_id' => '97',
					'name' => 'SVX'
				],
				[
					'id' => '1235',
					'car_brand_id' => '97',
					'name' => 'Trezia'
				],
				[
					'id' => '1236',
					'car_brand_id' => '97',
					'name' => 'Tribeca'
				],
				[
					'id' => '1237',
					'car_brand_id' => '97',
					'name' => 'Vivio'
				],
				[
					'id' => '1238',
					'car_brand_id' => '97',
					'name' => 'XT'
				],
				[
					'id' => '1239',
					'car_brand_id' => '97',
					'name' => 'XV'
				],
				[
					'id' => '1240',
					'car_brand_id' => '98',
					'name' => 'Alto'
				],
				[
					'id' => '1241',
					'car_brand_id' => '98',
					'name' => 'Baleno'
				],
				[
					'id' => '1242',
					'car_brand_id' => '98',
					'name' => 'Cappuccino'
				],
				[
					'id' => '1243',
					'car_brand_id' => '98',
					'name' => 'Carry'
				],
				[
					'id' => '1244',
					'car_brand_id' => '98',
					'name' => 'Celerio'
				],
				[
					'id' => '1245',
					'car_brand_id' => '98',
					'name' => 'Grand Vitara'
				],
				[
					'id' => '1246',
					'car_brand_id' => '98',
					'name' => 'Ignis'
				],
				[
					'id' => '1247',
					'car_brand_id' => '98',
					'name' => 'Jimny'
				],
				[
					'id' => '1248',
					'car_brand_id' => '98',
					'name' => 'Kizashi'
				],
				[
					'id' => '1249',
					'car_brand_id' => '98',
					'name' => 'Liana'
				],
				[
					'id' => '1250',
					'car_brand_id' => '98',
					'name' => 'LJ'
				],
				[
					'id' => '1251',
					'car_brand_id' => '98',
					'name' => 'SJ Samurai'
				],
				[
					'id' => '1252',
					'car_brand_id' => '98',
					'name' => 'Splash'
				],
				[
					'id' => '1253',
					'car_brand_id' => '98',
					'name' => 'Super - Carry'
				],
				[
					'id' => '1254',
					'car_brand_id' => '98',
					'name' => 'Swift'
				],
				[
					'id' => '1255',
					'car_brand_id' => '98',
					'name' => 'SX4'
				],
				[
					'id' => '1256',
					'car_brand_id' => '98',
					'name' => 'SX4 S - Cross'
				],
				[
					'id' => '1257',
					'car_brand_id' => '98',
					'name' => 'Vitara'
				],
				[
					'id' => '1258',
					'car_brand_id' => '98',
					'name' => 'Wagon R + '
				],
				[
					'id' => '1259',
					'car_brand_id' => '98',
					'name' => 'X - 90'
				],
				[
					'id' => '1260',
					'car_brand_id' => '99',
					'name' => 'Horizon'
				],
				[
					'id' => '1261',
					'car_brand_id' => '99',
					'name' => 'Samba'
				],
				[
					'id' => '1262',
					'car_brand_id' => '100',
					'name' => 'Indica'
				],
				[
					'id' => '1263',
					'car_brand_id' => '100',
					'name' => 'Indigo'
				],
				[
					'id' => '1264',
					'car_brand_id' => '100',
					'name' => 'Nano'
				],
				[
					'id' => '1265',
					'car_brand_id' => '100',
					'name' => 'Safari'
				],
				[
					'id' => '1266',
					'car_brand_id' => '100',
					'name' => 'Sumo'
				],
				[
					'id' => '1267',
					'car_brand_id' => '100',
					'name' => 'Telcoline'
				],
				[
					'id' => '1268',
					'car_brand_id' => '100',
					'name' => 'Telcosport'
				],
				[
					'id' => '1269',
					'car_brand_id' => '100',
					'name' => 'Xenon'
				],
				[
					'id' => '1270',
					'car_brand_id' => '102',
					'name' => 'Model 3'
				],
				[
					'id' => '1271',
					'car_brand_id' => '102',
					'name' => 'Model S'
				],
				[
					'id' => '1272',
					'car_brand_id' => '102',
					'name' => 'Model X'
				],
				[
					'id' => '1273',
					'car_brand_id' => '102',
					'name' => 'Roadster'
				],
				[
					'id' => '1274',
					'car_brand_id' => '103',
					'name' => '4 - Runner'
				],
				[
					'id' => '1275',
					'car_brand_id' => '103',
					'name' => 'Auris'
				],
				[
					'id' => '1276',
					'car_brand_id' => '103',
					'name' => 'Auris Touring Sports'
				],
				[
					'id' => '1277',
					'car_brand_id' => '103',
					'name' => 'Avalon'
				],
				[
					'id' => '1278',
					'car_brand_id' => '103',
					'name' => 'Avensis'
				],
				[
					'id' => '1279',
					'car_brand_id' => '103',
					'name' => 'Avensis Verso'
				],
				[
					'id' => '1280',
					'car_brand_id' => '103',
					'name' => 'Aygo'
				],
				[
					'id' => '1281',
					'car_brand_id' => '103',
					'name' => 'Camry'
				],
				[
					'id' => '1282',
					'car_brand_id' => '103',
					'name' => 'Carina'
				],
				[
					'id' => '1283',
					'car_brand_id' => '103',
					'name' => 'Celica'
				],
				[
					'id' => '1284',
					'car_brand_id' => '103',
					'name' => 'Corolla'
				],
				[
					'id' => '1285',
					'car_brand_id' => '103',
					'name' => 'Corolla Verso'
				],
				[
					'id' => '1286',
					'car_brand_id' => '103',
					'name' => 'Cressida'
				],
				[
					'id' => '1287',
					'car_brand_id' => '103',
					'name' => 'Crown'
				],
				[
					'id' => '1288',
					'car_brand_id' => '103',
					'name' => 'Dyna'
				],
				[
					'id' => '1289',
					'car_brand_id' => '103',
					'name' => 'FCV'
				],
				[
					'id' => '1290',
					'car_brand_id' => '103',
					'name' => 'FJ'
				],
				[
					'id' => '1291',
					'car_brand_id' => '103',
					'name' => 'GT86'
				],
				[
					'id' => '1292',
					'car_brand_id' => '103',
					'name' => 'Hiace'
				],
				[
					'id' => '1293',
					'car_brand_id' => '103',
					'name' => 'Highlander'
				],
				[
					'id' => '1294',
					'car_brand_id' => '103',
					'name' => 'Hilux'
				],
				[
					'id' => '1295',
					'car_brand_id' => '103',
					'name' => 'IQ'
				],
				[
					'id' => '1296',
					'car_brand_id' => '103',
					'name' => 'Land Cruiser'
				],
				[
					'id' => '1297',
					'car_brand_id' => '103',
					'name' => 'Lite - Ace'
				],
				[
					'id' => '1298',
					'car_brand_id' => '103',
					'name' => 'MR 2'
				],
				[
					'id' => '1299',
					'car_brand_id' => '103',
					'name' => 'Paseo'
				],
				[
					'id' => '1300',
					'car_brand_id' => '103',
					'name' => 'Picnic'
				],
				[
					'id' => '1301',
					'car_brand_id' => '103',
					'name' => 'Previa'
				],
				[
					'id' => '1302',
					'car_brand_id' => '103',
					'name' => 'Prius'
				],
				[
					'id' => '1303',
					'car_brand_id' => '103',
					'name' => 'Prius + '
				],
				[
					'id' => '1304',
					'car_brand_id' => '103',
					'name' => 'Proace'
				],
				[
					'id' => '1305',
					'car_brand_id' => '103',
					'name' => 'RAV 4'
				],
				[
					'id' => '1306',
					'car_brand_id' => '103',
					'name' => 'Sequoia'
				],
				[
					'id' => '1307',
					'car_brand_id' => '103',
					'name' => 'Sienna'
				],
				[
					'id' => '1308',
					'car_brand_id' => '103',
					'name' => 'Starlet'
				],
				[
					'id' => '1309',
					'car_brand_id' => '103',
					'name' => 'Supra'
				],
				[
					'id' => '1310',
					'car_brand_id' => '103',
					'name' => 'Tacoma'
				],
				[
					'id' => '1311',
					'car_brand_id' => '103',
					'name' => 'Tercel'
				],
				[
					'id' => '1312',
					'car_brand_id' => '103',
					'name' => 'Tundra'
				],
				[
					'id' => '1313',
					'car_brand_id' => '103',
					'name' => 'Urban Cruiser'
				],
				[
					'id' => '1314',
					'car_brand_id' => '103',
					'name' => 'Verso'
				],
				[
					'id' => '1315',
					'car_brand_id' => '103',
					'name' => 'Verso - S'
				],
				[
					'id' => '1316',
					'car_brand_id' => '103',
					'name' => 'Yaris'
				],
				[
					'id' => '1317',
					'car_brand_id' => '104',
					'name' => '601'
				],
				[
					'id' => '1318',
					'car_brand_id' => '105',
					'name' => 'Dolomite'
				],
				[
					'id' => '1319',
					'car_brand_id' => '105',
					'name' => 'Moss'
				],
				[
					'id' => '1320',
					'car_brand_id' => '105',
					'name' => 'Spitfire'
				],
				[
					'id' => '1321',
					'car_brand_id' => '105',
					'name' => 'TR3'
				],
				[
					'id' => '1322',
					'car_brand_id' => '105',
					'name' => 'TR4'
				],
				[
					'id' => '1323',
					'car_brand_id' => '105',
					'name' => 'TR5'
				],
				[
					'id' => '1324',
					'car_brand_id' => '105',
					'name' => 'TR6'
				],
				[
					'id' => '1325',
					'car_brand_id' => '105',
					'name' => 'TR7'
				],
				[
					'id' => '1326',
					'car_brand_id' => '105',
					'name' => 'TR8'
				],
				[
					'id' => '1327',
					'car_brand_id' => '106',
					'name' => 'Chimaera'
				],
				[
					'id' => '1328',
					'car_brand_id' => '106',
					'name' => 'Griffith'
				],
				[
					'id' => '1329',
					'car_brand_id' => '106',
					'name' => 'Tuscan'
				],
				[
					'id' => '1330',
					'car_brand_id' => '107',
					'name' => '181'
				],
				[
					'id' => '1331',
					'car_brand_id' => '107',
					'name' => 'Amarok'
				],
				[
					'id' => '1332',
					'car_brand_id' => '107',
					'name' => 'Beetle'
				],
				[
					'id' => '1333',
					'car_brand_id' => '107',
					'name' => 'Bora'
				],
				[
					'id' => '1334',
					'car_brand_id' => '107',
					'name' => 'Buggy'
				],
				[
					'id' => '1335',
					'car_brand_id' => '107',
					'name' => 'Caddy'
				],
				[
					'id' => '1336',
					'car_brand_id' => '107',
					'name' => 'CC'
				],
				[
					'id' => '1337',
					'car_brand_id' => '107',
					'name' => 'Corrado'
				],
				[
					'id' => '1338',
					'car_brand_id' => '107',
					'name' => 'Crafter'
				],
				[
					'id' => '1339',
					'car_brand_id' => '107',
					'name' => 'Eos'
				],
				[
					'id' => '1340',
					'car_brand_id' => '107',
					'name' => 'Fox'
				],
				[
					'id' => '1341',
					'car_brand_id' => '107',
					'name' => 'Golf'
				],
				[
					'id' => '1342',
					'car_brand_id' => '107',
					'name' => 'Iltis'
				],
				[
					'id' => '1343',
					'car_brand_id' => '107',
					'name' => 'Jetta'
				],
				[
					'id' => '1344',
					'car_brand_id' => '107',
					'name' => 'Karmann Ghia'
				],
				[
					'id' => '1345',
					'car_brand_id' => '107',
					'name' => 'KÃ¤fer'
				],
				[
					'id' => '1346',
					'car_brand_id' => '107',
					'name' => 'LT'
				],
				[
					'id' => '1347',
					'car_brand_id' => '107',
					'name' => 'Lupo'
				],
				[
					'id' => '1348',
					'car_brand_id' => '107',
					'name' => 'new Beetle'
				],
				[
					'id' => '1349',
					'car_brand_id' => '107',
					'name' => 'Passat'
				],
				[
					'id' => '1350',
					'car_brand_id' => '107',
					'name' => 'Phaeton'
				],
				[
					'id' => '1351',
					'car_brand_id' => '107',
					'name' => 'Polo'
				],
				[
					'id' => '1352',
					'car_brand_id' => '107',
					'name' => 'Routan'
				],
				[
					'id' => '1353',
					'car_brand_id' => '107',
					'name' => 'Santana'
				],
				[
					'id' => '1354',
					'car_brand_id' => '107',
					'name' => 'Scirocco'
				],
				[
					'id' => '1355',
					'car_brand_id' => '107',
					'name' => 'Sharan'
				],
				[
					'id' => '1356',
					'car_brand_id' => '107',
					'name' => 'T1'
				],
				[
					'id' => '1357',
					'car_brand_id' => '107',
					'name' => 'T2'
				],
				[
					'id' => '1358',
					'car_brand_id' => '107',
					'name' => 'T3'
				],
				[
					'id' => '1359',
					'car_brand_id' => '107',
					'name' => 'T4'
				],
				[
					'id' => '1360',
					'car_brand_id' => '107',
					'name' => 'T5'
				],
				[
					'id' => '1361',
					'car_brand_id' => '107',
					'name' => 'T6'
				],
				[
					'id' => '1362',
					'car_brand_id' => '107',
					'name' => 'Taro'
				],
				[
					'id' => '1363',
					'car_brand_id' => '107',
					'name' => 'Tiguan'
				],
				[
					'id' => '1364',
					'car_brand_id' => '107',
					'name' => 'Touareg'
				],
				[
					'id' => '1365',
					'car_brand_id' => '107',
					'name' => 'Touran'
				],
				[
					'id' => '1366',
					'car_brand_id' => '107',
					'name' => 'up!'
				],
				[
					'id' => '1367',
					'car_brand_id' => '107',
					'name' => 'Vento'
				],
				[
					'id' => '1368',
					'car_brand_id' => '107',
					'name' => 'XL1'
				],
				[
					'id' => '1369',
					'car_brand_id' => '108',
					'name' => '240'
				],
				[
					'id' => '1370',
					'car_brand_id' => '108',
					'name' => '244'
				],
				[
					'id' => '1371',
					'car_brand_id' => '108',
					'name' => '245'
				],
				[
					'id' => '1372',
					'car_brand_id' => '108',
					'name' => '262'
				],
				[
					'id' => '1373',
					'car_brand_id' => '108',
					'name' => '264'
				],
				[
					'id' => '1374',
					'car_brand_id' => '108',
					'name' => '340'
				],
				[
					'id' => '1375',
					'car_brand_id' => '108',
					'name' => '360'
				],
				[
					'id' => '1376',
					'car_brand_id' => '108',
					'name' => '440'
				],
				[
					'id' => '1377',
					'car_brand_id' => '108',
					'name' => '460'
				],
				[
					'id' => '1378',
					'car_brand_id' => '108',
					'name' => '480'
				],
				[
					'id' => '1379',
					'car_brand_id' => '108',
					'name' => '740'
				],
				[
					'id' => '1380',
					'car_brand_id' => '108',
					'name' => '744'
				],
				[
					'id' => '1381',
					'car_brand_id' => '108',
					'name' => '745'
				],
				[
					'id' => '1382',
					'car_brand_id' => '108',
					'name' => '760'
				],
				[
					'id' => '1383',
					'car_brand_id' => '108',
					'name' => '780'
				],
				[
					'id' => '1384',
					'car_brand_id' => '108',
					'name' => '850'
				],
				[
					'id' => '1385',
					'car_brand_id' => '108',
					'name' => '855'
				],
				[
					'id' => '1386',
					'car_brand_id' => '108',
					'name' => '940'
				],
				[
					'id' => '1387',
					'car_brand_id' => '108',
					'name' => '944'
				],
				[
					'id' => '1388',
					'car_brand_id' => '108',
					'name' => '945'
				],
				[
					'id' => '1389',
					'car_brand_id' => '108',
					'name' => '960'
				],
				[
					'id' => '1390',
					'car_brand_id' => '108',
					'name' => '965'
				],
				[
					'id' => '1391',
					'car_brand_id' => '108',
					'name' => 'Amazon'
				],
				[
					'id' => '1392',
					'car_brand_id' => '108',
					'name' => 'C30'
				],
				[
					'id' => '1393',
					'car_brand_id' => '108',
					'name' => 'C70'
				],
				[
					'id' => '1394',
					'car_brand_id' => '108',
					'name' => 'Polar'
				],
				[
					'id' => '1395',
					'car_brand_id' => '108',
					'name' => 'S40'
				],
				[
					'id' => '1396',
					'car_brand_id' => '108',
					'name' => 'S60'
				],
				[
					'id' => '1397',
					'car_brand_id' => '108',
					'name' => 'S70'
				],
				[
					'id' => '1398',
					'car_brand_id' => '108',
					'name' => 'S80'
				],
				[
					'id' => '1399',
					'car_brand_id' => '108',
					'name' => 'S90'
				],
				[
					'id' => '1400',
					'car_brand_id' => '108',
					'name' => 'V40'
				],
				[
					'id' => '1401',
					'car_brand_id' => '108',
					'name' => 'V40 CC'
				],
				[
					'id' => '1402',
					'car_brand_id' => '108',
					'name' => 'V50'
				],
				[
					'id' => '1403',
					'car_brand_id' => '108',
					'name' => 'V60'
				],
				[
					'id' => '1404',
					'car_brand_id' => '108',
					'name' => 'V70'
				],
				[
					'id' => '1405',
					'car_brand_id' => '108',
					'name' => 'V90'
				],
				[
					'id' => '1406',
					'car_brand_id' => '108',
					'name' => 'XC 60'
				],
				[
					'id' => '1407',
					'car_brand_id' => '108',
					'name' => 'XC 70'
				],
				[
					'id' => '1408',
					'car_brand_id' => '108',
					'name' => 'XC 90'
				],
				[
					'id' => '1409',
					'car_brand_id' => '109',
					'name' => '311'
				],
				[
					'id' => '1410',
					'car_brand_id' => '109',
					'name' => '353'
				],
				[
					'id' => '1411',
					'car_brand_id' => '111',
					'name' => 'MF 25'
				],
				[
					'id' => '1412',
					'car_brand_id' => '111',
					'name' => 'MF 28'
				],
				[
					'id' => '1413',
					'car_brand_id' => '111',
					'name' => 'MF 3'
				],
				[
					'id' => '1414',
					'car_brand_id' => '111',
					'name' => 'MF 30'
				],
				[
					'id' => '1415',
					'car_brand_id' => '111',
					'name' => 'MF 35'
				],
				[
					'id' => '1416',
					'car_brand_id' => '111',
					'name' => 'MF 4'
				],
				[
					'id' => '1417',
					'car_brand_id' => '111',
					'name' => 'MF 5'
				],
			];
		if (Car::count() < 1) {
			$assetCatId = AssetCategory::where('code', 'vehicles')->get()->first()->id;
			foreach ($cars as $c) {
				$c = array_add($c, 'asset_category_id', $assetCatId);
				Car::create(
					$c
				);
			}
		}
	}
}
