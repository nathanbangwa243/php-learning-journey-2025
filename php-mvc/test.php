<?php

class Comment {
    public string $author;
    public string $frenchCreationDate;
    public string $comment;

}

$comment = new Comment();
$comment->author = 'nathanbangwa243';
$comment->frenchCreationDate = '25-08-2025';
$comment->comment = "It's my birthday";

echo var_dump($comment);