<?php

namespace App;

class Response
{
    /**
     * Redirect the page towards an url created using an array with its keys and values
     * 
     * @param array $parameters
     * 
     * @return void
     */
    public static function redirect(?array $parameters = null): void{

        $url = "index.php";

        if ($parameters) {
            $url = "?";
            foreach ($parameters as $key => $value)
            {
                $url .= $key . "=" . $value . "&";
            }
        }

        header("Location: ".$url);
        exit();
    }
}


?>