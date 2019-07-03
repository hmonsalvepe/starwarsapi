<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* swapi/filmInfo.html.twig */
class __TwigTemplate_8038de897ce705825aca4e5e7c8a22c798d01425572859109ae8ef23a9e23f15 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "swapi/filmInfo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "swapi/filmInfo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "swapi/filmInfo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"swapicontainer\" style=\"height: 100%;width: 100%;overflow-y: scroll;padding: 40px;\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\">
            <div class=\"col-xs-12 col-md-10 col-md-offset-1\"
                 style=\"border:2px black solid;padding: 20px;border-radius: 5px;margin-top: 20px;\">

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Title</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["filmToShow"] ?? $this->getContext($context, "filmToShow")), "title", []), "html", null, true);
        echo "</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Director</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["filmToShow"] ?? $this->getContext($context, "filmToShow")), "director", []), "html", null, true);
        echo "</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Producer</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["filmToShow"] ?? $this->getContext($context, "filmToShow")), "producer", []), "html", null, true);
        echo "</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Release date</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["filmToShow"] ?? $this->getContext($context, "filmToShow")), "release_date", []), "html", null, true);
        echo "</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Director</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["filmToShow"] ?? $this->getContext($context, "filmToShow")), "director", []), "html", null, true);
        echo "</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Opening crawl</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["filmToShow"] ?? $this->getContext($context, "filmToShow")), "opening_crawl", []), "html", null, true);
        echo "</p></div>
                </div>

            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "swapi/filmInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  102 => 32,  94 => 27,  86 => 22,  78 => 17,  70 => 12,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"swapicontainer\" style=\"height: 100%;width: 100%;overflow-y: scroll;padding: 40px;\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\">
            <div class=\"col-xs-12 col-md-10 col-md-offset-1\"
                 style=\"border:2px black solid;padding: 20px;border-radius: 5px;margin-top: 20px;\">

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Title</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>{{ filmToShow.title }}</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Director</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>{{ filmToShow.director }}</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Producer</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>{{ filmToShow.producer }}</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Release date</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>{{ filmToShow.release_date }}</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Director</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><h3>{{ filmToShow.director }}</h3></div>
                </div>

                <div class=\"col-xs-12\" style=\"margin-top: 5px;\">
                    <div class=\"col-xs-6\" ><h3>Opening crawl</h3></div>
                    <div class=\"col-xs-6\" style=\"border-left: 1px black solid;\"><p>{{ filmToShow.opening_crawl }}</p></div>
                </div>

            </div>
        </div>
    </div>
</div>

{% endblock %}", "swapi/filmInfo.html.twig", "/Applications/AMPPS/www/opinno_swapi/app/Resources/views/swapi/filmInfo.html.twig");
    }
}
