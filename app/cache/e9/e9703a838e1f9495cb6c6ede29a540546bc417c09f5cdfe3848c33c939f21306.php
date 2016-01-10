<?php

/* listing.twig */
class __TwigTemplate_d86542ab3ec7037f5909d5811335faea90630f12ab53c27fe04c391d8cea55bd extends Twig_Template
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
        $this->loadTemplate("_header.twig", "listing.twig", 1)->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

    <!-- Main Blog Content -->
    <div class=\"large-8 columns\" role=\"content\">

        ";
        // line 13
        echo "
        ";
        // line 15
        echo "        ";
        if (array_key_exists("taxonomytype", $context)) {
            // line 16
            echo "            <h1>
                ";
            // line 17
            echo $this->env->getExtension('Bolt')->trans("Overview for");
            echo "
                ";
            // line 18
            if ($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array(), "any", false, true), (isset($context["slug"]) ? $context["slug"] : null), array(), "array", true, true)) {
                // line 19
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()), (isset($context["slug"]) ? $context["slug"] : null), array(), "array"), "html", null, true);
                echo "
                ";
            } else {
                // line 21
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo "
                ";
            }
            // line 23
            echo "            </h1>
            ";
            // line 25
            echo "            ";
            if ( !$this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array())) {
                // line 26
                echo "                ";
                // line 27
                echo "                ";
                $context["records"] = $this->env->getExtension('Bolt')->order((isset($context["records"]) ? $context["records"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_sort"), "method"));
                // line 28
                echo "            ";
            }
            // line 29
            echo "        ";
        }
        // line 30
        echo "
        ";
        // line 35
        echo "        ";
        if (array_key_exists("search", $context)) {
            // line 36
            echo "            <h1>
                ";
            // line 37
            echo $this->env->getExtension('Bolt')->trans("Search results for <b> %search% </b>.", array("%search%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
            echo "
            </h1>
        ";
        }
        // line 40
        echo "

        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 43
            echo "            <article>

                <h2><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</a></h2>

                ";
            // line 47
            if (($this->getAttribute($context["record"], "image", array()) != "")) {
                // line 48
                echo "                    <div class=\"large-4 imageholder\">
                        <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["record"], "image", array())), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["record"], "image", array()), 400, 260), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 54
            echo "
                ";
            // line 56
            echo "                ";
            if ($this->getAttribute($context["record"], "introduction", array())) {
                // line 57
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "introduction", array()), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute(            // line 58
$context["record"], "teaser", array())) {
                // line 59
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "teaser", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 61
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 300), "method"), "html", null, true);
                echo "</p>
                ";
            }
            // line 63
            echo "
                ";
            // line 64
            $this->loadTemplate("_recordfooter.twig", "listing.twig", 64)->display(array_merge($context, array("record" => $context["record"])));
            // line 65
            echo "
            </article>

            <hr>

        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 71
            echo "            <article>


                ";
            // line 74
            if (array_key_exists("search", $context)) {
                // line 75
                echo "
                    <p>
                        ";
                // line 77
                echo $this->env->getExtension('Bolt')->trans("No results found for '%search%'. Please try another search.", array("%search%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
                echo "
                    </p>

                ";
            } else {
                // line 81
                echo "
                    <h2>";
                // line 82
                echo $this->env->getExtension('Bolt')->trans("No content found.");
                echo "</h2>

                    <p>
                        ";
                // line 85
                echo $this->env->getExtension('Bolt')->trans("Unfortunately, no content could be found. Try another page, or go to the <a href=\"%paths_root%\">homepage</a>.", array("%paths_root%" => $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array())));
                echo "
                    </p>

                ";
            }
            // line 89
            echo "
                ";
            // line 94
            echo "
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
        ";
        // line 99
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


    </div>

    <!-- End Main Content -->

    ";
        // line 106
        $this->loadTemplate("_aside.twig", "listing.twig", 106)->display($context);
        // line 107
        echo "
<!-- End Main Content and Sidebar -->



";
        // line 112
        $this->loadTemplate("_footer.twig", "listing.twig", 112)->display($context);
    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 112,  246 => 107,  244 => 106,  233 => 99,  230 => 97,  222 => 94,  219 => 89,  212 => 85,  206 => 82,  203 => 81,  196 => 77,  192 => 75,  190 => 74,  185 => 71,  167 => 65,  165 => 64,  162 => 63,  156 => 61,  150 => 59,  148 => 58,  143 => 57,  140 => 56,  137 => 54,  130 => 50,  126 => 49,  123 => 48,  121 => 47,  114 => 45,  110 => 43,  92 => 42,  88 => 40,  82 => 37,  79 => 36,  76 => 35,  73 => 30,  70 => 29,  67 => 28,  64 => 27,  62 => 26,  59 => 25,  56 => 23,  50 => 21,  44 => 19,  42 => 18,  38 => 17,  35 => 16,  32 => 15,  29 => 13,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* <!-- Main Page Content and Sidebar -->*/
/* */
/*     <!-- Main Blog Content -->*/
/*     <div class="large-8 columns" role="content">*/
/* */
/*         {# This template is used for 'listings': Generic pages that list a number of*/
/*            records from a certain contenttype. These records are available as an array*/
/*            called 'records'. In the for-loop below, we iterate over the records that*/
/*            are on this page. It can be used for overview pages like 'all entries', or*/
/*            'all records tagged with kittens' as well as search result. #}*/
/* */
/*         {# if used for listing a taxonomy: #}*/
/*         {% if taxonomytype is defined %}*/
/*             <h1>*/
/*                 {{ __('Overview for') }}*/
/*                 {% if taxonomy.options[slug] is defined %}*/
/*                     {{ taxonomy.options[slug] }}*/
/*                 {% else %}*/
/*                     {{ slug }}*/
/*                 {% endif %}*/
/*             </h1>*/
/*             {# taxonomies are fetched unordered by design except if has_sortorder set true. #}*/
/*             {%  if (not taxonomy.has_sortorder) %}*/
/*                 {# If we specified an order in config.yml, sort them here: #}*/
/*                 {% set records = records|order(app.config.get('general/listing_sort')) %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {# This is also the default template for searchresults. If 'search' is defined,*/
/*            we display an appropriate title. The 'records' array contains all of the*/
/*            records matching the current query. If there are no results, the*/
/*            code in the 'else' part of the for-loop is used. #}*/
/*         {% if search is defined %}*/
/*             <h1>*/
/*                 {{ __('Search results for <b> %search% </b>.', { '%search%': search|escape }) }}*/
/*             </h1>*/
/*         {% endif %}*/
/* */
/* */
/*         {% for record in records %}*/
/*             <article>*/
/* */
/*                 <h2><a href="{{ record.link }}">{{ record.title }}</a></h2>*/
/* */
/*                 {% if record.image!="" %}*/
/*                     <div class="large-4 imageholder">*/
/*                         <a href="{{ image(record.image) }}">*/
/*                             <img src="{{ thumbnail(record.image, 400, 260) }}">*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {# display something introduction-like.. #}*/
/*                 {% if record.introduction %}*/
/*                     {{ record.introduction }}*/
/*                 {% elseif record.teaser %}*/
/*                     {{ record.teaser }}*/
/*                 {% else %}*/
/*                     <p>{{ record.excerpt(300) }}</p>*/
/*                 {% endif %}*/
/* */
/*                 {% include '_recordfooter.twig' with {'record': record} %}*/
/* */
/*             </article>*/
/* */
/*             <hr>*/
/* */
/*         {% else %}*/
/*             <article>*/
/* */
/* */
/*                 {% if search is defined %}*/
/* */
/*                     <p>*/
/*                         {{ __("No results found for '%search%'. Please try another search.", { '%search%': search|escape }) }}*/
/*                     </p>*/
/* */
/*                 {% else %}*/
/* */
/*                     <h2>{{ __("No content found.") }}</h2>*/
/* */
/*                     <p>*/
/*                         {{ __("Unfortunately, no content could be found. Try another page, or go to the <a href=\"%paths_root%\">homepage</a>.", {'%paths_root%': paths.root} ) }}*/
/*                     </p>*/
/* */
/*                 {% endif %}*/
/* */
/*                 {#*/
/*                 optionally, you can redirect the browser to another page. Just uncomment the next line to do so.*/
/*                 {{ redirect('/') }}*/
/*                 #}*/
/* */
/*             </article>*/
/*         {% endfor %}*/
/* */
/*         {# If there are more records than will fit on one page, the pager is shown. #}*/
/*         {{ pager() }}*/
/* */
/* */
/*     </div>*/
/* */
/*     <!-- End Main Content -->*/
/* */
/*     {% include '_aside.twig' %}*/
/* */
/* <!-- End Main Content and Sidebar -->*/
/* */
/* */
/* */
/* {% include '_footer.twig' %}*/
/* */
