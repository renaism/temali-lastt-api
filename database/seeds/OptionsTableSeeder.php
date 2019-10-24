<?php

use Illuminate\Database\Seeder;
use App\Option;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::firstOrCreate([
            'label' => 'Senang bersahabat dan membangun jaringan dengan klien',
            'result' => 'Ambassador',
            'exp_pos' => 'Kamu menikmati jadi perwakilan di suatu instansi, organisasi, atau suatu isu. Kamu juga enjoy membangun jaringan melalui kontak dengan orang lain, klien atau pihak lainnya. Kamu secara natural senang bersahabat, senang melayani, dan bertanggung jawab.

Bakat ini termasuk kelompok Rasa yang terkait dengan kerjasama dengan orang (Interpersonal Relating).

Bakat ini dibutuhkan untuk menjadi perwakilan perusahaan, duta besar, dan lain sebagainya.
',
            'exp_neg' => 'Kamu menikmati jadi perwakilan di suatu instansi, organisasi, atau suatu isu. Kamu juga enjoy membangun jaringan melalui kontak dengan orang lain, klien atau pihak lainnya. Kamu secara natural senang bersahabat, senang melayani, dan bertanggung jawab.

Bakat ini termasuk kelompok Rasa yang terkait dengan kerjasama dengan orang (Interpersonal Relating).

Bakat ini dibutuhkan untuk menjadi perwakilan perusahaan, duta besar, dan lain sebagainya.
'
        ]);
    }
}
