<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dfbd2a5ece7062da1b52ab6c24fcbb9bc86863d32d4583dc3def3337ed505f06 extends Twig_Template
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
        $__internal_0352b1a918fae2c47b7b39ef43d17c6e0eb46c2aca6910c6ddba469754a0adf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0352b1a918fae2c47b7b39ef43d17c6e0eb46c2aca6910c6ddba469754a0adf1->enter($__internal_0352b1a918fae2c47b7b39ef43d17c6e0eb46c2aca6910c6ddba469754a0adf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0352b1a918fae2c47b7b39ef43d17c6e0eb46c2aca6910c6ddba469754a0adf1->leave($__internal_0352b1a918fae2c47b7b39ef43d17c6e0eb46c2aca6910c6ddba469754a0adf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}