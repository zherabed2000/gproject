<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class GeneralNotification extends Notification
{
    use Queueable;

    protected $instance_type;
    protected $instance_id;
    protected $via = [];
    protected $extra = [];

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($object = null, $message, $extra = [], $via = ['database'])
    {
        $this->via = $via;
        $this->extra = $extra;
        $this->extra['title'] = $message['title'];
        $this->extra['message'] = $message['content'];
        if (isset($object)) {
            $this->instance_type = get_class($object);
            $this->instance_id = $object->id;
        }

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return $this->via;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $data = $this->extra;
        if (isset($data['instance_type'])) {
            unset($data['instance_type']);
        }
        if (isset($data['instance_id'])) {
            unset($data['instance_id']);
        }
        return $data;
    }


    public function toDatabase($notifiable)
    {
        return [
            'type' => self::class,
            'notifiable_type' => get_class($notifiable),
            'notifiable_id' => $notifiable->id,
            'instance_type' => $this->instance_type,
            'instance_id' => $this->instance_id,
        ];
    }
}
