<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_eb3949e46d0f3e1023351f5a41d4f6ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'contenido' => [$this, 'block_contenido'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/LineIcons.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/default.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 15
        echo "\t<div class=\"preloader\">
\t\t<div class=\"loader\">
\t\t\t<div class=\"ytp-spinner\">
\t\t\t\t<div class=\"ytp-spinner-container\">
\t\t\t\t\t<div class=\"ytp-spinner-rotator\">
\t\t\t\t\t\t<div class=\"ytp-spinner-left\">
\t\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ytp-spinner-right\">
\t\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--====== Preloader Part Ends ======-->

\t<!--====== Navbar Style 7 Part Start ======-->
\t<div class=\"navigation\">
\t\t<header class=\"navbar-style-7 position-relative\">
\t\t\t<div
\t\t\t\tclass=\"container\">
\t\t\t\t<!-- navbar mobile Start -->
\t\t\t\t<div class=\"navbar-mobile d-lg-none\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t<div class=\"navbar-toggle icon-text-btn\">
\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text mobile-menu-open-7\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-6\">
\t\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t\t<div class=\"mobile-logo text-center\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 79
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 84), "getNombre", [], "method", false, false, false, 84), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 87), "getId", [], "method", false, false, false, 87)]), "html", null, true);
            echo "\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 94), "getId", [], "method", false, false, false, 94)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" min=\"1\" max=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 95), "getUnidades", [], "method", false, false, false, 95), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 95), "html", null, true);
            echo "\" size=\"3\" min=\"1\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 95), "getUnidades", [], "method", false, false, false, 95), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 96), "getCodigo", [], "method", false, false, false, 96), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 101), "getPvp", [], "method", false, false, false, 101), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Precio total:</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 112, $this->source); })()), "html", null, true);
        echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"main-btn primary-btn-border\">Actualizar</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"main-btn primary-btn\">Resumen</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar mobile Start -->
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"navbar-container navbar-sidebar-7\">
\t\t\t\t<!-- navbar close  Ends -->
\t\t\t\t<div class=\"navbar-close d-lg-none\">
\t\t\t\t\t<a class=\"close-mobile-menu-7\" href=\"javascript:void(0)\">
\t\t\t\t\t\t<i class=\"mdi mdi-close\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- navbar close  Ends -->

\t\t\t\t<!-- navbar top Start -->
\t\t\t\t<div class=\"navbar-top-wrapper\">
\t\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"navbar-top d-lg-flex justify-content-between\">
\t\t\t\t\t\t\t<!-- navbar top left Start -->
\t\t\t\t\t\t\t<div class=\"navbar-top-left\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contacto</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-phone-in-talk\"></i>
\t\t\t\t\t\t\t\t\t\t\t+34 684 00 10 65
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar top left Ends -->
\t\t\t\t\t\t\t<!-- navbar top right Start -->
\t\t\t\t\t\t\t<div class=\"navbar-top-right\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t\t";
        // line 162
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162)) {
            // line 163
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 164
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "username", [], "any", false, false, false, 166), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 169
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 170
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar top right Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar top Ends -->

\t\t\t\t<!-- main navbar Start -->
\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"main-navbar d-lg-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t\t<div class=\"desktop-logo d-none d-lg-block\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t\t<!-- navbar menu Start -->
\t\t\t\t\t\t\t<div class=\"navbar-menu\">
\t\t\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"position-static menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Categorías</a>
\t\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Start -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-mega-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container mega-dropdown d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 202, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 203
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mega-dropdown-list menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 204), "nombre", [], "any", false, false, false, 204), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lista"], 1, [], "array", false, false, false, 207));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosCat", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "getId", [], "method", false, false, false, 209)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 209), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Ends -->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 222
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\">Productos</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 224
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 225
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar...</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar categorías</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 232
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProductos");
            echo "\">Administrar productos</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 237
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar menu Ends -->
\t\t\t\t\t\t\t<div class=\"navbar-search-cart d-none d-lg-flex\">
\t\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">";
        // line 245
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 245, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 258, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 259
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 264), "getNombre", [], "method", false, false, false, 264), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 267), "getId", [], "method", false, false, false, 267)]), "html", null, true);
            echo "\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 278), "getId", [], "method", false, false, false, 278)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 279), "html", null, true);
            echo "\" size=\"3\" min=\"1\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 279), "getUnidades", [], "method", false, false, false, 279), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 280), "getCodigo", [], "method", false, false, false, 280), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 285), "getPvp", [], "method", false, false, false, 285), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<p class=\"value\">Precio total:</p>
