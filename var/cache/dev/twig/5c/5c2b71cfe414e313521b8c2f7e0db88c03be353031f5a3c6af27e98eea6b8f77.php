<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7c6a18e8fbb456a847226ec3757ca5e3d33bba178dc94b82d2d8ebaa269b36fe extends Twig_Template
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
        $__internal_8a79c3a71e8257656971b9fc3cbdb44594a5c51cdc89d08a944a3eee233f710f = $this->env->getExtension("native_profiler");
        $__internal_8a79c3a71e8257656971b9fc3cbdb44594a5c51cdc89d08a944a3eee233f710f->enter($__internal_8a79c3a71e8257656971b9fc3cbdb44594a5c51cdc89d08a944a3eee233f710f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a79c3a71e8257656971b9fc3cbdb44594a5c51cdc89d08a944a3eee233f710f->leave($__internal_8a79c3a71e8257656971b9fc3cbdb44594a5c51cdc89d08a944a3eee233f710f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16941674de8ca8e5d023c2f6748ed4307d570a3e2e153067198c7dba4ed379ee = $this->env->getExtension("native_profiler");
        $__internal_16941674de8ca8e5d023c2f6748ed4307d570a3e2e153067198c7dba4ed379ee->enter($__internal_16941674de8ca8e5d023c2f6748ed4307d570a3e2e153067198c7dba4ed379ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16941674de8ca8e5d023c2f6748ed4307d570a3e2e153067198c7dba4ed379ee->leave($__internal_16941674de8ca8e5d023c2f6748ed4307d570a3e2e153067198c7dba4ed379ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d965e45bdaf02aa54ae4c82f5c0c758d90a41d065b148a736f4566747c4b1748 = $this->env->getExtension("native_profiler");
        $__internal_d965e45bdaf02aa54ae4c82f5c0c758d90a41d065b148a736f4566747c4b1748->enter($__internal_d965e45bdaf02aa54ae4c82f5c0c758d90a41d065b148a736f4566747c4b1748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d965e45bdaf02aa54ae4c82f5c0c758d90a41d065b148a736f4566747c4b1748->leave($__internal_d965e45bdaf02aa54ae4c82f5c0c758d90a41d065b148a736f4566747c4b1748_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4679cce4d7fde740e13dff981713a2d64deda3c69b174a362631d0fb8cece90b = $this->env->getExtension("native_profiler");
        $__internal_4679cce4d7fde740e13dff981713a2d64deda3c69b174a362631d0fb8cece90b->enter($__internal_4679cce4d7fde740e13dff981713a2d64deda3c69b174a362631d0fb8cece90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4679cce4d7fde740e13dff981713a2d64deda3c69b174a362631d0fb8cece90b->leave($__internal_4679cce4d7fde740e13dff981713a2d64deda3c69b174a362631d0fb8cece90b_prof);

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
