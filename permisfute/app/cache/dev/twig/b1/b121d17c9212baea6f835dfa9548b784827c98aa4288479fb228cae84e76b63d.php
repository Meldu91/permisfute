<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d710a164584660b19cacbf45d2f488dd3d56622339be9da0850eb1a75ccdb017 extends Twig_Template
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
        $__internal_d357eea5fa2de7a3afb5d523ad6bb37dc3d32f8b609df5bd6c2b7f65569bf0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d357eea5fa2de7a3afb5d523ad6bb37dc3d32f8b609df5bd6c2b7f65569bf0e2->enter($__internal_d357eea5fa2de7a3afb5d523ad6bb37dc3d32f8b609df5bd6c2b7f65569bf0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d357eea5fa2de7a3afb5d523ad6bb37dc3d32f8b609df5bd6c2b7f65569bf0e2->leave($__internal_d357eea5fa2de7a3afb5d523ad6bb37dc3d32f8b609df5bd6c2b7f65569bf0e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
