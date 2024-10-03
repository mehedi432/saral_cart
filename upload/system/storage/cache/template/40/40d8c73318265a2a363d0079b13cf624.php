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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_e0dd7ddc7e6d31af7af13ac0c6d17796 extends Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "  <div class=\"container\">
    <nav id=\"menu\" style=\"border-radius: 13px\" class=\"navbar navbar-expand-lg navbar-white bg-white\">
      <!-- Home Icon with White Background -->
      <a href=\"";
            // line 5
            echo ($context["home_url"] ?? null);
            echo "\" class=\"navbar-brand d-flex align-items-center me-3 text-secondary\">
        <i class=\"fa fa-home text-secondary\" style=\"background-color: white; padding: 5px; border-radius: 50%; font-size: 19px;\"></i>
      </a>
      
      <!-- Category Menu -->
      <div id=\"category\" class=\"d-block d-sm-block d-lg-none\">";
            // line 10
            echo ($context["text_category"] ?? null);
            echo "</div>
      <button style=\"border: none; outline: none; box-shadow: none;\" class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
        <i class=\"fa fa-align-right\" style=\"background-color: white; padding: 5px; border-radius: 50%; color: #333; font-size: 21px;\"></i>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
        <ul class=\"navbar-nav mx-auto\">
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 17
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "              <li class=\"nav-item dropdown\">
                <a href=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 19);
                    echo "\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
                    echo "</a>
                <div class=\"dropdown-menu\">
                  <div class=\"dropdown-inner d-flex flex-wrap justify-content-center\">
                    ";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 22), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 22)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 22), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 23
                        echo "                      <ul class=\"list-unstyled d-flex flex-column align-items-center\">
                        ";
                        // line 24
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 25
                            echo "                          <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 25);
                            echo "\" class=\"nav-link\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 25);
                            echo "</a></li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "                      </ul>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                  </div>
                  <a href=\"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                    echo "\" class=\"dropdown-item text-center\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    echo "</a>
                </div>
              </li>
            ";
                } else {
                    // line 34
                    echo "              <li class=\"nav-item\">
                <a href=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 35);
                    echo "\" class=\"nav-link\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                    echo "</a>
              </li>
            ";
                }
                // line 38
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </ul>
        
        <!-- Social Media Icons -->
        <div class=\"d-flex justify-content-center\">
          <a href=\"https://www.facebook.com\" class=\"me-2\" style=\"color: #4267B2;\" aria-label=\"Facebook\">
            <i class=\"fab fa-facebook text-secondary\" style=\"font-size: 21px;\"></i>
          </a>
          <a href=\"https://twitter.com\" class=\"me-2\" style=\"color: #1DA1F2;\" aria-label=\"Twitter\">
            <i class=\"fab fa-twitter text-secondary\" style=\"font-size: 21px;\"></i>
          </a>
          <a href=\"https://www.instagram.com\" style=\"color: #C13584;\" aria-label=\"Instagram\">
            <i class=\"fab fa-youtube text-secondary\" style=\"font-size: 21px;\"></i>
          </a>
        </div>
      </div>
    </nav>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 39,  133 => 38,  125 => 35,  122 => 34,  111 => 30,  108 => 29,  101 => 27,  90 => 25,  86 => 24,  83 => 23,  79 => 22,  71 => 19,  68 => 18,  65 => 17,  61 => 16,  52 => 10,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/menu.twig", "");
    }
}
