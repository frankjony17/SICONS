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
        $__internal_95fb64f49d4e936c8fece5c51f803ca4a4bdceb06df66bb58078644a3e72520b = $this->env->getExtension("native_profiler");
        $__internal_95fb64f49d4e936c8fece5c51f803ca4a4bdceb06df66bb58078644a3e72520b->enter($__internal_95fb64f49d4e936c8fece5c51f803ca4a4bdceb06df66bb58078644a3e72520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95fb64f49d4e936c8fece5c51f803ca4a4bdceb06df66bb58078644a3e72520b->leave($__internal_95fb64f49d4e936c8fece5c51f803ca4a4bdceb06df66bb58078644a3e72520b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_216879a7c946f75bfef074c4614324a97dd5e0a63b3c29da1e2b160bbbb23410 = $this->env->getExtension("native_profiler");
        $__internal_216879a7c946f75bfef074c4614324a97dd5e0a63b3c29da1e2b160bbbb23410->enter($__internal_216879a7c946f75bfef074c4614324a97dd5e0a63b3c29da1e2b160bbbb23410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_216879a7c946f75bfef074c4614324a97dd5e0a63b3c29da1e2b160bbbb23410->leave($__internal_216879a7c946f75bfef074c4614324a97dd5e0a63b3c29da1e2b160bbbb23410_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1dd00e37a43c153f72a0e993da564bad2be44cfd21f91e2591cd1a84481df3a5 = $this->env->getExtension("native_profiler");
        $__internal_1dd00e37a43c153f72a0e993da564bad2be44cfd21f91e2591cd1a84481df3a5->enter($__internal_1dd00e37a43c153f72a0e993da564bad2be44cfd21f91e2591cd1a84481df3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1dd00e37a43c153f72a0e993da564bad2be44cfd21f91e2591cd1a84481df3a5->leave($__internal_1dd00e37a43c153f72a0e993da564bad2be44cfd21f91e2591cd1a84481df3a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f018755ae4e1b0a2935f53be0cbb6c60aadab7b7bc56e19cf0c56ef8e27acbe = $this->env->getExtension("native_profiler");
        $__internal_5f018755ae4e1b0a2935f53be0cbb6c60aadab7b7bc56e19cf0c56ef8e27acbe->enter($__internal_5f018755ae4e1b0a2935f53be0cbb6c60aadab7b7bc56e19cf0c56ef8e27acbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f018755ae4e1b0a2935f53be0cbb6c60aadab7b7bc56e19cf0c56ef8e27acbe->leave($__internal_5f018755ae4e1b0a2935f53be0cbb6c60aadab7b7bc56e19cf0c56ef8e27acbe_prof);

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
