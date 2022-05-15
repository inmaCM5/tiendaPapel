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
        echo "    <div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Preloader Part Ends ======-->

    <!--====== Navbar Style 7 Part Start ======-->
    <div class=\"navigation\">
        <header class=\"navbar-style-7 position-relative\">
            <div class=\"container\">
                <!-- navbar mobile Start -->
                <div class=\"navbar-mobile d-lg-none\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-toggle icon-text-btn\">
                                <a class=\"icon-btn primary-icon-text mobile-menu-open-7\" href=\"javascript:void(0)\">
                                    <i class=\"mdi mdi-menu\"></i>
                                </a>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                        <div class=\"col-6\">
                            <!-- desktop logo Start -->
                            <div class=\"mobile-logo text-center\">
                                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"images/logo.svg\" alt=\"Logo\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-cart\">
                                <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 61, $this->source); })()), "html", null, true);
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
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details-page.html\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 80), "getNombre", [], "method", false, false, false, 80), "html", null, true);
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
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 94), "getId", [], "method", false, false, false, 94)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 95), "html", null, true);
            echo "\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value= \"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 96), "getCodigo", [], "method", false, false, false, 96), "html", null, true);
            echo "\" />
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
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"cart-page.html\" class=\"main-btn primary-btn-border\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                        Cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                    <!-- navbar search start -->
                    <div class=\"navbar-search mt-15 search-style-5\">
                        <div class=\"search-input\">
                            <input type=\"text\" placeholder=\"Search\">
                        </div>
                        <div class=\"search-btn\">
                            <button><i class=\"lni lni-search-alt\"></i></button>
                        </div>
                    </div>
                    <!-- navbar search Ends -->
                </div>
                <!-- navbar mobile Start -->
            </div>
    
            <div class=\"navbar-container navbar-sidebar-7\">
                <!-- navbar close  Ends -->
                <div class=\"navbar-close d-lg-none\">
                    <a class=\"close-mobile-menu-7\" href=\"javascript:void(0)\"><i class=\"mdi mdi-close\"></i></a>
                </div>
                <!-- navbar close  Ends -->
    
                <!-- navbar top Start -->
                <div class=\"navbar-top-wrapper\">
                    <div class=\"container-lg\">
                        <div class=\"navbar-top d-lg-flex justify-content-between\">
                            <!-- navbar top left Start -->
                            <div class=\"navbar-top-left\">
                                <ul class=\"navbar-top-link\">
                                    <li><a href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contacto</a></li>
                                    <li>
                                        <a href=\"javascript:void(0)\">
                                            <i class=\"mdi mdi-phone-in-talk\"></i>
                                            +34 684 00 10 65
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar top left Ends -->
                            <!-- navbar top right Start -->
                            <div class=\"navbar-top-right\">
                                <ul class=\"navbar-top-link\">
                                    ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167)) {
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t<li>
                                            <a href=\"";
            // line 169
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "username", [], "any", false, false, false, 170), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 173
            echo "                                        <li>
                                            <a href=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
                                        </li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 177
        echo "                                </ul>
                            </div>
                            <!-- navbar top right Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar top Ends -->
    
                <!-- main navbar Start -->
                <div class=\"navbar-wrapper\">
                    <div class=\"container-lg\">
                        <nav class=\"main-navbar d-lg-flex justify-content-between align-items-center\">
                            <!-- desktop logo Start -->
                            <div class=\"desktop-logo d-none d-lg-block\">
                                <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.svg"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                            <!-- navbar menu Start -->
                            <div class=\"navbar-menu\">
                                <ul class=\"main-menu\">
                                    <li class=\"position-static menu-item-has-children\">
                                        <a href=\"#\">Categorías</a>
                                        <!-- sub mega dropdown Start -->
                                        <ul class=\"sub-mega-dropdown\">
                                            <li>
                                                <div class=\"mega-dropdown-menu\">
                                                    <ul class=\"container mega-dropdown d-flex flex-wrap\">
                                                    ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 204, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 205
            echo "                                                        <li class=\"mega-dropdown-list menu-item-has-children\">  
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 206), "nombre", [], "any", false, false, false, 206), "html", null, true);
            echo "
                                                            </h6>
                                                            <ul>
                                                            ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lista"], 1, [], "array", false, false, false, 209));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 210
                echo "                                                                <li>
                                                                    <a href=\"#\">";
                // line 211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 211), "html", null, true);
                echo "</a> 
                                                                </li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                                                            </ul>
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- sub mega dropdown Ends -->
                                    </li>
                                    <li><a href=\"";
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\">Productos</a></li>
                                    <li><a href=\"#\">Imprimir apuntes</a></li>
                                    ";
        // line 225
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 226
            echo "                                        <li class=\"menu-item-has-children\">
                                            <a href=\"#\">Administrar...</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"#\">Administrar categorías</a></li>
                                                <li><a href=\"";
            // line 230
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProductos");
            echo "\">Administrar productos</a></li>
                                                <li><a href=\"#\">Administrar apuntes</a></li>
                                            </ul>
                                        </li>
                                    ";
        }
        // line 234
        echo "                                    
                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class=\"navbar-search-cart d-none d-lg-flex\">
                                <!-- navbar search start -->
                                <div class=\"navbar-search search-style-5\">
                                    <div class=\"search-input\">
                                        <input type=\"text\" placeholder=\"Search\">
                                    </div>
                                    <div class=\"search-btn\">
                                        <button><i class=\"lni lni-search-alt\"></i></button>
                                    </div>
                                </div>
                                <!-- navbar search Ends -->
                                <!-- navbar cart start -->
                                <div class=\"navbar-cart\">
                                    <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                        <img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
                                        <span class=\"icon-text text-style-1\">";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 253, $this->source); })()), "html", null, true);
        echo "</span>
                                    </a>

                                    <div class=\"navbar-cart-dropdown\">
                                        <div class=\"checkout-style-2\">
                                            <div class=\"checkout-header d-flex justify-content-between\">
                                                <h6 class=\"title\">Shopping Cart</h6>
                                            </div>

                                            <div class=\"checkout-table\">
                                                <table class=\"table\">
                                                    <tbody>
                                                            
                                                        ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 266, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 267
            echo "                                                            <tr>
                                                                <td class=\"checkout-product\">
                                                                    <div class=\"product-cart d-flex\">
                                                                        <div class=\"product-content media-body\">
                                                                            <h5 class=\"title\">
                                                                                <a href=\"product-details-page.html\">";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 272), "getNombre", [], "method", false, false, false, 272), "html", null, true);
            echo "</a>
                                                                            </h5>
                                                                            <ul>
                                                                                <li>
                                                                                    <form id=\"form_seleccion\" action=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 276), "getId", [], "method", false, false, false, 276)]), "html", null, true);
            echo "\" method=\"post\">
                                                                                        <input type=\"submit\" class=\"delete\" value=\"Borrar\">
                                                                                            <i class=\"mdi mdi-delete\"></i>
                                                                                        </input>
                                                                                    </form>
                                                                                    
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-quantity\">
                                                                    <div class=\"product-quantity d-inline-flex\">
                                                                        <form id=\"form_seleccion\" action=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 289), "getId", [], "method", false, false, false, 289)]), "html", null, true);
            echo "\" method=\"post\">
                                                                            <input type=\"number\" name=\"unidades\" value=\"";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 290), "html", null, true);
            echo "\" size=\"3\">
                                                                            <input type='hidden' name='codProduc' value= \"";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 291), "getCodigo", [], "method", false, false, false, 291), "html", null, true);
            echo "\" />
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-price\">
                                                                    <p class=\"price\">";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 296), "getPvp", [], "method", false, false, false, 296), "html", null, true);
            echo "€</p>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Subtotal Price:</p>
                                                    <p class=\"price\">";
        // line 307
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 307, $this->source); })()), "html", null, true);
        echo "€</p>
                                                </div>
                                                <div class=\"checkout-btn\">
                                                    <a href=\"cart-page.html\" class=\"main-btn primary-btn-border\">View
                                                                                                                                                                    Cart</a>
                                                    <a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- navbar cart Ends -->
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- main navbar Ends -->
            </div>
            <div class=\"overlay-7\"></div>
        </header>
    </div>
    <!--====== Navbar Style 7 Part Ends ======-->

    <!--====== Header Style 1 Part Start ======-->
    <section class=\"header-style-1\">
        <div class=\"header-big\">
            <div class=\"header-items-active\">
                <div class=\"single-header-item bg_cover\"
                    style=\"background-image: url(images/header-1/header-big-1.jpg);\">
                    <div class=\"header-item-content\">
                        <h3 class=\"title\">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
                        <a href=\"javascript:void(0)\" class=\"link\">Our Valentine's Day collection</a>
                    </div>
                </div>
                <div class=\"single-header-item bg_cover\"
                    style=\"background-image: url(images/header-1/header-big-2.jpg);\">
                    <div class=\"header-item-content\">
                        <h3 class=\"title\">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
                        <a href=\"javascript:void(0)\" class=\"link\">Our Valentine's Day collection</a>
                    </div>
                </div>
                <div class=\"single-header-item bg_cover\"
                    style=\"background-image: url(images/header-1/header-big-1.jpg);\">
                    <div class=\"header-item-content\">
                        <h3 class=\"title\">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
                        <a href=\"javascript:void(0)\" class=\"link\">Our Valentine's Day collection</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header-min\">
            <div class=\"header-min-item product-style-25 bg_cover\"
                style=\"background-image: url(images/header-1/header-min-1.jpg);\">
                <div class=\"product-content\">
                    <h4 class=\"title\"><a href=\"product-details-page.html\">Metro 38 Date</a></h4>
                    <p>Reference 1102</p>
                    <a href=\"javascript:void(0)\" class=\"main-btn primary-btn-border\"> <img src=\"images/icon-svg/cart-5.svg\" alt=\"\">\$
                        399</a>
                </div>
            </div>
            <div class=\"header-min-item product-style-25 bg_cover\"
                style=\"background-image: url(images/header-1/header-min-2.jpg);\">
                <div class=\"product-content\">
                    <h4 class=\"title\"><a href=\"product-details-page.html\">Metro 38 Date</a></h4>
                    <p>Reference 1102</p>
                    <a href=\"javascript:void(0)\" class=\"main-btn primary-btn-border\"> <img src=\"images/icon-svg/cart-5.svg\" alt=\"\">\$
                        399</a>
                </div>
            </div>
        </div>
    </section>
    <!--====== Header Style 1 Part Ends ======-->

    <!--====== Content Card Style 4 Part Start ======-->
    <section class=\"content-card-style-4 pt-70 pb-100\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-7 col-sm-8\">
                    <div class=\"single-content mt-15 text-center\">
                        <div class=\"content-icon\">
                            <i class=\"mdi mdi-truck-fast\"></i>
                        </div>
                        <div class=\"content-content\">
                            <h4 class=\"title\"><a href=\"javascript:void(0)\">Two-hour delivery</a></h4>
                            <p>Available in most metros on selected in-stock products</p>
                            <a href=\"javascript:void(0)\" class=\"more\">learn more</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-7 col-sm-8\">
                    <div class=\"single-content mt-15 text-center\">
                        <div class=\"content-icon\">
                            <i class=\"mdi mdi-message-text\"></i>
                        </div>
                        <div class=\"content-content\">
                            <h4 class=\"title\"><a href=\"javascript:void(0)\">Get help buying</a></h4>
                            <p>Have a question? Call a Specialist or chat online for help</p>
                            <a href=\"contact-page.html\" class=\"more\">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-7 col-sm-8\">
                    <div class=\"single-content mt-15 text-center\">
                        <div class=\"content-icon\">
                            <i class=\"mdi mdi-ticket-percent\"></i>
                        </div>
                        <div class=\"content-content\">
                            <h4 class=\"title\"><a href=\"javascript:void(0)\">Find the card for you</a></h4>
                            <p>Get 3% Daily Cash with special financing offers from us</p>
                            <a href=\"javascript:void(0)\" class=\"more\">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Content Card Style 4 Part Ends ======-->

    <!--====== Product Style 1 Part Start ======-->
    <section class=\"product-wrapper pt-100 pb-70\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-50\">
                        <h1 class=\"heading-1 font-weight-700\">Featured Items</h1>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <span class=\"icon-text text-style-1\">NEW</span>
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-1.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-2.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Metro 38 Date</a></h4>
                            <p>Reference 1102</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <span class=\"icon-text text-style-1\">20% off</span>
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-5.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-6.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Lady Shoe</a></h4>
                            <p>Reference 1103</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-3.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-4.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Casio 09 Date</a></h4>
                            <p>Reference 1112</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-7.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-8.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Man's Shoe</a></h4>
                            <p>Reference 102</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-9.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-10.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Polo T Shirt</a></h4>
                            <p>Reference 1202</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <span class=\"icon-text text-style-1\">40% off</span>
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-11.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-12.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Lotto T Shirt</a></h4>
                            <p>Reference 112</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Product Style 1 Part Ends ======-->

    <!--====== Features Part Start ======-->
    <section class=\"features-section pt-100 pb-50 gray-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"features-title text-center mb-50\">
                        <h1 class=\"heading-1 font-weight-700\">Awesome Features</h1>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-cog\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Bootstrap 5</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-code\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Clean Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-layers\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Included Business Pages</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-laptop-phone\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Fully Responsive</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-brush\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Completely Customizable</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-rocket\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Fast and Well-optimized</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Features Part Ends ======-->

    <!--====== Clients Logo Part Start ======-->
    <section class=\"clients-logo-section pt-70 pb-70\">
        <div class=\"container\">
            <div class=\"row client-logo-active\">
                <div class=\"col-lg-3\">
                    <div class=\"single-logo-wrapper\">
                        <img src=\"images/client-logo/uideck-logo.svg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"single-logo-wrapper\">
                        <img src=\"images/client-logo/graygrids-logo.svg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"single-logo-wrapper\">
                        <img src=\"images/client-logo/lineicons-logo.svg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"single-logo-wrapper\">
                        <img src=\"images/client-logo/pagebulb-logo.svg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Clients Logo Part Ends ======-->

    <!--====== Footer Style 3 Part Start ======-->
    <section class=\"footer-style-3 pt-100 pb-100\">
        <div class=\"container\">
            <div class=\"footer-top\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5 col-md-7 col-sm-10\">
                        <div class=\"footer-logo text-center\">
                            <a href=\"";
        // line 694
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                                <img src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.svg"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
                        <ul class=\"footer-follow text-center\">
                            <li>
                                <a href=\"https://www.facebook.com/impresionacopisteria/\">
                                    <i class=\"lni lni-facebook-filled\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"https://www.instagram.com/impresionacopisteria/\">
                                    <i class=\"lni lni-instagram-original\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"footer-widget-wrapper text-center pt-20\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">PRODUCT</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <a href=\"javascript:void(0)\">Quest</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Rift S</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Gear VR</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Apps and Games</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Apps and Games</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Oculus for Business</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">DEVELOPERS</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <a href=\"javascript:void(0)\">Developer Centre</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Docs</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Downloads</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Tools</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Developer Blog</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Developer Forums</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">PRODUCT</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <a href=\"javascript:void(0)\">Blog</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Careers</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Brand Centre</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Connect</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">PRODUCT</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <a href=\"javascript:void(0)\">VR for Good</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Launch Pad</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Creators Lab</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Forums</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 819
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 820
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 825
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 826
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 827
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 830
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 831
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
        return array (  1124 => 831,  1120 => 830,  1116 => 829,  1112 => 828,  1108 => 827,  1104 => 826,  1100 => 825,  1096 => 824,  1092 => 823,  1088 => 822,  1084 => 821,  1079 => 820,  1069 => 819,  936 => 695,  932 => 694,  542 => 307,  533 => 300,  523 => 296,  515 => 291,  511 => 290,  507 => 289,  491 => 276,  484 => 272,  477 => 267,  473 => 266,  457 => 253,  436 => 234,  428 => 230,  422 => 226,  420 => 225,  415 => 223,  407 => 217,  399 => 214,  390 => 211,  387 => 210,  383 => 209,  377 => 206,  374 => 205,  370 => 204,  352 => 191,  336 => 177,  330 => 174,  327 => 173,  321 => 170,  317 => 169,  314 => 168,  312 => 167,  296 => 154,  251 => 112,  242 => 105,  232 => 101,  224 => 96,  220 => 95,  216 => 94,  199 => 80,  192 => 75,  188 => 74,  172 => 61,  160 => 52,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
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
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Preloader Part Ends ======-->

    <!--====== Navbar Style 7 Part Start ======-->
    <div class=\"navigation\">
        <header class=\"navbar-style-7 position-relative\">
            <div class=\"container\">
                <!-- navbar mobile Start -->
                <div class=\"navbar-mobile d-lg-none\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-toggle icon-text-btn\">
                                <a class=\"icon-btn primary-icon-text mobile-menu-open-7\" href=\"javascript:void(0)\">
                                    <i class=\"mdi mdi-menu\"></i>
                                </a>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                        <div class=\"col-6\">
                            <!-- desktop logo Start -->
                            <div class=\"mobile-logo text-center\">
                                <a href=\"{{ path('index') }}\"><img src=\"images/logo.svg\" alt=\"Logo\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-cart\">
                                <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                        Cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                    <!-- navbar search start -->
                    <div class=\"navbar-search mt-15 search-style-5\">
                        <div class=\"search-input\">
                            <input type=\"text\" placeholder=\"Search\">
                        </div>
                        <div class=\"search-btn\">
                            <button><i class=\"lni lni-search-alt\"></i></button>
                        </div>
                    </div>
                    <!-- navbar search Ends -->
                </div>
                <!-- navbar mobile Start -->
            </div>
    
            <div class=\"navbar-container navbar-sidebar-7\">
                <!-- navbar close  Ends -->
                <div class=\"navbar-close d-lg-none\">
                    <a class=\"close-mobile-menu-7\" href=\"javascript:void(0)\"><i class=\"mdi mdi-close\"></i></a>
                </div>
                <!-- navbar close  Ends -->
    
                <!-- navbar top Start -->
                <div class=\"navbar-top-wrapper\">
                    <div class=\"container-lg\">
                        <div class=\"navbar-top d-lg-flex justify-content-between\">
                            <!-- navbar top left Start -->
                            <div class=\"navbar-top-left\">
                                <ul class=\"navbar-top-link\">
                                    <li><a href=\"{{ path('contacto') }}\">Contacto</a></li>
                                    <li>
                                        <a href=\"javascript:void(0)\">
                                            <i class=\"mdi mdi-phone-in-talk\"></i>
                                            +34 684 00 10 65
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar top left Ends -->
                            <!-- navbar top right Start -->
                            <div class=\"navbar-top-right\">
                                <ul class=\"navbar-top-link\">
                                    {% if app.user %}
\t\t\t\t\t\t\t\t\t\t<li>
                                            <a href=\"{{ path('logout') }}\"><i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t{{ app.user.username }}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% else %}
                                        <li>
                                            <a href=\"{{ path('login') }}\"><i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
                                        </li>
\t\t\t\t\t\t\t\t\t{% endif %}
                                </ul>
                            </div>
                            <!-- navbar top right Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar top Ends -->
    
                <!-- main navbar Start -->
                <div class=\"navbar-wrapper\">
                    <div class=\"container-lg\">
                        <nav class=\"main-navbar d-lg-flex justify-content-between align-items-center\">
                            <!-- desktop logo Start -->
                            <div class=\"desktop-logo d-none d-lg-block\">
                                <a href=\"{{ path('index') }}\"><img src=\"{{ asset('images/logo.svg') }}\" alt=\"Logo\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                            <!-- navbar menu Start -->
                            <div class=\"navbar-menu\">
                                <ul class=\"main-menu\">
                                    <li class=\"position-static menu-item-has-children\">
                                        <a href=\"#\">Categorías</a>
                                        <!-- sub mega dropdown Start -->
                                        <ul class=\"sub-mega-dropdown\">
                                            <li>
                                                <div class=\"mega-dropdown-menu\">
                                                    <ul class=\"container mega-dropdown d-flex flex-wrap\">
                                                    {% for lista in categorias %}
                                                        <li class=\"mega-dropdown-list menu-item-has-children\">  
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">{{ lista[0].nombre}}
                                                            </h6>
                                                            <ul>
                                                            {% for categoriaSecu in lista[1] %}
                                                                <li>
                                                                    <a href=\"#\">{{ categoriaSecu.nombre }}</a> 
                                                                </li>
                                                            {% endfor %}
                                                            </ul>
                                                        </li>
                                                    {% endfor %}
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- sub mega dropdown Ends -->
                                    </li>
                                    <li><a href=\"{{ path('productos') }}\">Productos</a></li>
                                    <li><a href=\"#\">Imprimir apuntes</a></li>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li class=\"menu-item-has-children\">
                                            <a href=\"#\">Administrar...</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"#\">Administrar categorías</a></li>
                                                <li><a href=\"{{ path('adminProductos') }}\">Administrar productos</a></li>
                                                <li><a href=\"#\">Administrar apuntes</a></li>
                                            </ul>
                                        </li>
                                    {% endif %}                                    
                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class=\"navbar-search-cart d-none d-lg-flex\">
                                <!-- navbar search start -->
                                <div class=\"navbar-search search-style-5\">
                                    <div class=\"search-input\">
                                        <input type=\"text\" placeholder=\"Search\">
                                    </div>
                                    <div class=\"search-btn\">
                                        <button><i class=\"lni lni-search-alt\"></i></button>
                                    </div>
                                </div>
                                <!-- navbar search Ends -->
                                <!-- navbar cart start -->
                                <div class=\"navbar-cart\">
                                    <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                        <img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
                                        <span class=\"icon-text text-style-1\">{{ unidades }}</span>
                                    </a>

                                    <div class=\"navbar-cart-dropdown\">
                                        <div class=\"checkout-style-2\">
                                            <div class=\"checkout-header d-flex justify-content-between\">
                                                <h6 class=\"title\">Shopping Cart</h6>
                                            </div>

                                            <div class=\"checkout-table\">
                                                <table class=\"table\">
                                                    <tbody>
                                                            
                                                        {% for produCesta in cesta %}
                                                            <tr>
                                                                <td class=\"checkout-product\">
                                                                    <div class=\"product-cart d-flex\">
                                                                        <div class=\"product-content media-body\">
                                                                            <h5 class=\"title\">
                                                                                <a href=\"product-details-page.html\">{{ produCesta.producto.getNombre() }}</a>
                                                                            </h5>
                                                                            <ul>
                                                                                <li>
                                                                                    <form id=\"form_seleccion\" action=\"{{ path('eliminarProductosCesta', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
                                                                                        <input type=\"submit\" class=\"delete\" value=\"Borrar\">
                                                                                            <i class=\"mdi mdi-delete\"></i>
                                                                                        </input>
                                                                                    </form>
                                                                                    
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-quantity\">
                                                                    <div class=\"product-quantity d-inline-flex\">
                                                                        <form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
                                                                            <input type=\"number\" name=\"unidades\" value=\"{{ produCesta.unidades }}\" size=\"3\">
                                                                            <input type='hidden' name='codProduc' value= \"{{ produCesta.producto.getCodigo() }}\" />
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-price\">
                                                                    <p class=\"price\">{{ produCesta.producto.getPvp() }}€</p>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Subtotal Price:</p>
                                                    <p class=\"price\">{{ precioCesta }}€</p>
                                                </div>
                                                <div class=\"checkout-btn\">
                                                    <a href=\"cart-page.html\" class=\"main-btn primary-btn-border\">View
                                                                                                                                                                    Cart</a>
                                                    <a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- navbar cart Ends -->
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- main navbar Ends -->
            </div>
            <div class=\"overlay-7\"></div>
        </header>
    </div>
    <!--====== Navbar Style 7 Part Ends ======-->

    <!--====== Header Style 1 Part Start ======-->
    <section class=\"header-style-1\">
        <div class=\"header-big\">
            <div class=\"header-items-active\">
                <div class=\"single-header-item bg_cover\"
                    style=\"background-image: url(images/header-1/header-big-1.jpg);\">
                    <div class=\"header-item-content\">
                        <h3 class=\"title\">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
                        <a href=\"javascript:void(0)\" class=\"link\">Our Valentine's Day collection</a>
                    </div>
                </div>
                <div class=\"single-header-item bg_cover\"
                    style=\"background-image: url(images/header-1/header-big-2.jpg);\">
                    <div class=\"header-item-content\">
                        <h3 class=\"title\">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
                        <a href=\"javascript:void(0)\" class=\"link\">Our Valentine's Day collection</a>
                    </div>
                </div>
                <div class=\"single-header-item bg_cover\"
                    style=\"background-image: url(images/header-1/header-big-1.jpg);\">
                    <div class=\"header-item-content\">
                        <h3 class=\"title\">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
                        <a href=\"javascript:void(0)\" class=\"link\">Our Valentine's Day collection</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header-min\">
            <div class=\"header-min-item product-style-25 bg_cover\"
                style=\"background-image: url(images/header-1/header-min-1.jpg);\">
                <div class=\"product-content\">
                    <h4 class=\"title\"><a href=\"product-details-page.html\">Metro 38 Date</a></h4>
                    <p>Reference 1102</p>
                    <a href=\"javascript:void(0)\" class=\"main-btn primary-btn-border\"> <img src=\"images/icon-svg/cart-5.svg\" alt=\"\">\$
                        399</a>
                </div>
            </div>
            <div class=\"header-min-item product-style-25 bg_cover\"
                style=\"background-image: url(images/header-1/header-min-2.jpg);\">
                <div class=\"product-content\">
                    <h4 class=\"title\"><a href=\"product-details-page.html\">Metro 38 Date</a></h4>
                    <p>Reference 1102</p>
                    <a href=\"javascript:void(0)\" class=\"main-btn primary-btn-border\"> <img src=\"images/icon-svg/cart-5.svg\" alt=\"\">\$
                        399</a>
                </div>
            </div>
        </div>
    </section>
    <!--====== Header Style 1 Part Ends ======-->

    <!--====== Content Card Style 4 Part Start ======-->
    <section class=\"content-card-style-4 pt-70 pb-100\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-7 col-sm-8\">
                    <div class=\"single-content mt-15 text-center\">
                        <div class=\"content-icon\">
                            <i class=\"mdi mdi-truck-fast\"></i>
                        </div>
                        <div class=\"content-content\">
                            <h4 class=\"title\"><a href=\"javascript:void(0)\">Two-hour delivery</a></h4>
                            <p>Available in most metros on selected in-stock products</p>
                            <a href=\"javascript:void(0)\" class=\"more\">learn more</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-7 col-sm-8\">
                    <div class=\"single-content mt-15 text-center\">
                        <div class=\"content-icon\">
                            <i class=\"mdi mdi-message-text\"></i>
                        </div>
                        <div class=\"content-content\">
                            <h4 class=\"title\"><a href=\"javascript:void(0)\">Get help buying</a></h4>
                            <p>Have a question? Call a Specialist or chat online for help</p>
                            <a href=\"contact-page.html\" class=\"more\">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-7 col-sm-8\">
                    <div class=\"single-content mt-15 text-center\">
                        <div class=\"content-icon\">
                            <i class=\"mdi mdi-ticket-percent\"></i>
                        </div>
                        <div class=\"content-content\">
                            <h4 class=\"title\"><a href=\"javascript:void(0)\">Find the card for you</a></h4>
                            <p>Get 3% Daily Cash with special financing offers from us</p>
                            <a href=\"javascript:void(0)\" class=\"more\">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Content Card Style 4 Part Ends ======-->

    <!--====== Product Style 1 Part Start ======-->
    <section class=\"product-wrapper pt-100 pb-70\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"mb-50\">
                        <h1 class=\"heading-1 font-weight-700\">Featured Items</h1>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <span class=\"icon-text text-style-1\">NEW</span>
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-1.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-2.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Metro 38 Date</a></h4>
                            <p>Reference 1102</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <span class=\"icon-text text-style-1\">20% off</span>
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-5.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-6.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Lady Shoe</a></h4>
                            <p>Reference 1103</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-3.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-4.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Casio 09 Date</a></h4>
                            <p>Reference 1112</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-7.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-8.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Man's Shoe</a></h4>
                            <p>Reference 102</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-9.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-10.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Polo T Shirt</a></h4>
                            <p>Reference 1202</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"product-style-1 mt-30\">
                        <div class=\"product-image\">
                            <span class=\"icon-text text-style-1\">40% off</span>
                            <div class=\"product-active\">
                                <div class=\"product-item active\">
                                    <img src=\"images/product-1/product-11.jpg\" alt=\"product\">
                                </div>
                                <div class=\"product-item\">
                                    <img src=\"images/product-1/product-12.jpg\" alt=\"product\">
                                </div>
                            </div>
                        </div>
                        <div class=\"product-content text-center\">
                            <h4 class=\"title\"><a href=\"product-details-page.html\">Lotto T Shirt</a></h4>
                            <p>Reference 112</p>
                            <a href=\"javascript:void(0)\" class=\"main-btn secondary-1-btn\">
                                <img src=\"images/icon-svg/cart-7.svg\" alt=\"\">
                                \$ 399
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Product Style 1 Part Ends ======-->

    <!--====== Features Part Start ======-->
    <section class=\"features-section pt-100 pb-50 gray-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"features-title text-center mb-50\">
                        <h1 class=\"heading-1 font-weight-700\">Awesome Features</h1>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-cog\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Bootstrap 5</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-code\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Clean Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-layers\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Included Business Pages</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-laptop-phone\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Fully Responsive</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-brush\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Completely Customizable</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-feature-wrapper\">
                        <div class=\"feature-icon\">
                            <i class=\"lni lni-rocket\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h5 class=\"heading-5 font-weight-500 mb-10\">Fast and Well-optimized</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Features Part Ends ======-->

    <!--====== Clients Logo Part Start ======-->
    <section class=\"clients-logo-section pt-70 pb-70\">
        <div class=\"container\">
            <div class=\"row client-logo-active\">
                <div class=\"col-lg-3\">
                    <div class=\"single-logo-wrapper\">
                        <img src=\"images/client-logo/uideck-logo.svg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"single-logo-wrapper\">
                        <img src=\"images/client-logo/graygrids-logo.svg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"single-logo-wrapper\">
                        <img src=\"images/client-logo/lineicons-logo.svg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"single-logo-wrapper\">
                        <img src=\"images/client-logo/pagebulb-logo.svg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Clients Logo Part Ends ======-->

    <!--====== Footer Style 3 Part Start ======-->
    <section class=\"footer-style-3 pt-100 pb-100\">
        <div class=\"container\">
            <div class=\"footer-top\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5 col-md-7 col-sm-10\">
                        <div class=\"footer-logo text-center\">
                            <a href=\"{{ path('index') }}\">
                                <img src=\"{{ asset('images/logo.svg') }}\" alt=\"\">
                            </a>
                        </div>
                        <h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
                        <ul class=\"footer-follow text-center\">
                            <li>
                                <a href=\"https://www.facebook.com/impresionacopisteria/\">
                                    <i class=\"lni lni-facebook-filled\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"https://www.instagram.com/impresionacopisteria/\">
                                    <i class=\"lni lni-instagram-original\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"footer-widget-wrapper text-center pt-20\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">PRODUCT</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <a href=\"javascript:void(0)\">Quest</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Rift S</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Gear VR</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Apps and Games</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Apps and Games</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Oculus for Business</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">DEVELOPERS</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <a href=\"javascript:void(0)\">Developer Centre</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Docs</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Downloads</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Tools</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Developer Blog</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Developer Forums</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">PRODUCT</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <a href=\"javascript:void(0)\">Blog</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Careers</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Brand Centre</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Connect</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">PRODUCT</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <a href=\"javascript:void(0)\">VR for Good</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Launch Pad</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Creators Lab</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Forums</a>
                                </li>
                                <li>
                                    <a href=\"javascript:void(0)\">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
{% endblock %} 

", "index.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\index.html.twig");
    }
}
