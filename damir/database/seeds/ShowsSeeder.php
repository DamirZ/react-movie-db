<?php
require_once dirname(dirname(__FILE__)) . '/../handlers/ShowHandler.php';

class ShowsSeeder
{
    
    public static function up() {
        $showHandler = new ShowHandler;

        foreach (self::shows() as $show) {
            $showHandler->insert([
                sprintf(
                    "('%s', '%d', '%d', '%s', '%s', '%s')", 
                    $show['name'],
                    $show['release_date'],
                    $show['rating'],
                    $show['description'],
                    $show['image'],
                    $show['director']
                )
            ]);
        }
    }

    public static function down() {
        $showHandler = new ShowHandler;
        $showHandler->truncate();
    }

    private static function shows() {
        return [
            [
                'name' => 'Breaking Bad',
                'release_date' => 2008,
                'rating' => 5,
                'description' => 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his familys future.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMjhiMzgxZTctNDc1Ni00OTIxLTlhMTYtZTA3ZWFkODRkNmE2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,718,1000_AL_.jpg',
                'director' => 'Vince Gilligan'
            ],
            [
                'name' => 'Band of Brothers',
                'release_date' => 2001,
                'rating' => 4,
                'description' => 'The story of Easy Company of the U.S. Army 101st Airborne Division, and their mission in World War II Europe, from Operation Overlord, through V-J Day.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTI3ODc2ODc0M15BMl5BanBnXkFtZTYwMjgzNjc3._V1_.jpg',
                'director' => 'Tom Hanks'
            ],
            [
                'name' => 'Planet Earth',
                'release_date' => 2006,
                'rating' => 3,
                'description' => 'Emmy Award-winning, 11 episodes, five years in the making, the most expensive nature documentary series ever commissioned by the BBC, and the first to be filmed in high definition.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNmZlYzIzMTItY2EzYS00YTEyLTg0ZjEtMDMzZjM3ODdhN2UzXkEyXkFqcGdeQXVyNjI0MDg2NzE@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
                'director' => 'David Attenborough'
            ],
            [
                'name' => 'Planet Earth II',
                'release_date' => 2016,
                'rating' => 2,
                'description' => 'David Attenborough returns in this breathtaking documentary showcasing life on Planet Earth.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZWYxODViMGYtMGE2ZC00ZGQ3LThhMWUtYTVkNGE3OWU4NWRkL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMjYwNDA2MDE@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
                'director' => 'David Attenborough'
            ],
            [
                'name' => 'Sherlock',
                'release_date' => 2010,
                'rating' => 5,
                'description' => 'A modern update finds the famous sleuth and his doctor partner solving crime in 21st century London.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMWY3NTljMjEtYzRiMi00NWM2LTkzNjItZTVmZjE0MTdjMjJhL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNTQ4NTc5OTU@._V1_.jpg',
                'director' => 'Steven Moffat'
            ],
            [
                'name' => 'The Sopranos',
                'release_date' => 1999,
                'rating' => 1,
                'description' => 'New Jersey mob boss Tony Soprano deals with personal and professional issues in his home and business life that affect his mental state, leading him to seek professional psychiatric counseling.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZGJjYzhjYTYtMDBjYy00OWU1LTg5OTYtNmYwOTZmZjE3ZDdhXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SY1000_CR0,0,702,1000_AL_.jpg',
                'director' => 'David Chase'
            ],
            [
                'name' => 'The Twilight Zone',
                'release_date' => 1959,
                'rating' => 5,
                'description' => 'Ordinary people find themselves in extraordinarily astounding situations, which they each try to solve in a remarkable manner.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNTAzMDI5MzgtMGNkMC00MzllLWJhNjctNjA1NmViNGUxMzYxXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg',
                'director' => 'Rod Serling'
            ],
            [
                'name' => 'Firefly',
                'release_date' => 2010,
                'rating' => 5,
                'description' => 'Five hundred years in the future, a renegade crew aboard a small spacecraft tries to survive as they travel the unknown parts of the galaxy and evade warring factions as well as authority agents out to get them.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNGEzYjIzZGUtNWI5YS00Y2IzLWIzMTQtMGJhNDljZDkzYzM0XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_.jpg',
                'director' => 'Joss Whedon'
            ],
            [
                'name' => 'Black Mirror',
                'release_date' => 2011,
                'rating' => 1,
                'description' => 'An anthology series exploring a twisted, high-tech world where humanitys greatest innovations and darkest instincts col lide.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNTEwYzNiMGUtNzRlYS00MTMzLTliNzgtOGUxZGZiNThlNWYwXkEyXkFqcGdeQXVyMjYwNDA2MDE@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
                'director' => 'Charlie Brooker'
            ],
            [
                'name' => 'Monty Pythons Flying Circus',
                'release_date' => 1969,
                'rating' => 5,
                'description' => 'The original surreal sketch comedy showcase for the Monty Python troupe.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMWY2ZGI0OGUtZDc3YS00ZmVjLWJiNWQtZDdmNzFmM2UzYWFhXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SY1000_CR0,0,713,1000_AL_.jpg',
                'director' => 'Graham Chapman'
            ],
            [
                'name' => 'Friends',
                'release_date' => 1994,
                'rating' => 2,
                'description' => 'Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNDVkYjU0MzctMWRmZi00NTkxLTgwZWEtOWVhYjZlYjllYmU4XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_.jpg',
                'director' => 'Marta Kauffman'
            ],
            [
                'name' => 'Only Fools And Horses',
                'release_date' => 1981,
                'rating' => 5,
                'description' => 'Comedy that follows two brothers from Londons rough Peckham estate as they wheel and deal through a number of dodgy deals as they search for the big sc ore that will make them millionaires.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BYmI1NGIwNzYtOTVlMS00ZGYwLWE0ZTktYzVmMGVlMmRmN2QxXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SY1000_CR0,0,714,1000_AL_.jpg',
                'director' => 'John Sullivan'
            ],
            [
                'name' => 'Stranger Things',
                'release_date' => 2016,
                'rating' => 3,
                'description' => 'When a young boy disappears, his mother, a police chief, and his friends must confront terrifying forces in order to get him back.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTgwNDAxNTQ4Ml5BMl5BanBnXkFtZTgwOTAyMjQ2NzM@._V1_SY1000_CR0,0,704,1000_AL_.jpg',
                'director' => 'Ross Duffer'
            ],
            [
                'name' => 'The Office',
                'release_date' => 2005,
                'rating' => 1,
                'description' => 'A mockumentary on a group of typical office workers, where the workday consists of ego clashes, inappropriate behavior, and tedium.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTgzNjAzMDE0NF5BMl5BanBnXkFtZTcwNTEyMzM3OA@@._V1_SY1000_CR0,0,736,1000_AL_.jpg',
                'director' => 'Ricky Gervais'
            ],
            [
                'name' => 'The Black Adder',
                'release_date' => 1982,
                'rating' => 4,
                'description' => 'In the Middle Ages, Prince Edmund the Black Adder constantly schemes and endeavors to seize the crown from his father and brother.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNDY5OTA1OTkxNV5BMl5BanBnXkFtZTYwMTI1NzU5._V1_.jpg',
                'director' => 'Rowan Atkinson'
            ],
            [
                'name' => 'Fawlty Towers',
                'release_date' => 1975,
                'rating' => 2,
                'description' => 'Hotel owner Basil Fawltys incompetence, short fuse, and arrogance form a combination that ensures accidents and trouble are never far away.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BYzc3MTQyYzMtMWY4Ny00N2RiLWI3ZDYtOWRlYjUxZDllMjQxXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
                'director' => 'John Cleese'
            ],
            [
                'name' => 'Blackadder Goes Forth',
                'release_date' => 1989,
                'rating' => 5,
                'description' => 'Stuck in the middle of World War I, Captain Edmund Blackadder does his best to escape the banality of the war.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTQ0OTc1NTU1NV5BMl5BanBnXkFtZTcwNDk1NDYxMQ@@._V1_.jpg',
                'director' => 'Rowan Atkinson'
            ],
            [
                'name' => 'Battlestar Galactica',
                'release_date' => 2004,
                'rating' => 1,
                'description' => 'When an old enemy, the Cylons, resurface and obliterate the 12 colonies, the crew of the aged Galactica protect a small civilian fleet - the last of humanity - as they journey toward the fabled 13th colony, Earth.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTc1NTg1MDk3NF5BMl5BanBnXkFtZTYwNDYyMjI3._V1_.jpg',
                'director' => 'Glen A. Larson'
            ],
            [
                'name' => 'The X Files',
                'release_date' => 1993,
                'rating' => 4,
                'description' => 'Two F.B.I. Agents, Fox Mulder the believer and Dana Scully the skeptic, investigate the strange and unexplained, while hidden forces work to impede their efforts.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZDA0MmM4YzUtMzYwZC00OGI2LWE0ODctNzNhNTkwN2FmNTVhXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SY1000_SX675_AL_.jpg',
                'director' => 'Chris Carter'
            ],
            [
                'name' => 'Vikings',
                'release_date' => 2013,
                'rating' => 1,
                'description' => 'Vikings transports us to the brutal and mysterious world of Ragnar Lothbrok, a Viking warrior and farmer who yearns to explore - and raid - the distant shores across the ocean.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNDYyNzk1NzYwOF5BMl5BanBnXkFtZTgwMTQ0Nzc4MzI@._V1_SY1000_CR0,0,738,1000_AL_.jpg',
                'director' => 'Michael Hirst'
            ],
        ];
    }
}