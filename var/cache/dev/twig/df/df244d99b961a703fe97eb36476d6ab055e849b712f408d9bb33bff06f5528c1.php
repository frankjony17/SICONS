<?php

/* AdminBundle:Admin:index.html.twig */
class __TwigTemplate_7639f65fe1551411430e579d9164aa406243f7afd8d1cb6df2a14e73dfca0d48 extends Twig_Template
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
        $__internal_0c8a8c4fcef5ef7dc02fb7ab94e5d29bcfc8298ccf9c62a76b0a008083e9690f = $this->env->getExtension("native_profiler");
        $__internal_0c8a8c4fcef5ef7dc02fb7ab94e5d29bcfc8298ccf9c62a76b0a008083e9690f->enter($__internal_0c8a8c4fcef5ef7dc02fb7ab94e5d29bcfc8298ccf9c62a76b0a008083e9690f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c8a8c4fcef5ef7dc02fb7ab94e5d29bcfc8298ccf9c62a76b0a008083e9690f->leave($__internal_0c8a8c4fcef5ef7dc02fb7ab94e5d29bcfc8298ccf9c62a76b0a008083e9690f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d8025f3ef53ad0a609d1e2f5a433c2bb4f9fc4505b8e4199376f2d38b121c5a = $this->env->getExtension("native_profiler");
        $__internal_6d8025f3ef53ad0a609d1e2f5a433c2bb4f9fc4505b8e4199376f2d38b121c5a->enter($__internal_6d8025f3ef53ad0a609d1e2f5a433c2bb4f9fc4505b8e4199376f2d38b121c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ADMIN-SICONS";
        
        $__internal_6d8025f3ef53ad0a609d1e2f5a433c2bb4f9fc4505b8e4199376f2d38b121c5a->leave($__internal_6d8025f3ef53ad0a609d1e2f5a433c2bb4f9fc4505b8e4199376f2d38b121c5a_prof);

    }

    // line 6
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_ff13b61364f4f75551adde7b83b7277b57e5867866a303c9333e3110f30c074a = $this->env->getExtension("native_profiler");
        $__internal_ff13b61364f4f75551adde7b83b7277b57e5867866a303c9333e3110f30c074a->enter($__internal_ff13b61364f4f75551adde7b83b7277b57e5867866a303c9333e3110f30c074a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_ff13b61364f4f75551adde7b83b7277b57e5867866a303c9333e3110f30c074a->leave($__internal_ff13b61364f4f75551adde7b83b7277b57e5867866a303c9333e3110f30c074a_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b1c25c0f134c0978da425e0fd72cfcbafdf0515a927b7c507bf243dcd4b1d68c = $this->env->getExtension("native_profiler");
        $__internal_b1c25c0f134c0978da425e0fd72cfcbafdf0515a927b7c507bf243dcd4b1d68c->enter($__internal_b1c25c0f134c0978da425e0fd72cfcbafdf0515a927b7c507bf243dcd4b1d68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b1c25c0f134c0978da425e0fd72cfcbafdf0515a927b7c507bf243dcd4b1d68c->leave($__internal_b1c25c0f134c0978da425e0fd72cfcbafdf0515a927b7c507bf243dcd4b1d68c_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82184488e45fd460bbe11200cf495781743cc3ae2d3ddd0bd1ee792082b5b71b = $this->env->getExtension("native_profiler");
        $__internal_82184488e45fd460bbe11200cf495781743cc3ae2d3ddd0bd1ee792082b5b71b->enter($__internal_82184488e45fd460bbe11200cf495781743cc3ae2d3ddd0bd1ee792082b5b71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                \"admin.AdminController\",
                \"admin.UsersController\"
            ],
            launch: function(){
                Ext.create('SCS.view.admin.Viewport');
            }
        });
    </script>
";
        
        $__internal_82184488e45fd460bbe11200cf495781743cc3ae2d3ddd0bd1ee792082b5b71b->leave($__internal_82184488e45fd460bbe11200cf495781743cc3ae2d3ddd0bd1ee792082b5b71b_prof);

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
/*                 "admin.SeguridadTreeController",*/
/*                 "admin.AdminController",*/
/*                 "admin.UsersController"*/
/*             ],*/
/*             launch: function(){*/
/*                 Ext.create('SCS.view.admin.Viewport');*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
