<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'title' => 'Inception',
                'category_id' => 1,
                'description' => 'Inception is a 2010 science fiction action heist film[4][5][6][7] written and directed by Christopher Nolan, who also produced it with Emma Thomas, his wife. The film stars Leonardo DiCaprio as a professional thief who steals information by infiltrating the subconscious of his targets. He is offered a chance to have his criminal history erased as payment for the implantation of another persons idea into a targets subconscious.[8] The ensemble cast includes Ken Watanabe, Joseph Gordon-Levitt, Marion Cotillard, Elliot Page,[a] Tom Hardy, Cillian Murphy, Tom Berenger, Dileep Rao, and Michael Caine.',
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/en/2/2e/Inception_%282010%29_theatrical_poster.jpg',
                'video_path' => 'https://youtu.be/YoHD9XEInc0?si=pZCMD2Utpga9kpr8',
            ],
            [
                'title' => 'Avengers: Endgame',
                'category_id' => 1,
                'description' => 'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the direct sequel to Avengers: Infinity War (2018) and the 22nd film in the Marvel Cinematic Universe (MCU). Directed by Anthony and Joe Russo and written by Christopher Markus and Stephen McFeely, the film features an ensemble cast which includes Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd, Brie Larson, Karen Gillan, Danai Gurira, Benedict Wong, Jon Favreau, Bradley Cooper, Gwyneth Paltrow, and Josh Brolin. In the film, the surviving members of the Avengers and their allies attempt to reverse Thanoss actions in Infinity War which erased half of all life in the universe.',
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/en/0/0d/Avengers_Endgame_poster.jpg',
                'video_path' => 'https://youtu.be/TcMBFSGVi1c?si=gNlWyj1MG0Crz2HG',
            ],
            [
                'title' => 'Interstellar',
                'category_id' => 5,
                'description' => 'Interstellar is a 2014 epic science fiction drama film directed by Christopher Nolan, who co-wrote the screenplay with his brother Jonathan Nolan. It stars Matthew McConaughey, Anne Hathaway, Jessica Chastain, Bill Irwin, Ellen Burstyn, and Michael Caine. Set in a dystopian future where Earth is suffering from catastrophic blight and famine, the film follows a group of astronauts who travel through a wormhole near Saturn in search of a new home for mankind.',
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/en/b/bc/Interstellar_film_poster.jpg',
                'video_path' => 'https://www.youtube.com/watch?v=zSWdZVtXT7E&ab_channel=WarnerBros.UK%26Ireland',
            ],
            [
                'title' => 'Transformers: Rise of the Beasts ',
                'category_id' => 1,
                'description' => 'Transformers: Rise of the Beasts is a 2023 American science fiction action film based on Hasbros Transformers toy line, and primarily influenced by its Beast Wars sub-franchise. It is the seventh installment in the Transformers film series and serves as a standalone sequel to Bumblebee (2018).[8] The film is directed by Steven Caple Jr. from a screenplay by Joby Harold, Darnell Metayer, Josh Peters, Erich Hoeber, and Jon Hoeber, based on a story by Harold and James Vanderbilt. Michael Bay again serves as producer.',
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/en/1/1c/Transformers-_Rise_of_the_Beasts.jpg',
                'video_path' => 'https://youtu.be/itnqEauWQZM?si=9KsX9aosA_S24Kl7',
            ],
        ];

        foreach ($films as $film) {
            Film::create($film);
        }
    }
}
