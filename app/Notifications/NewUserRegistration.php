<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class NewUserRegistration extends Notification
{
    use Queueable;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'type' => 'new_user',
            'header' => 'New User Registration !',
            'body1' => 'User Name - '.$this->user->name,
            'body2' => 'Email - '.$this->user->email
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'type' => 'new_user',
            'header' => 'New User Registration !',
            'body1' => 'User Name - '.$this->user->name,
            'body2' => 'Email - '.$this->user->email,
            'created_at' => $this->user->created_at
        ]);
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
