<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Student;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        $admin = factory(User::class)->create([
            'name'     => 'Dee',
            'email'    => 'dede@albahri.com',
            'email_verified_at' => now(),
            'password' => bcrypt('albahri'),
        ]);

        $admin->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($admin->email);
        $this->command->warn('Password is "albahri"');

        // bendahara
        $bendahara = factory(User::class)->create([
            'name'     => 'Taillor Otwel',
            'email'    => 'taillor@albahri.com',
            'email_verified_at' => now(),
            'password' => bcrypt('albahri'),
        ]);

        $bendahara->assignRole('bendahara');

        $this->command->info('>_ Here is your bendahara details to login:');
        $this->command->warn($bendahara->email);
        $this->command->warn('Password is "albahri"');

        // siswa
        $student = factory(User::class)->create([
            'name'     => 'Adam Wathan',
            'email'    => 'adamwathan@albahri.com',
            'email_verified_at' => now(),
            'password' => bcrypt('albahri'),
        ]);

        if($student->save()){
            $anggota = Student::create([
                'user_id'   => $student->id,
            ]);
        };

        $student->assignRole('student');

        $this->command->info('>_ Here is your student details to login:');
        $this->command->warn($student->email);
        $this->command->warn('Password is "albahri"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}