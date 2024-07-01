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

/* report.html.twig */
class __TwigTemplate_fe7b6a87007936fe3c8b7ba7295606ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "report.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"main-container\">

<ul class=\"menu bg-base-200 w-56 rounded-box \">
    <li>
        <details>
            <summary>Reports</summary>
            <ul>
                <li><a href=\"#kmom01\">kmom01</a></li>
                <li><a href=\"#kmom02\">kmom02</a></li>
                <li><a href=\"#kmom03\">kmom03</a></li>
                <li><a href=\"#kmom04\">kmom04</a></li>
                <li><a href=\"#kmom05\">kmom05</a></li>
            </ul>
        </details>
    </li>
</ul>
<div id=\"kmom01\" class=\"content-wrapper\">
  
    <h1 class=\"text-3xl font-bold\">kmom01</h1
    <p>Mina tidigare erfarenheter och förkunskaper inom objektorientering grundar sig främst i en introduktionskurs till programmering där Python var i fokus. Kursen täckte de grundläggande principerna för objektorienterad programmering, inklusive definition av klasser, skapande av objekt, och implementering av inkapsling och arv för att effektivisera kodstrukturen. Denna erfarenhet har lagt en bra grund för min förståelse av OOP, trots att jag är medveten om att varje programmeringsspråk har sina specifika egenskaper vad gäller objektorientering.
     <br>
     <br>
     När det kommer till PHP och dess modell för klasser och objekt, står jag inför utmaningen att lära mig från grunden. Viktiga koncept jag behöver förstå för att börja skapa klasser i PHP inkluderar klassdefinitionssyntax, instansiering av objekt, användning av konstruktorer. Att förstå principen är centralt för att kunna utveckla strukturerad och modulär kod.
     <br>
    <br>
    Jag värdesätter starkt användningen av ramverk i programutveckling då det främjar kodåteranvändning och förenklar underhåll. Ramverk reducerar behovet av att skriva kod från grunden genom att erbjuda förkonfigurerade moduler och funktioner, vilket effektiviserar utvecklingsprocessen och låter utvecklaren fokusera på applikationens unika funktioner. Denna metodik bidrar till en mer organiserad och lättförståelig kodbas.
     <br>
     <br>
    <br>
    Slutligen, mitt mest betydelsefulla lärande från detta kursmoment är en fördjupad förståelse för användningen av klasser i PHP. Att lära mig om klasssyntax, hantering av objekt, samt användningen av arv och gränssnitt för att skapa flexibel och återanvändbar kod har varit särskilt berikande. Denna kunskap har inte bara utvidgat min förståelse för objektorienterad programmering utan har också förberett mig för mer avancerad programutveckling.
    </p>

</div>

<div id=\"kmom02\" class=\"content-wrapper\">
      
     <h1 class=\"text-3xl font-bold\">kmom02</h1>
     <h2 class=\"font-bold\">UML modell</h2>
       <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/uml.png"), "html", null, true);
        echo "\" target=\"\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/uml.png"), "html", null, true);
        echo "\" alt=\"UML diagram\" width= \"500\"> </a>
     <p>
I min studie av objektorienterade koncept i PHP har jag utforskat hur arv, komposition, interfaces och traits används. Till exempel används arv i mitt projekt där CardSessionController, CardController, och DisplayCards ärver från AbstractController. Komposition ses i hur DisplayCards innehåller en instans av CardController.    <br>
    <br>

Jag använde PlantUML för att skapa klassdiagrammet och är nöjd med resultatet. Dock ser jag potential för att ytterligare förbättra koden genom att implementera traits, vilket skulle öka modulariteten och underlätta vidare underhåll och utveckling av projektet.
    <br>
    <br>
Genom att arbeta med Symfony och dess MVC-struktur har jag lärt mig vikten av att separera ansvar mellan olika delar av koden. Detta gör det enklare att underhålla och utveckla applikationen. Från detta kursmoment har jag lärt mig vikten av att tydligt visualisera och förstå klassrelationer, vilket är viktigt för att effektivt utveckla robusta webbapplikationer med PHP och Symfony.</p>

</div>


<div id=\"kmom03\" class=\"content-wrapper\">
      
     <h1 class=\"text-3xl font-bold\">kmom03</h1
     <p>kmom03 report goes here</p>

</div>


<div id=\"kmom04\" class=\"content-wrapper\">
      
     <h1 class=\"text-3xl font-bold\">kmom04</h1
     <p>kmom04 report goes here</p>

</div>


<div id=\"kmom05\" class=\"content-wrapper\">
      
     <h1 class=\"text-3xl font-bold\">kmom05</h1
     <p>kmom05 report goes here</p>

</div>


</div>


