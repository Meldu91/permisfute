<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_6e6d88e0a67716f38137d570d50aa7e911c466d817185e07974b611562dd47df extends Twig_Template
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
        $__internal_189588695691aaaf72cfedd9fc7afacaffdadf93946cd933bdf57eec986d3b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189588695691aaaf72cfedd9fc7afacaffdadf93946cd933bdf57eec986d3b6d->enter($__internal_189588695691aaaf72cfedd9fc7afacaffdadf93946cd933bdf57eec986d3b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
            <h2>Vous souhaitez vous inscrire ?</h2>
            <p class=\"lead\">Remplissez les champs ci-dessous pour vous inscrire à notre auto-école !</p>
        </div>

        <div class=\"row\">
            <center>
                <form action=\"\" ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input class=\"\" type=\"submit\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /><br/><br/>
                    </div>
                </form>
            </center>                         
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->
";
        
        $__internal_189588695691aaaf72cfedd9fc7afacaffdadf93946cd933bdf57eec986d3b6d->leave($__internal_189588695691aaaf72cfedd9fc7afacaffdadf93946cd933bdf57eec986d3b6d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 48,  71 => 46,  67 => 45,  22 => 2,);
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
            <h2>Vous souhaitez vous inscrire ?</h2>
            <p class=\"lead\">Remplissez les champs ci-dessous pour vous inscrire à notre auto-école !</p>
        </div>

        <div class=\"row\">
            <center>
                <form action=\"\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">
                    {{ form_widget(form) }}
                    <div>
                        <input class=\"\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" /><br/><br/>
                    </div>
                </form>
            </center>                         
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
