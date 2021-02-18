<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFrom extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Esteban\'s Portfolio')
            ->greeting('Thank you for visiting my portfolio!')
            ->line('I will be in touch with you as soon as possible.')
            ->action('Check my Repositories', url('http://esteban-salas-guzman.herokuapp.com/repositories'));
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
