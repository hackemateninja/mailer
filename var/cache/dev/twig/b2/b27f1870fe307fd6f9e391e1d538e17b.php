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

/* booking/index.html.twig */
class __TwigTemplate_07b648438d943b906c7c14871511a1a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/index.html.twig", 1);
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
        yield "    <div class=\"bg-[url('/imgs/hero-2.png')] bg-cover bg-bottom w-full h-auto\">
        <div class=\"max-w-screen-xl mx-auto px-4\">
            ";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "_navigation.html.twig");
        yield "
            <h1 class=\"text-6xl mt-20 pb-8\">Upcoming Trips</h1>
        </div>
    </div>
    <div class=\"max-w-screen-xl mx-auto px-4\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcoming"]) || array_key_exists("upcoming", $context) ? $context["upcoming"] : (function () { throw new RuntimeError('Variable "upcoming" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 12
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-3 bg-[#1F2732] border-2 border-white/20 rounded-[20px] mt-2 pb-4 md:pb-0\">
                <div class=\"md:col-span-2 pl-4 lg:pl-16 pt-4 min-[901px]:pt-8 order-last md:order-first\">
                    <h2 class=\"text-2xl min-[901px]:text-[42px]\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
            yield "</h2>
                    <p class=\"opacity-60 pt-2\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 15), "tagLine", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
                    <p>When: ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "date", [], "any", false, false, false, 16), "format", ["l, F j, Y"], "method", false, false, false, 16), "html", null, true);
            yield "</p>
                    <a href=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_show", ["uid" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "uid", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\" class=\"inline-block text-center rounded-[45px] bg-[#009BE3] mt-8 lg:mt-10 p-3 lg:p-4 text-sm lg:text-lg font-semibold text-white shadow-sm hover:bg-[#0082CA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">Manage Booking</a>
                </div>
                <div>
                    <img class=\"rounded-tr-[20px] rounded-tl-[20px] md:rounded-r-[20px] md:rounded-tl-none \" src=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_image", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 20), "slug", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" />
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            yield "            <div class=\"mt-6\"><em>No trips are currently booked</em></div>
            <a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            yield "\" class=\"inline-block text-center rounded-[45px] bg-[#009BE3] mt-8 lg:mt-10 p-3 lg:p-4 text-sm lg:text-lg font-semibold text-white shadow-sm hover:bg-[#0082CA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">Find your next adventure</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
        <h1 class=\"text-4xl mt-14 pb-6\">Past Trips</h1>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 30
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-3 bg-[#1F2732] border-2 border-white/20 rounded-[20px] mt-2 pb-4 md:pb-0\">
                <div class=\"md:col-span-2 pl-4 lg:pl-16 pt-4 min-[901px]:pt-8 order-last md:order-first\">
                    <h2 class=\"text-2xl min-[901px]:text-[42px]\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            yield "</h2>
                    <p class=\"opacity-60 pt-2\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 33), "tagLine", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                </div>
                <div>
                    <img class=\"rounded-tr-[20px] rounded-tl-[20px] md:rounded-r-[20px] md:rounded-tl-none \" src=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_image", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "trip", [], "any", false, false, false, 36), "slug", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" />
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            yield "            <div><em>Your previous trips will show here after you're back from your first adventure with us!</em></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "booking/index.html.twig";
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
        return array (  174 => 42,  167 => 40,  158 => 36,  152 => 33,  148 => 32,  144 => 30,  139 => 29,  135 => 27,  127 => 25,  124 => 24,  115 => 20,  109 => 17,  105 => 16,  101 => 15,  97 => 14,  93 => 12,  88 => 11,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"bg-[url('/imgs/hero-2.png')] bg-cover bg-bottom w-full h-auto\">
        <div class=\"max-w-screen-xl mx-auto px-4\">
            {{ include('_navigation.html.twig') }}
            <h1 class=\"text-6xl mt-20 pb-8\">Upcoming Trips</h1>
        </div>
    </div>
    <div class=\"max-w-screen-xl mx-auto px-4\">
        {% for booking in upcoming %}
            <div class=\"grid grid-cols-1 md:grid-cols-3 bg-[#1F2732] border-2 border-white/20 rounded-[20px] mt-2 pb-4 md:pb-0\">
                <div class=\"md:col-span-2 pl-4 lg:pl-16 pt-4 min-[901px]:pt-8 order-last md:order-first\">
                    <h2 class=\"text-2xl min-[901px]:text-[42px]\">{{ booking.trip.name }}</h2>
                    <p class=\"opacity-60 pt-2\">{{ booking.trip.tagLine }}</p>
                    <p>When: {{ booking.date.format('l, F j, Y') }}</p>
                    <a href=\"{{ path('booking_show', {uid: booking.uid}) }}\" class=\"inline-block text-center rounded-[45px] bg-[#009BE3] mt-8 lg:mt-10 p-3 lg:p-4 text-sm lg:text-lg font-semibold text-white shadow-sm hover:bg-[#0082CA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">Manage Booking</a>
                </div>
                <div>
                    <img class=\"rounded-tr-[20px] rounded-tl-[20px] md:rounded-r-[20px] md:rounded-tl-none \" src=\"{{ path('trip_image', {slug: booking.trip.slug}) }}\" />
                </div>
            </div>
        {% else %}
            <div class=\"mt-6\"><em>No trips are currently booked</em></div>
            <a href=\"{{ path('home') }}\" class=\"inline-block text-center rounded-[45px] bg-[#009BE3] mt-8 lg:mt-10 p-3 lg:p-4 text-sm lg:text-lg font-semibold text-white shadow-sm hover:bg-[#0082CA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">Find your next adventure</a>
        {% endfor %}

        <h1 class=\"text-4xl mt-14 pb-6\">Past Trips</h1>
        {% for booking in previous %}
            <div class=\"grid grid-cols-1 md:grid-cols-3 bg-[#1F2732] border-2 border-white/20 rounded-[20px] mt-2 pb-4 md:pb-0\">
                <div class=\"md:col-span-2 pl-4 lg:pl-16 pt-4 min-[901px]:pt-8 order-last md:order-first\">
                    <h2 class=\"text-2xl min-[901px]:text-[42px]\">{{ booking.trip.name }}</h2>
                    <p class=\"opacity-60 pt-2\">{{ booking.trip.tagLine }}</p>
                </div>
                <div>
                    <img class=\"rounded-tr-[20px] rounded-tl-[20px] md:rounded-r-[20px] md:rounded-tl-none \" src=\"{{ path('trip_image', {slug: booking.trip.slug}) }}\" />
                </div>
            </div>
        {% else %}
            <div><em>Your previous trips will show here after you're back from your first adventure with us!</em></div>
        {% endfor %}
    </div>
{% endblock %}
", "booking/index.html.twig", "/Users/hackemate/Developer/symfony/mailer/templates/booking/index.html.twig");
    }
}
