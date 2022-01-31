<?php

namespace Controllers;

class Avis extends AbstractController
{
    protected $defaultModelName = \Models\Avis::class;


    /**
     * 
     * Checks the form values
     * If correct, insert a new avis in the database
     * Then redirects to the velos/show page
     * to show the new inserted comment
     */
    public function new()
    {
        $velo_id = null;
        $author = null;
        $content = null;

        if(!empty($_POST["velo_id"]) && ctype_digit($_POST["velo_id"]))
        {
            $velo_id = (int)$_POST["velo_id"];
        }

        if (!empty($_POST["author"]))
        {
            $author = htmlspecialchars($_POST["author"]);
        }
        if (!empty($_POST["content"]))
        {
            $content = htmlspecialchars($_POST["content"]);
        }

        
        $velo = new \Models\Velo();
        
        $velo = $velo->findById($velo_id);
        
        if (!$velo_id)
        {
            $this->redirect([
                "type" => "velo",
                "action" => "index",
                "info" => "errId"
            ]);
        }
        
        if (!$author || !$content)
        {
            $this->redirect([
                "type" => "velo",
                "action" => "show",
                "id" => $velo_id,
                "info" => "errForm"
            ]);
        }
        
        $avis = new \Models\Avis();
        $avis->setAuthor($author);
        $avis->setContent($content);
        $avis->setVelo_Id($velo_id);
        
        $avis = $avis->save($avis);

        $this->redirect([
                "type" => "velo",
                "action" => "show",
                "id" => $velo_id
        ]);


    }

    /**
     * Deletes a comment using its id
     * redirects to the page of the bike
     * Adds an info err if any of the ids are wrong
     * 
     * @return void
     */
    public function delete():void
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

        if (!$avis)
        {
            $this->redirect([
                "type" => "velo",
                "action" => "show",
                "id" => $velo_id
            ]);
        }
        
        $this->defaultModel->remove($id);

        $this->redirect([
                "type" => "velo",
                "action" => "show",
                "id" => $velo_id
        ]);
    }


}

?>