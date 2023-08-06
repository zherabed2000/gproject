<?php

namespace App\Console\Commands;

use App\Models\Note;
use App\Notifications\CustomDBChannel;
use App\Notifications\GeneralNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class CheckNoteReminderDateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'note:check-reminder-date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $notes = Note::query()->whereDate('reminder_date' , today()->toDateString())->with('user')->get();
        foreach ($notes as $note){


            $message = [
                'title' => 'Note Reminder',
                'content' => "It's time for your note reminder",
            ];

            Notification::send($note->user, new GeneralNotification($note, $message, [], [CustomDBChannel::class]));

        }
    }
}
