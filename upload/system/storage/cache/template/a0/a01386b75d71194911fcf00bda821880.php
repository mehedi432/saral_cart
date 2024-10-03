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
class __TwigTemplate_995be8548071e5c8aabd29c9a04f6c83 extends Template
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
  <div class=\"col-lg-3 mb-2 d-none d-lg-block\">
    <!-- Categories List -->
    <div class=\"categories-list mt-0\" style=\"width: 100%; padding: 0;\">
      <ul style=\"border-radius: 13px; margin: 0; padding: 0; list-style: none; border: 1px solid #ddd;\" class=\"list-group shadow-sm\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "          <li style=\"border: none; border-radius: 13px; padding: 10px 15px; display: flex; justify-content: space-between; align-items: center;\" class=\"list-group-item\">
            <a style=\"font-weight: bolder; color: #6c757d; text-decoration: none;\" href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
            echo "</a>
            <i class=\"fa-solid fa-chevron-right\" style=\"font-size: 1rem;\"></i>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ul>
    </div>
  </div>

  <!-- Slider -->
  <div class=\"col-md-9\">
    <div id=\"carousel-banner-";
        // line 18
        echo ($context["module"] ?? null);
        echo "\" style=\"border-radius: 13px; overflow: hidden;\" class=\"carousel slide";
        if ((($context["effect"] ?? null) == "fade")) {
            echo " carousel-fade";
        }
        echo "\" data-bs-ride=\"carousel\">
      ";
        // line 19
        if ((($context["indicators"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 20
            echo "        <div class=\"carousel-indicators\">
          ";
            // line 21
            $context["banner_row"] = 0;
            // line 22
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 23
                echo "            <button type=\"button\" data-bs-target=\"#carousel-banner-";
                echo ($context["module"] ?? null);
                echo "\" data-bs-slide-to=\"";
                echo ($context["banner_row"] ?? null);
                echo "\"";
                if ((($context["banner_row"] ?? null) == 0)) {
                    echo " class=\"active\"";
                }
                echo " style=\"background-color: #000; border-radius: 50%; width: 10px; height: 10px;\"></button>
            ";
                // line 24
                $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                // line 25
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
      ";
        }
        // line 28
        echo "      <div class=\"carousel-inner\">
        ";
        // line 29
        $context["banner_row"] = 0;
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 31
            echo "          <div class=\"carousel-item";
            if ((($context["banner_row"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">
            <div class=\"row justify-content-center\">
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 34
                echo "                <div class=\"col-";
                echo twig_round((12 / ($context["items"] ?? null)));
                echo "\" style=\"text-align: center; padding: 0;\">
                  ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 36);
                    echo "\">
                      <img src=\"";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 37);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 37);
                    echo "\" style=\"width: 100%; height: auto; max-height: 400px; object-fit: cover; border-radius: 0;\" />
                    </a>
                  ";
                } else {
                    // line 40
                    echo "                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 40);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 40);
                    echo "\" style=\"width: 100%; height: auto; max-height: 400px; object-fit: cover; border-radius: 0;\" />
                  ";
                }
                // line 42
                echo "                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div>
          </div>
          ";
            // line 46
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </div>
      ";
        // line 49
        if ((($context["controls"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 50
            echo "        <button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-";
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"prev\" style=\"background-color: rgba(0, 0, 0, 0.5);\"><span class=\"fa-solid fa-chevron-left\" style=\"font-size: 2rem; color: #fff;\"></span></button>
        <button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-";
            // line 51
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"next\" style=\"background-color: rgba(0, 0, 0, 0.5);\"><span class=\"fa-solid fa-chevron-right\" style=\"font-size: 2rem; color: #fff;\"></span></button>
      ";
        }
        // line 53
        echo "    </div>
  </div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function () {
    new bootstrap.Carousel(document.querySelector('#carousel-banner-";
        // line 59
        echo ($context["module"] ?? null);
        echo "'), {
        ride: 'carousel',
        interval: ";
        // line 61
        echo twig_escape_filter($this->env, ($context["interval"] ?? null), "js");
        echo ",
        wrap: true
    });
});
</script>";
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
        return array (  211 => 61,  206 => 59,  198 => 53,  193 => 51,  188 => 50,  186 => 49,  183 => 48,  177 => 47,  175 => 46,  171 => 44,  164 => 42,  156 => 40,  148 => 37,  143 => 36,  141 => 35,  136 => 34,  132 => 33,  124 => 31,  119 => 30,  117 => 29,  114 => 28,  110 => 26,  104 => 25,  102 => 24,  91 => 23,  86 => 22,  84 => 21,  81 => 20,  79 => 19,  71 => 18,  63 => 12,  51 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/banner.twig", "");
    }
}
