<?php

namespace App\Console\Commands;

use App\Http\Controllers\WeChatWebRobotController;
use Illuminate\Console\Command;

class WeChatWebRoBot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'WeChatWebRoBot:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'WeChat Web RoBot Service';

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
     * @return mixed
     */
    public function handle()
    {
        //
        (new WeChatWebRobotController())->createWeChatEnd();
    }
}
