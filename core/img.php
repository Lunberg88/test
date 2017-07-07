<?php
namespace core;

class Img
{
    public function search($uri)
    {
        $images = [];
        $data = file_get_contents('http://'.$uri.'');
        preg_match_all('/(img|src)=("|\')[^"\'>]+/i', $data, $media);
        unset($data);
        $data = preg_replace('/(img|src)("|\'|="|=\')(.*)/i', "$3", $media[0]);

        foreach ($data as $url) {
            $info = pathinfo($url);
            if (isset($info['extension'])) {
                if (($info['extension'] == 'jpg') ||
                    ($info['extension'] == 'jpeg') ||
                    ($info['extension'] == 'gif') ||
                    ($info['extension'] == 'png'))
                    array_push($images, [$url, $uri]);

                }
        }
        return $images;
    }
/*
    public function show($info, $url)
    {
        $x = 1;
        foreach ($info as $imgs) {
                echo $x . ") " . $imgs . " | source: " . $url . "\n";
                $x++;
        }
    }
*/
}