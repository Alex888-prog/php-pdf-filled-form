
    <ul class="w3-sidebar w3-collapse w3-white w3-animate-left" style="background: white !important;" id="mySidebar">
       <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black " title="Close Menu">
        <i class="fa fa-remove"></i>
       </a>
      <?php if($universal->isLoggedIn()){ ?>
       <div class="w3-bar-block m_n_ul"> 
        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/profile/<?php echo $universal->getUsernameFromSession(); ?>" class="m_n_a profile  w3-bar-item w3-button w3-padding " data-link="profile">
            <span class="m_n_text">@<?php echo $universal->nameShortener($universal->getUsernameFromSession(), 20); ?></span>
            <span class="m_n_new"></span>
          </a>
        </li>
        <li class="m_n_li">
          <a href="<?php echo DIR; ?>" class="m_n_a index  w3-bar-item w3-button w3-padding" data-link="index">
            <!-- <span class="m_n_icon"><i class="material-icons">home</i></span> -->
            <span class="m_n_text">Home</span>
            <span class="m_n_new"></span>
          </a>
        </li>
        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/explore" class="m_n_a explore w3-bar-item w3-button w3-padding" data-link="explore">
            <!-- <span class="m_n_icon"><i class="material-icons">toys</i></span> -->
            <span class="m_n_text">Explore</span>
            <span class="m_n_new"></span>
          </a>
        </li>
        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/notifications" class="m_n_a notifications w3-bar-item w3-button w3-padding" data-link="notifications">
            <!-- <span class="m_n_icon"><i class="material-icons">notifications</i></span> -->
            <span class="m_n_text">Notifications</span>
            <span class="m_n_new"><?php echo $noti->unreadCount(); ?></span>
          </a>
        </li>

        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/messages" class="m_n_a messages w3-bar-item w3-button w3-padding" data-link="messages">
            <!-- <span class="m_n_icon"><i class="material-icons">message</i></span> -->
            <span class="m_n_text">Messages</span>
            <span class="m_n_new"><?php echo $message->getAllUnreadMssg(); ?></span>
          </a>
        </li>
        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/profile/<?php echo $universal->getUsernameFromSession(); ?>?ask=bookmarks" class="m_n_a bookmarks w3-bar-item w3-button w3-padding" data-link="bookmarks">
            <!-- <span class="m_n_icon"><i class="material-icons">message</i></span> -->
            <span class="m_n_text">Bookmarks</span>
            <span class="m_n_new"></span>
          </a>
        </li>

        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/profile/<?php echo $universal->getUsernameFromSession(); ?>?ask=favourites" class="m_n_a favourites w3-bar-item w3-button w3-padding" data-link="favourites">
            <span class="m_n_text">Favourites</span>
            <span class="m_n_new"></span>
          </a>
        </li>

        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/profile/<?php echo $universal->getUsernameFromSession(); ?>?ask=groups" class="m_n_a groups w3-bar-item w3-button w3-padding" data-link="groups">
            <!-- <span class="m_n_icon"><i class="material-icons">message</i></span> -->
            <span class="m_n_text">Groups</span>
            <span class="m_n_new"></span>
          </a>
        </li>

        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/profile/<?php echo $universal->getUsernameFromSession(); ?>?ask=photos" class="m_n_a photos w3-bar-item w3-button w3-padding" data-link="photos">
            <!-- <span class="m_n_icon"><i class="material-icons">message</i></span> -->
            <span class="m_n_text">Photos</span>
            <span class="m_n_new"></span>
          </a>
        </li>

        <li class="m_n_li">
        <a href="<?php echo DIR; ?>/profile/<?php echo $universal->getUsernameFromSession(); ?>?ask=videos" class="m_n_a videos w3-bar-item w3-button w3-padding" data-link="videos">
          <!-- <span class="m_n_icon"><i class="material-icons">message</i></span> -->
          <span class="m_n_text">Videos</span>
          <span class="m_n_new"></span>
        </a>
        </li>
        
        <li class="m_n_li">
        <a href="<?php echo DIR; ?>/profile/<?php echo $universal->getUsernameFromSession(); ?>?ask=audios" class="m_n_a audios w3-bar-item w3-button w3-padding" data-link="audios">
          <!-- <span class="m_n_icon"><i class="material-icons">message</i></span> -->
          <span class="m_n_text">Audios</span>
          <span class="m_n_new"></span>
        </a>
       </li>

        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/edit" class="m_n_a edit w3-bar-item w3-button w3-padding" data-link="edit">
            <!-- <span class="m_n_icon"><i class="material-icons">edit</i></span> -->
            <span class="m_n_text">Edit profile</span>
            <span class="m_n_new"></span>
          </a>
        </li>

        <li class="m_n_li">
          <a href="<?php echo DIR; ?>/settings" class="m_n_a settings w3-bar-item w3-button w3-padding" data-link="settings">
            <!-- <span class="m_n_icon"><i class="material-icons">settings_applications</i></span> -->
            <span class="m_n_text">Settings</span>
            <span class="m_n_new"></span>
          </a>
        </li>
      </div>
      <?php } ?>
       <div class="m_n_bottom">
	<div class="options nav_options">
         <ul>
             <li><a href="<?php echo DIR; ?>/about">About</a></li>
             <li><a href="<?php echo DIR; ?>/developer">Developer</a></li>
         </ul>
       </div>
        <ul>
           <?php if ($universal->isLoggedIn() == true) { ?>
             <li><a href="<?php echo DIR; ?>/logout">Logout</a></li>
             <li><a href="<?php echo DIR; ?>/help">Help</a></li>
             <li><a href="#" class=""><i class="material-icons">more_horiz</i></a></li>
           <?php } ?>
        </ul>
       </div>

      
    </ul>
    
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  

  


  


<script type="text/javascript">
  var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
  var overlayBg = document.getElementById("myOverlay");

  // Toggle between showing and hiding the sidebar, and add overlay effect
  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
      overlayBg.style.display = "none";
    } else {
      mySidebar.style.display = 'block';
      overlayBg.style.display = "block";
    }
  }

  // Close the sidebar with the close button
  function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>