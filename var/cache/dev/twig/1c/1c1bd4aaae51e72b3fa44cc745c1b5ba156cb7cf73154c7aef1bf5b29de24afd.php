<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_47b528ade70cbcc3f1ad78dabb57295dd9a567a5dd60cea0a87c485c4be5355b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang=\"en\">
<!--<![endif]-->
<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset=\"utf-8\">
    <title>OYEENok E-commerce Bootstrap Template</title>
    <!-- =====  SEO MATE  ===== -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"distribution\" content=\"global\">
    <meta name=\"revisit-after\" content=\"2 Days\">
    <meta name=\"robots\" content=\"ALL\">
    <meta name=\"rating\" content=\"8 YEARS\">
    <meta name=\"Language\" content=\"en-us\">
    <meta name=\"GOOGLEBOT\" content=\"NOARCHIVE\">
    <!-- =====  MOBILE SPECIFICATION  ===== -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <!-- =====  CSS  ===== -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">






</head>

<body>
<!-- =====  LODER  ===== -->
<div class=\"loder\"></div>
<div class=\"wrapper\">
    <div id=\"subscribe-me\" class=\"modal animated fade in\" role=\"dialog\" data-keyboard=\"true\" tabindex=\"-1\">

        <div class=\"newsletter-popup\"> <img class=\"offer\"  src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/newsbg.jpg"), "html", null, true);
        echo "\" alt=\"offer\">
            <div class=\"newsletter-popup-static newsletter-popup-top\">
                <div class=\"popup-text\">
                    <div class=\"popup-title\">50% <span>off</span></div>
                    <div class=\"popup-desc\">
                        <div>Sign up and get 50% off your next Order</div>
                    </div>
                </div>
                <form onsubmit=\"return  validatpopupemail();\" method=\"post\">
                    <div class=\"form-group required\">
                        <input type=\"email\" name=\"email-popup\" id=\"email-popup\" placeholder=\"Enter Your Email\" class=\"form-control input-lg\" required />
                        <button type=\"submit\" class=\"btn btn-default btn-lg\" id=\"email-popup-submit\">Subscribe</button>
                        <label class=\"checkme\">
                            <input type=\"checkbox\" value=\"\" id=\"checkme\" /> Dont show again</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- =====  HEADER START  ===== -->
    <header id=\"header\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"header-top-left\">
                            <div class=\"contact\"><a href=\"#\">Call now !</a> <span class=\"hidden-xs hidden-sm hidden-md\">+91 987-654-321</span></div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-8\">
                        <ul class=\"header-top-right text-right\">
                            <li class=\"account\"><a href=\"login.html\">My Account</a></li>
                            <li class=\"language dropdown\"> <span class=\"dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">Language <span class=\"caret\"></span> </span>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                    <li><a href=\"#\">English</a></li>
                                    <li><a href=\"#\">French</a></li>
                                    <li><a href=\"#\">German</a></li>
                                </ul>
                            </li>
                            <li class=\"currency dropdown\"> <span class=\"dropdown-toggle\" id=\"dropdownMenu12\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">Currency <span class=\"caret\"></span> </span>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu12\">
                                    <li><a href=\"#\">€ Euro</a></li>
                                    <li><a href=\"#\">£ Pound Sterling</a></li>
                                    <li><a href=\"#\">\$ US Dollar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"main-search mt_40\">
                            <input id=\"search-input\" name=\"search\" value=\"\" placeholder=\"Search\" class=\"form-control input-lg\" autocomplete=\"off\" type=\"text\">
                            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\"></i></button>
              </span> </div>
                    </div>
                    <div class=\"navbar-header col-xs-6 col-sm-4\"> <a class=\"navbar-brand\" href=\"index.html\"> <img alt=\"OYEENok\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> </a> </div>
                    <div class=\"col-xs-6 col-sm-4 shopcart\">
                        <div id=\"cart\" class=\"btn-group btn-block mtb_40\">
                            <button type=\"button\" class=\"btn\" data-target=\"#cart-dropdown\" data-toggle=\"collapse\" aria-expanded=\"true\" onclick=\"window.location.href='";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier_index");
        echo "'\"><span id=\"shippingcart\">Shopping cart</span><span id=\"cart-total\">items (0)</span> </button>
                        </div>
                        <div id=\"cart-dropdown\" class=\"cart-menu collapse\">

                            <ul>
                                <li>
                                    <table class=\"table table-striped\">
                                        <tbody>

                                        <tr>
                                            <td class=\"text-center\"><a href=\"#\"><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/70x84.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\"></a></td>
                                            <td class=\"text-left product-name\"><a href=\"#\">MacBook Pro</a> <span class=\"text-left price\">\$20.00</span>
                                                <input class=\"cart-qty\" name=\"product_quantity\" min=\"1\" value=\"1\" type=\"number\">
                                            </td>
                                            <td class=\"text-center\"><a class=\"close-cart\"><i class=\"fa fa-times-circle\"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\"><a href=\"#\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/70x84.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\"></a></td>
                                            <td class=\"text-left product-name\"><a href=\"#\">MacBook Pro</a> <span class=\"text-left price\">\$20.00</span>
                                                <input class=\"cart-qty\" name=\"product_quantity\" min=\"1\" value=\"1\" type=\"number\">
                                            </td>
                                            <td class=\"text-center\"><a class=\"close-cart\"><i class=\"fa fa-times-circle\"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td class=\"text-right\"><strong>Sub-Total</strong></td>
                                            <td class=\"text-right\">\$2,100.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-right\"><strong>Eco Tax (-2.00)</strong></td>
                                            <td class=\"text-right\">\$2.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-right\"><strong>VAT (20%)</strong></td>
                                            <td class=\"text-right\">\$20.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-right\"><strong>Total</strong></td>
                                            <td class=\"text-right\">\$2,122.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <form action=\"cart_page.html\">
                                        <input class=\"btn pull-left mt_10\" value=\"View cart\" type=\"submit\">
                                    </form>
                                    <form action=\"checkout_page.html\">
                                        <input class=\"btn pull-right mt_10\" value=\"Checkout\" type=\"submit\">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class=\"navbar\">
                    <p>Menu</p>
                    <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".js-navbar-collapse\"> <span class=\"i-bar\"><i class=\"fa fa-bars\"></i></span></button>
                    <div class=\"collapse navbar-collapse js-navbar-collapse\">
                        <ul id=\"menu\" class=\"nav navbar-nav\">
                            <li> <a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_page12");
        echo "\">Home</a></li>
                            <li> <a href=\"category_page.html\">women</a></li>
                            <li> <a href=\"category_page.html\">men</a></li>
                            <li class=\"dropdown mega-dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Collection </a>
                                <ul class=\"dropdown-menu mega-dropdown-menu row\">
                                    <li class=\"col-md-3\">
                                        <ul>
                                            <li class=\"dropdown-header\">Women's</li>
                                            <li><a href=\"#\">Unique Features</a></li>
                                            <li><a href=\"#\">Image Responsive</a></li>
                                            <li><a href=\"#\">Auto Carousel</a></li>
                                            <li><a href=\"#\">Newsletter Form</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <ul>
                                            <li class=\"dropdown-header\">Man's</li>
                                            <li><a href=\"#\">Unique Features</a></li>
                                            <li><a href=\"#\">Image Responsive</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Auto Carousel</a></li>
                                            <li><a href=\"#\">Newsletter Form</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <ul>
                                            <li class=\"dropdown-header\">Children's</li>
                                            <li><a href=\"#\">Unique Features</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Image Responsive</a></li>
                                            <li><a href=\"#\">Auto Carousel</a></li>
                                            <li><a href=\"#\">Newsletter Form</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <ul>
                                            <li id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                                                <div class=\"carousel-inner\">
                                                    <div class=\"item active\"> <a href=\"#\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/menu-banner1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Banner1\"></a></div>
                                                    <!-- End Item -->
                                                    <div class=\"item\"> <a href=\"#\"><img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/menu-banner2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Banner1\"></a></div>
                                                    <!-- End Item -->
                                                    <div class=\"item\"> <a href=\"#\"><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/menu-banner3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Banner1\"></a></div>
                                                    <!-- End Item -->
                                                </div>
                                                <!-- End Carousel Inner -->
                                            </li>
                                            <!-- /.carousel -->
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href=\"blog_page.html\">Blog</a></li>
                            <li> <a href=\"about.html\">About us</a></li>
                            <li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages </a>
                                <ul class=\"dropdown-menu\">
                                    <li> <a href=\"contact_us.html\">Contact us</a></li>
                                    <li> <a href=\"cart_page.html\">Cart</a></li>
                                    <li> <a href=\"checkout_page.html\">Checkout</a></li>
                                    <li> <a href=\"product_detail_page.html\">Product Detail Page</a></li>
                                    <li> <a href=\"single_blog.html\">Single Post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </nav>
            </div>
        </div>
    </header>
    <!-- =====  HEADER END  ===== -->
    <!-- =====  BANNER STRAT  ===== -->

    ";
        // line 255
        $this->displayBlock('container', $context, $blocks);
        // line 257
        echo "    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
    <div class=\"footer pt_60\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"footer-top pb_60 mb_30\">
                    <div class=\"col-xs-12 col-sm-6\">
                        <div class=\"footer-logo\"> <a href=\"index.html\"> <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/footer-logo.png"), "html", null, true);
        echo "\" alt=\"OYEENok\"> </a> </div>
                        <div class=\"footer-desc\">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicagna.</div>
                    </div>
                    <!-- =====  testimonial  ===== -->
                    <div class=\"col-xs-12 col-sm-6\">
                        <div class=\"Testimonial\">
                            <div class=\"client owl-carousel\">
                                <div class=\"item client-detail\">
                                    <div class=\"client-avatar\"> <img alt=\"\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user1.jpg"), "html", null, true);
        echo "\"> </div>
                                    <div class=\"client-title\"><strong>joseph Lui</strong></div>
                                    <div class=\"client-designation mb_10\"> - php Developer</div>
                                    <p><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                                </div>
                                <div class=\"item client-detail\">
                                    <div class=\"client-avatar\"> <img alt=\"\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user2.jpg"), "html", null, true);
        echo "\"> </div>
                                    <div class=\"client-title\"><strong>joseph Lui</strong></div>
                                    <div class=\"client-designation mb_10\"> - php Developer</div>
                                    <p><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                                </div>
                                <div class=\"item client-detail\">
                                    <div class=\"client-avatar\"> <img alt=\"\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user3.jpg"), "html", null, true);
        echo "\"> </div>
                                    <div class=\"client-title\"><strong>joseph Lui</strong></div>
                                    <div class=\"client-designation mb_10\"> - php Developer</div>
                                    <p><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =====  testimonial end ===== -->
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 footer-block\">
                    <h6 class=\"footer-title ptb_20\">Information</h6>
                    <ul>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Delivery Information</a></li>
                        <li><a href=\"#\">Privacy Policy</a></li>
                        <li><a href=\"#\">Terms & Conditions</a></li>
                        <li><a href=\"contact.html\">Contact Us</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-block\">
                    <h6 class=\"footer-title ptb_20\">Services</h6>
                    <ul>
                        <li><a href=\"#\">Returns</a></li>
                        <li><a href=\"#\">Site Map</a></li>
                        <li><a href=\"#\">Wish List</a></li>
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Order History</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-block\">
                    <h6 class=\"footer-title ptb_20\">Extras</h6>
                    <ul>
                        <li><a href=\"#\">Brands</a></li>
                        <li><a href=\"#\">Gift Certificates</a></li>
                        <li><a href=\"#\">Affiliates</a></li>
                        <li><a href=\"#\">Specials</a></li>
                        <li><a href=\"#\">Newsletter</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-block\">
                    <h6 class=\"footer-title ptb_20\">Contacts</h6>
                    <ul>
                        <li>Warehouse & Offices, 12345 Street name, California USA</li>
                        <li>(+123) 456 789
                            <br> (+024) 666 888</li>
                        <li>Contact@yourcompany.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom mt_60 ptb_20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"social_icon\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"copyright-part text-center\">@ 2017 All Rights Reserved OYEENok</div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"payment-icon text-right\">
                            <ul>
                                <li><i class=\"fa fa-cc-paypal \"></i></li>
                                <li><i class=\"fa fa-cc-visa\"></i></li>
                                <li><i class=\"fa fa-cc-discover\"></i></li>
                                <li><i class=\"fa fa-cc-mastercard\"></i></li>
                                <li><i class=\"fa fa-cc-amex\"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====  FOOTER END  ===== -->
