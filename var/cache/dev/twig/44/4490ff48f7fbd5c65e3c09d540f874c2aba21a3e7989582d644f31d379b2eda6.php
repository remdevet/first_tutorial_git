<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f02c5ad4e827bcc4eb3726ee6d7967be7ebbf2e35196333d19d380d9a1561c51 extends Twig_Template
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
        $__internal_1dfcd2ac669ee20996288b164f5214044ef2ee334f924625b0452e12d78ff6ec = $this->env->getExtension("native_profiler");
        $__internal_1dfcd2ac669ee20996288b164f5214044ef2ee334f924625b0452e12d78ff6ec->enter($__internal_1dfcd2ac669ee20996288b164f5214044ef2ee334f924625b0452e12d78ff6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dfcd2ac669ee20996288b164f5214044ef2ee334f924625b0452e12d78ff6ec->leave($__internal_1dfcd2ac669ee20996288b164f5214044ef2ee334f924625b0452e12d78ff6ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e8d57b89eb13b4a6b4d6e7909a72f3686b916da861abd323abbf8a1cee8fec5 = $this->env->getExtension("native_profiler");
        $__internal_3e8d57b89eb13b4a6b4d6e7909a72f3686b916da861abd323abbf8a1cee8fec5->enter($__internal_3e8d57b89eb13b4a6b4d6e7909a72f3686b916da861abd323abbf8a1cee8fec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3e8d57b89eb13b4a6b4d6e7909a72f3686b916da861abd323abbf8a1cee8fec5->leave($__internal_3e8d57b89eb13b4a6b4d6e7909a72f3686b916da861abd323abbf8a1cee8fec5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e49637736ebb3cc44dda4169c0e59a438f7ca75df040d97a4a9e6f36be658672 = $this->env->getExtension("native_profiler");
        $__internal_e49637736ebb3cc44dda4169c0e59a438f7ca75df040d97a4a9e6f36be658672->enter($__internal_e49637736ebb3cc44dda4169c0e59a438f7ca75df040d97a4a9e6f36be658672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e49637736ebb3cc44dda4169c0e59a438f7ca75df040d97a4a9e6f36be658672->leave($__internal_e49637736ebb3cc44dda4169c0e59a438f7ca75df040d97a4a9e6f36be658672_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61964587b4bc4d2206648330db38aa775833a8e6a61e65df539cd81ee53f208c = $this->env->getExtension("native_profiler");
        $__internal_61964587b4bc4d2206648330db38aa775833a8e6a61e65df539cd81ee53f208c->enter($__internal_61964587b4bc4d2206648330db38aa775833a8e6a61e65df539cd81ee53f208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_61964587b4bc4d2206648330db38aa775833a8e6a61e65df539cd81ee53f208c->leave($__internal_61964587b4bc4d2206648330db38aa775833a8e6a61e65df539cd81ee53f208c_prof);

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
