<?php

/* @bud/containers/article/article.twig */
class __TwigTemplate_db2ff47cd1010826f80834a965f513e49087175bb2c7d7eaf20e14f06826d212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'footer' => array($this, 'block_footer'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 18, "if" => 28);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
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

        // line 17
        echo "<article class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 18
        $this->displayBlock('heading', $context, $blocks);
        // line 27
        echo "
  ";
        // line 28
        if (($context["footer"] ?? null)) {
            // line 29
            echo "    <footer>
      ";
            // line 30
            $this->displayBlock('footer', $context, $blocks);
            // line 33
            echo "    </footer>
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "</article>
";
    }

    // line 18
    public function block_heading($context, array $blocks = array())
    {
        // line 19
        echo "    <h2 ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["headingAttributes"] ?? null), "html", null, true));
        echo ">
      ";
        // line 20
        if (($context["url"] ?? null)) {
            // line 21
            echo "        <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</a>
      ";
        } else {
            // line 23
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "
      ";
        }
        // line 25
        echo "    </h2>
  ";
    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
        echo "
      ";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@bud/containers/article/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  118 => 36,  111 => 31,  108 => 30,  103 => 25,  97 => 23,  89 => 21,  87 => 20,  82 => 19,  79 => 18,  74 => 39,  72 => 36,  69 => 35,  65 => 33,  63 => 30,  60 => 29,  58 => 28,  55 => 27,  53 => 18,  46 => 17,);
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
 * Component for article.
 *
 * Variables:
 * - modifier_class: [string] Classes to modify the default component styling.
 * - attributes: [string] HTML attributes for the wrapping element.
 * - heading: [string] Heading of the content.
 * - headingAttributes: [string] HTML attributes for the heading element.
 * - url: [string] URL to optionally link the heading to.
 * - footer: [string|boolean] Metadata for this article. Also controls whether
 *   the footer block and its wrapping element are displayed.
 * - content: [string] The component contents.
 */
#}
<article class=\"{{ modifier_class }}\" {{ attributes }}>
  {% block heading %}
    <h2 {{ headingAttributes }}>
      {% if url %}
        <a href=\"{{ url }}\">{{ heading }}</a>
      {% else %}
        {{ heading }}
      {% endif %}
    </h2>
  {% endblock heading %}

  {% if footer %}
    <footer>
      {% block footer %}
        {{ footer }}
      {% endblock %}
    </footer>
  {% endif %}

  {% block content %}
    {{ content }}
  {% endblock %}
</article>
", "@bud/containers/article/article.twig", "/Users/iamroald/Sites/budv2/themes/bud/components/containers/article/article.twig");
    }
}
