<?php

/* detailcommande/details.html.twig */
class __TwigTemplate_c52e395c5aa41f164179e2314cb56e41827c7ac6ad989c23a7d9db54a1db3402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "detailcommande/details.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "detailcommande/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "detailcommande/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Details de la commande</h1>

    <table >
        <thead>
        <tr>
            <th>Id</th>
            <th>IdCommande</th>
            <th>IdProduit</th>
            <th>Prix Produit</th>
            <th>Details Produit</th>
            <th>User id</th>
            <th>Couleur</th>
            <th>Taille</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "commande", []), "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "produit", []), "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "produit", []), "prix", []), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "produit", []), "libelleFr", []), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "commande", []), "user", []), "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "couleur", []), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "taille", []), "html", null, true);
            echo "</td>





            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <tr class =\"cart_item\">
            <td colspan=\"4\" o>
            </td>
            <td>Total :</td>
            <td>\$";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), 0, [], "array"), "commande", []), "total", []), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "detailcommande/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  116 => 37,  102 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Details de la commande</h1>

    <table >
        <thead>
        <tr>
            <th>Id</th>
            <th>IdCommande</th>
            <th>IdProduit</th>
            <th>Prix Produit</th>
            <th>Details Produit</th>
            <th>User id</th>
            <th>Couleur</th>
            <th>Taille</th>
        </tr>
        </thead>
        <tbody>
        {% for detail in details %}
            <tr>
                <td>{{ detail.id}}</td>
                <td>{{ detail.commande.id}}</td>
                <td>{{ detail.produit.id}}</td>
                <td>{{ detail.produit.prix}}</td>
                <td>{{ detail.produit.libelleFr}}</td>
                <td>{{ detail.commande.user.id}}</td>
                <td>{{  detail.couleur }}</td>
                <td>{{  detail.taille }}</td>





            </tr>
        {% endfor %}

        <tr class =\"cart_item\">
            <td colspan=\"4\" o>
            </td>
            <td>Total :</td>
            <td>\${{ details[0].commande.total }}</td>
        </tr>
        </tbody>
    </table>


{% endblock %}
", "detailcommande/details.html.twig", "C:\\wamp64\\www\\blogShopFinal\\app\\Resources\\views\\detailcommande\\details.html.twig");
    }
}
