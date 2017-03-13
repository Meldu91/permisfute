<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f980f9c9a6a5d8682f863c20a2483ee93cd7864dbfbedd2d680f3f0cb58e34d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ce63038bcdd56692ebf7cebf05a4c1634ef524c90a1b9a6613c5de159741139b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce63038bcdd56692ebf7cebf05a4c1634ef524c90a1b9a6613c5de159741139b->enter($__internal_ce63038bcdd56692ebf7cebf05a4c1634ef524c90a1b9a6613c5de159741139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce63038bcdd56692ebf7cebf05a4c1634ef524c90a1b9a6613c5de159741139b->leave($__internal_ce63038bcdd56692ebf7cebf05a4c1634ef524c90a1b9a6613c5de159741139b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b20b3dad61a576fc4facd559163750b5d30e16fac8ccd0afb5d2268c3a16bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b20b3dad61a576fc4facd559163750b5d30e16fac8ccd0afb5d2268c3a16bba->enter($__internal_2b20b3dad61a576fc4facd559163750b5d30e16fac8ccd0afb5d2268c3a16bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b20b3dad61a576fc4facd559163750b5d30e16fac8ccd0afb5d2268c3a16bba->leave($__internal_2b20b3dad61a576fc4facd559163750b5d30e16fac8ccd0afb5d2268c3a16bba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74311ad7cd7a512edf944adb5b6bd2ac0129c0fc240db65a9b26a53a168c214c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74311ad7cd7a512edf944adb5b6bd2ac0129c0fc240db65a9b26a53a168c214c->enter($__internal_74311ad7cd7a512edf944adb5b6bd2ac0129c0fc240db65a9b26a53a168c214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_74311ad7cd7a512edf944adb5b6bd2ac0129c0fc240db65a9b26a53a168c214c->leave($__internal_74311ad7cd7a512edf944adb5b6bd2ac0129c0fc240db65a9b26a53a168c214c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bd463ac1da2df899052d674b12f288b1571d2dff0be0c11c62f08973b806912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd463ac1da2df899052d674b12f288b1571d2dff0be0c11c62f08973b806912->enter($__internal_5bd463ac1da2df899052d674b12f288b1571d2dff0be0c11c62f08973b806912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5bd463ac1da2df899052d674b12f288b1571d2dff0be0c11c62f08973b806912->leave($__internal_5bd463ac1da2df899052d674b12f288b1571d2dff0be0c11c62f08973b806912_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
