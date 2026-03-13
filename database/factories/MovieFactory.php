<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    public function definition(): array
    {
        $movies = [
            ['title' => 'Inception',            'director' => 'Christopher Nolan',  'published_year' => '2010-07-16', 'description' => 'A thief who steals corporate secrets through dream-sharing technology.'],
            ['title' => 'Interstellar',          'director' => 'Christopher Nolan',  'published_year' => '2014-11-07', 'description' => 'A team of explorers travel through a wormhole in space.'],
            ['title' => 'The Dark Knight',       'director' => 'Christopher Nolan',  'published_year' => '2008-07-18', 'description' => 'Batman faces the Joker, a criminal mastermind in Gotham City.'],
            ['title' => 'Avengers: Endgame',     'director' => 'Anthony Russo',      'published_year' => '2019-04-26', 'description' => 'The Avengers assemble to reverse Thanos\'s actions.'],
            ['title' => 'The Godfather',         'director' => 'Francis Ford Coppola','published_year' => '1972-03-24', 'description' => 'The aging patriarch of a crime dynasty transfers control to his son.'],
            ['title' => 'Pulp Fiction',          'director' => 'Quentin Tarantino',  'published_year' => '1994-10-14', 'description' => 'The lives of two mob hitmen, a boxer, and a gangster intertwine.'],
            ['title' => 'The Shawshank Redemption','director' => 'Frank Darabont',   'published_year' => '1994-09-23', 'description' => 'Two imprisoned men bond over years, finding solace and redemption.'],
            ['title' => 'Forrest Gump',          'director' => 'Robert Zemeckis',    'published_year' => '1994-07-06', 'description' => 'The presidencies of Kennedy through Bush through the eyes of Forrest Gump.'],
            ['title' => 'The Matrix',            'director' => 'Lana Wachowski',     'published_year' => '1999-03-31', 'description' => 'A hacker discovers the world is a simulation controlled by machines.'],
            ['title' => 'Gladiator',             'director' => 'Ridley Scott',       'published_year' => '2000-05-05', 'description' => 'A Roman general seeks revenge against the corrupt emperor.'],
            ['title' => 'Titanic',               'director' => 'James Cameron',      'published_year' => '1997-12-19', 'description' => 'A love story aboard the ill-fated RMS Titanic.'],
            ['title' => 'The Lion King',         'director' => 'Roger Allers',       'published_year' => '1994-06-24', 'description' => 'A young lion prince flees his kingdom after his father\'s murder.'],
            ['title' => 'Goodfellas',            'director' => 'Martin Scorsese',    'published_year' => '1990-09-19', 'description' => 'The story of Henry Hill and his life in the mob.'],
            ['title' => 'Fight Club',            'director' => 'David Fincher',      'published_year' => '1999-10-15', 'description' => 'An insomniac office worker forms an underground fight club.'],
            ['title' => 'The Silence of the Lambs','director' => 'Jonathan Demme',   'published_year' => '1991-02-14', 'description' => 'An FBI agent seeks help from a cannibalistic killer to catch another.'],
            ['title' => 'Schindler\'s List',     'director' => 'Steven Spielberg',   'published_year' => '1993-12-15', 'description' => 'A businessman saves Jewish refugees during the Holocaust.'],
            ['title' => 'The Avengers',          'director' => 'Joss Whedon',        'published_year' => '2012-05-04', 'description' => 'Earth\'s mightiest heroes unite to stop Loki\'s invasion.'],
            ['title' => 'Avatar',                'director' => 'James Cameron',      'published_year' => '2009-12-18', 'description' => 'A marine on an alien planet torn between orders and protecting its world.'],
            ['title' => 'Joker',                 'director' => 'Todd Phillips',      'published_year' => '2019-10-04', 'description' => 'A failed comedian descends into madness and becomes the Joker.'],
            ['title' => 'Parasite',              'director' => 'Bong Joon-ho',       'published_year' => '2019-05-30', 'description' => 'A poor family schemes to become employed by a wealthy family.'],
        ];

        $movie = $this->faker->unique()->randomElement($movies);

        return [
            'title'          => $movie['title'],
            'director'       => $movie['director'],
            'published_year' => $movie['published_year'],
            'description'    => $movie['description'],
            'liste_id'       => fake()->numberBetween(1, 8),
            'categorie_id'   => fake()->numberBetween(1, 20),
        ];
    }
}
