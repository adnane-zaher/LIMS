<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_beac9965e684622c0c1d546b1d618f0546936600f53b187530bc76243ae953f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3a92f49c653f4bea9ba9d8837ef6e1c2f92924e7e49b2e2a2e3b10e353f3bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a92f49c653f4bea9ba9d8837ef6e1c2f92924e7e49b2e2a2e3b10e353f3bc9->enter($__internal_f3a92f49c653f4bea9ba9d8837ef6e1c2f92924e7e49b2e2a2e3b10e353f3bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f3a92f49c653f4bea9ba9d8837ef6e1c2f92924e7e49b2e2a2e3b10e353f3bc9->leave($__internal_f3a92f49c653f4bea9ba9d8837ef6e1c2f92924e7e49b2e2a2e3b10e353f3bc9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e54abeb82931e253ffcd589ec5e77d66bd3be74d7c683d5d1e3b0689973a957b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54abeb82931e253ffcd589ec5e77d66bd3be74d7c683d5d1e3b0689973a957b->enter($__internal_e54abeb82931e253ffcd589ec5e77d66bd3be74d7c683d5d1e3b0689973a957b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_e54abeb82931e253ffcd589ec5e77d66bd3be74d7c683d5d1e3b0689973a957b->leave($__internal_e54abeb82931e253ffcd589ec5e77d66bd3be74d7c683d5d1e3b0689973a957b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}