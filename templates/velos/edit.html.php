<div class="container">
    <form action="?type=velo&action=new" method="post">
        <div class="d-flex flex-column">
            <h1>Ajoutez votre vélo à vendre dans notre magasin</h1>
            <input type="text" name="name" value="<?= $velo->getName() ?>" id="name">
            <textarea name="description" id="" cols="30" rows="10"><?= $velo->getDescription() ?></textarea>
            <input type="text" name="image" value="<?= $velo->getImage() ?>" id="image">
            <input type="number" name="price" value="<?= $velo->getPrice() ?>" id="price">
            <input class="btn btn-info" type="submit" name="edit" value="post">
        </div>
    
    </form>

</div>