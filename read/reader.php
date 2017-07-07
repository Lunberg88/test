<?php
namespace read;

use write\writter;

class reader
{

    public function read($name)
    {
        $w = new writter();
        $filename = $w->path."/".$name.".csv";
        if(!empty($name)) {
            if(file_exists($filename)) {
                $data = file_get_contents($filename);
                echo $data."\n";
                echo "\n ============ \n";
            }
        }
    }

    public function getContent()
    {

    }
}