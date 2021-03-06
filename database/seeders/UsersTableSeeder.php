<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 25,
                'name' => 'Gerardo Belot',
                'email' => 'gbelot2003@hotmail.com',
                'email_verified_at' => '2021-03-17 00:17:35',
                'password' => '$2y$10$87LWampFxnvHBZ1b0zuPMOKTpYVjQNe/hGU/QnTq8MiE45oFA9TGG',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'profile-photos/k6ZgJR9WvLYBBRsoZ6CPSq0HYWL4jyJY8T58jSwD.jpg',
                'status' => 1,
                'created_at' => '2021-03-17 00:17:29',
                'updated_at' => '2021-03-17 20:16:28',
            ),
            1 =>
            array (
                'id' => 26,
                'name' => 'Colt Jacobson DVM',
                'email' => 'joannie.keebler@example.net',
                'email_verified_at' => '2021-03-17 23:33:37',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '4TaXtQkn92',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:37',
                'updated_at' => '2021-03-17 23:33:37',
            ),
            2 =>
            array (
                'id' => 27,
                'name' => 'Garnet Muller',
                'email' => 'drew.predovic@example.org',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'yQlbQCnlEs',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            3 =>
            array (
                'id' => 28,
                'name' => 'Elmer Jerde',
                'email' => 'davin25@example.org',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '1t3vWtiit7',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            4 =>
            array (
                'id' => 29,
                'name' => 'Dr. Deanna Morar DVM',
                'email' => 'oma.kirlin@example.org',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'IpHqW3UFSA',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            5 =>
            array (
                'id' => 30,
                'name' => 'Mr. Carlo Gutmann DVM',
                'email' => 'daugherty.gretchen@example.com',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'knOHopFZ4X',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            6 =>
            array (
                'id' => 31,
                'name' => 'Miss Amie Wintheiser Jr.',
                'email' => 'pmitchell@example.com',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'rT5rm3FL6B',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            7 =>
            array (
                'id' => 32,
                'name' => 'Kenna Mante DDS',
                'email' => 'xwilderman@example.org',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'tcbv10mkBd',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            8 =>
            array (
                'id' => 33,
                'name' => 'Ms. Meagan Dach',
                'email' => 'rmaggio@example.com',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'g3AUzCnn1I',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            9 =>
            array (
                'id' => 34,
                'name' => 'Michel Baumbach',
                'email' => 'johnnie.bradtke@example.net',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'vzYXbgIdh0',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            10 =>
            array (
                'id' => 35,
                'name' => 'Itzel Hoppe',
                'email' => 'blanda.filomena@example.net',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'JaiwBwmprG',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            11 =>
            array (
                'id' => 36,
                'name' => 'Prof. Keara Jakubowski DVM',
                'email' => 'haley.shayna@example.net',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'uWPqNoUdn0',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            12 =>
            array (
                'id' => 37,
                'name' => 'Mr. Andrew Kunde',
                'email' => 'sabina.brakus@example.com',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'v9qeWS2myz',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            13 =>
            array (
                'id' => 38,
                'name' => 'Nyasia Schinner',
                'email' => 'mhoppe@example.net',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'BdZNbi0XUh',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            14 =>
            array (
                'id' => 39,
                'name' => 'Prof. Jamil Murray',
                'email' => 'elwyn04@example.com',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '9sNFwfta3v',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            15 =>
            array (
                'id' => 40,
                'name' => 'Allie Lesch',
                'email' => 'flossie.stark@example.org',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '9BBdpN9qRo',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            16 =>
            array (
                'id' => 41,
                'name' => 'Dell Stehr',
                'email' => 'casper.albin@example.org',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'zqjViSCXMr',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            17 =>
            array (
                'id' => 42,
                'name' => 'Kacie Casper',
                'email' => 'mschroeder@example.com',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '93BmDe4ptU',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            18 =>
            array (
                'id' => 43,
                'name' => 'Irving Kuhic',
                'email' => 'shad70@example.com',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'SVz5IIcIwC',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:46',
                'updated_at' => '2021-03-17 23:33:46',
            ),
            19 =>
            array (
                'id' => 44,
                'name' => 'Devan Stamm',
                'email' => 'friesen.josefa@example.net',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'KUdqIjUt6F',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:47',
                'updated_at' => '2021-03-17 23:33:47',
            ),
            20 =>
            array (
                'id' => 45,
                'name' => 'Dr. Gregory Adams III',
                'email' => 'zmills@example.net',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'UlhMIeObhO',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:47',
                'updated_at' => '2021-03-17 23:33:47',
            ),
            21 =>
            array (
                'id' => 46,
                'name' => 'Tobin Hauck V',
                'email' => 'ncorwin@example.org',
                'email_verified_at' => '2021-03-17 23:33:46',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 's5eCqrzYwK',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'status' => 1,
                'created_at' => '2021-03-17 23:33:47',
                'updated_at' => '2021-03-17 23:33:47',
            ),
        ));

        $user = User::find(25);
        $user->assignRole('administrador');

		$user = User::find(26);
        $user->assignRole('editor');

		$user = User::find(27);
        $user->assignRole('editor');

		$user = User::find(28);
        $user->assignRole('maestro');

		$user = User::find(29);
        $user->assignRole('maestro');

		$user = User::find(30);
        $user->assignRole('padre');

		$user = User::find(31);
        $user->assignRole('alumno');

		$user = User::find(32);
        $user->assignRole('alumno');

    }
}
