<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_55ac23e10cf11707b60654c242a7039a2db2fe8415435536a6f31ec5470a308c extends Twig_Template
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
        $__internal_95692f742640b9a0dd25764aa4b2ea02d053f73ed63bc70bf1a072e7d665168d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95692f742640b9a0dd25764aa4b2ea02d053f73ed63bc70bf1a072e7d665168d->enter($__internal_95692f742640b9a0dd25764aa4b2ea02d053f73ed63bc70bf1a072e7d665168d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_95692f742640b9a0dd25764aa4b2ea02d053f73ed63bc70bf1a072e7d665168d->leave($__internal_95692f742640b9a0dd25764aa4b2ea02d053f73ed63bc70bf1a072e7d665168d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
