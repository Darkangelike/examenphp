<?php

namespace Controllers;

abstract class AbstractController
{
    protected object $defaultModel;
    protected $defaultModelName;

    public function __construct()
        {
            $this->defaultModel = new $this->defaultModelName();
        }
    
    /**
     * Displays a page using different html templates and an array of data
     * 
     * @param string $template
     * @param array $donnees
     * 
     */
    public function render(string $template, array $donnees)
    {
        return \App\View::render($template, $donnees);
    }

    /**
     * Redirect to the given $url in parameter
     * 
     * @param array $parameters
     * 
     * @return \App\Response
     */
    public function redirect(?array $parameters = null):\App\Response
    {
        return \App\Response::redirect($parameters);
    }
}



?>