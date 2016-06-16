<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7c50541e37696c3348f205dd84a5c78744c6e635ce25eaa52a28aa249c7a47d3 extends Twig_Template
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
        $__internal_f5f49d467c11e694f9e3d2fbc04d2fed25aa114aaf457f048562f06d9ba7cc1a = $this->env->getExtension("native_profiler");
        $__internal_f5f49d467c11e694f9e3d2fbc04d2fed25aa114aaf457f048562f06d9ba7cc1a->enter($__internal_f5f49d467c11e694f9e3d2fbc04d2fed25aa114aaf457f048562f06d9ba7cc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5f49d467c11e694f9e3d2fbc04d2fed25aa114aaf457f048562f06d9ba7cc1a->leave($__internal_f5f49d467c11e694f9e3d2fbc04d2fed25aa114aaf457f048562f06d9ba7cc1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d3d88ffd6618cd3ffc903d3048c372cb684d715a67dd122ec54e39adcd2f585 = $this->env->getExtension("native_profiler");
        $__internal_6d3d88ffd6618cd3ffc903d3048c372cb684d715a67dd122ec54e39adcd2f585->enter($__internal_6d3d88ffd6618cd3ffc903d3048c372cb684d715a67dd122ec54e39adcd2f585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d3d88ffd6618cd3ffc903d3048c372cb684d715a67dd122ec54e39adcd2f585->leave($__internal_6d3d88ffd6618cd3ffc903d3048c372cb684d715a67dd122ec54e39adcd2f585_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e136ff599278fbd0d1719856022feb714f8bee54a4e75f5c9130dcb6beac7d92 = $this->env->getExtension("native_profiler");
        $__internal_e136ff599278fbd0d1719856022feb714f8bee54a4e75f5c9130dcb6beac7d92->enter($__internal_e136ff599278fbd0d1719856022feb714f8bee54a4e75f5c9130dcb6beac7d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e136ff599278fbd0d1719856022feb714f8bee54a4e75f5c9130dcb6beac7d92->leave($__internal_e136ff599278fbd0d1719856022feb714f8bee54a4e75f5c9130dcb6beac7d92_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1ef4f58aea845d6d26a08a48356466decb90ae33ded439ab841ed0f61dc6ae0 = $this->env->getExtension("native_profiler");
        $__internal_b1ef4f58aea845d6d26a08a48356466decb90ae33ded439ab841ed0f61dc6ae0->enter($__internal_b1ef4f58aea845d6d26a08a48356466decb90ae33ded439ab841ed0f61dc6ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b1ef4f58aea845d6d26a08a48356466decb90ae33ded439ab841ed0f61dc6ae0->leave($__internal_b1ef4f58aea845d6d26a08a48356466decb90ae33ded439ab841ed0f61dc6ae0_prof);

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
