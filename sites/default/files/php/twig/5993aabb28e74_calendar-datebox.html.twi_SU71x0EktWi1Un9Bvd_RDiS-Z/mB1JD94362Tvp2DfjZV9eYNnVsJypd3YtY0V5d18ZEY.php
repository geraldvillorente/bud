<?php

/* modules/contrib/calendar/templates/calendar-datebox.html.twig */
class __TwigTemplate_5ad18df497dffc206e09df978f4921731867845959e8c01776b424ddac4d07e8 extends Twig_Template
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
        $tags = array("if" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 21
        echo "<div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["granularity"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["class"] ?? null), "html", null, true));
        echo "\">
  ";
        // line 22
        if ( !twig_test_empty(($context["selected"] ?? null))) {
            // line 23
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
            echo "
  ";
        } else {
            // line 25
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["day"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-datebox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 27,  58 => 25,  52 => 23,  50 => 22,  43 => 21,);
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
 * Template to display the date box in a calendar.
 *
 * Available variables:
 * - view: The view.
 * - granularity: The type of calendar this box is in -- year, month, day, or week.
 * - mini: Whether or not this is a mini calendar.
 * - class: The class for this box -- mini-on, mini-off, or day.
 * - day:  The day of the month.
 * - date: The current date, in the form YYYY-MM-DD.
 * - link: A formatted link to the calendar day view for this day.
 * - url:  The url to the calendar day view for this day.
 * - selected: Whether or not this day has any items.
 * - items: An array of items for this day.
 *
 * @ingroup themeable
 */
#}
<div class=\"{{ granularity }} {{ class }}\">
  {% if selected is not empty %}
    {{ link }}
  {% else %}
    {{ day }}
  {% endif %}
</div>
", "modules/contrib/calendar/templates/calendar-datebox.html.twig", "/Users/iamroald/Sites/budv2/modules/contrib/calendar/templates/calendar-datebox.html.twig");
    }
}
