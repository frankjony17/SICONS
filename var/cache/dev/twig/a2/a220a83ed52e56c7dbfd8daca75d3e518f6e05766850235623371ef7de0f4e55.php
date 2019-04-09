<?php

/* ProyectoBundle:JefeDisenno:index.html.twig */
class __TwigTemplate_2d377a76c87f105dedcd6fb873ab182b6bda68db2304cc610033bbd92fdb313b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "ProyectoBundle:JefeDisenno:index.html.twig", 2);
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
        $__internal_9c526d52faac7b8764273624ea8913f1a31fea3f9e95ac1a3965760c6b794f38 = $this->env->getExtension("native_profiler");
        $__internal_9c526d52faac7b8764273624ea8913f1a31fea3f9e95ac1a3965760c6b794f38->enter($__internal_9c526d52faac7b8764273624ea8913f1a31fea3f9e95ac1a3965760c6b794f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProyectoBundle:JefeDisenno:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c526d52faac7b8764273624ea8913f1a31fea3f9e95ac1a3965760c6b794f38->leave($__internal_9c526d52faac7b8764273624ea8913f1a31fea3f9e95ac1a3965760c6b794f38_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fa384b82ffd406632240f67f5c22f346d36dcba40b5c0c8ec2bf91fc93358e8 = $this->env->getExtension("native_profiler");
        $__internal_1fa384b82ffd406632240f67f5c22f346d36dcba40b5c0c8ec2bf91fc93358e8->enter($__internal_1fa384b82ffd406632240f67f5c22f346d36dcba40b5c0c8ec2bf91fc93358e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JEFE-DISEÑO-SICONS";
        
        $__internal_1fa384b82ffd406632240f67f5c22f346d36dcba40b5c0c8ec2bf91fc93358e8->leave($__internal_1fa384b82ffd406632240f67f5c22f346d36dcba40b5c0c8ec2bf91fc93358e8_prof);

    }

    // line 6
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_fff146fc35cc07a656ab19cf46124952e6fbc86ff69ddccccbd572433c9e6371 = $this->env->getExtension("native_profiler");
        $__internal_fff146fc35cc07a656ab19cf46124952e6fbc86ff69ddccccbd572433c9e6371->enter($__internal_fff146fc35cc07a656ab19cf46124952e6fbc86ff69ddccccbd572433c9e6371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_fff146fc35cc07a656ab19cf46124952e6fbc86ff69ddccccbd572433c9e6371->leave($__internal_fff146fc35cc07a656ab19cf46124952e6fbc86ff69ddccccbd572433c9e6371_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_7b0e6945fc9dde4486a57a2c0f2c2fc8d7f7bec3db37c8024e7b1a3ff9627381 = $this->env->getExtension("native_profiler");
        $__internal_7b0e6945fc9dde4486a57a2c0f2c2fc8d7f7bec3db37c8024e7b1a3ff9627381->enter($__internal_7b0e6945fc9dde4486a57a2c0f2c2fc8d7f7bec3db37c8024e7b1a3ff9627381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jefe_disenno/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7b0e6945fc9dde4486a57a2c0f2c2fc8d7f7bec3db37c8024e7b1a3ff9627381->leave($__internal_7b0e6945fc9dde4486a57a2c0f2c2fc8d7f7bec3db37c8024e7b1a3ff9627381_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31a11f62a18eef85c5150c6efab89b1a41c1bc5c0564a64dda10410bebd90648 = $this->env->getExtension("native_profiler");
        $__internal_31a11f62a18eef85c5150c6efab89b1a41c1bc5c0564a64dda10410bebd90648->enter($__internal_31a11f62a18eef85c5150c6efab89b1a41c1bc5c0564a64dda10410bebd90648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                \"proyecto.ProyectoFormController\",
                \"proyecto.ProyectoGridController\",
                \"proyecto.PlanCalidadController\",
                \"proyecto.TareaProyeccionController\",
                \"proyecto.PlanCalidadProyectoController\",
                \"proyecto.TareaProyeccionProyectoController\",
                \"proyecto.ViewportController\",
                \"proyecto.ConsejoTecnicoController\"
            ],
            launch: function(){
                Ext.create('SCS.view.jefedisenno.Viewport');
            }
        });
    </script>
";
        
        $__internal_31a11f62a18eef85c5150c6efab89b1a41c1bc5c0564a64dda10410bebd90648->leave($__internal_31a11f62a18eef85c5150c6efab89b1a41c1bc5c0564a64dda10410bebd90648_prof);

    }

    public function getTemplateName()
    {
        return "ProyectoBundle:JefeDisenno:index.html.twig";
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
/* {% block title %}JEFE-DISEÑO-SICONS{% endblock %}*/
/* */
/* {% block favicon %}{{ asset('favicon.ico') }}{% endblock %}*/
/* */
/* {% block stylesheet %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/jefe_disenno/index.css') }}" />*/
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
/*                 "proyecto.ProyectoFormController",*/
/*                 "proyecto.ProyectoGridController",*/
/*                 "proyecto.PlanCalidadController",*/
/*                 "proyecto.TareaProyeccionController",*/
/*                 "proyecto.PlanCalidadProyectoController",*/
/*                 "proyecto.TareaProyeccionProyectoController",*/
/*                 "proyecto.ViewportController",*/
/*                 "proyecto.ConsejoTecnicoController"*/
/*             ],*/
/*             launch: function(){*/
/*                 Ext.create('SCS.view.jefedisenno.Viewport');*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
