<?php

namespace Application\Controllers;

use Application\Lib\DatabaseConnection\DatabaseConnection;
use Application\Model\Post\PostRepository;

class Homepage
{
    public function execute()
    {
        $postRepository = new PostRepository();
        $postRepository->connection = new DatabaseConnection();
        $posts = $postRepository->getPosts();

        require('templates/Homepage.php');
    }
}