<?php

/* nav/_secondary-configuration.twig */
class __TwigTemplate_4c4dea453e5b3d8d0d136b1acb4dadc6fa2c57b381eeea8604ffe06d1c17d296 extends Twig_Template
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
        $context["sub"] = array(0 => array("icon" => "fa:group", "label" => $this->env->getExtension('Bolt')->trans("Users & Permissions"), "link" => $this->env->getExtension('routing')->getPath("users"), "isallowed" => "users"), 1 => array("icon" => "fa:cog", "label" => $this->env->getExtension('Bolt')->trans("Main configuration"), "link" => $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => "config", "file" => "config.yml")), "isallowed" => "files:config"), 2 => array("icon" => "fa:paint-brush", "label" => $this->env->getExtension('Bolt')->trans("Contenttypes"), "link" => $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => "config", "file" => "contenttypes.yml")), "isallowed" => "files:config"), 3 => array("icon" => "fa:tags", "label" => $this->env->getExtension('Bolt')->trans("Taxonomy"), "link" => $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => "config", "file" => "taxonomy.yml")), "isallowed" => "files:config"), 4 => "-", 5 => array("icon" => "fa:list", "label" => $this->env->getExtension('Bolt')->trans("Menu setup"), "link" => $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => "config", "file" => "menu.yml")), "isallowed" => "files:config"), 6 => array("icon" => "fa:random", "label" => $this->env->getExtension('Bolt')->trans("menu.configuration.routing"), "link" => $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => "config", "file" => "routing.yml")), "isallowed" => "files:config"), 7 => "-", 8 => array("icon" => "fa:database", "label" => $this->env->getExtension('Bolt')->trans("Check database"), "link" => $this->env->getExtension('routing')->getPath("dbcheck"), "isallowed" => "dbupdate"), 9 => array("icon" => "fa:eraser", "label" => $this->env->getExtension('Bolt')->trans("Clear the cache"), "link" => $this->env->getExtension('routing')->getPath("clearcache"), "isallowed" => "clearcache"), 10 => array("icon" => "fa:archive", "label" => $this->env->getExtension('Bolt')->trans("logs.change-log"), "link" => $this->env->getExtension('routing')->getPath("changelog"), "isallowed" => "changelog"), 11 => array("icon" => "fa:archive", "label" => $this->env->getExtension('Bolt')->trans("logs.system-log"), "link" => $this->env->getExtension('routing')->getPath("systemlog"), "isallowed" => "systemlog"));
        // line 58
        echo "
";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:cogs", 1 => $this->env->getExtension('Bolt')->trans("Configuration"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/Configuration")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-configuration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 59,  21 => 58,  19 => 1,);
    }
}
/* {% set sub = [*/
/*     {*/
/*         icon: 'fa:group',*/
/*         label: __('Users & Permissions'),*/
/*         link: path('users'),*/
/*         isallowed: 'users'*/
/*     }, {*/
/*         icon: 'fa:cog',*/
/*         label: __('Main configuration'),*/
/*         link: path('fileedit', {'namespace': 'config', 'file': 'config.yml'}),*/
/*         isallowed: 'files:config'*/
/*     }, {*/
/*         icon: 'fa:paint-brush',*/
/*         label: __('Contenttypes'),*/
/*         link: path('fileedit', {'namespace': 'config', 'file': 'contenttypes.yml'}),*/
/*         isallowed: 'files:config'*/
/*     }, {*/
/*         icon: 'fa:tags',*/
/*         label: __('Taxonomy'),*/
/*         link: path('fileedit', {'namespace': 'config', 'file': 'taxonomy.yml'}),*/
/*         isallowed: 'files:config'*/
/*     },*/
/*     '-',*/
/*     {*/
/*         icon: 'fa:list',*/
/*         label: __('Menu setup'),*/
/*         link: path('fileedit', {'namespace': 'config', 'file': 'menu.yml'}),*/
/*         isallowed: 'files:config'*/
/*     }, {*/
/*         icon: 'fa:random',*/
/*         label: __('menu.configuration.routing'),*/
/*         link: path('fileedit', {'namespace': 'config', 'file': 'routing.yml'}),*/
/*         isallowed: 'files:config'*/
/*     },*/
/*     '-',*/
/*     {*/
/*         icon: 'fa:database',*/
/*         label: __('Check database'),*/
/*         link: path('dbcheck'),*/
/*         isallowed: 'dbupdate'*/
/*     }, {*/
/*         icon: 'fa:eraser',*/
/*         label: __('Clear the cache'),*/
/*         link: path('clearcache'),*/
/*         isallowed: 'clearcache'*/
/*     }, {*/
/*         icon: 'fa:archive',*/
/*         label: __('logs.change-log'),*/
/*         link: path('changelog'),*/
/*         isallowed: 'changelog'*/
/*     }, {*/
/*         icon: 'fa:archive',*/
/*         label: __('logs.system-log'),*/
/*         link: path('systemlog'),*/
/*         isallowed: 'systemlog'*/
/*     }*/
/* ] %}*/
/* */
/* {{ nav.submenu('fa:cogs', __('Configuration'), sub, (page_nav == 'Settings/Configuration')) }}*/
/* */