\t\t\t\t\t\t\t\t\t<p class=\"price\">";
        // line 296
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 296, $this->source); })()), "html", null, true);
        echo "€</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t";
        // line 300
        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resumenCesta");
        echo "\" class=\"main-btn primary-btn\">Resumen</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar cart Ends -->
\t\t\t</div>
\t\t</nav>
\t</div>
</div>
<!-- main navbar Ends -->
</div>
<div class=\"overlay-7\">
</div></header></div><!--====== Navbar Style 7 Part Ends ======-->
<!--====== Header Style 1 Part Start ======--><section class=\"header-style-1\"><div class=\"header-big\"><div class=\"header-items-active\">
<div class=\"single-header-item bg_cover\" style=\"background-image: url(imagenes/fondo-cartulina.jpg);\">
\t<div class=\"header-item-content\">
\t\t<h3 class=\"title\">Tenemos un amplio catálogo de cartulinas, para realizar cualquier manualidad.</h3>
\t\t<a href=\"";
        // line 319
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\" class=\"link\">Pulsa aquí para ver todas las opciones.</a>
\t</div>
</div>
<div class=\"single-header-item bg_cover\" style=\"background-image: url(imagenes/fondo-gonzalo.jpg);\">
\t<div class=\"header-item-content\">
\t\t<h3 class=\"title\">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
\t\t<a href=\"javascript:void(0)\" class=\"link\">Our Valentine's Day collection</a>
\t</div>
</div>
<div class=\"single-header-item bg_cover\" style=\"background-image: url(imagenes/fondo-puerta.jpg);\">
\t<div class=\"header-item-content\">
\t\t<h3 class=\"title\">Fachada de nuestra papeleria, situada en la plazoleta del juncal.</h3>
\t\t<a href=\"";
        // line 331
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\" class=\"link\">Página de contacto</a>
\t</div>
</div></div></div>
</section>
<!--====== Header Style 1 Part Ends ======-->
<!--====== Content Card Style 4 Part Start ======--><section class=\"content-card-style-4 pt-70 pb-100\"><div class=\"container\"><div class=\"row justify-content-center\">
<div class=\"col-lg-4 col-md-7 col-sm-8\">
\t<div class=\"single-content mt-15 text-center\">
\t\t<div class=\"content-icon\">
\t\t\t<i class=\"mdi mdi-truck-fast\"></i>
\t\t</div>
\t\t<div class=\"content-content\">
\t\t\t<h4 class=\"title\">
\t\t\t\t<a href=\"javascript:void(0)\">Two-hour delivery</a>
\t\t\t</h4>
\t\t\t<p>Available in most metros on selected in-stock products</p>
\t\t\t<a href=\"javascript:void(0)\" class=\"more\">learn more</a>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-7 col-sm-8\">
\t<div class=\"single-content mt-15 text-center\">
\t\t<div class=\"content-icon\">
\t\t\t<i class=\"mdi mdi-message-text\"></i>
\t\t</div>
\t\t<div class=\"content-content\">
\t\t\t<h4 class=\"title\">
\t\t\t\t<a href=\"javascript:void(0)\">Get help buying</a>
\t\t\t</h4>
\t\t\t<p>Have a question? Call a Specialist or chat online for help</p>
\t\t\t<a href=\"contact-page.html\" class=\"more\">Contact us</a>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-7 col-sm-8\">
\t<div class=\"single-content mt-15 text-center\">
\t\t<div class=\"content-icon\">
\t\t\t<i class=\"mdi mdi-ticket-percent\"></i>
\t\t</div>
\t\t<div class=\"content-content\">
\t\t\t<h4 class=\"title\">
\t\t\t\t<a href=\"javascript:void(0)\">Find the card for you</a>
\t\t\t</h4>
\t\t\t<p>Get 3% Daily Cash with special financing offers from us</p>
\t\t\t<a href=\"javascript:void(0)\" class=\"more\">learn more</a>
\t\t</div>
\t</div>
</div></div></div></section><!--====== Content Card Style 4 Part Ends ======--><!--====== Features Part Start ======--><section class=\"features-section pt-100 pb-50 gray-bg\"><div class=\"container\"><div class=\"row\">
<div class=\"col-lg-12\">
\t<div class=\"features-title text-center mb-50\">
\t\t<h1 class=\"heading-1 font-weight-700\">Awesome Features</h1>
\t</div>
</div></div><div class=\"row\">
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-cog\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Bootstrap 5</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-code\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Clean Design</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-layers\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Included Business Pages</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-laptop-phone\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Fully Responsive</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-brush\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Completely Customizable</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-rocket\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Fast and Well-optimized</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div></div></div></section><!--====== Features Part Ends ======--><!--====== Footer Style 3 Part Start ======--><section class=\"footer-style-3 pt-100 pb-100\"><div class=\"container\"><div class=\"footer-top\">
<div class=\"row justify-content-center\">
\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t<div class=\"footer-logo text-center\">
\t\t\t<a href=\"";
        // line 453
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t<img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</a>
\t\t</div>
\t\t<h5 class=\"heading-5 text-center mt-30\">Síguenos</h5>
\t\t<ul class=\"footer-follow text-center\">
\t\t\t<li>
\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t<i class=\"lni lni-instagram-original\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></div><div class=\"footer-widget-wrapper text-center pt-20\">
<div class=\"row\">
\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t<div class=\"footer-widget\">
\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t<ul class=\"footer-link\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Quest</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Rift S</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Gear VR</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Oculus for Business</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t<div class=\"footer-widget\">
\t\t\t<h5 class=\"footer-title\">DEVELOPERS</h5>

