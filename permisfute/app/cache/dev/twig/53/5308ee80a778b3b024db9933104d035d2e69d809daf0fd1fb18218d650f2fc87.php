<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_bffc54e6829889b8343970d152e916411b3bf9c4c9a62f5a3023feebbd13d72d extends Twig_Template
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
        $__internal_b42a228db115bf495a67c5ce56ac605e4d8087d541d9aee86a5eb91398589254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42a228db115bf495a67c5ce56ac605e4d8087d541d9aee86a5eb91398589254->enter($__internal_b42a228db115bf495a67c5ce56ac605e4d8087d541d9aee86a5eb91398589254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_b42a228db115bf495a67c5ce56ac605e4d8087d541d9aee86a5eb91398589254->leave($__internal_b42a228db115bf495a67c5ce56ac605e4d8087d541d9aee86a5eb91398589254_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\label_null.html.twig");
    }
}
