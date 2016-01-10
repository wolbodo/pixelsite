<?php

/* components/pager.twig */
class __TwigTemplate_613b3b7c47d46a0a2d49ab2afb9cfa9b6c72ab14284f2f4f31049351d5d9dbe8 extends Twig_Template
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
        $context["link"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "makelink", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array(), "any", false, true), "totalpages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array(), "any", false, true), "totalpages", array()), 0)) : (0)) > 1)) {
            // line 4
            echo "    <div style=\"text-align: center\">
        <ul class=\"pagination pagination-centered\">
            ";
            // line 7
            echo "            <li><span>";
            echo $this->env->getExtension('Bolt')->trans("Showing %pager_for% %from% - %to% of %count%", array("%pager_for%" => $this->getAttribute($this->getAttribute(            // line 8
(isset($context["context"]) ? $context["context"] : null), "pager", array()), "for", array()), "%from%" => $this->getAttribute($this->getAttribute(            // line 9
(isset($context["context"]) ? $context["context"] : null), "pager", array()), "showing_from", array()), "%to%" => $this->getAttribute($this->getAttribute(            // line 10
(isset($context["context"]) ? $context["context"] : null), "pager", array()), "showing_to", array()), "%count%" => $this->getAttribute($this->getAttribute(            // line 11
(isset($context["context"]) ? $context["context"] : null), "pager", array()), "count", array())));
            // line 12
            echo "</span>
            </li>

            ";
            // line 16
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) > 1)) {
                // line 17
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) - 1), "html", null, true);
                echo "\"><i class=\"fa fa-angle-left\" style=\"font-weight: bold;\"></i></a></li>
            ";
            }
            // line 19
            echo "
            ";
            // line 20
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) > ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "surr", array()) + 1))) {
                // line 21
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\"><i class=\"fa fa-double-angle-left\" style=\"font-weight: bold;\"></i> 1</a></li>
            ";
            }
            // line 23
            echo "
            ";
            // line 25
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) > ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "surr", array()) + 2))) {
                // line 26
                echo "                <li class=\"disabled\"><a href=\"#\">...</a></li>
            ";
            }
            // line 28
            echo "
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(1, ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) - $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "surr", array()))), min(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) + $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "surr", array())), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "totalpages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "                <li ";
                if (($context["i"] == $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()))) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
            ";
            // line 34
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) < (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "totalpages", array()) - $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "surr", array())) - 1))) {
                // line 35
                echo "                <li class=\"disabled\"><a href=\"#\">...</a></li>
            ";
            }
            // line 37
            echo "
            ";
            // line 39
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) < ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "totalpages", array()) - $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "surr", array())))) {
                // line 40
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "totalpages", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "totalpages", array()), "html", null, true);
                echo " <i class=\"fa fa-double-angle-right\" style=\"font-weight: bold;\"></i></a></li>
            ";
            }
            // line 42
            echo "
            ";
            // line 43
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) < $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "totalpages", array()))) {
                // line 44
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pager", array()), "current", array()) + 1), "html", null, true);
                echo "\"><i class=\"fa fa-angle-right\" style=\"font-weight: bold;\"></i></a></li>
            ";
            }
            // line 46
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  127 => 44,  125 => 43,  122 => 42,  113 => 40,  110 => 39,  107 => 37,  103 => 35,  100 => 34,  97 => 32,  81 => 30,  77 => 29,  74 => 28,  70 => 26,  67 => 25,  64 => 23,  57 => 21,  55 => 20,  52 => 19,  45 => 17,  42 => 16,  37 => 12,  35 => 11,  34 => 10,  33 => 9,  32 => 8,  30 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set link = context.pager.makelink() %}*/
/* */
/* {% if context.pager.totalpages|default(0) > 1 %}*/
/*     <div style="text-align: center">*/
/*         <ul class="pagination pagination-centered">*/
/*             {# Showing {{ context.pager.for }} {{ context.pager.showing_from }} - {{ context.pager.showing_to }} of {{ context.pager.count }} #}*/
/*             <li><span>{{ __('Showing %pager_for% %from% - %to% of %count%', {*/
/*                     '%pager_for%': context.pager.for,*/
/*                     '%from%': context.pager.showing_from,*/
/*                     '%to%': context.pager.showing_to,*/
/*                     '%count%': context.pager.count})*/
/*                 }}</span>*/
/*             </li>*/
/* */
/*             {# 'first' and 'prev' #}*/
/*             {% if context.pager.current > 1 %}*/
/*                 <li><a href="{{ link }}{{ context.pager.current - 1 }}"><i class="fa fa-angle-left" style="font-weight: bold;"></i></a></li>*/
/*             {% endif %}*/
/* */
/*             {% if context.pager.current > context.surr+1 %}*/
/*                 <li><a href="{{ link }}{{ 1 }}"><i class="fa fa-double-angle-left" style="font-weight: bold;"></i> 1</a></li>*/
/*             {% endif %}*/
/* */
/*             {# start with '...' if there are more than context.surr+1 before currentpage. #}*/
/*             {% if context.pager.current > context.surr + 2 %}*/
/*                 <li class="disabled"><a href="#">...</a></li>*/
/*             {% endif %}*/
/* */
/*             {% for i in max(1, context.pager.current - context.surr) .. min(context.pager.current + context.surr, context.pager.totalpages) %}*/
/*                 <li {% if i == context.pager.current %}class="active"{% endif %}><a href="{{ link }}{{ i }}">{{ i }}</a></li>*/
/*             {% endfor %}*/
/* */
/*             {# end with '...' if there are more than context.surr+1 after currentpage. #}*/
/*             {% if context.pager.current < (context.pager.totalpages - context.surr - 1) %}*/
/*                 <li class="disabled"><a href="#">...</a></li>*/
/*             {% endif %}*/
/* */
/*             {# 'next' and 'last' #}*/
/*             {% if context.pager.current < context.pager.totalpages - context.surr %}*/
/*                 <li><a href="{{ link }}{{ context.pager.totalpages }}">{{ context.pager.totalpages }} <i class="fa fa-double-angle-right" style="font-weight: bold;"></i></a></li>*/
/*             {% endif %}*/
/* */
/*             {% if context.pager.current < context.pager.totalpages %}*/
/*                 <li><a href="{{ link }}{{ context.pager.current + 1 }}"><i class="fa fa-angle-right" style="font-weight: bold;"></i></a></li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* */
