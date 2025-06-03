<?php
namespace App;

class NotificationEmail implements Notifiable {
    public function envoyerNotification() {
        echo "Envoi d'un email de notification.\n";
    }

    final public function configurerServeurSMTP() {
        echo "Configuration du serveur SMTP.\n";
    }
}
