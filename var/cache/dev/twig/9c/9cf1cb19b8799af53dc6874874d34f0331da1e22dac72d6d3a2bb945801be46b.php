<?php

/* @Front/pages/cart.html.twig */
class __TwigTemplate_fb72498164902c5cae04d57946850e907c14bd2d62080022ce5e06f0abcb85c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@Front/pages/cart.html.twig", 1);
        $this->blocks = [
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/pages/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/pages/cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo " <!-- =====  CONTAINER START  ===== -->
    <div class=\"container\">
        <div class=\"row \">
            <!-- =====  BANNER STRAT  ===== -->
            <div class=\"col-sm-12\">
                <div class=\"breadcrumb ptb_20\">
                    <h1>Shopping Cart</h1>
                    <ul>
                        <li><a href=\"index.html\">Home</a></li>
                        <li class=\"active\">Shopping Cart</li>
                    </ul>
                </div>
            </div>
            <!-- =====  BREADCRUMB END===== -->
            <div id=\"column-left\" class=\"col-sm-4 col-lg-3 hidden-xs\">
                <div id=\"category-menu\" class=\"navbar collapse in mb_40\" aria-expanded=\"true\" style=\"\" role=\"button\">
                    <div class=\"nav-responsive\">
                        <div class=\"heading-part\">
                            <h2 class=\"main_title\">Top category</h2>
                        </div>
                        <ul class=\"nav  main-navigation collapse in\">
                            <li><a href=\"#\">Appliances</a></li>
                            <li><a href=\"#\">Mobile Phones</a></li>
                            <li><a href=\"#\">Tablet PC & Accessories</a></li>
                            <li><a href=\"#\">Consumer Electronics</a></li>
                            <li><a href=\"#\">Computers & Networking</a></li>
                            <li><a href=\"#\">Electrical & Tools</a></li>
                            <li><a href=\"#\">Apparel</a></li>
                            <li><a href=\"#\">Bags & Shoes</a></li>
                            <li><a href=\"#\">Toys & Hobbies</a></li>
                            <li><a href=\"#\">Watches & Jewelry</a></li>
                            <li><a href=\"#\">Home & Garden</a></li>
                            <li><a href=\"#\">Health & Beauty</a></li>
                            <li><a href=\"#\">Outdoors & Sports</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"left_banner left-sidebar-widget mb_50 mt_30\"> <a href=\"#\"><img src=\"images/left1.jpg\" alt=\"Left Banner\" class=\"img-responsive\" /></a> </div>
                <div class=\"left-special left-sidebar-widget mb_50\">
                    <div class=\"heading-part mb_20 \">
                        <h2 class=\"main_title\">Top Products</h2>
                    </div>
                    <div id=\"left-special\" class=\"owl-carousel\">
                        <ul class=\"row \">
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product1.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product1-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product2.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product2-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product3.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product3-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class=\"row \">
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product4.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product4-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product5.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product5-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product6.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product6-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class=\"row \">
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product7.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product7-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product8.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product8-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product9.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product9-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class=\"row \">
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product10.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product10-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product1.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product1-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product2.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product2-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8 col-lg-9 mtb_20\">
                <form enctype=\"multipart/form-data\" method=\"post\" action=\"#\">

                    ";
        // line 240
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 241
            echo "                        <tr>
                            <td class=\"text-center\"><center>Aucun Produit dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 245
        echo "
                    ";
        // line 246
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 247
            echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">


                            <thead>
                            <tr>
                                <td class=\"text-center\"></td>
                                <td class=\"text-center\">Image</td>
                                <td class=\"text-left\">Product Name</td>
                                <td class=\"text-left\">Color</td>
                                <td class=\"text-left\">Size</td>
                                <td class=\"text-right\">Unit Price</td>



                            </tr>
                            </thead>
                            <tbody>


                            ";
            // line 267
            $context["total"] = 0;
            // line 268
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 269
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["p"], "id", []), [], "array")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 270
                    echo "
                                <tr class=\"cart_item\">

                                    <td class=\"btn btn-danger\"  data-toggle=\"tooltip\"><a title=\"Remove this item\" class=\"remove\" href=\"";
                    // line 273
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("P_supprimmer", ["id" => $this->getAttribute($context["p"], "id", []), "ps" => $context["i"]]), "html", null, true);
                    echo "\"><i class=\"fa fa-times-circle\" ></a></td>

                                    <td class=\"text-center\"><img src=\"";
                    // line 275
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/{{ p.photoP}}"), "html", null, true);
                    echo "\" alt=\"iPod Classic\" title=\"iPod Classic\"></td>
                                    <td class=\"text-left\"> <a>
                                            ";
                    // line 277
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["p"], "libelleAn", [])), "html", null, true);
                    echo "
                                        </a></td>

                                    <td class=\"text-left\"> <a>
                                            ";
                    // line 281
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["p"], "couleur", [])), "html", null, true);
                    echo "
                                        </a></td>

                                    <td class=\"text-left\">
                                        <span class=\"amount\">";
                    // line 285
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["p"], "id", []), [], "array"), $context["i"], [], "array"), "html", null, true);
                    echo "</span>
                                    </td>



                                    <td class=\"text-left\">
                                        <span class=\"amount\">\$";
                    // line 291
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", []), "html", null, true);
                    echo "</span>
                                    </td>




                                    ";
                    // line 297
                    $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["p"], "prix", []));
                    // line 298
                    echo "
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 301
                echo "
                                <tr class =\"cart_item\">
                                    <td colspan=\"4\">
                                    </td>
                                    <td>Quantité :</td>
                                    <td>";
                // line 306
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["p"], "id", []), [], "array")), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            echo "                            <tr class =\"cart_item\">
                                <td colspan=\"4\">
                                </td>
                                <td>Total :</td>
                                <td>\$";
            // line 313
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </form>
                <h3 class=\"mtb_10\">What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                <div class=\"panel-group mt_20\" id=\"accordion\">
                    <div class=\"panel panel-default pull-left\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">Use Coupon Code <i class=\"fa fa-caret-down\"></i></a></h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                <label for=\"input-coupon\" class=\"col-sm-4 control-label\">Enter your coupon here</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"input-coupon\" placeholder=\"Enter your coupon here\" value=\"\" name=\"coupon\">
                                    <span class=\"input-group-btn\">
                  <input type=\"button\" class=\"btn\" data-loading-text=\"Loading...\" id=\"button-coupon\" value=\"Apply Coupon\">
                  </span> </div>
                            </div>
                        </div>


                    <div class=\"panel panel-default \">
                        <form action=\"";
            // line 342
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("P_pass", ["total" => (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))]), "html", null, true);
            echo "\" >

                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">Shipping Details <i class=\"fa fa-caret-down\"></i></a> </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <form class=\"form-horizontal\">
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" checked=\"checked\" value=\"existing\" name=\"payment_address\" data-id=\"payment-existing\"> I want to use an existing address</label>
                                    </div>
                                    <div id=\"payment-existing\">
                                        <select class=\"form-control\" name=\"address_id\">
                                            <option selected=\"selected\" value=\"\">Select a previous address</option>
                                            ";
            // line 357
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adresses"]) ? $context["adresses"] : $this->getContext($context, "adresses")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 358
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "address", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "address", []), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                                        </select>

                                    </div>
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" value=\"new\" name=\"payment_address\" data-id=\"payment-new\"> I want to use a new address</label>
                                    </div>
                                    <br>
                                    <div id=\"payment-new\" style=\"display: none;\">
                                        <div class=\"form-group required\">
                                            <label for=\"input-payment-country\" class=\"col-sm-2 control-label\">Country</label>
                                            <div class=\"col-sm-10\">
                                                <select class=\"form-control\" id=\"input-payment-country\" name=\"country_id\">
                                                    <option value=\"\" selected=\"selected\"> --- Please Select --- </option>
                                                    <option value=\"Aaland Islands\">Aaland Islands</option>
                                                    <option value=\"Afghanistan\">Afghanistan</option>
                                                    <option value=\"Albania\">Albania</option>
                                                    <option value=\"Algeria\">Algeria</option>
                                                    <option value=\"American Samoa\">American Samoa</option>
                                                    <option value=\"Andorra\">Andorra</option>
                                                    <option value=\"Angola\">Angola</option>
                                                    <option value=\"Anguilla\">Anguilla</option>
                                                    <option value=\"Antarctica\">Antarctica</option>
                                                    <option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>
                                                    <option value=\"Argentina\">Argentina</option>
                                                    <option value=\"Armenia\">Armenia</option>
                                                    <option value=\"Aruba\">Aruba</option>
                                                    <option value=\"Ascension Island (British)\">Ascension Island (British)</option>
                                                    <option value=\"Australia\">Australia</option>
                                                    <option value=\"Austria\">Austria</option>
                                                    <option value=\"Azerbaijan\">Azerbaijan</option>
                                                    <option value=\"Bahamas\">Bahamas</option>
                                                    <option value=\"Bahrain\">Bahrain</option>
                                                    <option value=\"Bangladesh\">Bangladesh</option>
                                                    <option value=\"Barbados\">Barbados</option>
                                                    <option value=\"Belarus\">Belarus</option>
                                                    <option value=\"Belgium\">Belgium</option>
                                                    <option value=\"26\">Bolivia</option>
                                                    <option value=\"Bulgaria\">Bulgaria</option>
                                                    <option value=\"34\">Burkina Faso</option>
                                                    <option value=\"38\">Canada</option>
                                                    <option value=\"47\">Colombia</option>
                                                    <option value=\"56\">Czech Republic</option>
                                                    <option value=\"57\">Denmark</option>
                                                    <option value=\"63\">Egypt</option>
                                                    <option value=\"72\">Finland</option>
                                                    <option value=\"74\">France, Metropolitan</option>
                                                    <option value=\"81\">Germany</option>
                                                    <option value=\"84\">Greece</option>
                                                    <option value=\"96\">Hong Kong</option>
                                                    <option value=\"97\">Hungary</option>
                                                    <option value=\"98\">Iceland</option>
                                                    <option value=\"99\">India</option>
                                                    <option value=\"Italy\">Italy</option>
                                                    <option value=\"107\">Japan</option>
                                                    <option value=\"108\">Jordan</option>
                                                    <option value=\"114\">Kuwait</option>
                                                    <option value=\"117\">Latvia</option>
                                                    <option value=\"118\">Lebanon</option>
                                                    <option value=\"121\">Libyan Arab Jamahiriya</option>
                                                    <option value=\"124\">Luxembourg</option>
                                                    <option value=\"144\">Morocco</option>
                                                    <option value=\"149\">Nepal</option>
                                                    <option value=\"150\">Netherlands</option>
                                                    <option value=\"151\">Netherlands Antilles</option>
                                                    <option value=\"152\">New Caledonia</option>
                                                    <option value=\"153\">New Zealand</option>
                                                    <option value=\"154\">Nicaragua</option>
                                                    <option value=\"155\">Niger</option>
                                                    <option value=\"156\">Nigeria</option>
                                                    <option value=\"157\">Niue</option>
                                                    <option value=\"158\">Norfolk Island</option>
                                                    <option value=\"112\">North Korea</option>
                                                    <option value=\"159\">Northern Mariana Islands</option>
                                                    <option value=\"160\">Norway</option>
                                                    <option value=\"161\">Oman</option>
                                                    <option value=\"162\">Pakistan</option>
                                                    <option value=\"163\">Palau</option>
                                                    <option value=\"247\">Palestinian Territory, Occupied</option>
                                                    <option value=\"164\">Panama</option>
                                                    <option value=\"165\">Papua New Guinea</option>
                                                    <option value=\"166\">Paraguay</option>
                                                    <option value=\"167\">Peru</option>
                                                    <option value=\"168\">Philippines</option>
                                                    <option value=\"169\">Pitcairn</option>
                                                    <option value=\"170\">Poland</option>
                                                    <option value=\"171\">Portugal</option>
                                                    <option value=\"172\">Puerto Rico</option>
                                                    <option value=\"173\">Qatar</option>
                                                    <option value=\"174\">Reunion</option>
                                                    <option value=\"175\">Romania</option>
                                                    <option value=\"Russian Federation\">Russian Federation</option>
                                                    <option value=\"177\">Rwanda</option>
                                                    <option value=\"178\">Saint Kitts and Nevis</option>
                                                    <option value=\"179\">Saint Lucia</option>
                                                    <option value=\"180\">Saint Vincent and the Grenadines</option>
                                                    <option value=\"181\">Samoa</option>
                                                    <option value=\"182\">San Marino</option>
                                                    <option value=\"183\">Sao Tome and Principe</option>
                                                    <option value=\"184\">Saudi Arabia</option>
                                                    <option value=\"185\">Senegal</option>
                                                    <option value=\"243\">Serbia</option>
                                                    <option value=\"186\">Seychelles</option>
                                                    <option value=\"187\">Sierra Leone</option>
                                                    <option value=\"188\">Singapore</option>
                                                    <option value=\"189\">Slovak Republic</option>
                                                    <option value=\"190\">Slovenia</option>
                                                    <option value=\"191\">Solomon Islands</option>
                                                    <option value=\"192\">Somalia</option>
                                                    <option value=\"193\">South Africa</option>
                                                    <option value=\"194\">South Georgia &amp; South Sandwich Islands</option>
                                                    <option value=\"248\">South Sudan</option>
                                                    <option value=\"195\">Spain</option>
                                                    <option value=\"196\">Sri Lanka</option>
                                                    <option value=\"249\">St. Barthelemy</option>
                                                    <option value=\"197\">St. Helena</option>
                                                    <option value=\"250\">St. Martin (French part)</option>
                                                    <option value=\"198\">St. Pierre and Miquelon</option>
                                                    <option value=\"199\">Sudan</option>
                                                    <option value=\"200\">Suriname</option>
                                                    <option value=\"201\">Svalbard and Jan Mayen Islands</option>
                                                    <option value=\"202\">Swaziland</option>
                                                    <option value=\"203\">Sweden</option>
                                                    <option value=\"204\">Switzerland</option>
                                                    <option value=\"205\">Syrian Arab Republic</option>
                                                    <option value=\"206\">Taiwan</option>
                                                    <option value=\"207\">Tajikistan</option>
                                                    <option value=\"208\">Tanzania, United Republic of</option>
                                                    <option value=\"209\">Thailand</option>
                                                    <option value=\"210\">Togo</option>
                                                    <option value=\"211\">Tokelau</option>
                                                    <option value=\"212\">Tonga</option>
                                                    <option value=\"213\">Trinidad and Tobago</option>
                                                    <option value=\"255\">Tristan da Cunha</option>
                                                    <option value=\"Tunisia\">Tunisia</option>
                                                    <option value=\"215\">Turkey</option>
                                                    <option value=\"216\">Turkmenistan</option>
                                                    <option value=\"217\">Turks and Caicos Islands</option>
                                                    <option value=\"218\">Tuvalu</option>
                                                    <option value=\"219\">Uganda</option>
                                                    <option value=\"220\">Ukraine</option>
                                                    <option value=\"221\">United Arab Emirates</option>
                                                    <option value=\"222\">United Kingdom</option>
                                                    <option value=\"223\">United States</option>
                                                    <option value=\"224\">United States Minor Outlying Islands</option>
                                                    <option value=\"225\">Uruguay</option>
                                                    <option value=\"226\">Uzbekistan</option>
                                                    <option value=\"227\">Vanuatu</option>
                                                    <option value=\"228\">Vatican City State (Holy See)</option>
                                                    <option value=\"229\">Venezuela</option>
                                                    <option value=\"230\">Viet Nam</option>
                                                    <option value=\"231\">Virgin Islands (British)</option>
                                                    <option value=\"232\">Virgin Islands (U.S.)</option>
                                                    <option value=\"233\">Wallis and Futuna Islands</option>
                                                    <option value=\"234\">Western Sahara</option>
                                                    <option value=\"235\">Yemen</option>
                                                    <option value=\"238\">Zambia</option>
                                                    <option value=\"239\">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class=\"form-group required\">
                                        <label for=\"input-payment-address-1\" class=\"col-sm-2 control-label\">Address 1</label>
                                        <div class=\"col-sm-10\">
                                        <input type=\"text\" class=\"form-control\" id=\"input-payment-address-1\" placeholder=\"Address 1\"  name=\"address_1\">
                                        </div>


                                    <div class=\"form-group\">
                                        <label for=\"input-payment-address-2\" class=\"col-sm-2 control-label\">Address 2</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" class=\"form-control\" id=\"input-payment-address-2\" placeholder=\"Address 2\" value=\"\" name=\"address_2\">
                                        </div>
                                    </div>

                                    <div class=\"form-group required\">
                                        <label for=\"input-payment-city\" class=\"col-sm-2 control-label\">City</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" class=\"form-control\" id=\"input-payment-city\" placeholder=\"City\" value=\"\" name=\"city\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"input-payment-postcode\" class=\"col-sm-2 control-label\">Post Code</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" class=\"form-control\" id=\"input-payment-postcode\" placeholder=\"Post Code\" value=\"\" name=\"postcode\">
                                        </div>

                                    </div>
                                    </div>
                                    </div>
                                        <input class=\"btn pull-right mt_30\" type=\"submit\" value=\"Checkout\"/>


                                        <form action=\"index.html\">
                                            <input class=\"btn pull-left mt_30\" type=\"submit\" value=\"Continue Shopping\" />
                                        </form>



                                </form>
                            </div>
                        </div>


                        </form>



                        </div>

                    </div>

                    ";
        }
        // line 573
        echo "






                    </form>
            </div></form>
        </div>
        <div id=\"brand_carouse\" class=\"ptb_30 text-center\">
            <div class=\"type-01\">
                <div class=\"heading-part mb_20 \">
                    <h2 class=\"main_title\">Brand Logo</h2>

            </div>
        </div>
    </div>


    <!-- =====  CONTAINER END  ===== -->

