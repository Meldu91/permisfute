<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_74adacae9bf3ea21f1d4b3e6f931cd95815bfbc6fc87677ad241e07fd8379f44 extends Twig_Template
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
        $__internal_23bfaacbcc55c2e15ffb2913669652058928b173ddccb7bd09dc7dcdba8aa5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bfaacbcc55c2e15ffb2913669652058928b173ddccb7bd09dc7dcdba8aa5f4->enter($__internal_23bfaacbcc55c2e15ffb2913669652058928b173ddccb7bd09dc7dcdba8aa5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_23bfaacbcc55c2e15ffb2913669652058928b173ddccb7bd09dc7dcdba8aa5f4->leave($__internal_23bfaacbcc55c2e15ffb2913669652058928b173ddccb7bd09dc7dcdba8aa5f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
