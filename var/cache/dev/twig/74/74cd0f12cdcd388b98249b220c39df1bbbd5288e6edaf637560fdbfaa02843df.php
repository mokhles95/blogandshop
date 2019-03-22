<?php

/* commande/index.html.twig */
class __TwigTemplate_df8f6bd6f01ec15893adcf831d02d295d47ec6313d017be3e2eaa2666510cec5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "commande/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

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
        echo "    <h1>Commandes list</h1>

    <table border=\"1\">
        <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Date</th>
                <th>Etat</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 19
            echo "            <tr>

                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_show", ["id" => $this->getAttribute($context["commande"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "user", []), "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["commande"], "date", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", []), "Y-m-d"), "html", null, true);
            }
            echo "</td>

                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "etat", []), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "total", []), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details", ["id" => $this->getAttribute($context["commande"], "id", [])]), "html", null, true);
            echo "\">Details</a>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("confirmer", ["id" => $this->getAttribute($context["commande"], "id", [])]), "html", null, true);
            echo "\">Confirmer</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  103 => 29,  99 => 28,  94 => 26,  90 => 25,  83 => 23,  79 => 22,  73 => 21,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Commandes list</h1>

    <table border=\"1\">
        <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Date</th>
                <th>Etat</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for commande in commandes %}
            <tr>

                <td><a href=\"{{ path('commande_show', { 'id': commande.id }) }}\">{{ commande.id }}</a></td>
                <td>{{ commande.user.id }}</td>
                <td>{% if commande.date %}{{ commande.date|date('Y-m-d') }}{% endif %}</td>

                <td>{{ commande.etat }}</td>
                <td>{{ commande.total }}</td>
                <td>
                    <a href=\"{{ path('details', { 'id': commande.id }) }}\">Details</a>
                        <a href=\"{{ path('confirmer', { 'id': commande.id } ) }}\">Confirmer</a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
", "commande/index.html.twig", "C:\\wamp64\\www\\blogShopFinal\\app\\Resources\\views\\commande\\index.html.twig");
    }
}
