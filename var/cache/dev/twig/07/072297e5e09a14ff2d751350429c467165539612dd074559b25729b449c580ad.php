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
        $__internal_e590a679fa6a0532c7e6a1dd2ead9670eeee20359c2076dc7d7e927e2e705eb8 = $this->env->getExtension("native_profiler");
        $__internal_e590a679fa6a0532c7e6a1dd2ead9670eeee20359c2076dc7d7e927e2e705eb8->enter($__internal_e590a679fa6a0532c7e6a1dd2ead9670eeee20359c2076dc7d7e927e2e705eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e590a679fa6a0532c7e6a1dd2ead9670eeee20359c2076dc7d7e927e2e705eb8->leave($__internal_e590a679fa6a0532c7e6a1dd2ead9670eeee20359c2076dc7d7e927e2e705eb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_483b262cd2f6afa22182b8068f3903f34d022abcbe9495e531c349e8e3bdd6d7 = $this->env->getExtension("native_profiler");
        $__internal_483b262cd2f6afa22182b8068f3903f34d022abcbe9495e531c349e8e3bdd6d7->enter($__internal_483b262cd2f6afa22182b8068f3903f34d022abcbe9495e531c349e8e3bdd6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_483b262cd2f6afa22182b8068f3903f34d022abcbe9495e531c349e8e3bdd6d7->leave($__internal_483b262cd2f6afa22182b8068f3903f34d022abcbe9495e531c349e8e3bdd6d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50868e27d60e533ec485e8e3247fa9666140821f01e3599885e23ef37c354aa6 = $this->env->getExtension("native_profiler");
        $__internal_50868e27d60e533ec485e8e3247fa9666140821f01e3599885e23ef37c354aa6->enter($__internal_50868e27d60e533ec485e8e3247fa9666140821f01e3599885e23ef37c354aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50868e27d60e533ec485e8e3247fa9666140821f01e3599885e23ef37c354aa6->leave($__internal_50868e27d60e533ec485e8e3247fa9666140821f01e3599885e23ef37c354aa6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f119de1da4242c6c63abea0d13ebe87731f2b58469b3871f8d7ab63100b15ee = $this->env->getExtension("native_profiler");
        $__internal_1f119de1da4242c6c63abea0d13ebe87731f2b58469b3871f8d7ab63100b15ee->enter($__internal_1f119de1da4242c6c63abea0d13ebe87731f2b58469b3871f8d7ab63100b15ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1f119de1da4242c6c63abea0d13ebe87731f2b58469b3871f8d7ab63100b15ee->leave($__internal_1f119de1da4242c6c63abea0d13ebe87731f2b58469b3871f8d7ab63100b15ee_prof);

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
