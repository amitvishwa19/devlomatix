<?php

namespace App\Console\Commands;

use App\Jobs\FCMNotificationJob;
use Illuminate\Console\Command;

class FCMAndroidNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fcm:androidnotification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'FCM will send Notification to android device';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dispatch( new FCMNotificationJob());
    }
}
