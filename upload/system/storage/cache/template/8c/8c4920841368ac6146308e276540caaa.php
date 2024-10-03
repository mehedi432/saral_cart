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
class __TwigTemplate_5829c53ade647c366c8c29158d7a2abf extends Template
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
        echo "<div class=\"row\">
  <div class=\"col-md-3\"></div>
  <div class=\"col-md-9\">
    <div id=\"carousel-banner-";
        // line 4
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide";
        if ((($context["effect"] ?? null) == "fade")) {
            echo " carousel-fade";
        }
        echo "\" data-bs-ride=\"carousel\">
    ";
        // line 5
        if ((($context["indicators"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 6
            echo "      <div class=\"carousel-indicators\">
        ";
            // line 7
            $context["banner_row"] = 0;
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 9
                echo "          <button type=\"button\" data-bs-target=\"#carousel-banner-";
                echo ($context["module"] ?? null);
                echo "\" data-bs-slide-to=\"";
                echo ($context["banner_row"] ?? null);
                echo "\"";
                if ((($context["banner_row"] ?? null) == 0)) {
                    echo " class=\"active\"";
                }
                echo "></button>
          ";
                // line 10
                $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "      </div>
    ";
        }
        // line 14
        echo "    <div class=\"carousel-inner\">
      ";
        // line 15
        $context["banner_row"] = 0;
        // line 16
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 17
            echo "        <div class=\"carousel-item";
            if ((($context["banner_row"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">
          <div class=\"row justify-content-center\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 20
                echo "              <div class=\"col-";
                echo twig_round((12 / ($context["items"] ?? null)));
                echo " text-center\">
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 22);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 22);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 22);
                    echo "\" class=\"img-fluid\"/></a>
                ";
                } else {
                    // line 24
                    echo "                  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 24);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 24);
                    echo "\" class=\"img-fluid\"/>
                ";
                }
                // line 26
                echo "              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "          </div>
        </div>
        ";
            // line 30
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 31
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
    ";
        // line 33
        if ((($context["controls"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 34
            echo "      <button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-";
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"prev\"><span class=\"fa-solid fa-chevron-left\"></span></button>
      <button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-";
            // line 35
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"next\"><span class=\"fa-solid fa-chevron-right\"></span></button>
    ";
        }
        // line 37
        echo "  </div>

  </div>
</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function () {
    new bootstrap.Carousel(document.querySelector('#carousel-banner-";
        // line 44
        echo ($context["module"] ?? null);
        echo "'), {
        ride: 'carousel',
        interval: ";
        // line 46
        echo twig_escape_filter($this->env, ($context["interval"] ?? null), "js");
        echo ",
        wrap: true
    });
});
//--></script>";
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
        return array (  180 => 46,  175 => 44,  166 => 37,  161 => 35,  156 => 34,  154 => 33,  151 => 32,  145 => 31,  143 => 30,  139 => 28,  132 => 26,  124 => 24,  114 => 22,  112 => 21,  107 => 20,  103 => 19,  95 => 17,  90 => 16,  88 => 15,  85 => 14,  81 => 12,  75 => 11,  73 => 10,  62 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/banner.twig", "");
    }
}
