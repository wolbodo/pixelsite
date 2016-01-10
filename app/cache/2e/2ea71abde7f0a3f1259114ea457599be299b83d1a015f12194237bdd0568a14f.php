<?php

/* index.twig */
class __TwigTemplate_c592b2094e1c3ee2fe1c3ee51445ea164a888a3db0c780de2e1d87561b764850 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "index.twig", 1)->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    <div class=\"large-8 columns\">

        <article>
            ";
        // line 9
        if (array_key_exists("record", $context)) {
            // line 10
            echo "
                ";
            // line 13
            echo "                ";
            $context["home"] = (isset($context["record"]) ? $context["record"] : null);
            // line 14
            echo "                ";
            if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "title", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "title", array())))) {
                // line 15
                echo "                    <h1>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "title", array()), "html", null, true);
                echo "</h1>
                ";
            }
            // line 17
            echo "
                ";
            // line 18
            if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image", array())))) {
                // line 19
                echo "                    <div class=\"large-5 columns imageholder\">
                        <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image", array())), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image", array()), 696, 400), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 25
            echo "
                ";
            // line 27
            echo "                ";
            if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "introduction", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "introduction", array())))) {
                // line 28
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "introduction", array()), "html", null, true);
                echo "
                ";
            } elseif (($this->getAttribute(            // line 29
(isset($context["home"]) ? $context["home"] : null), "teaser", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "teaser", array())))) {
                // line 30
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "teaser", array()), "html", null, true);
                echo "
                ";
            } elseif ( !twig_test_empty(            // line 31
(isset($context["home"]) ? $context["home"] : null))) {
                // line 32
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "excerpt", array(0 => 500), "method"), "html", null, true);
                echo "</p>
                ";
            }
            // line 34
            echo "
                ";
            // line 35
            if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "link", array())))) {
                // line 36
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "link", array()), "html", null, true);
                echo "\">Read more &raquo;</a>
                ";
            }
            // line 38
            echo "
                ";
            // line 41
            echo "
            ";
        } else {
            // line 43
            echo "                <p>
                    ";
            // line 44
            echo $this->env->getExtension('Bolt')->trans("Content for home not found!");
            echo "
                    ";
            // line 45
            echo $this->env->getExtension('Bolt')->trans("You should set 'homepage:' in your 'app/config/config.yml' to an existing record. Make sure that the content is published, otherwise it will not be shown.");
            echo "
                </p>
            ";
        }
        // line 48
        echo "        </article>

        <hr>

        <h4>";
        // line 52
        echo $this->env->getExtension('Bolt')->trans("Latest entries");
        echo "</h4>

        ";
        // line 58
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("entries/latest/6", array("paging" => true) );
        // line 59
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 60
            echo "            <article>

                ";
            // line 62
            if (($this->getAttribute($context["record"], "image", array()) != "")) {
                // line 63
                echo "                    <div class=\"large-4 imageholder\">
                        <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["record"], "image", array())), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["record"], "image", array()), 400, 260), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 69
            echo "
                <h3><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</a></h3>

                <p>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 220), "method"), "html", null, true);
            echo "</p>

            </article>

            <hr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
        ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


    </div>

    <!-- End Main Content -->
    ";
        // line 88
        echo "    ";
        $this->loadTemplate("_aside.twig", "index.twig", 88)->display($context);
        // line 89
        echo "
<!-- End Main Content and Sidebar -->



";
        // line 94
        $this->loadTemplate("_footer.twig", "index.twig", 94)->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 94,  201 => 89,  198 => 88,  189 => 80,  186 => 79,  173 => 72,  166 => 70,  163 => 69,  156 => 65,  152 => 64,  149 => 63,  147 => 62,  143 => 60,  138 => 59,  134 => 58,  129 => 52,  123 => 48,  117 => 45,  113 => 44,  110 => 43,  106 => 41,  103 => 38,  97 => 36,  95 => 35,  92 => 34,  86 => 32,  84 => 31,  79 => 30,  77 => 29,  72 => 28,  69 => 27,  66 => 25,  59 => 21,  55 => 20,  52 => 19,  50 => 18,  47 => 17,  41 => 15,  38 => 14,  35 => 13,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <!-- Main Page Content and Sidebar -->*/
/* */
/*     <!-- Main Blog Content -->*/
/*     <div class="large-8 columns">*/
/* */
/*         <article>*/
/*             {% if record is defined %}*/
/* */
/*                 {# make the 'home' variable refer to the current record, which is set by the*/
/*                    user in config.yml #}*/
/*                 {% set home = record %}*/
/*                 {% if home.title is defined and home.title is not empty %}*/
/*                     <h1>{{ home.title }}</h1>*/
/*                 {% endif %}*/
/* */
/*                 {% if home.image is defined and home.image is not empty %}*/
/*                     <div class="large-5 columns imageholder">*/
/*                         <a href="{{ image(home.image) }}">*/
/*                             <img src="{{ thumbnail(home.image, 696, 400) }}">*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {# display something introduction-like.. #}*/
/*                 {% if home.introduction is defined and home.introduction is not empty %}*/
/*                     {{ home.introduction }}*/
/*                 {% elseif home.teaser is defined and home.teaser is not empty %}*/
/*                     {{ home.teaser }}*/
/*                 {% elseif home is not empty %}*/
/*                     <p>{{ home.excerpt(500) }}</p>*/
/*                 {% endif %}*/
/* */
/*                 {% if home.link is defined and home.link is not empty %}*/
/*                     <a href="{{ home.link }}">Read more &raquo;</a>*/
/*                 {% endif %}*/
/* */
/*                 {# Tip: If you're curious what all of the available fields of this*/
/*                    record contain, just use {{ print(home) }}, to print it all. #}*/
/* */
/*             {% else %}*/
/*                 <p>*/
/*                     {{ __('Content for home not found!') }}*/
/*                     {{ __("You should set 'homepage:' in your 'app/config/config.yml' to an existing record. Make sure that the content is published, otherwise it will not be shown.") }}*/
/*                 </p>*/
/*             {% endif %}*/
/*         </article>*/
/* */
/*         <hr>*/
/* */
/*         <h4>{{ __('Latest entries') }}</h4>*/
/* */
/*         {# Here we use 'setcontent' to set the variable 'records' to "entries/latest/6",*/
/*            which is shorthand for "the 6 latest records in Entries. Note that we are*/
/*            requesting multiple entries, so 'records' will be an array containing each*/
/*            of the entries. That's why we use the 'for' loop to iterate over them all. #}*/
/*         {% setcontent records = "entries/latest/6" allowpaging %}*/
/*         {% for record in records %}*/
/*             <article>*/
/* */
/*                 {% if record.image!="" %}*/
/*                     <div class="large-4 imageholder">*/
/*                         <a href="{{ image(record.image) }}">*/
/*                             <img src="{{ thumbnail(record.image, 400, 260) }}">*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <h3><a href="{{ record.link }}">{{ record.title }}</a></h3>*/
/* */
/*                 <p>{{ record.excerpt(220) }}</p>*/
/* */
/*             </article>*/
/* */
/*             <hr>*/
/* */
/*         {% endfor %}*/
/* */
/*         {{ pager() }}*/
/* */
/* */
/*     </div>*/
/* */
/*     <!-- End Main Content -->*/
/*     {# include the sidebar. The include tag can be used to break up your templates in logical parts,*/
/*        and re-use them across different templates/pages. #}*/
/*     {% include '_aside.twig' %}*/
/* */
/* <!-- End Main Content and Sidebar -->*/
/* */
/* */
/* */
/* {% include '_footer.twig' %}*/
/* */
