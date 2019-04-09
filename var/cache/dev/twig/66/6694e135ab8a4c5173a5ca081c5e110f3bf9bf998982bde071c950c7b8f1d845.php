<?php

/* ProyectoBundle:EquipoTrabajo:index.html.twig */
class __TwigTemplate_f4af042c4623e4262dc8d973e46da334490e14702e66ca83d4533adb3c696393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "ProyectoBundle:EquipoTrabajo:index.html.twig", 2);
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
        $__internal_818b74e414915d94e6e84f2ca37a66b3864e4f9da53475412b153d415747125c = $this->env->getExtension("native_profiler");
        $__internal_818b74e414915d94e6e84f2ca37a66b3864e4f9da53475412b153d415747125c->enter($__internal_818b74e414915d94e6e84f2ca37a66b3864e4f9da53475412b153d415747125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProyectoBundle:EquipoTrabajo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818b74e414915d94e6e84f2ca37a66b3864e4f9da53475412b153d415747125c->leave($__internal_818b74e414915d94e6e84f2ca37a66b3864e4f9da53475412b153d415747125c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce9f0bd06b7485cfc0c2803d3702705ccbfb1a921f2a78381ad5389bc5c50077 = $this->env->getExtension("native_profiler");
        $__internal_ce9f0bd06b7485cfc0c2803d3702705ccbfb1a921f2a78381ad5389bc5c50077->enter($__internal_ce9f0bd06b7485cfc0c2803d3702705ccbfb1a921f2a78381ad5389bc5c50077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "EQUIPO-TRABAJO-SICONS";
        
        $__internal_ce9f0bd06b7485cfc0c2803d3702705ccbfb1a921f2a78381ad5389bc5c50077->leave($__internal_ce9f0bd06b7485cfc0c2803d3702705ccbfb1a921f2a78381ad5389bc5c50077_prof);

    }

    // line 6
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_357d266913d6efdf048e03f6cf25a66b21dc676f587b12e5c44ad2ca69d3ecee = $this->env->getExtension("native_profiler");
        $__internal_357d266913d6efdf048e03f6cf25a66b21dc676f587b12e5c44ad2ca69d3ecee->enter($__internal_357d266913d6efdf048e03f6cf25a66b21dc676f587b12e5c44ad2ca69d3ecee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_357d266913d6efdf048e03f6cf25a66b21dc676f587b12e5c44ad2ca69d3ecee->leave($__internal_357d266913d6efdf048e03f6cf25a66b21dc676f587b12e5c44ad2ca69d3ecee_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d628a0cadd87eb55d3213a9214bd1a4fa3969a22305cf1fac9febb402f61346d = $this->env->getExtension("native_profiler");
        $__internal_d628a0cadd87eb55d3213a9214bd1a4fa3969a22305cf1fac9febb402f61346d->enter($__internal_d628a0cadd87eb55d3213a9214bd1a4fa3969a22305cf1fac9febb402f61346d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/equipo_trabajo/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d628a0cadd87eb55d3213a9214bd1a4fa3969a22305cf1fac9febb402f61346d->leave($__internal_d628a0cadd87eb55d3213a9214bd1a4fa3969a22305cf1fac9febb402f61346d_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14dc7c9900a5f65b884bcd6cf34096853a2350f7e20f668ad2d0a1dc4b0486d6 = $this->env->getExtension("native_profiler");
        $__internal_14dc7c9900a5f65b884bcd6cf34096853a2350f7e20f668ad2d0a1dc4b0486d6->enter($__internal_14dc7c9900a5f65b884bcd6cf34096853a2350f7e20f668ad2d0a1dc4b0486d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                \"proyecto.TareaProyeccionController\",
                \"proyecto.ViewportEquipoTrabajoController\"
            ],
            launch: function(){
                Ext.create('SCS.view.equipotrabajo.Viewport');
            }
        });
    </script>
";
        
        $__internal_14dc7c9900a5f65b884bcd6cf34096853a2350f7e20f668ad2d0a1dc4b0486d6->leave($__internal_14dc7c9900a5f65b884bcd6cf34096853a2350f7e20f668ad2d0a1dc4b0486d6_prof);

    }

    public function getTemplateName()
    {
        return "ProyectoBundle:EquipoTrabajo:index.html.twig";
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
/* {% block title %}EQUIPO-TRABAJO-SICONS{% endblock %}*/
/* */
/* {% block favicon %}{{ asset('favicon.ico') }}{% endblock %}*/
/* */
/* {% block stylesheet %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/equipo_trabajo/index.css') }}" />*/
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
/*                 "proyecto.TareaProyeccionController",*/
/*                 "proyecto.ViewportEquipoTrabajoController"*/
/*             ],*/
/*             launch: function(){*/
/*                 Ext.create('SCS.view.equipotrabajo.Viewport');*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
