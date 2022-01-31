<?php 

namespace Models;

class Avis extends AbstractModel
{

    protected string $tableName = "avis";
    private string $author;
    private string $content;
    private int $velo_id;

    public function getId(): int
    {
        return $this->id;
    }

    // Author gs

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
    
    // Content gs
    public function setContent (string $content): void
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    // velo_id getter

    public function setVelo_Id(int $velo_id): void
    {
        $this->velo_id = $velo_id;
    }

    public function getVelo_Id(): int
    {
        return $this->velo_id;
    }


    /**
     * Avis creation:
     * 
     * Insert a new avis in the database
     * Using an object of the class Avis
     * 
     * @return void
     */
    public function save(Avis $avis):void
    {
        $sql = $this->pdo->prepare("INSERT INTO {$this->tableName} (author, content, velo_id)
        VALUES (:author, :content, :velo_id)");
        $sql->execute([
            "author" => $avis->author,
            "content" => $avis->content,
            "velo_id" => $avis->velo_id
        ]);
    }

    /**
     * Get all the avis using their associated velo_id
     * 
     * @param integer $velo_id
     * 
     * @return array | bool
     */
    public function findAllById(int $velo_id): array | bool
    {
        $sql = $this->pdo->prepare("SELECT * FROM {$this->tableName} WHERE velo_id = :velo_id");
        $sql->execute([
            "velo_id" => $velo_id
        ]);

        $elements = $sql->fetchAll(\PDO::FETCH_CLASS, get_class($this));

        return $elements;
    }
}