<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactTo extends Notification implements ShouldQueue
{
    use Queueable;

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Esteban\'s Portfolio')
            ->greeting('You have a new message!')
            ->line('From: ' . $this->contact['email'])
            ->line('Message: ' . $this->contact['message']);
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
