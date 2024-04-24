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

/* card/deck_draw.html.twig */
class __TwigTemplate_f2b90d487a088f47db65b7c8129cfa46 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/deck_draw.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/deck_draw.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "card/deck_draw.html.twig", 1)->display($context);
        // line 2
        echo "

<h1>Drawn Cards</h1>
<div class=\"deck\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["drawnCards"]) || array_key_exists("drawnCards", $context) ? $context["drawnCards"] : (function () { throw new RuntimeError('Variable "drawnCards" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 7
            echo "    <div class=\"card\">
        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["card"], "imgPath", [], "any", false, false, false, 8))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "suit", [], "any", false, false, false, 8), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"card-image\">
        <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "suit", [], "any", false, false, false, 9), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
<p>Remaining Cards in Deck: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</p>
";
        // line 14
        if ((isset($context["deckEmpty"]) || array_key_exists("deckEmpty", $context) ? $context["deckEmpty"] : (function () { throw new RuntimeError('Variable "deckEmpty" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "    <p>No more cards left. Please reshuffle the deck.</p>
    <form action=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_deck_shuffle");
            echo "\" method=\"get\">
        <button type=\"submit\" class=\"btn btn-primary\">Reshuffle Deck</button>
    </form>
";
        }
        // line 20
        echo "

";
        // line 22
        $this->loadTemplate("footer.html.twig", "card/deck_draw.html.twig", 22)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "card/deck_draw.html.twig";
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
        return array (  100 => 22,  96 => 20,  89 => 16,  86 => 15,  84 => 14,  80 => 13,  77 => 12,  66 => 9,  58 => 8,  55 => 7,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html.twig' %}


<h1>Drawn Cards</h1>
<div class=\"deck\">
    {% for card in drawnCards %}
    <div class=\"card\">
        <img src=\"{{ asset('img/' ~ card.imgPath) }}\" alt=\"{{ card.suit }} {{ card.value }}\" class=\"card-image\">
        <p>{{ card.suit }} {{ card.value }}</p>
    </div>
    {% endfor %}
</div>
<p>Remaining Cards in Deck: {{ remaining }}</p>
{% if deckEmpty %}
    <p>No more cards left. Please reshuffle the deck.</p>
    <form action=\"{{ path('card_deck_shuffle') }}\" method=\"get\">
        <button type=\"submit\" class=\"btn btn-primary\">Reshuffle Deck</button>
    </form>
{% endif %}


{% include 'footer.html.twig' %}", "card/deck_draw.html.twig", "/Users/hassanabdulmouti/dbwebb-kurser/mvc/me/report/templates/card/deck_draw.html.twig");
    }
}
