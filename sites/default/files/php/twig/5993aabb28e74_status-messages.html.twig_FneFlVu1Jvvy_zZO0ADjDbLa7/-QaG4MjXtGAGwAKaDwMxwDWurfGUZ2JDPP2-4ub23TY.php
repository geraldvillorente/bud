<?php

/* themes/bud/templates/misc/status-messages.html.twig */
class __TwigTemplate_bf152b82a377b146307e91cbe49caa4c0e6c6b640507be2a47ebf5b36c0d40d0 extends Twig_Template
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
        $tags = array("for" => 24, "include" => 26);
        $filters = array("safe_join" => 30);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'include'),
                array('safe_join'),
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

        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            echo "  ";
            // line 26
            $this->loadTemplate("@bud/components/messages/messages.twig", "themes/bud/templates/misc/status-messages.html.twig", 26)->display(array("type" =>             // line 27
$context["type"], "messages" =>             // line 28
$context["messages"], "heading" => $this->getAttribute(            // line 29
($context["status_headings"] ?? null), $context["type"], array(), "array"), "modifier_class" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->getAttribute($this->getAttribute(            // line 30
($context["attributes"] ?? null), "addClass", array(0 => ("messages--" . $context["type"])), "method"), "class", array()), " "), "attributes" => $this->getAttribute(            // line 31
($context["attributes"] ?? null), "removeAttribute", array(0 => "class", 1 => "role", 2 => "aria-label"), "method")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/bud/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 31,  53 => 30,  52 => 29,  51 => 28,  50 => 27,  49 => 26,  47 => 25,  43 => 24,);
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
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}
{% for type, messages in message_list %}
  {%
    include \"@bud/components/messages/messages.twig\" with {
      type: type,
      messages: messages,
      heading: status_headings[type],
      modifier_class: attributes.addClass('messages--' ~ type).class|safe_join(' '),
      attributes: attributes.removeAttribute('class', 'role', 'aria-label')
    } only
  %}
{% endfor %}
", "themes/bud/templates/misc/status-messages.html.twig", "/Users/iamroald/Sites/budv2/themes/bud/templates/misc/status-messages.html.twig");
    }
}
