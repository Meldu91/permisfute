<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bd514102957262c525b8dc5ea253672e8de4a95dc61f0dfa4408804c6efe3f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f36724d1cfbd5edf868546a83af647ef25d6530e5e6dcd8060d480df97d384aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36724d1cfbd5edf868546a83af647ef25d6530e5e6dcd8060d480df97d384aa->enter($__internal_f36724d1cfbd5edf868546a83af647ef25d6530e5e6dcd8060d480df97d384aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f36724d1cfbd5edf868546a83af647ef25d6530e5e6dcd8060d480df97d384aa->leave($__internal_f36724d1cfbd5edf868546a83af647ef25d6530e5e6dcd8060d480df97d384aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6f387457cd0f22ab66c4ac30f54bd8a07ce8e10c1ad1215e1a1074000f6efec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f387457cd0f22ab66c4ac30f54bd8a07ce8e10c1ad1215e1a1074000f6efec->enter($__internal_d6f387457cd0f22ab66c4ac30f54bd8a07ce8e10c1ad1215e1a1074000f6efec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d6f387457cd0f22ab66c4ac30f54bd8a07ce8e10c1ad1215e1a1074000f6efec->leave($__internal_d6f387457cd0f22ab66c4ac30f54bd8a07ce8e10c1ad1215e1a1074000f6efec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a63af1f86f0b3c1c62179526d9e90929d2840aaf302dfa57cb41c46d4f29b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a63af1f86f0b3c1c62179526d9e90929d2840aaf302dfa57cb41c46d4f29b09->enter($__internal_6a63af1f86f0b3c1c62179526d9e90929d2840aaf302dfa57cb41c46d4f29b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6a63af1f86f0b3c1c62179526d9e90929d2840aaf302dfa57cb41c46d4f29b09->leave($__internal_6a63af1f86f0b3c1c62179526d9e90929d2840aaf302dfa57cb41c46d4f29b09_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
