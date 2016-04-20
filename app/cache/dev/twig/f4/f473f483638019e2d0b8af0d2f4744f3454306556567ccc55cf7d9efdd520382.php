<?php

/* base.html.twig */
class __TwigTemplate_e89a0c6e48ad9d66cf560f7c39ba0d1b69ab300435fc82674631e143cb518a7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15484c122335a73152ea2ce448d49ffa2b467f751f55036eeb91ba204185ce63 = $this->env->getExtension("native_profiler");
        $__internal_15484c122335a73152ea2ce448d49ffa2b467f751f55036eeb91ba204185ce63->enter($__internal_15484c122335a73152ea2ce448d49ffa2b467f751f55036eeb91ba204185ce63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_15484c122335a73152ea2ce448d49ffa2b467f751f55036eeb91ba204185ce63->leave($__internal_15484c122335a73152ea2ce448d49ffa2b467f751f55036eeb91ba204185ce63_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ca0915254d8b6312495353bae3a5392292da90f4d4c441d573d02b40e935d62 = $this->env->getExtension("native_profiler");
        $__internal_3ca0915254d8b6312495353bae3a5392292da90f4d4c441d573d02b40e935d62->enter($__internal_3ca0915254d8b6312495353bae3a5392292da90f4d4c441d573d02b40e935d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3ca0915254d8b6312495353bae3a5392292da90f4d4c441d573d02b40e935d62->leave($__internal_3ca0915254d8b6312495353bae3a5392292da90f4d4c441d573d02b40e935d62_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_105c530ba6932f6f1c91dfe672a3101c22b8023f9787be295c459171fc281c1c = $this->env->getExtension("native_profiler");
        $__internal_105c530ba6932f6f1c91dfe672a3101c22b8023f9787be295c459171fc281c1c->enter($__internal_105c530ba6932f6f1c91dfe672a3101c22b8023f9787be295c459171fc281c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_105c530ba6932f6f1c91dfe672a3101c22b8023f9787be295c459171fc281c1c->leave($__internal_105c530ba6932f6f1c91dfe672a3101c22b8023f9787be295c459171fc281c1c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f7c61ef65f52d62bab4c025f7127f3443329b898d3f186fc7ebfdd5cbd2be5 = $this->env->getExtension("native_profiler");
        $__internal_36f7c61ef65f52d62bab4c025f7127f3443329b898d3f186fc7ebfdd5cbd2be5->enter($__internal_36f7c61ef65f52d62bab4c025f7127f3443329b898d3f186fc7ebfdd5cbd2be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_36f7c61ef65f52d62bab4c025f7127f3443329b898d3f186fc7ebfdd5cbd2be5->leave($__internal_36f7c61ef65f52d62bab4c025f7127f3443329b898d3f186fc7ebfdd5cbd2be5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_465d88537a941b9900be9c5a410354902a221cffcaf06104ecd3775ff168ee31 = $this->env->getExtension("native_profiler");
        $__internal_465d88537a941b9900be9c5a410354902a221cffcaf06104ecd3775ff168ee31->enter($__internal_465d88537a941b9900be9c5a410354902a221cffcaf06104ecd3775ff168ee31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_465d88537a941b9900be9c5a410354902a221cffcaf06104ecd3775ff168ee31->leave($__internal_465d88537a941b9900be9c5a410354902a221cffcaf06104ecd3775ff168ee31_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
