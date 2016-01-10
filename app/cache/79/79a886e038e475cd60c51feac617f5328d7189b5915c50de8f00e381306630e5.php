<?php

/* login/login.twig */
class __TwigTemplate_e568483e9208504902f1978d278f5dd23ad9f0b2db91eab0fb06a979d1cbe829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("_base/_page-no_nav.twig", "login/login.twig", 2);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-no_nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["form_class"] = "login-block center-block";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("page.login.title");
    }

    // line 8
    public function block_page_main($context, array $blocks = array())
    {
        // line 9
        echo "
    <form method=\"post\" role=\"form\" class=\"submitspinner\">

        <div class=\"form-group\">
            <label for=\"username\" class=\"control-label\">";
        // line 13
        echo $this->env->getExtension('Bolt')->trans("page.login.label.username");
        echo "</label>
            <div class=\"input-group\">
                <label for=\"username\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-user\"></i></label>
                <input id=\"username\" class=\"form-control\" type=\"text\" autofocus name=\"username\" placeholder=\"";
        // line 16
        echo $this->env->getExtension('Bolt')->trans("page.login.placeholder.password");
        echo " …\" ";
        if (array_key_exists("username", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
            echo "\"";
        }
        echo " required>
            </div>
        </div>

        <div class=\"form-group password-group\">
            <label for=\"password\" class=\"control-label\">
                ";
        // line 22
        echo $this->env->getExtension('Bolt')->trans("page.login.label.password");
        echo " &nbsp;
                <span class=\"togglepass show-password\"><i class=\"fa fa-fw fa-eye\"></i> ";
        // line 23
        echo $this->env->getExtension('Bolt')->trans("page.login.password-show");
        echo "</span>
                <span class=\"togglepass hide-password\"><i class=\"fa fa-fw fa-eye-slash\"></i> ";
        // line 24
        echo $this->env->getExtension('Bolt')->trans("page.login.password-hide");
        echo "</span>
            </label>
            <div class=\"input-group\">
                <label for=\"password\" class=\"input-group-addon\"><i class=\"fa fa-fw fa-key\"></i></label>
                <input id=\"password\" class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"";
        // line 28
        echo $this->env->getExtension('Bolt')->trans("users.your-password");
        echo " …\">
            </div>
        </div>

        <p class=\"login-group\">
            <button type=\"submit\" class=\"btn btn-primary\" name=\"action\" value=\"login\">
                <i class=\"fa fa-sign-in fa-fw\"></i> ";
        // line 34
        echo $this->env->getExtension('Bolt')->trans("page.login.button.log-on");
        echo "
            </button>
            <button type=\"button\" class=\"btn btn-link login-forgot\"> ";
        // line 36
        echo $this->env->getExtension('Bolt')->trans("page.login.button.forgot-password");
        echo "</button>
        </p>
        <p style=\"display: none;\" class=\"reset-group\">
            <button type=\"submit\" class=\"btn btn-primary\" name=\"action\" value=\"reset\"><i class=\"fa fa-envelope-o\"></i> ";
        // line 39
        echo $this->env->getExtension('Bolt')->trans("page.login.button.reset-password");
        echo "</button>
            <button type=\"button\" class=\"btn btn-link login-remembered\"> ";
        // line 40
        echo $this->env->getExtension('Bolt')->trans("page.login.button.back");
        echo "</button>
        </p>

        <p class=\"cookie-notice alert alert-danger\">
            ";
        // line 44
        echo $this->env->getExtension('Bolt')->trans("page.login.cookies-required");
        echo "
        </p>

    </form>

";
    }

    public function getTemplateName()
    {
        return "login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  107 => 40,  103 => 39,  97 => 36,  92 => 34,  83 => 28,  76 => 24,  72 => 23,  68 => 22,  53 => 16,  47 => 13,  41 => 9,  38 => 8,  32 => 6,  28 => 2,  26 => 4,  11 => 2,);
    }
}
/* {# Page: Login #}*/
/* {% extends '_base/_page-no_nav.twig' %}*/
/* */
/* {% set form_class = 'login-block center-block' %}*/
/* */
/* {% block page_title __('page.login.title') %}*/
/* */
/* {% block page_main %}*/
/* */
/*     <form method="post" role="form" class="submitspinner">*/
/* */
/*         <div class="form-group">*/
/*             <label for="username" class="control-label">{{ __('page.login.label.username') }}</label>*/
/*             <div class="input-group">*/
/*                 <label for="username" class="input-group-addon"><i class="fa fa-fw fa-user"></i></label>*/
/*                 <input id="username" class="form-control" type="text" autofocus name="username" placeholder="{{ __('page.login.placeholder.password') }} …" {% if username is defined %}value="{{ username }}"{% endif %} required>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group password-group">*/
/*             <label for="password" class="control-label">*/
/*                 {{ __('page.login.label.password') }} &nbsp;*/
/*                 <span class="togglepass show-password"><i class="fa fa-fw fa-eye"></i> {{ __('page.login.password-show') }}</span>*/
/*                 <span class="togglepass hide-password"><i class="fa fa-fw fa-eye-slash"></i> {{ __('page.login.password-hide') }}</span>*/
/*             </label>*/
/*             <div class="input-group">*/
/*                 <label for="password" class="input-group-addon"><i class="fa fa-fw fa-key"></i></label>*/
/*                 <input id="password" class="form-control" type="password" name="password" placeholder="{{ __('users.your-password') }} …">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <p class="login-group">*/
/*             <button type="submit" class="btn btn-primary" name="action" value="login">*/
/*                 <i class="fa fa-sign-in fa-fw"></i> {{ __('page.login.button.log-on') }}*/
/*             </button>*/
/*             <button type="button" class="btn btn-link login-forgot"> {{ __('page.login.button.forgot-password') }}</button>*/
/*         </p>*/
/*         <p style="display: none;" class="reset-group">*/
/*             <button type="submit" class="btn btn-primary" name="action" value="reset"><i class="fa fa-envelope-o"></i> {{ __('page.login.button.reset-password') }}</button>*/
/*             <button type="button" class="btn btn-link login-remembered"> {{ __('page.login.button.back') }}</button>*/
/*         </p>*/
/* */
/*         <p class="cookie-notice alert alert-danger">*/
/*             {{ __('page.login.cookies-required') }}*/
/*         </p>*/
/* */
/*     </form>*/
/* */
/* {% endblock page_main %}*/
/* */
