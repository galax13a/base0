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
            'lang' => 'navegatorHead.home',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'About',
            'url' =>  '#about',
            'lang' => 'navegatorHead.about',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Services',
            'url' =>  '#services',
            'lang' => 'navegatorHead.services',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Portafolio',
            'url' =>  '#portfolio',
            'lang' => 'navegatorHead.porfolio',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Contact',
            'url' =>  '#contact',
            'lang' => 'navegatorHead.contact',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Team',
            'url' =>  '#team',
            'lang' => 'navegatorHead.team',
            'enabled' => true,
            'order' => 1
        ]);

        Navegator::create([
            'name' => 'Login',
            'url' =>  '/login',
            'lang' => 'navegatorHead.login',
            'enabled' => true,
            'order' => 1
        ]);

        Navegator::create([
            'name' => 'Register',
            'url' =>  '/register',
            'lang' => 'navegatorHead.register',
            'enabled' => true,
            'order' => 1
        ]);
        Navegator::create([
            'name' => 'Getstarted',
            'url' =>  '/getstarted',
            'lang' => 'navegatorHead.getstarted',
            'enabled' => true,
            'clase' => 'getstarted',
            'order' => 0
        ]);
        
    
    }
}
