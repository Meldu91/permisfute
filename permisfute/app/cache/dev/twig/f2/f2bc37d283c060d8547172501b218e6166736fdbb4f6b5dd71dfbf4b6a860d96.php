<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_55c6a87d54a7f192b80240c4d29105940d46c840e5b0fcabfe621a46bbb200ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d571cb57a3b56aeed0d594eed703b7479ad9bb70b9fcb3817f4d5cb3c149144c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d571cb57a3b56aeed0d594eed703b7479ad9bb70b9fcb3817f4d5cb3c149144c->enter($__internal_d571cb57a3b56aeed0d594eed703b7479ad9bb70b9fcb3817f4d5cb3c149144c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
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
            <h2>Changement de mot de passe</h2>
            <p class=\"lead\">Remplissez les champs pour modifier votre mot de passe</p>
        </div>

        <div class=\"row\">
            <center>
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
                    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input type=\"submit\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        <br><br><br><br><br><br><br><br>
                    </div>
                </form>
            </center>                         
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->
";
        
        $__internal_d571cb57a3b56aeed0d594eed703b7479ad9bb70b9fcb3817f4d5cb3c149144c->leave($__internal_d571cb57a3b56aeed0d594eed703b7479ad9bb70b9fcb3817f4d5cb3c149144c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 48,  73 => 46,  67 => 45,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
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
            <h2>Changement de mot de passe</h2>
            <p class=\"lead\">Remplissez les champs pour modifier votre mot de passe</p>
        </div>

        <div class=\"row\">
            <center>
                <form action=\"{{ path('fos_user_change_password') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_change_password\">
                    {{ form_widget(form) }}
                    <div>
                        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
                        <br><br><br><br><br><br><br><br>
                    </div>
                </form>
            </center>                         
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->
", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", "C:\\wamp64\\www\\permisfute\\app/Resources/FOSUserBundle/views/ChangePassword/changePassword_content.html.twig");
    }
}
