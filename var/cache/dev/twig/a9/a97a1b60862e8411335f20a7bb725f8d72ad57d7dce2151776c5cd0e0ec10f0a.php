<?php

/* AdminBundle:Admin:index.html.twig */
class __TwigTemplate_dc0f3fd35428d54fdd30bb7a0190b10b1709fae55a8d5dfff505e697d7b6265f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Admin:index.html.twig", 2);
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
        $__internal_6ad7b4f3e3cddf5006a990c028964c852a16e7b360f49aebff016033dd0aa1d5 = $this->env->getExtension("native_profiler");
        $__internal_6ad7b4f3e3cddf5006a990c028964c852a16e7b360f49aebff016033dd0aa1d5->enter($__internal_6ad7b4f3e3cddf5006a990c028964c852a16e7b360f49aebff016033dd0aa1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad7b4f3e3cddf5006a990c028964c852a16e7b360f49aebff016033dd0aa1d5->leave($__internal_6ad7b4f3e3cddf5006a990c028964c852a16e7b360f49aebff016033dd0aa1d5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d1e309a211bda3892c007638728f4e4cfdb9d2fc0aa4730fbb69f2dda850bc8 = $this->env->getExtension("native_profiler");
        $__internal_9d1e309a211bda3892c007638728f4e4cfdb9d2fc0aa4730fbb69f2dda850bc8->enter($__internal_9d1e309a211bda3892c007638728f4e4cfdb9d2fc0aa4730fbb69f2dda850bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ADMIN-SICONS";
        
        $__internal_9d1e309a211bda3892c007638728f4e4cfdb9d2fc0aa4730fbb69f2dda850bc8->leave($__internal_9d1e309a211bda3892c007638728f4e4cfdb9d2fc0aa4730fbb69f2dda850bc8_prof);

    }

    // line 6
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_61cb8671fb970988e27f1d398b09a7eef6f02a6cb33b1d1d32439be650f2fdb1 = $this->env->getExtension("native_profiler");
        $__internal_61cb8671fb970988e27f1d398b09a7eef6f02a6cb33b1d1d32439be650f2fdb1->enter($__internal_61cb8671fb970988e27f1d398b09a7eef6f02a6cb33b1d1d32439be650f2fdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_61cb8671fb970988e27f1d398b09a7eef6f02a6cb33b1d1d32439be650f2fdb1->leave($__internal_61cb8671fb970988e27f1d398b09a7eef6f02a6cb33b1d1d32439be650f2fdb1_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5f71b480440bc765cb1705de92abe1bb48b904acdc70b53cb30838a4190f1dee = $this->env->getExtension("native_profiler");
        $__internal_5f71b480440bc765cb1705de92abe1bb48b904acdc70b53cb30838a4190f1dee->enter($__internal_5f71b480440bc765cb1705de92abe1bb48b904acdc70b53cb30838a4190f1dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5f71b480440bc765cb1705de92abe1bb48b904acdc70b53cb30838a4190f1dee->leave($__internal_5f71b480440bc765cb1705de92abe1bb48b904acdc70b53cb30838a4190f1dee_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2a4bb5d85207a31bf92e199818bb2a49522be990ad26c057493d7b8e8bd4513 = $this->env->getExtension("native_profiler");
        $__internal_f2a4bb5d85207a31bf92e199818bb2a49522be990ad26c057493d7b8e8bd4513->enter($__internal_f2a4bb5d85207a31bf92e199818bb2a49522be990ad26c057493d7b8e8bd4513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    <script>
        ";
        // line 15
        echo "
        Ext.application({
            name: 'SCS',
            appFolder: '/js/app',
            controllers: [
                \"admin.NomencladorTreeController\",
                \"admin.SeguridadTreeController\",
                \"admin.AdminController\",
                \"nomenclador.EntidadController\",
                \"nomenclador.CargoController\",
                \"nomenclador.PersonaTipoController\",
                \"nomenclador.PersonaController\",
                \"nomenclador.ElementoControlTipoController\",
                \"nomenclador.ElementoControlController\",
                \"nomenclador.AspectosRevizarController\",
                \"nomenclador.ConsejoTecnicoController\",
                \"nomenclador.ControlCalidadTipoController\",
                \"nomenclador.ControlCalidadController\",
                \"nomenclador.AspectosServicioIndicadoresController\",
                \"nomenclador.ProyectoTipoController\",
                \"nomenclador.ObjetosController\",
                \"nomenclador.ProyectoEspecialidadController\",
                \"nomenclador.EquipoTrabajoEspecialidadController\",
                \"nomenclador.EscalasController\",
                \"nomenclador.FormatoController\"
            ],
            launch: function(){
                Ext.create('SCS.view.admin.Viewport');
            }
        });
    </script>
";
        
        $__internal_f2a4bb5d85207a31bf92e199818bb2a49522be990ad26c057493d7b8e8bd4513->leave($__internal_f2a4bb5d85207a31bf92e199818bb2a49522be990ad26c057493d7b8e8bd4513_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  83 => 13,  77 => 12,  67 => 9,  61 => 8,  49 => 6,  37 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ADMIN-SICONS{% endblock %}*/
/* */
/* {% block favicon %}{{ asset('favicon.ico') }}{% endblock %}*/
/* */
/* {% block stylesheet %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/index.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script>*/
/*         {#{% include "AdminBundle:Admin:globalScript.html.twig" %}#}*/
/* */
/*         Ext.application({*/
/*             name: 'SCS',*/
/*             appFolder: '/js/app',*/
/*             controllers: [*/
/*                 "admin.NomencladorTreeController",*/
/*                 "admin.SeguridadTreeController",*/
/*                 "admin.AdminController",*/
/*                 "nomenclador.EntidadController",*/
/*                 "nomenclador.CargoController",*/
/*                 "nomenclador.PersonaTipoController",*/
/*                 "nomenclador.PersonaController",*/
/*                 "nomenclador.ElementoControlTipoController",*/
/*                 "nomenclador.ElementoControlController",*/
/*                 "nomenclador.AspectosRevizarController",*/
/*                 "nomenclador.ConsejoTecnicoController",*/
/*                 "nomenclador.ControlCalidadTipoController",*/
/*                 "nomenclador.ControlCalidadController",*/
/*                 "nomenclador.AspectosServicioIndicadoresController",*/
/*                 "nomenclador.ProyectoTipoController",*/
/*                 "nomenclador.ObjetosController",*/
/*                 "nomenclador.ProyectoEspecialidadController",*/
/*                 "nomenclador.EquipoTrabajoEspecialidadController",*/
/*                 "nomenclador.EscalasController",*/
/*                 "nomenclador.FormatoController"*/
/*             ],*/
/*             launch: function(){*/
/*                 Ext.create('SCS.view.admin.Viewport');*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
