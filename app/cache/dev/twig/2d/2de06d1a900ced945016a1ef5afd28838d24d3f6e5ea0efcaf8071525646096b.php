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
        $__internal_861c70c9d3fc25497812a057f943b7b670bfcf10d9bde5b9fd5106ee1dd88aea = $this->env->getExtension("native_profiler");
        $__internal_861c70c9d3fc25497812a057f943b7b670bfcf10d9bde5b9fd5106ee1dd88aea->enter($__internal_861c70c9d3fc25497812a057f943b7b670bfcf10d9bde5b9fd5106ee1dd88aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_861c70c9d3fc25497812a057f943b7b670bfcf10d9bde5b9fd5106ee1dd88aea->leave($__internal_861c70c9d3fc25497812a057f943b7b670bfcf10d9bde5b9fd5106ee1dd88aea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ce41c277e712d117bc74a2aa09f46b19b5fe8e95f53eed73151e2ff6402540c = $this->env->getExtension("native_profiler");
        $__internal_2ce41c277e712d117bc74a2aa09f46b19b5fe8e95f53eed73151e2ff6402540c->enter($__internal_2ce41c277e712d117bc74a2aa09f46b19b5fe8e95f53eed73151e2ff6402540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2ce41c277e712d117bc74a2aa09f46b19b5fe8e95f53eed73151e2ff6402540c->leave($__internal_2ce41c277e712d117bc74a2aa09f46b19b5fe8e95f53eed73151e2ff6402540c_prof);

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
