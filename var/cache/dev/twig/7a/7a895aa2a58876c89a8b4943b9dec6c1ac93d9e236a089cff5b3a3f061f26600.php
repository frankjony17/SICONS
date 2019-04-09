<?php

/* ProyectoBundle:EspecialistaCalidad:index.html.twig */
class __TwigTemplate_02be325be8176dcec2013cf5aa58a7cbe9754f5bebe9e194c599c98e88a737e8 extends Twig_Template
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
        $__internal_e940cbd113cff82895d772d7a3c9e05d3c9b611f4f89a2028da2d44c905f1f97 = $this->env->getExtension("native_profiler");
        $__internal_e940cbd113cff82895d772d7a3c9e05d3c9b611f4f89a2028da2d44c905f1f97->enter($__internal_e940cbd113cff82895d772d7a3c9e05d3c9b611f4f89a2028da2d44c905f1f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProyectoBundle:EspecialistaCalidad:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e940cbd113cff82895d772d7a3c9e05d3c9b611f4f89a2028da2d44c905f1f97->leave($__internal_e940cbd113cff82895d772d7a3c9e05d3c9b611f4f89a2028da2d44c905f1f97_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3adb3cdedcba70eeccb6acc48be7e273691b8a4b9f2696cfe1405a1ebd206de4 = $this->env->getExtension("native_profiler");
        $__internal_3adb3cdedcba70eeccb6acc48be7e273691b8a4b9f2696cfe1405a1ebd206de4->enter($__internal_3adb3cdedcba70eeccb6acc48be7e273691b8a4b9f2696cfe1405a1ebd206de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPECIALISTA-CALIDAD-SICONS";
        
        $__internal_3adb3cdedcba70eeccb6acc48be7e273691b8a4b9f2696cfe1405a1ebd206de4->leave($__internal_3adb3cdedcba70eeccb6acc48be7e273691b8a4b9f2696cfe1405a1ebd206de4_prof);

    }

    // line 6
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_a6e10f6eff08902068112e5a58c7bc40c4d39808d8dbb1803656a1a68948da20 = $this->env->getExtension("native_profiler");
        $__internal_a6e10f6eff08902068112e5a58c7bc40c4d39808d8dbb1803656a1a68948da20->enter($__internal_a6e10f6eff08902068112e5a58c7bc40c4d39808d8dbb1803656a1a68948da20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_a6e10f6eff08902068112e5a58c7bc40c4d39808d8dbb1803656a1a68948da20->leave($__internal_a6e10f6eff08902068112e5a58c7bc40c4d39808d8dbb1803656a1a68948da20_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e4da869f600ade1ebb938c8bc8636f0646a58435d89cf64fa94838998d3c5088 = $this->env->getExtension("native_profiler");
        $__internal_e4da869f600ade1ebb938c8bc8636f0646a58435d89cf64fa94838998d3c5088->enter($__internal_e4da869f600ade1ebb938c8bc8636f0646a58435d89cf64fa94838998d3c5088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/especialista_calidad/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e4da869f600ade1ebb938c8bc8636f0646a58435d89cf64fa94838998d3c5088->leave($__internal_e4da869f600ade1ebb938c8bc8636f0646a58435d89cf64fa94838998d3c5088_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ec86558165bcc034256d117f78f12a4425552551cd0cf9e399b0e73d39ee8c9 = $this->env->getExtension("native_profiler");
        $__internal_6ec86558165bcc034256d117f78f12a4425552551cd0cf9e399b0e73d39ee8c9->enter($__internal_6ec86558165bcc034256d117f78f12a4425552551cd0cf9e399b0e73d39ee8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6ec86558165bcc034256d117f78f12a4425552551cd0cf9e399b0e73d39ee8c9->leave($__internal_6ec86558165bcc034256d117f78f12a4425552551cd0cf9e399b0e73d39ee8c9_prof);

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
