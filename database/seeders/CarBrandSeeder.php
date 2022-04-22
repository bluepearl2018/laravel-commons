<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\MaritalStatus;
use Eutranet\Commons\Models\MatrimonialRegime;
use Illuminate\Support\Facades\Schema;
use Eutranet\Commons\Models\CarBrand;
use Eutranet\Commons\Models\AssetCategory;

class CarBrandSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{

		$carBrands =
			[
				[
					'id' => '1',
					'name' => 'Abarth'
				],
				[
					'id' => '2',
					'name' => 'AC'
				],
				[
					'id' => '3',
					'name' => 'Acura'
				],
				[
					'id' => '4',
					'name' => 'Aixam'
				],
				[
					'id' => '5',
					'name' => 'Alfa Romeo'
				],
				[
					'id' => '6',
					'name' => 'Alpina'
				],
				[
					'id' => '7',
					'name' => 'Artega'
				],
				[
					'id' => '8',
					'name' => 'Asia Motors'
				],
				[
					'id' => '9',
					'name' => 'Aston Martin'
				],
				[
					'id' => '10',
					'name' => 'Audi'
				],
				[
					'id' => '11',
					'name' => 'Austin'
				],
				[
					'id' => '12',
					'name' => 'Austin Healey'
				],
				[
					'id' => '13',
					'name' => 'Bentley'
				],
				[
					'id' => '14',
					'name' => 'BMW'
				],
				[
					'id' => '15',
					'name' => 'Borgward'
				],
				[
					'id' => '16',
					'name' => 'Brilliance'
				],
				[
					'id' => '17',
					'name' => 'Bugatti'
				],
				[
					'id' => '18',
					'name' => 'Buick'
				],
				[
					'id' => '19',
					'name' => 'Cadillac'
				],
				[
					'id' => '20',
					'name' => 'Casalini'
				],
				[
					'id' => '21',
					'name' => 'Caterham'
				],
				[
					'id' => '22',
					'name' => 'Chatenet'
				],
				[
					'id' => '23',
					'name' => 'Chevrolet'
				],
				[
					'id' => '24',
					'name' => 'Chrysler'
				],
				[
					'id' => '25',
					'name' => 'Citroën'
				],
				[
					'id' => '26',
					'name' => 'Cobra'
				],
				[
					'id' => '27',
					'name' => 'Corvette'
				],
				[
					'id' => '28',
					'name' => 'Dacia'
				],
				[
					'id' => '29',
					'name' => 'Daewoo'
				],
				[
					'id' => '30',
					'name' => 'Daihatsu'
				],
				[
					'id' => '31',
					'name' => 'DeTomaso'
				],
				[
					'id' => '32',
					'name' => 'Dodge'
				],
				[
					'id' => '33',
					'name' => 'Ferrari'
				],
				[
					'id' => '34',
					'name' => 'Fiat'
				],
				[
					'id' => '35',
					'name' => 'Fisker'
				],
				[
					'id' => '36',
					'name' => 'Ford'
				],
				[
					'id' => '37',
					'name' => 'GAC Gonow'
				],
				[
					'id' => '38',
					'name' => 'Gemballa'
				],
				[
					'id' => '39',
					'name' => 'GMC'
				],
				[
					'id' => '40',
					'name' => 'Grecav'
				],
				[
					'id' => '41',
					'name' => 'Hamann'
				],
				[
					'id' => '42',
					'name' => 'Holden'
				],
				[
					'id' => '43',
					'name' => 'Honda'
				],
				[
					'id' => '44',
					'name' => 'Hummer'
				],
				[
					'id' => '45',
					'name' => 'Hyundai'
				],
				[
					'id' => '46',
					'name' => 'Infiniti'
				],
				[
					'id' => '47',
					'name' => 'Isuzu'
				],
				[
					'id' => '48',
					'name' => 'Iveco'
				],
				[
					'id' => '49',
					'name' => 'Jaguar'
				],
				[
					'id' => '50',
					'name' => 'Jeep'
				],
				[
					'id' => '51',
					'name' => 'Kia'
				],
				[
					'id' => '52',
					'name' => 'Königsegg'
				],
				[
					'id' => '53',
					'name' => 'KTM'
				],
				[
					'id' => '54',
					'name' => 'Lada'
				],
				[
					'id' => '55',
					'name' => 'Lamborghini'
				],
				[
					'id' => '56',
					'name' => 'Lancia'
				],
				[
					'id' => '57',
					'name' => 'Land Rover'
				],
				[
					'id' => '58',
					'name' => 'Landwind'
				],
				[
					'id' => '59',
					'name' => 'Lexus'
				],
				[
					'id' => '60',
					'name' => 'Ligier'
				],
				[
					'id' => '61',
					'name' => 'Lincoln'
				],
				[
					'id' => '62',
					'name' => 'Lotus'
				],
				[
					'id' => '63',
					'name' => 'Mahindra'
				],
				[
					'id' => '64',
					'name' => 'Maserati'
				],
				[
					'id' => '65',
					'name' => 'Maybach'
				],
				[
					'id' => '66',
					'name' => 'Mazda'
				],
				[
					'id' => '67',
					'name' => 'McLaren'
				],
				[
					'id' => '68',
					'name' => 'Mercedes-Benz'
				],
				[
					'id' => '69',
					'name' => 'MG'
				],
				[
					'id' => '70',
					'name' => 'Microcar'
				],
				[
					'id' => '71',
					'name' => 'MINI'
				],
				[
					'id' => '72',
					'name' => 'Mitsubishi'
				],
				[
					'id' => '73',
					'name' => 'Morgan'
				],
				[
					'id' => '74',
					'name' => 'Nissan'
				],
				[
					'id' => '75',
					'name' => 'NSU'
				],
				[
					'id' => '76',
					'name' => 'Oldsmobile'
				],
				[
					'id' => '77',
					'name' => 'Opel'
				],
				[
					'id' => '78',
					'name' => 'Pagani'
				],
				[
					'id' => '79',
					'name' => 'Peugeot'
				],
				[
					'id' => '80',
					'name' => 'Piaggio'
				],
				[
					'id' => '81',
					'name' => 'Plymouth'
				],
				[
					'id' => '82',
					'name' => 'Pontiac'
				],
				[
					'id' => '83',
					'name' => 'Porsche'
				],
				[
					'id' => '84',
					'name' => 'Proton'
				],
				[
					'id' => '85',
					'name' => 'Renault'
				],
				[
					'id' => '86',
					'name' => 'Rolls-Royce'
				],
				[
					'id' => '87',
					'name' => 'Rover'
				],
				[
					'id' => '88',
					'name' => 'Ruf'
				],
				[
					'id' => '89',
					'name' => 'Saab'
				],
				[
					'id' => '90',
					'name' => 'Santana'
				],
				[
					'id' => '91',
					'name' => 'Seat'
				],
				[
					'id' => '92',
					'name' => 'Skoda'
				],
				[
					'id' => '93',
					'name' => 'Smart'
				],
				[
					'id' => '94',
					'name' => 'speedART'
				],
				[
					'id' => '95',
					'name' => 'Spyker'
				],
				[
					'id' => '96',
					'name' => 'Ssangyong'
				],
				[
					'id' => '97',
					'name' => 'Subaru'
				],
				[
					'id' => '98',
					'name' => 'Suzuki'
				],
				[
					'id' => '99',
					'name' => 'Talbot'
				],
				[
					'id' => '100',
					'name' => 'Tata'
				],
				[
					'id' => '101',
					'name' => 'Techart'
				],
				[
					'id' => '102',
					'name' => 'Tesla'
				],
				[
					'id' => '103',
					'name' => 'Toyota'
				],
				[
					'id' => '104',
					'name' => 'Trabant'
				],
				[
					'id' => '105',
					'name' => 'Triumph'
				],
				[
					'id' => '106',
					'name' => 'TVR'
				],
				[
					'id' => '107',
					'name' => 'Volkswagen'
				],
				[
					'id' => '108',
					'name' => 'Volvo'
				],
				[
					'id' => '109',
					'name' => 'Wartburg'
				],
				[
					'id' => '110',
					'name' => 'Westfield'
				],
				[
					'id' => '111',
					'name' => 'Wiesmann'
				],
			];

		if (CarBrand::count() < 1) {
			foreach ($carBrands as $l) {
				CarBrand::create(
					$l
				);
			}
		}
	}
}
