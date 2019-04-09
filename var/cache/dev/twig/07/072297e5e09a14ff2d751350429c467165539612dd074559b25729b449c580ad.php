<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_93c09346c6bfe81b62e5abd4949d631d86e987113bddb95a01912ef1478ac47c extends Twig_Template
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
        $__internal_21d2361f13bc400bcddcf652ea19435b580cea4203ac6348d01446031ad43096 = $this->env->getExtension("native_profiler");
        $__internal_21d2361f13bc400bcddcf652ea19435b580cea4203ac6348d01446031ad43096->enter($__internal_21d2361f13bc400bcddcf652ea19435b580cea4203ac6348d01446031ad43096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d2361f13bc400bcddcf652ea19435b580cea4203ac6348d01446031ad43096->leave($__internal_21d2361f13bc400bcddcf652ea19435b580cea4203ac6348d01446031ad43096_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a38b1f7e463b52b62cd1dc16c32934b52c3a75fa46efc804ab4323dc10fe21d5 = $this->env->getExtension("native_profiler");
        $__internal_a38b1f7e463b52b62cd1dc16c32934b52c3a75fa46efc804ab4323dc10fe21d5->enter($__internal_a38b1f7e463b52b62cd1dc16c32934b52c3a75fa46efc804ab4323dc10fe21d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a38b1f7e463b52b62cd1dc16c32934b52c3a75fa46efc804ab4323dc10fe21d5->leave($__internal_a38b1f7e463b52b62cd1dc16c32934b52c3a75fa46efc804ab4323dc10fe21d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e87e512a44ee6f70006cb88a729acda277807ea337782549a1a0319da4cff26d = $this->env->getExtension("native_profiler");
        $__internal_e87e512a44ee6f70006cb88a729acda277807ea337782549a1a0319da4cff26d->enter($__internal_e87e512a44ee6f70006cb88a729acda277807ea337782549a1a0319da4cff26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e87e512a44ee6f70006cb88a729acda277807ea337782549a1a0319da4cff26d->leave($__internal_e87e512a44ee6f70006cb88a729acda277807ea337782549a1a0319da4cff26d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1011d23ec8de5cf2fead29e0ef3faff898363e46d277a8446eb53bcdee39ae0 = $this->env->getExtension("native_profiler");
        $__internal_f1011d23ec8de5cf2fead29e0ef3faff898363e46d277a8446eb53bcdee39ae0->enter($__internal_f1011d23ec8de5cf2fead29e0ef3faff898363e46d277a8446eb53bcdee39ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f1011d23ec8de5cf2fead29e0ef3faff898363e46d277a8446eb53bcdee39ae0->leave($__internal_f1011d23ec8de5cf2fead29e0ef3faff898363e46d277a8446eb53bcdee39ae0_prof);

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
