<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_16eb360621558818d1c59c64bd227dd87adf910427f44f59111ae3e54403949d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbba22cb8596893d7ec353a38c3928586041b4d7a28626ef4d0eb2f37c8a8c6a = $this->env->getExtension("native_profiler");
        $__internal_bbba22cb8596893d7ec353a38c3928586041b4d7a28626ef4d0eb2f37c8a8c6a->enter($__internal_bbba22cb8596893d7ec353a38c3928586041b4d7a28626ef4d0eb2f37c8a8c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbba22cb8596893d7ec353a38c3928586041b4d7a28626ef4d0eb2f37c8a8c6a->leave($__internal_bbba22cb8596893d7ec353a38c3928586041b4d7a28626ef4d0eb2f37c8a8c6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c27ac3d7dda8c2a236d8c7feee58fa53e6920e131eb69ff42e8294fd48a2d8b = $this->env->getExtension("native_profiler");
        $__internal_6c27ac3d7dda8c2a236d8c7feee58fa53e6920e131eb69ff42e8294fd48a2d8b->enter($__internal_6c27ac3d7dda8c2a236d8c7feee58fa53e6920e131eb69ff42e8294fd48a2d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c27ac3d7dda8c2a236d8c7feee58fa53e6920e131eb69ff42e8294fd48a2d8b->leave($__internal_6c27ac3d7dda8c2a236d8c7feee58fa53e6920e131eb69ff42e8294fd48a2d8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d782d915dd793c6248a98ef22aff750c876cdfdca24b9bdd1502047611b08e3c = $this->env->getExtension("native_profiler");
        $__internal_d782d915dd793c6248a98ef22aff750c876cdfdca24b9bdd1502047611b08e3c->enter($__internal_d782d915dd793c6248a98ef22aff750c876cdfdca24b9bdd1502047611b08e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d782d915dd793c6248a98ef22aff750c876cdfdca24b9bdd1502047611b08e3c->leave($__internal_d782d915dd793c6248a98ef22aff750c876cdfdca24b9bdd1502047611b08e3c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b51a118bdf2974b78b3474d8ddf51dbda94bdcbf63ecda59df7bc2dd04312834 = $this->env->getExtension("native_profiler");
        $__internal_b51a118bdf2974b78b3474d8ddf51dbda94bdcbf63ecda59df7bc2dd04312834->enter($__internal_b51a118bdf2974b78b3474d8ddf51dbda94bdcbf63ecda59df7bc2dd04312834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b51a118bdf2974b78b3474d8ddf51dbda94bdcbf63ecda59df7bc2dd04312834->leave($__internal_b51a118bdf2974b78b3474d8ddf51dbda94bdcbf63ecda59df7bc2dd04312834_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
