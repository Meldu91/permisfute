<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_87517dcbaf19b0bca295a664a5a2b22d6c462864e7a05146cdd00c27884e6866 extends Twig_Template
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
        $__internal_71d5117d080edb542a18511c84a57bf126e01e726484d8e18504f8b34d83b824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d5117d080edb542a18511c84a57bf126e01e726484d8e18504f8b34d83b824->enter($__internal_71d5117d080edb542a18511c84a57bf126e01e726484d8e18504f8b34d83b824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_71d5117d080edb542a18511c84a57bf126e01e726484d8e18504f8b34d83b824->leave($__internal_71d5117d080edb542a18511c84a57bf126e01e726484d8e18504f8b34d83b824_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_datetime.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_datetime.html.twig");
    }
}
