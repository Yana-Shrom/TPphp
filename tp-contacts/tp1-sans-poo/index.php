<?php

$contacts = [
    [
    "nom" => "Sanfold",
    "prenom" => "Clémence",
    "email" => "clemence@gmail.com"
    ],
    [
    "nom" => "Abdilah II",
    "prenom" => "Karim",
    "email" => "karim@gmail.com"
    ]
];

foreach ($contacts as $contact) {
    echo "Nom: " . $contact['nom'] . "\n";
    echo "Prénom: " . $contact['prenom'] . "\n";
    echo "Email: " . $contact['email'] . "\n";
    echo "------------------------\n";
}
