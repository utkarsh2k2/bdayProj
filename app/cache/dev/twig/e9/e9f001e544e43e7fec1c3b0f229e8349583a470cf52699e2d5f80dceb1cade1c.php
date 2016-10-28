<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e86868208b8c977b76045b0e2fa2d3565228efed6614f3c26d9bcd0fa280208b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_84e9d4596ee3a939d2e01dbb4e316d0970b759e3cd246fb7ade246240b4c4ad9 = $this->env->getExtension("native_profiler");
        $__internal_84e9d4596ee3a939d2e01dbb4e316d0970b759e3cd246fb7ade246240b4c4ad9->enter($__internal_84e9d4596ee3a939d2e01dbb4e316d0970b759e3cd246fb7ade246240b4c4ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e9d4596ee3a939d2e01dbb4e316d0970b759e3cd246fb7ade246240b4c4ad9->leave($__internal_84e9d4596ee3a939d2e01dbb4e316d0970b759e3cd246fb7ade246240b4c4ad9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b07780a491a0a85d4126a5c55620a37e8c7c8403515fe864f6745e82eb3346f8 = $this->env->getExtension("native_profiler");
        $__internal_b07780a491a0a85d4126a5c55620a37e8c7c8403515fe864f6745e82eb3346f8->enter($__internal_b07780a491a0a85d4126a5c55620a37e8c7c8403515fe864f6745e82eb3346f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b07780a491a0a85d4126a5c55620a37e8c7c8403515fe864f6745e82eb3346f8->leave($__internal_b07780a491a0a85d4126a5c55620a37e8c7c8403515fe864f6745e82eb3346f8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4c7d0715b61c359d816f989cf80694e67f2b3d720249d95d54c15a00824f85c = $this->env->getExtension("native_profiler");
        $__internal_e4c7d0715b61c359d816f989cf80694e67f2b3d720249d95d54c15a00824f85c->enter($__internal_e4c7d0715b61c359d816f989cf80694e67f2b3d720249d95d54c15a00824f85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e4c7d0715b61c359d816f989cf80694e67f2b3d720249d95d54c15a00824f85c->leave($__internal_e4c7d0715b61c359d816f989cf80694e67f2b3d720249d95d54c15a00824f85c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e183dc8ae5a09167260a3977b49bafe9b2f3cb67501baf0e15b7b5f807b1dd1e = $this->env->getExtension("native_profiler");
        $__internal_e183dc8ae5a09167260a3977b49bafe9b2f3cb67501baf0e15b7b5f807b1dd1e->enter($__internal_e183dc8ae5a09167260a3977b49bafe9b2f3cb67501baf0e15b7b5f807b1dd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e183dc8ae5a09167260a3977b49bafe9b2f3cb67501baf0e15b7b5f807b1dd1e->leave($__internal_e183dc8ae5a09167260a3977b49bafe9b2f3cb67501baf0e15b7b5f807b1dd1e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