</div>
<a id=\"scrollup\"></a>
<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jQuery_v3.1.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.firstVisitPopup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 255
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 256
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 256,  501 => 255,  487 => 377,  483 => 376,  479 => 375,  475 => 374,  471 => 373,  467 => 372,  376 => 284,  367 => 278,  358 => 272,  347 => 264,  338 => 257,  336 => 255,  302 => 224,  297 => 222,  292 => 220,  244 => 175,  193 => 127,  183 => 120,  170 => 110,  164 => 107,  100 => 46,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  62 => 26,  58 => 25,  54 => 24,  50 => 23,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang=\"en\">
<!--<![endif]-->
<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset=\"utf-8\">
    <title>OYEENok E-commerce Bootstrap Template</title>
    <!-- =====  SEO MATE  ===== -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"distribution\" content=\"global\">
    <meta name=\"revisit-after\" content=\"2 Days\">
    <meta name=\"robots\" content=\"ALL\">
    <meta name=\"rating\" content=\"8 YEARS\">
    <meta name=\"Language\" content=\"en-us\">
    <meta name=\"GOOGLEBOT\" content=\"NOARCHIVE\">
    <!-- =====  MOBILE SPECIFICATION  ===== -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <!-- =====  CSS  ===== -->
    <link rel=\"stylesheet\" href=\"{{ asset ('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('images/favicon.png') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('images/apple-touch-icon.png') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('images/apple-touch-icon-72x72.png') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('images/apple-touch-icon-114x114.png') }}\">






