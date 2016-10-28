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
        $__internal_5070c8be94085f11021a1d1021ec24f52e139568cd52901c5ef7df26bcf8c157 = $this->env->getExtension("native_profiler");
        $__internal_5070c8be94085f11021a1d1021ec24f52e139568cd52901c5ef7df26bcf8c157->enter($__internal_5070c8be94085f11021a1d1021ec24f52e139568cd52901c5ef7df26bcf8c157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5070c8be94085f11021a1d1021ec24f52e139568cd52901c5ef7df26bcf8c157->leave($__internal_5070c8be94085f11021a1d1021ec24f52e139568cd52901c5ef7df26bcf8c157_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f07ea7938dab1f389d79ec68a77fe9b235a58c3b1a4377604e0d3b9f80ba9381 = $this->env->getExtension("native_profiler");
        $__internal_f07ea7938dab1f389d79ec68a77fe9b235a58c3b1a4377604e0d3b9f80ba9381->enter($__internal_f07ea7938dab1f389d79ec68a77fe9b235a58c3b1a4377604e0d3b9f80ba9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f07ea7938dab1f389d79ec68a77fe9b235a58c3b1a4377604e0d3b9f80ba9381->leave($__internal_f07ea7938dab1f389d79ec68a77fe9b235a58c3b1a4377604e0d3b9f80ba9381_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0776a2d05512b73e5efcb161580b0e2725f118c3ced50ad71d9ff3b8bed7bed = $this->env->getExtension("native_profiler");
        $__internal_c0776a2d05512b73e5efcb161580b0e2725f118c3ced50ad71d9ff3b8bed7bed->enter($__internal_c0776a2d05512b73e5efcb161580b0e2725f118c3ced50ad71d9ff3b8bed7bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c0776a2d05512b73e5efcb161580b0e2725f118c3ced50ad71d9ff3b8bed7bed->leave($__internal_c0776a2d05512b73e5efcb161580b0e2725f118c3ced50ad71d9ff3b8bed7bed_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c70fd48d8253d45b0694516bb56e29b62ae558e2c2a60418bc32417ddee7061 = $this->env->getExtension("native_profiler");
        $__internal_7c70fd48d8253d45b0694516bb56e29b62ae558e2c2a60418bc32417ddee7061->enter($__internal_7c70fd48d8253d45b0694516bb56e29b62ae558e2c2a60418bc32417ddee7061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7c70fd48d8253d45b0694516bb56e29b62ae558e2c2a60418bc32417ddee7061->leave($__internal_7c70fd48d8253d45b0694516bb56e29b62ae558e2c2a60418bc32417ddee7061_prof);

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
