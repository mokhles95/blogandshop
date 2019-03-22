<?php

/* YosrBundle:Article:chercher.html.twig */
class __TwigTemplate_3f433e32375b30adac420103ba4d589972192c7c112e7b52b16f4185ed45a493 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YosrBundle:Article:chercher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YosrBundle:Article:chercher.html.twig"));

        // line 1
        echo "<center>
    <h3>RECHERCHER UN ARTICLE</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "        <fieldset>
            <legend>id Article ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
            echo "</legend>
            <b>Utilisateur : </b> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", []), "nom", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", []), "prenom", []), "html", null, true);
            echo "<br>
            <b>Sub Categorie : </b> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "SubCateg", []), "nom", []), "html", null, true);
            echo "<br>
            <b>Saved Article : </b> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "SavedA", []), "id", []), "html", null, true);
            echo "<br>
        </fieldset>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</center>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "YosrBundle:Article:chercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  60 => 18,  56 => 17,  50 => 16,  46 => 15,  43 => 14,  39 => 13,  25 => 1,);
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
    <h3>RECHERCHER UN ARTICLE</h3>
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
    {% for article in articles %}
        <fieldset>
            <legend>id Article {{ article.id }}</legend>
            <b>Utilisateur : </b> {{ article.user.nom }} {{ article.user.prenom }}<br>
            <b>Sub Categorie : </b> {{ article.SubCateg.nom }}<br>
            <b>Saved Article : </b> {{ article.SavedA.id }}<br>
        </fieldset>
    {% endfor %}
</center>

", "YosrBundle:Article:chercher.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\YosrBundle/Resources/views/Article/chercher.html.twig");
    }
}
