<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Settings;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $items = [

            //Global
            ['site_main_logo', 'storage/images/default/settings/mainlogo.png'],
            ['site_fav_icon', 'storage/images/default/settings/mainlogo.png'],
            ['site_footer_logo', 'storage/images/default/settings/footerlogo.png'],

            ['site_information', 'flyeastnepal'],

            ['site_phone', '056-511432/9855039432'],
            ['site_email', 'flyeastnepal@gmail.com'],
            ['site_location', 'Kathmandu, Nepal'],

            ['site_map', '/sitemap.xml'],
            ['site_mail', 'poxt box 2'],
            ['site_url', '/'],

            //contact

            ['contact_title', 'Contact Us'],
            ['contact_image', Null],

            ['contact_banner_image', Null],
            ['contact_section_title', "Get In Touch"],
            ['contact_description', 'flyeastnepal'],
            ['banner_user_name', 'Hey i am Reshma'],
            ['banner_title', 'Crafting Seamless Digital Experiences Building Innovative Solutions'],
            ['banner_description', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum nisi blanditiis dolor soluta? Molestiae, fuga vel amet laborum similique et aliquam nobis! Deleniti veniam autem dolorem facere exercitationem totam cumque!'],
            ['banner_image', 'frontend/assets/images/img13.jpg'],
            ['about_me_title', 'Get To Know More'],
            ['about_me_slogan', 'About Me'],
            ['experience_title', 'Experience'],
            ['experience_slogan', 'Explore My'],
            ['project_title', 'Experience'],
            ['project_slogan', 'Browse My Recent'],
            ['skill_slogan', 'My Expertise'],
            ['skill_title', 'My Skills'],
            ['contact_title', 'My Skills'],
            ['contact_slogan', 'Get In Touch'],
            ['about_image', 'frontend/assets/images/img13.jpg'],
            ['experience', '+2year'],
            ['experience_field', 'Frontend Development'],
            ['education', 'Bachelor in Computer Science'],
            ['faculty', 'CSIT'],
            ['about_me_description', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis aut et veritatis incidunt labore fugiat veniam error itaque delectus, quam illum odit! Maiores ipsam maxime dolor ad ipsum ratione corrupti!\ Lorem ipsum dolor sit amet co Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis aut et veritatis incidunt labore fugiat veniam error itaque delectus, quam illum odit! Maiores ipsam maxime dolor ad ipsum ratione corrupti!\ Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis aut et veritatis incidunt labore fugiat veniam error itaque delectus, quam illum odit! Maiores ipsam maxime dolor ad ipsum ratione corrupti!']
        ];

        if (count($items)) {

            foreach ($items as $item) {

                Setting::create([
                    'key' => $item[0],
                    'value' => $item[1]
                ]);
            }
        }
        User::create([
            'name' => 'Super Admin',
            'email' => 'dhakalr78@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
