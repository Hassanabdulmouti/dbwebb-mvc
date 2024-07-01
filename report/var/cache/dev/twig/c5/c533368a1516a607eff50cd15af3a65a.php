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

/* lucky.html.twig */
class __TwigTemplate_ed0aff86a9a03aa7e77914a24c06d826 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "lucky.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content-container\">
  <div class=\"flex-container\">
    <div class=\"text-content\">
      <h1 class=\"text-3xl font-bold\">Lucky number</h1>
      <p> 
        Your lucky number is ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ".
      </p>
    </div>
    <div class=\"image-container\">
      <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/emoji.png"), "html", null, true);
        echo "\" alt=\"symfony 7\" style=\"width: 300px;\">
    </div>
  </div>
</div>

";
        // line 17
        $this->loadTemplate("footer.html.twig", "lucky.html.twig", 17)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "lucky.html.twig";
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
        return array (  68 => 17,  60 => 12,  53 => 8,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html.twig' %}

<div class=\"content-container\">
  <div class=\"flex-container\">
    <div class=\"text-content\">
      <h1 class=\"text-3xl font-bold\">Lucky number</h1>
      <p> 
        Your lucky number is {{ number }}.
      </p>
    </div>
    <div class=\"image-container\">
      <img src=\"{{ asset('img/emoji.png') }}\" alt=\"symfony 7\" style=\"width: 300px;\">
    </div>
  </div>
</div>

{% include 'footer.html.twig' %}
", "lucky.html.twig", "/Users/hassanabdulmouti/dbwebb-kurser/mvc/me/report/templates/lucky.html.twig");
    }
}
