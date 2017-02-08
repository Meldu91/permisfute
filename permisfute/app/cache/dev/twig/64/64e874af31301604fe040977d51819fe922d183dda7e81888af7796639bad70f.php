<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a79cedeee0b565df6a3a225aa6008e3ae5df5602f0f32e61fc04bf85f3f648a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_5d68ada8040af2fb9b027df3b08fcd4a310226fb00d1a85398c9b349739a1141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d68ada8040af2fb9b027df3b08fcd4a310226fb00d1a85398c9b349739a1141->enter($__internal_5d68ada8040af2fb9b027df3b08fcd4a310226fb00d1a85398c9b349739a1141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d68ada8040af2fb9b027df3b08fcd4a310226fb00d1a85398c9b349739a1141->leave($__internal_5d68ada8040af2fb9b027df3b08fcd4a310226fb00d1a85398c9b349739a1141_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_002d43452ae613d582b6ebbef9dcb81c4afee159b35b64bbbe641dbd8e51dbb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002d43452ae613d582b6ebbef9dcb81c4afee159b35b64bbbe641dbd8e51dbb0->enter($__internal_002d43452ae613d582b6ebbef9dcb81c4afee159b35b64bbbe641dbd8e51dbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_002d43452ae613d582b6ebbef9dcb81c4afee159b35b64bbbe641dbd8e51dbb0->leave($__internal_002d43452ae613d582b6ebbef9dcb81c4afee159b35b64bbbe641dbd8e51dbb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
