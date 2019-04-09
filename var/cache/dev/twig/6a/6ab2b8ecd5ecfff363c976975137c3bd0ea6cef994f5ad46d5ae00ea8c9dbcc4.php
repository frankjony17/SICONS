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
        $__internal_bc910c7e5aca57c424d0e3fe701c32c23052e4ce1bdcb950bbcca1c17641dc2c = $this->env->getExtension("native_profiler");
        $__internal_bc910c7e5aca57c424d0e3fe701c32c23052e4ce1bdcb950bbcca1c17641dc2c->enter($__internal_bc910c7e5aca57c424d0e3fe701c32c23052e4ce1bdcb950bbcca1c17641dc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_bc910c7e5aca57c424d0e3fe701c32c23052e4ce1bdcb950bbcca1c17641dc2c->leave($__internal_bc910c7e5aca57c424d0e3fe701c32c23052e4ce1bdcb950bbcca1c17641dc2c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_13e071a4c5ab0fe4195b4465512a5fe4f9cdcfbbdbbb6e513bd9bbc56de8a48f = $this->env->getExtension("native_profiler");
        $__internal_13e071a4c5ab0fe4195b4465512a5fe4f9cdcfbbdbbb6e513bd9bbc56de8a48f->enter($__internal_13e071a4c5ab0fe4195b4465512a5fe4f9cdcfbbdbbb6e513bd9bbc56de8a48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_13e071a4c5ab0fe4195b4465512a5fe4f9cdcfbbdbbb6e513bd9bbc56de8a48f->leave($__internal_13e071a4c5ab0fe4195b4465512a5fe4f9cdcfbbdbbb6e513bd9bbc56de8a48f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12390131532b001186a821c198815b708247972c1a51c4f0644f3ba438c99227 = $this->env->getExtension("native_profiler");
        $__internal_12390131532b001186a821c198815b708247972c1a51c4f0644f3ba438c99227->enter($__internal_12390131532b001186a821c198815b708247972c1a51c4f0644f3ba438c99227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12390131532b001186a821c198815b708247972c1a51c4f0644f3ba438c99227->leave($__internal_12390131532b001186a821c198815b708247972c1a51c4f0644f3ba438c99227_prof);

    }

    // line 17
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_695cec61ec31fad0f7963caa171e1a81c095faa5841f7d37a21031f4dce2bf32 = $this->env->getExtension("native_profiler");
        $__internal_695cec61ec31fad0f7963caa171e1a81c095faa5841f7d37a21031f4dce2bf32->enter($__internal_695cec61ec31fad0f7963caa171e1a81c095faa5841f7d37a21031f4dce2bf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_695cec61ec31fad0f7963caa171e1a81c095faa5841f7d37a21031f4dce2bf32->leave($__internal_695cec61ec31fad0f7963caa171e1a81c095faa5841f7d37a21031f4dce2bf32_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a368980c107c066314f33bef1d890d53c45b2adefae26233f4961d4ac604832 = $this->env->getExtension("native_profiler");
        $__internal_5a368980c107c066314f33bef1d890d53c45b2adefae26233f4961d4ac604832->enter($__internal_5a368980c107c066314f33bef1d890d53c45b2adefae26233f4961d4ac604832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a368980c107c066314f33bef1d890d53c45b2adefae26233f4961d4ac604832->leave($__internal_5a368980c107c066314f33bef1d890d53c45b2adefae26233f4961d4ac604832_prof);

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
