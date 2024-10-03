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

/* admin/view/template/sale/order_shipping.twig */
class __TwigTemplate_fd53d6238245d789c6a467c78129a90b extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\"/>
  <link href=\"";
        // line 7
        echo ($context["bootstrap_css"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 8
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"";
        // line 9
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 10
        echo ($context["bootstrap_js"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 11
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            echo "    <div style=\"page-break-after: always;\">
      <h1>";
            // line 17
            echo ($context["text_picklist"] ?? null);
            echo " #";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 17);
            echo "</h1>

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 23
            echo ($context["text_invoice"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 25)) {
                // line 26
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 26);
                echo "
              ";
            } else {
                // line 28
                echo "                &nbsp;
              ";
            }
            // line 30
            echo "            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 36
            echo ($context["text_order_id"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 38);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 45
            echo ($context["text_date_added"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 47);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 54
            echo ($context["text_store"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 56);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 63
            echo ($context["text_store_telephone"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 65);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 72
            echo ($context["text_store_email"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 74);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 81
            echo ($context["text_website"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 83);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 90
            echo ($context["text_shipping_method"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 92);
            echo "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 99
            echo ($context["text_customer_email"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 101)) {
                // line 102
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 102);
                echo "
              ";
            } else {
                // line 104
                echo "                &nbsp;
              ";
            }
            // line 106
            echo "            </div>
          </div>
        </div>

        ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 110)) {
                // line 111
                echo "        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
                // line 113
                echo ($context["text_customer_telephone"] ?? null);
                echo "</strong>
              <br/>
              ";
                // line 115
                if (twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 115)) {
                    // line 116
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 116);
                    echo "
              ";
                } else {
                    // line 118
                    echo "                &nbsp;
              ";
                }
                // line 120
                echo "            </div>
          </div>
        </div>
        ";
            }
            // line 124
            echo "
      </div>

      <div class=\"row row-cols-1 row-cols-sm-2\">
        <div class=\"col\">

          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 131
            echo ($context["text_shipping_address"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 133
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 133)) {
                // line 134
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 134);
                echo "
              ";
            } else {
                // line 136
                echo "                &nbsp;
              ";
            }
            // line 138
            echo "            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 144
            echo ($context["text_store_address"] ?? null);
            echo "</strong>
              <br/>
              ";
            // line 146
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 146);
            echo "
            </div>
          </div>
        </div>

      </div>

      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td><b>";
            // line 156
            echo ($context["column_location"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 157
            echo ($context["column_reference"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 158
            echo ($context["column_product"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 159
            echo ($context["column_weight"] ?? null);
            echo "</b></td>
            <td><b>";
            // line 160
            echo ($context["column_model"] ?? null);
            echo "</b></td>
            <td class=\"text-end\"><b>";
            // line 161
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
          </tr>
        </thead>
        <tbody>
          ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 165));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 166
                echo "            <tr>
              <td>";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["product"], "location", [], "any", false, false, false, 167);
                echo "</td>
              <td>
                ";
                // line 169
                if (twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 169)) {
                    // line 170
                    echo "                  ";
                    echo ($context["text_sku"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 170);
                    echo "
                  <br/>
                ";
                }
                // line 173
                echo "
                ";
                // line 174
                if (twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 174)) {
                    // line 175
                    echo "                  ";
                    echo ($context["text_upc"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 175);
                    echo "
                  <br/>
                ";
                }
                // line 178
                echo "
                ";
                // line 179
                if (twig_get_attribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "                  ";
                    echo ($context["text_ean"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 180);
                    echo "
                  <br/>
                ";
                }
                // line 183
                echo "
                ";
                // line 184
                if (twig_get_attribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 184)) {
                    // line 185
                    echo "                  ";
                    echo ($context["text_jan"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 185);
                    echo "
                  <br/>
                ";
                }
                // line 188
                echo "
                ";
                // line 189
                if (twig_get_attribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 189)) {
                    // line 190
                    echo "                  ";
                    echo ($context["text_isbn"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 190);
                    echo "
                  <br/>
                ";
                }
                // line 193
                echo "
                ";
                // line 194
                if (twig_get_attribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 194)) {
                    // line 195
                    echo "                  ";
                    echo ($context["text_mpn"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 195);
                    echo "
                  <br/>
                ";
                }
                // line 198
                echo "              </td>
              <td>";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 199);
                echo "

                ";
                // line 201
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 201));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 202
                    echo "                  <br/>
                  <small> - ";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 203);
                    echo "</small>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "
                ";
                // line 206
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 206)) {
                    // line 207
                    echo "                  <br/>
                  <small> - ";
                    // line 208
                    echo ($context["text_points"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 208);
                    echo "</small>
                ";
                }
                // line 210
                echo "
              </td>
              <td>";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 212);
                echo "</td>
              <td>";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 213);
                echo "</td>
              <td class=\"text-end\">";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 214);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "        </tbody>
      </table>
      ";
            // line 219
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 219)) {
                // line 220
                echo "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td><b>";
                // line 223
                echo ($context["text_comment"] ?? null);
                echo "</b></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 228);
                echo "</td>
            </tr>
          </tbody>
        </table>
      ";
            }
            // line 233
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 235,  538 => 233,  530 => 228,  522 => 223,  517 => 220,  515 => 219,  511 => 217,  502 => 214,  498 => 213,  494 => 212,  490 => 210,  483 => 208,  480 => 207,  478 => 206,  475 => 205,  465 => 203,  462 => 202,  458 => 201,  453 => 199,  450 => 198,  442 => 195,  440 => 194,  437 => 193,  428 => 190,  426 => 189,  423 => 188,  414 => 185,  412 => 184,  409 => 183,  400 => 180,  398 => 179,  395 => 178,  386 => 175,  384 => 174,  381 => 173,  372 => 170,  370 => 169,  365 => 167,  362 => 166,  358 => 165,  351 => 161,  347 => 160,  343 => 159,  339 => 158,  335 => 157,  331 => 156,  318 => 146,  313 => 144,  305 => 138,  301 => 136,  295 => 134,  293 => 133,  288 => 131,  279 => 124,  273 => 120,  269 => 118,  263 => 116,  261 => 115,  256 => 113,  252 => 111,  250 => 110,  244 => 106,  240 => 104,  234 => 102,  232 => 101,  227 => 99,  217 => 92,  212 => 90,  202 => 83,  197 => 81,  187 => 74,  182 => 72,  172 => 65,  167 => 63,  157 => 56,  152 => 54,  142 => 47,  137 => 45,  127 => 38,  122 => 36,  114 => 30,  110 => 28,  104 => 26,  102 => 25,  97 => 23,  86 => 17,  83 => 16,  79 => 15,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_shipping.twig", "/opt/lampp/htdocs/upload/admin/view/template/sale/order_shipping.twig");
    }
}
