<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_31a0e1f2de914f8db3a2ae7ead8f5137494ec2786ef8a6b40c4b66d2f6a69cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14c390367d7d51b1f26fcc0104dba595639ab3dcbf950ae9056ba1997ee06b4c = $this->env->getExtension("native_profiler");
        $__internal_14c390367d7d51b1f26fcc0104dba595639ab3dcbf950ae9056ba1997ee06b4c->enter($__internal_14c390367d7d51b1f26fcc0104dba595639ab3dcbf950ae9056ba1997ee06b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14c390367d7d51b1f26fcc0104dba595639ab3dcbf950ae9056ba1997ee06b4c->leave($__internal_14c390367d7d51b1f26fcc0104dba595639ab3dcbf950ae9056ba1997ee06b4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_baf6782c5b0a86bc8baf275107f970563330afe976a146b5eb5b17b9f2bb4a22 = $this->env->getExtension("native_profiler");
        $__internal_baf6782c5b0a86bc8baf275107f970563330afe976a146b5eb5b17b9f2bb4a22->enter($__internal_baf6782c5b0a86bc8baf275107f970563330afe976a146b5eb5b17b9f2bb4a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_baf6782c5b0a86bc8baf275107f970563330afe976a146b5eb5b17b9f2bb4a22->leave($__internal_baf6782c5b0a86bc8baf275107f970563330afe976a146b5eb5b17b9f2bb4a22_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e5e71d474157157a296a581adae021019f8d348c668f3b04f95fefba8847a92 = $this->env->getExtension("native_profiler");
        $__internal_5e5e71d474157157a296a581adae021019f8d348c668f3b04f95fefba8847a92->enter($__internal_5e5e71d474157157a296a581adae021019f8d348c668f3b04f95fefba8847a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e5e71d474157157a296a581adae021019f8d348c668f3b04f95fefba8847a92->leave($__internal_5e5e71d474157157a296a581adae021019f8d348c668f3b04f95fefba8847a92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_838fa2e84c354ab7e76acca0ba12816035928f51525a80f51cddc4223b598223 = $this->env->getExtension("native_profiler");
        $__internal_838fa2e84c354ab7e76acca0ba12816035928f51525a80f51cddc4223b598223->enter($__internal_838fa2e84c354ab7e76acca0ba12816035928f51525a80f51cddc4223b598223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_838fa2e84c354ab7e76acca0ba12816035928f51525a80f51cddc4223b598223->leave($__internal_838fa2e84c354ab7e76acca0ba12816035928f51525a80f51cddc4223b598223_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
