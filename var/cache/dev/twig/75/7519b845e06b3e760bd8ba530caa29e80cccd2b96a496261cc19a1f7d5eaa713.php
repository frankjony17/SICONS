<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f8b1052b158167d74c0565048c2f6f1130701dd1bfd017c0c0d82222e4461fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ce2f86d2e2d2800ce162503999d5bcb51c748bfd0ab45288d21f25673c6172eb = $this->env->getExtension("native_profiler");
        $__internal_ce2f86d2e2d2800ce162503999d5bcb51c748bfd0ab45288d21f25673c6172eb->enter($__internal_ce2f86d2e2d2800ce162503999d5bcb51c748bfd0ab45288d21f25673c6172eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce2f86d2e2d2800ce162503999d5bcb51c748bfd0ab45288d21f25673c6172eb->leave($__internal_ce2f86d2e2d2800ce162503999d5bcb51c748bfd0ab45288d21f25673c6172eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfef991423bf6c891733194af324c75fa439e5b8a6e38987498ad7193710d54d = $this->env->getExtension("native_profiler");
        $__internal_bfef991423bf6c891733194af324c75fa439e5b8a6e38987498ad7193710d54d->enter($__internal_bfef991423bf6c891733194af324c75fa439e5b8a6e38987498ad7193710d54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bfef991423bf6c891733194af324c75fa439e5b8a6e38987498ad7193710d54d->leave($__internal_bfef991423bf6c891733194af324c75fa439e5b8a6e38987498ad7193710d54d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b286875f2b9c866d3fa57447e0badf8ac6bd6c15643b69c66965eb5c0f68e46b = $this->env->getExtension("native_profiler");
        $__internal_b286875f2b9c866d3fa57447e0badf8ac6bd6c15643b69c66965eb5c0f68e46b->enter($__internal_b286875f2b9c866d3fa57447e0badf8ac6bd6c15643b69c66965eb5c0f68e46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b286875f2b9c866d3fa57447e0badf8ac6bd6c15643b69c66965eb5c0f68e46b->leave($__internal_b286875f2b9c866d3fa57447e0badf8ac6bd6c15643b69c66965eb5c0f68e46b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b14a8879868742fd8ff7f70f40c8697d8967b48908fe522bcd9a8609a6b9ed6e = $this->env->getExtension("native_profiler");
        $__internal_b14a8879868742fd8ff7f70f40c8697d8967b48908fe522bcd9a8609a6b9ed6e->enter($__internal_b14a8879868742fd8ff7f70f40c8697d8967b48908fe522bcd9a8609a6b9ed6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b14a8879868742fd8ff7f70f40c8697d8967b48908fe522bcd9a8609a6b9ed6e->leave($__internal_b14a8879868742fd8ff7f70f40c8697d8967b48908fe522bcd9a8609a6b9ed6e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
