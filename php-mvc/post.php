<?php

require ('src/model.php');

if (isset($_GET['id']) AND $_GET['id'] > 0) {
    $identifier = $_GET['id'];
}

else {
    echo "Aucun identifier de billet envoye";

    die;
}

// Fetch posts
$post = getPost($identifier);
$comments = getComments($identifier);

require('templates/post.php');