<?php

/* @Front/pages/index.html.twig */
class __TwigTemplate_e7d4027b8c8a1a9d891d5d4aeb8bf055b106ccf78d1499b5e661a6fb9b9705e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@Front/pages/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/pages/index.html.twig"));

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
        echo "<!-- =====  BANNER STRAT  ===== -->
<div class=\"container banner mt_20\">
    <div class=\"main-banner owl-carousel\">
        <div class=\"item\"><a href=\"#\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/main_banner1.jpg"), "html", null, true);
        echo "\" alt=\"Main Banner\" class=\"img-responsive\" /></a></div>
        <div class=\"item\"><a href=\"#\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/main_banner2.jpg"), "html", null, true);
        echo "\" alt=\"Main Banner\" class=\"img-responsive\" /></a></div>
    </div>
</div>
<!-- =====  BANNER END  ===== -->
<!-- =====  CONTAINER START  ===== -->
<div class=\"container\">
    <!-- =====  SUB BANNER  STRAT ===== -->
    <div class=\"row\">
        <div class=\"cms_banner mt_10\">
            <div class=\"col-xs-4 mt_10\">
                <div id=\"subbanner1\" class=\"sub-hover\">
                    <div class=\"sub-img\"><a href=\"#\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sub1.jpg"), "html", null, true);
        echo "\" alt=\"Sub Banner1\" class=\"img-responsive\"></a></div>
                    <div class=\"bannertext text-center\">
                        <button class=\"btn mb_10 cms_btn\">View product</button>
                        <h2>Hats & collapse</h2>
                        <p class=\"mt_10\">Wide veriety of sizes,colors</p>
                    </div>
                </div>
                <div id=\"subbanner2\" class=\"sub-hover mt_20\">
                    <div class=\"sub-img\"><a href=\"#\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sub2.jpg"), "html", null, true);
        echo "\" alt=\"Sub Banner2\" class=\"img-responsive\"></a></div>
                    <div class=\"bannertext text-center\">
                        <button class=\"btn mb_10 cms_btn\">View product</button>
                        <h2>Buy Scarfs</h2>
                        <p class=\"mt_10\">Shop collection of designer</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-4 mt_10\">
                <div id=\"subbanner3\" class=\"sub-hover\">
                    <div class=\"sub-img\"> <a href=\"#\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sub3.jpg"), "html", null, true);
        echo "\" alt=\"Sub Banner3\" class=\"img-responsive\"></a></div>
                </div>
            </div>
            <div class=\"col-xs-4 mt_10\">
                <div id=\"subbanner4\" class=\"sub-hover\">
                    <div class=\"sub-img\"><a href=\"#\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sub4.jpg"), "html", null, true);
        echo "\" alt=\"Sub Banner4\" class=\"img-responsive\"></a></div>
                    <div class=\"bannertext text-center\">
                        <button class=\"btn mb_10 cms_btn\">View product</button>
                        <h2>Handbags</h2>
                        <p class=\"mt_10\">Bags for men & women only</p>
                    </div>
                </div>
                <div id=\"subbanner5\" class=\"sub-hover mt_20\">
                    <div class=\"sub-img\"><a href=\"#\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sub5.jpg"), "html", null, true);
        echo "\" alt=\"Sub Banner5\" class=\"img-responsive\"></a></div>
                    <div class=\"bannertext text-center\">
                        <button class=\"btn mb_10 cms_btn\">View product</button>
                        <h2>Footware</h2>
                        <p class=\"mt_10\">Over 400 luxury designers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====  SUB BANNER END  ===== -->
    <div class=\"row \">
        <div class=\"col-sm-12 mtb_10\">
            <!-- =====  PRODUCT TAB  ===== -->
            <div id=\"product-tab\" class=\"mt_50\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Fashion Items</h2>
                </div>
                <ul class=\"nav text-right\">
                    <li class=\"active\"> <a href=\"#nArrivals\" data-toggle=\"tab\">New Arrivals</a> </li>
                    <li><a href=\"#Bestsellers\" data-toggle=\"tab\">Bestsellers</a> </li>

                </ul>
                <div class=\"tab-content clearfix box\">
                    <div class=\"tab-pane active\" id=\"nArrivals\">
                        <div class=\"nArrivals owl-carousel\">
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newProduits"]) ? $context["newProduits"] : $this->getContext($context, "newProduits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 76
            echo "                                <div class=\"product-grid\">
                                    <div class=\"item\">
                                        <div class=\"product-thumb\">
                                            <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["p"], "photoP", []))), "html", null, true);
            echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["p"], "photoP", []))), "html", null, true);
            echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                                <div class=\"button-group text-center\">
                                                    <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                    <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                    <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                    <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class=\"caption product-detail text-center\">
                                                <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                                <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleFr", []), "html", null, true);
            echo "</a></h6>
                                                <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", []), "html", null, true);
            echo "</span>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "

                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"Bestsellers\">
                        <div class=\"Bestsellers owl-carousel\">
                            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["BestProducts"]) ? $context["BestProducts"] : $this->getContext($context, "BestProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 104
            echo "                                <div class=\"product-grid\">
                                    <div class=\"item\">
                                        <div class=\"product-thumb\">
                                            <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["p"], "photoP", []))), "html", null, true);
            echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["p"], "photoP", []))), "html", null, true);
            echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                                <div class=\"button-group text-center\">
                                                    <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                    <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                    <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                    <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class=\"caption product-detail text-center\">
                                                <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                                <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleFr", []), "html", null, true);
            echo "</a></h6>
                                                <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", []), "html", null, true);
            echo "</span>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
                        </div>
                    </div>

                </div>
            </div>
            <!-- =====  PRODUCT TAB  END ===== -->
            <!-- =====  SUB BANNER  STRAT ===== -->
            <div class=\"row\">
                <div class=\"cms_banner mt_50\">
                    <div class=\"col-sm-12 mt_10\">
                        <div id=\"subbanner3\" class=\"sub-hover\">
                            <div class=\"sub-img\"> <a href=\"#\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sub6.jpg"), "html", null, true);
        echo "\" alt=\"Sub Banner3\" class=\"img-responsive\"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =====  SUB BANNER END  ===== -->
            <!-- =====  PRODUCT TAB  ===== -->
            <div id=\"product-tab\" class=\"mt_50\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Fashion Items</h2>
                </div>
                <ul class=\"nav text-right\">
                    <li class=\"active\"> <a href=\"#nArrivals\" data-toggle=\"tab\">New Arrivals</a> </li>
                    <li><a href=\"#Bestsellers\" data-toggle=\"tab\">Bestsellers</a> </li>
                    <li><a href=\"#Featured\" data-toggle=\"tab\">Featured</a> </li>
                </ul>
                <div class=\"tab-content clearfix box\">
                    <div class=\"tab-pane active\" id=\"nArrivals\">
                        <div class=\"nArrivals owl-carousel\">
                            <div class=\"product-grid\">
                                <div class=\"item\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product9.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product9-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                            <div class=\"button-group text-center\">
                                                <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class=\"caption product-detail text-center\">
                                            <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                            <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Vide..</a></h6>
                                            <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"Bestsellers\">
                        <div class=\"Bestsellers owl-carousel\">
                            <div class=\"product-grid\">
                                <div class=\"item\">
                                    <div class=\"product-thumb  mb_30\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product9.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product1-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                            <div class=\"button-group text-center\">
                                                <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class=\"caption product-detail text-center\">
                                            <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                            <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Vide..</a></h6>
                                            <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"Featured\">
                        <div class=\"Featured owl-carousel\">
                            <div class=\"product-grid\">
                                <div class=\"item\">
                                    <div class=\"product-thumb  mb_30\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product9.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product2-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                            <div class=\"button-group text-center\">
                                                <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class=\"caption product-detail text-center\">
                                            <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                            <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Vide..</a></h6>
                                            <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- =====  PRODUCT TAB  END ===== -->
            <!-- =====  Blog ===== -->
            <div id=\"Blog\" class=\"mt_50\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Latest News</h2>
                </div>
                <div class=\"blog-contain box\">
                    <div class=\"blog owl-carousel \">
                        <div class=\"item\">
                            <div class=\"box-holder\">
                                <div class=\"thumb post-img\"><a href=\"#\"> <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog/blog_img_01.jpg"), "html", null, true);
        echo "\" alt=\"OYEENok\"> </a>
                                    <div class=\"date-time text-center\">
                                        <div class=\"day\"> 11</div>
                                        <div class=\"month\">Aug</div>
                                    </div>
                                    <div class=\"post-image-hover\"> </div>
                                    <div class=\"post-info\">
                                        <h6 class=\"mb_10 text-uppercase\"> <a href=\"single_blog.html\">Fashions fade, style is eternal</a> </h6>
                                        <div class=\"view-blog\">
                                            <div class=\"write-comment pull-left\"> <a href=\"single_blog.html\"> 0 Comments</a> </div>
                                            <div class=\"read-more pull-right\"> <a href=\"single_blog.html\"> <i class=\"fa fa-link\"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"box-holder\">
                                <div class=\"thumb post-img\"><a href=\"#\"> <img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog/blog_img_02.jpg"), "html", null, true);
        echo "\" alt=\"OYEENok\"> </a>
                                    <div class=\"date-time text-center\">
                                        <div class=\"day\"> 11</div>
                                        <div class=\"month\">Aug</div>
                                    </div>
                                    <div class=\"post-image-hover\"> </div>
                                    <div class=\"post-info\">
                                        <h6 class=\"mb_10 text-uppercase\"> <a href=\"single_blog.html\">Fashions fade, style is eternal</a> </h6>
                                        <div class=\"view-blog\">
                                            <div class=\"write-comment pull-left\"> <a href=\"single_blog.html\"> 0 Comments</a> </div>
                                            <div class=\"read-more pull-right\"> <a href=\"single_blog.html\"> <i class=\"fa fa-link\"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"box-holder\">
                                <div class=\"thumb post-img\"><a href=\"#\"> <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog/blog_img_01.jpg"), "html", null, true);
        echo "\" alt=\"OYEENok\"> </a>
                                    <div class=\"date-time text-center\">
                                        <div class=\"day\"> 11</div>
                                        <div class=\"month\">Aug</div>
                                    </div>
                                    <div class=\"post-image-hover\"> </div>
                                    <div class=\"post-info\">
                                        <h6 class=\"mb_10 text-uppercase\"> <a href=\"single_blog.html\">Fashions fade, style is eternal</a> </h6>
                                        <div class=\"view-blog\">
                                            <div class=\"write-comment pull-left\"> <a href=\"single_blog.html\"> 0 Comments</a> </div>
                                            <div class=\"read-more pull-right\"> <a href=\"single_blog.html\"> <i class=\"fa fa-link\"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"box-holder\">
                                <div class=\"thumb post-img\"><a href=\"#\"> <img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog/blog_img_02.jpg"), "html", null, true);
        echo "\" alt=\"OYEENok\"> </a>
                                    <div class=\"date-time text-center\">
                                        <div class=\"day\"> 11</div>
                                        <div class=\"month\">Aug</div>
                                    </div>
                                    <div class=\"post-image-hover\"> </div>
                                    <div class=\"post-info\">
                                        <h6 class=\"mb_10 text-uppercase\"> <a href=\"single_blog.html\">Fashions fade, style is eternal</a> </h6>
                                        <div class=\"view-blog\">
                                            <div class=\"write-comment pull-left\"> <a href=\"single_blog.html\"> 0 Comments</a> </div>
                                            <div class=\"read-more pull-right\"> <a href=\"single_blog.html\"> <i class=\"fa fa-link\"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =====  Blog end ===== -->
            </div>
        </div>
    </div>
    <div id=\"brand_carouse\" class=\"ptb_50 text-center\">
        <div class=\"type-01\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"brand owl-carousel ptb_20\">
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Disney\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Dell\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Harley\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"newsletters mb_50\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"news-head pull-left\">
                    <h2>SIGN UP FOR NEWSLETTER</h2>
                    <div class=\"new-desc\">Be the First to know about our Fresh Arrivals and much more!</div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"news-form pull-right\">
                    <form onsubmit=\"return validatemail();\" method=\"post\">
                        <div class=\"form-group required\">
                            <input name=\"email\" id=\"email\" placeholder=\"Enter Your Email\" class=\"form-control input-lg\" required=\"\" type=\"email\">
                            <button type=\"submit\" class=\"btn btn-default btn-lg\">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 330,  485 => 329,  481 => 328,  477 => 327,  473 => 326,  469 => 325,  465 => 324,  461 => 323,  457 => 322,  427 => 295,  406 => 277,  385 => 259,  364 => 241,  329 => 209,  301 => 184,  273 => 159,  248 => 137,  234 => 125,  221 => 118,  217 => 117,  202 => 107,  197 => 104,  193 => 103,  185 => 97,  172 => 90,  168 => 89,  153 => 79,  148 => 76,  144 => 75,  115 => 49,  104 => 41,  96 => 36,  83 => 26,  72 => 18,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
