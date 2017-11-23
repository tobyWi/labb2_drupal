<?php

/* themes/iths/templates/paragraphs/paragraph--hero.html.twig */
class __TwigTemplate_1a84c34e3565c07495566522bcfccf1bb9d0b26c09a60fb78e92b6e129696af6 extends Twig_Template
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
<div class=\"columns\">
<div class=\"column hero\">
 ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_hero_image", array()), "html", null, true));
        echo "
  <div class=\"hero-text\">
  <div class=\"hero-title\">\t
  \t";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_hero_title", array()), "html", null, true));
        echo "
  </div>
  <div class=\"hero-body\">
   ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_hero_body", array()), "html", null, true));
        echo "
  </div>
  </div>

</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/iths/templates/paragraphs/paragraph--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 7,  48 => 4,  43 => 1,);
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
<div class=\"columns\">
<div class=\"column hero\">
 {{ content.field_hero_image }}
  <div class=\"hero-text\">
  <div class=\"hero-title\">\t
  \t{{ content.field_hero_title }}
  </div>
  <div class=\"hero-body\">
   {{ content.field_hero_body }}
  </div>
  </div>

</div>
</div>", "themes/iths/templates/paragraphs/paragraph--hero.html.twig", "/Users/tobbe/www/labb2_drupal/themes/iths/templates/paragraphs/paragraph--hero.html.twig");
    }
}
