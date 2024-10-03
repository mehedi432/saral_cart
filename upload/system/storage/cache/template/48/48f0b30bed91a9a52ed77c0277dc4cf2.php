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

/* extension/opencart/catalog/view/template/module/banner.twig */
class __TwigTemplate_21f621a9a6e4eeb6c6d9ecbccc5d21ca extends Template
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
        echo "<div class=row>
<div class=\"col-md-3\">

</div>
  <div class=\"col-md-9\">\t

    <div id=\"carousel-banner-";
        // line 7
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide";
        if ((($context["effect"] ?? null) == "fade")) {
            echo " carousel-fade";
        }
        echo "\" data-bs-ride=\"carousel\">
      ";
        // line 8
        if ((($context["indicators"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 9
            echo "        <div class=\"carousel-indicators\">
          ";
            // line 10
            $context["banner_row"] = 0;
            // line 11
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 12
                echo "            <button type=\"button\" data-bs-target=\"#carousel-banner-";
                echo ($context["module"] ?? null);
                echo "\" data-bs-slide-to=\"";
                echo ($context["banner_row"] ?? null);
                echo "\"";
                if ((($context["banner_row"] ?? null) == 0)) {
                    echo " class=\"active\"";
                }
                echo "></button>
            ";
                // line 13
                $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                // line 14
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </div>
      ";
        }
        // line 17
        echo "      <div class=\"carousel-inner\">
        ";
        // line 18
        $context["banner_row"] = 0;
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 20
            echo "          <div class=\"carousel-item";
            if ((($context["banner_row"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">
            <div class=\"row justify-content-center\">
              ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 23
                echo "                <div class=\"col-";
                echo twig_round((12 / ($context["items"] ?? null)));
                echo " text-center\">
                  ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 25);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 25);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 25);
                    echo "\" class=\"img-fluid\"/></a>
                  ";
                } else {
                    // line 27
                    echo "                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 27);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 27);
                    echo "\" class=\"img-fluid\"/>
                  ";
                }
                // line 29
                echo "                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </div>
          </div>
          ";
            // line 33
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 34
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      </div>
      ";
        // line 36
        if ((($context["controls"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 37
            echo "        <button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-";
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"prev\"><span class=\"fa-solid fa-chevron-left\"></span></button>
        <button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-";
            // line 38
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"next\"><span class=\"fa-solid fa-chevron-right\"></span></button>
      ";
        }
        // line 40
        echo "    </div>
    <script type=\"text/javascript\"><!--
    \$(document).ready(function () {
        new bootstrap.Carousel(document.querySelector('#carousel-banner-";
        // line 43
        echo ($context["module"] ?? null);
        echo "'), {
            ride: 'carousel',
            interval: ";
        // line 45
        echo twig_escape_filter($this->env, ($context["interval"] ?? null), "js");
        echo ",
            wrap: true
        });
    });
    //--></script>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  174 => 43,  169 => 40,  164 => 38,  159 => 37,  157 => 36,  154 => 35,  148 => 34,  146 => 33,  142 => 31,  135 => 29,  127 => 27,  117 => 25,  115 => 24,  110 => 23,  106 => 22,  98 => 20,  93 => 19,  91 => 18,  88 => 17,  84 => 15,  78 => 14,  76 => 13,  65 => 12,  60 => 11,  58 => 10,  55 => 9,  53 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/banner.twig", "");
    }
}
