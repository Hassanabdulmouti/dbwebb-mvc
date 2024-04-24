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

/* card/landing.html.twig */
class __TwigTemplate_d0ffa31debc172ce664637cf2e8a56f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/landing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/landing.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "card/landing.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"hero min-h-screen bg-base-200\">
  <div class=\"hero-content flex-col lg:flex-row\">
    <div>
      <h1 class=\"text-5xl font-bold\">Cards session!</h1>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carddeck");
        echo "\">Cards</a></li>
        <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_page");
        echo "\">Session</a></li>
        <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_delete");
        echo "\">Session delete</a></li>
        <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_shuffle");
        echo "\">Shuffle cards</a></li>
        <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_draw");
        echo "\">Draw card</a></li>


          
    </div>
  </div>
</div>

";
        // line 19
        $this->loadTemplate("footer.html.twig", "card/landing.html.twig", 19)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "card/landing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  79 => 19,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html.twig' %}

<div class=\"hero min-h-screen bg-base-200\">
  <div class=\"hero-content flex-col lg:flex-row\">
    <div>
      <h1 class=\"text-5xl font-bold\">Cards session!</h1>
        <li><a href=\"{{ path('carddeck') }}\">Cards</a></li>
        <li><a href=\"{{ path('session_page') }}\">Session</a></li>
        <li><a href=\"{{ path('session_delete') }}\">Session delete</a></li>
        <li><a href=\"{{ path('card_deck_shuffle') }}\">Shuffle cards</a></li>
        <li><a href=\"{{ path('card_deck_draw') }}\">Draw card</a></li>


          
    </div>
  </div>
</div>

{% include 'footer.html.twig' %}
", "card/landing.html.twig", "/Users/hassanabdulmouti/dbwebb-kurser/mvc/me/report/templates/card/landing.html.twig");
    }
}
