<?php 

namespace Engine;

class Cms
{
    /**
     * @var DI
     */
    private $di;

    public $db;

    /**
     * @param $di
     */
    public function __construct ($di) 
    {   
        $this->di = $di;
    }

    /**
     * Run Cms
     */
    public function run ()
    { 
        // print_r($this->di);
        print_r($this->di);
    }



}