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
class __TwigTemplate_f885cf9a31c7b866412677f2ee869bff extends Template
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
  <div class=\"col-md-3\" style=\"padding: 0;\">
    <!-- Card with Vertical Navbar -->
    <div class=\"card\" style=\"background-color: transparent; border: none; box-shadow: none; height: 100%;\">
      <div class=\"card-body\" style=\"padding: 0;\">
        <nav class=\"navbar navbar-light\" style=\"height: 100%; display: flex; flex-direction: column;\">
          <a class=\"navbar-brand\" href=\"#\">Brand</a>
          <ul class=\"nav flex-column\" style=\"width: 100%;\">
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
        </nav>
      </div>
    </div>
  </div>
  <div class=\"col-md-9\">
    <div id=\"carousel-banner-";
        // line 34
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide";
        if ((($context["effect"] ?? null) == "fade")) {
            echo " carousel-fade";
        }
        echo "\" data-bs-ride=\"carousel\">
      ";
        // line 35
        if ((($context["indicators"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 36
            echo "        <div class=\"carousel-indicators\">
          ";
            // line 37
            $context["banner_row"] = 0;
            // line 38
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 39
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
                // line 40
                $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                // line 41
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </div>
      ";
        }
        // line 44
        echo "      <div class=\"carousel-inner\">
        ";
        // line 45
        $context["banner_row"] = 0;
        // line 46
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 47
            echo "          <div class=\"carousel-item";
            if ((($context["banner_row"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">
            <div class=\"row justify-content-center\">
              ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 50
                echo "                <div class=\"col-";
                echo twig_round((12 / ($context["items"] ?? null)));
                echo " text-center\">
                  ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 52);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 52);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 52);
                    echo "\" class=\"img-fluid\"/></a>
                  ";
                } else {
                    // line 54
                    echo "                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 54);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 54);
                    echo "\" class=\"img-fluid\"/>
                  ";
                }
                // line 56
                echo "                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </div>
          </div>
          ";
            // line 60
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 61
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "      </div>
      ";
        // line 63
        if ((($context["controls"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 64
            echo "        <button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-";
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"prev\"><span class=\"fa-solid fa-chevron-left\"></span></button>
        <button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-";
            // line 65
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"next\"><span class=\"fa-solid fa-chevron-right\"></span></button>
      ";
        }
        // line 67
        echo "    </div>
    <script type=\"text/javascript\">
      \$(document).ready(function () {
          new bootstrap.Carousel(document.querySelector('#carousel-banner-";
        // line 70
        echo ($context["module"] ?? null);
        echo "'), {
              ride: 'carousel',
              interval: ";
        // line 72
        echo twig_escape_filter($this->env, ($context["interval"] ?? null), "js");
        echo ",
              wrap: true
          });
      });
    </script>
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
        return array (  206 => 72,  201 => 70,  196 => 67,  191 => 65,  186 => 64,  184 => 63,  181 => 62,  175 => 61,  173 => 60,  169 => 58,  162 => 56,  154 => 54,  144 => 52,  142 => 51,  137 => 50,  133 => 49,  125 => 47,  120 => 46,  118 => 45,  115 => 44,  111 => 42,  105 => 41,  103 => 40,  92 => 39,  87 => 38,  85 => 37,  82 => 36,  80 => 35,  72 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/banner.twig", "");
    }
}
