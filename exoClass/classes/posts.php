
<?php
require "database.php";
class Post extends Databases
{
    public function getAllPosts()
    {
        // $db = new Database();
        $sql = "SELECT * FROM `posts`";
        $result =  $this->getConnection()->query($sql);
        // print_r ($result);
        // var_dump($result);
        return $result;
    }
    public function getPost($postId)
    {
        $sql = "SELECT * FROM `posts` WHERE id = ?";
        $result =  $this->getConnection()->prepare($sql);
        $result->execute([
            $postId
        ]);
        return $result;
    }
    public function setUpdate($postId,)
    {
        $sql = "UPDATE posts SET id = ?, title = ?, content = ?, Users_id = ?, Categories_id = ?, date = ? WHERE id = ?'";
        $result =  $this->getConnection()->prepare($sql);
        $result->execute([
            $postId
        ]);
        var_dump($result);
        return $result;
        
    }

}