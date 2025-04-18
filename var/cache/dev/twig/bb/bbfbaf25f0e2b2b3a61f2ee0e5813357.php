<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* trip/index.html.twig */
class __TwigTemplate_63f0c132825b04f7c2d33c631ee3f8c6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trip/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"bg-[url('/imgs/hero.png')] bg-cover w-full h-auto\">
        <div class=\"max-w-6xl mx-auto px-4\">
            ";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "_navigation.html.twig");
        yield "
            <h1 class=\"text-7xl text-center mt-10 md:mt-32\">Explore <span style=\"font-family: Playfair, serif;\" class=\"italic\">the</span> Cosmos</h1>
            <p class=\"text-center opacity-60 pb-10 md:pb-32\">Explore new galaxies with our team of trusted guides</p>
        </div>
    </div>
    <div class=\"max-w-screen-xl mx-auto px-4\">
        <div class=\"flex mt-10\">
            <h2 class=\"text-3xl pr-2 inline\">Hot Trips</h2>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" fill=\"#DC2626\" width=\"28\" height=\"30\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M323.5 51.25C302.8 70.5 284 90.75 267.4 111.1C240.1 73.62 206.2 35.5 168 0C69.75 91.12 0 210 0 281.6C0 408.9 100.2 512 224 512s224-103.1 224-230.4C448 228.4 396 118.5 323.5 51.25zM224 464c-97 0-176-81.88-176-182.4c0-45.38 44.25-133.2 120.1-214.1C190.5 90.88 211 115.2 228.5 139.4l36.63 50.38l39.38-48.25c5.875-7.125 11.88-14.12 18-21C368.9 178 400 250.4 400 281.6C400 382.1 321 464 224 464zM313.5 243.1l-51.38 58.5c0 0-80.37-102.6-86.37-109.6C133.2 242.9 112 272.6 112 306.4C112 374.3 163.4 416 226.5 416c25.25 0 48.63-7.875 67.63-21.12c43-30.12 53.12-88.63 29.25-134.3C320.4 255 317.1 249.1 313.5 243.1z\"/></svg>
        </div>
        <p class=\"opacity-60 mb-6\">Most popular trips</p>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-5\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 18, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 19
            yield "                ";
            yield $this->getTemplateForMacro("macro_trip", $context, 19, $this->getSourceContext())->macro_trip(...[$context["trip"]]);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trip'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "        </div>

        <div class=\"flex mt-32\">
            <h2 class=\"text-3xl pr-2 inline\">New Adventures</h2>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" fill=\"#eab308\" width=\"28\" height=\"30\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M327.5 85.19L384 64L405.2 7.491C406.9 2.985 411.2 0 416 0C420.8 0 425.1 2.985 426.8 7.491L448 64L504.5 85.19C509 86.88 512 91.19 512 96C512 100.8 509 105.1 504.5 106.8L448 128L426.8 184.5C425.1 189 420.8 192 416 192C411.2 192 406.9 189 405.2 184.5L384 128L327.5 106.8C322.1 105.1 320 100.8 320 96C320 91.19 322.1 86.88 327.5 85.19V85.19zM176 73.29C178.6 67.63 184.3 64 190.6 64C196.8 64 202.5 67.63 205.1 73.29L257.8 187.3L371.8 240C377.5 242.6 381.1 248.3 381.1 254.6C381.1 260.8 377.5 266.5 371.8 269.1L257.8 321.8L205.1 435.8C202.5 441.5 196.8 445.1 190.6 445.1C184.3 445.1 178.6 441.5 176 435.8L123.3 321.8L9.292 269.1C3.627 266.5 0 260.8 0 254.6C0 248.3 3.627 242.6 9.292 240L123.3 187.3L176 73.29zM166.9 207.5C162.1 217.8 153.8 226.1 143.5 230.9L92.32 254.6L143.5 278.2C153.8 282.1 162.1 291.3 166.9 301.6L190.6 352.8L214.2 301.6C218.1 291.3 227.3 282.1 237.6 278.2L288.8 254.6L237.6 230.9C227.3 226.1 218.1 217.8 214.2 207.5L190.6 156.3L166.9 207.5zM405.2 327.5C406.9 322.1 411.2 320 416 320C420.8 320 425.1 322.1 426.8 327.5L448 384L504.5 405.2C509 406.9 512 411.2 512 416C512 420.8 509 425.1 504.5 426.8L448 448L426.8 504.5C425.1 509 420.8 512 416 512C411.2 512 406.9 509 405.2 504.5L384 448L327.5 426.8C322.1 425.1 320 420.8 320 416C320 411.2 322.1 406.9 327.5 405.2L384 384L405.2 327.5z\"/></svg>
        </div>
        <p class=\"opacity-60 mb-6\">Check out our newest travel offerings!</p>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-5\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 29, $this->source); })()), 3, null));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 30
            yield "                ";
            yield $this->getTemplateForMacro("macro_trip", $context, 30, $this->getSourceContext())->macro_trip(...[$context["trip"]]);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trip'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
    public function macro_trip($trip = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "trip" => $trip,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "trip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "trip"));

            // line 37
            yield "    <div class=\"mx-auto\">
        <img class=\"mb-4 h-[280px] w-auto border border-neutral-600 rounded-lg\" src=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_image", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 38, $this->source); })()), "slug", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" />
        <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 39, $this->source); })()), "slug", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"cursor-pointer font-semibold hover:text-[#6cc7cd]\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</a>
        <div class=\"w-[411px] md:w-full pt-2 opacity-60\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 40, $this->source); })()), "tagLine", [], "any", false, false, false, 40), "html", null, true);
            yield "</div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "trip/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  175 => 40,  169 => 39,  165 => 38,  162 => 37,  144 => 36,  131 => 32,  122 => 30,  118 => 29,  108 => 21,  99 => 19,  95 => 18,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"bg-[url('/imgs/hero.png')] bg-cover w-full h-auto\">
        <div class=\"max-w-6xl mx-auto px-4\">
            {{ include('_navigation.html.twig') }}
            <h1 class=\"text-7xl text-center mt-10 md:mt-32\">Explore <span style=\"font-family: Playfair, serif;\" class=\"italic\">the</span> Cosmos</h1>
            <p class=\"text-center opacity-60 pb-10 md:pb-32\">Explore new galaxies with our team of trusted guides</p>
        </div>
    </div>
    <div class=\"max-w-screen-xl mx-auto px-4\">
        <div class=\"flex mt-10\">
            <h2 class=\"text-3xl pr-2 inline\">Hot Trips</h2>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" fill=\"#DC2626\" width=\"28\" height=\"30\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M323.5 51.25C302.8 70.5 284 90.75 267.4 111.1C240.1 73.62 206.2 35.5 168 0C69.75 91.12 0 210 0 281.6C0 408.9 100.2 512 224 512s224-103.1 224-230.4C448 228.4 396 118.5 323.5 51.25zM224 464c-97 0-176-81.88-176-182.4c0-45.38 44.25-133.2 120.1-214.1C190.5 90.88 211 115.2 228.5 139.4l36.63 50.38l39.38-48.25c5.875-7.125 11.88-14.12 18-21C368.9 178 400 250.4 400 281.6C400 382.1 321 464 224 464zM313.5 243.1l-51.38 58.5c0 0-80.37-102.6-86.37-109.6C133.2 242.9 112 272.6 112 306.4C112 374.3 163.4 416 226.5 416c25.25 0 48.63-7.875 67.63-21.12c43-30.12 53.12-88.63 29.25-134.3C320.4 255 317.1 249.1 313.5 243.1z\"/></svg>
        </div>
        <p class=\"opacity-60 mb-6\">Most popular trips</p>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-5\">
            {% for trip in trips[0:3] %}
                {{ _self.trip(trip) }}
            {% endfor %}
        </div>

        <div class=\"flex mt-32\">
            <h2 class=\"text-3xl pr-2 inline\">New Adventures</h2>
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" fill=\"#eab308\" width=\"28\" height=\"30\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M327.5 85.19L384 64L405.2 7.491C406.9 2.985 411.2 0 416 0C420.8 0 425.1 2.985 426.8 7.491L448 64L504.5 85.19C509 86.88 512 91.19 512 96C512 100.8 509 105.1 504.5 106.8L448 128L426.8 184.5C425.1 189 420.8 192 416 192C411.2 192 406.9 189 405.2 184.5L384 128L327.5 106.8C322.1 105.1 320 100.8 320 96C320 91.19 322.1 86.88 327.5 85.19V85.19zM176 73.29C178.6 67.63 184.3 64 190.6 64C196.8 64 202.5 67.63 205.1 73.29L257.8 187.3L371.8 240C377.5 242.6 381.1 248.3 381.1 254.6C381.1 260.8 377.5 266.5 371.8 269.1L257.8 321.8L205.1 435.8C202.5 441.5 196.8 445.1 190.6 445.1C184.3 445.1 178.6 441.5 176 435.8L123.3 321.8L9.292 269.1C3.627 266.5 0 260.8 0 254.6C0 248.3 3.627 242.6 9.292 240L123.3 187.3L176 73.29zM166.9 207.5C162.1 217.8 153.8 226.1 143.5 230.9L92.32 254.6L143.5 278.2C153.8 282.1 162.1 291.3 166.9 301.6L190.6 352.8L214.2 301.6C218.1 291.3 227.3 282.1 237.6 278.2L288.8 254.6L237.6 230.9C227.3 226.1 218.1 217.8 214.2 207.5L190.6 156.3L166.9 207.5zM405.2 327.5C406.9 322.1 411.2 320 416 320C420.8 320 425.1 322.1 426.8 327.5L448 384L504.5 405.2C509 406.9 512 411.2 512 416C512 420.8 509 425.1 504.5 426.8L448 448L426.8 504.5C425.1 509 420.8 512 416 512C411.2 512 406.9 509 405.2 504.5L384 448L327.5 426.8C322.1 425.1 320 420.8 320 416C320 411.2 322.1 406.9 327.5 405.2L384 384L405.2 327.5z\"/></svg>
        </div>
        <p class=\"opacity-60 mb-6\">Check out our newest travel offerings!</p>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-5\">
            {% for trip in trips[3:] %}
                {{ _self.trip(trip) }}
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% macro trip(trip) %}
    <div class=\"mx-auto\">
        <img class=\"mb-4 h-[280px] w-auto border border-neutral-600 rounded-lg\" src=\"{{ path('trip_image', {slug: trip.slug}) }}\" />
        <a href=\"{{ path('trip_show', {slug: trip.slug}) }}\" class=\"cursor-pointer font-semibold hover:text-[#6cc7cd]\">{{ trip.name }}</a>
        <div class=\"w-[411px] md:w-full pt-2 opacity-60\">{{ trip.tagLine }}</div>
    </div>
{% endmacro %}
", "trip/index.html.twig", "/Users/hackemate/Developer/symfony/mailer/templates/trip/index.html.twig");
    }
}
