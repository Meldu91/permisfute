<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_47d551852e74502a976e362197fd60463feffb827352a1041fe95745c66a302b extends Twig_Template
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
        $__internal_a94f7285365e1c9fea601e2eaf0f5d9b4cf4030701c445e5e59f5d255d657c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94f7285365e1c9fea601e2eaf0f5d9b4cf4030701c445e5e59f5d255d657c7e->enter($__internal_a94f7285365e1c9fea601e2eaf0f5d9b4cf4030701c445e5e59f5d255d657c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a94f7285365e1c9fea601e2eaf0f5d9b4cf4030701c445e5e59f5d255d657c7e->leave($__internal_a94f7285365e1c9fea601e2eaf0f5d9b4cf4030701c445e5e59f5d255d657c7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
