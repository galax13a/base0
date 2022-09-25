<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Navegator;

class NavegatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Navegator::create([
            'name' => 'Home',
            'url' =>  '#hero',
            'lang' => 'navegatorHeadHome',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'About',
            'url' =>  '#about',
            'lang' => 'navegatorHeadAbout',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Services',
            'url' =>  '#services',
            'lang' => 'navegatorHeadServices',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Portafolio',
            'url' =>  '#portfolio',
            'lang' => 'navegatorHeadPorfolio',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Contact',
            'url' =>  '#contact',
            'lang' => 'navegatorHeadContact',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Team',
            'url' =>  '#team',
            'lang' => 'navegatorHeadTeam',
            'enabled' => true,
            'order' => 1
        ]);

        Navegator::create([
            'name' => 'Login',
            'url' =>  '/login',
            'lang' => 'navegatorHeadLogin',
            'enabled' => true,
            'order' => 1
        ]);

        Navegator::create([
            'name' => 'Register',
            'url' =>  '/register',
            'lang' => 'navegatorHeadRegister',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Getstarted',
            'url' =>  '/getstarted',
            'lang' => 'navegatorHeadGetstarted',
            'enabled' => true,
            'clase' => 'getstarted',
            'order' => 0
        ]);
        
    
    }
}
