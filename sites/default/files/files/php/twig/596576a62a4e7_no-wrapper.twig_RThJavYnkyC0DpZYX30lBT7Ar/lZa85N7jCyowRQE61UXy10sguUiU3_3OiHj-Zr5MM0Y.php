<?php

/* @bud/containers/no-wrapper/no-wrapper.twig */
class __TwigTemplate_5396a194f4c2a63d955318748f876a1cde9ba54cfdc9b3e52f03f3e31b8405cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 12);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
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

        // line 12
        $this->displayBlock('heading', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('content', $context, $blocks);
    }

    // line 12
    public function block_heading($context, array $blocks = array())
    {
        // line 13
        echo "  <h2 ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["headingAttributes"] ?? null), "html", null, true));
        echo ">
    ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
        echo "
  </h2>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bud/containers/no-wrapper/no-wrapper.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  69 => 18,  62 => 14,  57 => 13,  54 => 12,  50 => 18,  47 => 17,  45 => 12,);
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
 * Component for a small chunk of content with no wrapping element.
 *
 * Variables:
 * - heading: [string] Heading of the content.
 * - headingAttributes: [string] HTML attributes for the heading element.
 * - content: [string] The component contents.
 */
#}
{% block heading %}
  <h2 {{ headingAttributes }}>
    {{ heading }}
  </h2>
{% endblock %}

{% block content %}
  {{ content }}
{% endblock %}
", "@bud/containers/no-wrapper/no-wrapper.twig", "/Users/iamroald/Sites/budv2/themes/bud/components/containers/no-wrapper/no-wrapper.twig");
    }
}
