<?php

/* AdminBundle:Secured:login.html.twig */
class __TwigTemplate_c1183faed92d3aefdf0181128ae325751ac064d940289f515ae993f0849a00c7 extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "AdminBundle:Secured:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 3,  23 => 2,  20 => 1,);
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
