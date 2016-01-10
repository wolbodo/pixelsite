<?php

/* _footer.twig */
class __TwigTemplate_943407a0a5eb6b00f5b62d059d73e1366f6434292b13f12b3cfb24c9733723de extends Twig_Template
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
        echo "
<!-- Footer -->
        <footer class=\"large-12 columns\">
            <hr />
            <div class=\"large-6 columns\">
                <p>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.", array("%url%" => "http://bolt.cm"));
        echo "
                </p>
            </div>
            <div class=\"large-6 columns\">
                <ul class=\"inline-list\">
                    ";
        // line 11
        echo $this->env->getExtension('Bolt')->menu($this->env);
        echo "
                </ul>
            </div>
        </footer>
    </div>
</div>

    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/jquery-2.1.0.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/foundation.min.js\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/modernizr.js\"></script>

    ";
        // line 24
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/jquery.magnific-popup.min.js\"></script>

    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/app.js\" async defer></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  57 => 24,  52 => 20,  48 => 19,  44 => 18,  34 => 11,  26 => 6,  19 => 1,);
    }
}
/* */
/* <!-- Footer -->*/
/*         <footer class="large-12 columns">*/
/*             <hr />*/
/*             <div class="large-6 columns">*/
/*                 <p>{{ __("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.",{'%url%':'http://bolt.cm'}) }}*/
/*                 </p>*/
/*             </div>*/
/*             <div class="large-6 columns">*/
/*                 <ul class="inline-list">*/
/*                     {{ menu() }}*/
/*                 </ul>*/
/*             </div>*/
/*         </footer>*/
/*     </div>*/
/* </div>*/
/* */
/*     <script src="{{ paths.theme }}javascripts/jquery-2.1.0.min.js"></script>*/
/*     <script src="{{ paths.theme }}javascripts/foundation.min.js"></script>*/
/*     <script src="{{ paths.theme }}javascripts/modernizr.js"></script>*/
/* */
/*     {# Bolt comes with Magnific Popup, as it's used in the backend. We can use it here, or you can*/
/*        just swap it out for the image-viewing script of your choice. Or delete it altogether. #}*/
/*     <script src="{{ paths.theme }}javascripts/jquery.magnific-popup.min.js"></script>*/
/* */
/*     <script src="{{ paths.theme }}javascripts/app.js" async defer></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
