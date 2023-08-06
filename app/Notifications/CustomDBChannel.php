<?php

namespace App\Notifications;

//use App\Traits\FireStore;
use Illuminate\Notifications\Notification;

class CustomDBChannel
{
//    use FireStore;

    public function send($notifiable, Notification $notification)
    {
        $data = $notification->toDatabase($notifiable);
        $data['id'] = $notification->id;
        $data['data'] = $notification->toArray($notifiable);
        //this for firebase change
//        $this->createAdminNotification($notifiable->id, $data['data']);
        return $notifiable->routeNotificationFor('database')->create($data);
    }

}
