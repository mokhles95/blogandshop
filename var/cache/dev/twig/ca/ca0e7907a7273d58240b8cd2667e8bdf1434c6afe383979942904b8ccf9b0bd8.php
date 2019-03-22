<?php

/* @Yosr/CategoryArticle/chercher.html.twig */
class __TwigTemplate_c4b485665dd0aef8ea2e0f49adeb777e3c8155dfc9ae3944ccce57cadb3c7ad3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Yosr/CategoryArticle/chercher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Yosr/CategoryArticle/chercher.html.twig"));

        // line 1
        echo "<center>
    <h3>RECHERCHER UNE CATEGORIE</h3>
    <table>
        <form method=\"post\">
        <tr>
            <td><label>id</label></td>
            <td><input type=\"text\" name=\"id\" required><br></td>
        </tr>
            <tr><td><input type=\"submit\" value=\"Chercher\"></td></tr>
        </form>
    </table>
    <br><br><br>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CategoryArticles"]) ? $context["CategoryArticles"] : $this->getContext($context, "CategoryArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["CategoryArticle"]) {
            // line 14
            echo "        <fieldset>
            <legend>id Article ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["CategoryArticle"], "id", []), "html", null, true);
            echo "</legend>
            <b>Utilisateur : </b> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["CategoryArticle"], "nom", []), "html", null, true);
            echo "<br>
        </fieldset>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CategoryArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</center>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Yosr/CategoryArticle/chercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  50 => 16,  46 => 15,  43 => 14,  39 => 13,  25 => 1,);
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
    <h3>RECHERCHER UNE CATEGORIE</h3>
    <table>
        <form method=\"post\">
        <tr>
            <td><label>id</label></td>
            <td><input type=\"text\" name=\"id\" required><br></td>
        </tr>
            <tr><td><input type=\"submit\" value=\"Chercher\"></td></tr>
        </form>
    </table>
    <br><br><br>
    {% for CategoryArticle in CategoryArticles %}
        <fieldset>
            <legend>id Article {{ CategoryArticle.id }}</legend>
            <b>Utilisateur : </b> {{ CategoryArticle.nom }}<br>
        </fieldset>
    {% endfor %}
</center>

", "@Yosr/CategoryArticle/chercher.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\YosrBundle\\Resources\\views\\CategoryArticle\\chercher.html.twig");
    }
}
