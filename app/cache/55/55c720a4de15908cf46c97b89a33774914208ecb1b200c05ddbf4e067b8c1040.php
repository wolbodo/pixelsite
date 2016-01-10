<?php

/* prefill/prefill.twig */
class __TwigTemplate_1fcb09ecb68079a3fa2add9e718dbf9751c91ac3db7ff2e58b5a846bc5de74af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "prefill/prefill.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/Configuration";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Fill the database with Dummy Content");
    }

    // line 9
    public function block_page_main($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "prefill/prefill.twig", 10);
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <form method=\"post\" id=\"prefill\" class=\"form-horizontal\"";
        // line 14
        echo $context["macro"]->getattr(array("_bind" => array(0 => "prefill")));
        echo ">
                <div id=\"form\">
                    <div class=\"control-group\">
                        <div class=\"info\">
                            ";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "prefill.short_help", 1 => array(), 2 => "infos"), "method");
        echo "
                        </div>

                        <div id=\"form_contenttypes\" style=\"border-bottom: 1px solid #eee; margin-bottom: 10px; width: 50%\">
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttypes", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["ctype"]) {
            // line 23
            echo "                                <div>
                                    <label>
                                        <input type=\"checkbox\"
                                               id=\"form_contenttypes_";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\"
                                               name=\"form[contenttypes][]\"
                                               value=\"";
            // line 28
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["ctype"], "html", null, true);
            echo "
                                    </label>
                                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['ctype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "_token", array()), 'widget');
        echo "

                <div style=\"margin-top: 12px\">
                    <button type=\"button\" class=\"btn btn-xs\" id=\"check-all\"><i class=\"fa fa-fw fa-check-square-o\"></i> ";
        // line 39
        echo $this->env->getExtension('Bolt')->trans("Select all");
        echo "</button>
                    <button type=\"button\" class=\"btn btn-xs\" id=\"uncheck-all\"><i class=\"fa fa-fw fa-square-o\"></i> ";
        // line 40
        echo $this->env->getExtension('Bolt')->trans("Deselect all");
        echo "</button>
                </div>
                <div style=\"margin-top: 12px\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-wrench\"></i> ";
        // line 43
        echo $this->env->getExtension('Bolt')->trans("Prefill database");
        echo "</button>
                </div>

            </form>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "prefill/prefill.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  130 => 40,  126 => 39,  120 => 36,  114 => 32,  94 => 28,  89 => 26,  84 => 23,  67 => 22,  60 => 18,  53 => 14,  48 => 11,  45 => 10,  42 => 9,  36 => 7,  30 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Configuration > Check database > Records with... #}*/
/* */
/* {% extends '_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Settings/Configuration' %}*/
/* */
/* {% block page_title __('Fill the database with Dummy Content') %}*/
/* */
/* {% block page_main %}*/
/*     {% import '_macro/_macro.twig' as macro %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <form method="post" id="prefill" class="form-horizontal"{{ macro.attr({_bind: ['prefill']}) }}>*/
/*                 <div id="form">*/
/*                     <div class="control-group">*/
/*                         <div class="info">*/
/*                             {{ app.translator.trans('prefill.short_help', {}, 'infos')|raw }}*/
/*                         </div>*/
/* */
/*                         <div id="form_contenttypes" style="border-bottom: 1px solid #eee; margin-bottom: 10px; width: 50%">*/
/*                             {% for key,ctype in context.contenttypes %}*/
/*                                 <div>*/
/*                                     <label>*/
/*                                         <input type="checkbox"*/
/*                                                id="form_contenttypes_{{ loop.index0 }}"*/
/*                                                name="form[contenttypes][]"*/
/*                                                value="{{ key }}">{{ ctype }}*/
/*                                     </label>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {{ form_widget(context.form._token) }}*/
/* */
/*                 <div style="margin-top: 12px">*/
/*                     <button type="button" class="btn btn-xs" id="check-all"><i class="fa fa-fw fa-check-square-o"></i> {{ __('Select all') }}</button>*/
/*                     <button type="button" class="btn btn-xs" id="uncheck-all"><i class="fa fa-fw fa-square-o"></i> {{ __('Deselect all') }}</button>*/
/*                 </div>*/
/*                 <div style="margin-top: 12px">*/
/*                     <button type="submit" class="btn btn-primary"><i class="fa fa-wrench"></i> {{ __('Prefill database') }}</button>*/
/*                 </div>*/
/* */
/*             </form>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
