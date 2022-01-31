<div>
    <a href="?type=velo&action=index">Vélos</a>
    <a class="btn btn-info" href="?type=velo&action=new">
        <i class="fas fa-plus-circle"></i></a>
</div>
        
<!-- CARD GROUP -->
<div class="card-group justify-content-center">
    <?php foreach ($velos as $velo) { ?>

    <!-- CARD -->
    <div class="velo-card m-4">

        <!-- Buttons group -->
        <div style="height:40px">

            <!-- Delete button -->
            <form action="?type=velo&action=delete&id=<?= $velo->getId() ?>" method="POST">
                <button value="<?= $velo->getId() ?>" name="id" style="float:right" class="btn btn-danger">X</button>
            </form>

            <!-- Edit button -->
                <a href="?id=<?= $velo->getId() ?>&action=edit&type=velo" style="float:right" class="btn btn-info">Edit</a>
    
            <!-- View button -->
                <a href="?id=<?= $velo->getId() ?>&action=show&type=velo" style="float:right" class="btn btn-info">View</a>
        </div>

        <!-- TITLE -->
        <H1><?= $velo->getName() ?></H1>

        <!-- Image -->
        <img src="images/<?= $velo->getImage() ?>.jpg"/>

        <!-- Footer -->
        <div class="card-footer">
            <h3>Description:</h3>
            <p><?= $velo->getDescription() ?></p>
            <button class="btn btn-info"><?= $velo->getPrice() ?> €</button>
        </div>
    </div>
    <?php } ?>
    <!-- End of card -->
    
</div>