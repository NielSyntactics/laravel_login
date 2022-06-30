<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'is_admin'=> true,
        ]);


        DB::table('user_information')->insert([
            'user_id'=> $user->id,
            'orgname'=>'Organization of Student Affairs',
            'college_id'=>1,
            'adviser'=>'John Doe',
            'representative'=>'John Doe',
            'image'=>'profilepic.png',
            'vision'=>"The Life is Good brand is about more than spreading optimism — although, with uplifting T-shirt slogans like 'Seas The Day' and 'Forecast: Mostly Sunny,' it's hard not to crack a smile.<br/>There are tons of T-shirt companies in the world, but Life is Good's mission sets itself apart with a mission statement that goes beyond fun clothing: to spread the power of optimism.<br/>This mission is perhaps a little unexpected if you're not familiar with the company's public charity: How will a T-shirt company help spread optimism? Life is Good answers that question below the fold, where the mission is explained in more detail using a video and with links to the company’s community and the Life is Good Kids Foundation page. We really like how lofty yet specific this mission statement is — it's a hard-to-balance combination.",
            'mission'=>"Patagonia's mission statement spotlights the company’s commitment to help the environment and save the earth. The people behind the brand believe that among the most direct ways to limit ecological impacts is with goods that last for generations or can be recycled so the materials in them remain in use.<br/>In the name of this cause, the company donates time, services, and at least 1% of its sales to hundreds of environmental groups worldwide.<br/>If your company has a similar focus on growing your business and giving back, think about talking about both the benefit you bring to customers and the value you want to bring to a greater cause in your mission statement."
        ]);
    }
}
