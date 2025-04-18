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

/* trip/show.html.twig */
class __TwigTemplate_2354745b3e30ddab37ed03ec9e3572e5 extends Template
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

        // line 3
        $_trait_0 = $this->loadTemplate("tailwind_2_layout.html.twig", "trip/show.html.twig", 3);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."tailwind_2_layout.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'body' => [$this, 'block_body'],
            ]
        );
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/show.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [$this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trip/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 8
        yield "    ";
        $context["label_class"] = "block text-sm font-medium leading-6";
        // line 9
        yield "    ";
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 13
        yield "    ";
        $context["widget_class"] = "block w-full rounded-md border-0 p-1.5 shadow-sm ring-1 ring-inset ring-[#465568] bg-transparent placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6";
        // line 14
        yield "    ";
        yield from $this->yieldParentBlock("widget_attributes", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "    <div class=\"border-b border-white/20 py-8 px-4 mb-16\">
        <div class=\"max-w-screen-xl px-4\">
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"uppercase flex items-center cursor-pointer hover:text-[#6cc7cd] fill-white hover:fill-[#6cc7cd]\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" width=\"16px\" height=\"16px\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M137.4 406.6l-128-127.1C3.125 272.4 0 264.2 0 255.1s3.125-16.38 9.375-22.63l128-127.1c9.156-9.156 22.91-11.9 34.88-6.943S192 115.1 192 128v255.1c0 12.94-7.781 24.62-19.75 29.58S146.5 415.8 137.4 406.6z\"/></svg>
                Back to travel list
            </a>
        </div>
    </div>
    <div class=\"max-w-screen-xl mx-auto px-4\">
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-5\">
            <img class=\"rounded-[20px]\" src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_image", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 28, $this->source); })()), "slug", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\" />
            <div class=\"mx-auto\">
                <h1 class=\"text-6xl mt-8 lg:mt-0\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
        yield "</h1>
                <p class=\"text-lg opacity-60\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 31, $this->source); })()), "tagLine", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>

                ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        yield "
                    <div class=\"space-y-10\">
                        <div>
                            <h2 class=\"mt-10 mb-4 text-base font-semibold leading-7\">Sign up for this adventure!</h2>
                            <div class=\"grid grid-cols-1 gap-x-6 gap-y-8\">
                                <div>
                                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), 'label', ["label" => "Full Name"]);
        yield "
                                    <div class=\"mt-2\">
                                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), 'widget');
        yield "
                                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), 'errors');
        yield "
                                    </div>
                                </div>
                                <div>
                                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'label');
        yield "
                                    <div class=\"mt-2\">
                                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'widget');
        yield "
                                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'errors');
        yield "
                                    </div>
                                </div>
                                <div>
                                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "date", [], "any", false, false, false, 53), 'label', ["label" => "Travel Date"]);
        yield "
                                    <div class=\"mt-2\">
                                        <div class=\"relative\">
                                            <div class=\"absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\">
                                                <svg class=\"w-4 h-4 text-gray-500 dark:text-gray-400\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                    <path d=\"M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z\"/>
                                                </svg>
                                            </div>
                                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "date", [], "any", false, false, false, 61), 'widget', ["attr" => ["data-controller" => "datepicker", "class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"]]);
        yield "
                                        </div>
                                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "date", [], "any", false, false, false, 63), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"mt-6\">
                            <button type=\"submit\" class=\"text-center w-full rounded-[45px] bg-[#009BE3] py-2 text-sm font-semibold text-white shadow-sm hover:bg-[#0082CA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">Book Trip</button>
                            <div class=\"text-center mt-5 text-sm opacity-60\">We'll reach out to you with all the important details for your trip!</div>
                        </div>
                    </div>
                ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
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
        return "trip/show.html.twig";
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
        return array (  252 => 73,  239 => 63,  234 => 61,  223 => 53,  216 => 49,  212 => 48,  207 => 46,  200 => 42,  196 => 41,  191 => 39,  182 => 33,  177 => 31,  173 => 30,  168 => 28,  157 => 20,  153 => 18,  140 => 17,  126 => 14,  123 => 13,  110 => 12,  96 => 9,  93 => 8,  80 => 7,  69 => 1,  67 => 5,  54 => 1,  33 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% use 'tailwind_2_layout.html.twig' %}

{% form_theme form _self %}

{% block form_label %}
    {% set label_class = 'block text-sm font-medium leading-6' %}
    {{ parent() }}
{% endblock %}

{% block widget_attributes %}
    {% set widget_class = 'block w-full rounded-md border-0 p-1.5 shadow-sm ring-1 ring-inset ring-[#465568] bg-transparent placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6' %}
    {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"border-b border-white/20 py-8 px-4 mb-16\">
        <div class=\"max-w-screen-xl px-4\">
            <a href=\"{{ path('home') }}\" class=\"uppercase flex items-center cursor-pointer hover:text-[#6cc7cd] fill-white hover:fill-[#6cc7cd]\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" width=\"16px\" height=\"16px\"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M137.4 406.6l-128-127.1C3.125 272.4 0 264.2 0 255.1s3.125-16.38 9.375-22.63l128-127.1c9.156-9.156 22.91-11.9 34.88-6.943S192 115.1 192 128v255.1c0 12.94-7.781 24.62-19.75 29.58S146.5 415.8 137.4 406.6z\"/></svg>
                Back to travel list
            </a>
        </div>
    </div>
    <div class=\"max-w-screen-xl mx-auto px-4\">
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-5\">
            <img class=\"rounded-[20px]\" src=\"{{ path('trip_image', {slug: trip.slug}) }}\" />
            <div class=\"mx-auto\">
                <h1 class=\"text-6xl mt-8 lg:mt-0\">{{ trip.name }}</h1>
                <p class=\"text-lg opacity-60\">{{ trip.tagLine }}</p>

                {{ form_start(form) }}
                    <div class=\"space-y-10\">
                        <div>
                            <h2 class=\"mt-10 mb-4 text-base font-semibold leading-7\">Sign up for this adventure!</h2>
                            <div class=\"grid grid-cols-1 gap-x-6 gap-y-8\">
                                <div>
                                    {{ form_label(form.name, 'Full Name') }}
                                    <div class=\"mt-2\">
                                        {{ form_widget(form.name) }}
                                        {{ form_errors(form.name) }}
                                    </div>
                                </div>
                                <div>
                                    {{ form_label(form.email) }}
                                    <div class=\"mt-2\">
                                        {{ form_widget(form.email) }}
                                        {{ form_errors(form.email) }}
                                    </div>
                                </div>
                                <div>
                                    {{ form_label(form.date, 'Travel Date') }}
                                    <div class=\"mt-2\">
                                        <div class=\"relative\">
                                            <div class=\"absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\">
                                                <svg class=\"w-4 h-4 text-gray-500 dark:text-gray-400\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                    <path d=\"M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z\"/>
                                                </svg>
                                            </div>
                                            {{ form_widget(form.date, {attr: {'data-controller': 'datepicker', class: 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'}}) }}
                                        </div>
                                        {{ form_errors(form.date) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"mt-6\">
                            <button type=\"submit\" class=\"text-center w-full rounded-[45px] bg-[#009BE3] py-2 text-sm font-semibold text-white shadow-sm hover:bg-[#0082CA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">Book Trip</button>
                            <div class=\"text-center mt-5 text-sm opacity-60\">We'll reach out to you with all the important details for your trip!</div>
                        </div>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "trip/show.html.twig", "/Users/hackemate/Developer/symfony/mailer/templates/trip/show.html.twig");
    }
}
