<?php

/* ProyectoBundle:JefeDisenno:index.html.twig */
class __TwigTemplate_7d48a91bcaa3922520f5a7ba89b55492ec0d178106b615794c4980c9b9609807 extends Twig_Template
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
        $__internal_a14d65c2e889c8af4fbf50f2c59d2f1da21b23eec0395604e4b9fc62c2346f6e = $this->env->getExtension("native_profiler");
        $__internal_a14d65c2e889c8af4fbf50f2c59d2f1da21b23eec0395604e4b9fc62c2346f6e->enter($__internal_a14d65c2e889c8af4fbf50f2c59d2f1da21b23eec0395604e4b9fc62c2346f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProyectoBundle:JefeDisenno:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a14d65c2e889c8af4fbf50f2c59d2f1da21b23eec0395604e4b9fc62c2346f6e->leave($__internal_a14d65c2e889c8af4fbf50f2c59d2f1da21b23eec0395604e4b9fc62c2346f6e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb42fc95ac284c1de74da62fe1d69f90616c18251c1af0130f34001d82b8181d = $this->env->getExtension("native_profiler");
        $__internal_bb42fc95ac284c1de74da62fe1d69f90616c18251c1af0130f34001d82b8181d->enter($__internal_bb42fc95ac284c1de74da62fe1d69f90616c18251c1af0130f34001d82b8181d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JEFE-DISEÑO-SICONS";
        
        $__internal_bb42fc95ac284c1de74da62fe1d69f90616c18251c1af0130f34001d82b8181d->leave($__internal_bb42fc95ac284c1de74da62fe1d69f90616c18251c1af0130f34001d82b8181d_prof);

    }

    // line 6
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_d4090baa15c2ea0803ee2d991bd8111d6ffd19f8358c2d6aa3cad554dc88c474 = $this->env->getExtension("native_profiler");
        $__internal_d4090baa15c2ea0803ee2d991bd8111d6ffd19f8358c2d6aa3cad554dc88c474->enter($__internal_d4090baa15c2ea0803ee2d991bd8111d6ffd19f8358c2d6aa3cad554dc88c474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_d4090baa15c2ea0803ee2d991bd8111d6ffd19f8358c2d6aa3cad554dc88c474->leave($__internal_d4090baa15c2ea0803ee2d991bd8111d6ffd19f8358c2d6aa3cad554dc88c474_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_52e07291f96761b09b9c1962ad7f9c7f365d39d4ba35e3fde55cf560d7021739 = $this->env->getExtension("native_profiler");
        $__internal_52e07291f96761b09b9c1962ad7f9c7f365d39d4ba35e3fde55cf560d7021739->enter($__internal_52e07291f96761b09b9c1962ad7f9c7f365d39d4ba35e3fde55cf560d7021739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jefe_disenno/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_52e07291f96761b09b9c1962ad7f9c7f365d39d4ba35e3fde55cf560d7021739->leave($__internal_52e07291f96761b09b9c1962ad7f9c7f365d39d4ba35e3fde55cf560d7021739_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c782292a977b4bfffe7ad27d7bf62e210f35dee435f70b427915763b1b8e44f9 = $this->env->getExtension("native_profiler");
        $__internal_c782292a977b4bfffe7ad27d7bf62e210f35dee435f70b427915763b1b8e44f9->enter($__internal_c782292a977b4bfffe7ad27d7bf62e210f35dee435f70b427915763b1b8e44f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c782292a977b4bfffe7ad27d7bf62e210f35dee435f70b427915763b1b8e44f9->leave($__internal_c782292a977b4bfffe7ad27d7bf62e210f35dee435f70b427915763b1b8e44f9_prof);

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
