<?php

namespace Controllers;

use Models\AbstractModel;

class Avis extends AbstractController
{
    protected $defaultModelName = \Models\Avis::class;


    public function new()
    {
        
    }

    public function delete()
    {
        $id = null;
        $velo_id = null;

        if (!empty($_POST["id"]) && ctype_digit($_POST["id"]))
        {
            $id = (int)$_POST["id"];
        }
        if (!empty($_POST["velo_id"]) && ctype_digit($_POST["velo_id"]))
        {
            $velo_id = (int)$_POST["velo_id"];
        }

        $velo = new \Models\Velo();

        $velo = $velo->findById($velo_id);

        $avis = $this->defaultModel->findById($id);

        var_dump($velo);
        var_dump($avis);
        die();

        if (!$avis)
        {
            $this->redirect([
                "type" => "velo",
                "action" => "show",
                "id" => $velo_id
            ]);
        }
    }


}

?>