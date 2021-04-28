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
    <div class="container d-flex mt-3">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="row p-5 bg-light">                
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                    <h2 class="text-decoration-underline"> Post n° :<?= htmlspecialchars($post['id']);?></h2>
                    </div>                    
                    <div class="col-md-6 col-sm-6">                        
                    <p class="text-uppercase mt-3" ><span style="font-weight:bold;">Titre : </span><?= htmlspecialchars($post['title']);?></p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <p class="text-capitalize mt-3"><span style="font-weight:bold;">Catégorie n° :<?= htmlspecialchars($post['Categories_id']);?></p> <!-- CATEGORY NAME -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="text-uppercase"><span style="font-weight:bold;">Créateur : </span><?= htmlspecialchars($post['Users_id']);?></p> <!-- USERS FIRSTNAME-->
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <p class="text-capitalize" ><span style="font-weight:bold;">Créer Le : </span><span style="color:#6b705c;font-size:13px;font-weight:bold;"><?=$post['date']?></span></p>
                    </div>
                </div>
            </div>
            <div class="col-12 " style="min-height:250px;">
                <h3>Contenu :</h3>
                <p><?= htmlspecialchars($post['content']);?></p>
            </div>
            </div>            
            <div class="col-6">
                <a href="update.php?id=<?= htmlspecialchars($post['id']);?>" class="text-decoration-none">
                    <button class="btn btn-lg btn btn-primary btn-block mt-4 text-center" value="Update" type="submit" >Modifier ce post</button>
                </a>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <?php
    $posts->closeCursor();
    ?>
</div>
<?php require '../model/footer.php';?>