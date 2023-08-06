<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
use App\models\Pickup;
use App\models\Message;
use App\models\RatingAndReview;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Bayu Damar Breh Pambudi',
            'email' => 'bayubreh802@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'name' => 'Muhammad Fahransyah',
            'email' => 'fahran@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'name' => 'Diva Ratri',
            'email' => 'diva@gmail.com',
            'password' => Hash::make('12345')
        ]);
        
        User::create([
            'name' => 'Habenula Mahogra',
            'email' => 'habenula@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('admin'),
            'is_admin' => 'Admin'
        ]);






        Pickup::create([
            'kategori_sampah' => 'Anorganik',
            'alamat' => 'Banaran',
            'catatan' => 'Tidak ada',
            'jenis_pickup' => 'Pickup Sekali',
            'pembayaran' => 'Qris',
            'bukti_pembayaran' => 'bukti_pembayaran1.png',
            'status' => 'In Progress',
            'user_id' => 1
         ]);

         Pickup::create([
            'kategori_sampah' => 'Organik',
            'alamat' => 'Sekaran',
            'catatan' => 'Terima Kasih',
            'jenis_pickup' => 'Pickup Sekali',
            'pembayaran' => 'COD',
            'bukti_pembayaran' => 'bukti_pembayaran2.png',
            'status' => 'Completed',
            'user_id' => 2
         ]);

         Pickup::create([
            'kategori_sampah' => 'B3',
            'alamat' => 'Cempaka Sari',
            'catatan' => 'Tidak ada',
            'jenis_pickup' => 'Pickup Sekali',
            'pembayaran' => 'Qris',
            'bukti_pembayaran' => 'bukti_pembayaran3.png',
            'status' => 'Cancelled',
            'user_id' => 3
         ]);

         Pickup::create([
            'kategori_sampah' => 'Anorganik',
            'alamat' => 'Gg. Pete',
            'catatan' => 'Tidak ada',
            'jenis_pickup' => 'Pickup Sekali',
            'pembayaran' => 'Qris',
            'bukti_pembayaran' => 'bukti_pembayaran4.png',
            'status' => 'Scheduled',
            'user_id' => 4
         ]);

         Message::create([
            'name' => 'Bayu Damar Breh Pambudi',
            'email' => 'bayudamar802@gmail.com',
            'subject' => 'Akun Error',
            'message' => 'Mohon maaf, akun saya error, solusinya bagaimana',
         ]);

         Message::create([
            'name' => 'Muchammad Fahransyah',
            'email' => 'fahran@gmail.com',
            'subject' => 'Aku Error',
            'message' => 'Mohon maaf, saya error, solusinya bagaimana',
         ]);

         RatingAndReview::create([
            'user_id' => '1',
            'rating' => '5',
            'review'  => 'SPS MANTAP JIWA',
         ]);

         RatingAndReview::create([
            'user_id' => '2',
            'rating' => '5',
            'review'  => 'SPS KECE ABIS',
         ]);

         RatingAndReview::create([
            'user_id' => '3',
            'rating' => '5',
            'review'  => 'SPS GOOD JOB',
         ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
