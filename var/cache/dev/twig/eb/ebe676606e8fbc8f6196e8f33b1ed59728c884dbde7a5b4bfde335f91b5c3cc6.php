<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3d4b8d61cfcf7157a96aceb2487755ca8e14f6b8b3a70de9ce15a166451b7954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fd71844cefbc37d9118c8be9a1f549ffdbcf064681d5e0b427e0cb1b17bed0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd71844cefbc37d9118c8be9a1f549ffdbcf064681d5e0b427e0cb1b17bed0f9->enter($__internal_fd71844cefbc37d9118c8be9a1f549ffdbcf064681d5e0b427e0cb1b17bed0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd71844cefbc37d9118c8be9a1f549ffdbcf064681d5e0b427e0cb1b17bed0f9->leave($__internal_fd71844cefbc37d9118c8be9a1f549ffdbcf064681d5e0b427e0cb1b17bed0f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_528ab2529e43b96b4790d84cdcdf644eb364d3f884f3777b93876bf985f48408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528ab2529e43b96b4790d84cdcdf644eb364d3f884f3777b93876bf985f48408->enter($__internal_528ab2529e43b96b4790d84cdcdf644eb364d3f884f3777b93876bf985f48408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_528ab2529e43b96b4790d84cdcdf644eb364d3f884f3777b93876bf985f48408->leave($__internal_528ab2529e43b96b4790d84cdcdf644eb364d3f884f3777b93876bf985f48408_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\LIMS\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
