<?php

/* AdminBundle:Secured:login.html.twig */
class __TwigTemplate_c1609ece05e012501af86c10cc875d5905fc58797e94b1094a939619f1e4f5e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d1f536972e4c643e17c77205fd50bc8baad77cad64b9861540f0909ba25cb65 = $this->env->getExtension("native_profiler");
        $__internal_4d1f536972e4c643e17c77205fd50bc8baad77cad64b9861540f0909ba25cb65->enter($__internal_4d1f536972e4c643e17c77205fd50bc8baad77cad64b9861540f0909ba25cb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Secured:login.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_4d1f536972e4c643e17c77205fd50bc8baad77cad64b9861540f0909ba25cb65->leave($__internal_4d1f536972e4c643e17c77205fd50bc8baad77cad64b9861540f0909ba25cb65_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_f1d8e5ecc22fc474e9086529341fb42bd2a52567a108e0fb07066a24097058eb = $this->env->getExtension("native_profiler");
        $__internal_f1d8e5ecc22fc474e9086529341fb42bd2a52567a108e0fb07066a24097058eb->enter($__internal_f1d8e5ecc22fc474e9086529341fb42bd2a52567a108e0fb07066a24097058eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1 class=\"title\">Login</h1>

    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
        
        $__internal_f1d8e5ecc22fc474e9086529341fb42bd2a52567a108e0fb07066a24097058eb->leave($__internal_f1d8e5ecc22fc474e9086529341fb42bd2a52567a108e0fb07066a24097058eb_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Secured:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block content %}*/
/*     <h1 class="title">Login</h1>*/
/* */
/*     <form action="{{ path("_security_check") }}" method="post" id="login">*/
/*         <div>*/
/*             <label for="username">Username</label>*/
/*             <input type="text" id="username" name="_username" />*/
/*         </div>*/
/* */
/*         <div>*/
/*             <label for="password">Password</label>*/
/*             <input type="password" id="password" name="_password" />*/
/*         </div>*/
/* */
/*         <button type="submit" class="sf-button">*/
/*             <span class="border-l">*/
/*                 <span class="border-r">*/
/*                     <span class="btn-bg">Login</span>*/
/*                 </span>*/
/*             </span>*/
/*         </button>*/
/*     </form>*/
/* {% endblock %}*/
/* */
