<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e6c606df459d227ac39255b027f6153fc723fc59ae28f1fb304fff1539860609 extends Twig_Template
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
        $__internal_9062012326c98b2b3c10f63fd8b927fe8de2fe5eebf3018e6953a62cdd3609cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9062012326c98b2b3c10f63fd8b927fe8de2fe5eebf3018e6953a62cdd3609cd->enter($__internal_9062012326c98b2b3c10f63fd8b927fe8de2fe5eebf3018e6953a62cdd3609cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
            <h2>Votre profil</h2>
            <p class=\"lead\">Ici vous retrouverez toutes les informations concernant votre profil.</p>
        </div>

        <div class=\"row\">
            <center>
                <div class=\"fos_user_user_show\">
                    <font size=\"4\" color=\"white\"><p>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p></FONT>
                    <font size=\"4\" color=\"white\"><p>Mot de passe : <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Modifier</a></p></FONT>
                    <font size=\"4\" color=\"white\"><p>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p></FONT>
                    <font size=\"4\" color=\"white\"><p>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p></FONT>
                    <font size=\"4\" color=\"white\"><p>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prénom", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p></FONT>
                    <font size=\"4\" color=\"white\"><p>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Téléphone", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telephone", array()), "html", null, true);
        echo "</p></FONT>
                    <font size=\"4\" color=\"white\"><p>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p></FONT>
                    <br><br><br><br>
                </div>
            </center>                         
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

";
        
        $__internal_9062012326c98b2b3c10f63fd8b927fe8de2fe5eebf3018e6953a62cdd3609cd->leave($__internal_9062012326c98b2b3c10f63fd8b927fe8de2fe5eebf3018e6953a62cdd3609cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 52,  96 => 51,  90 => 50,  84 => 49,  78 => 48,  74 => 47,  68 => 46,  22 => 2,);
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
            <h2>Votre profil</h2>
            <p class=\"lead\">Ici vous retrouverez toutes les informations concernant votre profil.</p>
        </div>

        <div class=\"row\">
            <center>
                <div class=\"fos_user_user_show\">
                    <font size=\"4\" color=\"white\"><p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p></FONT>
                    <font size=\"4\" color=\"white\"><p>Mot de passe : <a href=\"{{ path ('fos_user_change_password') }}\">Modifier</a></p></FONT>
                    <font size=\"4\" color=\"white\"><p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p></FONT>
                    <font size=\"4\" color=\"white\"><p>{{ 'Nom'|trans }}: {{ user.nom }}</p></FONT>
                    <font size=\"4\" color=\"white\"><p>{{ 'Prénom'|trans }}: {{ user.prenom }}</p></FONT>
                    <font size=\"4\" color=\"white\"><p>{{ 'Téléphone'|trans }}: {{ user.telephone }}</p></FONT>
                    <font size=\"4\" color=\"white\"><p>{{ 'Adresse'|trans }}: {{ user.adresse }}</p></FONT>
                    <br><br><br><br>
                </div>
            </center>                         
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\permisfute\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