\t\t\t<ul class=\"footer-link\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Centre</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Docs</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Downloads</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Tools</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Blog</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Forums</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t<div class=\"footer-widget\">
\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t<ul class=\"footer-link\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Blog</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Careers</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Brand Centre</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Connect</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t<div class=\"footer-widget\">
\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t<ul class=\"footer-link\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">VR for Good</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Launch Pad</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Creators Lab</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Forums</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Support</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div></div></div></section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 572
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 573
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  902 => 584,  898 => 583,  894 => 582,  890 => 581,  886 => 580,  882 => 579,  878 => 578,  874 => 577,  870 => 576,  866 => 575,  862 => 574,  857 => 573,  847 => 572,  719 => 454,  715 => 453,  590 => 331,  575 => 319,  552 => 300,  546 => 296,  537 => 289,  527 => 285,  519 => 280,  513 => 279,  509 => 278,  495 => 267,  489 => 264,  482 => 259,  478 => 258,  462 => 245,  452 => 237,  444 => 232,  435 => 225,  433 => 224,  428 => 222,  419 => 215,  411 => 212,  400 => 209,  397 => 208,  393 => 207,  387 => 204,  384 => 203,  380 => 202,  362 => 189,  345 => 174,  338 => 170,  335 => 169,  329 => 166,  324 => 164,  321 => 163,  319 => 162,  302 => 148,  266 => 115,  260 => 112,  251 => 105,  241 => 101,  233 => 96,  225 => 95,  221 => 94,  211 => 87,  205 => 84,  198 => 79,  194 => 78,  178 => 65,  163 => 55,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/LineIcons.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/materialdesignicons.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}

{% block contenido %}
\t<div class=\"preloader\">
\t\t<div class=\"loader\">
\t\t\t<div class=\"ytp-spinner\">
\t\t\t\t<div class=\"ytp-spinner-container\">
\t\t\t\t\t<div class=\"ytp-spinner-rotator\">
\t\t\t\t\t\t<div class=\"ytp-spinner-left\">
\t\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ytp-spinner-right\">
\t\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--====== Preloader Part Ends ======-->

\t<!--====== Navbar Style 7 Part Start ======-->
\t<div class=\"navigation\">
\t\t<header class=\"navbar-style-7 position-relative\">
\t\t\t<div
\t\t\t\tclass=\"container\">
\t\t\t\t<!-- navbar mobile Start -->
\t\t\t\t<div class=\"navbar-mobile d-lg-none\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t<div class=\"navbar-toggle icon-text-btn\">
\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text mobile-menu-open-7\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-6\">
\t\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t\t<div class=\"mobile-logo text-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">{{ unidades }}</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t{% for produCesta in cesta %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">{{ produCesta.producto.getNombre() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"{{ path('eliminarProductosCesta', {'idProducto': produCesta.producto.getId()}) }}\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" min=\"1\" max=\"{{ produCesta.producto.getUnidades() }}\" value=\"{{ produCesta.unidades }}\" size=\"3\" min=\"1\" max=\"{{ produCesta.producto.getUnidades() }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"{{ produCesta.producto.getCodigo() }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ produCesta.producto.getPvp() }}€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Precio total:</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ precioCesta }}€</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\" class=\"main-btn primary-btn-border\">Actualizar</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"main-btn primary-btn\">Resumen</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar mobile Start -->
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"navbar-container navbar-sidebar-7\">
\t\t\t\t<!-- navbar close  Ends -->
\t\t\t\t<div class=\"navbar-close d-lg-none\">
\t\t\t\t\t<a class=\"close-mobile-menu-7\" href=\"javascript:void(0)\">
\t\t\t\t\t\t<i class=\"mdi mdi-close\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- navbar close  Ends -->

