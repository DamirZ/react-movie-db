# Movies

/api/movies
/api/movies/all

Search movies by all attributes

# Shows

/api/shows
/api/shows/all

Search shows by all attributes

# Search

Search movies or shows by all attributes. Optional: More than 3 stars, older than 2017 etc.

# Login / Register

Login and register with OAuth2

# DB

users: [
    {
        name: "Damir",
        email: "jasamdamir@hotmail.com",
        password: "hashed_password"
    },
    ...
]

movies: [
    {
        name: "Lord of The Rings: The Fellowship Of The Ring",
        release_date: 2001,
        rating: 5,
        description: "Best goddamn movie ever",
        image: "url_on_web",
        director: "Peter Jackson",
        actors: [ "Viggo Mortensen", "Ian McKellen" ]
    }, 
    ...
]

rated_list: [
    {
        name: "Lord of The Rings: The Fellowship Of The Ring",
        image: "url_on_web",
        average: 5,
        one: 0,
        two: 1,
        three: 4,
        four: 13,
        five: 244
    },
    ...
]

shows: [
    {
        name: "Mr. Robot",
        release_date: 2015,
        rating: 5,
        description: "Good show",
        image: "url_on_web",
        director: "Sam Esmail",
        actors: [ "Rami Malek", "Christian Slater" ]
    }
]

What is the best choice for this?

