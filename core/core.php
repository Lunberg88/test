<?php
namespace core;

use core\img;
use write\writter;
use read\reader;

class Core
{
  public function run($param1, $param2)
  {
  if($param1 !=2 || in_array($param2, array('-parse', '-help', '-report' => ['']))) {
   echo "There are no such command - ".$param2."\n";
  } else {
        switch ($param2) {
            case "parse":
                echo "Enter the URL: ";
                $line = trim(fgets(STDIN));
                $img = new img();
                $data = $img->search($line);
                echo "\n =======================";
                echo "\n data successful saved!";
                echo "\n =======================\n";
                $wr = new writter();
                $wr->write($data, $line);
                break;
            case "help":
                echo "\n ====================================================== \n";
                echo "\n Can i help you?\n";
                echo "\n The list of all available commands: \n";
                echo "\n type: -parse | init script to parse input URL-address \n";
                echo "\n type: -help | show help tips \n";
                echo "\n type: -report | show info about last parsed URL-address\n";
                echo "\n ====================================================== \n";
                echo "\n";
                break;
            case "report":
                echo "Enter domain name: ";
                $line = trim(fgets(STDIN));
                $r = new reader();
                $r->read($line);
                echo "This report for domain: ...\n";
                break;

        }
    }
  }
}


