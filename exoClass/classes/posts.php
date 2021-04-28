
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
    public function setUpdate()
    {   
        
        // var_dump($_POST);
        $Categories_id = isset($_POST['categories_id']) ? $_POST['categories_id'] : '';
        $Categories_id_int = (int)$Categories_id;        
        $Users_id = $_POST['userId'];
        $Users_id_int = (int)$Users_id; 
        // echo "<br>Users_id_int is :";   
        // var_dump($Users_id_int); 
        // echo "<br> Categories_id_int is :";         
        // var_dump($Categories_id_int);     
        $date = date("Y-m-d H:i:s");
        $sql = "UPDATE posts SET title = ?, content = ?, Users_id = ?, Categories_id = ?, date = ? WHERE id = ?";
        $result =  $this->getConnection()->prepare($sql);
        $result->execute([$_POST["title"],$_POST["content"],$Users_id_int,$Categories_id_int,$date,$_POST["id"]]);
        return $result;
               
    }
    public function setDelete()
    {   
        echo "salut";
        // Confirm [Y/n] ?
            $sqlcomments = ('DELETE FROM comments WHERE Posts_id = ? ');
            $result =  $this->getConnection()->prepare($sqlcomments);
            $result->execute([$_GET['id']]);  
            $sqlPost = ('DELETE FROM posts WHERE id = ? ');
            $result2 =  $this->getConnection()->prepare($sqlPost);                
            $result2->execute([$_GET['id']]);
            $msg = 'You have deleted the post!';
            header('Location: ../index.php');
        }

}