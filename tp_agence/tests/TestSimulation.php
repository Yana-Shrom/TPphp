<?php
require __DIR__ . '/../vendor/autoload.php';

use Agency\Model\Project;
use Agency\Model\Developer;
use Agency\Model\DevelopmentTask;
use Agency\Model\DesignTask;

$dev1 = new Developer(1, "David", ["PHP", "Symfony"]);
$dev2 = new Developer(2, "Sarah", ["JS", "UX"]);

$project1 = new Project(1, "Site vitrine", "Client A", new DateTime('2025-01-01'));
$project2 = new Project(2, "App mobile", "Client B", new DateTime('2025-01-01'));

$task1 = new DevelopmentTask(1, "Développement backend", $dev1, 20);
$task2 = new DevelopmentTask(2, "Développement frontend", $dev2, 15);
$task3 = new DesignTask(3, "Design UI", $dev2, "Figma");

$project1->addTask($task1);
$project1->addTask($task3);
$project2->addTask($task2);

$task1->completeTask();
$task3->completeTask();

echo "Projet 1 ({$project1->getName()}) - Progression : " . $project1->getProgress() . "%\n";
echo "Projet 2 ({$project2->getName()}) - Progression : " . $project2->getProgress() . "%\n";

echo "Coût de la tâche dev 1 : " . $task1->calculateCost() . "€n";
echo "Coût de la tâche dev 2 : " . $task2->calculateCost() . "€n";

echo "Charge de travail de {$dev1->getName()} : " . $dev1->getWorkload() . " tâche(s)n";
echo "Charge de travail de {$dev2->getName()} : " . $dev2->getWorkload() . " tâche(s)n";
