<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>

    </title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
-->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.grey-orange.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
<style>
#add-post {
    position: fixed;
    display: block;
    right: 0;
    bottom: 0;
    margin-right: 40px;
    margin-bottom: 40px;
    z-index: 900;
}
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: white;
}
</style>
</head>
<body>
    <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
        <header class="mdl-layout__header mdl-layout__header--transparent">
          <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Cerpen</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="">Link</a>
              <a class="mdl-navigation__link" href="">Link</a>
              <a class="mdl-navigation__link" href="">Link</a>
              <a class="mdl-navigation__link" href="">Link</a>
            </nav>
          </div>
        </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">Title</span>
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
          </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="demo-blog__posts mdl-grid">
                <?php echo (isset($content)) ? $content : 'Blank'; ?>
            </div>
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer--left-section">
                    <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
                        <span class="visuallyhidden">Twitter</span>
                    </button>
                    <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
                        <span class="visuallyhidden">Facebook</span>
                    </button>
                    <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
                        <span class="visuallyhidden">Google Plus</span>
                    </button>
                </div>
                <div class="mdl-mini-footer--right-section">
                    <button class="mdl-mini-footer--social-btn social-btn__share">
                        <i class="material-icons" role="presentation">share</i>
                        <span class="visuallyhidden">share</span>
                    </button>
                </div>
            </footer>
        </main>
        <div class="mdl-layout__obfuscator"></div>
    </div>
    <a href="https://github.com/google/material-design-lite/blob/master/templates/blog/"  id="add-post" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--accent">
        <i class="material-icons">create</i>
    </a>
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>
<script>
Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
    var link = el.querySelector('a');
    if(!link) {
        return;
    }
    var target = link.getAttribute('href');
    if(!target) {
        return;
    }
    el.addEventListener('click', function() {
        location.href = target;
    });
});
</script>
</html>
