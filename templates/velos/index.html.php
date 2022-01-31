<div>
    <a href="?type=velo&action=index">Vélos</a>
    <a class="btn btn-info" href="?type=velo&action=new">
        <i class="fas fa-plus-circle"></i></a>
</div>
        
<div class="container card-group d-flex flex-column text-center">
    
    <?php foreach ($velos as $velo) { ?>
        
        <div class="card">
            <div class="card-header">
                <h1><?= $velo->getName() ?></h1>
            </div>
            <div class="card-body">
                <img src="images/<?= $velo->getImage() ?>.jpg" alt="">

                <p><h3>Description:</h3>
                <?= $velo->getDescription() ?>
            </p>
            </div>
            <div class="card-footer">
                <button class="btn btn-info"><?= $velo->getPrice() ?> €</button>
            </div>
        </div>
    
    <?php } ?>

</div>