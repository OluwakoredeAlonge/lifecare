<?php
require_once "Db.php";
class Blog extends Db
{
    private $dbcon;
    public function __construct()
    {
        $this->dbcon = $this->connect();
    }
    public function insert_blog($title, $author, $date, $time, $image, $content){
        $filename = $_FILES['con_img']['name'];
        if($filename != ''){
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $newname = uniqid(). ".$ext";
            $temp = $_FILES['con_img']['tmp_name'];
            move_uploaded_file($temp, "../newuploads/$newname");
            $sql = "INSERT INTO blog_posts SET title = ?, author = ?, date = ?, time = ?,  image = ?, content = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$title, $author, $date, $time,$image, $content]);
        }else{
            $sql = "INSERT INTO blog_posts SET title = ?, author = ?, date = ?, time = ?,  image = ?, content = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$title, $author, $date, $time, $content]);
            return $this->dbcon->lastInsertId();
        }
        return true;
    }
    public function get_blog_by_id($id){
        $sql = "SELECT * FROM blog_posts WHERE id = ?";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute([$id]);
        $records = $stmt->fetch(PDO::FETCH_ASSOC);
        return $records;
    }
    public function fetch_blog(){
        $sql = "SELECT * FROM blog_posts";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $records;
    }
    public function delete_blog($id){
        $sql = "DELETE FROM blog_posts WHERE id = ?";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute([$id]);
    }
}
// $blo = new Blog;
// $blo->insert_blog("post", "admin", "2024-12-09", "09:00:00", "sksk.jpg", "jajaj");