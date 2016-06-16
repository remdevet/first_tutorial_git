<?php

/* base.html.twig */
class __TwigTemplate_1ca0658357951ed29ebeb75fd24e0051a4cabe719d0f58e0b9d492823c8532f2 extends Twig_Template
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
        $__internal_98b77dfbfbfd0306025904b00cea20aea78c22bd64c2ae6a92f419ea649bc8ed = $this->env->getExtension("native_profiler");
        $__internal_98b77dfbfbfd0306025904b00cea20aea78c22bd64c2ae6a92f419ea649bc8ed->enter($__internal_98b77dfbfbfd0306025904b00cea20aea78c22bd64c2ae6a92f419ea649bc8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_98b77dfbfbfd0306025904b00cea20aea78c22bd64c2ae6a92f419ea649bc8ed->leave($__internal_98b77dfbfbfd0306025904b00cea20aea78c22bd64c2ae6a92f419ea649bc8ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_439814550ce99f3afba072b4a377b82cd0bd087a5882d054be23b1f6f479ff44 = $this->env->getExtension("native_profiler");
        $__internal_439814550ce99f3afba072b4a377b82cd0bd087a5882d054be23b1f6f479ff44->enter($__internal_439814550ce99f3afba072b4a377b82cd0bd087a5882d054be23b1f6f479ff44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_439814550ce99f3afba072b4a377b82cd0bd087a5882d054be23b1f6f479ff44->leave($__internal_439814550ce99f3afba072b4a377b82cd0bd087a5882d054be23b1f6f479ff44_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57b80974a4ed17fd11251046748b7a8442c37d6f0ba66fb053fa290cdbaa6927 = $this->env->getExtension("native_profiler");
        $__internal_57b80974a4ed17fd11251046748b7a8442c37d6f0ba66fb053fa290cdbaa6927->enter($__internal_57b80974a4ed17fd11251046748b7a8442c37d6f0ba66fb053fa290cdbaa6927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57b80974a4ed17fd11251046748b7a8442c37d6f0ba66fb053fa290cdbaa6927->leave($__internal_57b80974a4ed17fd11251046748b7a8442c37d6f0ba66fb053fa290cdbaa6927_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd2002f3ec00c9d034b3bb8bcc986fc8afad4049395b51bf1ffef66e7530f42b = $this->env->getExtension("native_profiler");
        $__internal_dd2002f3ec00c9d034b3bb8bcc986fc8afad4049395b51bf1ffef66e7530f42b->enter($__internal_dd2002f3ec00c9d034b3bb8bcc986fc8afad4049395b51bf1ffef66e7530f42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd2002f3ec00c9d034b3bb8bcc986fc8afad4049395b51bf1ffef66e7530f42b->leave($__internal_dd2002f3ec00c9d034b3bb8bcc986fc8afad4049395b51bf1ffef66e7530f42b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5938867399e1b8bbdcfc262a7342ccd6bb08816a9943fdb4810808b3e355fda = $this->env->getExtension("native_profiler");
        $__internal_a5938867399e1b8bbdcfc262a7342ccd6bb08816a9943fdb4810808b3e355fda->enter($__internal_a5938867399e1b8bbdcfc262a7342ccd6bb08816a9943fdb4810808b3e355fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a5938867399e1b8bbdcfc262a7342ccd6bb08816a9943fdb4810808b3e355fda->leave($__internal_a5938867399e1b8bbdcfc262a7342ccd6bb08816a9943fdb4810808b3e355fda_prof);

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
