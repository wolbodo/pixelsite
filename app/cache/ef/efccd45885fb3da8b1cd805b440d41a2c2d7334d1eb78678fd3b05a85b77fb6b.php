<?php

/* users/_userlist.twig */
class __TwigTemplate_d610fd58d91a6815f4997e5ae84c211caa50d1740652983e04c11bcb04e44d45 extends Twig_Template
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
        echo "    <table class=\"table-striped dashboardlisting userlist\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("Id");
        echo "</th>
                <th>";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("Username");
        echo "</th>
                <th class=\"hidden-xs\">";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("Last seen");
        echo "</th>
                <th>";
        // line 7
        echo $this->env->getExtension('Bolt')->trans("Roles");
        echo "</th>
                <th>";
        // line 8
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "users", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "
                <tr>
                    <td class=\"id\">
                        ";
            // line 17
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "<s>";
            }
            // line 18
            echo "                        № ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "
                        ";
            // line 19
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "</s>";
            }
            // line 20
            echo "                    </td>

                    <td class=\"username\">
                        ";
            // line 23
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "<s>";
            }
            // line 24
            echo "                        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayname", array()), "html", null, true);
            echo "</strong> (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo ")
                        ";
            // line 25
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                echo "</s>";
            }
            // line 26
            echo "                    </td>

                    <td class=\"hidden-xs\">
                        ";
            // line 29
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastseen", array()), "Y") > "1901")) {
                // line 30
                echo "                            <time class=\"moment\" datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastseen", array()), "c"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastseen", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastseen", array()), "html", null, true);
                echo "</time>
                        ";
            } else {
                // line 32
                echo "                        -
                        ";
            }
            // line 34
            echo "                    </td>

                    <td class=\"contenttypes\">
                        ";
            // line 37
            if (twig_in_filter("root", $this->getAttribute($context["user"], "roles", array()))) {
                // line 38
                echo "                            <strong><em>root</em></strong>
                        ";
            } else {
                // line 40
                echo "                            ";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["user"], "roles", array()), ", "), "html", null, true);
                echo "
                        ";
            }
            // line 42
            echo "                    </td>

                    <td class=\"actions\">
                        ";
            // line 45
            $this->loadTemplate("users/_userlist-actions.twig", "users/_userlist.twig", 45)->display($context);
            // line 46
            echo "                    </td>
            </tr>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>

    </table>
";
    }

    public function getTemplateName()
    {
        return "users/_userlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 50,  148 => 46,  146 => 45,  141 => 42,  135 => 40,  131 => 38,  129 => 37,  124 => 34,  120 => 32,  110 => 30,  108 => 29,  103 => 26,  99 => 25,  92 => 24,  88 => 23,  83 => 20,  79 => 19,  74 => 18,  70 => 17,  65 => 14,  48 => 13,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/*     <table class="table-striped dashboardlisting userlist">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ __('Id') }}</th>*/
/*                 <th>{{ __('Username') }}</th>*/
/*                 <th class="hidden-xs">{{ __('Last seen') }}</th>*/
/*                 <th>{{ __('Roles') }}</th>*/
/*                 <th>{{ __('Actions') }}</th>*/
/*             </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*             {% for user in context.users %}*/
/* */
/*                 <tr>*/
/*                     <td class="id">*/
/*                         {% if user.enabled == 0 %}<s>{% endif %}*/
/*                         № {{ user.id }}*/
/*                         {% if user.enabled == 0 %}</s>{% endif %}*/
/*                     </td>*/
/* */
/*                     <td class="username">*/
/*                         {% if user.enabled == 0 %}<s>{% endif %}*/
/*                         <strong>{{ user.displayname }}</strong> ({{ user.username }})*/
/*                         {% if user.enabled == 0 %}</s>{% endif %}*/
/*                     </td>*/
/* */
/*                     <td class="hidden-xs">*/
/*                         {% if user.lastseen|date('Y') > "1901" %}*/
/*                             <time class="moment" datetime="{{ user.lastseen|date("c") }}" title="{{ user.lastseen }}">{{ user.lastseen }}</time>*/
/*                         {% else %}*/
/*                         -*/
/*                         {% endif %}*/
/*                     </td>*/
/* */
/*                     <td class="contenttypes">*/
/*                         {% if 'root' in user.roles %}*/
/*                             <strong><em>root</em></strong>*/
/*                         {% else %}*/
/*                             {{ user.roles|join(", ") }}*/
/*                         {% endif %}*/
/*                     </td>*/
/* */
/*                     <td class="actions">*/
/*                         {% include 'users/_userlist-actions.twig' %}*/
/*                     </td>*/
/*             </tr>*/
/* */
/*         {% endfor %}*/
/*     </tbody>*/
/* */
/*     </table>*/
/* */
