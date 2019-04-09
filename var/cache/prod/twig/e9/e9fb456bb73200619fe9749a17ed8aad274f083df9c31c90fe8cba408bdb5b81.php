<?php

/* AdminBundle:Admin:index.html.twig */
class __TwigTemplate_830aab8eb29178edaa15142d2f2902ba20c3525cf595a6df1fe0cf424e0617ca extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "ADMIN-SICONS";
    }

    // line 6
    public function block_favicon($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/index.css"), "html", null, true);
        echo "\" />
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "    <script>
        ";
        // line 15
        echo "
        Ext.application({
            name: 'SCS',
            appFolder: '/js/app',
            controllers: [
                \"admin.SeguridadTreeController\",
                \"admin.AdminController\"
            ],
            launch: function(){
                Ext.create('SCS.view.admin.Viewport');
            }
        });
    </script>
";
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
        return array (  59 => 15,  56 => 13,  53 => 12,  46 => 9,  43 => 8,  37 => 6,  31 => 4,  11 => 2,);
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
/*                 "admin.SeguridadTreeController",*/
/*                 "admin.AdminController"*/
/*             ],*/
/*             launch: function(){*/
/*                 Ext.create('SCS.view.admin.Viewport');*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
