<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5543f2045a2f305431d79b7147a4f51ca6b2acdc51c78b5c3f3509620120ddc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2177dc85eb6ebd1d2aca5528a36de08559e6cff0e345b2312dbb2878fb85a08f = $this->env->getExtension("native_profiler");
        $__internal_2177dc85eb6ebd1d2aca5528a36de08559e6cff0e345b2312dbb2878fb85a08f->enter($__internal_2177dc85eb6ebd1d2aca5528a36de08559e6cff0e345b2312dbb2878fb85a08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2177dc85eb6ebd1d2aca5528a36de08559e6cff0e345b2312dbb2878fb85a08f->leave($__internal_2177dc85eb6ebd1d2aca5528a36de08559e6cff0e345b2312dbb2878fb85a08f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2fd685093572dc27586adebcf31e34f0860a2530a3ab66a9a654b858baa9b45 = $this->env->getExtension("native_profiler");
        $__internal_a2fd685093572dc27586adebcf31e34f0860a2530a3ab66a9a654b858baa9b45->enter($__internal_a2fd685093572dc27586adebcf31e34f0860a2530a3ab66a9a654b858baa9b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a2fd685093572dc27586adebcf31e34f0860a2530a3ab66a9a654b858baa9b45->leave($__internal_a2fd685093572dc27586adebcf31e34f0860a2530a3ab66a9a654b858baa9b45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
