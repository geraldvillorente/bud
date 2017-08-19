<?php

/* themes/bud/templates/layout/page.html.twig */
class __TwigTemplate_f4d5442b1b8567fa1ae2d561932ab4576a592c47cb39ecf2f4315ac79d71f7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 58, "set" => 59);
        $filters = array();
        $functions = array("attach_library" => 48);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 47
        echo "
";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bud/layouts"), "html", null, true));
        echo "
<div id=\"featured-bg-outer\">
  <div id=\"featured-bg\">
  <div id=\"language-switcher\">";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "language_switcher", array()), "html", null, true));
        echo "</div>
    <div class=\"layout-center\">
      <header class=\"header\" role=\"banner\">
        ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
        ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "
      </header>

      ";
        // line 58
        if ( !($context["is_front"] ?? null)) {
            // line 59
            echo "        ";
            $context["page_node_background"] = "node_background";
            // line 60
            echo "        <div id=\"featured-outer\" class=\"node-page\">
          <div id=\"featured\">
            <div id=\"featured-inner\">
              <div id=\"featured-sub-inner\">
                ";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true));
            echo "
                ";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 71
        echo "
      <div class=\"";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_node_background"] ?? null), "html", null, true));
        echo "\">
        <div class=\"layout-3col\">
            ";
        // line 75
        echo "            ";
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) {
            // line 76
            echo "              ";
            $context["content_class"] = "layout-3col__right-content";
            // line 77
            echo "              ";
            $context["sidebar_first_class"] = "layout-3col__first-left-sidebar";
            // line 78
            echo "              ";
            $context["sidebar_second_class"] = "layout-3col__second-left-sidebar";
            // line 79
            echo "            ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 80
            echo "              ";
            $context["content_class"] = "layout-3col__left-content";
            // line 81
            echo "              ";
            $context["sidebar_first_class"] = "";
            // line 82
            echo "              ";
            $context["sidebar_second_class"] = "layout-3col__right-sidebar";
            // line 83
            echo "            ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 84
            echo "              ";
            $context["content_class"] = "layout-3col__right-content";
            // line 85
            echo "              ";
            $context["sidebar_first_class"] = "layout-3col__left-sidebar";
            // line 86
            echo "              ";
            $context["sidebar_second_class"] = "";
            // line 87
            echo "            ";
        } else {
            // line 88
            echo "              ";
            $context["content_class"] = "layout-3col__full";
            // line 89
            echo "              ";
            $context["sidebar_first_class"] = "";
            // line 90
            echo "              ";
            $context["sidebar_second_class"] = "";
            // line 91
            echo "            ";
        }
        // line 92
        echo "
            ";
        // line 94
        echo "            ";
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) && $this->getAttribute(($context["page"] ?? null), "footer_second", array())) && $this->getAttribute(($context["page"] ?? null), "footer_third", array()))) {
            // line 95
            echo "              ";
            $context["footer_first_class"] = "layout-3col__col-1";
            // line 96
            echo "              ";
            $context["footer_second_class"] = "layout-3col__col-2";
            // line 97
            echo "              ";
            $context["footer_third_class"] = "layout-3col__col-3";
            // line 98
            echo "            ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
            // line 99
            echo "              ";
            $context["footer_first_class"] = "layout-3col__col-1";
            // line 100
            echo "              ";
            $context["footer_second_class"] = "";
            // line 101
            echo "              ";
            $context["footer_third_class"] = "";
            // line 102
            echo "            ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
            // line 103
            echo "              ";
            $context["footer_first_class"] = "";
            // line 104
            echo "              ";
            $context["footer_second_class"] = "layout-3col__col-2";
            // line 105
            echo "              ";
            $context["footer_third_class"] = "";
            // line 106
            echo "            ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
            // line 107
            echo "              ";
            $context["footer_first_class"] = "";
            // line 108
            echo "              ";
            $context["footer_second_class"] = "";
            // line 109
            echo "              ";
            $context["footer_third_class"] = "layout-3col__col-3";
            // line 110
            echo "            ";
        }
        // line 111
        echo "
            ";
        // line 113
        echo "            ";
        if ((($this->getAttribute(($context["page"] ?? null), "content_first", array()) && $this->getAttribute(($context["page"] ?? null), "content_second", array())) && $this->getAttribute(($context["page"] ?? null), "content_third", array()))) {
            // line 114
            echo "              ";
            $context["content_first_class"] = "layout-3col__col-1";
            // line 115
            echo "              ";
            $context["content_second_class"] = "layout-3col__col-2";
            // line 116
            echo "              ";
            $context["content_third_class"] = "layout-3col__col-3";
            // line 117
            echo "            ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "content_first", array())) {
            // line 118
            echo "              ";
            $context["content_first_class"] = "layout-3col__col-1";
            // line 119
            echo "              ";
            $context["content_second_class"] = "";
            // line 120
            echo "              ";
            $context["content_third_class"] = "";
            // line 121
            echo "            ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "content_second", array())) {
            // line 122
            echo "              ";
            $context["content_first_class"] = "";
            // line 123
            echo "              ";
            $context["content_second_class"] = "layout-3col__col-2";
            // line 124
            echo "              ";
            $context["content_third_class"] = "";
            // line 125
            echo "            ";
        } elseif ($this->getAttribute(($context["page"] ?? null), "content_third", array())) {
            // line 126
            echo "              ";
            $context["content_first_class"] = "";
            // line 127
            echo "              ";
            $context["content_second_class"] = "";
            // line 128
            echo "              ";
            $context["content_third_class"] = "layout-3col__col-3";
            // line 129
            echo "            ";
        }
        // line 130
        echo "
            ";
        // line 131
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 132
            echo "              <div class=\"layout-3col__full\">
                ";
            // line 133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 136
        echo "
            <main class=\"";
        // line 137
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_class"] ?? null), "html", null, true));
        echo "\" role=\"main\">

              ";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
              <a href=\"#skip-link\" class=\"visually-hidden visually-hidden--focusable\" id=\"main-content\">Back to top</a>";
        // line 141
        echo "              ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
              ";
        // line 142
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
            </main>

            ";
        // line 145
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 146
            echo "              <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_class"] ?? null), "html", null, true));
            echo "\" role=\"complementary\">
                ";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </aside>
            ";
        }
        // line 150
        echo "
            ";
        // line 151
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 152
            echo "              <div class=\"outer-aside\">
                <aside class=\"";
            // line 153
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_class"] ?? null), "html", null, true));
            echo "\" role=\"complementary\">
                  ";
            // line 154
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
                </aside>
              </div>
            ";
        }
        // line 158
        echo "        </div>
      </div>
    </div>";
        // line 161
        echo "  </div>
