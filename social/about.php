<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $post = new post;
  $noti = new notifications;
  $message = new message;
?>

<?php
  $title = "{$noti->titleNoti()} About • Instagram";
  $keywords = "Instagram, Share and capture world's moments, share, capture, about";
  $desc = "Instagram lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<!-- including files for header of document -->
<?php
  if ($universal->isLoggedIn()) {
    include 'includes/header.php';
    include 'needs/heading.php';
    include 'needs/nav.php';
    include_once 'needs/search.php';
  } else if ($universal->isLoggedIn() == false) {
    include 'index_include/index_header.php';
  }
?>

<div class="overlay"></div>
<div class="notify"><span></span></div>
<div class="container margin-top-140">
  <div class="col-sm-4"></div>
    <div class="col-sm-4 col-xs-12 about">
        <!-- /<?php echo DIR; ?> -->
        <img src="./images/needs/glyph-instagram.jpg" alt="">
        <div class="about-wrap">
          <span>Instagram is all about exploring, messaging, groups, photos, interacting with other members and much more.</span>
          <span>Finally coming to the point, this website is developed just for fun and I have no copyright claims.</span>
          <span>Instagram is hosted freely, so you'll find it bit slow and many of its features have been removed, such as real-time notifications and updates.</span>
        </div>
    </div>
</div>
   

<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
