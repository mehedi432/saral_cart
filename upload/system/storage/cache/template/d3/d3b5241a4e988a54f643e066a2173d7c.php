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

/* extension/opencart/catalog/view/template/module/featured.twig */
class __TwigTemplate_3fa12888c20026946b2fe3da91506eb6 extends Template
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
        echo "<h3>";
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"row";
        // line 2
        if ((($context["axis"] ?? null) == "horizontal")) {
            echo " row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4";
        }
        echo "\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "    <div class=\"col mb-3\">
      <div class=\"card\">
        <a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
            echo "\">
          <img src=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 7);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\">
        </a>
        <div class=\"card-body\">
          <h5 class=\"card-title\">";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo "</h5>
          <p class=\"card-text\">";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 11);
            echo "</p>
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  72 => 11,  68 => 10,  60 => 7,  56 => 6,  52 => 4,  48 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/featured.twig", "");
    }
}
