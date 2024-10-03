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
class __TwigTemplate_145c2560d3e16cd09032f9a28b7bb325 extends Template
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
<!-- Vertical Navbar -->
  <nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar-vertical\">
    <div class=\"container-fluid flex-column\">
      <a class=\"navbar-brand\" href=\"#\">Brand</a>
      <div class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav flex-column\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">About</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              Services
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
              <li><a class=\"dropdown-item\" href=\"#\">Web Design</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">SEO</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Marketing</a></li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
</div>
  <div class=\"col-md-9\">
  \t

<div id=\"carousel-banner-";
        // line 38
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide";
        if ((($context["effect"] ?? null) == "fade")) {
            echo " carousel-fade";
        }
        echo "\" data-bs-ride=\"carousel\">
  ";
        // line 39
        if ((($context["indicators"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 40
            echo "    <div class=\"carousel-indicators\">
      ";
            // line 41
            $context["banner_row"] = 0;
            // line 42
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 43
                echo "        <button type=\"button\" data-bs-target=\"#carousel-banner-";
                echo ($context["module"] ?? null);
                echo "\" data-bs-slide-to=\"";
                echo ($context["banner_row"] ?? null);
                echo "\"";
                if ((($context["banner_row"] ?? null) == 0)) {
                    echo " class=\"active\"";
                }
                echo "></button>
        ";
                // line 44
                $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                // line 45
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    </div>
  ";
        }
        // line 48
        echo "  <div class=\"carousel-inner\">
    ";
        // line 49
        $context["banner_row"] = 0;
        // line 50
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 51
            echo "      <div class=\"carousel-item";
            if ((($context["banner_row"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">
        <div class=\"row justify-content-center\">
          ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 54
                echo "            <div class=\"col-";
                echo twig_round((12 / ($context["items"] ?? null)));
                echo " text-center\">
              ";
                // line 55
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 55)) {
                    // line 56
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 56);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 56);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 56);
                    echo "\" class=\"img-fluid\"/></a>
              ";
                } else {
                    // line 58
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 58);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 58);
                    echo "\" class=\"img-fluid\"/>
              ";
                }
                // line 60
                echo "            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        </div>
      </div>
      ";
            // line 64
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 65
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "  </div>
  ";
        // line 67
        if ((($context["controls"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 68
            echo "    <button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-";
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"prev\"><span class=\"fa-solid fa-chevron-left\"></span></button>
    <button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-";
            // line 69
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"next\"><span class=\"fa-solid fa-chevron-right\"></span></button>
  ";
        }
        // line 71
        echo "</div>
<script type=\"text/javascript\"><!--
\$(document).ready(function () {
    new bootstrap.Carousel(document.querySelector('#carousel-banner-";
        // line 74
        echo ($context["module"] ?? null);
        echo "'), {
        ride: 'carousel',
        interval: ";
        // line 76
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
        return array (  210 => 76,  205 => 74,  200 => 71,  195 => 69,  190 => 68,  188 => 67,  185 => 66,  179 => 65,  177 => 64,  173 => 62,  166 => 60,  158 => 58,  148 => 56,  146 => 55,  141 => 54,  137 => 53,  129 => 51,  124 => 50,  122 => 49,  119 => 48,  115 => 46,  109 => 45,  107 => 44,  96 => 43,  91 => 42,  89 => 41,  86 => 40,  84 => 39,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/banner.twig", "");
    }
}
