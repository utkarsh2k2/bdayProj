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
        $__internal_21c0dc55ce22d10f47c44000c6d8323279a693200f9390f6a316249a56d8b725 = $this->env->getExtension("native_profiler");
        $__internal_21c0dc55ce22d10f47c44000c6d8323279a693200f9390f6a316249a56d8b725->enter($__internal_21c0dc55ce22d10f47c44000c6d8323279a693200f9390f6a316249a56d8b725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c0dc55ce22d10f47c44000c6d8323279a693200f9390f6a316249a56d8b725->leave($__internal_21c0dc55ce22d10f47c44000c6d8323279a693200f9390f6a316249a56d8b725_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1dcdfe53be20081d741754460b5d4248483dc916305e0199cdc6113c61285815 = $this->env->getExtension("native_profiler");
        $__internal_1dcdfe53be20081d741754460b5d4248483dc916305e0199cdc6113c61285815->enter($__internal_1dcdfe53be20081d741754460b5d4248483dc916305e0199cdc6113c61285815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1dcdfe53be20081d741754460b5d4248483dc916305e0199cdc6113c61285815->leave($__internal_1dcdfe53be20081d741754460b5d4248483dc916305e0199cdc6113c61285815_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ab74326f3c5071810d736994bbafd7661af8b6191f0b6a24b97d9fd4cd8893f = $this->env->getExtension("native_profiler");
        $__internal_0ab74326f3c5071810d736994bbafd7661af8b6191f0b6a24b97d9fd4cd8893f->enter($__internal_0ab74326f3c5071810d736994bbafd7661af8b6191f0b6a24b97d9fd4cd8893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ab74326f3c5071810d736994bbafd7661af8b6191f0b6a24b97d9fd4cd8893f->leave($__internal_0ab74326f3c5071810d736994bbafd7661af8b6191f0b6a24b97d9fd4cd8893f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33f50fe147802133d30fb1bdd2756d0abfa5cfb40ec907cd4017e4fa88d4e80c = $this->env->getExtension("native_profiler");
        $__internal_33f50fe147802133d30fb1bdd2756d0abfa5cfb40ec907cd4017e4fa88d4e80c->enter($__internal_33f50fe147802133d30fb1bdd2756d0abfa5cfb40ec907cd4017e4fa88d4e80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33f50fe147802133d30fb1bdd2756d0abfa5cfb40ec907cd4017e4fa88d4e80c->leave($__internal_33f50fe147802133d30fb1bdd2756d0abfa5cfb40ec907cd4017e4fa88d4e80c_prof);

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
