<?php

/* @Yosr/Article/afficher.html.twig */
class __TwigTemplate_76a08eb1522d71a64a192dea8af4b59bbee8dff68b55d2f1136918a90b35a708 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Yosr/Article/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Yosr/Article/afficher.html.twig"));

        // line 1
        echo "<center>
    <h1 style=\"color: #A43E4C\">Articles </h1>
    <table border=\"2\" id=\"tab\" >
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" >l'utilisateur</th>
        <th bgcolor=\"#AC1414\"  style=\"color: #FFFFFF\" >Id Article</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" >Sub Categorie</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" >Saved Article</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" colspan=\"2\" >Action</th>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "            <tr >
                <td style=\"color: #800000\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", []), "nom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", []), "prenom", []), "html", null, true);
            echo "</td>
                <td style=\"color: #800000\" >";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
            echo "</h5></td>
                <td style=\"color: #800000\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "SubCateg", []), "nom", []), "html", null, true);
            echo "</td>
                <td style=\"color: #800000\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "SavedA", []), "id", []), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_Article_modifier", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
            echo "\">Modifier </a></td>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_Article_supprimer", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
            echo "\" >Supprimer </a></td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </table>
    <br><h3><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_Article_ajouter");
        echo "\" >ajouter Article</a></h3>
     <h3><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_Article_rechercher");
        echo "\" >rechercher Article</a></h3>
</center>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Yosr/Article/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  75 => 19,  72 => 18,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  42 => 11,  39 => 10,  35 => 9,  25 => 1,);
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
    <h1 style=\"color: #A43E4C\">Articles </h1>
    <table border=\"2\" id=\"tab\" >
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" >l'utilisateur</th>
        <th bgcolor=\"#AC1414\"  style=\"color: #FFFFFF\" >Id Article</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" >Sub Categorie</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" >Saved Article</th>
        <th bgcolor=\"#AC1414\" style=\"color: #FFFFFF\" colspan=\"2\" >Action</th>
        {% for article in articles %}
            <tr >
                <td style=\"color: #800000\">{{ article.user.nom }} {{ article.user.prenom }}</td>
                <td style=\"color: #800000\" >{{ article.id }}</h5></td>
                <td style=\"color: #800000\">{{ article.SubCateg.nom }}</td>
                <td style=\"color: #800000\">{{ article.SavedA.id }}</td>
                <td><a href=\"{{ path('entity_Article_modifier',{'id':article.id}) }}\">Modifier </a></td>
                <td><a href=\"{{ path('entity_Article_supprimer',{'id':article.id}) }}\" >Supprimer </a></td>
        {% endfor %}
    </table>
    <br><h3><a href=\"{{ path('entity_Article_ajouter') }}\" >ajouter Article</a></h3>
     <h3><a href=\"{{ path('entity_Article_rechercher') }}\" >rechercher Article</a></h3>
</center>
", "@Yosr/Article/afficher.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\YosrBundle\\Resources\\views\\Article\\afficher.html.twig");
    }
}
