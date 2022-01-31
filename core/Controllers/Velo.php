<?php

namespace Controllers;

class Velo extends AbstractController
{
    protected $defaultModelName = \Models\Velo::class;

    public function index()
    {
        $velos = $this->defaultModel->findAll();

        return $this->render("velos/index", [
            "pageTitle" => "Tous les vélos",
            "velos" => $velos,
        ]);
    }

    public function new()
    {
        $name = null;
        $description = null;
        $image = null;
        $price = null;
        $create = null;

        if (!empty($_POST["name"]))
        {
            $name = htmlspecialchars($_POST["name"]); 
        }
        if (!empty($_POST["description"]))
        {
            $description = htmlspecialchars($_POST["description"]);
        }
        if (!empty($_POST["image"]))
        {
            $image = htmlspecialchars($_POST["image"]);
        }
        if (!empty($_POST["price"]) && ctype_digit($_POST["price"]))
        {
            $price = (int)$_POST["price"];
        }

        if (!empty($_POST["create"]))
        {
            $create = true;
        }

        if($create && (!$name || !$description || !$image || !$price))
        {
            $this->redirect([
                "type" => "velo",
                "action" => "new"
            ]);
        }

        $velo = new \Models\Velo();

        if ($create && $name && $description && $image && $price)
        {
            $velo->setName($name);
            $velo->setDescription($description);
            $velo->setImage($image);
            $velo->setPrice($price);
    
            $this->defaultModel->save($velo);
            
            $this->redirect([
                "type" => "velo",
                "action" => "index"
            ]);
        }


        return $this->render("velos/create", [
            "pageTitle" => "Ajoutez un vélo à la liste"
        ]);

    }

    public function delete()
    {
        $id = null;

        if (!empty($_POST["id"]) && ctype_digit($_POST["id"]))
        {
            $id = (int)$_POST["id"];
        }

        // $velo = new \Models\Velo();

        $velo = $this->defaultModel->findById($id);

        if (!$velo)
        {
            $this->redirect([
                "type" => "velo",
                "action" => "index",
                "info" => "errId"
            ]);
        }

        $this->defaultModel->remove($id);

        $this->redirect([
            
                "type" => "velo",
                "action" => "index"
        ]);
    }
}