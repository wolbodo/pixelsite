<?php

/* editcontent/_aside-delete.twig */
class __TwigTemplate_8b253303bd08f2fe7d7396e8ca302126fd719cf3f2128675e6b9d2fd0f07432b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("editcontent.delete", $this->env->getExtension('Bolt')->trans("Are you sure you wish to delete this record? There is no undo.")), "html", null, true);
        echo "

<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-silent-danger\" id=\"sidebardeletebutton\">
        <i class=\"fa fa-trash\"></i> ";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </button>

</div>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  19 => 1,);
    }
}
/* {{ data('editcontent.delete', __('Are you sure you wish to delete this record? There is no undo.')) }}*/
/* */
/* <div class="btn-group">*/
/*     <button type="button" class="btn btn-silent-danger" id="sidebardeletebutton">*/
/*         <i class="fa fa-trash"></i> {{ __('contenttypes.generic.delete', {'%contenttype%': context.contenttype.slug}) }}*/
/*     </button>*/
/* */
/* </div>*/
/* */
