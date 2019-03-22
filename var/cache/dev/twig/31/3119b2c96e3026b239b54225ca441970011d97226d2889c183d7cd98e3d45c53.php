<?php

/* Panier/panier.html.twig */
class __TwigTemplate_76e5ddc7ed23cbcafb83d57c1fa5fb49e2a17ff5f1d0114aaa4d4895b40accbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'titreForm' => [$this, 'block_titreForm'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Panier/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Panier/panier.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('titreForm', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titreForm($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titreForm"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titreForm"));

        // line 3
        echo "    Basket
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <section>
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"table-responsive\">

                            <table class=\"table table-striped table-bordered tbl-shopping-cart\">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Taille</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 24
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 25
            echo "                                    <tr>
                                        <td colspan=\"6\"><center>Aucun Produit dans votre panier</center></td>
                                    </tr>
                                ";
        }
        // line 29
        echo "                                ";
        $context["total"] = 0;
        // line 30
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 31
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["p"], "id", []), [], "array")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 32
                echo "                                    <tr class=\"cart_item\">
                                        <td class=\"product-remove\"><a title=\"Remove this item\" style=\"color: red\" class=\"remove\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("P_supprimmer", ["id" => $this->getAttribute($context["p"], "id", []), "ps" => $context["i"]]), "html", null, true);
                echo "\">×</a></td>
                                        <td class=\"product-name\">
                                            <a >
                                                ";
                // line 36
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["p"], "libelleFr", [])), "html", null, true);
                echo "
                                            </a>
                                        </td>

                                        <td class=\"product-price\"><span class=\"amount\">\$";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", []), "html", null, true);
                echo "</span></td>

                                        <td class=\"product-quantity\">


                                            <span class=\"amount\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["p"], "id", []), [], "array"), $context["i"], [], "array"), "html", null, true);
                echo "</span>


                                        </td>
                                        ";
                // line 49
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["p"], "prix", []));
                // line 50
                echo "
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "



                                <tr class =\"cart_item\">
                                    <td colspan=\"4\">
                                    </td>
                                    <td>Quantité :</td>
                                    <td>c</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                <tr class =\"cart_item\">
                                    <td colspan=\"4\">
                                    </td>
                                    <td>Total :</td>
                                    <td>\$";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</td>
                                </tr>

                                <tr class=\"cart_item\">
                                    <td colspan=\"6\">
                                        ";
        // line 73
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 74
            echo "                                          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("P_pass", ["total" => (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))]), "html", null, true);
            echo "\">
                                                <button type=\"button\"  disabled class=\"btn btn-primary btn-block\">Pass Commande</button>
                                            </a>
                                        ";
        } else {
            // line 78
            echo "                                           <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("P_pass", ["total" => (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))]), "html", null, true);
            echo "\"
                                                <button type=\"button\"   class=\"btn btn-primary btn-block\">Pass Commande</button>
                                            </a>
                                        ";
        }
        // line 82
        echo "
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Panier/panier.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 82,  193 => 78,  185 => 74,  183 => 73,  175 => 68,  169 => 64,  153 => 53,  145 => 50,  143 => 49,  136 => 45,  128 => 40,  121 => 36,  115 => 33,  112 => 32,  107 => 31,  102 => 30,  99 => 29,  93 => 25,  91 => 24,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  32 => 5,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block titreForm %}
    Basket
{% endblock %}
{% block content %}
    <section>
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"table-responsive\">

                            <table class=\"table table-striped table-bordered tbl-shopping-cart\">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Taille</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% if produits|length == 0 %}
                                    <tr>
                                        <td colspan=\"6\"><center>Aucun Produit dans votre panier</center></td>
                                    </tr>
                                {% endif %}
                                {% set total = 0 %}
                                {% for p in produits %}
                                    {% for i in 0..panier[p.id]|length-1 %}
                                    <tr class=\"cart_item\">
                                        <td class=\"product-remove\"><a title=\"Remove this item\" style=\"color: red\" class=\"remove\" href=\"{{ path('P_supprimmer',{id : p.id , ps : i}) }}\">×</a></td>
                                        <td class=\"product-name\">
                                            <a >
                                                {{ p.libelleFr|upper }}
                                            </a>
                                        </td>

                                        <td class=\"product-price\"><span class=\"amount\">\${{ p.prix }}</span></td>

                                        <td class=\"product-quantity\">


                                            <span class=\"amount\">{{ panier[p.id][i] }}</span>


                                        </td>
                                        {% set total = total + (p.prix ) %}

                                    </tr>
                                    {% endfor %}




                                <tr class =\"cart_item\">
                                    <td colspan=\"4\">
                                    </td>
                                    <td>Quantité :</td>
                                    <td>c</td>
                                </tr>
                                {% endfor %}
                                <tr class =\"cart_item\">
                                    <td colspan=\"4\">
                                    </td>
                                    <td>Total :</td>
                                    <td>\${{ total }}</td>
                                </tr>

                                <tr class=\"cart_item\">
                                    <td colspan=\"6\">
                                        {% if produits|length == 0 %}
                                          <a href=\"{{ path('P_pass',{'total': total}) }}\">
                                                <button type=\"button\"  disabled class=\"btn btn-primary btn-block\">Pass Commande</button>
                                            </a>
                                        {% else %}
                                           <a href=\"{{ path('P_pass',{'total': total}) }}\"
                                                <button type=\"button\"   class=\"btn btn-primary btn-block\">Pass Commande</button>
                                            </a>
                                        {% endif %}

                                    </td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "Panier/panier.html.twig", "C:\\wamp64\\www\\blogShopFinal\\app\\Resources\\views\\Panier\\panier.html.twig");
    }
}
