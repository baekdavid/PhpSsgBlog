<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "Dev baekd";
$siteDescription = "baekd's Dev Blog.";
$siteKeywordsStr = "CSS, HTML, JS";
$siteName = "baekd";
$siteThumbUrl = "https://ssg-2020-12.oa.gg/img/logo/logo_opengraph.png";

// Tag info  start
$tagInfos = [
    "flex" => [
        "pageThumbUrl" => "js image",
        //"pageDescription" 
    ],
];
// Tag info  end

// Post 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "js Tag 4";
$article4["regDate"] = "2020-01-18 17:28:15";
$article4["writerName"] = "baekd";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article4["tags"] = ["js", "css"];
$article4["pageTitle"] = "ㅋㅋㅋㅋ";
$article4["body"] = <<<'EOT'
# 개요
- 안녕하세요.
EOT;

// Post 3
$article3 = [];
$article3["id"] = 3;
$article3["title"] = "js Tag 3";
$article3["regDate"] = "2020-01-12 12:12:15";
$article3["writerName"] = "baekd";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["tags"] = ["js", "html"];
$article3["body"] = <<<'EOT'
# 개요
- php도 좋다.
EOT;

// Post 2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "js Tag 2";
$article2["regDate"] = "2020-01-12 12:12:14";
$article2["writerName"] = "baekd";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["tags"] = ["js"];
$article2["body"] = <<<'EOT'
# 개요
- script Tag를 사용해야 한다.
- src 속성으로 외부 스크립트를 불러올 수 있다.
- defer 속성으로 html 엘리먼트 로딩까지 실행을 유보시킬 수 있다.
- 자식 컨텐츠로 js를 넣어서 사용할 수 있다.
  
# 예시 - 자식 컨텐츠로 js를 넣어서 사용
```html
<t-script>
var a = 10;
</t-script>
<div class="a"></div>
```
EOT;

// Post 1
$article1 = [];
$article1["id"] = 1;
$article1["title"] = "js Tag";
$article1["regDate"] = "2020-01-12 12:12:14";
$article1["writerName"] = "baekd";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["tags"] = ["js"];
$article1["body"] = <<<'EOT'
# Tag
```codepen
https://codepen.io/baekdavid/pen/yLVywJK
```

# 콘솔
```codepen
https://codepen.io/jangka44/embed/zYKmvoG?height=300&theme-id=light&default-tab=js,result&editable=true
```

# 참고영상
```youtube

```
EOT;

// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}