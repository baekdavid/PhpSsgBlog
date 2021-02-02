<?php
if ( !isset($pageTitle) ) {
  $pageTitle = $siteTitle;
}

if ( !isset($pageDescription) ) {
  $pageDescription = $siteDescription;
}

if ( !isset($pageKeywordsStr) ) {
  $pageKeywordsStr = $siteKeywordsStr;
}

if ( !isset($pageThumbUrl) ) {
  $pageThumbUrl = $siteThumbUrl;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KWFE9C080L"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-KWFE9C080L');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?=$pageTitle?></title>
    <meta name="title" content="<?=$pageTitle?>" />
    <meta name="description" content="<?=$pageDescription?>" />
    <meta name="keywords" content="<?=$pageKeywordsStr?>" />
    <meta name="copyright" content="<?=$siteName?>" />

    <!-- OPENGRAPH -->
    <meta property="og:site_name" content="<?=$siteName?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$pageTitle?>" />
    <meta property="og:description" content="<?=$pageDescription?>" />
    <meta property="og:image" content="<?=$pageThumbUrl?>" />
    <meta property="og:image:alt" content="<?=$siteName?>" />
    <meta property="og:image:width" content="486" />
    <meta property="og:image:height" content="254" />

    <!-- Restful page -->
    <meta name="viewport" content="width=device-width, user-scalable=no" />

    <!--jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- toast UIstart -->
    <!-- high light libraryadded, toast UI editor used -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/default.min.css">

    <!-- toast UI editor, js core -->
    <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js" defer></script>

    <!-- 코드 미러 libraryadded, toast UI editor used -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.css" />
    <!-- toast UI editor, CSS core -->
    <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

    <!-- toast UI editor,  syntext high light plugin added -->
    <script src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight.min.js" defer></script>
    <!-- toast UI end -->

    <link rel="stylesheet" href="/css/common.css">
    <script src="/js/common.js" defer></script>
</head>

<body>
    
<div class="body-content">

    <!-- top bar start -->
    <header class="top-bar con-min-width visible-md-up">
      <div class="con height-100p flex flex-jc-sb">
        <a href="index.ssghtml.php" class="logo">
          <span><i class="far fa-lemon"></i></span>
          <span>baekd</span>
        </a>
        <nav class="top-bar__menu-box-1 height-100p">
          <ul class="flex height-100p">
            <li>
              <a href="index.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                <span><i class="fas fa-home"></i></span>
                <span>HOME</span>
              </a>
            </li>
            <li>
              <a href="about.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                <span><i class="far fa-address-card"></i></span>
                <span>ABOUT</span>
              </a>
            </li>
            <li>
              <a href="pf.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                <span><i class="fas fa-list-alt"></i></span>
                <span>PORTFOLIO</span>
              </a>
            </li>
            <li>
              <a href="#" class="flex flex-jc-c flex-ai-c height-100p">
                <span><i class="fas fa-newspaper"></i></span>
                <span>ARTICLES</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- top bar  end -->
  
    <!-- mobile top bar start -->
    <div class="mobile-top-bar-padding visible-sm-down"></div>
  
    <header class="mobile-top-bar con-min-width visible-sm-down flex">
      <div class="flex-1-0-0 flex">
        <div class="mobile-top-bar__btn-toggle-side-bar flex-as-c">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div>
        <a href="#" class="logo height-100p">
          <span><i class="far fa-lemon"></i></span>
          <span>baekd</span>
        </a>
      </div>
      <div class="flex-1-0-0"></div>
    </header>
    <!-- mobile top bar  end -->
  
    <!-- mobile side barstart -->
    <aside class="mobile-side-bar visible-sm-down">
  
      <nav class="mobile-side-bar__menu-box-1">
        <ul>
          <li>
            <a href="#" class="block">
              <span><i class="fas fa-home"></i></span>
              <span>HOME</span>
            </a>
          </li>
          <li>
            <a href="#" class="block">
              <span><i class="far fa-address-card"></i></span>
              <span>ABOUT</span>
            </a>
          </li>
          <li>
            <a href="#" class="block">
              <span><i class="fas fa-list-alt"></i></span>
              <span>PORTFOLIO</span>
            </a>
          </li>
          <li>
            <a href="#" class="block">
              <span><i class="fas fa-newspaper"></i></span>
              <span>ARTICLES</span>
            </a>
          </li>
        </ul>
      </nav>
  
    </aside>
    <!-- mobile side bar end -->
  
    <main>