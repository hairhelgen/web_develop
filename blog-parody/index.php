<?php

    include_once('func.php');

    $articles = getArticles();

?>

<div class="articles">
    <? foreach($articles as $id => $article) : ?>
        <div class="article">
            <h2><?=$article['title']?></h2>
            <a href="articles.php?id=<?=$article['id']?>">Read more</a>
        </div>
    <? endforeach; ?>
</div>