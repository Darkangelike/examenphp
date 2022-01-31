<div class="container">
    <form action="?type=velo&action=new" method="post">
        <div class="d-flex flex-column">
            <h1>Ajoutez votre vélo à vendre dans notre magasin</h1>
            <input type="text" name="name" placeholder="Entrez le nom du vélo ici" id="name">
            <textarea name="description" placeholder="Entrez une description du vélo" id="" cols="30" rows="10"></textarea>
            <input type="text" name="image" placeholder="Entrez l'url d'une image" id="image">
            <input type="number" name="price" placeholder="Mettez le prix du vélo" id="price">
            <input class="btn btn-info" type="submit" name="create" value="post">
        </div>
    
    </form>

</div>