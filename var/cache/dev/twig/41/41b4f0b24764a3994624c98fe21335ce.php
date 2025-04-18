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

/* _navigation.html.twig */
class __TwigTemplate_2333111c635d2b0e78a3f1132f17a7a9 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navigation.html.twig"));

        // line 1
        yield "<nav class=\"flex items-center justify-between flex-wrap py-6\">
    <div class=\"flex items-center flex-shrink-0 text-white mr-6\">
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"font-semibold text-xl tracking-tight hover:text-[#6cc7cd]\">Universal Travel</a>
    </div>
    <div class=\"block lg:hidden\">
        <button class=\"flex items-center px-3 py-2 border rounded border-white hover:text-[#6cc7cd] hover:border-[#6cc7cd]\">
        <svg class=\"fill-current h-3 w-3\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>Menu</title><path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"/></svg>
        </button>
    </div>
    <div class=\"hidden w-full block flex-grow lg:flex lg:items-center lg:w-auto\">
        <div class=\"text-sm lg:flex-grow\">
        <a href=\"#responsive-header\" class=\"block mt-4 lg:inline-block lg:mt-0 hover:text-[#6cc7cd] mr-4\">
            Destinations
        </a>
        <a href=\"#responsive-header\" class=\"block mt-4 lg:inline-block lg:mt-0 hover:text-[#6cc7cd] mr-4\">
            Inspiration
        </a>
        <a href=\"#responsive-header\" class=\"block mt-4 lg:inline-block lg:mt-0 hover:text-[#6cc7cd]\">
            Journal
        </a>
        </div>
        <div class=\"lg:flex gap-5 items-center\">
            <div class=\"mt-4 lg:mt-0 text-sm lg:text-base hover:text-[#6cc7cd] cursor-pointer\">Login</div>
            <button class=\"mt-4 lg:mt-0 text-sm lg:text-base text-black bg-white p-1 lg:p-2 rounded-[45px] w-16 lg:w-[101px] text-center hover:bg-slate-200\">Signup</button>
        </div>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_navigation.html.twig";
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
        return array (  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"flex items-center justify-between flex-wrap py-6\">
    <div class=\"flex items-center flex-shrink-0 text-white mr-6\">
        <a href=\"{{ path('home') }}\" class=\"font-semibold text-xl tracking-tight hover:text-[#6cc7cd]\">Universal Travel</a>
    </div>
    <div class=\"block lg:hidden\">
        <button class=\"flex items-center px-3 py-2 border rounded border-white hover:text-[#6cc7cd] hover:border-[#6cc7cd]\">
        <svg class=\"fill-current h-3 w-3\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>Menu</title><path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"/></svg>
        </button>
    </div>
    <div class=\"hidden w-full block flex-grow lg:flex lg:items-center lg:w-auto\">
        <div class=\"text-sm lg:flex-grow\">
        <a href=\"#responsive-header\" class=\"block mt-4 lg:inline-block lg:mt-0 hover:text-[#6cc7cd] mr-4\">
            Destinations
        </a>
        <a href=\"#responsive-header\" class=\"block mt-4 lg:inline-block lg:mt-0 hover:text-[#6cc7cd] mr-4\">
            Inspiration
        </a>
        <a href=\"#responsive-header\" class=\"block mt-4 lg:inline-block lg:mt-0 hover:text-[#6cc7cd]\">
            Journal
        </a>
        </div>
        <div class=\"lg:flex gap-5 items-center\">
            <div class=\"mt-4 lg:mt-0 text-sm lg:text-base hover:text-[#6cc7cd] cursor-pointer\">Login</div>
            <button class=\"mt-4 lg:mt-0 text-sm lg:text-base text-black bg-white p-1 lg:p-2 rounded-[45px] w-16 lg:w-[101px] text-center hover:bg-slate-200\">Signup</button>
        </div>
    </div>
</nav>
", "_navigation.html.twig", "/Users/hackemate/Developer/symfony/mailer/templates/_navigation.html.twig");
    }
}
