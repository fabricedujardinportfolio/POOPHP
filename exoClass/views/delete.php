<?php
//Ne pas oublier d'ajouter le fichier posts.php

?>
<?php require '../model/header.php';?>
    <?php  
        require '../classes/posts.php';
        $deletePost = new Post();
        $getPoste = new Post();
        $deletePosts = $deletePost->setDelete($_GET['id']);
        $getPostes = $getPoste->getPost($_GET['id']);
        $getPoste = $getPostes->fetch(); 
        // if (isset($_GET['id'])) {
        //         exit($_GET['id'] );
        //     }
          
    // if (isset($_GET['confirm'])) {
    //     if ($_GET['confirm'] == 'yes') {
    //     $stmt = $conn->prepare('DELETE FROM comments WHERE Posts_id = ? ');
    //     $stmt->execute([$_GET['id']]);            
    //     $stmtpost = $conn->prepare('DELETE FROM posts WHERE id = ? ');                
    //     $stmtpost->execute([$_GET['id']]);
    //     $msg = 'You have deleted the post!';
    //     header('Location: dashboard.php');
    //     exit;
    // } else {
    //     // User clicked the "No" button, redirect them back to the read page
    //     header('Location: dashboard.php');
    //     exit;
    // }       
     ?>
 <!-- <div class="container d-flex h-mini-80 pt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2 class="text-center">Voulez-vous vraiment supprimer le poste [#<?=$getPoste['id']?>] avec ces commentaires ?</h2>
            <form class="mt-4" action="delete.php?id=<?=$getPoste['id']?>" method="post" class="yesno">
                <div class="form-group text-center"> 
                    <button class="btn btn-primary" ><a href="delete.php?id=<?=$getPoste['id']?>&confirm=yes" style="color:white;text-decoration:none;">SUPPRIMER</a></button>
                    <button class="btn btn-danger"><a href="delete.php?id=<?=$getPoste['id']?>&confirm=no" style="color:white;text-decoration:none;">NE PAS SUPRIMER</button></a>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
</div> -->
<?php require '../model/footer.php';?>