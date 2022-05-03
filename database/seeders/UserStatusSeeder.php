<?php

namespace Eutranet\Commons\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Eutranet\Commons\Models\MaritalStatus;
use Eutranet\Commons\Models\MatrimonialRegime;

class UserStatusSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $demoArray = array(
            array(
                'code' => 'contact',
                'name' => '{"en":"Registered contact", "fr":"Contact enregistré", "pt":"Contacto registado"}',
                'description' => '{"en":"The user has registered online or has been registered by a staff member.", "fr":"L\'utilisateur a été enregistré par un membre du personnel ou bien s\'est enregistré en ligne.", "pt":"O utilizador registou-se online ou foi registado por um membro do pessoal"}',
            ),
            array(
                'code' => 'lead',
                'name' => '{"en":"Converted to lead", "fr":"Converti en prospect", "pt":"Convertido em lead"}',
                'description' => '{"en":"The user has been converted to lead by a staff member.", "fr":"L\'utilisateur a été converti en prospect par un membre du personnel ou bien s\'est enregistré en ligne.", "pt":"O utilizador foi convertido em lead por um membro do pessoal"}',
            ),
            array(
                'code' => 'customer',
                'name' => '{"en":"Converted to customer", "fr":"Converti en client", "pt":"Convertido em cliente"}',
                'description' => '{"en":"The user has been converted to custommer by a staff member. The agreement has been or will be signed and uploaded soon.", "fr":"L\'utilisateur a été converti en client par un membre du personnel. Le contrat a été ou sera signé et téléchargé prochainement.", "pt":"O utilizador foi convertido em cliente. O acordo foi ou será assinado e carregado em breve."}',
            ),
            array(
                'code' => 'resolved',
                'name' => '{"en":"Case is resolved", "fr":"Affaire résolue", "pt":"Caso resolvido"}',
                'description' => '{"en":"Case is resolved.", "fr":"Le cas est résolu.", "pt":"Caso esta resolido."}',
            ),
            array(
                'code' => 'abandoned',
                'name' => '{"en":"Case is abandoned", "fr":"Le dossier est abandonné", "pt":"Caso abandonado"}',
                'description' => '{"en":"Case is abandoned. No feedback. No answers. No contact. Impossible to progress.", "fr":"Le cas est abandonnée par manque de réponses ou parce qu\'il est impossible d\'avancer", "pt":"O caso é abandonado por falta de respostas ou por que náo se pode adiantar"}',
            ),
        );
        if (DB::table('user_statuses')->get()->count() < 1) {
            DB::table('user_statuses')->insert(
                $demoArray
            );
        }
    }
}
