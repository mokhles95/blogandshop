<?php

/* WassimBundle:CommentingSystem:index.html.twig */
class __TwigTemplate_6e734e8b6f2b10a1d388f6aabc5e3c3245cf03d3ce0fba25d8d77517d90dc4f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Wassim/base.html.twig", "WassimBundle:CommentingSystem:index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Wassim/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WassimBundle:CommentingSystem:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WassimBundle:CommentingSystem:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    </br> </br>
    <center><h1>Commenting System Tester</h1></center>
    </br> </br>

        <center><form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commenting_system_tester");
        echo "\" method=\"post\"
            <fieldset>
                <h3> Enter UserID </h3>
                <div action \"\" class=\"form-group\">
                <input type=\"number\" min=\"0\" step=\"1\" class=\"form-control\" name=\"userid\" placeholder=\"Put User ID Here\">
                <h3> Enter ArticleID </h3>
                <div action \"\" class=\"form-group\">
                <input type=\"number\" min=\"0\" step=\"1\" class=\"form-control\" name=\"articleid\" placeholder=\"Put Article ID Here\">

                </div>
    <button type=\"submit\" class=\"btn btn-primary\">GO !</button>
    </fieldset>
    </form></center>
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>



    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WassimBundle:CommentingSystem:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Wassim/base.html.twig' %}
{% block body %}
    </br> </br>
    <center><h1>Commenting System Tester</h1></center>
    </br> </br>

        <center><form action=\"{{ path('commenting_system_tester') }}\" method=\"post\"
            <fieldset>
                <h3> Enter UserID </h3>
                <div action \"\" class=\"form-group\">
                <input type=\"number\" min=\"0\" step=\"1\" class=\"form-control\" name=\"userid\" placeholder=\"Put User ID Here\">
                <h3> Enter ArticleID </h3>
                <div action \"\" class=\"form-group\">
                <input type=\"number\" min=\"0\" step=\"1\" class=\"form-control\" name=\"articleid\" placeholder=\"Put Article ID Here\">

                </div>
    <button type=\"submit\" class=\"btn btn-primary\">GO !</button>
    </fieldset>
    </form></center>
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>



    </div>
{% endblock %}", "WassimBundle:CommentingSystem:index.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\WassimBundle/Resources/views/CommentingSystem/index.html.twig");
    }
}
