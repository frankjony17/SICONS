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
        $__internal_6c94132b9b0f5a0b75adef8340c10fc43e8e2a2b475ed2b4c13ed1da6bbc1fc7 = $this->env->getExtension("native_profiler");
        $__internal_6c94132b9b0f5a0b75adef8340c10fc43e8e2a2b475ed2b4c13ed1da6bbc1fc7->enter($__internal_6c94132b9b0f5a0b75adef8340c10fc43e8e2a2b475ed2b4c13ed1da6bbc1fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c94132b9b0f5a0b75adef8340c10fc43e8e2a2b475ed2b4c13ed1da6bbc1fc7->leave($__internal_6c94132b9b0f5a0b75adef8340c10fc43e8e2a2b475ed2b4c13ed1da6bbc1fc7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_651e0c67317b2695ef13eeadbf1d28cd719dd97eede5c04f854541128d33c4cc = $this->env->getExtension("native_profiler");
        $__internal_651e0c67317b2695ef13eeadbf1d28cd719dd97eede5c04f854541128d33c4cc->enter($__internal_651e0c67317b2695ef13eeadbf1d28cd719dd97eede5c04f854541128d33c4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ADMIN-SICONS";
        
        $__internal_651e0c67317b2695ef13eeadbf1d28cd719dd97eede5c04f854541128d33c4cc->leave($__internal_651e0c67317b2695ef13eeadbf1d28cd719dd97eede5c04f854541128d33c4cc_prof);

    }

    // line 6
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_813d77dc33fc369e26b4867446296ecfc2ecd52310a46a16c77bd2c2cc821d8a = $this->env->getExtension("native_profiler");
        $__internal_813d77dc33fc369e26b4867446296ecfc2ecd52310a46a16c77bd2c2cc821d8a->enter($__internal_813d77dc33fc369e26b4867446296ecfc2ecd52310a46a16c77bd2c2cc821d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_813d77dc33fc369e26b4867446296ecfc2ecd52310a46a16c77bd2c2cc821d8a->leave($__internal_813d77dc33fc369e26b4867446296ecfc2ecd52310a46a16c77bd2c2cc821d8a_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_663e41cb16f23c4dc6bf2e5e75956754efed755b95b46e3430d6bf543b468b49 = $this->env->getExtension("native_profiler");
        $__internal_663e41cb16f23c4dc6bf2e5e75956754efed755b95b46e3430d6bf543b468b49->enter($__internal_663e41cb16f23c4dc6bf2e5e75956754efed755b95b46e3430d6bf543b468b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_663e41cb16f23c4dc6bf2e5e75956754efed755b95b46e3430d6bf543b468b49->leave($__internal_663e41cb16f23c4dc6bf2e5e75956754efed755b95b46e3430d6bf543b468b49_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4db259b360eed2ebbc72c83e93d5b646de489143b4d22fff84c29a558b426719 = $this->env->getExtension("native_profiler");
        $__internal_4db259b360eed2ebbc72c83e93d5b646de489143b4d22fff84c29a558b426719->enter($__internal_4db259b360eed2ebbc72c83e93d5b646de489143b4d22fff84c29a558b426719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                \"admin.PersonaController\"
            ],
            launch: function(){
                Ext.create('SCS.view.admin.Viewport');
            }
        });
    </script>
";
        
        $__internal_4db259b360eed2ebbc72c83e93d5b646de489143b4d22fff84c29a558b426719->leave($__internal_4db259b360eed2ebbc72c83e93d5b646de489143b4d22fff84c29a558b426719_prof);

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
/*                 "admin.PersonaController"*/
/*             ],*/
/*             launch: function(){*/
/*                 Ext.create('SCS.view.admin.Viewport');*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
