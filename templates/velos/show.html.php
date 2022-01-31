<!-- CARD -->
<div class="velo-card m-4">
    <!-- Buttons group -->
    <div style="height:40px">

        <!-- Edit button -->
            <a href="?id=<?= $velo->getId() ?>&action=new&type=velo" style="float:right" class="btn btn-info">Edit</a>
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