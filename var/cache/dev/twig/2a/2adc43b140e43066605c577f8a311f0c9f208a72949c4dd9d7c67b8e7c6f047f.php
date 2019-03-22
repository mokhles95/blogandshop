<?php

/* MokhlesBundle:Photo:read.html.twig */
class __TwigTemplate_36ee69bf75a0af066d7f36a5829d6d2f26c658e95fda6641290aad1483e1d325 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MokhlesBundle:Photo:read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MokhlesBundle:Photo:read.html.twig"));

        // line 1
        echo "<h1>Liste des Photos</h1>

<table border=\"1\">
    <tr>
        <td>id</td>
        <td>Nom</td>
        <td>image</td>

    </tr>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["ph"], "id", []), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["ph"], "nom", []), "html", null, true);
            echo "</td>
            <td><img style=\"width: 200px ; height: auto\" data-wow-delay=\".5s\"
                     src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["ph"], "imagename", []))), "html", null, true);
            echo "\" alt=\"\" /></td>


            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_Photo", ["id" => $this->getAttribute($context["ph"], "id", [])]), "html", null, true);
            echo "\">Update</a></td>
            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_Photo", ["id" => $this->getAttribute($context["ph"], "id", [])]), "html", null, true);
            echo "\">Delete</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ph'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MokhlesBundle:Photo:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  63 => 20,  59 => 19,  53 => 16,  48 => 14,  44 => 13,  41 => 12,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Liste des Photos</h1>

<table border=\"1\">
    <tr>
        <td>id</td>
        <td>Nom</td>
        <td>image</td>

    </tr>

    {% for ph in photos %}
        <tr>
            <td>{{ ph.id}}</td>
            <td>{{ ph.nom}}</td>
            <td><img style=\"width: 200px ; height: auto\" data-wow-delay=\".5s\"
                     src=\"{{ asset('uploads/'~ ph.imagename) }}\" alt=\"\" /></td>


            <td><a href=\"{{ path('update_Photo',{'id':ph.id}) }}\">Update</a></td>
            <td><a href=\"{{ path('delete_Photo',{'id':ph.id}) }}\">Delete</a></td>
        </tr>
    {% endfor %}

</table>
", "MokhlesBundle:Photo:read.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\MokhlesBundle/Resources/views/Photo/read.html.twig");
    }
}
