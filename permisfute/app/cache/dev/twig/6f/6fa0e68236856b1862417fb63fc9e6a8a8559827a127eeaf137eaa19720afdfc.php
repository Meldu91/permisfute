<?php

/* @Utilisateurs/Default/index.html.twig */
class __TwigTemplate_277adc3276283785ec8520e00308309fda1a96e7690e732a0e0e75d8562db0bf extends Twig_Template
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
        $__internal_57bdcdec568ea5439c68c61ece5ad7d1dd45c8ac48d75c0321f7c395a6571f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bdcdec568ea5439c68c61ece5ad7d1dd45c8ac48d75c0321f7c395a6571f21->enter($__internal_57bdcdec568ea5439c68c61ece5ad7d1dd45c8ac48d75c0321f7c395a6571f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_57bdcdec568ea5439c68c61ece5ad7d1dd45c8ac48d75c0321f7c395a6571f21->leave($__internal_57bdcdec568ea5439c68c61ece5ad7d1dd45c8ac48d75c0321f7c395a6571f21_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/index.html.twig";
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
", "@Utilisateurs/Default/index.html.twig", "C:\\wamp\\www\\permisfute\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
