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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_6fafb1c8371a5b53ec8454ad7b1aad6b extends Template
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
        // line 1
        echo "<div id=\"search\" class=\"input-group mb-1\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" style=\"border-radius: 13px 0px 13px 13px\" class=\"form-control form-control-lg\">
\t<button style=\"border-radius: 0px 13px 0px 13px\" type=\"button\" data-lang=\"";
        // line 3
        echo ($context["language"] ?? null);
        echo "\" class=\"btn btn-secondary btn-lg\"><i class=\"fa-solid fa-magnifying-glass\"></i></button>
</div>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/search.twig", "");
    }
}
