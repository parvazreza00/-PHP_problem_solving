<?php
interface NotificationInterface{
    public function send(string $message) : void ;
}

class EmailNotification implements NotificationInterface {
    public function send(string $message): void {
        echo "Sending email with message : $message\n";
    }
}

class SMSNotification implements NotificationInterface {
    public function send(string $message): void{
        echo "Sending SMS with message: $message\n";
    }
}

function notify(NotificationInterface $notification, string $message){
    $notification->send($message);
}

$emailNotification = new EmailNotification();
$smsNotification = new SMSNotification();

notify($emailNotification,"Hello via Email");
notify($smsNotification,"Hello via SMS");