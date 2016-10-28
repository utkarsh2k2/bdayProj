<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_820fbdfc04f3a16f36c073bbf684410a4c6ffebc45be6fae4b42d30546973ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_04695a712987e95e2d9bebeb45f58fcb2b522e2728e5e569a79e22ab77729dc7 = $this->env->getExtension("native_profiler");
        $__internal_04695a712987e95e2d9bebeb45f58fcb2b522e2728e5e569a79e22ab77729dc7->enter($__internal_04695a712987e95e2d9bebeb45f58fcb2b522e2728e5e569a79e22ab77729dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04695a712987e95e2d9bebeb45f58fcb2b522e2728e5e569a79e22ab77729dc7->leave($__internal_04695a712987e95e2d9bebeb45f58fcb2b522e2728e5e569a79e22ab77729dc7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e18eef5f2fc18244a3dd716cdcc1d4d0bc62cfb52a285494034e95a945247d8 = $this->env->getExtension("native_profiler");
        $__internal_7e18eef5f2fc18244a3dd716cdcc1d4d0bc62cfb52a285494034e95a945247d8->enter($__internal_7e18eef5f2fc18244a3dd716cdcc1d4d0bc62cfb52a285494034e95a945247d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7e18eef5f2fc18244a3dd716cdcc1d4d0bc62cfb52a285494034e95a945247d8->leave($__internal_7e18eef5f2fc18244a3dd716cdcc1d4d0bc62cfb52a285494034e95a945247d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
