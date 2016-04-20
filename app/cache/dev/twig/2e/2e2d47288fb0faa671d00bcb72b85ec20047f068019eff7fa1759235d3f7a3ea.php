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
        $__internal_abdd1aa8aa5fda26f4257b8dfd9043b9917ad088c2c539050fd9adb4b6c1de76 = $this->env->getExtension("native_profiler");
        $__internal_abdd1aa8aa5fda26f4257b8dfd9043b9917ad088c2c539050fd9adb4b6c1de76->enter($__internal_abdd1aa8aa5fda26f4257b8dfd9043b9917ad088c2c539050fd9adb4b6c1de76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abdd1aa8aa5fda26f4257b8dfd9043b9917ad088c2c539050fd9adb4b6c1de76->leave($__internal_abdd1aa8aa5fda26f4257b8dfd9043b9917ad088c2c539050fd9adb4b6c1de76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffb95ca6715509235720ab1957be7e2bb58e05050f8677a9996005934961857d = $this->env->getExtension("native_profiler");
        $__internal_ffb95ca6715509235720ab1957be7e2bb58e05050f8677a9996005934961857d->enter($__internal_ffb95ca6715509235720ab1957be7e2bb58e05050f8677a9996005934961857d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ffb95ca6715509235720ab1957be7e2bb58e05050f8677a9996005934961857d->leave($__internal_ffb95ca6715509235720ab1957be7e2bb58e05050f8677a9996005934961857d_prof);

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
