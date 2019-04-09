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
        $__internal_8916378d187a411a60e44fd3b992f52b1992f54a92fda73e2818ef6fd3e51ea0 = $this->env->getExtension("native_profiler");
        $__internal_8916378d187a411a60e44fd3b992f52b1992f54a92fda73e2818ef6fd3e51ea0->enter($__internal_8916378d187a411a60e44fd3b992f52b1992f54a92fda73e2818ef6fd3e51ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8916378d187a411a60e44fd3b992f52b1992f54a92fda73e2818ef6fd3e51ea0->leave($__internal_8916378d187a411a60e44fd3b992f52b1992f54a92fda73e2818ef6fd3e51ea0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4653f3508663482d3a4830ca26f4f03590571765228ff919358decccd00ab98 = $this->env->getExtension("native_profiler");
        $__internal_b4653f3508663482d3a4830ca26f4f03590571765228ff919358decccd00ab98->enter($__internal_b4653f3508663482d3a4830ca26f4f03590571765228ff919358decccd00ab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b4653f3508663482d3a4830ca26f4f03590571765228ff919358decccd00ab98->leave($__internal_b4653f3508663482d3a4830ca26f4f03590571765228ff919358decccd00ab98_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_caed85501a3e0c3c71d7476f85db3f5cccc5c54c909634d45e81f2d77134a9ff = $this->env->getExtension("native_profiler");
        $__internal_caed85501a3e0c3c71d7476f85db3f5cccc5c54c909634d45e81f2d77134a9ff->enter($__internal_caed85501a3e0c3c71d7476f85db3f5cccc5c54c909634d45e81f2d77134a9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_caed85501a3e0c3c71d7476f85db3f5cccc5c54c909634d45e81f2d77134a9ff->leave($__internal_caed85501a3e0c3c71d7476f85db3f5cccc5c54c909634d45e81f2d77134a9ff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ca67e508a9b961fdf2842a52d1890d750931fa951b8367dfcfd2c371cbba79f = $this->env->getExtension("native_profiler");
        $__internal_4ca67e508a9b961fdf2842a52d1890d750931fa951b8367dfcfd2c371cbba79f->enter($__internal_4ca67e508a9b961fdf2842a52d1890d750931fa951b8367dfcfd2c371cbba79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4ca67e508a9b961fdf2842a52d1890d750931fa951b8367dfcfd2c371cbba79f->leave($__internal_4ca67e508a9b961fdf2842a52d1890d750931fa951b8367dfcfd2c371cbba79f_prof);

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
