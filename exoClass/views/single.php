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
        <a href="../views/update.php?postId=<?= htmlspecialchars($post['id']);?>"><button>UPDATE POST</button></a>
    </div>
            <br>
    <?php
    $posts->closeCursor();
    ?>
</div>
<?php require '../model/footer.php';?>