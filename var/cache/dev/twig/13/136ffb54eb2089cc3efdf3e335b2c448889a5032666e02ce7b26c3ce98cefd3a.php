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
        $__internal_4eb6967429c13add85e2986e801212b7ecf07e56d5bbe754314250689f14eb9b = $this->env->getExtension("native_profiler");
        $__internal_4eb6967429c13add85e2986e801212b7ecf07e56d5bbe754314250689f14eb9b->enter($__internal_4eb6967429c13add85e2986e801212b7ecf07e56d5bbe754314250689f14eb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ext-6.0.1/theme-triton/theme-triton.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ext-6.0.1/locale-es.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 17
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
</html>
";
        
        $__internal_4eb6967429c13add85e2986e801212b7ecf07e56d5bbe754314250689f14eb9b->leave($__internal_4eb6967429c13add85e2986e801212b7ecf07e56d5bbe754314250689f14eb9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dda4018fac4023c4308b935bdc7a5432c569da8f2a6f1874c5cf2441db2e0f9f = $this->env->getExtension("native_profiler");
        $__internal_dda4018fac4023c4308b935bdc7a5432c569da8f2a6f1874c5cf2441db2e0f9f->enter($__internal_dda4018fac4023c4308b935bdc7a5432c569da8f2a6f1874c5cf2441db2e0f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dda4018fac4023c4308b935bdc7a5432c569da8f2a6f1874c5cf2441db2e0f9f->leave($__internal_dda4018fac4023c4308b935bdc7a5432c569da8f2a6f1874c5cf2441db2e0f9f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c6504ad816d1155791e491240df76bfd372240d68d94e8448c0a2386895a95a = $this->env->getExtension("native_profiler");
        $__internal_1c6504ad816d1155791e491240df76bfd372240d68d94e8448c0a2386895a95a->enter($__internal_1c6504ad816d1155791e491240df76bfd372240d68d94e8448c0a2386895a95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c6504ad816d1155791e491240df76bfd372240d68d94e8448c0a2386895a95a->leave($__internal_1c6504ad816d1155791e491240df76bfd372240d68d94e8448c0a2386895a95a_prof);

    }

    // line 17
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_105412b7d54b17619750253797788143893e31bffaed6c3dfff4cbb996e4786c = $this->env->getExtension("native_profiler");
        $__internal_105412b7d54b17619750253797788143893e31bffaed6c3dfff4cbb996e4786c->enter($__internal_105412b7d54b17619750253797788143893e31bffaed6c3dfff4cbb996e4786c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_105412b7d54b17619750253797788143893e31bffaed6c3dfff4cbb996e4786c->leave($__internal_105412b7d54b17619750253797788143893e31bffaed6c3dfff4cbb996e4786c_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db7fe1e9a212a1443a6c23f2ffac6d96df564b10b4f19f8c030b42a15bd0fe77 = $this->env->getExtension("native_profiler");
        $__internal_db7fe1e9a212a1443a6c23f2ffac6d96df564b10b4f19f8c030b42a15bd0fe77->enter($__internal_db7fe1e9a212a1443a6c23f2ffac6d96df564b10b4f19f8c030b42a15bd0fe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_db7fe1e9a212a1443a6c23f2ffac6d96df564b10b4f19f8c030b42a15bd0fe77->leave($__internal_db7fe1e9a212a1443a6c23f2ffac6d96df564b10b4f19f8c030b42a15bd0fe77_prof);

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
        return array (  114 => 18,  103 => 17,  92 => 6,  81 => 5,  72 => 19,  69 => 18,  67 => 17,  62 => 15,  58 => 14,  54 => 13,  49 => 11,  44 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <script type="text/javascript" src="{{ asset('js/ext-6.0.1/theme-triton/theme-triton.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/ext-6.0.1/locale-es.js') }}"></script>*/
/* */
/*         {% block stylesheet %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </head>*/
/* </html>*/
/* */
