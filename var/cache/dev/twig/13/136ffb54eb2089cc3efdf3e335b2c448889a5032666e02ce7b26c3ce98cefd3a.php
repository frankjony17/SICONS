<?php

/* ::base.html.twig */
class __TwigTemplate_a02405696cdf214dfd2e7f9a1fdcd9eba67d0bd457cffbebfbfc2450914c7edf extends Twig_Template
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
        $__internal_3b1294279885feb64430d32ccf70505dd04fd1c66b577de766a18344eab209fc = $this->env->getExtension("native_profiler");
        $__internal_3b1294279885feb64430d32ccf70505dd04fd1c66b577de766a18344eab209fc->enter($__internal_3b1294279885feb64430d32ccf70505dd04fd1c66b577de766a18344eab209fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3b1294279885feb64430d32ccf70505dd04fd1c66b577de766a18344eab209fc->leave($__internal_3b1294279885feb64430d32ccf70505dd04fd1c66b577de766a18344eab209fc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_09e84deab0459e27b28c152a890535f9f5f6381de3e850e6061904b8e83fbc60 = $this->env->getExtension("native_profiler");
        $__internal_09e84deab0459e27b28c152a890535f9f5f6381de3e850e6061904b8e83fbc60->enter($__internal_09e84deab0459e27b28c152a890535f9f5f6381de3e850e6061904b8e83fbc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_09e84deab0459e27b28c152a890535f9f5f6381de3e850e6061904b8e83fbc60->leave($__internal_09e84deab0459e27b28c152a890535f9f5f6381de3e850e6061904b8e83fbc60_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_712b0cb3b10f095d4c8f537c4efad6d5f19d4424a0f8fcd9c38c47941c1c856b = $this->env->getExtension("native_profiler");
        $__internal_712b0cb3b10f095d4c8f537c4efad6d5f19d4424a0f8fcd9c38c47941c1c856b->enter($__internal_712b0cb3b10f095d4c8f537c4efad6d5f19d4424a0f8fcd9c38c47941c1c856b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_712b0cb3b10f095d4c8f537c4efad6d5f19d4424a0f8fcd9c38c47941c1c856b->leave($__internal_712b0cb3b10f095d4c8f537c4efad6d5f19d4424a0f8fcd9c38c47941c1c856b_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_624cc79fd7d2294b2d27ded9382bf8efc8c12d05e4bc1d20e5872ae097102161 = $this->env->getExtension("native_profiler");
        $__internal_624cc79fd7d2294b2d27ded9382bf8efc8c12d05e4bc1d20e5872ae097102161->enter($__internal_624cc79fd7d2294b2d27ded9382bf8efc8c12d05e4bc1d20e5872ae097102161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_624cc79fd7d2294b2d27ded9382bf8efc8c12d05e4bc1d20e5872ae097102161->leave($__internal_624cc79fd7d2294b2d27ded9382bf8efc8c12d05e4bc1d20e5872ae097102161_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8edaaf7a2008049ca4272f09b176e1433e71cf11ebc71b240649799b49b01a94 = $this->env->getExtension("native_profiler");
        $__internal_8edaaf7a2008049ca4272f09b176e1433e71cf11ebc71b240649799b49b01a94->enter($__internal_8edaaf7a2008049ca4272f09b176e1433e71cf11ebc71b240649799b49b01a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8edaaf7a2008049ca4272f09b176e1433e71cf11ebc71b240649799b49b01a94->leave($__internal_8edaaf7a2008049ca4272f09b176e1433e71cf11ebc71b240649799b49b01a94_prof);

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