</div>

";
        // line 164
        if ($this->getAttribute(($context["page"] ?? null), "featured_content", array())) {
            // line 165
            echo "  <div id=\"featured-outer\">
    <div id=\"featured\">
      <div id=\"featured-inner\">
        <div id=\"featured-sub-inner\">
            ";
            // line 169
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_content", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 175
        echo "
";
        // line 176
        if ((($this->getAttribute(($context["page"] ?? null), "content_first", array()) || $this->getAttribute(($context["page"] ?? null), "content_second", array())) || $this->getAttribute(($context["page"] ?? null), "content_third", array()))) {
            // line 177
            echo "  <div class=\"content-wrapper\">
    ";
            // line 178
            if ($this->getAttribute(($context["page"] ?? null), "content_first", array())) {
                // line 179
                echo "      <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_first_class"] ?? null), "html", null, true));
                echo "\" role=\"complementary\">
        ";
                // line 180
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_first", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 183
            echo "
    ";
            // line 184
            if ($this->getAttribute(($context["page"] ?? null), "content_second", array())) {
                // line 185
                echo "      <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_second_class"] ?? null), "html", null, true));
                echo "\" role=\"complementary\">
        ";
                // line 186
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_second", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 189
            echo "
    ";
            // line 190
            if ($this->getAttribute(($context["page"] ?? null), "content_third", array())) {
                // line 191
                echo "      <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_third_class"] ?? null), "html", null, true));
                echo "\" role=\"complementary\">
        ";
                // line 192
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_third", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 195
            echo "  </div>
";
        }
        // line 197
        echo "
";
        // line 198
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 199
            echo "  <div id=\"featured-footer\">
    ";
            // line 200
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 203
        echo "
";
        // line 204
        if (((($this->getAttribute(($context["page"] ?? null), "footer", array()) || $this->getAttribute(($context["page"] ?? null), "footer_first", array())) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array()))) {
            // line 205
            echo "  <div id=\"bud-footer\">
    <div id=\"bud-footer-inner\">
      <div id=\"bud-footer-sub-inner\">
        <div class=\"bud-footer-wrapper\">
          ";
            // line 209
            if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
                // line 210
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
                echo "
          ";
            }
            // line 212
            echo "
          ";
            // line 213
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 214
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_class"] ?? null), "html", null, true));
                echo "\" role=\"complementary\">
              ";
                // line 215
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 218
            echo "
          ";
            // line 219
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 220
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_class"] ?? null), "html", null, true));
                echo "\" role=\"complementary\">
              ";
                // line 221
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 224
            echo "
          ";
            // line 225
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 226
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_class"] ?? null), "html", null, true));
                echo "\" role=\"complementary\">
              ";
                // line 227
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 230
            echo "        </div>
      </div>
    </div>
  </div>
";
        }
        // line 235
        echo "
