<?php

namespace Application\Controllers\Post;

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Model\CommentRepository\CommentRepository;
use Application\Model\PostRepository\PostRepository;

class Post
{
    public function execute(string $identifier)
    {
        $connection = new DatabaseConnection();

        $postRepository = new PostRepository();
        $postRepository->connection = $connection;
        $post = $postRepository->getPost($identifier);

        $commentRepository = new CommentRepository();
        $commentRepository->connection = $connection;
        $comments = $commentRepository->getComments($identifier);

        require('templates/Post.php');
    }
}