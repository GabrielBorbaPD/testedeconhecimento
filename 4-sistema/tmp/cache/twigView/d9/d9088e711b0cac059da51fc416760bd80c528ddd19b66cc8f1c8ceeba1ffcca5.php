<?php

/* C:\xampp\htdocs\testedeconhecimento\4-sistema\vendor\cakephp\bake\src\Template\Bake\Layout\default.twig */
class __TwigTemplate_04f47f70726c1e04c69f5c2aeeafe98a6ab580c3d951424ff9e521e256bb5bed extends Twig_Template
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
        $__internal_ac42ac6c9c0acb0ac4811dc3b08a3876306c03936f12e896581c11882df5f3a0 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_ac42ac6c9c0acb0ac4811dc3b08a3876306c03936f12e896581c11882df5f3a0->enter($__internal_ac42ac6c9c0acb0ac4811dc3b08a3876306c03936f12e896581c11882df5f3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\testedeconhecimento\\4-sistema\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig"));

        // line 16
        echo $this->getAttribute(($context["_view"] ?? null), "fetch", array(0 => "content"), "method");
        
        $__internal_ac42ac6c9c0acb0ac4811dc3b08a3876306c03936f12e896581c11882df5f3a0->leave($__internal_ac42ac6c9c0acb0ac4811dc3b08a3876306c03936f12e896581c11882df5f3a0_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\testedeconhecimento\\4-sistema\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{{ _view.fetch('content')|raw }}", "C:\\xampp\\htdocs\\testedeconhecimento\\4-sistema\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig", "");
    }
}
