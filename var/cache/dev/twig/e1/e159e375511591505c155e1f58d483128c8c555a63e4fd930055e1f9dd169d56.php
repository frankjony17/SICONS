<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_818346d6dd4551acb6d00101fee805ff867b75d62a88ee5edf96a30735636bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0c17c259bfaf448c95703965654915ddc4bd1f6b39356ea3b75b355acb9b066 = $this->env->getExtension("native_profiler");
        $__internal_f0c17c259bfaf448c95703965654915ddc4bd1f6b39356ea3b75b355acb9b066->enter($__internal_f0c17c259bfaf448c95703965654915ddc4bd1f6b39356ea3b75b355acb9b066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0c17c259bfaf448c95703965654915ddc4bd1f6b39356ea3b75b355acb9b066->leave($__internal_f0c17c259bfaf448c95703965654915ddc4bd1f6b39356ea3b75b355acb9b066_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae0345472f896e119a1d322545a83046768c62515e006d01b70f44e42eb053e4 = $this->env->getExtension("native_profiler");
        $__internal_ae0345472f896e119a1d322545a83046768c62515e006d01b70f44e42eb053e4->enter($__internal_ae0345472f896e119a1d322545a83046768c62515e006d01b70f44e42eb053e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ae0345472f896e119a1d322545a83046768c62515e006d01b70f44e42eb053e4->leave($__internal_ae0345472f896e119a1d322545a83046768c62515e006d01b70f44e42eb053e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_89ce05470f026684424fd54e5b6ff50f513130d48dc7b7418a71b26ce4d8d129 = $this->env->getExtension("native_profiler");
        $__internal_89ce05470f026684424fd54e5b6ff50f513130d48dc7b7418a71b26ce4d8d129->enter($__internal_89ce05470f026684424fd54e5b6ff50f513130d48dc7b7418a71b26ce4d8d129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_89ce05470f026684424fd54e5b6ff50f513130d48dc7b7418a71b26ce4d8d129->leave($__internal_89ce05470f026684424fd54e5b6ff50f513130d48dc7b7418a71b26ce4d8d129_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7f690f32487a367b80002cda3d70678412fd52fdb3d8fd3f837e7c7c924f5e0 = $this->env->getExtension("native_profiler");
        $__internal_c7f690f32487a367b80002cda3d70678412fd52fdb3d8fd3f837e7c7c924f5e0->enter($__internal_c7f690f32487a367b80002cda3d70678412fd52fdb3d8fd3f837e7c7c924f5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c7f690f32487a367b80002cda3d70678412fd52fdb3d8fd3f837e7c7c924f5e0->leave($__internal_c7f690f32487a367b80002cda3d70678412fd52fdb3d8fd3f837e7c7c924f5e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
