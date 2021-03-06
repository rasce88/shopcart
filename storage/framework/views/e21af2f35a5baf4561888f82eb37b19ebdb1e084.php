<!-- BEGIN HEADER -->

    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <?php /*
                <!-- 
                <li><a href="#"><i class="fa fa-phone"></i> +1 786-464-1348</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> thehookahexpress@gmail.com</a></li> 
                <li><a href="#"><i class="fa fa-phone"></i> +1 954-790-2620</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> hmitha@gmail.com </a></li>
                -->
                */ ?>                
                <li><a href="#"><i class="fa fa-phone"></i> <?php echo e($setting->phone_site); ?></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> <?php echo e($setting->email_site); ?></a></li>                 
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav">
                <li><a target="_blank" href="<?php echo e($setting->link_facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="<?php echo e($setting->link_twitter); ?>"><i class="fa fa-instagram"></i></a></li>
                <li><a target="_blank" href="<?php echo e($setting->link_twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                

                <?php /* 
                <li><a href="<?php echo e($setting->link_linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?php echo e($setting->link_dribbble); ?>"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="<?php echo e($setting->link_google_plus); ?>"><i class="fa fa-google-plus"></i></a></li>
                */ ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
                <?php /* <!--
                <div class="logo pull-left">
                  <a href="<?php echo e(url('/')); ?>"><img width="150px" height="120px" src="<?php echo e(URL::to('images/Logoherbnkulture.png')); ?>" alt="" /></a>
                </div>
                <div class="lema pull-right">
                  <a href="<?php echo e(url('/')); ?>"><img width="380px" height="100px" src="<?php echo e(URL::to('images/Lema1.jpg')); ?>" alt="" /></a>
                </div>

                <div class="logo pull-left">
                  <a href="<?php echo e(url('/')); ?>"><img width="150px" height="150px" src="<?php echo e(URL::to('images/CrownTrading.png')); ?>" alt="" /></a>
                </div>

                <div class="lema pull-right">
                  <a href="<?php echo e(url('/')); ?>"><img width="400px" height="120px" src="<?php echo e(URL::to('images/Lema.jpg')); ?>" alt="" /></a>
                </div>                  
                -->
                */ ?>  
                <?php if($setting->has_lema == '1'): ?>
                  <div class="logo pull-left">
                    <a href="<?php echo e(url('/')); ?>"><img width="<?php echo e($setting->logo_home_width); ?>px" height="<?php echo e($setting->logo_home_height); ?>px" src="<?php echo e(URL::to('images/')); ?>/<?php echo e($setting->logo_home); ?>" alt="" /></a>
                  </div>
                  <div class="lema pull-right">
                    <a href="<?php echo e(url('/')); ?>"><img width="<?php echo e($setting->lema_home_width); ?>px" height="<?php echo e($setting->lema_home_height); ?>px" src="<?php echo e(URL::to('images/')); ?>/<?php echo e($setting->lema_home); ?>" alt="" /></a>
                  </div>    
                <?php else: ?>
                  <div class="logo pull-left">
                    <a href="<?php echo e(url('/')); ?>"><img  height="<?php echo e($setting->logo_home_height); ?>px" src="<?php echo e(URL::to('images/')); ?>/<?php echo e($setting->logo_home); ?>" alt="" /></a>
                  </div>   
                <?php endif; ?>

                         

          </div>            
<!--            
            <div class="btn-group pull-right">
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                  USA
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Canada</a></li>
                  <li><a href="#">UK</a></li>
                </ul>
              </div>
              
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                  DOLLAR
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Canadian Dollar</a></li>
                  <li><a href="#">Pound</a></li>
                </ul>
              </div>
            </div>
          </div>
          -->
          <div class="col-sm-6">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <?php if(Auth::guest()): ?>                
                  <li><a href="<?php echo e(url('/wishlist')); ?>"><i class="fa fa-heart"></i> Wishlist</a></li>
                  <li><a href="<?php echo e(url('/checkout')); ?>"><i class="fa fa-credit-card"></i> Checkout</a></li>
                  <li><a href="<?php echo e(route('product.shoppingCart')); ?>"><i class="fa fa-shopping-cart"></i> Cart
                  <span class="badge"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQty : ''); ?></span>
                  </a></li>
                  <?php if($setting->kind_web == '2'): ?>
                    <li><a href="<?php echo e(url('/signupw')); ?>"><i class="fa fa-briefcase"></i> Wholesale Registration</a></li>
                  <?php else: ?>
                    <li><a href="<?php echo e(url('/register')); ?>"><i class="fa fa-user"></i> Join Now</a></li> 
                  <?php endif; ?>    

                  <?php if($setting->approve_user == '1'): ?>
                    <li><a href="<?php echo e(url('/loginap')); ?>"><i class="fa fa-lock"></i> Login</a></li>
                  <?php else: ?>
                    <li><a href="<?php echo e(url('/login')); ?>"><i class="fa fa-lock"></i> Login</a></li>
                  <?php endif; ?>                              
                  
                  
                <?php else: ?>                
                  <li><a href="<?php echo e(url('/account')); ?>"><i class="fa fa-user"></i> Account</a></li>
                  <li><a href="<?php echo e(url('/wishlist')); ?>"><i class="fa fa-heart"></i> Wishlist</a></li>
                  <li><a href="<?php echo e(url('/checkout')); ?>"><i class="fa fa-credit-card"></i> Checkout</a></li>
                  <li><a href="<?php echo e(route('product.shoppingCart')); ?>"><i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQty : ''); ?></span>
                    </a>
                  </li>
                  <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-lock"></i> Logout</a></li>
                <?php endif; ?>
              </ul>
            </div>

             <?php if(Auth::guest()): ?>  
              <div class="pull-right">
                <form action="<?php echo e(url('postsubscribers')); ?>" id="main-contact-form" class="searchform" name="contact-form" method="post">
                  <?php if(count($errors) > 0): ?>
                      <div class="alert alert-danger">
                          <ul>
                              <?php foreach($errors->all() as $error): ?>
                                  <li><?php echo e($error); ?></li>
                              <?php endforeach; ?>
                          </ul>
                      </div>
                  <?php else: ?>
                    <?php if(Session::has('message_header')): ?>
                      <div class="alert alert-success">
                        <?php echo e(Session::get('message_header')); ?>

                      </div>
                    <?php else: ?>
                      <p>Get the most recent updates from our site...</p>    
                    <?php endif; ?>                      
                  <?php endif; ?> 

                  <input type="email" name="email" required="required" placeholder="Your email address" />
                  <?php echo e(csrf_field()); ?>  
                  <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>   
                </form>
              </div>
            <?php else: ?>
              <div class="pull-right">
              <p>
                  <h4>Hello, <?php echo e(Auth::user()->name); ?></h4>
              </p>  
              </div>
            <?php endif; ?>
        
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
  
 

<!-- END HEADER -->