";
        // line 236
        if ($this->getAttribute(($context["page"] ?? null), "bottom", array())) {
            // line 237
            echo "  <div class=\"layout-3col__full\" id=\"bottom-footer\">
    ";
            // line 238
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom", array()), "html", null, true));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bud/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 238,  504 => 237,  502 => 236,  499 => 235,  492 => 230,  486 => 227,  481 => 226,  479 => 225,  476 => 224,  470 => 221,  465 => 220,  463 => 219,  460 => 218,  454 => 215,  449 => 214,  447 => 213,  444 => 212,  438 => 210,  436 => 209,  430 => 205,  428 => 204,  425 => 203,  419 => 200,  416 => 199,  414 => 198,  411 => 197,  407 => 195,  401 => 192,  396 => 191,  394 => 190,  391 => 189,  385 => 186,  380 => 185,  378 => 184,  375 => 183,  369 => 180,  364 => 179,  362 => 178,  359 => 177,  357 => 176,  354 => 175,  345 => 169,  339 => 165,  337 => 164,  332 => 161,  328 => 158,  321 => 154,  317 => 153,  314 => 152,  312 => 151,  309 => 150,  303 => 147,  298 => 146,  296 => 145,  290 => 142,  285 => 141,  281 => 139,  276 => 137,  273 => 136,  267 => 133,  264 => 132,  262 => 131,  259 => 130,  256 => 129,  253 => 128,  250 => 127,  247 => 126,  244 => 125,  241 => 124,  238 => 123,  235 => 122,  232 => 121,  229 => 120,  226 => 119,  223 => 118,  220 => 117,  217 => 116,  214 => 115,  211 => 114,  208 => 113,  205 => 111,  202 => 110,  199 => 109,  196 => 108,  193 => 107,  190 => 106,  187 => 105,  184 => 104,  181 => 103,  178 => 102,  175 => 101,  172 => 100,  169 => 99,  166 => 98,  163 => 97,  160 => 96,  157 => 95,  154 => 94,  151 => 92,  148 => 91,  145 => 90,  142 => 89,  139 => 88,  136 => 87,  133 => 86,  130 => 85,  127 => 84,  124 => 83,  121 => 82,  118 => 81,  115 => 80,  112 => 79,  109 => 78,  106 => 77,  103 => 76,  100 => 75,  95 => 72,  92 => 71,  83 => 65,  79 => 64,  73 => 60,  70 => 59,  68 => 58,  62 => 55,  58 => 54,  52 => 51,  46 => 48,  43 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.title: Items for the title region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.bottom: Items for the extreme bottom of the page.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{{ attach_library('bud/layouts') }}
<div id=\"featured-bg-outer\">
  <div id=\"featured-bg\">
  <div id=\"language-switcher\">{{ page.language_switcher }}</div>
    <div class=\"layout-center\">
      <header class=\"header\" role=\"banner\">
        {{ page.header }}
        {{ page.secondary_menu }}
      </header>

      {% if not is_front %}
        {% set page_node_background = 'node_background' %}
        <div id=\"featured-outer\" class=\"node-page\">
          <div id=\"featured\">
            <div id=\"featured-inner\">
              <div id=\"featured-sub-inner\">
                {{ page.title }}
                {{ page.breadcrumb }}
              </div>
            </div>
          </div>
        </div>
      {% endif %}

      <div class=\"{{ page_node_background }}\">
        <div class=\"layout-3col\">
            {# Decide on layout classes by checking if sidebars have content. #}
            {% if page.sidebar_first and page.sidebar_second %}
              {% set content_class        = 'layout-3col__right-content' %}
              {% set sidebar_first_class  = 'layout-3col__first-left-sidebar' %}
              {% set sidebar_second_class = 'layout-3col__second-left-sidebar' %}
            {% elseif (page.sidebar_second) %}
              {% set content_class        = 'layout-3col__left-content' %}
              {% set sidebar_first_class  = '' %}
              {% set sidebar_second_class = 'layout-3col__right-sidebar' %}
            {% elseif (page.sidebar_first) %}
              {% set content_class        = 'layout-3col__right-content' %}
              {% set sidebar_first_class  = 'layout-3col__left-sidebar' %}
              {% set sidebar_second_class = '' %}
            {% else %}
              {% set content_class        = 'layout-3col__full' %}
              {% set sidebar_first_class  = '' %}
              {% set sidebar_second_class = '' %}
            {% endif %}

            {# Decide on layout classes by checking if footer have content. #}
            {% if page.footer_first and page.footer_second and page.footer_third %}
              {% set footer_first_class  = 'layout-3col__col-1' %}
              {% set footer_second_class = 'layout-3col__col-2' %}
              {% set footer_third_class  = 'layout-3col__col-3' %}
            {% elseif (page.footer_first) %}
              {% set footer_first_class  = 'layout-3col__col-1' %}
              {% set footer_second_class = '' %}
              {% set footer_third_class  = '' %}
            {% elseif (page.footer_second) %}
              {% set footer_first_class  = '' %}
              {% set footer_second_class = 'layout-3col__col-2' %}
              {% set footer_third_class  = '' %}
            {% elseif (page.footer_third) %}
              {% set footer_first_class  = '' %}
              {% set footer_second_class = '' %}
              {% set footer_third_class  = 'layout-3col__col-3' %}
            {% endif %}

            {# Decide on layout classes by checking if content three have content. #}
            {% if page.content_first and page.content_second and page.content_third %}
              {% set content_first_class  = 'layout-3col__col-1' %}
              {% set content_second_class = 'layout-3col__col-2' %}
              {% set content_third_class  = 'layout-3col__col-3' %}
            {% elseif (page.content_first) %}
              {% set content_first_class  = 'layout-3col__col-1' %}
              {% set content_second_class = '' %}
              {% set content_third_class  = '' %}
            {% elseif (page.content_second) %}
              {% set content_first_class  = '' %}
              {% set content_second_class = 'layout-3col__col-2' %}
              {% set content_third_class  = '' %}
            {% elseif (page.content_third) %}
              {% set content_first_class  = '' %}
              {% set content_second_class = '' %}
              {% set content_third_class  = 'layout-3col__col-3' %}
            {% endif %}

            {% if page.primary_menu %}
              <div class=\"layout-3col__full\">
                {{ page.primary_menu }}
              </div>
            {% endif %}

            <main class=\"{{ content_class }}\" role=\"main\">

              {{ page.highlighted }}
              <a href=\"#skip-link\" class=\"visually-hidden visually-hidden--focusable\" id=\"main-content\">Back to top</a>{# link target is in html.html.twig #}
              {{ page.help }}
              {{ page.content }}
            </main>

            {% if page.sidebar_first %}
              <aside class=\"{{ sidebar_first_class }}\" role=\"complementary\">
                {{ page.sidebar_first }}
              </aside>
            {% endif %}

            {% if page.sidebar_second %}
              <div class=\"outer-aside\">
                <aside class=\"{{ sidebar_second_class }}\" role=\"complementary\">
                  {{ page.sidebar_second }}
                </aside>
              </div>
            {% endif %}
        </div>
      </div>
    </div>{# /.layout-center #}
  </div>
</div>

{% if page.featured_content %}
  <div id=\"featured-outer\">
    <div id=\"featured\">
      <div id=\"featured-inner\">
        <div id=\"featured-sub-inner\">
            {{ page.featured_content }}
        </div>
      </div>
    </div>
  </div>
{% endif %}

{% if page.content_first or page.content_second or page.content_third %}
  <div class=\"content-wrapper\">
    {% if page.content_first %}
      <div class=\"{{ content_first_class }}\" role=\"complementary\">
        {{ page.content_first }}
      </div>
    {% endif %}

    {% if page.content_second %}
      <div class=\"{{ content_second_class }}\" role=\"complementary\">
        {{ page.content_second }}
      </div>
    {% endif %}

    {% if page.content_third %}
      <div class=\"{{ content_third_class }}\" role=\"complementary\">
        {{ page.content_third }}
      </div>
    {% endif %}
  </div>
{% endif %}

{% if page.content_bottom %}
  <div id=\"featured-footer\">
    {{ page.content_bottom }}
  </div>
{% endif %}

{% if page.footer or page.footer_first or page.footer_second or page.footer_third %}
  <div id=\"bud-footer\">
    <div id=\"bud-footer-inner\">
      <div id=\"bud-footer-sub-inner\">
        <div class=\"bud-footer-wrapper\">
          {% if page.footer %}
            {{ page.footer }}
          {% endif %}

          {% if page.footer_first %}
            <div class=\"{{ footer_first_class }}\" role=\"complementary\">
              {{ page.footer_first }}
            </div>
          {% endif %}

          {% if page.footer_second %}
            <div class=\"{{ footer_second_class }}\" role=\"complementary\">
              {{ page.footer_second }}
            </div>
          {% endif %}

          {% if page.footer_third %}
            <div class=\"{{ footer_third_class }}\" role=\"complementary\">
              {{ page.footer_third }}
            </div>
          {% endif %}
        </div>
      </div>
    </div>
  </div>
{% endif %}

{% if page.bottom %}
  <div class=\"layout-3col__full\" id=\"bottom-footer\">
    {{ page.bottom }}
  </div>
{% endif %}
", "themes/bud/templates/layout/page.html.twig", "/Users/iamroald/Sites/budv2/themes/bud/templates/layout/page.html.twig");
    }
}
