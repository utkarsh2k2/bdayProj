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
        $__internal_3c35985abb1eccbc595642ee0dafbd4e5eefedf80833f7aae32c1cecc2ef3856 = $this->env->getExtension("native_profiler");
        $__internal_3c35985abb1eccbc595642ee0dafbd4e5eefedf80833f7aae32c1cecc2ef3856->enter($__internal_3c35985abb1eccbc595642ee0dafbd4e5eefedf80833f7aae32c1cecc2ef3856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3c35985abb1eccbc595642ee0dafbd4e5eefedf80833f7aae32c1cecc2ef3856->leave($__internal_3c35985abb1eccbc595642ee0dafbd4e5eefedf80833f7aae32c1cecc2ef3856_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e73e52bd098d5971c804009512a2b56ba4afc85a9a1551b48a4d0174e303494 = $this->env->getExtension("native_profiler");
        $__internal_7e73e52bd098d5971c804009512a2b56ba4afc85a9a1551b48a4d0174e303494->enter($__internal_7e73e52bd098d5971c804009512a2b56ba4afc85a9a1551b48a4d0174e303494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7e73e52bd098d5971c804009512a2b56ba4afc85a9a1551b48a4d0174e303494->leave($__internal_7e73e52bd098d5971c804009512a2b56ba4afc85a9a1551b48a4d0174e303494_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c13250c3476d4111e295a772c70c547e24cd4be79f8d1e318eac244246fea775 = $this->env->getExtension("native_profiler");
        $__internal_c13250c3476d4111e295a772c70c547e24cd4be79f8d1e318eac244246fea775->enter($__internal_c13250c3476d4111e295a772c70c547e24cd4be79f8d1e318eac244246fea775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c13250c3476d4111e295a772c70c547e24cd4be79f8d1e318eac244246fea775->leave($__internal_c13250c3476d4111e295a772c70c547e24cd4be79f8d1e318eac244246fea775_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9809a8c57517ed54d4b8239b699e1777f4c056c04b7a77635669fd9404abadbe = $this->env->getExtension("native_profiler");
        $__internal_9809a8c57517ed54d4b8239b699e1777f4c056c04b7a77635669fd9404abadbe->enter($__internal_9809a8c57517ed54d4b8239b699e1777f4c056c04b7a77635669fd9404abadbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9809a8c57517ed54d4b8239b699e1777f4c056c04b7a77635669fd9404abadbe->leave($__internal_9809a8c57517ed54d4b8239b699e1777f4c056c04b7a77635669fd9404abadbe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdd8a423bddb2204ab45f74073e8030e4c967f561f7941420179e24d5edabe89 = $this->env->getExtension("native_profiler");
        $__internal_fdd8a423bddb2204ab45f74073e8030e4c967f561f7941420179e24d5edabe89->enter($__internal_fdd8a423bddb2204ab45f74073e8030e4c967f561f7941420179e24d5edabe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fdd8a423bddb2204ab45f74073e8030e4c967f561f7941420179e24d5edabe89->leave($__internal_fdd8a423bddb2204ab45f74073e8030e4c967f561f7941420179e24d5edabe89_prof);

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
