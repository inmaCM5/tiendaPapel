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
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Shopping Cart</h6>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"javascript:void(0)\"><i class=\"mdi mdi-delete\"></i></a></li>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 95), "html", null, true);
            echo "\" size=\"3\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Subtotal Price:</p>
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
\t\t\t\t\t<!-- navbar search start -->
\t\t\t\t\t<div class=\"navbar-search mt-15 search-style-5\">
\t\t\t\t\t\t<div class=\"search-input\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search-btn\">
\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t<i class=\"lni lni-search-alt\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- navbar search Ends -->
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
        // line 160
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
        // line 174
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174)) {
            // line 175
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 176
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "username", [], "any", false, false, false, 178), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 186
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
        // line 201
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
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 214, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mega-dropdown-list menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 216), "nombre", [], "any", false, false, false, 216), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lista"], 1, [], "array", false, false, false, 219));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 220
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 221
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosCat", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "getId", [], "method", false, false, false, 221)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 221), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Ends -->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 234
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\">Productos</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Imprimir apuntes</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 239
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 240
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar...</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar categorías</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 247
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProductos");
            echo "\">Administrar productos</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar apuntes</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 255
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar menu Ends -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"navbar-search-cart d-none d-lg-flex\">
\t\t\t\t\t\t\t\t<!-- navbar search start -->
\t\t\t\t\t\t\t\t<div class=\"navbar-search search-style-5\">
\t\t\t\t\t\t\t\t\t<div class=\"search-input\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"search-btn\">
\t\t\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-search-alt\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- navbar search Ends -->
\t\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 276, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Shopping Cart</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 289, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 290
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 295), "getNombre", [], "method", false, false, false, 295), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 299), "getId", [], "method", false, false, false, 299)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"delete\" value=\"Borrar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</input>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>

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
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 316), "getId", [], "method", false, false, false, 316)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 317), "html", null, true);
            echo "\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 318), "getCodigo", [], "method", false, false, false, 318), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 323), "getPvp", [], "method", false, false, false, 323), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<p class=\"value\">Subtotal Price:</p>
\t\t\t\t\t\t\t\t\t<p class=\"price\">";
        // line 334
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 334, $this->source); })()), "html", null, true);
        echo "€</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 337
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"main-btn primary-btn-border\">Actualizar</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"main-btn primary-btn\">Resumen</a>
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
        // line 357
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
        // line 369
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
        // line 491
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t<img src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</a>
\t\t</div>
\t\t<h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
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
</div></div></div></section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 606
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>";
        
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
        return array (  873 => 606,  748 => 492,  744 => 491,  619 => 369,  604 => 357,  581 => 337,  575 => 334,  566 => 327,  556 => 323,  548 => 318,  544 => 317,  540 => 316,  520 => 299,  513 => 295,  506 => 290,  502 => 289,  486 => 276,  463 => 255,  452 => 247,  443 => 240,  441 => 239,  433 => 234,  424 => 227,  416 => 224,  405 => 221,  402 => 220,  398 => 219,  392 => 216,  389 => 215,  385 => 214,  367 => 201,  350 => 186,  343 => 182,  340 => 181,  334 => 178,  329 => 176,  326 => 175,  324 => 174,  307 => 160,  259 => 115,  253 => 112,  244 => 105,  234 => 101,  226 => 96,  222 => 95,  218 => 94,  205 => 84,  198 => 79,  194 => 78,  178 => 65,  163 => 55,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
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
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Shopping Cart</h6>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"javascript:void(0)\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"{{ produCesta.unidades }}\" size=\"3\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Subtotal Price:</p>
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
\t\t\t\t\t<!-- navbar search start -->
\t\t\t\t\t<div class=\"navbar-search mt-15 search-style-5\">
\t\t\t\t\t\t<div class=\"search-input\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search-btn\">
\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t<i class=\"lni lni-search-alt\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- navbar search Ends -->
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
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Imprimir apuntes</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar apuntes</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar menu Ends -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"navbar-search-cart d-none d-lg-flex\">
\t\t\t\t\t\t\t\t<!-- navbar search start -->
\t\t\t\t\t\t\t\t<div class=\"navbar-search search-style-5\">
\t\t\t\t\t\t\t\t\t<div class=\"search-input\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"search-btn\">
\t\t\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-search-alt\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- navbar search Ends -->
\t\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">{{ unidades }}</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Shopping Cart</h6>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('eliminarProductosCesta', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"delete\" value=\"Borrar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</input>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"{{ produCesta.unidades }}\" size=\"3\">
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
\t\t\t\t\t\t\t\t\t<p class=\"value\">Subtotal Price:</p>
\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ precioCesta }}€</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\" class=\"main-btn primary-btn-border\">Actualizar</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"main-btn primary-btn\">Resumen</a>
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
\t\t<h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
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
</div></div></div></section>{% endblock %}{% block javascripts %}<script src=\"{{ asset('js/popper.min.js') }}\"></script><script src=\"{{ asset('js/bootstrap.min.js') }}\"></script><script src=\"{{ asset('js/vendor/jquery-3.5.1.min.js') }}\"></script><script src=\"{{ asset('js/vendor/modernizr-3.7.1.min.js') }}\"></script><script src=\"{{ asset('js/slick.min.js') }}\"></script><script src=\"{{ asset('js/jquery-vj-accordion-steps.js') }}\"></script><script src=\"{{ asset('js/jquery-ui.min.js') }}\"></script><script src=\"{{ asset('js/jquery.form-validator.min.js') }}\"></script><script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script><script src=\"{{ asset('js/jquery.formatter.min.js') }}\"></script><script src=\"{{ asset('js/count-up.min.js') }}\"></script><script src=\"{{ asset('js/main.js') }}\"></script>{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\index.html.twig");
    }
}
