<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e20a06b853382d59c3bbf41de338ae6bbe4285217bb142673deb119d06e04a77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e727eb9ab1da4789b6503c00b4fa6612441f5dd6fcf25b51bf3ac1f83d6758c6 = $this->env->getExtension("native_profiler");
        $__internal_e727eb9ab1da4789b6503c00b4fa6612441f5dd6fcf25b51bf3ac1f83d6758c6->enter($__internal_e727eb9ab1da4789b6503c00b4fa6612441f5dd6fcf25b51bf3ac1f83d6758c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e727eb9ab1da4789b6503c00b4fa6612441f5dd6fcf25b51bf3ac1f83d6758c6->leave($__internal_e727eb9ab1da4789b6503c00b4fa6612441f5dd6fcf25b51bf3ac1f83d6758c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3b7d719c6fdc05d5e72fd88d5bddf86e15d6cf787895b615fd65e01bd8a7d60 = $this->env->getExtension("native_profiler");
        $__internal_d3b7d719c6fdc05d5e72fd88d5bddf86e15d6cf787895b615fd65e01bd8a7d60->enter($__internal_d3b7d719c6fdc05d5e72fd88d5bddf86e15d6cf787895b615fd65e01bd8a7d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3b7d719c6fdc05d5e72fd88d5bddf86e15d6cf787895b615fd65e01bd8a7d60->leave($__internal_d3b7d719c6fdc05d5e72fd88d5bddf86e15d6cf787895b615fd65e01bd8a7d60_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_524c29bd94b451014f922034a9317ddacda7d5fbaad65ee3e5648cf8648fabc2 = $this->env->getExtension("native_profiler");
        $__internal_524c29bd94b451014f922034a9317ddacda7d5fbaad65ee3e5648cf8648fabc2->enter($__internal_524c29bd94b451014f922034a9317ddacda7d5fbaad65ee3e5648cf8648fabc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_524c29bd94b451014f922034a9317ddacda7d5fbaad65ee3e5648cf8648fabc2->leave($__internal_524c29bd94b451014f922034a9317ddacda7d5fbaad65ee3e5648cf8648fabc2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4db174653a0910ad9130f93cccb1fab1e3bb8162d3af394d8b40aa7521817bfe = $this->env->getExtension("native_profiler");
        $__internal_4db174653a0910ad9130f93cccb1fab1e3bb8162d3af394d8b40aa7521817bfe->enter($__internal_4db174653a0910ad9130f93cccb1fab1e3bb8162d3af394d8b40aa7521817bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4db174653a0910ad9130f93cccb1fab1e3bb8162d3af394d8b40aa7521817bfe->leave($__internal_4db174653a0910ad9130f93cccb1fab1e3bb8162d3af394d8b40aa7521817bfe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
