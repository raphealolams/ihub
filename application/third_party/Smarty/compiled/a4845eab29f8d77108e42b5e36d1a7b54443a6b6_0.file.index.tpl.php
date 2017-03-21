<?php /* Smarty version 3.1.27, created on 2016-12-13 02:54:51
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\favour\layouts\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4833584ffdab27e935_49196252%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4845eab29f8d77108e42b5e36d1a7b54443a6b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\favour\\layouts\\index.tpl',
      1 => 1471969318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4833584ffdab27e935_49196252',
  'variables' => 
  array (
    'THEME' => 0,
    'pages' => 0,
    'page' => 0,
    'generated_pages_content' => 0,
    'theme_public_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffdab519690_59652969',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffdab519690_59652969')) {
function content_584ffdab519690_59652969 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_asset_uri')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_asset_uri.php';
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';

$_smarty_tpl->properties['nocache_hash'] = '4833584ffdab27e935_49196252';
ob_start();
echo smarty_function_theme_asset_uri(array('theme'=>'favour'),$_smarty_tpl);
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['theme_public_url'] = new Smarty_Variable($_tmp1, null, 0);?>
<?php echo smarty_function_locate_load(array('file'=>"partials/header"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['generated_pages_content'] = new Smarty_Variable(array(), null, 0);?>
</head><!--/head-->
<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <?php $_smarty_tpl->tpl_vars['pages'] = new Smarty_Variable($_smarty_tpl->tpl_vars['THEME']->value->getPages(), null, 0);?>
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class=" icon-bar"></span>
                        <span class=" icon-bar"></span>
                        <span class=" icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <?php if (count($_smarty_tpl->tpl_vars['pages']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$foreach_page_Sav = $_smarty_tpl->tpl_vars['page'];
?>
                                <li><a href="#<?php echo $_smarty_tpl->tpl_vars['page']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</a></li>
                                
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "generated_pages_content"); ob_start(); ?>
                                    <section id="<?php echo $_smarty_tpl->tpl_vars['page']->value->slug;?>
">
                                        <div class="container">
                                            <div class="box first">
                                            <div class="row">
                                                <?php echo $_smarty_tpl->tpl_vars['page']->value->getBody();?>

                                            </div><!--/.row-->
                                            </div><!--/.box-->
                                        </div><!--/.container-->
                                    </section><!--/#services-->
                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php
$_smarty_tpl->tpl_vars['page'] = $foreach_page_Sav;
}
?>
                        <?php } else { ?>
                            
                            <?php echo BootstrapHelper::alert('danger',"Add the pages in the theme option to overide default");?>

                            <li class="active"><a href="#main-slider"><i class="fa fa-home"></i></a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#about-us">About Us</a></li>
                            <li><a href="#contact">Contact</a></li>
                        <?php }?>
                       
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

   <?php echo smarty_function_locate_load(array('file'=>"partials/slider"),$_smarty_tpl);?>

   <?php if (count($_smarty_tpl->tpl_vars['generated_pages_content']->value)) {?>
       <?php echo join('',$_smarty_tpl->tpl_vars['generated_pages_content']->value);?>

    <?php } else { ?>
        <section id="services">
            <div class="container">
                <div class="box first">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="fa fa-apple fa fa-md fa fa-color1"></i>
                                <h4>iOS development</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="fa fa-android fa fa-md fa fa-color2"></i>
                                <h4>Android development</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="fa fa-windows fa fa-md fa fa-color3"></i>
                                <h4>Windows Phone development</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="fa fa-html5 fa fa-md fa fa-color4"></i>
                                <h4>Ruby on Rails development</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="fa fa-css3 fa fa-md fa fa-color5"></i>
                                <h4>Javascript development</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="fa fa-thumbs-up fa fa-md fa fa-color6"></i>
                                <h4>Responsive web design</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div><!--/.col-md-4-->
                    </div><!--/.row-->
                </div><!--/.box-->
            </div><!--/.container-->
        </section><!--/#services-->

        <section id="portfolio">
            <div class="container">
                <div class="box">
                    <div class="center gap">
                        <h2>Portfolio</h2>
                        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac<br>turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                    </div><!--/.center-->
                    <ul class="portfolio-filter">
                        <li><a class="btn btn-primary active" href="#" data-filter="*">All</a></li>
                        <li><a class="btn btn-primary" href="#" data-filter=".bootstrap">Bootstrap</a></li>
                        <li><a class="btn btn-primary" href="#" data-filter=".html">HTML</a></li>
                        <li><a class="btn btn-primary" href="#" data-filter=".wordpress">Wordpress</a></li>
                    </ul><!--/#portfolio-filter-->
                    <ul class="portfolio-items col-4">
                        <li class="portfolio-item apps">
                            <div class="item-inner">
                                <div class="portfolio-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/thumb/item1.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/full/item1.jpg"><i class="fa fa-eye-open"></i></a>             
                                    </div>
                                </div>
                                <h5>Lorem ipsum dolor sit amet</h5>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item joomla bootstrap">
                            <div class="item-inner">
                                <div class="portfolio-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/thumb/item2.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/full/item2.jpg"><i class="fa fa-eye-open"></i></a>  
                                    </div>
                                </div> 
                                <h5>Lorem ipsum dolor sit amet</h5>         
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item bootstrap wordpress">
                            <div class="item-inner">
                                <div class="portfolio-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/thumb/item3.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/full/item3.jpg"><i class="fa fa-eye-open"></i></a>        
                                    </div> 
                                </div>
                                <h5>Lorem ipsum dolor sit amet</h5>          
                            </div>           
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item joomla wordpress apps">
                            <div class="item-inner">
                                <div class="portfolio-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/thumb/item4.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/full/item4.jpg"><i class="fa fa-eye-open"></i></a>          
                                    </div>   
                                </div>
                                <h5>Lorem ipsum dolor sit amet</h5>        
                            </div>           
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item joomla html">
                            <div class="item-inner">
                                <div class="portfolio-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/thumb/item5.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/full/item5.jpg"><i class="fa fa-eye-open"></i></a>          
                                    </div>  
                                </div>
                                <h5>Lorem ipsum dolor sit amet</h5>  
                            </div>       
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item wordpress html">
                            <div class="item-inner">
                                <div class="portfolio-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/thumb/item6.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/full/item6.jpg"><i class="fa fa-eye-open"></i></a>           
                                    </div>  
                                </div>
                                <h5>Lorem ipsum dolor sit amet</h5>         
                            </div>           
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item joomla html">
                            <div class="item-inner">
                                <div class="portfolio-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/thumb/item5.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/full/item5.jpg"><i class="fa fa-eye-open"></i></a>          
                                    </div>  
                                </div>
                                <h5>Lorem ipsum dolor sit amet</h5>  
                            </div>       
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item wordpress html">
                            <div class="item-inner">
                                <div class="portfolio-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/thumb/item6.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/portfolio/full/item6.jpg"><i class="fa fa-eye-open"></i></a>           
                                    </div>   
                                </div>
                                <h5>Lorem ipsum dolor sit amet</h5>        
                            </div>         
                        </li><!--/.portfolio-item-->
                    </ul>   
                </div><!--/.box-->
            </div><!--/.container-->
        </section><!--/#portfolio-->

        <section id="pricing">
            <div class="container">
                <div class="box">
                    <div class="center">
                        <h2>See our Pricings</h2>
                        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et <br>malesuada fames ac turpis egestas.</p>
                    </div><!--/.center-->   
                    <div class="big-gap"></div>
                    <div id="pricing-table" class="row">
                        <div class="col-sm-4">
                            <ul class="plan">
                                <li class="plan-name">Basic</li>
                                <li class="plan-price">$29</li>
                                <li>5GB Storage</li>
                                <li>1GB RAM</li>
                                <li>400GB Bandwidth</li>
                                <li>10 Email Address</li>
                                <li>Forum Support</li>
                                <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                            </ul>
                        </div><!--/.col-sm-4-->
                        <div class="col-sm-4">
                            <ul class="plan featured">
                                <li class="plan-name">Standard</li>
                                <li class="plan-price">$49</li>
                                <li>10GB Storage</li>
                                <li>2GB RAM</li>
                                <li>1TB Bandwidth</li>
                                <li>100 Email Address</li>
                                <li>Forum Support</li>
                                <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                            </ul>
                        </div><!--/.col-sm-4-->
                        <div class="col-sm-4">
                            <ul class="plan">
                                <li class="plan-name">Advanced</li>
                                <li class="plan-price">$199</li>
                                <li>30GB Storage</li>
                                <li>5GB RAM</li>
                                <li>5TB Bandwidth</li>
                                <li>1000 Email Address</li>
                                <li>Forum Support</li>
                                <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                            </ul>
                        </div><!--/.col-sm-4-->
                    </div> 
                </div> 
            </div>
        </section><!--/#pricing-->

        <section id="about-us">
            <div class="container">
                <div class="box">
                    <div class="center">
                        <h2>Meet the Team</h2>
                        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et<br>malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="gap"></div>
                    <div id="team-scroller" class="carousel scale">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="member">
                                            <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/team1.jpg" alt="" ></p>
                                            <h3>Agnes Smith<small class="designation">CEO &amp; Founder</small></h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="member">
                                            <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/team2.jpg" alt="" ></p>
                                            <h3>Donald Ford<small class="designation">Senior Vice President</small></h3>
                                        </div>
                                    </div>        
                                    <div class="col-sm-4">
                                        <div class="member">
                                            <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/team3.jpg" alt="" ></p>
                                            <h3>Karen Richardson<small class="designation">Assitant Vice President</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="member">
                                            <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/team3.jpg" alt="" ></p>
                                            <h3>David Robbins<small class="designation">Co-Founder</small></h3>
                                        </div>
                                    </div>   
                                    <div class="col-sm-4">
                                        <div class="member">
                                            <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/team1.jpg" alt="" ></p>
                                            <h3>Philip Mejia<small class="designation">Marketing Manager</small></h3>
                                        </div>
                                    </div>     
                                    <div class="col-sm-4">
                                        <div class="member">
                                            <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
images/team2.jpg" alt="" ></p>
                                            <h3>Charles Erickson<small class="designation">Support Manager</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left-arrow" href="#team-scroller" data-slide="prev">
                            <i class="fa fa-angle-left fa fa-4x"></i>
                        </a>
                        <a class="right-arrow" href="#team-scroller" data-slide="next">
                            <i class="fa fa-angle-right fa fa-4x"></i>
                        </a>
                    </div><!--/.carousel-->
                </div><!--/.box-->
            </div><!--/.container-->
        </section><!--/#about-us-->

        <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Contact Form</h1>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Our Address</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <h1>Connect with us</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook fa fa-social"></i> Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus fa fa-social"></i> Google Plus</a></li>
                                    <li><a href="#"><i class="fa fa-pinterest fa fa-social"></i> Pinterest</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-linkedin fa fa-social"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="fa fa-twitter fa fa-social"></i> Twitter</a></li>
                                    <li><a href="#"><i class="fa fa-youtube fa fa-social"></i> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->
    <?php }?>
<?php echo smarty_function_locate_load(array('file'=>"partials/footer"),$_smarty_tpl);?>

</body>
</html><?php }
}
?>