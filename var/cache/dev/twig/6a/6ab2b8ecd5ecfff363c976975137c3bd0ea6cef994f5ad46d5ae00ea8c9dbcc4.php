<?php

/* ::base.html.twig */
class __TwigTemplate_c3adb2dc9b6cf21cc554daddf3243c64b50f2bd3cf772667cc670f351d0dbd17 extends Twig_Template
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
        $__internal_57e6e6c31b711375829220eee8ebccfc01638ae265a9b91309d9f8557819ac3a = $this->env->getExtension("native_profiler");
        $__internal_57e6e6c31b711375829220eee8ebccfc01638ae265a9b91309d9f8557819ac3a->enter($__internal_57e6e6c31b711375829220eee8ebccfc01638ae265a9b91309d9f8557819ac3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_57e6e6c31b711375829220eee8ebccfc01638ae265a9b91309d9f8557819ac3a->leave($__internal_57e6e6c31b711375829220eee8ebccfc01638ae265a9b91309d9f8557819ac3a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e29b1dcbe1a4f39dad9936ec9059a496c3acd1ad340fedb0773b02f7c9a175d3 = $this->env->getExtension("native_profiler");
        $__internal_e29b1dcbe1a4f39dad9936ec9059a496c3acd1ad340fedb0773b02f7c9a175d3->enter($__internal_e29b1dcbe1a4f39dad9936ec9059a496c3acd1ad340fedb0773b02f7c9a175d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e29b1dcbe1a4f39dad9936ec9059a496c3acd1ad340fedb0773b02f7c9a175d3->leave($__internal_e29b1dcbe1a4f39dad9936ec9059a496c3acd1ad340fedb0773b02f7c9a175d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_047a774a700a323a505143f255a332931c0e7745cd3bd4b76f12684190d58fe1 = $this->env->getExtension("native_profiler");
        $__internal_047a774a700a323a505143f255a332931c0e7745cd3bd4b76f12684190d58fe1->enter($__internal_047a774a700a323a505143f255a332931c0e7745cd3bd4b76f12684190d58fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_047a774a700a323a505143f255a332931c0e7745cd3bd4b76f12684190d58fe1->leave($__internal_047a774a700a323a505143f255a332931c0e7745cd3bd4b76f12684190d58fe1_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ce8227a274acd941ad714bdea432d05bfdab68b1f260fde1e63d8bbb89c28bc0 = $this->env->getExtension("native_profiler");
        $__internal_ce8227a274acd941ad714bdea432d05bfdab68b1f260fde1e63d8bbb89c28bc0->enter($__internal_ce8227a274acd941ad714bdea432d05bfdab68b1f260fde1e63d8bbb89c28bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_ce8227a274acd941ad714bdea432d05bfdab68b1f260fde1e63d8bbb89c28bc0->leave($__internal_ce8227a274acd941ad714bdea432d05bfdab68b1f260fde1e63d8bbb89c28bc0_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4708e6dacd7c24512caba60cd3d2fc195f86e9c2a3405a03fa96ce53fef0fcb4 = $this->env->getExtension("native_profiler");
        $__internal_4708e6dacd7c24512caba60cd3d2fc195f86e9c2a3405a03fa96ce53fef0fcb4->enter($__internal_4708e6dacd7c24512caba60cd3d2fc195f86e9c2a3405a03fa96ce53fef0fcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4708e6dacd7c24512caba60cd3d2fc195f86e9c2a3405a03fa96ce53fef0fcb4->leave($__internal_4708e6dacd7c24512caba60cd3d2fc195f86e9c2a3405a03fa96ce53fef0fcb4_prof);

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
        return array (  118 => 19,  107 => 18,  96 => 6,  85 => 5,  76 => 20,  73 => 19,  71 => 18,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  49 => 11,  44 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
