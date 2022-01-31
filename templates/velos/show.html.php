<div class="card-group">
    
    <!-- CARD BIKE-->
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
    
    
    <!-- CARD AVIS -->
    <div class="velo-card m-4">
        <!-- ALL AVIS -->
        <?php foreach ($avis as $unAvis) { ?>

            <!-- Delete button -->
            <form action="?type=avis&action=delete" method="POST">
                <input type="hidden" name="velo_id" id="velo_id" value="<?= $velo->getId() ?>">
                <button value="<?= $unAvis->getId() ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>


            <!-- TITLE -->
            <div class="card-header">
                <H2><?= $unAvis->getAuthor() ?></H2>
            </div>
            
            <!-- CONTENT -->
            <div class="card-body">
                <p><?= $unAvis->getContent() ?></p>
            </div>
            
            <?php } ?>
            <!-- END OF AVIS FOREACH -->
            

    <!-- FORM -->
    <div class="card-footer">
        
        <form action="?type=avis&action=new" method="POST">
            <div class="form-group">
                <input placeholder="Your name" type="text" name="author">
            </div>
            <div class="form-group">
                <textarea placeholder="Your comment" type="text" name="content"></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" name="velo_id" value="<?= $velo->getId() ?>" class="btn btn-info">Ajouter un avis</button>
            </div>
        </form>
    </div>

    
</div>


        