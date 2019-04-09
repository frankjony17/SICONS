<?php

/* ::base.html.twig */
class __TwigTemplate_22b81081b44c48e837ca37faf9ce05cf06dba51f6e0a2f144b0385f91cea6c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 10
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ext-6.0.1/theme-triton/theme-triton-all.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ext-6.0.1/theme-triton/charts-all.css"), "html", null, true);
        echo "\" />

        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ext-6.0.1/ext-all.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ext-6.0.1/charts.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ext-6.0.1/theme-triton/theme-triton.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ext-6.0.1/locale-es.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 18
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  89 => 18,  84 => 6,  79 => 5,  73 => 20,  70 => 19,  68 => 18,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  46 => 11,  41 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         {#Mi Extjs File#}*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('js/ext-6.0.1/theme-triton/theme-triton-all.css') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('js/ext-6.0.1/theme-triton/charts-all.css') }}" />*/
/* */
/*         <script type="text/javascript" src="{{ asset('js/ext-6.0.1/ext-all.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/ext-6.0.1/charts.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/ext-6.0.1/theme-triton/theme-triton.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/ext-6.0.1/locale-es.js') }}"></script>*/
/* */
/*         {% block stylesheet %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </head>*/
/* </html>*/
/* */
