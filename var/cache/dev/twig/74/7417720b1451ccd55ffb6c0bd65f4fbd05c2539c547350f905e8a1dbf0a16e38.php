<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* menu.html.twig */
class __TwigTemplate_b4a76f4f806a34f3a90b863b4ad1b8ba272c6c4a28b8f9c1f2f829c768b99b20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'cabecera' => [$this, 'block_cabecera'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_cabecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cabecera"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cabecera"));

        // line 3
        echo "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oferta");
        echo "\">JobOrWork</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">All tables<span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oferta");
        echo "\">Oferta</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empresas");
        echo "\">Empresa</a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Candidat</a>
      </li>
    </ul>
    <form class=\"form-inline\">
        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
  </form>
  </div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  84 => 14,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block cabecera %}
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"{{path(\"oferta\")}}\">JobOrWork</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">All tables<span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path(\"oferta\")}}\">Oferta</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path(\"empresas\")}}\">Empresa</a>
      </li>
       <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Candidat</a>
      </li>
    </ul>
    <form class=\"form-inline\">
        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
  </form>
  </div>
</nav>
{% endblock %}", "menu.html.twig", "/home/oscar/JobOrWork1/templates/menu.html.twig");
    }
}
