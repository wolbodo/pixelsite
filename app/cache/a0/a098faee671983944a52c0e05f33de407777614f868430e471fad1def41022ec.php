<?php

/* nav/_secondary-search.twig */
class __TwigTemplate_932ded0ac5c3817c382ae3b1576e1770e57b820ffff1fee9a33f12c0ce8a7f51 extends Twig_Template
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
        echo "<li class=\"search\">
    <form class=\"navbar-form\" role=\"search\">
        <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback\">
            <input type=\"text\" class=\"form-control omnisearch\" placeholder=\"";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("Find");
        echo "…\">
        </div>
    </form>
</li>
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <li class="search">*/
/*     <form class="navbar-form" role="search">*/
/*         <i class="icon fa fa-search"></i><div class="form-group has-feedback">*/
/*             <input type="text" class="form-control omnisearch" placeholder="{{ __('Find') }}…">*/
/*         </div>*/
/*     </form>*/
/* </li>*/
/* */
