<?php

/* @bud/navigation/breadcrumb/breadcrumb.twig */
class __TwigTemplate_d4e39f882f45e02757ab9e3c57d3e60b5804a32f1fccaff8122d6646448a220b extends Twig_Template
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
        $tags = array("for" => 19, "if" => 21);
        $filters = array("default" => 17);
        $functions = array("attach_library" => 15);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bud/breadcrumb"), "html", null, true));
        echo "
<nav class=\"breadcrumb ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true));
        echo "\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
  <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("heading", $context)) ? (_twig_default_filter(($context["heading"] ?? null), "You are here")) : ("You are here")), "html", null, true));
        echo "</h2>
  <ol class=\"breadcrumb__list\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "      <li class=\"breadcrumb__item\">
        ";
            // line 21
            if ($this->getAttribute($context["item"], "url", array())) {
                // line 22
                echo "          <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                echo "</a>
        ";
            } else {
                // line 24
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                echo "
        ";
            }
            // line 26
            echo "        ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 27
                echo "          ›
        ";
            }
            // line 29
            echo "      </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </ol>
</nav>
";
    }

    public function getTemplateName()
    {
        return "@bud/navigation/breadcrumb/breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  99 => 29,  95 => 27,  92 => 26,  86 => 24,  78 => 22,  76 => 21,  73 => 20,  56 => 19,  51 => 17,  47 => 16,  43 => 15,);
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
 * Component for a breadcrumb trail.
 *
 * Variables:
 * - modifier_class: [string] Classes to modify the default component styling.
 * - heading: [string] Accessible heading.
 * - breadcrumb: [array] The breadcrumb trail items. Each item is an object
 *   containing:
 *   - text: [string] Text of the item.
 *   - url: [string] URL of the item (optional).
 */
#}
{{ attach_library('bud/breadcrumb') }}
<nav class=\"breadcrumb {{modifier_class}}\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
  <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">{{ heading|default('You are here') }}</h2>
  <ol class=\"breadcrumb__list\">
    {% for item in breadcrumb %}
      <li class=\"breadcrumb__item\">
        {% if item.url %}
          <a href=\"{{ item.url }}\">{{ item.text }}</a>
        {% else %}
          {{ item.text }}
        {% endif %}
        {% if not loop.last %}
          ›
        {% endif %}
      </li>
    {% endfor %}
  </ol>
</nav>
", "@bud/navigation/breadcrumb/breadcrumb.twig", "/Users/iamroald/Sites/budv2/themes/bud/components/navigation/breadcrumb/breadcrumb.twig");
    }
}
