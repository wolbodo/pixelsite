<?php

/* users/_sessions.twig */
class __TwigTemplate_0d551651592792df55138848b6fce9d2deee3a208d07ca90fe5be41e148c474e extends Twig_Template
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
        echo "<div class=\"table-responsive\">
    <table class=\"table table-striped dashboardlisting\">
        <thead>
            <tr>
                <th>";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("Username");
        echo "</th>
                <th>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("Last seen");
        echo "</th>
                <th>";
        // line 7
        echo $this->env->getExtension('Bolt')->trans("Session expires");
        echo "</th>
                <th>";
        // line 8
        echo $this->env->getExtension('Bolt')->trans("IP address");
        echo "</th>
                <th>";
        // line 9
        echo $this->env->getExtension('Bolt')->trans("Browser / platform");
        echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "sessions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "username", array()), "html", null, true);
            echo "</td>
                    <td>
                        <time class=\"moment\" datetime=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "lastseen", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "lastseen", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "lastseen", array()), "html", null, true);
            echo "</time>
                    </td>
                    <td>
                        <time class=\"moment\" datetime=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "validity", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "validity", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "validity", array()), "html", null, true);
            echo "</time>
                    </td>
                    <td>
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "ip", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <span class=\"useragent label info-pop\" data-html=\"true\" data-content=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "useragent", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "browser", array()), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "users/_sessions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  87 => 27,  81 => 24,  71 => 21,  61 => 18,  56 => 16,  53 => 15,  49 => 14,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*     <table class="table table-striped dashboardlisting">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ __('Username') }}</th>*/
/*                 <th>{{ __('Last seen') }}</th>*/
/*                 <th>{{ __('Session expires') }}</th>*/
/*                 <th>{{ __('IP address') }}</th>*/
/*                 <th>{{ __('Browser / platform') }}</th>*/
/*             </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*             {% for session in context.sessions %}*/
/*                 <tr>*/
/*                     <td>{{ session.username }}</td>*/
/*                     <td>*/
/*                         <time class="moment" datetime="{{ session.lastseen|date("c") }}" title="{{ session.lastseen }}">{{ session.lastseen }}</time>*/
/*                     </td>*/
/*                     <td>*/
/*                         <time class="moment" datetime="{{ session.validity|date("c") }}" title="{{ session.validity }}">{{ session.validity }}</time>*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ session.ip }}*/
/*                     </td>*/
/*                     <td>*/
/*                         <span class="useragent label info-pop" data-html="true" data-content="{{ session.useragent }}">{{ session.browser }}</span>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
