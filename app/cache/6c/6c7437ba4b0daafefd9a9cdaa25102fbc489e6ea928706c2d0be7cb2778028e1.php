<?php

/* users/_aside.twig */
class __TwigTemplate_aa348344b15fbff5d8a90edb4e06de9ab9517401dc56be52e9e335e2f4facf89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("users/_panel-actions_users.twig", "users/_aside.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"latestactivity\">
    ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("latestactivity"));
        echo "
</div>

<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\"><!-- intentionally left blank --></div>
";
    }

    public function getTemplateName()
    {
        return "users/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% include 'users/_panel-actions_users.twig' %}*/
/* */
/* <div id="latestactivity">*/
/*     {{ render(path("latestactivity")) }}*/
/* </div>*/
/* */
/* <div id="latesttemp" style="display:none; visibility: hidden;"><!-- intentionally left blank --></div>*/
/* */
