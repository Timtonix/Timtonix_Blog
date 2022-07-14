<?php

include "classes/Bdd.php";

class Query extends Bdd
{
    public function getPosts()
    {
        $sql = "SELECT * FROM posts";
        $query = $this->connect()->query($sql);
        $posts = $query->fetchAll();
        return $posts;
    }

    public function addPost($author, $title, $content)
    {
        $sql = "INSERT INTO posts (author, title, content, date) VALUES (:author, :title, :content, :date)";
        $query = $this->connect()->prepare($sql);
        $query->execute(array(
            ':author' => $author,
            ':title' => $title,
            ':content' => $content,
            ':date' => date('Y-m-d H:i:s')
        ));
    }
}