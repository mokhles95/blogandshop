<?php

/* WassimBundle:Default:index.html.twig */
class __TwigTemplate_59a2933906bb6a2e61ae9b3e30ca038b598fbdd8a773b0af750b2c1af8b88ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Wassim/base.html.twig", "WassimBundle:Default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WassimBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WassimBundle:Default:index.html.twig"));

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
    <center><h1>Authorized Comments List</h1></center>
    </br> </br>
    <div class=\"list-group\">

     ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AuthorizedComments"]) ? $context["AuthorizedComments"] : $this->getContext($context, "AuthorizedComments")));
        foreach ($context['_seq'] as $context["_key"] => $context["AuthorizedComment"]) {
            // line 9
            echo "        <center> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("authorized_comments_edit", ["id" => $this->getAttribute($context["AuthorizedComment"], "id", [])]), "html", null, true);
            echo "\"\" class=\"list-group-item list-group-item-action\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["AuthorizedComment"], "comment", []), "html", null, true);
            echo "
              </a></center>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['AuthorizedComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </br></br></br>

        <a id=\"bottom\"></a>

        <center><form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("authorized_comments_afficher");
        echo "\" method=\"post\"
        <fieldset>
            <h3> Add a new comment </h3>

            <div action \"\" class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Enter the new comment\">

            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Add Comment</button>
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
        return "WassimBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  72 => 12,  60 => 9,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
    <center><h1>Authorized Comments List</h1></center>
    </br> </br>
    <div class=\"list-group\">

     {% for AuthorizedComment in AuthorizedComments %}
        <center> <a href=\"{{ path('authorized_comments_edit',{'id':AuthorizedComment.id}) }}\"\" class=\"list-group-item list-group-item-action\">{{ AuthorizedComment.comment }}
              </a></center>
     {% endfor %}
        </br></br></br>

        <a id=\"bottom\"></a>

        <center><form action=\"{{ path('authorized_comments_afficher') }}\" method=\"post\"
        <fieldset>
            <h3> Add a new comment </h3>

            <div action \"\" class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Enter the new comment\">

            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Add Comment</button>
        </fieldset>
        </form></center>
        </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>



    </div>
{% endblock %}", "WassimBundle:Default:index.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\WassimBundle/Resources/views/Default/index.html.twig");
    }
}
