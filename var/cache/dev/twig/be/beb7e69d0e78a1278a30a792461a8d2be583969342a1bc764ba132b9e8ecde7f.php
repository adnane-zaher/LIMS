<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f9a0fa9c6e40b2d509ed57f329a2dd3024a1a4317d4c620cb8779983360415d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0405f30649fd56ef4762cdd2ea449052dd5f38224c3389f1e5a5c119ea980d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0405f30649fd56ef4762cdd2ea449052dd5f38224c3389f1e5a5c119ea980d8e->enter($__internal_0405f30649fd56ef4762cdd2ea449052dd5f38224c3389f1e5a5c119ea980d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0405f30649fd56ef4762cdd2ea449052dd5f38224c3389f1e5a5c119ea980d8e->leave($__internal_0405f30649fd56ef4762cdd2ea449052dd5f38224c3389f1e5a5c119ea980d8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d01fad93c71c5d00819ed450abeea08579e4b04e38fdcca0a6a4918c0d65fb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01fad93c71c5d00819ed450abeea08579e4b04e38fdcca0a6a4918c0d65fb15->enter($__internal_d01fad93c71c5d00819ed450abeea08579e4b04e38fdcca0a6a4918c0d65fb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d01fad93c71c5d00819ed450abeea08579e4b04e38fdcca0a6a4918c0d65fb15->leave($__internal_d01fad93c71c5d00819ed450abeea08579e4b04e38fdcca0a6a4918c0d65fb15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
