<?php

/* themes/iths/templates/paragraphs/paragraph--what-we-do.html.twig */
class __TwigTemplate_aa02f908b82bfdd0a67365686ddc4f2ef1c7c9dcbb1b8aefcc0eea72bbd9e8e6 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "

<div class=\"column is-10 is-offset-1 what-we-do\">
  <section class=\"section\">
      <div class=\"container\">
        <div class=\"columns is-vcentered\">
          <div class=\"column is-8\">
            ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_title", array()), "html", null, true));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_body", array()), "html", null, true));
        echo "
          </div>
          <div class=\"column\">
            <a class=\"button myButton\"> ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_button_text", array()), "html", null, true));
        echo " </a>
          </div>
        </div>
      </div>

  </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/iths/templates/paragraphs/paragraph--what-we-do.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  56 => 9,  52 => 8,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div class=\"column is-10 is-offset-1 what-we-do\">
  <section class=\"section\">
      <div class=\"container\">
        <div class=\"columns is-vcentered\">
          <div class=\"column is-8\">
            {{ content.field_title }}
            {{ content.field_body }}
          </div>
          <div class=\"column\">
            <a class=\"button myButton\"> {{ content.field_button_text }} </a>
          </div>
        </div>
      </div>

  </section>
</div>
", "themes/iths/templates/paragraphs/paragraph--what-we-do.html.twig", "/Users/tobbe/www/labb2_drupal/themes/iths/templates/paragraphs/paragraph--what-we-do.html.twig");
    }
}
