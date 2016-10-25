<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PureCss Practice</title>
  <link href="<?php bloginfo('template_directory');?>/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/pure_0.6.0/pure-min.css">
  <!-- <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css"> -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/pure_0.6.0/grids-responsive-min.css">
  <!-- <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css"> -->
</head>
<body>
<!-- Horizontal Menu/Navigation -->
  <header class="custom-wrapper pure-g" id="menu">

    <div class="pure-u-1 pure-u-md-1-3">
      <div class="pure-menu">
        <a href="#" class="pure-menu-heading custom-brand">Brand</a>
        <a href="" class="custom-toggle" id="toggle"><s class="bar"></s>s class="bar"></s></a>
      </div>
    </div>
  </header>


<div class="pure-g">
    <div class="pure-u-1-3"><p>Thirds</p></div>
    <div class="pure-u-1-3"><p>Thirds</p></div>
    <div class="pure-u-1-3"><p>Thirds</p></div>
</div>







<!-- SCRIPTS -->
<script>
(function (window, document) {
var menu = document.getElementById('menu'),
    WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

function toggleHorizontal() {
    [].forEach.call(
        document.getElementById('menu').querySelectorAll('.custom-can-transform'),
        function(el){
            el.classList.toggle('pure-menu-horizontal');
        }
    );
};

function toggleMenu() {
    // set timeout so that the panel has a chance to roll up
    // before the menu switches states
    if (menu.classList.contains('open')) {
        setTimeout(toggleHorizontal, 500);
    }
    else {
        toggleHorizontal();
    }
    menu.classList.toggle('open');
    document.getElementById('toggle').classList.toggle('x');
};

function closeMenu() {
    if (menu.classList.contains('open')) {
        toggleMenu();
    }
}

document.getElementById('toggle').addEventListener('click', function (e) {
    toggleMenu();
});

window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
})(this, this.document);

</script>
</body>
</html>
