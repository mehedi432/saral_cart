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
class __TwigTemplate_496a61e3b1e95faff35c1a9ec76aebff extends Template
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
  <div class=\"col-md-3\">
  <!-- Categories List -->
  <div class=\"categories-list mt-4\">
    <h4>Categories</h4>
    <ul class=\"list-unstyled\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
  </div>
  

  </div>
  <div class=\"col-md-9\">
    <div id=\"carousel-banner-";
        // line 16
        echo ($context["module"] ?? null);
        echo "\" style=\"border-radius: 13px 0px 13px 0px;\" class=\"carousel slide";
        if ((($context["effect"] ?? null) == "fade")) {
            echo " carousel-fade";
        }
        echo "\" data-bs-ride=\"carousel\">
    ";
        // line 17
        if ((($context["indicators"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 18
            echo "      <div class=\"carousel-indicators\">
        ";
            // line 19
            $context["banner_row"] = 0;
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 21
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
                // line 22
                $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "      </div>
    ";
        }
        // line 26
        echo "    <div class=\"carousel-inner\">
      ";
        // line 27
        $context["banner_row"] = 0;
        // line 28
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 29
            echo "        <div class=\"carousel-item";
            if ((($context["banner_row"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">
          <div class=\"row justify-content-center\">
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 32
                echo "              <div class=\"col-";
                echo twig_round((12 / ($context["items"] ?? null)));
                echo " text-center\">
                ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 34);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 34);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 34);
                    echo "\" class=\"img-fluid\"/></a>
                ";
                } else {
                    // line 36
                    echo "                  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 36);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 36);
                    echo "\" class=\"img-fluid\"/>
                ";
                }
                // line 38
                echo "              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          </div>
        </div>
        ";
            // line 42
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 43
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
    ";
        // line 45
        if ((($context["controls"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 46
            echo "      <button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-";
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"prev\"><span class=\"fa-solid fa-chevron-left\"></span></button>
      <button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-";
            // line 47
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"next\"><span class=\"fa-solid fa-chevron-right\"></span></button>
    ";
        }
        // line 49
        echo "  </div>

  </div>
</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function () {
    new bootstrap.Carousel(document.querySelector('#carousel-banner-";
        // line 56
        echo ($context["module"] ?? null);
        echo "'), {
        ride: 'carousel',
        interval: ";
        // line 58
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
        return array (  206 => 58,  201 => 56,  192 => 49,  187 => 47,  182 => 46,  180 => 45,  177 => 44,  171 => 43,  169 => 42,  165 => 40,  158 => 38,  150 => 36,  140 => 34,  138 => 33,  133 => 32,  129 => 31,  121 => 29,  116 => 28,  114 => 27,  111 => 26,  107 => 24,  101 => 23,  99 => 22,  88 => 21,  83 => 20,  81 => 19,  78 => 18,  76 => 17,  68 => 16,  60 => 10,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/banner.twig", "");
    }
}
