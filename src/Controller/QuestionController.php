<?php

namespace App\Controller;

use App\Model\QuestionManager;

class QuestionController extends AbstractController
{
    /*tableau de questions et réponses en propriétés
    private array $questions = [
  [
    "title" => "À quoi ressemble votre régime alimentaire habituel ?",
    "choice1" => "viande plus de trois fois par semaine",
    "choice2" => "viande jusqu'à trois fois par semaine",
    "choice3" => "végétarien (pas de viande, mais des produits d’origine animale
    comme les oeufs, le lait ou le fromage)",
    "choice4" => "végétalien (pas de viande ni de produits d’origine animale)",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Combien de boissons froides (sodas, sirops, alcool), consommez-vous par jour ?",
    "choice1" => "plus de 10 verres par semaine",
    "choice2" => "entre 5 et 10 verres par semaine",
    "choice3" => "moins de 10 verres",
    "choice4" => "je ne sais pas",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "A quelle fréquence jetez-vous de la nourriture ?",
    "choice1" => "plusieurs fois par semaine",
    "choice2" => "de temps en temps",
    "choice3" => "jamais",
    "choice4" => "je ne sais pas",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Quel type de petit-déjeuner vous correspond le plus ?",
    "choice1" => "viennoiserie baguette",
    "choice2" => "lait et céréales",
    "choice3" => "pas de petit-déjeuner",
    "choice4" => "ça dépend",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Quel moyen de transport utilisez-vous au quotidien ?",
    "choice1" => "Voiture",
    "choice2" => "Transports en commun",
    "choice3" => "Vélo",
    "choice4" => "À pieds",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Combien de fois prenez-vous l'avion par an ?",
    "choice1" => "Plus de 15 fois",
    "choice2" => "Plus de 5 fois",
    "choice3" => "1 à 2 fois",
    "choice4" => "Je ne prends jamais l'avion",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Quel moyen de transport utilisez vous pour partir en vacances (le plus souvent) ?",
    "choice1" => "Avion",
    "choice2" => "Voiture",
    "choice3" => "Train",
    "choice4" => "Je ne pars pas en vacances",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Avez-vous acheté un moyen de transport cette année ?",
    "choice1" => "Oui, une voiture",
    "choice2" => "Oui, une trottinette électrique",
    "choice3" => "Oui, un vélo",
    "choice4" => "Non",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Comment est chauffé votre logement ?",
    "choice1" => "fioul",
    "choice2" => "gaz",
    "choice3" => "électricité",
    "choice4" => "bois",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "de quand date votre logement ?",
    "choice1" => "récent (moins de 10 ans)",
    "choice2" => "entre 10 et 50 ans ?",
    "choice3" => "plus de 50 ans",
    "choice4" => "je ne sais pas (moyenne par défaut : 45 ans)",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "quelle est la surface de votre logement ?",
    "choice1" => "grande maison (plus de 160m²)",
    "choice2" => "maison",
    "choice3" => "appartement (3 pièces/environ 70m²)",
    "choice4" => "je ne sais pas (moyenne de 80m²)",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Quelle est votre énergie de cuisson ?",
    "choice1" => "gaz en bouteille",
    "choice2" => "gaz de ville",
    "choice3" => "électrique",
    "choice4" => "je ne sais pas",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Quel âge a votre ordinateur portable ?",
    "choice1" => "Moins d'un an",
    "choice2" => "Entre 1 et 2 an(s)",
    "choice3" => "Entre 3 et 5 ans",
    "choice4" => "Plus de 5 ans",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Quel âge a votre smartphone ?",
    "choice1" => "Moins d'un an",
    "choice2" => "Entre 1 et 2 an(s)",
    "choice3" => "Entre 3 et 5 ans",
    "choice4" => "Vous n'avez pas de smartphone",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Quel âge a votre TV ?",
    "choice1" => "Moins d'un an",
    "choice2" => "Entre 1 et 5 ans",
    "choice3" => "Plus de cinq ans",
    "choice4" => "Je ne sais pas",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ],
  [
    "title" => "Combien d'heures passez-vous sur internet (hors travail) ?",
    "choice1" => "Plus de 5h par jour",
    "choice2" => "Environ 5h par jour",
    "choice3" => "Environ 2h par jour",
    "choice4" => "Je ne sais pas (base 2h par jour)",
    "result1" => "100",
    "result2" => "200",
    "result3" => "300",
    "result4" => "400"
  ]
];*/
    // function show
}
