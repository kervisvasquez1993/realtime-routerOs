<?php

namespace App\Console\Commands;

use App\Events\RouterOs;
use Illuminate\Console\Command;
use Illuminate\Contracts\Queue\ShouldQueue;

class realtimeExecute extends Command 
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    
    protected $signature = 'realtime:execute {datos}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'realtime:execute inicia la ejecucion de la api';

    private $time = 0;
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
        while(true)
        {
            
          broadcast(new RouterOs($this->argument('datos')));

            $this->time++;
            sleep(1);
           
        }
        
    }
    public  function convert_from_latin1_to_utf8_recursively($dat)
    {
       if (is_string($dat)) {
          return utf8_encode($dat);
       } elseif (is_array($dat)) {
          $ret = [];
          foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);
 
          return $ret;
       } elseif (is_object($dat)) {
          foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);
 
          return $dat;
       } else {
          return $dat;
       }
    }
}
