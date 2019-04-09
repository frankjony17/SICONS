<?php

/* AdminBundle:Secured:login.html.twig */
class __TwigTemplate_d5e62319b419d9b77753f71b31ccd67d19a60f3d22309bc612329b71a490cf8a extends Twig_Template
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
        $__internal_37239de19f3791d9779dad8cb4f97610a127aaa31935a8fafd8e88149f7a89da = $this->env->getExtension("native_profiler");
        $__internal_37239de19f3791d9779dad8cb4f97610a127aaa31935a8fafd8e88149f7a89da->enter($__internal_37239de19f3791d9779dad8cb4f97610a127aaa31935a8fafd8e88149f7a89da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Secured:login.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_37239de19f3791d9779dad8cb4f97610a127aaa31935a8fafd8e88149f7a89da->leave($__internal_37239de19f3791d9779dad8cb4f97610a127aaa31935a8fafd8e88149f7a89da_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_36711b6025c46a62ba17e7d7b208fe9878a68564b640667d8848252a9e958697 = $this->env->getExtension("native_profiler");
        $__internal_36711b6025c46a62ba17e7d7b208fe9878a68564b640667d8848252a9e958697->enter($__internal_36711b6025c46a62ba17e7d7b208fe9878a68564b640667d8848252a9e958697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_36711b6025c46a62ba17e7d7b208fe9878a68564b640667d8848252a9e958697->leave($__internal_36711b6025c46a62ba17e7d7b208fe9878a68564b640667d8848252a9e958697_prof);

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
