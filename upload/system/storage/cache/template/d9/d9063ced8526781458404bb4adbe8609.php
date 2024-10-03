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
class __TwigTemplate_b2759c87ce3684e2b19f9c118ce47045 extends Template
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
";
        // line 12
        echo "<ul style=\"border: 0px;\" class=\"list-group shadow-sm\">
    <li style=\"border: 0px;\" class=\"list-group-item \">New <span class=\"badge\">12</span></li>
    <li style=\"border: 0px;\" class=\"list-group-item\">Deleted <span class=\"badge\">5</span></li>
    <li style=\"border: 0px;\" class=\"list-group-item\">Warnings <span class=\"badge\">3</span></li>
  <li style=\"border: 0px;\" class=\"list-group-item\">Deleted <span class=\"badge\">5</span></li>
    <li style=\"border: 0px;\" class=\"list-group-item\">Warnings <span class=\"badge\">3</span></li>
  <li style=\"border: 0px;\" class=\"list-group-item\">Deleted <span class=\"badge\">5</span></li>
    <li style=\"border: 0px;\" class=\"list-group-item\">Warnings <span class=\"badge\">3</span></li>
  </ul>

  </div>
  <div class=\"col-md-9\">
    <div id=\"carousel-banner-";
        // line 24
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide";
        if ((($context["effect"] ?? null) == "fade")) {
            echo " carousel-fade";
        }
        echo "\" data-bs-ride=\"carousel\">
    ";
        // line 25
        if ((($context["indicators"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 26
            echo "      <div class=\"carousel-indicators\">
        ";
            // line 27
            $context["banner_row"] = 0;
            // line 28
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 29
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
                // line 30
                $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                // line 31
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "      </div>
    ";
        }
        // line 34
        echo "    <div class=\"carousel-inner\">
      ";
        // line 35
        $context["banner_row"] = 0;
        // line 36
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 37
            echo "        <div class=\"carousel-item";
            if ((($context["banner_row"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">
          <div class=\"row justify-content-center\">
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 40
                echo "              <div class=\"col-";
                echo twig_round((12 / ($context["items"] ?? null)));
                echo " text-center\">
                ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 42);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 42);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 42);
                    echo "\" class=\"img-fluid\"/></a>
                ";
                } else {
                    // line 44
                    echo "                  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 44);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 44);
                    echo "\" class=\"img-fluid\"/>
                ";
                }
                // line 46
                echo "              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "          </div>
        </div>
        ";
            // line 50
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 51
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
    ";
        // line 53
        if ((($context["controls"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 54
            echo "      <button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-";
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"prev\"><span class=\"fa-solid fa-chevron-left\"></span></button>
      <button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-";
            // line 55
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"next\"><span class=\"fa-solid fa-chevron-right\"></span></button>
    ";
        }
        // line 57
        echo "  </div>

  </div>
</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function () {
    new bootstrap.Carousel(document.querySelector('#carousel-banner-";
        // line 64
        echo ($context["module"] ?? null);
        echo "'), {
        ride: 'carousel',
        interval: ";
        // line 66
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
        return array (  194 => 66,  189 => 64,  180 => 57,  175 => 55,  170 => 54,  168 => 53,  165 => 52,  159 => 51,  157 => 50,  153 => 48,  146 => 46,  138 => 44,  128 => 42,  126 => 41,  121 => 40,  117 => 39,  109 => 37,  104 => 36,  102 => 35,  99 => 34,  95 => 32,  89 => 31,  87 => 30,  76 => 29,  71 => 28,  69 => 27,  66 => 26,  64 => 25,  56 => 24,  42 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/banner.twig", "");
    }
}
