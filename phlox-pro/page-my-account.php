<?php
/**
 * The template for displaying pages.
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2021
 * @link       http://averta.net
 */
get_header(); ?>

    <main id="main" <?php auxin_content_main_class(); ?> >
        <div class="aux-wrapper">
            <div class="aux-container aux-fold">

                <div id="primary" class="aux-primary" >
                <?php if ( !is_user_logged_in() ):?>
                    <div class="content" role="main"  >
                        <button type="button" class="btn btn-success btn-sm" id="register" onclick="regForm()">Register</button> 
                        <button type="button" class="btn btn-success btn-sm" id="login" onclick="loginForm()">Login</button>
                
                        <div class="login_form" style="display:none;" id="login_form"><?php echo do_shortcode('[wp_ulike_pro_login_form]');?></div>
                        <div class="register_form" id="register_form"><?php echo do_shortcode('[wp_ulike_pro_signup_form]');?></div>
                    

                    </div><!-- end content -->
                <?php else:?>
                    <div class="content" role="main"  >
                        <div class="login_form" style="display:none;" id="login_form"><?php echo do_shortcode('[wp_ulike_pro_account_form]');?></div>
                    </div><!-- end content -->
                </div><!-- end primary -->
                <?php endif;?>
                <?php get_sidebar(); ?>

            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->
    <script  type="text/javascript" >
        function regForm(){
            
            document.getElementById("login_form").style.display = "none";
            document.getElementById("register_form").style.display = "block";
            console.log('register');
            
        }
        function loginForm(){
            
            document.getElementById("register_form").style.display = "none";
            document.getElementById("login_form").style.display = "block";
            console.log('login');
            
        }
            
        
    </script>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>