<!-- =====  BANNER STRAT  ===== -->
<div class=\"container banner mt_20\">
    <div class=\"main-banner owl-carousel\">
        <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('images/main_banner1.jpg')}}\" alt=\"Main Banner\" class=\"img-responsive\" /></a></div>
        <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('images/main_banner2.jpg')}}\" alt=\"Main Banner\" class=\"img-responsive\" /></a></div>
    </div>
</div>
<!-- =====  BANNER END  ===== -->
<!-- =====  CONTAINER START  ===== -->
<div class=\"container\">
    <!-- =====  SUB BANNER  STRAT ===== -->
    <div class=\"row\">
        <div class=\"cms_banner mt_10\">
            <div class=\"col-xs-4 mt_10\">
                <div id=\"subbanner1\" class=\"sub-hover\">
                    <div class=\"sub-img\"><a href=\"#\"><img src=\"{{ asset ('images/sub1.jpg')}}\" alt=\"Sub Banner1\" class=\"img-responsive\"></a></div>
                    <div class=\"bannertext text-center\">
                        <button class=\"btn mb_10 cms_btn\">View product</button>
                        <h2>Hats & collapse</h2>
                        <p class=\"mt_10\">Wide veriety of sizes,colors</p>
                    </div>
                </div>
                <div id=\"subbanner2\" class=\"sub-hover mt_20\">
                    <div class=\"sub-img\"><a href=\"#\"><img src=\"{{ asset ('images/sub2.jpg')}}\" alt=\"Sub Banner2\" class=\"img-responsive\"></a></div>
                    <div class=\"bannertext text-center\">
                        <button class=\"btn mb_10 cms_btn\">View product</button>
                        <h2>Buy Scarfs</h2>
                        <p class=\"mt_10\">Shop collection of designer</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-4 mt_10\">
                <div id=\"subbanner3\" class=\"sub-hover\">
                    <div class=\"sub-img\"> <a href=\"#\"><img src=\"{{ asset ('images/sub3.jpg')}}\" alt=\"Sub Banner3\" class=\"img-responsive\"></a></div>
                </div>
            </div>
            <div class=\"col-xs-4 mt_10\">
                <div id=\"subbanner4\" class=\"sub-hover\">
                    <div class=\"sub-img\"><a href=\"#\"><img src=\"{{ asset ('images/sub4.jpg')}}\" alt=\"Sub Banner4\" class=\"img-responsive\"></a></div>
                    <div class=\"bannertext text-center\">
                        <button class=\"btn mb_10 cms_btn\">View product</button>
                        <h2>Handbags</h2>
                        <p class=\"mt_10\">Bags for men & women only</p>
                    </div>
                </div>
                <div id=\"subbanner5\" class=\"sub-hover mt_20\">
                    <div class=\"sub-img\"><a href=\"#\"><img src=\"{{ asset ('images/sub5.jpg')}}\" alt=\"Sub Banner5\" class=\"img-responsive\"></a></div>
                    <div class=\"bannertext text-center\">
                        <button class=\"btn mb_10 cms_btn\">View product</button>
                        <h2>Footware</h2>
                        <p class=\"mt_10\">Over 400 luxury designers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====  SUB BANNER END  ===== -->
    <div class=\"row \">
        <div class=\"col-sm-12 mtb_10\">
            <!-- =====  PRODUCT TAB  ===== -->
            <div id=\"product-tab\" class=\"mt_50\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Fashion Items</h2>
                </div>
                <ul class=\"nav text-right\">
                    <li class=\"active\"> <a href=\"#nArrivals\" data-toggle=\"tab\">New Arrivals</a> </li>
                    <li><a href=\"#Bestsellers\" data-toggle=\"tab\">Bestsellers</a> </li>

                </ul>
                <div class=\"tab-content clearfix box\">
                    <div class=\"tab-pane active\" id=\"nArrivals\">
                        <div class=\"nArrivals owl-carousel\">
                            {% for p in newProduits %}
                                <div class=\"product-grid\">
                                    <div class=\"item\">
                                        <div class=\"product-thumb\">
                                            <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"{{ asset('uploads/' ~ p.photoP) }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"{{ asset('uploads/' ~ p.photoP) }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                                <div class=\"button-group text-center\">
                                                    <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                    <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                    <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                    <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class=\"caption product-detail text-center\">
                                                <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                                <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">{{ p.libelleFr}}</a></h6>
                                                <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>{{ p.prix}}</span>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}


                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"Bestsellers\">
                        <div class=\"Bestsellers owl-carousel\">
                            {% for p in BestProducts %}
                                <div class=\"product-grid\">
                                    <div class=\"item\">
                                        <div class=\"product-thumb\">
                                            <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"{{ asset('uploads/' ~ p.photoP) }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"{{ asset('uploads/' ~ p.photoP) }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                                <div class=\"button-group text-center\">
                                                    <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                    <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                    <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                    <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                            <div class=\"caption product-detail text-center\">
                                                <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                                <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">{{ p.libelleFr}}</a></h6>
                                                <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>{{ p.prix}}</span>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}

                        </div>
                    </div>

                </div>
            </div>
            <!-- =====  PRODUCT TAB  END ===== -->
            <!-- =====  SUB BANNER  STRAT ===== -->
            <div class=\"row\">
                <div class=\"cms_banner mt_50\">
                    <div class=\"col-sm-12 mt_10\">
                        <div id=\"subbanner3\" class=\"sub-hover\">
                            <div class=\"sub-img\"> <a href=\"#\"><img src=\"{{ asset('images/sub6.jpg') }}\" alt=\"Sub Banner3\" class=\"img-responsive\"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =====  SUB BANNER END  ===== -->
            <!-- =====  PRODUCT TAB  ===== -->
            <div id=\"product-tab\" class=\"mt_50\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Fashion Items</h2>
                </div>
                <ul class=\"nav text-right\">
                    <li class=\"active\"> <a href=\"#nArrivals\" data-toggle=\"tab\">New Arrivals</a> </li>
                    <li><a href=\"#Bestsellers\" data-toggle=\"tab\">Bestsellers</a> </li>
                    <li><a href=\"#Featured\" data-toggle=\"tab\">Featured</a> </li>
                </ul>
                <div class=\"tab-content clearfix box\">
                    <div class=\"tab-pane active\" id=\"nArrivals\">
                        <div class=\"nArrivals owl-carousel\">
                            <div class=\"product-grid\">
                                <div class=\"item\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"{{ asset('images/product/product9.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product9-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                            <div class=\"button-group text-center\">
                                                <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class=\"caption product-detail text-center\">
                                            <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                            <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Vide..</a></h6>
                                            <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"Bestsellers\">
                        <div class=\"Bestsellers owl-carousel\">
                            <div class=\"product-grid\">
                                <div class=\"item\">
                                    <div class=\"product-thumb  mb_30\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"{{ asset('images/product/product9.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product1-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                            <div class=\"button-group text-center\">
                                                <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class=\"caption product-detail text-center\">
                                            <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                            <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Vide..</a></h6>
                                            <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"Featured\">
                        <div class=\"Featured owl-carousel\">
                            <div class=\"product-grid\">
                                <div class=\"item\">
                                    <div class=\"product-thumb  mb_30\">
                                        <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"{{ asset('images/product/product9.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product2-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                            <div class=\"button-group text-center\">
                                                <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                                <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                                <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                                <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class=\"caption product-detail text-center\">
                                            <div class=\"rating\"> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span> <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span> </div>
                                            <h6 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Vide..</a></h6>
                                            <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- =====  PRODUCT TAB  END ===== -->
            <!-- =====  Blog ===== -->
            <div id=\"Blog\" class=\"mt_50\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Latest News</h2>
                </div>
                <div class=\"blog-contain box\">
                    <div class=\"blog owl-carousel \">
                        <div class=\"item\">
                            <div class=\"box-holder\">
                                <div class=\"thumb post-img\"><a href=\"#\"> <img src=\"{{ asset('images/blog/blog_img_01.jpg') }}\" alt=\"OYEENok\"> </a>
                                    <div class=\"date-time text-center\">
                                        <div class=\"day\"> 11</div>
                                        <div class=\"month\">Aug</div>
                                    </div>
                                    <div class=\"post-image-hover\"> </div>
                                    <div class=\"post-info\">
                                        <h6 class=\"mb_10 text-uppercase\"> <a href=\"single_blog.html\">Fashions fade, style is eternal</a> </h6>
                                        <div class=\"view-blog\">
                                            <div class=\"write-comment pull-left\"> <a href=\"single_blog.html\"> 0 Comments</a> </div>
                                            <div class=\"read-more pull-right\"> <a href=\"single_blog.html\"> <i class=\"fa fa-link\"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"box-holder\">
                                <div class=\"thumb post-img\"><a href=\"#\"> <img src=\"{{ asset('images/blog/blog_img_02.jpg') }}\" alt=\"OYEENok\"> </a>
                                    <div class=\"date-time text-center\">
                                        <div class=\"day\"> 11</div>
                                        <div class=\"month\">Aug</div>
                                    </div>
                                    <div class=\"post-image-hover\"> </div>
                                    <div class=\"post-info\">
                                        <h6 class=\"mb_10 text-uppercase\"> <a href=\"single_blog.html\">Fashions fade, style is eternal</a> </h6>
                                        <div class=\"view-blog\">
                                            <div class=\"write-comment pull-left\"> <a href=\"single_blog.html\"> 0 Comments</a> </div>
                                            <div class=\"read-more pull-right\"> <a href=\"single_blog.html\"> <i class=\"fa fa-link\"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"box-holder\">
                                <div class=\"thumb post-img\"><a href=\"#\"> <img src=\"{{ asset('images/blog/blog_img_01.jpg') }}\" alt=\"OYEENok\"> </a>
                                    <div class=\"date-time text-center\">
                                        <div class=\"day\"> 11</div>
                                        <div class=\"month\">Aug</div>
                                    </div>
                                    <div class=\"post-image-hover\"> </div>
                                    <div class=\"post-info\">
                                        <h6 class=\"mb_10 text-uppercase\"> <a href=\"single_blog.html\">Fashions fade, style is eternal</a> </h6>
                                        <div class=\"view-blog\">
                                            <div class=\"write-comment pull-left\"> <a href=\"single_blog.html\"> 0 Comments</a> </div>
                                            <div class=\"read-more pull-right\"> <a href=\"single_blog.html\"> <i class=\"fa fa-link\"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"box-holder\">
                                <div class=\"thumb post-img\"><a href=\"#\"> <img src=\"{{ asset('images/blog/blog_img_02.jpg') }}\" alt=\"OYEENok\"> </a>
                                    <div class=\"date-time text-center\">
                                        <div class=\"day\"> 11</div>
                                        <div class=\"month\">Aug</div>
                                    </div>
                                    <div class=\"post-image-hover\"> </div>
                                    <div class=\"post-info\">
                                        <h6 class=\"mb_10 text-uppercase\"> <a href=\"single_blog.html\">Fashions fade, style is eternal</a> </h6>
                                        <div class=\"view-blog\">
                                            <div class=\"write-comment pull-left\"> <a href=\"single_blog.html\"> 0 Comments</a> </div>
                                            <div class=\"read-more pull-right\"> <a href=\"single_blog.html\"> <i class=\"fa fa-link\"></i> read more</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =====  Blog end ===== -->
            </div>
        </div>
    </div>
    <div id=\"brand_carouse\" class=\"ptb_50 text-center\">
        <div class=\"type-01\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"brand owl-carousel ptb_20\">
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset('images/brand/brand1.png') }}\" alt=\"Disney\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset('images/brand/brand1.png') }}\" alt=\"Dell\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset('images/brand/brand1.png') }}\" alt=\"Harley\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset('images/brand/brand1.png') }}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset('images/brand/brand1.png') }}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset('images/brand/brand1.png') }}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset('images/brand/brand1.png') }}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset('images/brand/brand1.png') }}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset('images/brand/brand1.png') }}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"newsletters mb_50\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"news-head pull-left\">
                    <h2>SIGN UP FOR NEWSLETTER</h2>
                    <div class=\"new-desc\">Be the First to know about our Fresh Arrivals and much more!</div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"news-form pull-right\">
                    <form onsubmit=\"return validatemail();\" method=\"post\">
                        <div class=\"form-group required\">
                            <input name=\"email\" id=\"email\" placeholder=\"Enter Your Email\" class=\"form-control input-lg\" required=\"\" type=\"email\">
                            <button type=\"submit\" class=\"btn btn-default btn-lg\">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "@Front/pages/index.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\FrontBundle\\Resources\\views\\pages\\index.html.twig");
    }
}
