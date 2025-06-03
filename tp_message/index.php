<?php
require __DIR__ . '/vendor/autoload.php';

use App\NotificationEmail;
use App\NotificationSMS;
use App\NotificationPush;
use App\NotificationSystem;

$notifications = [
    new NotificationEmail(),
    new NotificationSMS(),
    new NotificationPush()
];

foreach ($notifications as $notification) {
    $notification->envoyerNotification();
}

$system = new NotificationSystem();
$system->log("Envoi de notification.");

// class TestSystem extends \App\NotificationSystem {}
