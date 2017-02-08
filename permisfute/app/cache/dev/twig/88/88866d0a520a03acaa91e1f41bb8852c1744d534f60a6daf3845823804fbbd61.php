<?php

/* UtilisateursBundle:Default:index.html.twig */
class __TwigTemplate_f0e5ff8251ee3b1803c4319976c0a4c4d56b7c12a9212008d87c83924c7f04ab extends Twig_Template
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
        $__internal_04996003e23129c47fab55d196bbd095daa7a744ed79be397559bea18db7bbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04996003e23129c47fab55d196bbd095daa7a744ed79be397559bea18db7bbc0->enter($__internal_04996003e23129c47fab55d196bbd095daa7a744ed79be397559bea18db7bbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_04996003e23129c47fab55d196bbd095daa7a744ed79be397559bea18db7bbc0->leave($__internal_04996003e23129c47fab55d196bbd095daa7a744ed79be397559bea18db7bbc0_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "UtilisateursBundle:Default:index.html.twig", "C:\\wamp\\www\\permisfute\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/index.html.twig");
    }
}
