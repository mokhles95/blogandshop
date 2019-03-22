<?php

/* @Mokhles/Default/read.html.twig */
class __TwigTemplate_41b71c1fc3e3bba7c5eaf6c3f98aa48c53c880a6b10307cdf49a67c58d951620 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Mokhles/Default/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Mokhles/Default/read.html.twig"));

        // line 1
        echo "<h1>Liste des Produits</h1>

<table border=\"1\">
    <tr>
        <td>#</td>
        <td>Titre</td>
        <td>Description</td>
        <td>Date de création</td>
        <td>Etat</td>
        <td>Prix</td>

    </tr>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 15
            echo "        <tr>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo "</td>

            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelleFr", []), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "decFr", []), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "m/d/Y"), "html", null, true);
            echo "
                </td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "etat", []), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", []), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_Produit", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Update</a></td>
            <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_Produit", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Delete</a></td>


        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Mokhles/Default/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  60 => 20,  56 => 19,  52 => 18,  47 => 16,  44 => 15,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Liste des Produits</h1>

<table border=\"1\">
    <tr>
        <td>#</td>
        <td>Titre</td>
        <td>Description</td>
        <td>Date de création</td>
        <td>Etat</td>
        <td>Prix</td>

    </tr>

    {% for p in produits %}
        <tr>
            <td>{{ p.id}}</td>

            <td>{{ p.libelleFr}}</td>
            <td>{{ p.decFr}}</td>
            <td>{{ p.date|date(\"m/d/Y\") }}
                </td>
            <td>{{ p.etat}}</td>
            <td>{{ p.prix}}</td>
            <td><a href=\"{{ path('update_Produit',{'id':p.id}) }}\">Update</a></td>
            <td><a href=\"{{ path('delete_Produit',{'id':p.id}) }}\">Delete</a></td>


        </tr>
    {% endfor %}

</table>
", "@Mokhles/Default/read.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\MokhlesBundle\\Resources\\views\\Default\\read.html.twig");
    }
}
