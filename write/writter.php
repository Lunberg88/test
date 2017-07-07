<?php
namespace write;


class writter
{
    public $path = (__DIR__)."/../data";

    public function write($data, $uri)
    {
        $url = explode("/", $uri);
        $name = $url[0];

        $titles = ['img', 'source'];
        $fp = fopen($this->path .'/'.$name . '.csv', 'w');
            fputcsv($fp, $titles, ';');
            foreach ($data as $line) {
                fputcsv($fp, $line, ';');
            }
        fclose($fp);
    }

}