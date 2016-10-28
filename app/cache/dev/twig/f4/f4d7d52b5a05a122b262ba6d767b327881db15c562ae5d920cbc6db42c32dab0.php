<?php

/* default/index.html.twig */
class __TwigTemplate_a17385a003c356b7a7f89229e5304471cfe57ba0e51f77da8cbc029f7faccc0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_874c88dc953bc449096d5953c0486f60f3a01fac17a36a263d8e14cc11f4cea7 = $this->env->getExtension("native_profiler");
        $__internal_874c88dc953bc449096d5953c0486f60f3a01fac17a36a263d8e14cc11f4cea7->enter($__internal_874c88dc953bc449096d5953c0486f60f3a01fac17a36a263d8e14cc11f4cea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_874c88dc953bc449096d5953c0486f60f3a01fac17a36a263d8e14cc11f4cea7->leave($__internal_874c88dc953bc449096d5953c0486f60f3a01fac17a36a263d8e14cc11f4cea7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_231e8021a863be6c915638ceadccdc904ce00e27ec8fabc243dd69ca1701efd9 = $this->env->getExtension("native_profiler");
        $__internal_231e8021a863be6c915638ceadccdc904ce00e27ec8fabc243dd69ca1701efd9->enter($__internal_231e8021a863be6c915638ceadccdc904ce00e27ec8fabc243dd69ca1701efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        // line 6
        echo "<h3>Welcome to the Birthday Party registration!</h3>
";
        // line 8
        echo "<p>Your After Breakfast event:</p>    
";
        // line 9
        echo nl2br(twig_escape_filter($this->env, (isset($context["eT1Name"]) ? $context["eT1Name"] : $this->getContext($context, "eT1Name")), "html", null, true));
        echo "
";
        // line 11
        echo "<p>Your After Snacks event:</p>    
";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["eT2Name"]) ? $context["eT2Name"] : $this->getContext($context, "eT2Name")), "html", null, true);
        echo "
<p></p>
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 17
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "
    ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutPath("main"), "html", null, true);
        echo "\">Logout</a>
    
    ";
        
        $__internal_231e8021a863be6c915638ceadccdc904ce00e27ec8fabc243dd69ca1701efd9->leave($__internal_231e8021a863be6c915638ceadccdc904ce00e27ec8fabc243dd69ca1701efd9_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  90 => 23,  81 => 20,  78 => 19,  74 => 18,  69 => 17,  65 => 15,  61 => 14,  56 => 12,  53 => 11,  49 => 9,  46 => 8,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* {#    {{ greet | nl2br}}#}*/
/* <h3>Welcome to the Birthday Party registration!</h3>*/
/* {#    {{ selection1 }}#}*/
/* <p>Your After Breakfast event:</p>    */
/* {{ eT1Name | nl2br}}*/
/* {#    {{ selection2 }}#}*/
/* <p>Your After Snacks event:</p>    */
/* {{ eT2Name }}*/
/* <p></p>*/
/*     {{ form_start(form) }}*/
/*     {{ form(form, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*     {#{{ form_label(form.name, 'Choose Event') }}#}*/
/*     {{ form_widget(form) }}*/
/*     {% for flashMessage in app.session.flashbag.get('error') %}*/
/* */
/*     {{ flashMessage }}*/
/* */
/*     {% endfor %}*/
/*     {{ form_end(form) }}*/
/*     */
/*     <a href="{{ logout_path('main') }}">Logout</a>*/
/*     */
/*     {#<div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1><span>Welcome to</span> Symfony {{ constant('Symfony\\Component\\HttpKernel\\Kernel::VERSION') }}</h1>*/
/*             </div>*/
/* */
/*             <div id="status">*/
/*                 <p>*/
/*                     <svg id="icon-status" width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" fill="#759E1A"/></svg>*/
/* */
/*                     Your application is now ready. You can start working on it at:*/
/*                     <code>{{ base_dir }}/</code>*/
/*                 </p>*/
/*             </div>*/
/* */
/*             <div id="next">*/
/*                 <h2>What's next?</h2>*/
/*                 <p>*/
/*                     <svg id="icon-book" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-12.5 9 64 64" enable-background="new -12.5 9 64 64" xml:space="preserve">*/
/*                         <path fill="#AAA" d="M6.8,40.8c2.4,0.8,4.5-0.7,4.9-2.5c0.2-1.2-0.3-2.1-1.3-3.2l-0.8-0.8c-0.4-0.5-0.6-1.3-0.2-1.9*/
/*                             c0.4-0.5,0.9-0.8,1.8-0.5c1.3,0.4,1.9,1.3,2.9,2.2c-0.4,1.4-0.7,2.9-0.9,4.2l-0.2,1c-0.7,4-1.3,6.2-2.7,7.5*/
/*                             c-0.3,0.3-0.7,0.5-1.3,0.6c-0.3,0-0.4-0.3-0.4-0.3c0-0.3,0.2-0.3,0.3-0.4c0.2-0.1,0.5-0.3,0.4-0.8c0-0.7-0.6-1.3-1.3-1.3*/
/*                             c-0.6,0-1.4,0.6-1.4,1.7s1,1.9,2.4,1.8c0.8,0,2.5-0.3,4.2-2.5c2-2.5,2.5-5.4,2.9-7.4l0.5-2.8c0.3,0,0.5,0.1,0.8,0.1*/
/*                             c2.4,0.1,3.7-1.3,3.7-2.3c0-0.6-0.3-1.2-0.9-1.2c-0.4,0-0.8,0.3-1,0.8c-0.1,0.6,0.8,1.1,0.1,1.5c-0.5,0.3-1.4,0.6-2.7,0.4l0.3-1.3*/
/*                             c0.5-2.6,1-5.7,3.2-5.8c0.2,0,0.8,0,0.8,0.4c0,0.2,0,0.2-0.2,0.5c-0.2,0.3-0.3,0.4-0.2,0.7c0,0.7,0.5,1.1,1.2,1.1*/
/*                             c0.9,0,1.2-1,1.2-1.4c0-1.2-1.2-1.8-2.6-1.8c-1.5,0.1-2.8,0.9-3.7,2.1c-1.1,1.3-1.8,2.9-2.3,4.5c-0.9-0.8-1.6-1.8-3.1-2.3*/
/*                             c-1.1-0.7-2.3-0.5-3.4,0.3c-0.5,0.4-0.8,1-1,1.6c-0.4,1.5,0.4,2.9,0.8,3.4l0.9,1c0.2,0.2,0.6,0.8,0.4,1.5c-0.3,0.8-1.2,1.3-2.1,1*/
/*                             c-0.4-0.2-1-0.5-0.9-0.9c0.1-0.2,0.2-0.3,0.3-0.5s0.1-0.3,0.1-0.3c0.2-0.6-0.1-1.4-0.7-1.6c-0.6-0.2-1.2,0-1.3,0.8*/
/*                             C4.3,38.4,4.7,40,6.8,40.8z M46.1,20.9c0-4.2-3.2-7.5-7.1-7.5h-3.8C34.8,10.8,32.7,9,30.2,9L-2.3,9.1c-2.8,0.1-4.9,2.4-4.9,5.4*/
/*                             L-7,58.6c0,4.8,8.1,13.9,11.6,14.1l34.7-0.1c3.9,0,7-3.4,7-7.6L46.1,20.9z M-0.3,36.4c0-8.6,6.5-15.6,14.5-15.6*/
/*                             c8,0,14.5,7,14.5,15.6S22.1,52,14.2,52C6.1,52-0.3,45-0.3,36.4z M42.1,65.1c0,1.8-1.5,3.1-3.1,3.1H4.6c-0.7,0-3-1.8-4.5-4.4h30.4*/
/*                             c2.8,0,5-2.4,5-5.4V17.9h3.7c1.6,0,2.9,1.4,2.9,3.1V65.1L42.1,65.1z"/>*/
/*                     </svg>*/
/* */
/*                     Read the documentation to learn*/
/*                     <a href="http://symfony.com/doc/{{ constant('Symfony\\Component\\HttpKernel\\Kernel::VERSION')[:3] }}/book/page_creation.html">*/
/*                         How to create your first page in Symfony*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>#}*/
/* {% endblock %}*/
/* */
