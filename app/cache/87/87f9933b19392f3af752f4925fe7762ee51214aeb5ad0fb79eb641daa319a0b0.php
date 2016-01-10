<?php

/* _header.twig */
class __TwigTemplate_ac99ae79b05d6727d96b54bd67cee672c640700d7c18ee1b66f4114d9ab99baf extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmlLang(), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 9
        echo "    <title>
        ";
        // line 10
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
        ";
        // line 12
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 13
        echo "    </title>

    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono|VT323' rel='stylesheet' type='text/css'>

    ";
        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/foundation.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/app.css\">
    ";
        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/magnific-popup.css\">


    ";
        // line 27
        echo "
</head>
<body>

<div class=\"row\">
    <header>

        <!-- Header bar -->
        <div class=\"headerphoto\">

            ";
        // line 40
        echo "            ";
        $context["headerimage"] = (($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/") . twig_random($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "headerimage", array())));
        // line 41
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["headerimage"]) ? $context["headerimage"] : null), "html", null, true);
        echo " \" alt=\"\" />

            ";
        // line 44
        echo "            <p><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</span>
                ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method")) {
            // line 46
            echo "                    <br><small>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
            echo "</small>
                ";
        }
        // line 48
        echo "            </p>
        </div>

        <nav class=\"top-bar\" data-topbar>
            <ul class=\"title-area\">
<!--                 <li class=\"name\"><h1><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</a></h1></li>
 -->                <li class=\"toggle-topbar menu-icon\"><a href=\"#\">≡ menu</a></li>
            </ul>

            <section id='menu' class=\"top-bar-section\">
                <!-- Right Nav Section -->
                <ul class=\"left\">
                    ";
        // line 61
        echo "                    ";
        echo $this->env->getExtension('Bolt')->menu($this->env, "main", "_sub_menu.twig");
        echo "
<!-- 
                    ";
        // line 64
        echo "                    ";
        $this->loadTemplate("_sub_searchbox.twig", "_header.twig", 64)->display($context);
        echo " -->
                </ul>
            </section>
        </nav>


        <!-- End header -->

    </header>
</div>



<div class=\"row\">
    <div class=\"container large-12 columns\">
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 64,  123 => 61,  111 => 53,  104 => 48,  98 => 46,  96 => 45,  91 => 44,  85 => 41,  82 => 40,  70 => 27,  63 => 23,  59 => 20,  54 => 19,  48 => 13,  43 => 12,  38 => 11,  33 => 10,  30 => 9,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="no-js" lang="{{ htmllang() }}">*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*     {# make sure we always display a proper title: The record's title if there is one, appended with the*/
/*        sitename. If there is no title, we append the sitename with the payoff, if there is one. #}*/
/*     <title>*/
/*         {% if record.title is defined %}{{ record.title|striptags }} | {% endif %}*/
/*             {{ app.config.get('general/sitename') }}*/
/*         {% if record.title is not defined and app.config.get('general/payoff') %} | {{ app.config.get('general/payoff') }}{% endif %}*/
/*     </title>*/
/* */
/*     <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono|VT323' rel='stylesheet' type='text/css'>*/
/* */
/*     {# paths.theme is always a correct path to the current theme. Even if you rename the theme-folder,*/
/*        this will keep working. See the documentation on paths: http://docs.bolt.cm/internals#paths #}*/
/*     <link rel="stylesheet" href="{{ paths.theme }}css/foundation.css">*/
/*     <link rel="stylesheet" href="{{ paths.theme }}css/app.css">*/
/*     {# Bolt comes with Magnific Popup, as it's used in the backend. We can use it here, or you can*/
/*       just swap it out for the image-viewing script of your choice. Or delete it altogether. #}*/
/*     <link rel="stylesheet" href="{{ paths.theme }}css/magnific-popup.css">*/
/* */
/* */
/*     {#<!-- A variable from the theme's config: {{ theme.foo }} -->#}*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <div class="row">*/
/*     <header>*/
/* */
/*         <!-- Header bar -->*/
/*         <div class="headerphoto">*/
/* */
/*             {# You can either hardcode the filename for the header, or take a value from the current*/
/*                content in 'record', or - as we do in this example - take a random one from the list*/
/*                in the /theme/base-2014/config.yml file. #}*/
/*             {% set headerimage = paths.theme ~ 'images/' ~ random(theme.headerimage) %}*/
/*             <img src="{{ headerimage }} " alt="" />*/
/* */
/*             {# the values in the 'app.config' object are taken directly from the file app/config/config.yml #}*/
/*             <p><span>{{ app.config.get('general/sitename') }}</span>*/
/*                 {% if app.config.get('general/payoff') %}*/
/*                     <br><small>{{ app.config.get('general/payoff') }}</small>*/
/*                 {% endif %}*/
/*             </p>*/
/*         </div>*/
/* */
/*         <nav class="top-bar" data-topbar>*/
/*             <ul class="title-area">*/
/* <!--                 <li class="name"><h1><a href="{{ paths.root }}">{{ app.config.get('general/sitename') }}</a></h1></li>*/
/*  -->                <li class="toggle-topbar menu-icon"><a href="#">≡ menu</a></li>*/
/*             </ul>*/
/* */
/*             <section id='menu' class="top-bar-section">*/
/*                 <!-- Right Nav Section -->*/
/*                 <ul class="left">*/
/*                     {# Include the menu, as defined in config/menu.yml. Note that this theme comes with it's own _sub_menu.twig. If this file wasn't included in the current theme, the default menu template in app/theme_defaults/_sub_menu.twig would be used. #}*/
/*                     {{ menu('main', '_sub_menu.twig') }}*/
/* <!-- */
/*                     {# Include the '_sub_searchbox.twig' template, for the searchbox. If this file wasn't included in the theme, the default searchbox template in app/theme_defaults/_sub_searchbox.twig would be used. #}*/
/*                     {% include '_sub_searchbox.twig' %} -->*/
/*                 </ul>*/
/*             </section>*/
/*         </nav>*/
/* */
/* */
/*         <!-- End header -->*/
/* */
/*     </header>*/
/* </div>*/
/* */
/* */
/* */
/* <div class="row">*/
/*     <div class="container large-12 columns">*/
/* */
