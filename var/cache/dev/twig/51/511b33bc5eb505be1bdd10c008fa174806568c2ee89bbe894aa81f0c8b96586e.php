<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1463f6b32d84b4f25f07224df4b3a8121b686ca7780e7f9f21472f2018ecbf1d extends Twig_Template
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
        $__internal_015d60a5252b686ee45e15de7dbb10d15ecb18e54e503fedb7686468e9458fb6 = $this->env->getExtension("native_profiler");
        $__internal_015d60a5252b686ee45e15de7dbb10d15ecb18e54e503fedb7686468e9458fb6->enter($__internal_015d60a5252b686ee45e15de7dbb10d15ecb18e54e503fedb7686468e9458fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_015d60a5252b686ee45e15de7dbb10d15ecb18e54e503fedb7686468e9458fb6->leave($__internal_015d60a5252b686ee45e15de7dbb10d15ecb18e54e503fedb7686468e9458fb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d391e1d8c58f6a8c453fe1b87f385f229c7d88810147fb9259b2e65a2c27bdba = $this->env->getExtension("native_profiler");
        $__internal_d391e1d8c58f6a8c453fe1b87f385f229c7d88810147fb9259b2e65a2c27bdba->enter($__internal_d391e1d8c58f6a8c453fe1b87f385f229c7d88810147fb9259b2e65a2c27bdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d391e1d8c58f6a8c453fe1b87f385f229c7d88810147fb9259b2e65a2c27bdba->leave($__internal_d391e1d8c58f6a8c453fe1b87f385f229c7d88810147fb9259b2e65a2c27bdba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_931be27b9b7f888ac29848a38de75183ac3c71422b1241607c859c90d49aadbf = $this->env->getExtension("native_profiler");
        $__internal_931be27b9b7f888ac29848a38de75183ac3c71422b1241607c859c90d49aadbf->enter($__internal_931be27b9b7f888ac29848a38de75183ac3c71422b1241607c859c90d49aadbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_931be27b9b7f888ac29848a38de75183ac3c71422b1241607c859c90d49aadbf->leave($__internal_931be27b9b7f888ac29848a38de75183ac3c71422b1241607c859c90d49aadbf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_414338f86eb1b618ef999878552e98a80ac9f8ee729acb9cbbfa4fe3877b0160 = $this->env->getExtension("native_profiler");
        $__internal_414338f86eb1b618ef999878552e98a80ac9f8ee729acb9cbbfa4fe3877b0160->enter($__internal_414338f86eb1b618ef999878552e98a80ac9f8ee729acb9cbbfa4fe3877b0160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_414338f86eb1b618ef999878552e98a80ac9f8ee729acb9cbbfa4fe3877b0160->leave($__internal_414338f86eb1b618ef999878552e98a80ac9f8ee729acb9cbbfa4fe3877b0160_prof);

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
