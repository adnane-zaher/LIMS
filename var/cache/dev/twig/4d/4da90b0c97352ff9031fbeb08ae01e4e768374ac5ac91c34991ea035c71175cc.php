<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e4fcce60990a0e7c8b90d39f2fdda76a5b7f49c79aa5088634308bc5a9845b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_36616c0dfbc0370123c6eebd8e672f954e63df97e70da8d49de0447c26461997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36616c0dfbc0370123c6eebd8e672f954e63df97e70da8d49de0447c26461997->enter($__internal_36616c0dfbc0370123c6eebd8e672f954e63df97e70da8d49de0447c26461997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36616c0dfbc0370123c6eebd8e672f954e63df97e70da8d49de0447c26461997->leave($__internal_36616c0dfbc0370123c6eebd8e672f954e63df97e70da8d49de0447c26461997_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a9d8de5cd9d5681fd65456e59ffdd045bcc4f718b8e69d3da79bc0358f526fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9d8de5cd9d5681fd65456e59ffdd045bcc4f718b8e69d3da79bc0358f526fc->enter($__internal_9a9d8de5cd9d5681fd65456e59ffdd045bcc4f718b8e69d3da79bc0358f526fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9a9d8de5cd9d5681fd65456e59ffdd045bcc4f718b8e69d3da79bc0358f526fc->leave($__internal_9a9d8de5cd9d5681fd65456e59ffdd045bcc4f718b8e69d3da79bc0358f526fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
