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

/* base.html.twig */
class __TwigTemplate_201c2dd78c9be4ae9019c3ee1889164c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "base.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"hero min-h-screen bg-base-200\">
  <div class=\"hero-content flex-col lg:flex-row\">
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Hassan2.png"), "html", null, true);
        echo "\" alt=\"Description of image\" class=\"max-w-sm rounded-lg shadow-2xl\" />
    <div>
      <h1 class=\"text-5xl font-bold\">BTH Student!</h1>
      <p class=\"py-6\">Hej, mitt namn är Hassan och jag är 22 år gammal. Jag är nybliven student vid BTH och

studerar webbprogrammering. Utöver mitt intresse för teknik och programmering, brinner

jag även för fotboll och träning. Ett av mina stora passioner är fotboll, och mitt favoritlag är

Real Madrid. Jag ser fram emot att lära mig mer om webbutveckling och förhoppningsvis

kombinera min tekniska kunskap med min kärlek för sporten på något sätt i framtiden.</p>
    </div>
  </div>
</div>

";
        // line 21
        $this->loadTemplate("footer.html.twig", "base.html.twig", 21)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  69 => 21,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html.twig' %}

<div class=\"hero min-h-screen bg-base-200\">
  <div class=\"hero-content flex-col lg:flex-row\">
    <img src=\"{{ asset('img/Hassan2.png') }}\" alt=\"Description of image\" class=\"max-w-sm rounded-lg shadow-2xl\" />
    <div>
      <h1 class=\"text-5xl font-bold\">BTH Student!</h1>
      <p class=\"py-6\">Hej, mitt namn är Hassan och jag är 22 år gammal. Jag är nybliven student vid BTH och

studerar webbprogrammering. Utöver mitt intresse för teknik och programmering, brinner

jag även för fotboll och träning. Ett av mina stora passioner är fotboll, och mitt favoritlag är

Real Madrid. Jag ser fram emot att lära mig mer om webbutveckling och förhoppningsvis

kombinera min tekniska kunskap med min kärlek för sporten på något sätt i framtiden.</p>
    </div>
  </div>
</div>

{% include 'footer.html.twig' %}
", "base.html.twig", "/Users/hassanabdulmouti/dbwebb-kurser/mvc/me/report/templates/base.html.twig");
    }
}
