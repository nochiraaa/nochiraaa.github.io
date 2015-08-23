<!doctype html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no">
    
    <?php if(is_home()): ?>
    <title>Suchmos | OFFICIALHP</title>
    <meta name="description" content="Suchmosのオフィシャルホームページです。">
    <?php elseif(is_page(82)): ?>
    <title>Suchmos | NEWS</title>
    <meta name="description" content="Suchmosのニュースはこちらから。">
    <?php elseif(is_page(11)): ?>
    <title>Suchmos | LIVE</title>
    <meta name="description" content="Suchmosライブ情報をこちらから随時更新します。">
    <?php elseif(is_page(12)): ?>
    <title>Suchmos | MEDIA</title>
    <meta name="description" content="Suchmos ラジオ、TV、雑誌インタビューはこちらから情報発信します。">
    <?php elseif(is_page('biography')): ?>
    <title>Suchmos | BIOGRAPHY</title>
    <meta name="description" content="Suchmosのプロフィールや結成の経緯はこちらから。">
    <?php elseif(is_page('discography')): ?>
    <title>Suchmos | DISCOGRAPHY</title>
    <meta name="description" content="Suchmosのリリース情報、曲詳細はこちらから。">
    <?php elseif(is_page('contact')): ?>
    <title>Suchmos | CONTACT</title>
    <meta name="description" content="Suchmosライブのオファー、お問合せはこちらから。">
    <?php endif; ?>
    <script src="<?php echo get_template_directory_uri(); ?>/three.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/Projector.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/CanvasRenderer.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/jquery.animsition.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animsition.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
    <script>
    var _ua = (function(u){
      return {
        Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1)
          || u.indexOf("ipad") != -1
          || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
          || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
          || u.indexOf("kindle") != -1
          || u.indexOf("silk") != -1
          || u.indexOf("playbook") != -1,
        Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
          || u.indexOf("iphone") != -1
          || u.indexOf("ipod") != -1
          || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
          || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
          || u.indexOf("blackberry") != -1
      }
    })(window.navigator.userAgent.toLowerCase());
        $(document).ready(function() {
        if(!navigator.userAgent.match(/(iPhone|iPad|Android)/)){
            var before = $(window).scrollTop();
            $(window).scroll(function() {
                var after = $(window).scrollTop();
                if(before > after) {
                    $("nav").fadeIn('slow');
                }
                else if(before < after) {
                  if(before >= 0){
                    $("nav").fadeOut('slow');
                  }
                }
                before = after;
            });
        }
        });

        $(document).ready(function() {  
          $(".animsition").animsition({
            <?php if(is_home()): ?>
            inClass               :   'zoom-in-sm', // ロード時のエフェクト
            outClass              :   'zoom-out-sm', //離脱時のエフェクト
            <?php else : ?>
            inClass               :   'fade-in', // ロード時のエフェクト
            outClass              :   'fade-out', //離脱時のエフェクト
            <?php endif; ?>
            inDuration            :    1500, //ロード時の演出時間
            outDuration           :    800, //離脱時の演出時間
            linkElement           :   '.animsition-link', //アニメーションを行う要素
            // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
            loading               :    false, //ローディングの有効/無効
            loadingParentElement  :   'body', //ローディング要素のラッパー
            loadingClass          :   'animsition-loading', //ローディングのクラス
            unSupportCss          : [ 'animation-duration',
                                      '-webkit-animation-duration',
                                      '-o-animation-duration'
                                    ],
            overlay               :   false, //オーバーレイの有効/無効
            overlayClass          :   'animsition-overlay-slide', //オーバーレイのクラス
            overlayParentElement  :   'body' //オーバーレイ要素のラッパー
          });
        });
    </script>
<?php wp_head(); ?>
</head>
<body>
<?php if ( !is_user_logged_in() ) : ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-66140440-1', 'auto');
  ga('send', 'pageview');
</script>
<?php endif; ?>
    <div class="btn-wrapper">
        <a href="" id="panel-btn" onclick="return false;">
          <span id="panel-btn-icon"></span>
        </a>
    </div>
    <header class="animsition">
        <div class="nav-in clearFix">
        <nav class="clearFix">
            <ul>
                <li><a class="animsition-link" href="<?php echo home_url(); ?>">TOP</a></li>
                <li><a class="animsition-link" href="<?php echo home_url(); ?>/news">NEWS</a></li>
                <li><a class="animsition-link" href="<?php echo home_url(); ?>/live">LIVE</a></li>
                <li><a class="animsition-link" href="<?php echo home_url(); ?>/media">MEDIA</a></li>
                <li><a class="animsition-link" href="<?php echo home_url(); ?>/biography">BIOGRAPHY</a></li>
                <li><a class="animsition-link" href="<?php echo home_url(); ?>/discography">DISCOGRAPHY</a></li>
                <li class="nav-last"><a class="animsition-link" href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
                <li class="nav-font-awesome"><a class="animsition-link" href="https://twitter.com/suchmoz"><i class="fa fa-twitter" target="blank"></i></a></li>
                <li class="nav-font-awesome"><a class="animsition-link" href="https://youtu.be/rI6Hzi6vC-M" target="blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <div class="sns-area">
                <span class="font-awesome"><a class="animsition-link" href="https://twitter.com/suchmoz"><i class="fa fa-twitter"></i></a></span>
                <span class="font-awesome"><a class="animsition-link" href="https://youtu.be/rI6Hzi6vC-M"><i class="fa fa-youtube"></i></a></span>
            </div>
        </nav>
        </div>
    </header>