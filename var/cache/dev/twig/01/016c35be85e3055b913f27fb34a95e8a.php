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

/* detallesProducto.html.twig */
class __TwigTemplate_bd813647ab0683350a49544a40f2d3eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detallesProducto.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detallesProducto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detallesProducto.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/LineIcons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
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
        echo "<div class=\"preloader\">
\t<div class=\"loader\">
\t\t<div class=\"ytp-spinner\">
\t\t\t<div class=\"ytp-spinner-container\">
\t\t\t\t<div class=\"ytp-spinner-rotator\">
\t\t\t\t\t<div class=\"ytp-spinner-left\">
\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ytp-spinner-right\">
\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!--====== Preloader Part Ends ======-->

<div class=\"navigation\">
\t<header class=\"navbar-style-7 position-relative\">
\t\t<div
\t\t\tclass=\"container\">
\t\t\t<!-- navbar mobile Start -->
\t\t\t<div class=\"navbar-mobile d-lg-none\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t<div class=\"navbar-toggle icon-text-btn\">
\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text mobile-menu-open-7\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-6\">
\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t<div class=\"mobile-logo text-center\">
\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-1.svg"), "html", null, true);
        echo "\" alt=\"Icon\">
\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Shopping Cart</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 83), "getNombre", [], "method", false, false, false, 83), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 97), "getId", [], "method", false, false, false, 97)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 98), "html", null, true);
            echo "\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value= \"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 99), "getCodigo", [], "method", false, false, false, 99), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 104), "getPvp", [], "method", false, false, false, 104), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Subtotal Price:</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "€</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"cart-page.html\" class=\"main-btn primary-btn-border\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCart</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar search start -->
\t\t\t\t<div class=\"navbar-search mt-15 search-style-5\">
\t\t\t\t\t<div class=\"search-input\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search-btn\">
\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t<i class=\"lni lni-search-alt\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar search Ends -->
\t\t\t</div>
\t\t\t<!-- navbar mobile Start -->
\t\t</div>

\t\t<div
\t\t\tclass=\"navbar-container navbar-sidebar-7\">
\t\t\t<!-- navbar close  Ends -->
\t\t\t<div class=\"navbar-close d-lg-none\">
\t\t\t\t<a class=\"close-mobile-menu-7\" href=\"javascript:void(0)\">
\t\t\t\t\t<i class=\"mdi mdi-close\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!-- navbar close  Ends -->

\t\t\t<!-- navbar top Start -->
\t\t\t<div class=\"navbar-top-wrapper\">
\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"navbar-top d-lg-flex justify-content-between\">
\t\t\t\t\t\t<!-- navbar top left Start -->
\t\t\t\t\t\t<div class=\"navbar-top-left\">
\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contacto</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-phone-in-talk\"></i>
\t\t\t\t\t\t\t\t\t\t+34 684 00 10 65
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar top left Ends -->
\t\t\t\t\t\t<!-- navbar top right Start -->
\t\t\t\t\t\t<div class=\"navbar-top-right\">
\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t";
        // line 178
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178)) {
            // line 179
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 180
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182), "username", [], "any", false, false, false, 182), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 185
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 186
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 190
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar top right Ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- navbar top Ends -->

\t\t\t<!-- main navbar Start -->
\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"main-navbar d-lg-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t<div class=\"desktop-logo d-none d-lg-block\">
\t\t\t\t\t\t\t<a href=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t<!-- navbar menu Start -->
\t\t\t\t\t\t<div class=\"navbar-menu\">
\t\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t\t<li class=\"position-static menu-item-has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Categorías</a>
\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Start -->
\t\t\t\t\t\t\t\t\t<ul class=\"sub-mega-dropdown\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-mega-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container mega-dropdown d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 221, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 222
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mega-dropdown-list menu-item-has-children\">  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 223), "nombre", [], "any", false, false, false, 223), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lista"], 1, [], "array", false, false, false, 226));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 227
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 228
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosCat", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "getId", [], "method", false, false, false, 228)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 228), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Ends -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 244
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\">Productos</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Imprimir apuntes</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 249
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 250
            echo "\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar...</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar categorías</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 257
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProductos");
            echo "\">Administrar productos</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar apuntes</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 265
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar menu Ends -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"navbar-search-cart d-none d-lg-flex\">
\t\t\t\t\t\t\t<!-- navbar search start -->
\t\t\t\t\t\t\t<div class=\"navbar-search search-style-5\">
\t\t\t\t\t\t\t\t<div class=\"search-input\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"search-btn\">
\t\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-search-alt\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar search Ends -->
\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-1.svg"), "html", null, true);
        echo "\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 286, $this->source); })()), "html", null, true);
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 299, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 300
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 305), "getNombre", [], "method", false, false, false, 305), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
            // line 319
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 319), "getId", [], "method", false, false, false, 319)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"";
            // line 320
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 320), "html", null, true);
            echo "\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value= \"";
            // line 321
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 321), "getCodigo", [], "method", false, false, false, 321), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 326), "getPvp", [], "method", false, false, false, 326), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Subtotal Price:</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 337, $this->source); })()), "html", null, true);
        echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"cart-page.html\" class=\"main-btn primary-btn-border\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCart</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- main navbar Ends -->
