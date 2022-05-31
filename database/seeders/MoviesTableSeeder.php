<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert category details into database category table
        $movieRecords = [
            ['id'=>1, 'location_id'=>1, 'movie_name'=>'The Wolf of Wall Street', 'movie_image'=>'', 'movie_price'=>2000, 'description'=>'Based on the true story of Jordan Belfort, from his rise to a wealthy stockbroker living the high life to his fall involving crime, corruption, etc', 'genre'=>'Family, Crime', 'movie_star'=>'Leonardo Dicaprio', 'movie_duration'=>'1hr 50mins ', 'show_time'=>'2022-06-08 10:20:33', 'meta_title'=>'wolf of wall street', 'meta_description'=>'Based on the true story of Jordan Belfort, from his rise to a wealthy stockbroker living the high life to his fall involving crime, corruption, etc', 'meta_keywords'=>'wolf of wall street, leonardo dicaprio, stock exchange, making money', 'status'=>1],
            ['id'=>2, 'location_id'=>2, 'movie_name'=>'Suicide Squad', 'movie_image'=>'', 'movie_price'=>2500, 'description'=>'A secret government agency recruits a group of imprisoned supervillains to execute dangerous black ops missions in exchange for clemency, which inevitably leads to chaos', 'genre'=>'Comedy, Action', 'movie_star'=>'Will Smith', 'movie_duration'=>'1hr 23mins', 'show_time'=>'2022-06-08 12:20:33', 'meta_title'=>'Suicide Squad', 'meta_description'=>'A secret government agency recruits a group of imprisoned supervillains', 'meta_keywords'=>'Suicide Squad, Will Smith, secret government agency movie', 'status'=>1],
            ['id'=>3, 'location_id'=>2, 'movie_name'=>'Iron Man 3', 'movie_image'=>'', 'movie_price'=>2000, 'description'=>'When Stark finds his personal world destroyed at his enemys hands, he embarks on a harrowing quest to find those responsible.', 'genre'=>'Action', 'movie_star'=>'Tony Stark', 'movie_duration'=>'2 hrs', 'show_time'=>'2022-06-08 14:20:33', 'meta_title'=>'Iron man 3', 'meta_description'=>'When Stark finds his personal world destroyed at his enemys hands', 'meta_keywords'=>'Iron Man 3, Tony Stark, Robots', 'status'=>1],
            ['id'=>4, 'location_id'=>3, 'movie_name'=>'The Expendables', 'movie_image'=>'', 'movie_price'=>2000, 'description'=>'The Expendables are reunited when Mr. Church enlists them to take on a seemingly simple job. When things go wrong, the Expendables are compelled to save all', 'genre'=>'Action', 'movie_star'=>'Sylvestre Stallion', 'movie_duration'=>'2hrs 10mins', 'show_time'=>'2022 -06-08 16:20:33', 'meta_title'=>'The Expendables', 'meta_description'=>'The Expendables are reunited when Mr. Church enlists them to take on a seemingly simple job', 'meta_keywords'=>'Sylvestre Stallion, The Expendables', 'status'=>1],
            ['id'=>5, 'location_id'=>1, 'movie_name'=>'The Lion King', 'movie_image'=>'', 'movie_price'=>2000, 'description'=>'After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.', 'genre'=>'Family', 'movie_star'=>'James Earl Jones', 'movie_duration'=>'1 hr 25mins', 'show_time'=>'2022-06-08 18:20:33', 'meta_title'=>'The Lion King', 'meta_description'=>'After the murder of his father, a young lion prince flees his kingdom only', 'meta_keywords'=>'The Lion King, James Earl Jones, Animation', 'status'=>1],
            ['id'=>6, 'location_id'=>3, 'movie_name'=>'The GodFather', 'movie_image'=>'', 'movie_price'=>3000, 'description'=>'The business of the family is just like the head of the family, kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family', 'genre'=>'Crime, Drama', 'movie_star'=>'Al Pacino', 'movie_duration'=>'1hr 50mins', 'show_time'=>'2022-06-08 20:20:33', 'meta_title'=>'The Expendables', 'meta_description'=>'The business of the family is just like the head of the family', 'meta_keywords'=>'Al Pacino, Crime, Drama', 'status'=>1],
        ];
        Movie::insert($movieRecords);
    }
}
