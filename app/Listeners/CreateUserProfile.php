<?php

namespace App\Listeners;

use App\Models\UserProfile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateUserProfile
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        UserProfile::create([
            'user_id' => $event->user->id,
        ]);
    }
}
