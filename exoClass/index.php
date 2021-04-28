<?php
//Ne pas oublier d'ajouter le fichier posts.php
require 'classes/posts.php';
?>
<?php require 'model/header.php';?>
<div class="container">
    <?php
    // $db = new Database();
    //On ajoute un echo pour vérifier qu'un message s'affiche à l'écran
    // echo $db->getConnection();
    ?>
    <?php
        $post = new Post();
        $posts = $post->getAllPosts();
        // var_dump($posts);
        
        while($post = $posts->fetch())
            {
            ?>
    <div class='col'>
        <div class='card shadow-sm p-3'>
            <h3 class='text-uppercase ps-2'><?= htmlspecialchars($post['title']);?></h3>
            <p>N ° d'utilisateur: </strong><?= htmlspecialchars($post['Users_id']);?></p><span>
                <p>N ° de catégorie : <?= htmlspecialchars($post['Categories_id']);?></p>
            </span>
            <div class='card-body'>
                <p class='card-text'>
                    <?= htmlspecialchars($post['content']);?>
                </p>
                <div class='d-flex justify-content-between align-items-center'>
                    <div class='btn-group'>
                        <a href="views/single.php?postId=<?= htmlspecialchars($post['id']);?>">
                            <button type='button' class='btn btn-sm btn-outline-secondary'>
                                Voir post n° <?=$post['id']?>
                            </button>
                        </a>
                        <a href="views/update.php?id=<?=$post['id']?>">
                            <button type='button' class='btn btn-sm btn-outline-secondary'>
                                Modifier
                            </button>
                        </a>
                        <a href="views/delete.php?id=<?=$post['id']?>">
                            <button type='button' class='btn btn-sm btn-outline-danger'>suprimer
                            </button>
                        </a>
                    </div>
                    <small class='text-muted'>
                        <?=$post['date']?>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <?php
                }
            $posts->closeCursor();
    ?>
</div>
<?php require 'model/footer.php';?>