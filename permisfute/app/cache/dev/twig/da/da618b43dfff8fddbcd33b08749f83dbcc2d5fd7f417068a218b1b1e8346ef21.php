<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_268d7319e963b4276e22d1ad849355970ced6b60279a1ad64da73898920b4b9c extends Twig_Template
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
        $__internal_a0d75f449b3706e7732badde527cd80ab25bb255a27fb0d3c88f7474efe064ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d75f449b3706e7732badde527cd80ab25bb255a27fb0d3c88f7474efe064ab->enter($__internal_a0d75f449b3706e7732badde527cd80ab25bb255a27fb0d3c88f7474efe064ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a0d75f449b3706e7732badde527cd80ab25bb255a27fb0d3c88f7474efe064ab->leave($__internal_a0d75f449b3706e7732badde527cd80ab25bb255a27fb0d3c88f7474efe064ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
