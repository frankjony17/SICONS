<?php

/* AdminBundle:Secured:login.html.twig */
class __TwigTemplate_c1609ece05e012501af86c10cc875d5905fc58797e94b1094a939619f1e4f5e4 extends Twig_Template
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
        $__internal_7821af5a5decc8091c42ab15d38c00e94b3c9580fafa3451739ecdb12f40a54e = $this->env->getExtension("native_profiler");
        $__internal_7821af5a5decc8091c42ab15d38c00e94b3c9580fafa3451739ecdb12f40a54e->enter($__internal_7821af5a5decc8091c42ab15d38c00e94b3c9580fafa3451739ecdb12f40a54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Secured:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7821af5a5decc8091c42ab15d38c00e94b3c9580fafa3451739ecdb12f40a54e->leave($__internal_7821af5a5decc8091c42ab15d38c00e94b3c9580fafa3451739ecdb12f40a54e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_424efb27ff10346a879527149ab12a82357e2596920ec6ef026d6c5f8f414503 = $this->env->getExtension("native_profiler");
        $__internal_424efb27ff10346a879527149ab12a82357e2596920ec6ef026d6c5f8f414503->enter($__internal_424efb27ff10346a879527149ab12a82357e2596920ec6ef026d6c5f8f414503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SICONS";
        
        $__internal_424efb27ff10346a879527149ab12a82357e2596920ec6ef026d6c5f8f414503->leave($__internal_424efb27ff10346a879527149ab12a82357e2596920ec6ef026d6c5f8f414503_prof);

    }

    // line 5
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_08cd6a8737d3ee883c8bf4b874e0ea16175375735978bc5b603605cddeedd868 = $this->env->getExtension("native_profiler");
        $__internal_08cd6a8737d3ee883c8bf4b874e0ea16175375735978bc5b603605cddeedd868->enter($__internal_08cd6a8737d3ee883c8bf4b874e0ea16175375735978bc5b603605cddeedd868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        
        $__internal_08cd6a8737d3ee883c8bf4b874e0ea16175375735978bc5b603605cddeedd868->leave($__internal_08cd6a8737d3ee883c8bf4b874e0ea16175375735978bc5b603605cddeedd868_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_66a9cc92acc4454ed8ba9810f4e5dd979daeb614474815216dcd6ca2cc320a93 = $this->env->getExtension("native_profiler");
        $__internal_66a9cc92acc4454ed8ba9810f4e5dd979daeb614474815216dcd6ca2cc320a93->enter($__internal_66a9cc92acc4454ed8ba9810f4e5dd979daeb614474815216dcd6ca2cc320a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/index.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_66a9cc92acc4454ed8ba9810f4e5dd979daeb614474815216dcd6ca2cc320a93->leave($__internal_66a9cc92acc4454ed8ba9810f4e5dd979daeb614474815216dcd6ca2cc320a93_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abe9a21b638ffc1314cd69b8eaa33f6d2f39defd35cdedfb7f82a70ef65ba0f8 = $this->env->getExtension("native_profiler");
        $__internal_abe9a21b638ffc1314cd69b8eaa33f6d2f39defd35cdedfb7f82a70ef65ba0f8->enter($__internal_abe9a21b638ffc1314cd69b8eaa33f6d2f39defd35cdedfb7f82a70ef65ba0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_abe9a21b638ffc1314cd69b8eaa33f6d2f39defd35cdedfb7f82a70ef65ba0f8->leave($__internal_abe9a21b638ffc1314cd69b8eaa33f6d2f39defd35cdedfb7f82a70ef65ba0f8_prof);

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