";
        // line 80
        $this->loadTemplate("footer.html.twig", "report.html.twig", 80)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report.html.twig";
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
        return array (  130 => 80,  85 => 40,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html.twig' %}
<div class=\"main-container\">

<ul class=\"menu bg-base-200 w-56 rounded-box \">
    <li>
        <details>
            <summary>Reports</summary>
            <ul>
                <li><a href=\"#kmom01\">kmom01</a></li>
                <li><a href=\"#kmom02\">kmom02</a></li>
                <li><a href=\"#kmom03\">kmom03</a></li>
                <li><a href=\"#kmom04\">kmom04</a></li>
                <li><a href=\"#kmom05\">kmom05</a></li>
            </ul>
        </details>
    </li>
</ul>
<div id=\"kmom01\" class=\"content-wrapper\">
  
    <h1 class=\"text-3xl font-bold\">kmom01</h1
    <p>Mina tidigare erfarenheter och förkunskaper inom objektorientering grundar sig främst i en introduktionskurs till programmering där Python var i fokus. Kursen täckte de grundläggande principerna för objektorienterad programmering, inklusive definition av klasser, skapande av objekt, och implementering av inkapsling och arv för att effektivisera kodstrukturen. Denna erfarenhet har lagt en bra grund för min förståelse av OOP, trots att jag är medveten om att varje programmeringsspråk har sina specifika egenskaper vad gäller objektorientering.
     <br>
     <br>
     När det kommer till PHP och dess modell för klasser och objekt, står jag inför utmaningen att lära mig från grunden. Viktiga koncept jag behöver förstå för att börja skapa klasser i PHP inkluderar klassdefinitionssyntax, instansiering av objekt, användning av konstruktorer. Att förstå principen är centralt för att kunna utveckla strukturerad och modulär kod.
     <br>
    <br>
    Jag värdesätter starkt användningen av ramverk i programutveckling då det främjar kodåteranvändning och förenklar underhåll. Ramverk reducerar behovet av att skriva kod från grunden genom att erbjuda förkonfigurerade moduler och funktioner, vilket effektiviserar utvecklingsprocessen och låter utvecklaren fokusera på applikationens unika funktioner. Denna metodik bidrar till en mer organiserad och lättförståelig kodbas.
     <br>
     <br>
    <br>
    Slutligen, mitt mest betydelsefulla lärande från detta kursmoment är en fördjupad förståelse för användningen av klasser i PHP. Att lära mig om klasssyntax, hantering av objekt, samt användningen av arv och gränssnitt för att skapa flexibel och återanvändbar kod har varit särskilt berikande. Denna kunskap har inte bara utvidgat min förståelse för objektorienterad programmering utan har också förberett mig för mer avancerad programutveckling.
    </p>

</div>

<div id=\"kmom02\" class=\"content-wrapper\">
      
     <h1 class=\"text-3xl font-bold\">kmom02</h1>
     <h2 class=\"font-bold\">UML modell</h2>
       <a href=\"{{ asset('img/uml.png') }}\" target=\"\"> <img src=\"{{ asset('img/uml.png') }}\" alt=\"UML diagram\" width= \"500\"> </a>
     <p>
I min studie av objektorienterade koncept i PHP har jag utforskat hur arv, komposition, interfaces och traits används. Till exempel används arv i mitt projekt där CardSessionController, CardController, och DisplayCards ärver från AbstractController. Komposition ses i hur DisplayCards innehåller en instans av CardController.    <br>
    <br>

Jag använde PlantUML för att skapa klassdiagrammet och är nöjd med resultatet. Dock ser jag potential för att ytterligare förbättra koden genom att implementera traits, vilket skulle öka modulariteten och underlätta vidare underhåll och utveckling av projektet.
    <br>
    <br>
Genom att arbeta med Symfony och dess MVC-struktur har jag lärt mig vikten av att separera ansvar mellan olika delar av koden. Detta gör det enklare att underhålla och utveckla applikationen. Från detta kursmoment har jag lärt mig vikten av att tydligt visualisera och förstå klassrelationer, vilket är viktigt för att effektivt utveckla robusta webbapplikationer med PHP och Symfony.</p>

</div>


<div id=\"kmom03\" class=\"content-wrapper\">
      
     <h1 class=\"text-3xl font-bold\">kmom03</h1
     <p>kmom03 report goes here</p>

</div>


<div id=\"kmom04\" class=\"content-wrapper\">
      
     <h1 class=\"text-3xl font-bold\">kmom04</h1
     <p>kmom04 report goes here</p>

</div>


<div id=\"kmom05\" class=\"content-wrapper\">
      
     <h1 class=\"text-3xl font-bold\">kmom05</h1
     <p>kmom05 report goes here</p>

</div>


</div>


{% include 'footer.html.twig' %}
", "report.html.twig", "/Users/hassanabdulmouti/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