\t\t</div>
\t\t<div class=\"overlay-7\"></div>
\t</header>
</div>

<section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"breadcrumb-left\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 367
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Detalles productos</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"breadcrumb-right\">
\t\t\t\t\t\t<h5 class=\"heading-5 font-weight-500\">Detalles productos</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"product-details-wrapper pt-50 pb-100\">
\t<div class=\"container\">
\t\t<div class=\"product-details-style-1\">
\t\t\t<div class=\"row flex-lg-row-reverse align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"product-details-image mt-50\">
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<div class=\"product-image-active-1 slick-initialized slick-slider\">
\t\t\t\t\t\t\t\t<div class=\"slick-list draggable\">
\t\t\t\t\t\t\t\t\t<div class=\"slick-track\" style=\"opacity: 1; width: 3228px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-image slick-slide slick-current slick-active\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"0\" style=\"width: 538px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 392
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 392, $this->source); })()), "displayImagen", [], "method", false, false, false, 392), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"product-details-content mt-45\">
\t\t\t\t\t\t<h2 class=\"title\">";
        // line 402
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 402, $this->source); })()), "getNombre", [], "method", false, false, false, 402), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<div class=\"product-select-wrapper flex-wrap\">
\t\t\t\t\t\t\t<div class=\"select-item\">
\t\t\t\t\t\t\t\t<h6 class=\"select-title\">Unidades:
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<div class=\"select-quantity\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"sub\" class=\"sub\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-minus\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"add\" class=\"add\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h6 class=\"price-title\">Precio:
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p class=\"sale-price\">";
        // line 421
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 421, $this->source); })()), "getPvp", [], "method", false, false, false, 421), "html", null, true);
        echo "€</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-btn\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-btn primary-btn\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-4.svg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"reviews-wrapper pt-100 pb-100 \">
\t<div class=\"container\">
\t\t<div class=\"reviews-style\">
\t\t\t<div class=\"reviews-menu\">
\t\t\t\t<ul class=\"breadcrumb-list-grid nav nav-tabs border-0\" id=\"myTab\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t<a id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\" class=\"active\">
\t\t\t\t\t\t\tDetalles
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t<a id=\"specifications-tab\" data-toggle=\"tab\" href=\"#specifications\" role=\"tab\" aria-controls=\"specifications\" aria-selected=\"false\">
\t\t\t\t\t\t\tEspecificaciones
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t<div class=\"tab-pane fade active show\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t<div class=\"details-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t<div class=\"reviews-title\">
\t\t\t\t\t\t\t\t\t<h4 class=\"title\">";
        // line 459
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 459, $this->source); })()), "getNombre", [], "method", false, false, false, 459), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-15 pt-30\">";
        // line 461
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 461, $this->source); })()), "getDescripcion", [], "method", false, false, false, 461), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"specifications\" role=\"tabpanel\" aria-labelledby=\"specifications-tab\">
\t\t\t\t\t<div class=\"specifications-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t<div class=\"reviews-title\">
\t\t\t\t\t\t\t\t\t<h4 class=\"title\">";
        // line 471
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 471, $this->source); })()), "getNombre", [], "method", false, false, false, 471), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-15 pt-30\">";
        // line 473
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 473, $this->source); })()), "getDescripcion", [], "method", false, false, false, 473), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>




