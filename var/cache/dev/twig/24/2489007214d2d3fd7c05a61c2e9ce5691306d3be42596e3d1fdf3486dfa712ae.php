<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4a690f67733e61d284871f09096560b1086ff02d170339153ead3e24d24c00e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_202dab0c9f2acc10b05a39bb1ef008629a8df560a1c71455b053d6547dbce37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202dab0c9f2acc10b05a39bb1ef008629a8df560a1c71455b053d6547dbce37e->enter($__internal_202dab0c9f2acc10b05a39bb1ef008629a8df560a1c71455b053d6547dbce37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_202dab0c9f2acc10b05a39bb1ef008629a8df560a1c71455b053d6547dbce37e->leave($__internal_202dab0c9f2acc10b05a39bb1ef008629a8df560a1c71455b053d6547dbce37e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_deabb71bdb2cae605364dbb2e88344690ffebbd7fde1c80889b1dcd3b4b18fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deabb71bdb2cae605364dbb2e88344690ffebbd7fde1c80889b1dcd3b4b18fb3->enter($__internal_deabb71bdb2cae605364dbb2e88344690ffebbd7fde1c80889b1dcd3b4b18fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_deabb71bdb2cae605364dbb2e88344690ffebbd7fde1c80889b1dcd3b4b18fb3->leave($__internal_deabb71bdb2cae605364dbb2e88344690ffebbd7fde1c80889b1dcd3b4b18fb3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
