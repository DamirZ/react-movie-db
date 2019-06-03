<?php
require_once dirname(dirname(__FILE__)) . '/../handlers/MovieHandler.php';

class MoviesSeeder
{
    public static function up() {
        $movieHandler = new MovieHandler;

        foreach (self::movies() as $movie) {
            $movieHandler->insert([
                sprintf(
                    "('%s', '%d', '%d', '%s', '%s', '%s')", 
                    $movie['name'],
                    $movie['release_date'],
                    $movie['rating'],
                    $movie['description'],
                    $movie['image'],
                    $movie['director']
                )
            ]);
        }
    }

    public static function down() {
        $movieHandler = new MovieHandler;
        $movieHandler->truncate();
    }

    private static function movies() {
        return [
            [
                'name' => 'The Lord of the Rings: The Fellowship of the Ring',
                'release_date' => 2001,
                'rating' => 3,
                'description' => 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SY999_CR0,0,673,999_AL_.jpg',
                'director' => 'Peter Jackson'
            ],
            [
                'name' => 'The Shawshank Redemption',
                'release_date' => 1994,
                'rating' => 3,
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
                'director' => 'Frank Darabont'
            ],
            [
                'name' => 'The Godfather',
                'release_date' => 1972,
                'rating' => 5,
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,704,1000_AL_.jpg',
                'director' => 'Francis Ford Coppola'
            ],
            [
                'name' => 'The Godfather 2',
                'release_date' => 1974,
                'rating' => 4,
                'description' => 'The early life and career of Vito Corleone in 1920s New York City is portrayed, while his son, Michael, expands and tightens his grip on the family crime syndicate.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMWMwMGQzZTItY2JlNC00OWZiLWIyMDctNDk2ZDQ2YjRjMWQ0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,701,1000_AL_.jpg',
                'director' => 'Francis Ford Coppola'
            ],
            [
                'name' => 'The Dark Knight',
                'release_date' => 2008,
                'rating' => 2,
                'description' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
                'director' => 'Christopher Nolan'
            ],
            [
                'name' => 'The Lord of the Rings: The Two Towers',
                'release_date' => 2002,
                'rating' => 4,
                'description' => 'While Frodo and Sam edge closer to Mordor with the help of the shifty Gollum, the divided fellowship makes a stand against Saurons new ally, Saruman, and his hordes of Isengard.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNGE5MzIyNTAtNWFlMC00NDA2LWJiMjItMjc4Yjg1OWM5NzhhXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,684,1000_AL_.jpg',
                'director' => 'Peter Jackson'
            ],
            [
                'name' => 'The Lord of the Rings: The Return Of The King',
                'release_date' => 2003,
                'rating' => 5,
                'description' => 'While Frodo and Sam edge closer to Mordor with the help of the shifty Gollum, the divided fellowship makes a stand against Saurons new ally, Saruman, and his hordes of Isengard.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNzA5ZDNlZWMtM2NhNS00NDJjLTk4NDItYTRmY2EwMWZlMTY3XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
                'director' => 'Peter Jackson'
            ],
            [
                'name' => 'The Matrix',
                'release_date' => 1999,
                'rating' => 5,
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,665,1000_AL_.jpg',
                'director' => 'The Watchowski Brothers'
            ],
            [
                'name' => 'Saving Private Ryan',
                'release_date' => 1998,
                'rating' => 1,
                'description' => 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZjhkMDM4MWItZTVjOC00ZDRhLThmYTAtM2I5NzBmNmNlMzI1XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_SY1000_CR0,0,679,1000_AL_.jpg',
                'director' => 'Steven Spielberg'
            ],
            [
                'name' => 'The Green Mile',
                'release_date' => 1999,
                'rating' => 1,
                'description' => 'The lives of guards on Death Row are affected by one of their charges: a black man accused of child murder and rape, yet who has a mysterious gift.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTUxMzQyNjA5MF5BMl5BanBnXkFtZTYwOTU2NTY3._V1_.jpg',
                'director' => 'Frank Darabont'
            ],
            [
                'name' => 'Terminator 2: Judgment Day',
                'release_date' => 1991,
                'rating' => 2,
                'description' => 'A cyborg, identical to the one who failed to kill Sarah Connor, must now protect her teenage son, John Connor, from a more advanced and powerful cyborg.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMGU2NzRmZjUtOGUxYS00ZjdjLWEwZWItY2NlM2JhNjkxNTFmXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY999_CR0,0,672,999_AL_.jpg',
                'director' => 'James Cameron'
            ],
            [
                'name' => 'The Lion King',
                'release_date' => 1994,
                'rating' => 3,
                'description' => 'A Lion cub crown prince is tricked by a treacherous uncle into thinking he caused his fathers death and flees into exile in despair, only to learn in adulthood his identity and his responsibilities.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BYTYxNGMyZTYtMjE3MS00MzNjLWFjNmYtMDk3N2FmM2JiM2M1XkEyXkFqcGdeQXVyNjY5NDU4NzI@._V1_SY1000_CR0,0,673,1000_AL_.jpg',
                'director' => 'Roger Allers'
            ],
            [
                'name' => 'Spider-Man: Into the Spider-Verse',
                'release_date' => 2018,
                'rating' => 4,
                'description' => 'Teen Miles Morales becomes Spider-Man of his reality, crossing his path with five counterparts from other dimensions to stop a threat for all realities.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMjMwNDkxMTgzOF5BMl5BanBnXkFtZTgwNTkwNTQ3NjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
                'director' => 'Bob Persichetti'
            ],
            [
                'name' => 'WALL-E',
                'release_date' => 2008,
                'rating' => 5,
                'description' => 'In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMjExMTg5OTU0NF5BMl5BanBnXkFtZTcwMjMxMzMzMw@@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
                'director' => 'Andrew Stanton'
            ],
            [
                'name' => 'Ivkova Slava',
                'release_date' => 2005,
                'rating' => 3,
                'description' => 'The story takes place in Nis, towards the end of the nineteenth century, during the calm down of the stormy historic events which led to final liberation of southern Serbian parts from Turkish occupation.',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZWFkZTQzODItYTAyMC00MTA0LTk1NjgtNjk4Yzk1MmMyZDY2XkEyXkFqcGdeQXVyMTgxOTUwMTI@._V1_.jpg',
                'director' => 'Zdravko Sotra'
            ],
        ];
    }
}