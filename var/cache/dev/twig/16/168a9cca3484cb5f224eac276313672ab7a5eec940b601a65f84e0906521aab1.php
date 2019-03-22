<?php

/* WassimBundle:CommentingSystem:afficher.html.twig */
class __TwigTemplate_3061ed08b831e08aa6bb2389caaaa502d5c70b8e4177ff02894dae365fa2625f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Wassim/commentingbase.html.twig", "WassimBundle:CommentingSystem:afficher.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Wassim/commentingbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WassimBundle:CommentingSystem:afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WassimBundle:CommentingSystem:afficher.html.twig"));

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
    <center><h1>Welcome user number ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : $this->getContext($context, "userid")), "html", null, true);
        echo " </h1></center>
    </br> </br>
    <div class=\"card mb-3\">
        <h3 class=\"card-header\">Article  ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["articleid"]) ? $context["articleid"] : $this->getContext($context, "articleid")), "html", null, true);
        echo "</h3>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Title of Article  ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["articleid"]) ? $context["articleid"] : $this->getContext($context, "articleid")), "html", null, true);
        echo "</h5>
            <h6 class=\"card-subtitle text-muted\">Categorie</h6>
        </div>
        <img style=\"height: 200px; width: 100%; display: block;\" src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" alt=\"Card image\">
        <div class=\"card-body\">
            <p class=\"card-text\">Article number  ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["articleid"]) ? $context["articleid"] : $this->getContext($context, "articleid")), "html", null, true);
        echo " content.</p>
        </div>
        <div class=\"card-footer text-muted\">
           Date of article  ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["articleid"]) ? $context["articleid"] : $this->getContext($context, "articleid")), "html", null, true);
        echo "
        </div>
    </div>
    </br> </br>
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Current Comments [Number]</h4>
            <h6 class=\"card-subtitle text-muted\">Click on the comment to view submitters</h6> </br> </br>
            <ul class=\"nav nav-tabs\">
                ";
        // line 26
        $context["currentcommentid"] = 0;
        // line 27
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AuthorizedComments"]) ? $context["AuthorizedComments"] : $this->getContext($context, "AuthorizedComments")));
        foreach ($context['_seq'] as $context["_key"] => $context["AuthorizedComment"]) {
            // line 28
            echo "                    ";
            $context["somme"] = 0;
            // line 29
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Comments"]) ? $context["Comments"] : $this->getContext($context, "Comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["Comment"]) {
                // line 30
                echo "                        ";
                if ((($this->getAttribute($context["Comment"], "idUser", []) == (isset($context["userid"]) ? $context["userid"] : $this->getContext($context, "userid"))) && ($this->getAttribute($context["Comment"], "idArticle", []) == (isset($context["articleid"]) ? $context["articleid"] : $this->getContext($context, "articleid"))))) {
                    // line 31
                    echo "                            ";
                    $context["currentcommentid"] = $this->getAttribute($context["Comment"], "idAuthorizedComment", []);
                    // line 32
                    echo "                        ";
                }
                // line 33
                echo "                        ";
                if ((($this->getAttribute($context["Comment"], "idAuthorizedComment", []) == $this->getAttribute($context["AuthorizedComment"], "id", [])) && ($this->getAttribute($context["Comment"], "idArticle", []) == (isset($context["articleid"]) ? $context["articleid"] : $this->getContext($context, "articleid"))))) {
                    // line 34
                    echo "                          ";
                    $context["somme"] = ((isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme")) + 1);
                    // line 35
                    echo "                        ";
                }
                // line 36
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link show\" data-toggle=\"tab\" href=\"#";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["AuthorizedComment"], "comment", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["AuthorizedComment"], "comment", []), "html", null, true);
            echo " [ ";
            echo twig_escape_filter($this->env, (isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme")), "html", null, true);
            echo " ] </a>
                    </li></br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['AuthorizedComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </br> </br>
            </ul>
            <div id=\"myTabContent\" class=\"tab-content\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AuthorizedComments"]) ? $context["AuthorizedComments"] : $this->getContext($context, "AuthorizedComments")));
        foreach ($context['_seq'] as $context["_key"] => $context["AuthorizedComment"]) {
            // line 45
            echo "                <div class=\"tab-pane fade\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["AuthorizedComment"], "comment", []), "html", null, true);
            echo "\">
                    <p> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["AuthorizedComment"], "comment", []), "html", null, true);
            echo " </p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['AuthorizedComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </div>
        </div>
    </div>
    </br> </br>
    ";
        // line 53
        if (((isset($context["isCommented"]) ? $context["isCommented"] : $this->getContext($context, "isCommented")) == 0)) {
            // line 54
            echo "

    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\"></h4>
            <h6 class=\"card-subtitle mb-2 text-muted\">Post A New Comment</h6>
            <label for=\"exampleSelect1\">Choose a comment</label>
            <select class=\"form-control\" id=\"exampleSelect1\">
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["AuthorizedComments"]) ? $context["AuthorizedComments"] : $this->getContext($context, "AuthorizedComments")));
            foreach ($context['_seq'] as $context["_key"] => $context["AuthorizedComment"]) {
                // line 63
                echo "
                    <option>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["AuthorizedComment"], "comment", []), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['AuthorizedComment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Post</button>
        </div>
    </div>
    ";
        } else {
            // line 72
            echo "
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\"></h4>
                <h6 class=\"card-subtitle mb-2 text-muted\">You Already Commented this Article</h6>
                <label for=\"exampleSelect1\">Edit current comment</label>
                <select class=\"form-control\" id=\"exampleSelect1\">
                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["AuthorizedComments"]) ? $context["AuthorizedComments"] : $this->getContext($context, "AuthorizedComments")));
            foreach ($context['_seq'] as $context["_key"] => $context["AuthorizedComment"]) {
                // line 80
                echo "                        ";
                if (((isset($context["currentcommentid"]) ? $context["currentcommentid"] : $this->getContext($context, "currentcommentid")) == $this->getAttribute($context["AuthorizedComment"], "id", []))) {
                    // line 81
                    echo "                            <option selected=\"selected\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["AuthorizedComment"], "comment", []), "html", null, true);
                    echo "</option>
                        ";
                } else {
                    // line 83
                    echo "                        <option>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["AuthorizedComment"], "comment", []), "html", null, true);
                    echo "</option>
                        ";
                }
                // line 85
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['AuthorizedComment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                </select>     </br> </br>
                <button type=\"submit\" class=\"btn btn-primary\">Change Current Comment</button>
                <input type=\"button\" class=\"btn btn-primary\" value=\"Delete Current Comment\" onclick=\"window.location.href=' '\" />

            </div>

        </div>
        </div>

    ";
        }
        // line 96
        echo "    </br> </br>    </br> </br>    </br> </br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WassimBundle:CommentingSystem:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 96,  242 => 86,  236 => 85,  230 => 83,  224 => 81,  221 => 80,  217 => 79,  208 => 72,  200 => 66,  192 => 64,  189 => 63,  185 => 62,  175 => 54,  173 => 53,  167 => 49,  158 => 46,  153 => 45,  149 => 44,  144 => 41,  131 => 38,  128 => 37,  122 => 36,  119 => 35,  116 => 34,  113 => 33,  110 => 32,  107 => 31,  104 => 30,  99 => 29,  96 => 28,  91 => 27,  89 => 26,  77 => 17,  71 => 14,  63 => 9,  58 => 7,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Wassim/commentingbase.html.twig' %}
{% block body %}
    </br> </br>
    <center><h1>Welcome user number {{ userid }} </h1></center>
    </br> </br>
    <div class=\"card mb-3\">
        <h3 class=\"card-header\">Article  {{ articleid }}</h3>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Title of Article  {{ articleid }}</h5>
            <h6 class=\"card-subtitle text-muted\">Categorie</h6>
        </div>
        <img style=\"height: 200px; width: 100%; display: block;\" src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" alt=\"Card image\">
        <div class=\"card-body\">
            <p class=\"card-text\">Article number  {{ articleid }} content.</p>
        </div>
        <div class=\"card-footer text-muted\">
           Date of article  {{ articleid }}
        </div>
    </div>
    </br> </br>
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Current Comments [Number]</h4>
            <h6 class=\"card-subtitle text-muted\">Click on the comment to view submitters</h6> </br> </br>
            <ul class=\"nav nav-tabs\">
                {% set currentcommentid = 0 %}
                {% for AuthorizedComment in AuthorizedComments %}
                    {% set somme = 0 %}
                    {% for Comment in Comments %}
                        {% if Comment.idUser== userid and Comment.idArticle== articleid %}
                            {% set currentcommentid = Comment.idAuthorizedComment %}
                        {% endif %}
                        {% if Comment.idAuthorizedComment==AuthorizedComment.id and Comment.idArticle== articleid %}
                          {% set somme = somme + 1 %}
                        {% endif %}
                    {% endfor %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link show\" data-toggle=\"tab\" href=\"#{{ AuthorizedComment.comment }}\">{{ AuthorizedComment.comment }} [ {{ somme }} ] </a>
                    </li></br>
                {% endfor %}
                </br> </br>
            </ul>
            <div id=\"myTabContent\" class=\"tab-content\">
                {% for AuthorizedComment in AuthorizedComments %}
                <div class=\"tab-pane fade\" id=\"{{ AuthorizedComment.comment }}\">
                    <p> {{ AuthorizedComment.comment }} </p>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
    </br> </br>
    {% if isCommented == 0 %}


    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\"></h4>
            <h6 class=\"card-subtitle mb-2 text-muted\">Post A New Comment</h6>
            <label for=\"exampleSelect1\">Choose a comment</label>
            <select class=\"form-control\" id=\"exampleSelect1\">
                {% for AuthorizedComment in AuthorizedComments %}

                    <option>{{ AuthorizedComment.comment }}</option>
                {% endfor %}
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Post</button>
        </div>
    </div>
    {% else %}

        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\"></h4>
                <h6 class=\"card-subtitle mb-2 text-muted\">You Already Commented this Article</h6>
                <label for=\"exampleSelect1\">Edit current comment</label>
                <select class=\"form-control\" id=\"exampleSelect1\">
                    {% for AuthorizedComment in AuthorizedComments %}
                        {% if currentcommentid == AuthorizedComment.id %}
                            <option selected=\"selected\">{{ AuthorizedComment.comment }}</option>
                        {% else %}
                        <option>{{ AuthorizedComment.comment }}</option>
                        {% endif %}
                    {% endfor %}
                </select>     </br> </br>
                <button type=\"submit\" class=\"btn btn-primary\">Change Current Comment</button>
                <input type=\"button\" class=\"btn btn-primary\" value=\"Delete Current Comment\" onclick=\"window.location.href=' '\" />

            </div>

        </div>
        </div>

    {% endif %}
    </br> </br>    </br> </br>    </br> </br>
{% endblock %}



", "WassimBundle:CommentingSystem:afficher.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\WassimBundle/Resources/views/CommentingSystem/afficher.html.twig");
    }
}
