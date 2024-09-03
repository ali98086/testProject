<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Markdown;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeNotification extends Notification
{
    use Queueable;

    protected $messages;
    /**
     * Create a new notification instance.
     */
    public function __construct($messages)
    {
        $this->messages= $messages;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->from('ali98086@gmail.com','سایت لاراول')
                    ->subject('پیام خوش آمدگویی')
                    ->greeting('سلام')
                    ->line($this->messages['hi'])
                    ->line($this->messages['body'])
                    ->Markdown('vendor.notifications.email',['مدیریت سایت'])
                    ->salutation('علی شیخ زاده قمی');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