</head>

<body>
<!-- =====  LODER  ===== -->
<div class=\"loder\"></div>
<div class=\"wrapper\">
    <div id=\"subscribe-me\" class=\"modal animated fade in\" role=\"dialog\" data-keyboard=\"true\" tabindex=\"-1\">

        <div class=\"newsletter-popup\"> <img class=\"offer\"  src=\"{{ asset ('images/newsbg.jpg')}}\" alt=\"offer\">
            <div class=\"newsletter-popup-static newsletter-popup-top\">
                <div class=\"popup-text\">
                    <div class=\"popup-title\">50% <span>off</span></div>
                    <div class=\"popup-desc\">
                        <div>Sign up and get 50% off your next Order</div>
                    </div>
                </div>
                <form onsubmit=\"return  validatpopupemail();\" method=\"post\">
                    <div class=\"form-group required\">
                        <input type=\"email\" name=\"email-popup\" id=\"email-popup\" placeholder=\"Enter Your Email\" class=\"form-control input-lg\" required />
                        <button type=\"submit\" class=\"btn btn-default btn-lg\" id=\"email-popup-submit\">Subscribe</button>
                        <label class=\"checkme\">
                            <input type=\"checkbox\" value=\"\" id=\"checkme\" /> Dont show again</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- =====  HEADER START  ===== -->
    <header id=\"header\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"header-top-left\">
                            <div class=\"contact\"><a href=\"#\">Call now !</a> <span class=\"hidden-xs hidden-sm hidden-md\">+91 987-654-321</span></div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-8\">
                        <ul class=\"header-top-right text-right\">
                            <li class=\"account\"><a href=\"login.html\">My Account</a></li>
                            <li class=\"language dropdown\"> <span class=\"dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">Language <span class=\"caret\"></span> </span>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                    <li><a href=\"#\">English</a></li>
                                    <li><a href=\"#\">French</a></li>
                                    <li><a href=\"#\">German</a></li>
                                </ul>
                            </li>
                            <li class=\"currency dropdown\"> <span class=\"dropdown-toggle\" id=\"dropdownMenu12\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">Currency <span class=\"caret\"></span> </span>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu12\">
                                    <li><a href=\"#\">€ Euro</a></li>
                                    <li><a href=\"#\">£ Pound Sterling</a></li>
                                    <li><a href=\"#\">\$ US Dollar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"main-search mt_40\">
                            <input id=\"search-input\" name=\"search\" value=\"\" placeholder=\"Search\" class=\"form-control input-lg\" autocomplete=\"off\" type=\"text\">
                            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\"></i></button>
              </span> </div>
                    </div>
                    <div class=\"navbar-header col-xs-6 col-sm-4\"> <a class=\"navbar-brand\" href=\"index.html\"> <img alt=\"OYEENok\" src=\"{{ asset ('images/logo.png')}}\"> </a> </div>
                    <div class=\"col-xs-6 col-sm-4 shopcart\">
                        <div id=\"cart\" class=\"btn-group btn-block mtb_40\">
                            <button type=\"button\" class=\"btn\" data-target=\"#cart-dropdown\" data-toggle=\"collapse\" aria-expanded=\"true\" onclick=\"window.location.href='{{ path('panier_index') }}'\"><span id=\"shippingcart\">Shopping cart</span><span id=\"cart-total\">items (0)</span> </button>
                        </div>
                        <div id=\"cart-dropdown\" class=\"cart-menu collapse\">

                            <ul>
                                <li>
                                    <table class=\"table table-striped\">
                                        <tbody>

                                        <tr>
                                            <td class=\"text-center\"><a href=\"#\"><img src=\"{{ asset('images/product/70x84.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\"></a></td>
                                            <td class=\"text-left product-name\"><a href=\"#\">MacBook Pro</a> <span class=\"text-left price\">\$20.00</span>
                                                <input class=\"cart-qty\" name=\"product_quantity\" min=\"1\" value=\"1\" type=\"number\">
                                            </td>
                                            <td class=\"text-center\"><a class=\"close-cart\"><i class=\"fa fa-times-circle\"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-center\"><a href=\"#\"><img src=\"{{ asset('images/product/70x84.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\"></a></td>
                                            <td class=\"text-left product-name\"><a href=\"#\">MacBook Pro</a> <span class=\"text-left price\">\$20.00</span>
                                                <input class=\"cart-qty\" name=\"product_quantity\" min=\"1\" value=\"1\" type=\"number\">
                                            </td>
                                            <td class=\"text-center\"><a class=\"close-cart\"><i class=\"fa fa-times-circle\"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td class=\"text-right\"><strong>Sub-Total</strong></td>
                                            <td class=\"text-right\">\$2,100.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-right\"><strong>Eco Tax (-2.00)</strong></td>
                                            <td class=\"text-right\">\$2.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-right\"><strong>VAT (20%)</strong></td>
                                            <td class=\"text-right\">\$20.00</td>
                                        </tr>
                                        <tr>
                                            <td class=\"text-right\"><strong>Total</strong></td>
                                            <td class=\"text-right\">\$2,122.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <form action=\"cart_page.html\">
                                        <input class=\"btn pull-left mt_10\" value=\"View cart\" type=\"submit\">
                                    </form>
                                    <form action=\"checkout_page.html\">
                                        <input class=\"btn pull-right mt_10\" value=\"Checkout\" type=\"submit\">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class=\"navbar\">
                    <p>Menu</p>
                    <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".js-navbar-collapse\"> <span class=\"i-bar\"><i class=\"fa fa-bars\"></i></span></button>
                    <div class=\"collapse navbar-collapse js-navbar-collapse\">
                        <ul id=\"menu\" class=\"nav navbar-nav\">
                            <li> <a href=\"{{ path('home_page12') }}\">Home</a></li>
                            <li> <a href=\"category_page.html\">women</a></li>
                            <li> <a href=\"category_page.html\">men</a></li>
                            <li class=\"dropdown mega-dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Collection </a>
                                <ul class=\"dropdown-menu mega-dropdown-menu row\">
                                    <li class=\"col-md-3\">
                                        <ul>
                                            <li class=\"dropdown-header\">Women's</li>
                                            <li><a href=\"#\">Unique Features</a></li>
                                            <li><a href=\"#\">Image Responsive</a></li>
                                            <li><a href=\"#\">Auto Carousel</a></li>
                                            <li><a href=\"#\">Newsletter Form</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <ul>
                                            <li class=\"dropdown-header\">Man's</li>
                                            <li><a href=\"#\">Unique Features</a></li>
                                            <li><a href=\"#\">Image Responsive</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Auto Carousel</a></li>
                                            <li><a href=\"#\">Newsletter Form</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <ul>
                                            <li class=\"dropdown-header\">Children's</li>
                                            <li><a href=\"#\">Unique Features</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Image Responsive</a></li>
                                            <li><a href=\"#\">Auto Carousel</a></li>
                                            <li><a href=\"#\">Newsletter Form</a></li>
                                            <li><a href=\"#\">Four columns</a></li>
                                            <li><a href=\"#\">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <ul>
                                            <li id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                                                <div class=\"carousel-inner\">
                                                    <div class=\"item active\"> <a href=\"#\"><img src=\"{{ asset('images/menu-banner1.jpg') }}\" class=\"img-responsive\" alt=\"Banner1\"></a></div>
                                                    <!-- End Item -->
                                                    <div class=\"item\"> <a href=\"#\"><img src=\"{{ asset('images/menu-banner2.jpg') }}\" class=\"img-responsive\" alt=\"Banner1\"></a></div>
                                                    <!-- End Item -->
                                                    <div class=\"item\"> <a href=\"#\"><img src=\"{{ asset('images/menu-banner3.jpg') }}\" class=\"img-responsive\" alt=\"Banner1\"></a></div>
                                                    <!-- End Item -->
                                                </div>
                                                <!-- End Carousel Inner -->
                                            </li>
                                            <!-- /.carousel -->
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href=\"blog_page.html\">Blog</a></li>
                            <li> <a href=\"about.html\">About us</a></li>
                            <li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages </a>
                                <ul class=\"dropdown-menu\">
                                    <li> <a href=\"contact_us.html\">Contact us</a></li>
                                    <li> <a href=\"cart_page.html\">Cart</a></li>
                                    <li> <a href=\"checkout_page.html\">Checkout</a></li>
                                    <li> <a href=\"product_detail_page.html\">Product Detail Page</a></li>
                                    <li> <a href=\"single_blog.html\">Single Post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </nav>
            </div>
        </div>
    </header>
    <!-- =====  HEADER END  ===== -->
    <!-- =====  BANNER STRAT  ===== -->

    {% block container %}
    {% endblock %}
    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
    <div class=\"footer pt_60\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"footer-top pb_60 mb_30\">
                    <div class=\"col-xs-12 col-sm-6\">
                        <div class=\"footer-logo\"> <a href=\"index.html\"> <img src=\"{{ asset('images/footer-logo.png') }}\" alt=\"OYEENok\"> </a> </div>
                        <div class=\"footer-desc\">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicagna.</div>
                    </div>
                    <!-- =====  testimonial  ===== -->
                    <div class=\"col-xs-12 col-sm-6\">
                        <div class=\"Testimonial\">
                            <div class=\"client owl-carousel\">
                                <div class=\"item client-detail\">
                                    <div class=\"client-avatar\"> <img alt=\"\" src=\"{{ asset('images/user1.jpg') }}\"> </div>
                                    <div class=\"client-title\"><strong>joseph Lui</strong></div>
                                    <div class=\"client-designation mb_10\"> - php Developer</div>
                                    <p><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                                </div>
                                <div class=\"item client-detail\">
                                    <div class=\"client-avatar\"> <img alt=\"\" src=\"{{ asset('images/user2.jpg') }}\"> </div>
                                    <div class=\"client-title\"><strong>joseph Lui</strong></div>
                                    <div class=\"client-designation mb_10\"> - php Developer</div>
                                    <p><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                                </div>
                                <div class=\"item client-detail\">
                                    <div class=\"client-avatar\"> <img alt=\"\" src=\"{{ asset('images/user3.jpg') }}\"> </div>
                                    <div class=\"client-title\"><strong>joseph Lui</strong></div>
                                    <div class=\"client-designation mb_10\"> - php Developer</div>
                                    <p><i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =====  testimonial end ===== -->
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 footer-block\">
                    <h6 class=\"footer-title ptb_20\">Information</h6>
                    <ul>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Delivery Information</a></li>
                        <li><a href=\"#\">Privacy Policy</a></li>
                        <li><a href=\"#\">Terms & Conditions</a></li>
                        <li><a href=\"contact.html\">Contact Us</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-block\">
                    <h6 class=\"footer-title ptb_20\">Services</h6>
                    <ul>
                        <li><a href=\"#\">Returns</a></li>
                        <li><a href=\"#\">Site Map</a></li>
                        <li><a href=\"#\">Wish List</a></li>
                        <li><a href=\"#\">My Account</a></li>
                        <li><a href=\"#\">Order History</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-block\">
                    <h6 class=\"footer-title ptb_20\">Extras</h6>
                    <ul>
                        <li><a href=\"#\">Brands</a></li>
                        <li><a href=\"#\">Gift Certificates</a></li>
                        <li><a href=\"#\">Affiliates</a></li>
                        <li><a href=\"#\">Specials</a></li>
                        <li><a href=\"#\">Newsletter</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-block\">
                    <h6 class=\"footer-title ptb_20\">Contacts</h6>
                    <ul>
                        <li>Warehouse & Offices, 12345 Street name, California USA</li>
                        <li>(+123) 456 789
                            <br> (+024) 666 888</li>
                        <li>Contact@yourcompany.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom mt_60 ptb_20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <div class=\"social_icon\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"copyright-part text-center\">@ 2017 All Rights Reserved OYEENok</div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"payment-icon text-right\">
                            <ul>
                                <li><i class=\"fa fa-cc-paypal \"></i></li>
                                <li><i class=\"fa fa-cc-visa\"></i></li>
                                <li><i class=\"fa fa-cc-discover\"></i></li>
                                <li><i class=\"fa fa-cc-mastercard\"></i></li>
                                <li><i class=\"fa fa-cc-amex\"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====  FOOTER END  ===== -->
</div>
<a id=\"scrollup\"></a>
<script src=\"{{ asset ('js/jQuery_v3.1.1.min.js')}}\"></script>
<script src=\"{{ asset ('js/owl.carousel.min.js')}}\"></script>
<script src=\"{{ asset ('js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset ('js/jquery.magnific-popup.js')}}\"></script>
<script src=\"{{ asset ('js/jquery.firstVisitPopup.js')}}\"></script>
<script src=\"{{ asset ('js/custom.js')}}\"></script>
</body>

</html>", "FrontBundle::layout.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\FrontBundle\\Resources\\views\\layout.html.twig");
    }
}
