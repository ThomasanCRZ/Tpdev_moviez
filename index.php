<?php

//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';

$arrayMovies = [
    [
        "title" => "Avatar",
        "release_year" => 2009,
        "revenues" => 2847,
        "directors" => [
            "James Cameron"
        ],
        "productors" => [
            "James Cameron",
            "Jon Landau"
        ],
        "categories" => [
            "Science-fiction",
            "Action",
            "Aventure"
        ],
        "thumbnail_url" => "https://fr.web.img4.acsta.net/pictures/22/08/25/09/04/2146702.jpg",
        "teaser_url" => "https://www.youtube.com/watch?v=O1CzgULNRGs"
    ],
    [
        "title" => "Avengers: Endgame",
        "release_year" => 2019,
        "revenues" => 2798,
        "directors" => [
            "Anthony Russo",
            "Joe Russo"
        ],
        "productors" => [
            "Kevin Feige"
        ],
        "categories" => [
            "Super-héros"
        ],
        "thumbnail_url" => "https://fr.web.img2.acsta.net/pictures/19/04/04/09/04/0472053.jpg",
        "teaser_url" => "https://www.youtube.com/watch?v=wV-Q0o2OQjQ"
    ],
    [
        "title" => "Le Roi Lion",
        "release_year" => 2019,
        "revenues" => 1656,
        "directors" => [
            "Jon Favreau"
        ],
        "productors" => [
            "Jon Favreau",
            "Jeffrey Silver"
        ],
        "categories" => [
            "Animation",
            "Aventure",
            "Famille"
        ],
        "thumbnail_url" => "https://blob.cede.ch/catalog/16948000/16948364_1_92.jpg",
        "teaser_url" => "https://www.youtube.com/watch?v=tvvQitXftGk"
    ],
    [
        "title" => "Star Wars: Le Réveil de la Force",
        "release_year" => 2015,
        "revenues" => 2068,
        "directors" => [
            "J.J. Abrams"
        ],
        "productors" => [
            "Kathleen Kennedy",
            "J.J. Abrams"
        ],
        "categories" => [
            "Science-fiction",
            "Action",
            "Aventure"
        ],
        "thumbnail_url" => "https://fr.web.img4.acsta.net/pictures/15/10/18/18/56/052074.jpg",
        "teaser_url" => "https://www.youtube.com/watch?v=Y9b1gBTztCI"
    ],
    [
        "title" => "Avengers: Infinity War",
        "release_year" => 2018,
        "revenues" => 2048,
        "directors" => [
            "Anthony Russo",
            "Joe Russo"
        ],
        "productors" => [
            "Kevin Feige"
        ],
        "categories" => [
            "Super-héros"
        ],
        "thumbnail_url" => "https://fr.web.img4.acsta.net/pictures/18/04/05/16/25/3438394.jpg",
        "teaser_url" => "https://www.youtube.com/watch?v=eIWs2IUr3Vs"
    ],
    [
        "title" => "Jurassic World",
        "release_year" => 2015,
        "revenues" => 1670,
        "directors" => [
            "Colin Trevorrow"
        ],
        "productors" => [
            "Frank Marshall",
            "Patrick Crowley"
        ],
        "categories" => [
            "Science-fiction",
            "Aventure"
        ],
        "thumbnail_url" => "https://fr.web.img2.acsta.net/pictures/15/04/30/15/10/422000.jpg",
        "teaser_url" => "https://www.youtube.com/watch?v=wmzAfqhphq8"
    ],
    [
        "title" => "Le Monde de Narnia : L'Odyssée du Passeur d'Aurore",
        "release_year" => 2010,
        "revenues" => 415,
        "directors" => [
            "Michael Apted"
        ],
        "productors" => [
            "Mark Johnson",
            "Andrew Adamson"
        ],
        "categories" => [
            "Fantastique",
            "Aventure"
        ],
        "thumbnail_url" => "https://fr.web.img2.acsta.net/medias/nmedia/18/78/19/25/19539619.jpg",
        "teaser_url" => "https://www.youtube.com/watch?v=8wat1vJDHtY"
    ],
    [
        "title" => "The Avengers",
        "release_year" => 2012,
        "revenues" => 1519,
        "directors" => [
            "Joss Whedon"
        ],
        "productors" => [
            "Kevin Feige"
        ],
        "categories" => [
            "Super-héros"
        ],
        "thumbnail_url" => "https://fr.web.img3.acsta.net/medias/nmedia/18/85/31/58/20042068.jpg",
        "teaser_url" => "https://www.youtube.com/watch?v=b-kTeJhHOhc"
    ],
    [
        "title" => "Cars",
        "release_year" => 2006,
        "revenues" => 1000,
        "directors" => [
            "John Lasseter",
            "Joe Ranft"
        ],
        "productors" => [
            "John Lasseter",
            "Joe Ranft",
            "jorgen Klubien"
        ],
        "categories" => [
            "Animation",
            "Aventure",
            "Famille"
        ],
        "thumbnail_url" => "https://fr.web.img6.acsta.net/pictures/17/08/01/16/24/309645.jpg",
        "teaser_url" => "https://www.youtube.com/watch?v=40AUE3HOlmo"
    ],
];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviez App TPDEV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="title">
        <h1>Moviez App <span class="tpdev">TPDEV</span></h1>
    </div>
    <main>
        
        

    <?php 

        foreach ($arrayMovies as $movie) {
            echo '<div class="container-cards">';
            echo '<div class="card">';
            echo '<div class="thumbnail"><a href="' . $movie["teaser_url"] . '"><img class="thumbnail-img" src="' . $movie["thumbnail_url"] . '" alt=""><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 18V6l8 6-8 6Z"/>
          </svg></a></div>';
            echo '<div class="infos">';
            echo '<div class="title-card">' . $movie["title"] . '<span> (' . $movie["release_year"] . ')</span></div>';
            echo '<div class="categories-card"><span class ="descriptions">Catégorie: </span>' . implode(', ', $movie["categories"]) . '</div>';
            echo '<div class="productors-card"><span class ="descriptions">Producteur: </span>' . implode(', ', $movie["productors"]) . '</div>';
            echo '<div class="directors-card"><span class ="descriptions">Directeur: </span>' . implode(', ', $movie["directors"]) . '</div>';
            echo '<div class="release-year-card"><span class ="descriptions">Créé en: </span>' . $movie["release_year"] . '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    ?>

</html>

