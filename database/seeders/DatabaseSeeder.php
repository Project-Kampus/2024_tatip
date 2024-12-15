<?php

namespace Database\Seeders;

use App\Models\tartip;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Kristiani Yovita',
            'email' => 'vita@gmail.com',
            'password' => bcrypt('password'),
        ]);

        tartip::create([
            'tatip' => 'Umum',
            'text' => 'Warga RT wajib menjaga kebersihan, ketertiban, dan keamanan lingkungan.'
        ]);

        tartip::create([
            'tatip' => 'Umum',
            'text' => 'Warga RT diwajibkan untuk saling menghormati, menjaga hubungan baik, dan menjunjung nilai kebersamaan.'
        ]);

        tartip::create([
            'tatip' => 'Umum',
            'text' => 'Setiap warga wajib mentaati aturan yang telah disepakati dalam rapat RT.'
        ]);

        tartip::create([
            'tatip' => 'Keamanan dan Ketertiban',
            'text' => 'Warga wajib mengikuti sistem keamanan lingkungan seperti siskamling atau ronda malam sesuai jadwal yang ditentukan.'
        ]);

        tartip::create([
            'tatip' => 'Keamanan dan Ketertiban',
            'text' => 'Tidak diperkenankan membuat kegaduhan atau keributan yang mengganggu ketertiban umum'
        ]);

        tartip::create([
            'tatip' => 'Kebersihan Lingkungan',
            'text' => 'Setiap warga bertanggung jawab untuk menjaga kebersihan lingkungan di sekitar rumah masing-masing.'
        ]);

        tartip::create([
            'tatip' => 'Kebersihan Lingkungan',
            'text' => 'Jadwal kerja bakti lingkungan diadakan secara rutin, minimal sekali dalam sebulan, dan warga wajib berpartisipasi.'
        ]);

        tartip::create([
            'tatip' => 'Kebersihan Lingkungan',
            'text' => 'Dilarang membuang sampah sembarangan, baik di jalan, selokan, maupun fasilitas umum lainnya.'
        ]);

        tartip::create([
            'tatip' => 'Iuran Warga',
            'text' => 'Setiap kepala keluarga (KK) wajib membayar iuran bulanan yang besarnya telah disepakati bersama dalam rapat RT yaitu sebesar Rp.35.000.'
        ]);

        tartip::create([
            'tatip' => 'Iuran Warga',
            'text' => 'Dana iuran digunakan untuk kepentingan bersama, seperti perawatan fasilitas umum, kebersihan, dan kegiatan sosial.'
        ]);

        tartip::create([
            'tatip' => 'Kegiatan Sosial',
            'text' => 'Warga diwajibkan untuk berpartisipasi dalam kegiatan sosial RT, seperti perayaan hari besar atau bantuan kepada warga yang membutuhkan.'
        ]);

        tartip::create([
            'tatip' => 'Kegiatan Sosial',
            'text' => 'Setiap warga diminta untuk saling membantu dalam kegiatan gotong royong dan acara yang melibatkan seluruh RT.'
        ]);
    }
}
