<?php

/* WassimBundle:Default:edit.html.twig */
class __TwigTemplate_ec1690c26c14fe0c8ff303f267268ca448e0a6580df162e8cd1db496da92b8f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Wassim/base.html.twig", "WassimBundle:Default:edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WassimBundle:Default:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WassimBundle:Default:edit.html.twig"));

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
        echo "    </br> </br> </br> </br>
    <center><h1>Authorized Comments Editor</h1></center>
    </br> </br>
    <form action=\"\" method=\"post\"
        <fieldset>
            <legend>You are editing : <h3> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["AuthorizedComment"]) ? $context["AuthorizedComment"] : $this->getContext($context, "AuthorizedComment")), "comment", []), "html", null, true);
        echo "</h3></legend>

            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Enter the new comment's content here !\">

            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
            <input type=\"button\" class=\"btn btn-primary\" value=\"Delete This Comment\" onclick=\"window.location.href=' ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("authorized_comments_delete", ["id" => $this->getAttribute((isset($context["AuthorizedComment"]) ? $context["AuthorizedComment"] : $this->getContext($context, "AuthorizedComment")), "id", [])]), "html", null, true);
        echo "'\" />

        </fieldset>
    </form>

        </br>
        </br>
        </br>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WassimBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
    </br> </br> </br> </br>
    <center><h1>Authorized Comments Editor</h1></center>
    </br> </br>
    <form action=\"\" method=\"post\"
        <fieldset>
            <legend>You are editing : <h3> {{ AuthorizedComment.comment }}</h3></legend>

            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Enter the new comment's content here !\">

            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
            <input type=\"button\" class=\"btn btn-primary\" value=\"Delete This Comment\" onclick=\"window.location.href=' {{ path('authorized_comments_delete',{'id':AuthorizedComment.id}) }}'\" />

        </fieldset>
    </form>

        </br>
        </br>
        </br>

    </div>
{% endblock %}", "WassimBundle:Default:edit.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\WassimBundle/Resources/views/Default/edit.html.twig");
    }
}
