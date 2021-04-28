<?php require '../model/header.php';?>
<?php  require '../classes/posts.php';?>
<?php
$postCreate = new Post();
if (isset($_POST['envoyer'])) {
    $postCreate->setCreate();
    echo "Modification apportée";
}
?>
<div class="col-md-12 mt-4">                
	           
            </div>
            <form class="mt-4"  method="post">
            <h2 class="text-uppercase">Crée un post pour l'utilisateur : <input type="text" value="1" name="Users_id" id=""readonly> </h2>
                <div class="form-group">
                    <label for="title " class="mt-2">Titre</label>            
                    <input class="form-control mb-2" type="text" placeholder="Titre" id="title" name="title">
                    <label for="categories_id">Selectioner votre catégorie</label>
                    <select class="form-control" id="categories_id" name="categories_id">
                        <option value="1">Tres-Zap</option>
                        <option value="2">Keylex</option>
                        <option value="3">Opela</option>
                        <option value="4">Regrant</option>
                        <option value="5">Regrante</option>
                        <option value="6">Flowdesk</option>
                        <option value="7">Home Ing</option>
                        <option value="8">Lotstring</option>
                        <option value="9">Matsoft</option>
                    </select>
                    <label for="content" class="mt-3">Remplir votre article</label>
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Votre texte ici" class="w-100 mt-1"></textarea>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-lg btn-primary btn-block mt-4 text-center"  name="envoyer" type="submit" >Créer</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
<?php require '../model/footer.php';?>