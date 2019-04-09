<?php

/* ProyectoBundle:EspecialistaCalidad:index.html.twig */
class __TwigTemplate_9eb4683f9eaf45de59d1fa614c8bebdbee5e9d62c3d37e83a6170036d297ddd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "ProyectoBundle:EspecialistaCalidad:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_331603d61116febbc47f6ee2b6a8bb3316e600c21c2fa6a95ff87c2b8ea0e2ec = $this->env->getExtension("native_profiler");
        $__internal_331603d61116febbc47f6ee2b6a8bb3316e600c21c2fa6a95ff87c2b8ea0e2ec->enter($__internal_331603d61116febbc47f6ee2b6a8bb3316e600c21c2fa6a95ff87c2b8ea0e2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProyectoBundle:EspecialistaCalidad:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331603d61116febbc47f6ee2b6a8bb3316e600c21c2fa6a95ff87c2b8ea0e2ec->leave($__internal_331603d61116febbc47f6ee2b6a8bb3316e600c21c2fa6a95ff87c2b8ea0e2ec_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_14bfff80bdb4b1ff8de660a3d147e773e716fc4e742e4d1b12081c5a8b0d08ea = $this->env->getExtension("native_profiler");
        $__internal_14bfff80bdb4b1ff8de660a3d147e773e716fc4e742e4d1b12081c5a8b0d08ea->enter($__internal_14bfff80bdb4b1ff8de660a3d147e773e716fc4e742e4d1b12081c5a8b0d08ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPECIALISTA-CALIDAD-SICONS";
        
        $__internal_14bfff80bdb4b1ff8de660a3d147e773e716fc4e742e4d1b12081c5a8b0d08ea->leave($__internal_14bfff80bdb4b1ff8de660a3d147e773e716fc4e742e4d1b12081c5a8b0d08ea_prof);

    }

    // line 6
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_5e648b38e413d67a1ed01176f41ec86892c7bbc85c01259c3a8432c18d77124d = $this->env->getExtension("native_profiler");
        $__internal_5e648b38e413d67a1ed01176f41ec86892c7bbc85c01259c3a8432c18d77124d->enter($__internal_5e648b38e413d67a1ed01176f41ec86892c7bbc85c01259c3a8432c18d77124d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_5e648b38e413d67a1ed01176f41ec86892c7bbc85c01259c3a8432c18d77124d->leave($__internal_5e648b38e413d67a1ed01176f41ec86892c7bbc85c01259c3a8432c18d77124d_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f94706d6dfcf82cc84d0418a926a1d9e3403949cef61dc65f68cd07ed4fd3a88 = $this->env->getExtension("native_profiler");
        $__internal_f94706d6dfcf82cc84d0418a926a1d9e3403949cef61dc65f68cd07ed4fd3a88->enter($__internal_f94706d6dfcf82cc84d0418a926a1d9e3403949cef61dc65f68cd07ed4fd3a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/especialista_calidad/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f94706d6dfcf82cc84d0418a926a1d9e3403949cef61dc65f68cd07ed4fd3a88->leave($__internal_f94706d6dfcf82cc84d0418a926a1d9e3403949cef61dc65f68cd07ed4fd3a88_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_165bab967fe63c5c7c35faa84f11bb4d9c92a22f40a2b9bbe6505b658df588f8 = $this->env->getExtension("native_profiler");
        $__internal_165bab967fe63c5c7c35faa84f11bb4d9c92a22f40a2b9bbe6505b658df588f8->enter($__internal_165bab967fe63c5c7c35faa84f11bb4d9c92a22f40a2b9bbe6505b658df588f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    <script>
        Ext.Loader.setConfig({
            enabled: true
        });
        Ext.Loader.setPath({
            'Ext.ux': '/js/ext-6.0.1/ux'
        });
        ";
        // line 21
        echo "
        Ext.application({
            name: 'SCS',
            appFolder: '/js/app',
            controllers: [
                \"proyecto.ViewportEspecialistaCalidadController\",
                \"proyecto.RevisionContratoController\"
            ],
            launch: function(){
                Ext.create('SCS.view.especialistacalidad.Viewport');
            }
        });
    </script>
";
        
        $__internal_165bab967fe63c5c7c35faa84f11bb4d9c92a22f40a2b9bbe6505b658df588f8->leave($__internal_165bab967fe63c5c7c35faa84f11bb4d9c92a22f40a2b9bbe6505b658df588f8_prof);

    }

    public function getTemplateName()
    {
        return "ProyectoBundle:EspecialistaCalidad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  83 => 13,  77 => 12,  67 => 9,  61 => 8,  49 => 6,  37 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ESPECIALISTA-CALIDAD-SICONS{% endblock %}*/
/* */
/* {% block favicon %}{{ asset('favicon.ico') }}{% endblock %}*/
/* */
/* {% block stylesheet %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/especialista_calidad/index.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script>*/
/*         Ext.Loader.setConfig({*/
/*             enabled: true*/
/*         });*/
/*         Ext.Loader.setPath({*/
/*             'Ext.ux': '/js/ext-6.0.1/ux'*/
/*         });*/
/*         {#{% include "AdminBundle:Admin:globalScript.html.twig" %}#}*/
/* */
/*         Ext.application({*/
/*             name: 'SCS',*/
/*             appFolder: '/js/app',*/
/*             controllers: [*/
/*                 "proyecto.ViewportEspecialistaCalidadController",*/
/*                 "proyecto.RevisionContratoController"*/
/*             ],*/
/*             launch: function(){*/
/*                 Ext.create('SCS.view.especialistacalidad.Viewport');*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
