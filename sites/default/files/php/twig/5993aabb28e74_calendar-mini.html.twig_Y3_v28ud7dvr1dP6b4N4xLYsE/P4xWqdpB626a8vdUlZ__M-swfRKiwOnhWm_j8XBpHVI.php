<?php

/* modules/contrib/calendar/templates/calendar-mini.html.twig */
class __TwigTemplate_ef33a26313710f2b2daac98b9d763977f0fd3855065dd993d4f28a6396d26c0b extends Twig_Template
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
        $tags = array("if" => 20, "for" => 32);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array()
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

        // line 18
        echo "<div class=\"calendar-calendar\">
  <div class=\"month-view\">
    ";
        // line 20
        if (($context["show_title"] ?? null)) {
            // line 21
            echo "      <div class=\"date-nav-wrapper clear-block\">
        <div class=\"date-nav\">
          <div class=\"date-heading\">
            <!-- print theme('date_nav_title', \$params) -->
          </div>
         </div>
      </div>
    ";
        }
        // line 29
        echo "    <table class=\"mini\">
      <thead>
        <tr>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cell"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["day_names"]) {
            // line 33
            echo "            <th class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cell"] ?? null), "class", array()), "html", null, true));
            echo "\">
              { cell.data }}
            </th>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day_names'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tr>
      </thead>
      <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 41
            echo "          <tr>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 43
                echo "            <td id=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "id", array()), "html", null, true));
                echo "\" class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "class", array()), "html", null, true));
                echo "\">
              ";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["cell"], "data", array()), "html", null, true));
                echo "
            </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-mini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  111 => 47,  102 => 44,  95 => 43,  91 => 42,  88 => 41,  84 => 40,  79 => 37,  68 => 33,  64 => 32,  59 => 29,  49 => 21,  47 => 20,  43 => 18,);
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
 * Template to display a view as a mini calendar month.
 *
 * Available variables:
 * - day_names: An array of the day of week names for the table header.
 * - rows: An array of data for each day of the week.
 * - view: The view.
 * - min_date_formatted: The minimum date for this calendar in the format YYYY-MM-DD HH:MM:SS.
 * - max_date_formatted: The maximum date for this calendar in the format YYYY-MM-DD HH:MM:SS.
 *
 * @see template_preprocess_calendar_mini()
 *
 * @ingroup themeable
 */
#}
<div class=\"calendar-calendar\">
  <div class=\"month-view\">
    {% if show_title %}
      <div class=\"date-nav-wrapper clear-block\">
        <div class=\"date-nav\">
          <div class=\"date-heading\">
            <!-- print theme('date_nav_title', \$params) -->
          </div>
         </div>
      </div>
    {% endif %}
    <table class=\"mini\">
      <thead>
        <tr>
          {% for day_names in cell %}
            <th class=\"{{ cell.class }}\">
              { cell.data }}
            </th>
          {% endfor %}
        </tr>
      </thead>
      <tbody>
        {% for row in rows %}
          <tr>
            {% for cell in row %}
            <td id=\"{{ cell.id }}\" class=\"{{ cell.class }}\">
              {{ cell.data }}
            </td>
            {% endfor %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
</div>
", "modules/contrib/calendar/templates/calendar-mini.html.twig", "/Users/iamroald/Sites/budv2/modules/contrib/calendar/templates/calendar-mini.html.twig");
    }
}
