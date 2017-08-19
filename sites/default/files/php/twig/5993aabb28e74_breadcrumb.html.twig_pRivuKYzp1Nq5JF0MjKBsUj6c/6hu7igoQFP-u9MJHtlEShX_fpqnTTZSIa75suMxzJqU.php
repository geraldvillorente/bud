<?php

/* themes/bud/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_e27d60a78b563d45716439c5a3f0557f95f3b3e9c9df7d2a8b600b2ea0659959 extends Twig_Template
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
        $tags = array("if" => 10, "include" => 12);
        $filters = array("t" => 14);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
                array('t'),
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

        // line 10
        if (($context["breadcrumb"] ?? null)) {
            // line 11
            echo "  ";
            // line 12
            $this->loadTemplate("@bud/navigation/breadcrumb/breadcrumb.twig", "themes/bud/templates/navigation/breadcrumb.html.twig", 12)->display(array("modifier_class" => "", "heading" => t("Breadcrumb"), "breadcrumb" =>             // line 15
($context["breadcrumb"] ?? null)));
        }
    }

    public function getTemplateName()
    {
        return "themes/bud/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  47 => 12,  45 => 11,  43 => 10,);
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
 * Theme override for a breadcrumb trail.
 *
 * Available variables:
 * - breadcrumb: Breadcrumb trail items.
 */
#}
{% if breadcrumb %}
  {%
    include \"@bud/navigation/breadcrumb/breadcrumb.twig\" with {
      modifier_class: '',
      heading: 'Breadcrumb'|t,
      breadcrumb: breadcrumb
    } only
  %}
{% endif %}
", "themes/bud/templates/navigation/breadcrumb.html.twig", "/Users/iamroald/Sites/budv2/themes/bud/templates/navigation/breadcrumb.html.twig");
    }
}
