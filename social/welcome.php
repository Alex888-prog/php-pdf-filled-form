<?php include 'config/declare.php'; ?>



<!-- a universal file that has all the classes included -->

<?php include 'config/classesGetter.php'; ?>



<!-- creating objects -->

<?php

  $universal = new universal;

?>



<?php

  if ($universal->isLoggedIn()) {

    header('Location: '.DIR);

  }

?>



<?php

  $title = "Instagram";

  $keywords = "Instagram, Share and capture world's moments, share, capture, share, login, signup";

  $desc = "Instagram lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";

?>



<?php  include 'index_include/index_header.php'; ?>

<div class="container-fluid">

  <div class="index_wrapper">



    

    <div class="github">

    <iframe src="https://ghbtns.com/github-btn.html?user=yTakkar&type=follow&count=false&size=large" frameborder="0" scrolling="0" width="180px" height="30px"></iframe>

      <iframe src="https://ghbtns.com/github-btn.html?user=yTakkar&repo=Instagram-Clone&type=fork&count=true&size=large" frameborder="0" scrolling="0" width="125px" height="30px"></iframe>

      <iframe src="https://ghbtns.com/github-btn.html?user=yTakkar&repo=Instagram-Clone&type=star&count=true&size=large" frameborder="0" scrolling="0" width="160px" height="30px"></iframe>

    </div>

    



    <div class="banner">

      <img src="images/needs/dbx_29.png"  alt="">

      <!-- <img src="http://chicohq.com/images/bg.svg" alt=""> -->

    </div>



    



    <div class="feature">
     
          <div class="col-md-6 col-sm-12 col-xs-12">

              <h1 class="col-md-center">It's awesome to capture and share world's moments</h1>
              
               <h4 class="col-md-center">Instagram helps you connect with people with your amazing photos, videos and everything in between.</h3>

        
              <br>
              <a href="<?php echo DIR; ?>/about" class="btn btn-primary width-100">View more</a>
              <br>

           </div>

      
     
        <div class="col-md-6 col-sm-12 col-xs-12 margin-top-30">
            
            <form method="post" action="" >

              <div class="form-group">

                

                <input type="text" name="s_username" value="" autocomplete="off" placeholder="Username" class="s_username form-control" spellcheck="false" mssg="" maxlength="32" required autofocus>

        	<div class="username_checker u_c">

                   <span class="checker_text">username not available</span>

                   <span class="checker_icon">

                       <i class="fa fa-frown-o" aria-hidden="true"></i>

                   </span>

               </div>     
	 </div>



              <div class="form-group">

                <div class="input-group">

                  

                  <input type="password" name="s_password" value="" autocomplete="off" placeholder="Password" id="password" class="s_password form-control" required maxlength="32">

                  <!-- <span class="show_psswrd home_show_psswrd" id="show_psswrd"> -->

                  <span class="input-group-addon" id="show_psswrd"><i class="fa fa-lock" aria-hidden="true"></i></span>  <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->

                  <!-- </span> -->

                </div>

              </div>   

              <input type="submit" name="ws_submit" value="Log in to continue" class="s_submit btn btn-primary">

              <div class="bottom-wrap col-md-center"> 
                   <a href="forgot_psswrd" class="a_pri hover bottom-font" alt="Forgot your password" data-description="Forgot your password">Did you Forgot password?</a>
              </div>
              <div class="bottom-wrap col-md-center">
                   <a href="login" class="a_pri bottom-font" alt="Open in another page bottom-font">Separate Page</a>
              </div>
            </form>

            <br>

       

          </div>

    








      

  </div>



  <div class="notify">

    <span></span>

  </div>



</div>

</div> <!--.end of container-->
 <br>


<div class="overlay-2"></div>

<?php include 'index_include/index_footer.php'; ?>



<script type="text/javascript">

  $(function(e){

    // $('.s_username').username_checker({

    //   url: "reg_process/@username_checker.php"

    // });



    $('#show_psswrd').togglePassword({

      input: document.getElementById('password')

    });



    $('form').on('submit', (function(e){

      e.preventDefault();

      $('.s_submit').prop('disabled', true);

      $('.overlay-2').show();

      login($('.s_username').val(), $('.s_password').val(), $('.s_submit'));

    }))



  });

</script>