<section class=\"footer-style-3 pt-100 pb-100\">
\t<div class=\"container\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t\t\t\t<div class=\"footer-logo text-center\">
\t\t\t\t\t\t<a href=\"";
        // line 492
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
\t\t\t\t\t<ul class=\"footer-follow text-center\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-original\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-widget-wrapper text-center pt-20\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Quest</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Rift S</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Gear VR</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Oculus for Business</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">DEVELOPERS</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Centre</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Docs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Downloads</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Tools</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Forums</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Careers</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Brand Centre</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Connect</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">VR for Good</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Launch Pad</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Creators Lab</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Forums</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Support</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 616
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 617
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "detallesProducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  954 => 628,  950 => 627,  946 => 626,  942 => 625,  938 => 624,  934 => 623,  930 => 622,  926 => 621,  922 => 620,  918 => 619,  914 => 618,  909 => 617,  899 => 616,  767 => 493,  763 => 492,  741 => 473,  736 => 471,  723 => 461,  718 => 459,  681 => 425,  674 => 421,  652 => 402,  639 => 392,  611 => 367,  578 => 337,  569 => 330,  559 => 326,  551 => 321,  547 => 320,  543 => 319,  526 => 305,  519 => 300,  515 => 299,  499 => 286,  495 => 285,  473 => 265,  462 => 257,  453 => 250,  451 => 249,  443 => 244,  431 => 234,  423 => 231,  412 => 228,  409 => 227,  405 => 226,  399 => 223,  396 => 222,  392 => 221,  371 => 205,  354 => 190,  347 => 186,  344 => 185,  338 => 182,  333 => 180,  330 => 179,  328 => 178,  311 => 164,  259 => 115,  250 => 108,  240 => 104,  232 => 99,  228 => 98,  224 => 97,  207 => 83,  200 => 78,  196 => 77,  180 => 64,  176 => 63,  162 => 54,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/LineIcons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}   

{% block contenido %}
<div class=\"preloader\">
\t<div class=\"loader\">
\t\t<div class=\"ytp-spinner\">
\t\t\t<div class=\"ytp-spinner-container\">
\t\t\t\t<div class=\"ytp-spinner-rotator\">
\t\t\t\t\t<div class=\"ytp-spinner-left\">
\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ytp-spinner-right\">
\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!--====== Preloader Part Ends ======-->

<div class=\"navigation\">
\t<header class=\"navbar-style-7 position-relative\">
\t\t<div
\t\t\tclass=\"container\">
\t\t\t<!-- navbar mobile Start -->
\t\t\t<div class=\"navbar-mobile d-lg-none\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t<div class=\"navbar-toggle icon-text-btn\">
\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text mobile-menu-open-7\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-6\">
\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t<div class=\"mobile-logo text-center\">
\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/icon-svg/cart-1.svg') }}\" alt=\"Icon\">
\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">{{ unidades }}</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Shopping Cart</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% for produCesta in cesta %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">{{ produCesta.producto.getNombre() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"{{ produCesta.unidades }}\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value= \"{{ produCesta.producto.getCodigo() }}\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ produCesta.producto.getPvp() }}€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Subtotal Price:</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ precioCesta }}€</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"cart-page.html\" class=\"main-btn primary-btn-border\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCart</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar search start -->
\t\t\t\t<div class=\"navbar-search mt-15 search-style-5\">
\t\t\t\t\t<div class=\"search-input\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search-btn\">
\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t<i class=\"lni lni-search-alt\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar search Ends -->
\t\t\t</div>
\t\t\t<!-- navbar mobile Start -->
\t\t</div>

\t\t<div
\t\t\tclass=\"navbar-container navbar-sidebar-7\">
\t\t\t<!-- navbar close  Ends -->
\t\t\t<div class=\"navbar-close d-lg-none\">
\t\t\t\t<a class=\"close-mobile-menu-7\" href=\"javascript:void(0)\">
\t\t\t\t\t<i class=\"mdi mdi-close\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!-- navbar close  Ends -->

\t\t\t<!-- navbar top Start -->
\t\t\t<div class=\"navbar-top-wrapper\">
\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"navbar-top d-lg-flex justify-content-between\">
\t\t\t\t\t\t<!-- navbar top left Start -->
\t\t\t\t\t\t<div class=\"navbar-top-left\">
\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('contacto') }}\">Contacto</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-phone-in-talk\"></i>
\t\t\t\t\t\t\t\t\t\t+34 684 00 10 65
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar top left Ends -->
\t\t\t\t\t\t<!-- navbar top right Start -->
\t\t\t\t\t\t<div class=\"navbar-top-right\">
\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('logout') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.username }}</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('login') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar top right Ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- navbar top Ends -->

