<?php

/* editcontent/_aside-status.twig */
class __TwigTemplate_3413b0e03feefab154e17c32e5d841c51661437b4a23b9dc77be2a3964baadf8 extends Twig_Template
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
        echo "<p>
    ";
        // line 2
        echo $this->env->getExtension('Bolt')->trans("Current (saved) status:");
        echo "
    <a href=\"#statusselect\" id=\"lastsavedstatus\" title=\"";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("Click to change current status.");
        echo "\">
        <strong>
            <i class=\"fa fa-circle status-";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array()), $this->env->getExtension('Bolt')->trans("none"))) : ($this->env->getExtension('Bolt')->trans("none"))), "html", null, true);
        echo "\"></i>
            ";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()), array(), "array"), $this->env->getExtension('Bolt')->trans("None"))) : ($this->env->getExtension('Bolt')->trans("None"))), "html", null, true);
        echo "
        </strong>
    </a>
</p>

<p class=\"lastsaved\">
    ";
        // line 12
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()))) {
            // line 13
            echo "    ";
            echo $this->env->getExtension('Bolt')->trans("Saved on:");
            echo " <strong>";
            echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()), "%c");
            echo "</strong>
    <small>(";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "datetime", array(0 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array())), "method"), "html", null, true);
            echo ")</small></p>
";
        } else {
            // line 16
            echo "    ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
";
        }
        // line 18
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  58 => 16,  53 => 14,  46 => 13,  44 => 12,  35 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <p>*/
/*     {{ __("Current (saved) status:") }}*/
/*     <a href="#statusselect" id="lastsavedstatus" title="{{ __("Click to change current status.") }}">*/
/*         <strong>*/
/*             <i class="fa fa-circle status-{{ context.content.status|default(__("none")) }}"></i>*/
/*             {{ status_names[context.content.status]|default(__("None")) }}*/
/*         </strong>*/
/*     </a>*/
/* </p>*/
/* */
/* <p class="lastsaved">*/
/*     {% if context.content.id is not empty %}*/
/*     {{ __('Saved on:') }} <strong>{{ context.content.datechanged|localdate("%c") }}</strong>*/
/*     <small>({{ macro.datetime(context.content.datechanged) }})</small></p>*/
/* {% else %}*/
/*     {{ __('contenttypes.generic.not-saved-yet', {'%contenttype%': context.contenttype.slug}) }}*/
/* {% endif %}*/
/* </p>*/
/* */
