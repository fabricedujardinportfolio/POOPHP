<?php
//Ne pas oublier d'ajouter le fichier posts.php
require '../classes/posts.php';
?>
<?php require '../model/header.php';?>
<div class="container">
    <?php  
        
        $poste = new Post();
        if(isset($_POST['update'])) {
            $poste->setUpdate();
            echo "Modification apportée";
        }   

        $post = new Post();
        $posts = $post->getPost($_GET['id']);
        $post = $posts->fetch(); 

     ?>
    <div class="col-md-12 mt-4 pt-5">                
	            <h2 class="text-uppercase">Modifier le post numéro : <?=$post['id']?></h2>
            </div>
            <form class="mt-4" method="post">
                <div class="form-group">    
                    <label for="id " class="mt-2" style="width:70px" >ID :</label>                
                    <input type="text" name="id"  value="<?=$post['id']?>" id="id" readonly ><br>
                    <label for="userId " class="mt-2" style="width:70px" >User Id :</label>                
                    <input type="text" name="userId"  value="<?= htmlspecialchars($post['Users_id']);?>" id="userId" readonly ><br>
                    <label for="title " class="mt-2" >Titre</label>            
                    <input class="form-control mb-2" type="text" placeholder="Titre" id="title" name="title" value="<?=$post['title']?>">
                    <label for="categories_id">Selectioner votre catégorie</label>
                    <select class="form-control" id="categories_id"  name="categories_id" >
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
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="<?=$post['content']?>" class="w-100 mt-1" ></textarea>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <button class="btn btn-lg btn-primary btn-block mt-4 text-center"  name="update" type="submit" >Modifier</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
            
    <?php
    $posts->closeCursor();
    ?>
</div>
<?php require '../model/footer.php';?>