<?php

/* @bud/navigation/skip-link/skip-link.twig */
class __TwigTemplate_b3ddd03585e36665acbfd48da82495359af4908ac928482d00d04f9c57e53dac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 14);
        $filters = array("default" => 13);
        $functions = array("attach_library" => 12);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
                array('default'),
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

        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bud/skip-link"), "html", null, true));
        echo "
<a href=\"";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("url", $context)) ? (_twig_default_filter(($context["url"] ?? null), "#main-content")) : ("#main-content")), "html", null, true));
        echo "\" class=\"skip-link ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true));
        echo "\">
  ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "</a>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "Skip to main content")) : ("Skip to main content")), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@bud/navigation/skip-link/skip-link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  61 => 14,  56 => 17,  54 => 14,  48 => 13,  44 => 12,);
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
 * Component for a skip link.
 *
 * Variables:
 * - modifier_class: [string] Classes to modify the default component styling.
 * - url: [string] The url to skip to.
 * - text: [string] The link text.
 */
#}
{{ attach_library('bud/skip-link') }}
<a href=\"{{ url|default('#main-content') }}\" class=\"skip-link {{ modifier_class }}\">
  {% block content %}
    {{ text|default('Skip to main content') }}
  {% endblock %}
</a>
", "@bud/navigation/skip-link/skip-link.twig", "/Users/iamroald/Sites/budv2/themes/bud/components/navigation/skip-link/skip-link.twig");
    }
}
