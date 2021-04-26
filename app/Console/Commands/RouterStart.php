<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\RealTimeRouterOs;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Broadcast;

class RouterStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'routerOs:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inicializa el consumo en tiempo real de los datos de la api del routerOs';

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
        $ejemplo = new TestController();
        $data = $ejemplo->index();
        Broadcast( new RealTimeRouterOs($data));
    }
}
