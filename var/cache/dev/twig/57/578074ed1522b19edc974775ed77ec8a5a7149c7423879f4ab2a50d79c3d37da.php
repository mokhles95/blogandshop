<?php

/* YosrBundle:CategoryArticle:afficher.html.twig */
class __TwigTemplate_02e7332d7605a425f89acf27d2d1972cd60f533defe19b2d0579e601f373a702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YosrBundle:CategoryArticle:afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YosrBundle:CategoryArticle:afficher.html.twig"));

        // line 1
        echo "<center>
    <h1 style=\"color: #A43E4C\">Categorie Articles </h1>
    <table border=\"2\" id=\"tab\" >
        <th bgcolor=\"#AC1414\"  style=\"color: #FFFFFF\" >Id Article</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" >nom</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" colspan=\"2\" >Action</th>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CategoryArticles"]) ? $context["CategoryArticles"] : $this->getContext($context, "CategoryArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Categarticle"]) {
            // line 8
            echo "            <tr >

                <td style=\"color: #800000\" >";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["Categarticle"], "id", []), "html", null, true);
            echo "</h5></td>
                <td style=\"color: #800000\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["Categarticle"], "nom", []), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_CategArticle_modifier", ["id" => $this->getAttribute($context["Categarticle"], "id", [])]), "html", null, true);
            echo "\">Modifier </a></td>
                <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_CategArticle_supprimer", ["id" => $this->getAttribute($context["Categarticle"], "id", [])]), "html", null, true);
            echo "\" >Supprimer </a></td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categarticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </table>
    <br><h3><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_CategArticle_ajouter");
        echo "\" >ajouter Article</a></h3>
    <h3><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_CategArticle_rechercher");
        echo "\" >rechercher Article</a></h3>
</center>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "YosrBundle:CategoryArticle:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  64 => 16,  61 => 15,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 8,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<center>
    <h1 style=\"color: #A43E4C\">Categorie Articles </h1>
    <table border=\"2\" id=\"tab\" >
        <th bgcolor=\"#AC1414\"  style=\"color: #FFFFFF\" >Id Article</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" >nom</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" colspan=\"2\" >Action</th>
        {% for Categarticle in CategoryArticles %}
            <tr >

                <td style=\"color: #800000\" >{{ Categarticle.id }}</h5></td>
                <td style=\"color: #800000\">{{ Categarticle.nom }}</td>
                <td><a href=\"{{ path('entity_CategArticle_modifier',{'id':Categarticle.id}) }}\">Modifier </a></td>
                <td><a href=\"{{ path('entity_CategArticle_supprimer',{'id':Categarticle.id}) }}\" >Supprimer </a></td>
        {% endfor %}
    </table>
    <br><h3><a href=\"{{ path('entity_CategArticle_ajouter') }}\" >ajouter Article</a></h3>
    <h3><a href=\"{{ path('entity_CategArticle_rechercher') }}\" >rechercher Article</a></h3>
</center>
", "YosrBundle:CategoryArticle:afficher.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\YosrBundle/Resources/views/CategoryArticle/afficher.html.twig");
    }
}
