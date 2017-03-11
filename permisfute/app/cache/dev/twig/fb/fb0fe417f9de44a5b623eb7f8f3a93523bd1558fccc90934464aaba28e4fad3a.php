<?php

/* @EasyAdmin/default/field_float.html.twig */
class __TwigTemplate_20f27aecb185a37f21fd7dabf93c10c39ce52b995d2defb574e0b976ba16a40b extends Twig_Template
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
        $__internal_0c461d4a4494f9546209c0ecd292ae06edea57d622a0cffa2470d83942a107ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c461d4a4494f9546209c0ecd292ae06edea57d622a0cffa2470d83942a107ab->enter($__internal_0c461d4a4494f9546209c0ecd292ae06edea57d622a0cffa2470d83942a107ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_float.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_0c461d4a4494f9546209c0ecd292ae06edea57d622a0cffa2470d83942a107ab->leave($__internal_0c461d4a4494f9546209c0ecd292ae06edea57d622a0cffa2470d83942a107ab_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_float.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format(2) }}
{% endif %}
", "@EasyAdmin/default/field_float.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_float.html.twig");
    }
}
