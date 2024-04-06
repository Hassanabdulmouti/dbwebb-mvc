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

/* base2.html.twig */
class __TwigTemplate_989ac80b1d4ced256f2c1182ce122de5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "base2.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content-container\">
  <div class=\"flex-container\">
    <div class=\"text-content\">
      <h1 class=\"text-3xl font-bold\">Om Denna kuren</h1>
      <p> 
        Den här sidan utvecklades med användning av Symfony och Twig för kursen i objektorienterade webbteknologier vid Blekinge Tekniska Högskola (BTH). 
      </p>
    </div>
    <div class=\"image-container\">
      <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/symfony.png"), "html", null, true);
        echo "\" alt=\"symfony 7\" style=\"width: 300px;\">
    </div>
  </div>
</div>

";
        // line 17
        $this->loadTemplate("footer.html.twig", "base2.html.twig", 17)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base2.html.twig";
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
        return array (  65 => 17,  57 => 12,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html.twig' %}

<div class=\"content-container\">
  <div class=\"flex-container\">
    <div class=\"text-content\">
      <h1 class=\"text-3xl font-bold\">Om Denna kuren</h1>
      <p> 
        Den här sidan utvecklades med användning av Symfony och Twig för kursen i objektorienterade webbteknologier vid Blekinge Tekniska Högskola (BTH). 
      </p>
    </div>
    <div class=\"image-container\">
      <img src=\"{{ asset('img/symfony.png') }}\" alt=\"symfony 7\" style=\"width: 300px;\">
    </div>
  </div>
</div>

{% include 'footer.html.twig' %}
", "base2.html.twig", "/Users/hassanabdulmouti/dbwebb-kurser/mvc/me/report/templates/base2.html.twig");
    }
}
