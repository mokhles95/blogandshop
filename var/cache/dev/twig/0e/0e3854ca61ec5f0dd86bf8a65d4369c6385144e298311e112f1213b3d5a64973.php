<?php

/* FrontBundle:pages:detailProduit.html.twig */
class __TwigTemplate_fb4db11fab55cffe1c2f90177aa0bc35dc8769af38bb4183db721427d6e42860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:pages:detailProduit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:pages:detailProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:pages:detailProduit.html.twig"));

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
        echo "    <!-- =====  CONTAINER START  ===== -->
    <div class=\"container\">
        <div class=\"row \">
            <!-- =====  BANNER STRAT  ===== -->
            <div class=\"col-sm-12\">
                <div class=\"breadcrumb ptb_20\">
                    <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelleFr", []), "html", null, true);
        echo "</h1>
                    <ul>

                        <li class=\"active\">Product detail</li>
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


                        </ul>
                    </div>
                </div>
                <div class=\"left_banner left-sidebar-widget mt_30 mb_40\"> <a href=\"#\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/left1.jpg"), "html", null, true);
        echo "\" alt=\"Left Banner\" class=\"img-responsive\" /></a> </div>
                <div class=\"left-special left-sidebar-widget mb_50\">
                    <div class=\"heading-part mb_10 \">
                        <h2 class=\"main_title\">Top Products</h2>
                    </div>
                    <div id=\"left-special\" class=\"owl-carousel\">

                        <!-- =====  top products ===== -->
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["BestProducts"]) ? $context["BestProducts"] : $this->getContext($context, "BestProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["bp"]) {
            // line 39
            echo "
                            <ul class=\"row \">
                                <li class=\"item product-layout-left mb_20\">
                                    <div class=\"product-list col-xs-4\">
                                        <div class=\"product-thumb\">
                                            <div class=\"image product-imageblock\"> <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detai_produit", ["id" => $this->getAttribute($context["bp"], "id", [])]), "html", null, true);
            echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["bp"], "photoP", []))), "html", null, true);
            echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["bp"], "photoP", []))), "html", null, true);
            echo "\"> </a> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-8\">
                                        <div class=\"caption product-detail\">
                                            <h6 class=\"product-name\"><a href=\"#\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["bp"], "libelleFr", []), "html", null, true);
            echo "</a></h6>
                                            <div class=\"rating\">
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                            </div>
                                            <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["bp"], "prix", []), "html", null, true);
            echo "</span>
                      </span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-sm-8 col-lg-9 mtb_20\">
                <div class=\"row mt_10 \">
                    <div class=\"col-md-6\">
                        <div><a class=\"thumbnails\"> <img data-name=\"product_image\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photoP", []))), "html", null, true);
        echo "\" alt=\"\" /></a></div>
                        <div id=\"product-thumbnail\" class=\"owl-carousel\">
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photoP"]) ? $context["photoP"] : $this->getContext($context, "photoP")));
        foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
            // line 74
            echo "                                <div class=\"item\">

                                    <div class=\"image-additional\"><a class=\"thumbnail\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
            echo "\" data-fancybox=\"group1\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["ph"], "imageName", []))), "html", null, true);
            echo "\" alt=\"\" /></a></div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ph'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "

                        </div>
                    </div>
                    <div class=\"col-md-6 prodetail caption product-thumb\">
                        <h4 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelleFr", []), "html", null, true);
        echo "</a></h4>
                        <div class=\"rating\">
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                        </div>
                        <span class=\"price mb_20\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", []), "html", null, true);
        echo "</span>
              </span>
                        <hr>

                        <form action=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("P_ajouter", ["id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", [])]), "html", null, true);
        echo "\">
                        <ul class=\"list-unstyled product_info mtb_20\">



                            <li>
                                <label>Product Code:</label>
                                <span> ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", []), "html", null, true);
        echo "</span></li>
                            <li>
                                <label>Availability:</label>
                                <span> ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "etat", []), "html", null, true);
        echo "</span></li>
                        </ul>
                        <hr>
                        <p class=\"product-desc mtb_30\"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping..</p>
                        <div id=\"product\">
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"Sort-by col-md-6\">
                                        <label>Sort by</label>
                                        <select name=\"product_size\" id=\"select-by-size\" class=\"selectpicker form-control\">
                                            <option selected=\"selected\">Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>
                                    <div class=\"Color col-md-6\">
                                        <label>Color</label>
                                        <select name=\"product_color\" id=\"select-by-color\" class=\"selectpicker form-control\">
                                            <option>Blue</option>
                                            <option>Green</option>
                                            <option>Orange</option>
                                            <option>White</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"qty mt_30 form-group2\">
                                <label>Qty</label>
                                <input name=\"qte\" min=\"1\" value=\"1\" type=\"number\">
                            </div>
                            <div class=\"button-group mt_30\">
                                <div class=\"add-to-cart\"><input type=\"submit\" ></div>
                                <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div id=\"exTab5\" class=\"mtb_30\">
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\"> <a href=\"#1c\" data-toggle=\"tab\">Overview</a> </li>
                                <li><a href=\"#2c\" data-toggle=\"tab\">Reviews (1)</a> </li>
                                <li><a href=\"#3c\" data-toggle=\"tab\">Solution</a> </li>
                            </ul>
                            <div class=\"tab-content \">
                                <div class=\"tab-pane active\" id=\"1c\">
                                    <p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p>
                                </div>
                                <div class=\"tab-pane\" id=\"2c\">
                                    <form class=\"form-horizontal\">
                                        <div id=\"review\"></div>
                                        <h4 class=\"mt_20 mb_30\">Write a review</h4>
                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\" for=\"input-name\">Your Name</label>
                                                <input name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\" for=\"input-review\">Your Review</label>
                                                <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                                                <div class=\"help-block\"><span class=\"text-danger\">Note:</span> HTML is not translated!</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <div class=\"col-md-6\">
                                                <label class=\"control-label\">Rating</label>
                                                <div class=\"rates\"><span>Bad</span>
                                                    <input name=\"rating\" value=\"1\" type=\"radio\">
                                                    <input name=\"rating\" value=\"2\" type=\"radio\">
                                                    <input name=\"rating\" value=\"3\" type=\"radio\">
                                                    <input name=\"rating\" value=\"4\" type=\"radio\">
                                                    <input name=\"rating\" value=\"5\" type=\"radio\">
                                                    <span>Good</span></div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"buttons pull-right\">
                                                    <button type=\"submit\" class=\"btn btn-md btn-link\">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"tab-pane\" id=\"3c\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.applied clearfix to the tab-content to rid of the gap between the tab and the content</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading-part text-center mb_10\">
                            <h2 class=\"main_title mt_50\">Related Products</h2>
                        </div>
                        <div class=\"related_pro box\">
                            <div class=\"product-layout  product-grid related-pro  owl-carousel mb_50 \">



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"brand_carouse\" class=\"ptb_30 text-center\">
            <div class=\"type-01\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Brand Logo</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"brand owl-carousel ptb_20\">

                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Disney\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Harley\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:pages:detailProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 232,  359 => 231,  355 => 230,  351 => 229,  347 => 228,  343 => 227,  339 => 226,  335 => 225,  213 => 106,  207 => 103,  197 => 96,  190 => 92,  179 => 84,  172 => 79,  161 => 76,  157 => 74,  153 => 73,  148 => 71,  140 => 65,  126 => 57,  115 => 49,  103 => 44,  96 => 39,  92 => 38,  81 => 30,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
                    <h1>{{ produit.libelleFr }}</h1>
                    <ul>

                        <li class=\"active\">Product detail</li>
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


                        </ul>
                    </div>
                </div>
                <div class=\"left_banner left-sidebar-widget mt_30 mb_40\"> <a href=\"#\"><img src=\"{{ asset('images/left1.jpg') }}\" alt=\"Left Banner\" class=\"img-responsive\" /></a> </div>
                <div class=\"left-special left-sidebar-widget mb_50\">
                    <div class=\"heading-part mb_10 \">
                        <h2 class=\"main_title\">Top Products</h2>
                    </div>
                    <div id=\"left-special\" class=\"owl-carousel\">

                        <!-- =====  top products ===== -->
                        {% for bp in BestProducts %}

                            <ul class=\"row \">
                                <li class=\"item product-layout-left mb_20\">
                                    <div class=\"product-list col-xs-4\">
                                        <div class=\"product-thumb\">
                                            <div class=\"image product-imageblock\"> <a href=\"{{ path('detai_produit',{'id': bp.id}) }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{ asset('uploads/' ~ bp.photoP) }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{ asset('uploads/' ~ bp.photoP) }}\"> </a> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-8\">
                                        <div class=\"caption product-detail\">
                                            <h6 class=\"product-name\"><a href=\"#\">{{ bp.libelleFr }}</a></h6>
                                            <div class=\"rating\">
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                            </div>
                                            <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>{{ bp.prix }}</span>
                      </span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8 col-lg-9 mtb_20\">
                <div class=\"row mt_10 \">
                    <div class=\"col-md-6\">
                        <div><a class=\"thumbnails\"> <img data-name=\"product_image\" src=\"{{ asset('uploads/'~produit.photoP) }}\" alt=\"\" /></a></div>
                        <div id=\"product-thumbnail\" class=\"owl-carousel\">
                            {% for ph in photoP %}
                                <div class=\"item\">

                                    <div class=\"image-additional\"><a class=\"thumbnail\" href=\"{{asset ('images/product/product1.jpg') }}\" data-fancybox=\"group1\"> <img src=\"{{ asset('uploads/'~ph.imageName)}}\" alt=\"\" /></a></div>
                                </div>
                            {% endfor %}


                        </div>
                    </div>
                    <div class=\"col-md-6 prodetail caption product-thumb\">
                        <h4 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">{{ produit.libelleFr }}</a></h4>
                        <div class=\"rating\">
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                        </div>
                        <span class=\"price mb_20\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>{{ produit.prix }}</span>
              </span>
                        <hr>

                        <form action=\"{{ path('P_ajouter',{id : produit.id }) }}\">
                        <ul class=\"list-unstyled product_info mtb_20\">



                            <li>
                                <label>Product Code:</label>
                                <span> {{ produit.id }}</span></li>
                            <li>
                                <label>Availability:</label>
                                <span> {{ produit.etat }}</span></li>
                        </ul>
                        <hr>
                        <p class=\"product-desc mtb_30\"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping..</p>
                        <div id=\"product\">
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"Sort-by col-md-6\">
                                        <label>Sort by</label>
                                        <select name=\"product_size\" id=\"select-by-size\" class=\"selectpicker form-control\">
                                            <option selected=\"selected\">Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>
                                    <div class=\"Color col-md-6\">
                                        <label>Color</label>
                                        <select name=\"product_color\" id=\"select-by-color\" class=\"selectpicker form-control\">
                                            <option>Blue</option>
                                            <option>Green</option>
                                            <option>Orange</option>
                                            <option>White</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"qty mt_30 form-group2\">
                                <label>Qty</label>
                                <input name=\"qte\" min=\"1\" value=\"1\" type=\"number\">
                            </div>
                            <div class=\"button-group mt_30\">
                                <div class=\"add-to-cart\"><input type=\"submit\" ></div>
                                <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div id=\"exTab5\" class=\"mtb_30\">
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\"> <a href=\"#1c\" data-toggle=\"tab\">Overview</a> </li>
                                <li><a href=\"#2c\" data-toggle=\"tab\">Reviews (1)</a> </li>
                                <li><a href=\"#3c\" data-toggle=\"tab\">Solution</a> </li>
                            </ul>
                            <div class=\"tab-content \">
                                <div class=\"tab-pane active\" id=\"1c\">
                                    <p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p>
                                </div>
                                <div class=\"tab-pane\" id=\"2c\">
                                    <form class=\"form-horizontal\">
                                        <div id=\"review\"></div>
                                        <h4 class=\"mt_20 mb_30\">Write a review</h4>
                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\" for=\"input-name\">Your Name</label>
                                                <input name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\" for=\"input-review\">Your Review</label>
                                                <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                                                <div class=\"help-block\"><span class=\"text-danger\">Note:</span> HTML is not translated!</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <div class=\"col-md-6\">
                                                <label class=\"control-label\">Rating</label>
                                                <div class=\"rates\"><span>Bad</span>
                                                    <input name=\"rating\" value=\"1\" type=\"radio\">
                                                    <input name=\"rating\" value=\"2\" type=\"radio\">
                                                    <input name=\"rating\" value=\"3\" type=\"radio\">
                                                    <input name=\"rating\" value=\"4\" type=\"radio\">
                                                    <input name=\"rating\" value=\"5\" type=\"radio\">
                                                    <span>Good</span></div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"buttons pull-right\">
                                                    <button type=\"submit\" class=\"btn btn-md btn-link\">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"tab-pane\" id=\"3c\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.applied clearfix to the tab-content to rid of the gap between the tab and the content</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"heading-part text-center mb_10\">
                            <h2 class=\"main_title mt_50\">Related Products</h2>
                        </div>
                        <div class=\"related_pro box\">
                            <div class=\"product-layout  product-grid related-pro  owl-carousel mb_50 \">



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"brand_carouse\" class=\"ptb_30 text-center\">
            <div class=\"type-01\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Brand Logo</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"brand owl-carousel ptb_20\">

                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Disney\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Harley\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                            <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
{% endblock %}
", "FrontBundle:pages:detailProduit.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\FrontBundle/Resources/views/pages/detailProduit.html.twig");
    }
}
