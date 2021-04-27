<?php
//Ne pas oublier d'ajouter le fichier posts.php
require 'classes/posts.php';
?>
<?php require 'model/header.php';?>
<div>
    <?php
    // $db = new Database();
    //On ajoute un echo pour vérifier qu'un message s'affiche à l'écran
    // echo $db->getConnection();
    ?>
    <?php
        $post = new Post();
        $posts = $post->getAllPosts();
        // var_dump($posts);
        echo'<br>';
        while($post = $posts->fetch())
            {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-3 text-right">                    
                        <p>Users n° :<?= htmlspecialchars($post['Users_id']);?></p>
                    </div>
                    <div class="col-3">                    
                        <p>Catégorie n° : <?= htmlspecialchars($post['Categories_id']);?></p>
                    </div>                
                    <div class="col-6"></div>
                </div>
                <div class="row">
                    <div class="col-3">            
                        <a href="views/single.php?postId=<?= htmlspecialchars($post['id']);?>"><button>Voir le POST </button><?= htmlspecialchars($post['title']);?>]</a>
                    </div>
                    <div class="col-9">
                        <span>CONTENT :</span><?= htmlspecialchars($post['content']);?>
                    </div>
                </div>
            </div>
            <?php
                }
            $posts->closeCursor();
    ?>
</div>
<?php require 'model/footer.php';?>