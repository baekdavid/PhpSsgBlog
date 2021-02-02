<?php
if ( defined('STDIN') ) {
    $_GET['tag'] = $argv[1];
}

require_once "data.php";

$tagInfo = &getForPrintTagInfo($_GET['tag']);
$pageTitle = $tagInfo['pageTitle'];
$pageThumbUrl = $tagInfo['pageThumbUrl'];
$pageDescription = $tagInfo['pageDescription'];
$pageKeywordsStr = $tagInfo['pageKeywordsStr'];

require_once "head.php";

$articles = &getArticlesByTag($_GET['tag']);
?>

<section class="section-title con-min-width">
    <h1 class="con">
        <span>
            <i class="fas fa-list"></i>
        </span>
        <span>
            `<?=$_GET['tag']?>` LIST
        </span>
    </h1>
</section>

<section class="section-article-list padding-0-10 con-min-width">
    <div class="con">
        <div class="article-list">
            <ul>
                <?php foreach ( $articles as $article ) { ?>
                <li>
                    <h1><a href="<?=getArticleLink($article["id"])?>"><?=$article['title']?></a></h1>
                    <a href="<?=getArticleLink($article["id"])?>" class="block article-list__reg-date">
                        <span>
                            <i class="far fa-calendar-alt"></i>
                        </span>
                        <span>
                            <?=$article["regDate"]?>
                        </span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>

<?php
require_once "foot.php";
?>