<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Contact;

$contacts = [
    new Contact("Sanfold", "Clémence", "clemence@test.com"),
    new Contact("Abdilah", "Karim", "karim@test.com")
];

foreach ($contacts as $contact) {
    echo "Nom: " . $contact->getNom() . "\n";
    echo "Prénom: " . $contact->getPrenom() . "\n";
    echo "Email: " . $contact->getEmail() . "\n";
    echo "------------------------\n";
}
