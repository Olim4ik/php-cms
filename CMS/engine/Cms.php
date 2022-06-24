<?php 

namespace Engine;

class Cms
{
    /**
     * @var DI
     */
    private $di;

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
        $db = $this->di->get('test2');
        print_r($db);
    }



}