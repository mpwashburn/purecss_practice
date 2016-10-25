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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css"> -->
</head>
<body>
<!-- Horizontal Menu/Navigation -->
  <div class="custom-wrapper pure-g" id="menu">
    <div class="pure-u-1 pure-u-md-1-3 1-box">
        <div class="pure-menu">
            <a href="#" class="pure-menu-heading custom-brand"><img class=" text-left pure-img" src="http://placehold.it/50x50"></a>
            <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3 1-box">
        <div class="pure-menu pure-menu-horizontal custom-menu-2 custom-can-transform">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="https://www.facebook.com/ysnglobal/" onclick="target='newwindow'"><i class="fa fa-fw fa-facebook"></i></a></li>
                <li class="pure-menu-item"><a href="https://twitter.com/ysn_global" onclick="target='newwindow'"><i class="fa fa-fw fa-twitter"></i></a></li>
                <li class="pure-menu-item"><a href="http://instagram.com/ysnglobal/" onclick="target='newwindow'"><i class="fa fa-fw fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3 1-box">
        <div class="pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Company</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Team</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="main-wrapper pure-g">
    <div class="pure-u-1 pure-u-md-4-5 1-box">
        <p>Hello World</p>
    </div>
    <div class="pure-u-1 pure-u-md-1-5 1-box">
        <p>Hello Sidebar world</p>
    </div>
</div>



  <!-- <div class="custom-wrapper pure-g" id="menu">
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="pure-menu">
        <a href="#" class="pure-menu-heading custom-brand">Brand</a>
        <a href="" class="custom-toggle" id="toggle"><s class="bar"></s>s class="bar"></s></a>
      </div>
    </div>
    <div class="pure-u-1 pure-md-1-3">
      <div class="pure-menu pure-menu-horizontal custom-can-transform">
        <ul class="pure-menu-list">
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Company</a></li>
          <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </div> -->







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
