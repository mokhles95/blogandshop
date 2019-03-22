<?php

/* MokhlesBundle:Photo:update.html.twig */
class __TwigTemplate_aee68791668771418e42578d858659244ca52a4d9b8979a5288822c9d5ca5a0c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MokhlesBundle:Photo:update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MokhlesBundle:Photo:update.html.twig"));

        // line 1
        echo "<html> <head> <title>Modifier une photo</title>
</head>
<body>
<center>

    <fieldset style=\"width: 50%\">
        <form method=\"POST\">
            Nom: <input type=\"text\" name=\"nom\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")), "nom", []), "html", null, true);
        echo "\"> <br>
            </br>
            <input type=\"submit\" value=\"Enregistrer\">
        </form>
    </fieldset>
</center>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MokhlesBundle:Photo:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html> <head> <title>Modifier une photo</title>
</head>
<body>
<center>

    <fieldset style=\"width: 50%\">
        <form method=\"POST\">
            Nom: <input type=\"text\" name=\"nom\" value=\"{{ photos.nom }}\"> <br>
            </br>
            <input type=\"submit\" value=\"Enregistrer\">
        </form>
    </fieldset>
</center>
</body>
</html>", "MokhlesBundle:Photo:update.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\MokhlesBundle/Resources/views/Photo/update.html.twig");
    }
}
