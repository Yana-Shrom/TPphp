<?php
namespace App;


class NotificationEmailAvancee extends NotificationEmail {
    public function configurerServeurSMTP() {
        echo "Redéfinition du serveur SMTP.\n";
    }
}
