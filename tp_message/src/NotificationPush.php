<?php
namespace App;

class NotificationPush implements Notifiable {
    public function envoyerNotification() {
        echo "Envoi d'une notification push.\n";
    }
}
