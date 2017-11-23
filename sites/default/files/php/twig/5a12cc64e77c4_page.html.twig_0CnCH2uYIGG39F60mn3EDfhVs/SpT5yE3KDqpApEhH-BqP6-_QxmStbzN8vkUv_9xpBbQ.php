<?php

/* themes/iths/templates/page.html.twig */
class __TwigTemplate_39b14e93563441c6b3333a0db0651304ca073ad0e5c254c15cd20ac7add1d0c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'bottom' => array($this, 'block_bottom'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 3, "if" => 23);
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

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 24
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
";
        }
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('bottom', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"header\">
  <div class=\"header-body\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
           <img class=\"logo-koda\" src=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/assets/img/kodamera-logo-white.png\">
        </div>
        <div class=\"column\">
          ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
        </div>
        <div class=\"search\">  
          <img src=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/assets/img/icon-search.png\">
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    // line 27
    public function block_bottom($context, array $blocks = array())
    {
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "bottom", array())) {
            // line 29
            echo "<section class=\"hero bottom\">
  <div class=\"container\">
    <div class=\"columns\">
      ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom", array()), "html", null, true));
            echo "
    </div>
  </div>
</section>
";
        }
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "<section class=\"footer\">
  <div class=\"footer-body\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
           <img class=\"logo-koda\" src=\"";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/assets/img/kodamera-logo-white.png\">
        </div>
        <div class=\"column\">
          ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
        </div>  
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/iths/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  138 => 45,  131 => 40,  128 => 39,  118 => 32,  113 => 29,  111 => 28,  108 => 27,  97 => 15,  91 => 12,  85 => 9,  78 => 4,  75 => 3,  71 => 39,  68 => 38,  66 => 27,  63 => 26,  57 => 24,  55 => 23,  52 => 22,  50 => 3,  46 => 1,);
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

{% block header %}
<section class=\"header\">
  <div class=\"header-body\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
           <img class=\"logo-koda\" src=\"{{base_path ~ directory}}/assets/img/kodamera-logo-white.png\">
        </div>
        <div class=\"column\">
          {{ page.header }}
        </div>
        <div class=\"search\">  
          <img src=\"{{base_path ~ directory}}/assets/img/icon-search.png\">
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock header %}

{% if page.content %}
  {{page.content}}
{% endif %}

{% block bottom %}
{% if page.bottom %}
<section class=\"hero bottom\">
  <div class=\"container\">
    <div class=\"columns\">
      {{ page.bottom }}
    </div>
  </div>
</section>
{% endif %}
{% endblock bottom %}

{% block footer %}
<section class=\"footer\">
  <div class=\"footer-body\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
           <img class=\"logo-koda\" src=\"{{base_path ~ directory}}/assets/img/kodamera-logo-white.png\">
        </div>
        <div class=\"column\">
          {{ page.footer }}
        </div>  
      </div>
    </div>
  </div>
</section>
{% endblock footer %}
", "themes/iths/templates/page.html.twig", "/Users/tobbe/www/labb2_drupal/themes/iths/templates/page.html.twig");
    }
}
