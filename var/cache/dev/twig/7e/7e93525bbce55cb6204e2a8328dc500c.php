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

/* booking/show.html.twig */
class __TwigTemplate_a6e20c4c392ced678dd95fee1b485d49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
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
        yield "    <div class=\"border-b border-white/20 py-8 px-4 mb-16\">
        <div class=\"max-w-screen-xl px-4\">
            <a href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bookings", ["uid" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 6, $this->source); })()), "customer", [], "any", false, false, false, 6), "uid", [], "any", false, false, false, 6)]), "html", null, true);
        yield "\" class=\"uppercase flex items-center cursor-pointer hover:text-[#6cc7cd] fill-white hover:fill-[#6cc7cd]\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" width=\"16px\" height=\"16px\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M137.4 406.6l-128-127.1C3.125 272.4 0 264.2 0 255.1s3.125-16.38 9.375-22.63l128-127.1c9.156-9.156 22.91-11.9 34.88-6.943S192 115.1 192 128v255.1c0 12.94-7.781 24.62-19.75 29.58S146.5 415.8 137.4 406.6z\"/></svg>
                All bookings
            </a>
        </div>
    </div>
    <div class=\"max-w-screen-xl mx-auto px-4\">
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-5\">
            <img class=\"rounded-[20px]\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_image", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 14, $this->source); })()), "trip", [], "any", false, false, false, 14), "slug", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" />
            <div class=\"mx-auto\">
                <h1 class=\"text-6xl mt-8 lg:mt-0\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 16, $this->source); })()), "trip", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</h1>
                <p class=\"text-lg opacity-60\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 17, $this->source); })()), "trip", [], "any", false, false, false, 17), "tagLine", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
                <p>When: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), "format", ["l, F j, Y"], "method", false, false, false, 18), "html", null, true);
        yield "</p>
                <div class=\"bg-[#12B05C]/50 mt-14 p-8 text-center rounded-3xl\">
                    <h2 class=\"text-2xl opacity-100\">You're booked on this trip!</h2>
                    <p class=\"pt-4\">Check your email for more details on excursions and travel dates!</p>
                </div>
            </div>
        </div>
    </div>
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
        return "booking/show.html.twig";
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
        return array (  104 => 18,  100 => 17,  96 => 16,  91 => 14,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"border-b border-white/20 py-8 px-4 mb-16\">
        <div class=\"max-w-screen-xl px-4\">
            <a href=\"{{ path('bookings', {uid: booking.customer.uid}) }}\" class=\"uppercase flex items-center cursor-pointer hover:text-[#6cc7cd] fill-white hover:fill-[#6cc7cd]\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" width=\"16px\" height=\"16px\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M137.4 406.6l-128-127.1C3.125 272.4 0 264.2 0 255.1s3.125-16.38 9.375-22.63l128-127.1c9.156-9.156 22.91-11.9 34.88-6.943S192 115.1 192 128v255.1c0 12.94-7.781 24.62-19.75 29.58S146.5 415.8 137.4 406.6z\"/></svg>
                All bookings
            </a>
        </div>
    </div>
    <div class=\"max-w-screen-xl mx-auto px-4\">
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-5\">
            <img class=\"rounded-[20px]\" src=\"{{ path('trip_image', {slug: booking.trip.slug}) }}\" />
            <div class=\"mx-auto\">
                <h1 class=\"text-6xl mt-8 lg:mt-0\">{{ booking.trip.name }}</h1>
                <p class=\"text-lg opacity-60\">{{ booking.trip.tagLine }}</p>
                <p>When: {{ booking.date.format('l, F j, Y') }}</p>
                <div class=\"bg-[#12B05C]/50 mt-14 p-8 text-center rounded-3xl\">
                    <h2 class=\"text-2xl opacity-100\">You're booked on this trip!</h2>
                    <p class=\"pt-4\">Check your email for more details on excursions and travel dates!</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "booking/show.html.twig", "/Users/hackemate/Developer/symfony/mailer/templates/booking/show.html.twig");
    }
}