</div>
<a id=\"scrollup\"></a>
    <script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jQuery_v3.1.1.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('input[name=\\'payment_address\\']').on('change', function() {
            if (this.value == 'new') {
                \$('#payment-existing').hide();
                \$('#payment-new').show();
            } else {
                \$('#payment-existing').show();
                \$('#payment-new').hide();
            }
        });
        \$('input[name=\\'shipping_address\\']').on('change', function() {
            if (this.value == 'new') {
                \$('#shipping-existing').hide();
                \$('#shipping-new').show();
            } else {
                \$('#shipping-existing').show();
                \$('#shipping-new').hide();
            }
        });
    </script>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/pages/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  737 => 602,  733 => 601,  729 => 600,  725 => 599,  720 => 597,  694 => 573,  479 => 360,  468 => 358,  464 => 357,  446 => 342,  414 => 313,  408 => 309,  399 => 306,  392 => 301,  384 => 298,  382 => 297,  373 => 291,  364 => 285,  357 => 281,  350 => 277,  345 => 275,  340 => 273,  335 => 270,  330 => 269,  325 => 268,  323 => 267,  301 => 247,  299 => 246,  296 => 245,  290 => 241,  288 => 240,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}
{% block container %}
 <!-- =====  CONTAINER START  ===== -->
    <div class=\"container\">
        <div class=\"row \">
            <!-- =====  BANNER STRAT  ===== -->
            <div class=\"col-sm-12\">
                <div class=\"breadcrumb ptb_20\">
                    <h1>Shopping Cart</h1>
                    <ul>
                        <li><a href=\"index.html\">Home</a></li>
                        <li class=\"active\">Shopping Cart</li>
                    </ul>
                </div>
            </div>
            <!-- =====  BREADCRUMB END===== -->
            <div id=\"column-left\" class=\"col-sm-4 col-lg-3 hidden-xs\">
                <div id=\"category-menu\" class=\"navbar collapse in mb_40\" aria-expanded=\"true\" style=\"\" role=\"button\">
                    <div class=\"nav-responsive\">
                        <div class=\"heading-part\">
                            <h2 class=\"main_title\">Top category</h2>
                        </div>
                        <ul class=\"nav  main-navigation collapse in\">
                            <li><a href=\"#\">Appliances</a></li>
                            <li><a href=\"#\">Mobile Phones</a></li>
                            <li><a href=\"#\">Tablet PC & Accessories</a></li>
                            <li><a href=\"#\">Consumer Electronics</a></li>
                            <li><a href=\"#\">Computers & Networking</a></li>
                            <li><a href=\"#\">Electrical & Tools</a></li>
                            <li><a href=\"#\">Apparel</a></li>
                            <li><a href=\"#\">Bags & Shoes</a></li>
                            <li><a href=\"#\">Toys & Hobbies</a></li>
                            <li><a href=\"#\">Watches & Jewelry</a></li>
                            <li><a href=\"#\">Home & Garden</a></li>
                            <li><a href=\"#\">Health & Beauty</a></li>
                            <li><a href=\"#\">Outdoors & Sports</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"left_banner left-sidebar-widget mb_50 mt_30\"> <a href=\"#\"><img src=\"images/left1.jpg\" alt=\"Left Banner\" class=\"img-responsive\" /></a> </div>
                <div class=\"left-special left-sidebar-widget mb_50\">
                    <div class=\"heading-part mb_20 \">
                        <h2 class=\"main_title\">Top Products</h2>
                    </div>
                    <div id=\"left-special\" class=\"owl-carousel\">
                        <ul class=\"row \">
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product1.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product1-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product2.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product2-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product3.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product3-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class=\"row \">
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product4.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product4-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product5.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product5-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product6.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product6-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class=\"row \">
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product7.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product7-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product8.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product8-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product9.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product9-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class=\"row \">
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product10.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product10-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product1.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product1-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"item product-layout-left mb_20\">
                                <div class=\"product-list col-xs-4\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product2.jpg\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"images/product/product2-1.jpg\"> </a> </div>
                                    </div>
                                </div>
                                <div class=\"col-xs-8\">
                                    <div class=\"caption product-detail\">
                                        <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8 col-lg-9 mtb_20\">
                <form enctype=\"multipart/form-data\" method=\"post\" action=\"#\">

                    {% if produits|length == 0 %}
                        <tr>
                            <td class=\"text-center\"><center>Aucun Produit dans votre panier</center></td>
                        </tr>
                    {% endif %}

                    {% if produits|length != 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">


                            <thead>
                            <tr>
                                <td class=\"text-center\"></td>
                                <td class=\"text-center\">Image</td>
                                <td class=\"text-left\">Product Name</td>
                                <td class=\"text-left\">Color</td>
                                <td class=\"text-left\">Size</td>
                                <td class=\"text-right\">Unit Price</td>



                            </tr>
                            </thead>
                            <tbody>


                            {% set total = 0 %}
                            {% for p in produits %}
                            {% for i in 0..panier[p.id]|length-1 %}

                                <tr class=\"cart_item\">

                                    <td class=\"btn btn-danger\"  data-toggle=\"tooltip\"><a title=\"Remove this item\" class=\"remove\" href=\"{{ path('P_supprimmer',{id : p.id , ps : i}) }}\"><i class=\"fa fa-times-circle\" ></a></td>

                                    <td class=\"text-center\"><img src=\"{{ asset ('images/product/{{ p.photoP}}')}}\" alt=\"iPod Classic\" title=\"iPod Classic\"></td>
                                    <td class=\"text-left\"> <a>
                                            {{ p.libelleAn|upper }}
                                        </a></td>

                                    <td class=\"text-left\"> <a>
                                            {{ p.couleur|upper }}
                                        </a></td>

                                    <td class=\"text-left\">
                                        <span class=\"amount\">{{ panier[p.id][i] }}</span>
                                    </td>



                                    <td class=\"text-left\">
                                        <span class=\"amount\">\${{ p.prix }}</span>
                                    </td>




                                    {% set total = total + (p.prix ) %}

                                </tr>
                            {% endfor %}

                                <tr class =\"cart_item\">
                                    <td colspan=\"4\">
                                    </td>
                                    <td>Quantité :</td>
                                    <td>{{ panier[p.id]|length }}</td>
                                </tr>
                            {% endfor %}
                            <tr class =\"cart_item\">
                                <td colspan=\"4\">
                                </td>
                                <td>Total :</td>
                                <td>\${{ total }}</td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </form>
                <h3 class=\"mtb_10\">What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                <div class=\"panel-group mt_20\" id=\"accordion\">
                    <div class=\"panel panel-default pull-left\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">Use Coupon Code <i class=\"fa fa-caret-down\"></i></a></h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                <label for=\"input-coupon\" class=\"col-sm-4 control-label\">Enter your coupon here</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"input-coupon\" placeholder=\"Enter your coupon here\" value=\"\" name=\"coupon\">
                                    <span class=\"input-group-btn\">
                  <input type=\"button\" class=\"btn\" data-loading-text=\"Loading...\" id=\"button-coupon\" value=\"Apply Coupon\">
                  </span> </div>
                            </div>
                        </div>


                    <div class=\"panel panel-default \">
                        <form action=\"{{ path('P_pass',{'total': total}) }}\" >

                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">Shipping Details <i class=\"fa fa-caret-down\"></i></a> </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <form class=\"form-horizontal\">
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" checked=\"checked\" value=\"existing\" name=\"payment_address\" data-id=\"payment-existing\"> I want to use an existing address</label>
                                    </div>
                                    <div id=\"payment-existing\">
                                        <select class=\"form-control\" name=\"address_id\">
                                            <option selected=\"selected\" value=\"\">Select a previous address</option>
                                            {% for a in adresses %}
                                            <option value=\"{{ a.address }}\">{{ a.address }}</option>
                                            {% endfor %}
                                        </select>

                                    </div>
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" value=\"new\" name=\"payment_address\" data-id=\"payment-new\"> I want to use a new address</label>
                                    </div>
                                    <br>
                                    <div id=\"payment-new\" style=\"display: none;\">
                                        <div class=\"form-group required\">
                                            <label for=\"input-payment-country\" class=\"col-sm-2 control-label\">Country</label>
                                            <div class=\"col-sm-10\">
                                                <select class=\"form-control\" id=\"input-payment-country\" name=\"country_id\">
                                                    <option value=\"\" selected=\"selected\"> --- Please Select --- </option>
                                                    <option value=\"Aaland Islands\">Aaland Islands</option>
                                                    <option value=\"Afghanistan\">Afghanistan</option>
                                                    <option value=\"Albania\">Albania</option>
                                                    <option value=\"Algeria\">Algeria</option>
                                                    <option value=\"American Samoa\">American Samoa</option>
                                                    <option value=\"Andorra\">Andorra</option>
                                                    <option value=\"Angola\">Angola</option>
                                                    <option value=\"Anguilla\">Anguilla</option>
                                                    <option value=\"Antarctica\">Antarctica</option>
                                                    <option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>
                                                    <option value=\"Argentina\">Argentina</option>
                                                    <option value=\"Armenia\">Armenia</option>
                                                    <option value=\"Aruba\">Aruba</option>
                                                    <option value=\"Ascension Island (British)\">Ascension Island (British)</option>
                                                    <option value=\"Australia\">Australia</option>
                                                    <option value=\"Austria\">Austria</option>
                                                    <option value=\"Azerbaijan\">Azerbaijan</option>
                                                    <option value=\"Bahamas\">Bahamas</option>
                                                    <option value=\"Bahrain\">Bahrain</option>
                                                    <option value=\"Bangladesh\">Bangladesh</option>
                                                    <option value=\"Barbados\">Barbados</option>
                                                    <option value=\"Belarus\">Belarus</option>
                                                    <option value=\"Belgium\">Belgium</option>
                                                    <option value=\"26\">Bolivia</option>
                                                    <option value=\"Bulgaria\">Bulgaria</option>
                                                    <option value=\"34\">Burkina Faso</option>
                                                    <option value=\"38\">Canada</option>
                                                    <option value=\"47\">Colombia</option>
                                                    <option value=\"56\">Czech Republic</option>
                                                    <option value=\"57\">Denmark</option>
                                                    <option value=\"63\">Egypt</option>
                                                    <option value=\"72\">Finland</option>
                                                    <option value=\"74\">France, Metropolitan</option>
                                                    <option value=\"81\">Germany</option>
                                                    <option value=\"84\">Greece</option>
                                                    <option value=\"96\">Hong Kong</option>
                                                    <option value=\"97\">Hungary</option>
                                                    <option value=\"98\">Iceland</option>
                                                    <option value=\"99\">India</option>
                                                    <option value=\"Italy\">Italy</option>
                                                    <option value=\"107\">Japan</option>
                                                    <option value=\"108\">Jordan</option>
                                                    <option value=\"114\">Kuwait</option>
                                                    <option value=\"117\">Latvia</option>
                                                    <option value=\"118\">Lebanon</option>
                                                    <option value=\"121\">Libyan Arab Jamahiriya</option>
                                                    <option value=\"124\">Luxembourg</option>
                                                    <option value=\"144\">Morocco</option>
                                                    <option value=\"149\">Nepal</option>
                                                    <option value=\"150\">Netherlands</option>
                                                    <option value=\"151\">Netherlands Antilles</option>
                                                    <option value=\"152\">New Caledonia</option>
                                                    <option value=\"153\">New Zealand</option>
                                                    <option value=\"154\">Nicaragua</option>
                                                    <option value=\"155\">Niger</option>
                                                    <option value=\"156\">Nigeria</option>
                                                    <option value=\"157\">Niue</option>
                                                    <option value=\"158\">Norfolk Island</option>
                                                    <option value=\"112\">North Korea</option>
                                                    <option value=\"159\">Northern Mariana Islands</option>
                                                    <option value=\"160\">Norway</option>
                                                    <option value=\"161\">Oman</option>
                                                    <option value=\"162\">Pakistan</option>
                                                    <option value=\"163\">Palau</option>
                                                    <option value=\"247\">Palestinian Territory, Occupied</option>
                                                    <option value=\"164\">Panama</option>
                                                    <option value=\"165\">Papua New Guinea</option>
                                                    <option value=\"166\">Paraguay</option>
                                                    <option value=\"167\">Peru</option>
                                                    <option value=\"168\">Philippines</option>
                                                    <option value=\"169\">Pitcairn</option>
                                                    <option value=\"170\">Poland</option>
                                                    <option value=\"171\">Portugal</option>
                                                    <option value=\"172\">Puerto Rico</option>
                                                    <option value=\"173\">Qatar</option>
                                                    <option value=\"174\">Reunion</option>
                                                    <option value=\"175\">Romania</option>
                                                    <option value=\"Russian Federation\">Russian Federation</option>
                                                    <option value=\"177\">Rwanda</option>
                                                    <option value=\"178\">Saint Kitts and Nevis</option>
                                                    <option value=\"179\">Saint Lucia</option>
                                                    <option value=\"180\">Saint Vincent and the Grenadines</option>
                                                    <option value=\"181\">Samoa</option>
                                                    <option value=\"182\">San Marino</option>
                                                    <option value=\"183\">Sao Tome and Principe</option>
                                                    <option value=\"184\">Saudi Arabia</option>
                                                    <option value=\"185\">Senegal</option>
                                                    <option value=\"243\">Serbia</option>
                                                    <option value=\"186\">Seychelles</option>
                                                    <option value=\"187\">Sierra Leone</option>
                                                    <option value=\"188\">Singapore</option>
                                                    <option value=\"189\">Slovak Republic</option>
                                                    <option value=\"190\">Slovenia</option>
                                                    <option value=\"191\">Solomon Islands</option>
                                                    <option value=\"192\">Somalia</option>
                                                    <option value=\"193\">South Africa</option>
                                                    <option value=\"194\">South Georgia &amp; South Sandwich Islands</option>
                                                    <option value=\"248\">South Sudan</option>
                                                    <option value=\"195\">Spain</option>
                                                    <option value=\"196\">Sri Lanka</option>
                                                    <option value=\"249\">St. Barthelemy</option>
                                                    <option value=\"197\">St. Helena</option>
                                                    <option value=\"250\">St. Martin (French part)</option>
                                                    <option value=\"198\">St. Pierre and Miquelon</option>
                                                    <option value=\"199\">Sudan</option>
                                                    <option value=\"200\">Suriname</option>
                                                    <option value=\"201\">Svalbard and Jan Mayen Islands</option>
                                                    <option value=\"202\">Swaziland</option>
                                                    <option value=\"203\">Sweden</option>
                                                    <option value=\"204\">Switzerland</option>
                                                    <option value=\"205\">Syrian Arab Republic</option>
                                                    <option value=\"206\">Taiwan</option>
                                                    <option value=\"207\">Tajikistan</option>
                                                    <option value=\"208\">Tanzania, United Republic of</option>
                                                    <option value=\"209\">Thailand</option>
                                                    <option value=\"210\">Togo</option>
                                                    <option value=\"211\">Tokelau</option>
                                                    <option value=\"212\">Tonga</option>
                                                    <option value=\"213\">Trinidad and Tobago</option>
                                                    <option value=\"255\">Tristan da Cunha</option>
                                                    <option value=\"Tunisia\">Tunisia</option>
                                                    <option value=\"215\">Turkey</option>
                                                    <option value=\"216\">Turkmenistan</option>
                                                    <option value=\"217\">Turks and Caicos Islands</option>
                                                    <option value=\"218\">Tuvalu</option>
                                                    <option value=\"219\">Uganda</option>
                                                    <option value=\"220\">Ukraine</option>
                                                    <option value=\"221\">United Arab Emirates</option>
                                                    <option value=\"222\">United Kingdom</option>
                                                    <option value=\"223\">United States</option>
                                                    <option value=\"224\">United States Minor Outlying Islands</option>
                                                    <option value=\"225\">Uruguay</option>
                                                    <option value=\"226\">Uzbekistan</option>
                                                    <option value=\"227\">Vanuatu</option>
                                                    <option value=\"228\">Vatican City State (Holy See)</option>
                                                    <option value=\"229\">Venezuela</option>
                                                    <option value=\"230\">Viet Nam</option>
                                                    <option value=\"231\">Virgin Islands (British)</option>
                                                    <option value=\"232\">Virgin Islands (U.S.)</option>
                                                    <option value=\"233\">Wallis and Futuna Islands</option>
                                                    <option value=\"234\">Western Sahara</option>
                                                    <option value=\"235\">Yemen</option>
                                                    <option value=\"238\">Zambia</option>
                                                    <option value=\"239\">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class=\"form-group required\">
                                        <label for=\"input-payment-address-1\" class=\"col-sm-2 control-label\">Address 1</label>
                                        <div class=\"col-sm-10\">
                                        <input type=\"text\" class=\"form-control\" id=\"input-payment-address-1\" placeholder=\"Address 1\"  name=\"address_1\">
                                        </div>


                                    <div class=\"form-group\">
                                        <label for=\"input-payment-address-2\" class=\"col-sm-2 control-label\">Address 2</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" class=\"form-control\" id=\"input-payment-address-2\" placeholder=\"Address 2\" value=\"\" name=\"address_2\">
                                        </div>
                                    </div>

                                    <div class=\"form-group required\">
                                        <label for=\"input-payment-city\" class=\"col-sm-2 control-label\">City</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" class=\"form-control\" id=\"input-payment-city\" placeholder=\"City\" value=\"\" name=\"city\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"input-payment-postcode\" class=\"col-sm-2 control-label\">Post Code</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" class=\"form-control\" id=\"input-payment-postcode\" placeholder=\"Post Code\" value=\"\" name=\"postcode\">
                                        </div>

                                    </div>
                                    </div>
                                    </div>
                                        <input class=\"btn pull-right mt_30\" type=\"submit\" value=\"Checkout\"/>


                                        <form action=\"index.html\">
                                            <input class=\"btn pull-left mt_30\" type=\"submit\" value=\"Continue Shopping\" />
                                        </form>



                                </form>
                            </div>
                        </div>


                        </form>



                        </div>

                    </div>

                    {% endif %}







                    </form>
            </div></form>
        </div>
        <div id=\"brand_carouse\" class=\"ptb_30 text-center\">
            <div class=\"type-01\">
                <div class=\"heading-part mb_20 \">
                    <h2 class=\"main_title\">Brand Logo</h2>

            </div>
        </div>
    </div>


    <!-- =====  CONTAINER END  ===== -->

</div>
<a id=\"scrollup\"></a>
    <script src=\"{{ asset ('js/jQuery_v3.1.1.min.js')}}\"></script>

    <script src=\"{{ asset ('js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset ('js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset ('js/jquery.magnific-popup.js')}}\"></script>
    <script src=\"{{ asset ('js/custom.js')}}\"></script>
    <script type=\"text/javascript\">
        \$('input[name=\\'payment_address\\']').on('change', function() {
            if (this.value == 'new') {
                \$('#payment-existing').hide();
                \$('#payment-new').show();
            } else {
                \$('#payment-existing').show();
                \$('#payment-new').hide();
            }
        });
        \$('input[name=\\'shipping_address\\']').on('change', function() {
            if (this.value == 'new') {
                \$('#shipping-existing').hide();
                \$('#shipping-new').show();
            } else {
                \$('#shipping-existing').show();
                \$('#shipping-new').hide();
            }
        });
    </script>
</body>

</html>
{% endblock %}", "@Front/pages/cart.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\FrontBundle\\Resources\\views\\pages\\cart.html.twig");
    }
}
