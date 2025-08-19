<?php

namespace Application\Controllers\Post;

require_once ('src/lib/database.php');
require_once('src/model/post.php');
require_once('src/model/comment.php');

use Application\Model\Post\PostRepository as PostRepo;
use Application\Lib\Database\DatabaseConnection;
use Application\Model\Comment\CommentRepository;


class PostController
{
    public function post(string $identifier)
    {
        // POSTS
        $postRepository = new PostRepo();
        $postRepository->connection = new DatabaseConnection();
        $post = $postRepository->getPost($identifier);

        // COMMENTS
        $commentRepository = new CommentRepository();
        $commentRepository->connection = new DatabaseConnection();
        $comments = $commentRepository->getComments($identifier);

        require('templates/post.php');
    }
}
