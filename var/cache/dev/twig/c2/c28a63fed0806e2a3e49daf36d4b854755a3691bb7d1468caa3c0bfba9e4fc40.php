<?php

/* AdminBundle:Secured:login.html.twig */
class __TwigTemplate_d5e62319b419d9b77753f71b31ccd67d19a60f3d22309bc612329b71a490cf8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Secured:login.html.twig", 1);
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
        $__internal_7a84ab71ec9cc8dae4ca99a40064a4b3b43724ee873895a9cd29451e988aded9 = $this->env->getExtension("native_profiler");
        $__internal_7a84ab71ec9cc8dae4ca99a40064a4b3b43724ee873895a9cd29451e988aded9->enter($__internal_7a84ab71ec9cc8dae4ca99a40064a4b3b43724ee873895a9cd29451e988aded9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Secured:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a84ab71ec9cc8dae4ca99a40064a4b3b43724ee873895a9cd29451e988aded9->leave($__internal_7a84ab71ec9cc8dae4ca99a40064a4b3b43724ee873895a9cd29451e988aded9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_afaa64f5c024bceaedfc9cdf04cc986006e83791b9e76418009811976f54ed8d = $this->env->getExtension("native_profiler");
        $__internal_afaa64f5c024bceaedfc9cdf04cc986006e83791b9e76418009811976f54ed8d->enter($__internal_afaa64f5c024bceaedfc9cdf04cc986006e83791b9e76418009811976f54ed8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SICONS";
        
        $__internal_afaa64f5c024bceaedfc9cdf04cc986006e83791b9e76418009811976f54ed8d->leave($__internal_afaa64f5c024bceaedfc9cdf04cc986006e83791b9e76418009811976f54ed8d_prof);

    }

    // line 5
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_dddf8cb572edc639243f1d3513b58619278d083bb0f42c5ecee16193c3545465 = $this->env->getExtension("native_profiler");
        $__internal_dddf8cb572edc639243f1d3513b58619278d083bb0f42c5ecee16193c3545465->enter($__internal_dddf8cb572edc639243f1d3513b58619278d083bb0f42c5ecee16193c3545465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_dddf8cb572edc639243f1d3513b58619278d083bb0f42c5ecee16193c3545465->leave($__internal_dddf8cb572edc639243f1d3513b58619278d083bb0f42c5ecee16193c3545465_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_713bcffda95f7ce6fef8c5aff2af47ff695947b357b8a0242ce50562ffa0e67b = $this->env->getExtension("native_profiler");
        $__internal_713bcffda95f7ce6fef8c5aff2af47ff695947b357b8a0242ce50562ffa0e67b->enter($__internal_713bcffda95f7ce6fef8c5aff2af47ff695947b357b8a0242ce50562ffa0e67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_713bcffda95f7ce6fef8c5aff2af47ff695947b357b8a0242ce50562ffa0e67b->leave($__internal_713bcffda95f7ce6fef8c5aff2af47ff695947b357b8a0242ce50562ffa0e67b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0733426f76c3c01e5b9ffef58dd557e1cd2f1f2dacd7e249c649a690f09e5225 = $this->env->getExtension("native_profiler");
        $__internal_0733426f76c3c01e5b9ffef58dd557e1cd2f1f2dacd7e249c649a690f09e5225->enter($__internal_0733426f76c3c01e5b9ffef58dd557e1cd2f1f2dacd7e249c649a690f09e5225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    <script>
        Ext.application({
            name: 'SCS',
            appFolder: '/js/app',
                controllers: [
                    \"admin.LoginController\"
                ],
            launch: function(){
                Ext.create('SCS.view.admin.LoginViewport');
            }
        });
    </script>
";
        
        $__internal_0733426f76c3c01e5b9ffef58dd557e1cd2f1f2dacd7e249c649a690f09e5225->leave($__internal_0733426f76c3c01e5b9ffef58dd557e1cd2f1f2dacd7e249c649a690f09e5225_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  77 => 11,  67 => 8,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}SICONS{% endblock %}*/
/* */
/* {% block favicon %}{{ asset('favicon.ico') }}{% endblock %}*/
/* */
/* {% block stylesheet %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/index.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script>*/
/*         Ext.application({*/
/*             name: 'SCS',*/
/*             appFolder: '/js/app',*/
/*                 controllers: [*/
/*                     "admin.LoginController"*/
/*                 ],*/
/*             launch: function(){*/
/*                 Ext.create('SCS.view.admin.LoginViewport');*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
