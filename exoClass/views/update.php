<?php
//Ne pas oublier d'ajouter le fichier posts.php
require '../classes/posts.php';
?>
<?php require '../model/header.php';?>
<div class="container">
    <?php
    $post = new Post();
    $posts = $post->getPost($_GET['postId']);
    $post = $posts->fetch()
    ?>
    <div>
        <p>Post ID : <?= htmlspecialchars($post['id']);?></p>
        </h2 >Titre :<br> <?= htmlspecialchars($post['title']);?><br></h2>
        <p class="pt-3">Content :<br><?= htmlspecialchars($post['content']);?></p>
        <p>Users n° :<?= htmlspecialchars($post['Users_id']);?></p>
        <p>Catégorie n° : <?= htmlspecialchars($post['Categories_id']);?></p>
        <!-- <a href="views/update.php?postId=<?= htmlspecialchars($post['id']);?>"><button>UPDATE POST</button></a> -->
    </div>
            <br>
    <?php
    $posts->closeCursor();
    ?>
    <?php
    $post = new Post();
    $posts = $post->setUpdate($_GET['postId']);
    $post = $posts->fetch()
    ?>
    <div class="col-md-12 mt-4">                
	            <h2 class="text-uppercase">Modifier le post numéro : <?=$post['id']?></h2>
            </div>
            <form class="mt-4" action="update.php?id=<?=$post['id']?>" method="post">
                <div class="form-group">    
                    <label for="id " class="mt-2" >ID</label>                
                    <input type="text" name="id"  value="<?=$post['id']?>" id="id" readonly ><br>
                    <label for="title " class="mt-2" >Titre</label>            
                    <input class="form-control mb-2" type="text" placeholder="Titre" id="title" name="title" value="<?=$post['title']?>">
                    <label for="categories_id">Selectioner votre catégorie</label>
                    <select class="form-control" id="categories_id" value="<?=$post['Categories_id']?>" name="categories_id" >
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
                            <div class="col-6">
                                <button class="btn btn-lg btn-facebook-g btn-block mt-4 text-center" value="Update" type="submit" >Modifier</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
</div>
<?php require '../model/footer.php';?>