<?php

/* _sub_menu.twig */
class __TwigTemplate_9a0cbcbda8d82efa9f7dafb3792350db66c8a562781bc723536aeae2234dbc0f extends Twig_Template
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
        ob_start();
        // line 7
        echo "
";
        // line 34
        echo "
";
        // line 36
        $context["__internal_84af9602bedf74cacdc104d44cf6afdeab9a09508dbe24bbd5a60a5cc7bc4632"] = $this;
        // line 37
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            echo "    ";
            if ($this->getAttribute($context["item"], "label", array(), "any", true, true)) {
                // line 41
                echo "        ";
                echo $context["__internal_84af9602bedf74cacdc104d44cf6afdeab9a09508dbe24bbd5a60a5cc7bc4632"]->getdisplay_menu_item($context["item"], $context["loop"]);
                echo "
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 10
    public function getdisplay_menu_item($__item__ = null, $__loop__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "loop" => $__loop__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "
    ";
            // line 12
            $context["__internal_cd6a3d1be808e90d641eb800f210eeb15e1c2653105641ce5bb9b2e1b702137e"] = $this;
            // line 13
            echo "
    <li class=\"index-";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array()), "html", null, true);
            // line 15
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) ? (" first") : (""));
            // line 16
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last", array())) ? (" last") : (""));
            // line 17
            echo (((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array()), false)) : (false))) ? (" has-dropdown") : (""));
            // line 18
            echo (($this->env->getExtension('Bolt')->current((isset($context["item"]) ? $context["item"] : null))) ? (" active") : (""));
            echo "\">

        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
            echo "\" title='";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "")) : ("")));
            echo "' class='";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array()), "")) : ("")), "html", null, true);
            echo "'>
            ";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "-")) : ("-")), "html", null, true);
            echo "
        </a>

        ";
            // line 24
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) {
                // line 25
                echo "            <ul class=\"dropdown\">
                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                    // line 27
                    echo "                    ";
                    echo $context["__internal_cd6a3d1be808e90d641eb800f210eeb15e1c2653105641ce5bb9b2e1b702137e"]->getdisplay_menu_item($context["submenu"], $context["loop"]);
                    echo "
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </ul>
        ";
            }
            // line 31
            echo "
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 31,  163 => 29,  146 => 27,  129 => 26,  126 => 25,  124 => 24,  118 => 21,  110 => 20,  105 => 18,  103 => 17,  101 => 16,  99 => 15,  97 => 14,  94 => 13,  92 => 12,  89 => 11,  76 => 10,  70 => 44,  52 => 41,  49 => 40,  32 => 39,  29 => 37,  27 => 36,  24 => 34,  21 => 7,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {# This file might seem a little complex, because of the high density of tags.*/
/*    It uses Twig macros and ternary selectors. Read up on them, if required:*/
/*    macros: http://twig.sensiolabs.org/doc/templates.html#macros*/
/*    ternary operators: http://twig.sensiolabs.org/doc/templates.html#other-operators*/
/* #}*/
/* */
/* {# The 'recursive' macro, for inserting one menu item. If it has a submenu, it*/
/*    invokes itself to insert the items of the submenus. #}*/
/* {% macro display_menu_item(item, loop) %}*/
/* */
/*     {% from _self import display_menu_item %}*/
/* */
/*     <li class="index-{{ loop.index -}}*/
/*         {{ loop.first ? ' first' -}}*/
/*         {{ loop.last ? ' last' -}}*/
/*         {{ item.submenu|default(false) ? ' has-dropdown' -}}*/
/*         {{ item|current ? ' active' }}">*/
/* */
/*         <a href="{{ item.link }}" title='{{ item.title|default('')|escape }}' class='{{ item.class|default('') }}'>*/
/*             {{ item.label|default('-') }}*/
/*         </a>*/
/* */
/*         {% if item.submenu is defined %}*/
/*             <ul class="dropdown">*/
/*                 {% for submenu in item.submenu %}*/
/*                     {{ display_menu_item(submenu, loop) }}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/* */
/*     </li>*/
/* {% endmacro %}*/
/* */
/* {# Make the macro available for use #}*/
/* {% from _self import display_menu_item %}*/
/* */
/* {# The main menu loop: Iterates over the items, calling `display_menu_item` #}*/
/* {% for item in menu %}*/
/*     {% if item.label is defined %}*/
/*         {{ display_menu_item(item, loop) }}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {% endspaceless %}*/
/* */