\t\t\t<!-- main navbar Start -->
\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"main-navbar d-lg-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t<div class=\"desktop-logo d-none d-lg-block\">
\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t<!-- navbar menu Start -->
\t\t\t\t\t\t<div class=\"navbar-menu\">
\t\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t\t<li class=\"position-static menu-item-has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Categorías</a>
\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Start -->
\t\t\t\t\t\t\t\t\t<ul class=\"sub-mega-dropdown\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-mega-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container mega-dropdown d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for lista in categorias %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mega-dropdown-list menu-item-has-children\">  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"heading-6 font-weight-500 mega-title\">{{ lista[0].nombre}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for categoriaSecu in lista[1] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('productosCat', {'categoria': categoriaSecu.getId()}) }}\">{{ categoriaSecu.nombre }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Ends -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('productos') }}\">Productos</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Imprimir apuntes</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar...</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar categorías</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('adminProductos') }}\">Administrar productos</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar apuntes</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- navbar menu Ends -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"navbar-search-cart d-none d-lg-flex\">
\t\t\t\t\t\t\t<!-- navbar search start -->
\t\t\t\t\t\t\t<div class=\"navbar-search search-style-5\">
\t\t\t\t\t\t\t\t<div class=\"search-input\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"search-btn\">
\t\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t\t<i class=\"lni lni-search-alt\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar search Ends -->
\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/icon-svg/cart-1.svg') }}\" alt=\"Icon\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for produCesta in cesta %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">{{ produCesta.producto.getNombre() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"delete\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"{{ produCesta.unidades }}\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value= \"{{ produCesta.producto.getCodigo() }}\" />
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
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"cart-page.html\" class=\"main-btn primary-btn-border\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCart</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- main navbar Ends -->
\t\t</div>
\t\t<div class=\"overlay-7\"></div>
\t</header>
</div>

<section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"breadcrumb-left\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Detalles productos</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"breadcrumb-right\">
\t\t\t\t\t\t<h5 class=\"heading-5 font-weight-500\">Detalles productos</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"product-details-wrapper pt-50 pb-100\">
\t<div class=\"container\">
\t\t<div class=\"product-details-style-1\">
\t\t\t<div class=\"row flex-lg-row-reverse align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"product-details-image mt-50\">
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<div class=\"product-image-active-1 slick-initialized slick-slider\">
\t\t\t\t\t\t\t\t<div class=\"slick-list draggable\">
\t\t\t\t\t\t\t\t\t<div class=\"slick-track\" style=\"opacity: 1; width: 3228px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-image slick-slide slick-current slick-active\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"0\" style=\"width: 538px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ producto.displayImagen() }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"product-details-content mt-45\">
\t\t\t\t\t\t<h2 class=\"title\">{{ producto.getNombre() }}</h2>
\t\t\t\t\t\t<div class=\"product-select-wrapper flex-wrap\">
\t\t\t\t\t\t\t<div class=\"select-item\">
\t\t\t\t\t\t\t\t<h6 class=\"select-title\">Unidades:
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<div class=\"select-quantity\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"sub\" class=\"sub\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-minus\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"add\" class=\"add\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-plus\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h6 class=\"price-title\">Precio:
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p class=\"sale-price\">{{ producto.getPvp() }}€</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-btn\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-btn primary-btn\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/icon-svg/cart-4.svg') }}\" alt=\"\">
\t\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"reviews-wrapper pt-100 pb-100 \">
\t<div class=\"container\">
\t\t<div class=\"reviews-style\">
\t\t\t<div class=\"reviews-menu\">
\t\t\t\t<ul class=\"breadcrumb-list-grid nav nav-tabs border-0\" id=\"myTab\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t<a id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\" class=\"active\">
\t\t\t\t\t\t\tDetalles
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t<a id=\"specifications-tab\" data-toggle=\"tab\" href=\"#specifications\" role=\"tab\" aria-controls=\"specifications\" aria-selected=\"false\">
\t\t\t\t\t\t\tEspecificaciones
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t<div class=\"tab-pane fade active show\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t<div class=\"details-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t<div class=\"reviews-title\">
\t\t\t\t\t\t\t\t\t<h4 class=\"title\">{{ producto.getNombre() }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-15 pt-30\">{{ producto.getDescripcion() }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"specifications\" role=\"tabpanel\" aria-labelledby=\"specifications-tab\">
\t\t\t\t\t<div class=\"specifications-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t<div class=\"reviews-title\">
\t\t\t\t\t\t\t\t\t<h4 class=\"title\">{{ producto.getNombre() }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-15 pt-30\">{{ producto.getDescripcion() }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>




<section class=\"footer-style-3 pt-100 pb-100\">
\t<div class=\"container\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t\t\t\t<div class=\"footer-logo text-center\">
\t\t\t\t\t\t<a href=\"{{ path('index') }}\">
\t\t\t\t\t\t\t<img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
\t\t\t\t\t<ul class=\"footer-follow text-center\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-original\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-widget-wrapper text-center pt-20\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Quest</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Rift S</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Gear VR</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Oculus for Business</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">DEVELOPERS</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Centre</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Docs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Downloads</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Tools</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Forums</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Careers</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Brand Centre</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Connect</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">VR for Good</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Launch Pad</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Creators Lab</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Forums</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Support</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
</section>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{ asset('js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/vendor/jquery-3.5.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/vendor/modernizr-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-vj-accordion-steps.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-ui.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.form-validator.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.formatter.min.js') }}\"></script>
    <script src=\"{{ asset('js/count-up.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %} ", "detallesProducto.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\detallesProducto.html.twig");
    }
}
