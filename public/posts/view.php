<?php
include '../../core/db_connect.php';
require '../../core/bootstrap.php';
// checkSession();

$input = filter_input_array(INPUT_GET);
$slug = preg_replace("/[^a-z0-9-]+/", "", $input['slug']);

$content=null;
$stmt = $pdo->prepare('SELECT * FROM posts WHERE slug = ?');
$stmt->execute([$slug]);

$row = $stmt->fetch();

$meta = [];
$meta['title']= "View: {$row['title']}";
$meta['description'] = "View Posts MicroTrain2111 Post List";
$meta['keywords'] = "view posts, MicroTrain2111, post list";


$content=<<<EOT


<h1>{$row['title']}</h1><br>
<p>{$row['body']}<br>
{$row['meta_keywords']}</p>

<hr>
<div>
<a class="btn btn-link" href="edit.php?id={$row['id']}">Edit</a>
<a class="btn btn-link" href="delete.php?id={$row['id']}">Delete</a>
<br><br>
</div>
EOT;

require '../../core/layout.php';