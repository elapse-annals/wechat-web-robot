<?php

namespace App\Http\Controllers;

use App\Services\WeChatWebRobotService;

/**
 * Class WeChatWebRobotController
 * @package App\Http\Controllers
 */
class WeChatWebRobotController extends Controller
{
    /**
     * @var WeChatWebRobotService
     */
    protected $service;

    /**
     * WeChatWebRobotController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->service = new WeChatWebRobotService();
    }

    /**
     * @param $framework
     * @param $framework_name
     * @param $is_delete
     */
    public function handle($framework, $framework_name, $is_delete)
    {
        $this->service->createWeChatEnd();
    }


}
