<?php

/* themes/bootstrap-8.x-3.16/bootstrap/templates/menu/menu--main.html.twig */
class __TwigTemplate_8c17e5959e9d400bf5674200219f3e01efaa3813ae9c277c0695fc5e941b910a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("menu.html.twig", "themes/bootstrap-8.x-3.16/bootstrap/templates/menu/menu--main.html.twig", 20);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 22);
        $filters = array("clean_class" => 24);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 22
        $context["classes"] = array(0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 24
($context["menu_name"] ?? null))), 2 => "nav", 3 => "navbar-nav");
        // line 20
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/bootstrap-8.x-3.16/bootstrap/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  49 => 24,  48 => 22,  11 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap-8.x-3.16/bootstrap/templates/menu/menu--main.html.twig", "/data/sites/web/yannisdejonghebe/subsites/drupal.yannisdejonghe.be/themes/bootstrap-8.x-3.16/bootstrap/templates/menu/menu--main.html.twig");
    }
}
