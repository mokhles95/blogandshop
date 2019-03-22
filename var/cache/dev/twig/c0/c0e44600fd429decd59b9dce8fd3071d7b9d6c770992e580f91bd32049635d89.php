<?php

/* MokhlesBundle:Taille:read.html.twig */
class __TwigTemplate_acbec6f78e6aa93cac0292adad7db6ece1e65ba4e178bfe59e0bcc4c65a364d6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MokhlesBundle:Taille:read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MokhlesBundle:Taille:read.html.twig"));

        // line 1
        echo "<h1> Les tailles</h1>

<table border=\"1\">
    <tr>
        <td>id</td>
        <td>taille</td>
        <td>etat</td>

    </tr>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tailles"]) ? $context["tailles"] : $this->getContext($context, "tailles")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", []), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "libelle", []), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "etat", []), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 17
            if (($this->getAttribute($context["t"], "etat", []) == "actif")) {
                // line 18
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archiver_Taille", ["id" => $this->getAttribute($context["t"], "id", [])]), "html", null, true);
                echo "\">Archiver</a>
                ";
            } else {
                // line 20
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desarchiver_Taille", ["id" => $this->getAttribute($context["t"], "id", [])]), "html", null, true);
                echo "\">Désarchiver</a>
                ";
            }
            // line 22
            echo "
            </td>



        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MokhlesBundle:Taille:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  71 => 22,  65 => 20,  59 => 18,  57 => 17,  52 => 15,  48 => 14,  44 => 13,  41 => 12,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1> Les tailles</h1>

<table border=\"1\">
    <tr>
        <td>id</td>
        <td>taille</td>
        <td>etat</td>

    </tr>

    {% for t in tailles %}
        <tr>
            <td>{{ t.id}}</td>
            <td>{{ t.libelle}}</td>
            <td>{{ t.etat}}</td>
            <td>
                {% if t.etat == \"actif\" %}
                    <a href=\"{{ path('archiver_Taille',{'id':t.id}) }}\">Archiver</a>
                {% else %}
                    <a href=\"{{ path('desarchiver_Taille',{'id':t.id}) }}\">Désarchiver</a>
                {% endif %}

            </td>



        </tr>
    {% endfor %}

</table>
", "MokhlesBundle:Taille:read.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\MokhlesBundle/Resources/views/Taille/read.html.twig");
    }
}