\t\t\t\t<!-- navbar top Start -->
\t\t\t\t<div class=\"navbar-top-wrapper\">
\t\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"navbar-top d-lg-flex justify-content-between\">
\t\t\t\t\t\t\t<!-- navbar top left Start -->
\t\t\t\t\t\t\t<div class=\"navbar-top-left\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('contacto') }}\">Contacto</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-phone-in-talk\"></i>
\t\t\t\t\t\t\t\t\t\t\t+34 684 00 10 65
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar top left Ends -->
\t\t\t\t\t\t\t<!-- navbar top right Start -->
\t\t\t\t\t\t\t<div class=\"navbar-top-right\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('logout') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t{{ app.user.username }}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('login') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar top right Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar top Ends -->

\t\t\t\t<!-- main navbar Start -->
\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"main-navbar d-lg-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t\t<div class=\"desktop-logo d-none d-lg-block\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t\t<!-- navbar menu Start -->
\t\t\t\t\t\t\t<div class=\"navbar-menu\">
\t\t\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"position-static menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Categorías</a>
\t\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Start -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-mega-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container mega-dropdown d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for lista in categorias %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mega-dropdown-list menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"heading-6 font-weight-500 mega-title\">{{ lista[0].nombre}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for categoriaSecu in lista[1] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('productosCat', {'categoria': categoriaSecu.getId()}) }}\">{{ categoriaSecu.nombre }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Ends -->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('productos') }}\">Productos</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar...</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar categorías</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('adminProductos') }}\">Administrar productos</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar menu Ends -->
\t\t\t\t\t\t\t<div class=\"navbar-search-cart d-none d-lg-flex\">
\t\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">{{ unidades }}</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for produCesta in cesta %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">{{ produCesta.producto.getNombre() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"{{ path('eliminarProductosCesta', {'idProducto': produCesta.producto.getId()}) }}\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"{{ produCesta.unidades }}\" size=\"3\" min=\"1\" max=\"{{ produCesta.producto.getUnidades() }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"{{ produCesta.producto.getCodigo() }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ produCesta.producto.getPvp() }}€</p>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<p class=\"value\">Precio total:</p>
\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ precioCesta }}€</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path('index') }}\" class=\"main-btn primary-btn-border\">Actualizar</a> #}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('resumenCesta') }}\" class=\"main-btn primary-btn\">Resumen</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar cart Ends -->
\t\t\t</div>
\t\t</nav>
\t</div>
</div>
<!-- main navbar Ends -->
</div>
<div class=\"overlay-7\">
</div></header></div><!--====== Navbar Style 7 Part Ends ======-->
<!--====== Header Style 1 Part Start ======--><section class=\"header-style-1\"><div class=\"header-big\"><div class=\"header-items-active\">
<div class=\"single-header-item bg_cover\" style=\"background-image: url(imagenes/fondo-cartulina.jpg);\">
\t<div class=\"header-item-content\">
\t\t<h3 class=\"title\">Tenemos un amplio catálogo de cartulinas, para realizar cualquier manualidad.</h3>
\t\t<a href=\"{{path('productos')}}\" class=\"link\">Pulsa aquí para ver todas las opciones.</a>
\t</div>
</div>
<div class=\"single-header-item bg_cover\" style=\"background-image: url(imagenes/fondo-gonzalo.jpg);\">
\t<div class=\"header-item-content\">
\t\t<h3 class=\"title\">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
\t\t<a href=\"javascript:void(0)\" class=\"link\">Our Valentine's Day collection</a>
\t</div>
</div>
<div class=\"single-header-item bg_cover\" style=\"background-image: url(imagenes/fondo-puerta.jpg);\">
\t<div class=\"header-item-content\">
\t\t<h3 class=\"title\">Fachada de nuestra papeleria, situada en la plazoleta del juncal.</h3>
\t\t<a href=\"{{ path('contacto') }}\" class=\"link\">Página de contacto</a>
\t</div>
</div></div></div>
</section>
<!--====== Header Style 1 Part Ends ======-->
<!--====== Content Card Style 4 Part Start ======--><section class=\"content-card-style-4 pt-70 pb-100\"><div class=\"container\"><div class=\"row justify-content-center\">
<div class=\"col-lg-4 col-md-7 col-sm-8\">
\t<div class=\"single-content mt-15 text-center\">
\t\t<div class=\"content-icon\">
\t\t\t<i class=\"mdi mdi-truck-fast\"></i>
\t\t</div>
\t\t<div class=\"content-content\">
\t\t\t<h4 class=\"title\">
\t\t\t\t<a href=\"javascript:void(0)\">Two-hour delivery</a>
\t\t\t</h4>
\t\t\t<p>Available in most metros on selected in-stock products</p>
\t\t\t<a href=\"javascript:void(0)\" class=\"more\">learn more</a>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-7 col-sm-8\">
\t<div class=\"single-content mt-15 text-center\">
\t\t<div class=\"content-icon\">
\t\t\t<i class=\"mdi mdi-message-text\"></i>
\t\t</div>
\t\t<div class=\"content-content\">
\t\t\t<h4 class=\"title\">
\t\t\t\t<a href=\"javascript:void(0)\">Get help buying</a>
\t\t\t</h4>
\t\t\t<p>Have a question? Call a Specialist or chat online for help</p>
\t\t\t<a href=\"contact-page.html\" class=\"more\">Contact us</a>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-7 col-sm-8\">
\t<div class=\"single-content mt-15 text-center\">
\t\t<div class=\"content-icon\">
\t\t\t<i class=\"mdi mdi-ticket-percent\"></i>
\t\t</div>
\t\t<div class=\"content-content\">
\t\t\t<h4 class=\"title\">
\t\t\t\t<a href=\"javascript:void(0)\">Find the card for you</a>
\t\t\t</h4>
\t\t\t<p>Get 3% Daily Cash with special financing offers from us</p>
\t\t\t<a href=\"javascript:void(0)\" class=\"more\">learn more</a>
\t\t</div>
\t</div>
</div></div></div></section><!--====== Content Card Style 4 Part Ends ======--><!--====== Features Part Start ======--><section class=\"features-section pt-100 pb-50 gray-bg\"><div class=\"container\"><div class=\"row\">
<div class=\"col-lg-12\">
\t<div class=\"features-title text-center mb-50\">
\t\t<h1 class=\"heading-1 font-weight-700\">Awesome Features</h1>
\t</div>
</div></div><div class=\"row\">
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-cog\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Bootstrap 5</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-code\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Clean Design</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-layers\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Included Business Pages</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-laptop-phone\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Fully Responsive</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-brush\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Completely Customizable</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-feature-wrapper\">
\t\t<div class=\"feature-icon\">
\t\t\t<i class=\"lni lni-rocket\"></i>
\t\t</div>
\t\t<div class=\"feature-content\">
\t\t\t<h5 class=\"heading-5 font-weight-500 mb-10\">Fast and Well-optimized</h5>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
\t\t</div>
\t</div>
</div></div></div></section><!--====== Features Part Ends ======--><!--====== Footer Style 3 Part Start ======--><section class=\"footer-style-3 pt-100 pb-100\"><div class=\"container\"><div class=\"footer-top\">
<div class=\"row justify-content-center\">
\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t<div class=\"footer-logo text-center\">
\t\t\t<a href=\"{{ path('index') }}\">
\t\t\t\t<img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"\">
\t\t\t</a>
\t\t</div>
\t\t<h5 class=\"heading-5 text-center mt-30\">Síguenos</h5>
\t\t<ul class=\"footer-follow text-center\">
\t\t\t<li>
\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t<i class=\"lni lni-instagram-original\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></div><div class=\"footer-widget-wrapper text-center pt-20\">
<div class=\"row\">
\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t<div class=\"footer-widget\">
\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t<ul class=\"footer-link\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Quest</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Rift S</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Gear VR</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Oculus for Business</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t<div class=\"footer-widget\">
\t\t\t<h5 class=\"footer-title\">DEVELOPERS</h5>

\t\t\t<ul class=\"footer-link\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Centre</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Docs</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Downloads</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Tools</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Blog</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Forums</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t<div class=\"footer-widget\">
\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t<ul class=\"footer-link\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Blog</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Careers</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Brand Centre</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Connect</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t<div class=\"footer-widget\">
\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t<ul class=\"footer-link\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">VR for Good</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Launch Pad</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Creators Lab</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Forums</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0)\">Support</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div></div></div></section>


{% endblock %}
{% block javascripts %}
\t<script src=\"{{ asset('js/popper.min.js') }}\"></script>
\t<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('js/vendor/jquery-3.5.1.min.js') }}\"></script>
\t<script src=\"{{ asset('js/vendor/modernizr-3.7.1.min.js') }}\"></script>
\t<script src=\"{{ asset('js/slick.min.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery-vj-accordion-steps.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery-ui.min.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery.form-validator.min.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery.formatter.min.js') }}\"></script>
\t<script src=\"{{ asset('js/count-up.min.js') }}\"></script>
\t<script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\index.html.twig");
    }
}
