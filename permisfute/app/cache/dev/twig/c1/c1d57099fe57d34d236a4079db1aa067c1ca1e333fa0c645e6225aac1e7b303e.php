<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_751ec3c5a18e55ff70064ea296e76979e81e83505cbf4db28d98526847cbbd64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86709a9fed2a801ac5eb3c5f954756b98ac35dfc7f5ba3c8ae632b6fea4c46f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86709a9fed2a801ac5eb3c5f954756b98ac35dfc7f5ba3c8ae632b6fea4c46f6->enter($__internal_86709a9fed2a801ac5eb3c5f954756b98ac35dfc7f5ba3c8ae632b6fea4c46f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86709a9fed2a801ac5eb3c5f954756b98ac35dfc7f5ba3c8ae632b6fea4c46f6->leave($__internal_86709a9fed2a801ac5eb3c5f954756b98ac35dfc7f5ba3c8ae632b6fea4c46f6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4554185a8fe0310dbe6431c4f5ff9808f226b59d50ba6f69cedad6837a48cc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4554185a8fe0310dbe6431c4f5ff9808f226b59d50ba6f69cedad6837a48cc24->enter($__internal_4554185a8fe0310dbe6431c4f5ff9808f226b59d50ba6f69cedad6837a48cc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<style>
    div {
        margin-bottom: 1px;
    }
    body { 
        background: #151515;
        text-align: center;
    }
    body, input, textarea { 
        font: 14px/24px Helvetica, Arial, sans-serif; 
        color: #C52D2F; 
    }
    input { 
        width: 30% 
    }
    form { 
        margin: 5px 0 0 0 
    }
    input, textarea { 
        background: none repeat scroll 0 0 #FFFFFF; 
        border: 1px solid #C9C9C9; 
        
        color: #545658; 
        padding: 3px; 
        font-size: 14px; 
        margin-bottom: 15px;
    }
    form label { 
        display: block; 
        margin-bottom: 5px; 
        font-weight: bold; 
        font-size: 20px; 
    }
</style>
<section id=\"services\" class=\"service-item\">
    <div class=\"container\">
        <div class=\"center wow fadeInDown\">
            <br />
            <h2>Vous souhaitez vous connecter ?</h2>
            <p class=\"lead\">Rentrez votre nom d'utilisateur et votre mot de passe pour vous connecter à Permis futé !</p>
        </div>

        <div class=\"row\">
            <center>
                <form action=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <label for=\"username\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    <br>
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <br>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
            </center>                         
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

";
        
        $__internal_4554185a8fe0310dbe6431c4f5ff9808f226b59d50ba6f69cedad6837a48cc24->leave($__internal_4554185a8fe0310dbe6431c4f5ff9808f226b59d50ba6f69cedad6837a48cc24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 64,  118 => 62,  111 => 58,  106 => 56,  102 => 55,  98 => 54,  94 => 53,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<style>
    div {
        margin-bottom: 1px;
    }
    body { 
        background: #151515;
        text-align: center;
    }
    body, input, textarea { 
        font: 14px/24px Helvetica, Arial, sans-serif; 
        color: #C52D2F; 
    }
    input { 
        width: 30% 
    }
    form { 
        margin: 5px 0 0 0 
    }
    input, textarea { 
        background: none repeat scroll 0 0 #FFFFFF; 
        border: 1px solid #C9C9C9; 
        
        color: #545658; 
        padding: 3px; 
        font-size: 14px; 
        margin-bottom: 15px;
    }
    form label { 
        display: block; 
        margin-bottom: 5px; 
        font-weight: bold; 
        font-size: 20px; 
    }
</style>
<section id=\"services\" class=\"service-item\">
    <div class=\"container\">
        <div class=\"center wow fadeInDown\">
            <br />
            <h2>Vous souhaitez vous connecter ?</h2>
            <p class=\"lead\">Rentrez votre nom d'utilisateur et votre mot de passe pour vous connecter à Permis futé !</p>
        </div>

        <div class=\"row\">
            <center>
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    <br>
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
    <br>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
            </center>                         
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\permisfute\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
