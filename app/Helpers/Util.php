<?php namespace App\Helpers;

class Util
{
    /**
     * Criar um dominio aparti
     * do env, retirando os protocolos
     * e montando somente a string da url
     * @return string
    */
    public static function removeHttp (string $url) : string
    {
        if ($url == 'http://' || $url == 'https://'){
            return $url;
        }
        $matches = substr($url, 0, 7);
        if ($matches=='http://') {
            $url = substr($url, 7);
        } else {
            $matches = substr($url, 0, 8);
            if ($matches=='https://') {
                $url = substr($url, 8);
            }
        }
        return rtrim($url, '/');
    }

}
