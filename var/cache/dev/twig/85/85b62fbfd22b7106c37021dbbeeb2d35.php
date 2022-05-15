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

/* menu.html.twig */
class __TwigTemplate_fe17d8425b06e1d9961915563e79ef48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menu.html.twig", 1);
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
        echo "    ";
        // line 31
        echo "    <!--====== Preloader Part Ends ======-->

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
                                <a href=\"index.html\"><img src=\"images/logo.svg\" alt=\"Logo\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-cart\">
                                <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                    <img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
                                    <span class=\"icon-text text-style-1\">88</span>
                                </a>
    
                                <div class=\"navbar-cart-dropdown\">
                                    <div class=\"checkout-style-2\">
                                        <div class=\"checkout-header d-flex justify-content-between\">
                                            <h6 class=\"title\">Shopping Cart</h6>
                                        </div>
    
                                        <div class=\"checkout-table table-responsive\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"checkout-product\">
                                                            <div class=\"product-cart d-flex\">
                                                                <div class=\"product-thumb\">
                                                                    <img src=\"images/product-cart/product-1.png\"
                                                                        alt=\"Product\">
                                                                </div>
                                                                <div class=\"product-content media-body\">
                                                                    <h5 class=\"title\">
                                                                        <a href=\"product-details-page.html\">Hollow Port</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Brown</span></li>
                                                                        <li><span>XL</span></li>
                                                                        <li>
                                                                            <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                <i class=\"mdi mdi-delete\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-quantity\">
                                                            <div class=\"product-quantity d-inline-flex\">
                                                                <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                    <i class=\"mdi mdi-minus\"></i>
                                                                </button>
                                                                <input type=\"text\" value=\"1\">
                                                                <button type=\"button\" id=\"add\" class=\"add\">
                                                                    <i class=\"mdi mdi-plus\"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-price\">
                                                            <p class=\"price\">\$36.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"checkout-product\">
                                                            <div class=\"product-cart d-flex\">
                                                                <div class=\"product-thumb\">
                                                                    <img src=\"images/product-cart/product-2.png\"
                                                                        alt=\"Product\">
                                                                </div>
                                                                <div class=\"product-content media-body\">
                                                                    <h5 class=\"title\">
                                                                        <a href=\"product-details-page.html\">Mist Black Triblend</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Brown</span></li>
                                                                        <li><span>XL</span></li>
                                                                        <li>
                                                                            <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                <i class=\"mdi mdi-delete\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-quantity\">
                                                            <div class=\"product-quantity d-inline-flex\">
                                                                <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                    <i class=\"mdi mdi-minus\"></i>
                                                                </button>
                                                                <input type=\"text\" value=\"1\">
                                                                <button type=\"button\" id=\"add\" class=\"add\">
                                                                    <i class=\"mdi mdi-plus\"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-price\">
                                                            <p class=\"price\">\$36.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"checkout-product\">
                                                            <div class=\"product-cart d-flex\">
                                                                <div class=\"product-thumb\">
                                                                    <img src=\"images/product-cart/product-3.png\"
                                                                        alt=\"Product\">
                                                                </div>
                                                                <div class=\"product-content media-body\">
                                                                    <h5 class=\"title\">
                                                                        <a href=\"product-details-page.html\">Realm Bone</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Brown</span></li>
                                                                        <li><span>XL</span></li>
                                                                        <li>
                                                                            <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                <i class=\"mdi mdi-delete\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-quantity\">
                                                            <div class=\"product-quantity d-inline-flex\">
                                                                <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                    <i class=\"mdi mdi-minus\"></i>
                                                                </button>
                                                                <input type=\"text\" value=\"1\">
                                                                <button type=\"button\" id=\"add\" class=\"add\">
                                                                    <i class=\"mdi mdi-plus\"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-price\">
                                                            <p class=\"price\">\$36.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"checkout-product\">
                                                            <div class=\"product-cart d-flex\">
                                                                <div class=\"product-thumb\">
                                                                    <img src=\"images/product-cart/product-4.png\"
                                                                        alt=\"Product\">
                                                                </div>
                                                                <div class=\"product-content media-body\">
                                                                    <h5 class=\"title\">
                                                                        <a href=\"product-details-page.html\">Circular Sienna</a></h5>
                                                                    <ul>
                                                                        <li><span>Brown</span></li>
                                                                        <li><span>XL</span></li>
                                                                        <li>
                                                                            <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                <i class=\"mdi mdi-delete\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-quantity\">
                                                            <div class=\"product-quantity d-inline-flex\">
                                                                <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                    <i class=\"mdi mdi-minus\"></i>
                                                                </button>
                                                                <input type=\"text\" value=\"1\">
                                                                <button type=\"button\" id=\"add\" class=\"add\">
                                                                    <i class=\"mdi mdi-plus\"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-price\">
                                                            <p class=\"price\">\$36.00</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
    
                                        <div class=\"checkout-footer\">
                                            <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                <p class=\"value\">Subtotal Price:</p>
                                                <p class=\"price\">\$144</p>
                                            </div>
                                            <div class=\"checkout-btn\">
                                                <a href=\"cart-page.html\" class=\"main-btn primary-btn-border\">View Cart</a>
                                                <a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                    <!-- navbar search start -->
                    <div class=\"navbar-search mt-15 search-style-5\">
                        <div class=\"search-select\">
                            <select>
                                <option value=\"\">All</option>
                                <option value=\"1\">option 01</option>
                                <option value=\"2\">option 02</option>
                                <option value=\"3\">option 03</option>
                                <option value=\"4\">option 04</option>
                                <option value=\"5\">option 05</option>
                            </select>
                        </div>
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
                                    <li><a href=\"about-page.html\">About</a></li>
                                    <li><a href=\"contact-page.html\">Contact</a></li>
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
        // line 296
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 296, $this->source); })()), "user", [], "any", false, false, false, 296)) {
            // line 297
            echo "\t\t\t\t\t\t\t\t\t\t<li>
                                            <a href=\"";
            // line 298
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "user", [], "any", false, false, false, 299), "username", [], "any", false, false, false, 299), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 302
            echo "                                        <li>
                                            <a href=\"";
            // line 303
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
                                        </li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 306
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
                                <a href=\"index.html\"><img src=\"images/logo.svg\" alt=\"Logo\"></a>
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
                                                        <li class=\"mega-dropdown-list menu-item-has-children\">
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">New Arrivals
                                                            </h6>
                                                            <ul>
                                                                <li><a href=\"category.html\">Dresses</a></li>
                                                                <li><a href=\"category.html\">Jackets</a></li>
                                                                <li><a href=\"category.html\">Hoodies & Sweatshirts</a></li>
                                                                <li><a href=\"category.html\">Sweaters</a></li>
                                                                <li><a href=\"category.html\">Tops & Tees</a></li>
                                                                <li><a href=\"category.html\">Party Dresses</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class=\"mega-dropdown-list menu-item-has-children\">
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">Trending</h6>
                                                            <ul>
                                                                <li><a href=\"category.html\">Dresses</a></li>
                                                                <li><a href=\"category.html\">Jackets</a></li>
                                                                <li><a href=\"category.html\">Hoodies & Sweatshirts</a></li>
                                                                <li><a href=\"category.html\">Sweaters</a></li>
                                                                <li><a href=\"category.html\">Tops & Tees</a></li>
                                                                <li><a href=\"category.html\">Party Dresses</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class=\"mega-dropdown-list menu-item-has-children\">
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">Accessories
                                                            </h6>
                                                            <ul>
                                                                <li><a href=\"category.html\">Hoodies & Sweatshirts</a></li>
                                                                <li><a href=\"category.html\">Jackets & Coats</a></li>
                                                                <li><a href=\"category.html\">Pants</a></li>
                                                                <li><a href=\"category.html\">Jeans</a></li>
                                                                <li><a href=\"category.html\">Tops & Tees</a></li>
                                                                <li><a href=\"category.html\">Casual Shorts</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class=\"mega-dropdown-list\">
                                                            <img src=\"images/menu-slider-1.png\" alt=\"\">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- sub mega dropdown Ends -->
                                    </li>
                                    <li><a href=\"";
        // line 377
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\">Productos</a></li>
                                    <li><a href=\"#\">Imprimir apuntes</a></li>
                                    <li><a href=\"#\">Accessories</a></li>
                                    <li class=\"menu-item-has-children\">
                                        <a href=\"#\">Pages</a>
                                        <!-- sub menu Start -->
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"about-page.html\">About Page</a></li>
                                            <li><a href=\"account-page.html\">Account Page</a></li>
                                            <li><a href=\"cart-page.html\">Cart Page</a></li>
                                            <li><a href=\"category.html\">Category Page</a></li>
                                            <li><a href=\"checkout-page.html\">Checkout Page</a></li>
                                            <li><a href=\"contact-page.html\">Contact Page</a></li>
                                            <li><a href=\"login-page.html\">Log In Page</a></li>
                                            <li><a href=\"product-details-page.html\">Product Details Page</a></li>
                                            <li><a href=\"signup-page.html\">Sign Up Page</a></li>
                                        </ul>
                                        <!-- sub menu Ends -->
                                    </li>
                                    ";
        // line 396
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 397
            echo "                                        <li><a href=\"#\">Administrar categorías</a></li>
                                        <li><a href=\"";
            // line 398
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProductos");
            echo "\">Administrar productos</a></li>
                                        <li><a href=\"#\">Administrar apuntes</a></li>
                                    ";
        }
        // line 401
        echo "                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class=\"navbar-search-cart d-none d-lg-flex\">
                                <!-- navbar search start -->
                                <div class=\"navbar-search search-style-5\">
                                    <div class=\"search-select\">
                                        <select>
                                            <option value=\"\">All</option>
                                            <option value=\"1\">option 01</option>
                                            <option value=\"2\">option 02</option>
                                            <option value=\"3\">option 03</option>
                                            <option value=\"4\">option 04</option>
                                            <option value=\"5\">option 05</option>
                                        </select>
                                    </div>
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
                                        <span class=\"icon-text text-style-1\">88</span>
                                    </a>
    
                                    <div class=\"navbar-cart-dropdown\">
                                        <div class=\"checkout-style-2\">
                                            <div class=\"checkout-header d-flex justify-content-between\">
                                                <h6 class=\"title\">Shopping Cart</h6>
                                            </div>
    
                                            <div class=\"checkout-table\">
                                                <table class=\"table\">
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-thumb\">
                                                                        <img src=\"images/product-cart/product-1.png\"
                                                                            alt=\"Product\">
                                                                    </div>
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">Hollow Port</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Brown</span></li>
                                                                            <li><span>XL</span></li>
                                                                            <li>
                                                                                <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                    <i class=\"mdi mdi-delete\"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                        <i class=\"mdi mdi-minus\"></i>
                                                                    </button>
                                                                    <input type=\"text\" value=\"1\">
                                                                    <button type=\"button\" id=\"add\" class=\"add\">
                                                                        <i class=\"mdi mdi-plus\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">\$36.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-thumb\">
                                                                        <img src=\"images/product-cart/product-2.png\"
                                                                            alt=\"Product\">
                                                                    </div>
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">Mist Black Triblend</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Brown</span></li>
                                                                            <li><span>XL</span></li>
                                                                            <li>
                                                                                <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                    <i class=\"mdi mdi-delete\"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                        <i class=\"mdi mdi-minus\"></i>
                                                                    </button>
                                                                    <input type=\"text\" value=\"1\">
                                                                    <button type=\"button\" id=\"add\" class=\"add\">
                                                                        <i class=\"mdi mdi-plus\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">\$36.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-thumb\">
                                                                        <img src=\"images/product-cart/product-3.png\"
                                                                            alt=\"Product\">
                                                                    </div>
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">Realm Bone</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Brown</span></li>
                                                                            <li><span>XL</span></li>
                                                                            <li>
                                                                                <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                    <i class=\"mdi mdi-delete\"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                        <i class=\"mdi mdi-minus\"></i>
                                                                    </button>
                                                                    <input type=\"text\" value=\"1\">
                                                                    <button type=\"button\" id=\"add\" class=\"add\">
                                                                        <i class=\"mdi mdi-plus\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">\$36.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-thumb\">
                                                                        <img src=\"images/product-cart/product-4.png\"
                                                                            alt=\"Product\">
                                                                    </div>
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">Circular Sienna</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Brown</span></li>
                                                                            <li><span>XL</span></li>
                                                                            <li>
                                                                                <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                    <i class=\"mdi mdi-delete\"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                        <i class=\"mdi mdi-minus\"></i>
                                                                    </button>
                                                                    <input type=\"text\" value=\"1\">
                                                                    <button type=\"button\" id=\"add\" class=\"add\">
                                                                        <i class=\"mdi mdi-plus\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">\$36.00</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
    
                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Subtotal Price:</p>
                                                    <p class=\"price\">\$144</p>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 624
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 625
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 636,  802 => 635,  798 => 634,  794 => 633,  790 => 632,  786 => 631,  782 => 630,  778 => 629,  774 => 628,  770 => 627,  766 => 626,  761 => 625,  751 => 624,  520 => 401,  514 => 398,  511 => 397,  509 => 396,  487 => 377,  414 => 306,  408 => 303,  405 => 302,  399 => 299,  395 => 298,  392 => 297,  390 => 296,  123 => 31,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
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
    {# <div class=\"preloader\">
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
    </div> #}
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
                                <a href=\"index.html\"><img src=\"images/logo.svg\" alt=\"Logo\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-cart\">
                                <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                    <img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
                                    <span class=\"icon-text text-style-1\">88</span>
                                </a>
    
                                <div class=\"navbar-cart-dropdown\">
                                    <div class=\"checkout-style-2\">
                                        <div class=\"checkout-header d-flex justify-content-between\">
                                            <h6 class=\"title\">Shopping Cart</h6>
                                        </div>
    
                                        <div class=\"checkout-table table-responsive\">
                                            <table class=\"table\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"checkout-product\">
                                                            <div class=\"product-cart d-flex\">
                                                                <div class=\"product-thumb\">
                                                                    <img src=\"images/product-cart/product-1.png\"
                                                                        alt=\"Product\">
                                                                </div>
                                                                <div class=\"product-content media-body\">
                                                                    <h5 class=\"title\">
                                                                        <a href=\"product-details-page.html\">Hollow Port</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Brown</span></li>
                                                                        <li><span>XL</span></li>
                                                                        <li>
                                                                            <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                <i class=\"mdi mdi-delete\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-quantity\">
                                                            <div class=\"product-quantity d-inline-flex\">
                                                                <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                    <i class=\"mdi mdi-minus\"></i>
                                                                </button>
                                                                <input type=\"text\" value=\"1\">
                                                                <button type=\"button\" id=\"add\" class=\"add\">
                                                                    <i class=\"mdi mdi-plus\"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-price\">
                                                            <p class=\"price\">\$36.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"checkout-product\">
                                                            <div class=\"product-cart d-flex\">
                                                                <div class=\"product-thumb\">
                                                                    <img src=\"images/product-cart/product-2.png\"
                                                                        alt=\"Product\">
                                                                </div>
                                                                <div class=\"product-content media-body\">
                                                                    <h5 class=\"title\">
                                                                        <a href=\"product-details-page.html\">Mist Black Triblend</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Brown</span></li>
                                                                        <li><span>XL</span></li>
                                                                        <li>
                                                                            <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                <i class=\"mdi mdi-delete\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-quantity\">
                                                            <div class=\"product-quantity d-inline-flex\">
                                                                <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                    <i class=\"mdi mdi-minus\"></i>
                                                                </button>
                                                                <input type=\"text\" value=\"1\">
                                                                <button type=\"button\" id=\"add\" class=\"add\">
                                                                    <i class=\"mdi mdi-plus\"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-price\">
                                                            <p class=\"price\">\$36.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"checkout-product\">
                                                            <div class=\"product-cart d-flex\">
                                                                <div class=\"product-thumb\">
                                                                    <img src=\"images/product-cart/product-3.png\"
                                                                        alt=\"Product\">
                                                                </div>
                                                                <div class=\"product-content media-body\">
                                                                    <h5 class=\"title\">
                                                                        <a href=\"product-details-page.html\">Realm Bone</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Brown</span></li>
                                                                        <li><span>XL</span></li>
                                                                        <li>
                                                                            <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                <i class=\"mdi mdi-delete\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-quantity\">
                                                            <div class=\"product-quantity d-inline-flex\">
                                                                <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                    <i class=\"mdi mdi-minus\"></i>
                                                                </button>
                                                                <input type=\"text\" value=\"1\">
                                                                <button type=\"button\" id=\"add\" class=\"add\">
                                                                    <i class=\"mdi mdi-plus\"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-price\">
                                                            <p class=\"price\">\$36.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"checkout-product\">
                                                            <div class=\"product-cart d-flex\">
                                                                <div class=\"product-thumb\">
                                                                    <img src=\"images/product-cart/product-4.png\"
                                                                        alt=\"Product\">
                                                                </div>
                                                                <div class=\"product-content media-body\">
                                                                    <h5 class=\"title\">
                                                                        <a href=\"product-details-page.html\">Circular Sienna</a></h5>
                                                                    <ul>
                                                                        <li><span>Brown</span></li>
                                                                        <li><span>XL</span></li>
                                                                        <li>
                                                                            <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                <i class=\"mdi mdi-delete\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-quantity\">
                                                            <div class=\"product-quantity d-inline-flex\">
                                                                <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                    <i class=\"mdi mdi-minus\"></i>
                                                                </button>
                                                                <input type=\"text\" value=\"1\">
                                                                <button type=\"button\" id=\"add\" class=\"add\">
                                                                    <i class=\"mdi mdi-plus\"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class=\"checkout-price\">
                                                            <p class=\"price\">\$36.00</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
    
                                        <div class=\"checkout-footer\">
                                            <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                <p class=\"value\">Subtotal Price:</p>
                                                <p class=\"price\">\$144</p>
                                            </div>
                                            <div class=\"checkout-btn\">
                                                <a href=\"cart-page.html\" class=\"main-btn primary-btn-border\">View Cart</a>
                                                <a href=\"checkout-page.html\" class=\"main-btn primary-btn\">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                    <!-- navbar search start -->
                    <div class=\"navbar-search mt-15 search-style-5\">
                        <div class=\"search-select\">
                            <select>
                                <option value=\"\">All</option>
                                <option value=\"1\">option 01</option>
                                <option value=\"2\">option 02</option>
                                <option value=\"3\">option 03</option>
                                <option value=\"4\">option 04</option>
                                <option value=\"5\">option 05</option>
                            </select>
                        </div>
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
                                    <li><a href=\"about-page.html\">About</a></li>
                                    <li><a href=\"contact-page.html\">Contact</a></li>
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
                                <a href=\"index.html\"><img src=\"images/logo.svg\" alt=\"Logo\"></a>
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
                                                        <li class=\"mega-dropdown-list menu-item-has-children\">
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">New Arrivals
                                                            </h6>
                                                            <ul>
                                                                <li><a href=\"category.html\">Dresses</a></li>
                                                                <li><a href=\"category.html\">Jackets</a></li>
                                                                <li><a href=\"category.html\">Hoodies & Sweatshirts</a></li>
                                                                <li><a href=\"category.html\">Sweaters</a></li>
                                                                <li><a href=\"category.html\">Tops & Tees</a></li>
                                                                <li><a href=\"category.html\">Party Dresses</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class=\"mega-dropdown-list menu-item-has-children\">
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">Trending</h6>
                                                            <ul>
                                                                <li><a href=\"category.html\">Dresses</a></li>
                                                                <li><a href=\"category.html\">Jackets</a></li>
                                                                <li><a href=\"category.html\">Hoodies & Sweatshirts</a></li>
                                                                <li><a href=\"category.html\">Sweaters</a></li>
                                                                <li><a href=\"category.html\">Tops & Tees</a></li>
                                                                <li><a href=\"category.html\">Party Dresses</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class=\"mega-dropdown-list menu-item-has-children\">
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">Accessories
                                                            </h6>
                                                            <ul>
                                                                <li><a href=\"category.html\">Hoodies & Sweatshirts</a></li>
                                                                <li><a href=\"category.html\">Jackets & Coats</a></li>
                                                                <li><a href=\"category.html\">Pants</a></li>
                                                                <li><a href=\"category.html\">Jeans</a></li>
                                                                <li><a href=\"category.html\">Tops & Tees</a></li>
                                                                <li><a href=\"category.html\">Casual Shorts</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class=\"mega-dropdown-list\">
                                                            <img src=\"images/menu-slider-1.png\" alt=\"\">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- sub mega dropdown Ends -->
                                    </li>
                                    <li><a href=\"{{ path('productos') }}\">Productos</a></li>
                                    <li><a href=\"#\">Imprimir apuntes</a></li>
                                    <li><a href=\"#\">Accessories</a></li>
                                    <li class=\"menu-item-has-children\">
                                        <a href=\"#\">Pages</a>
                                        <!-- sub menu Start -->
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"about-page.html\">About Page</a></li>
                                            <li><a href=\"account-page.html\">Account Page</a></li>
                                            <li><a href=\"cart-page.html\">Cart Page</a></li>
                                            <li><a href=\"category.html\">Category Page</a></li>
                                            <li><a href=\"checkout-page.html\">Checkout Page</a></li>
                                            <li><a href=\"contact-page.html\">Contact Page</a></li>
                                            <li><a href=\"login-page.html\">Log In Page</a></li>
                                            <li><a href=\"product-details-page.html\">Product Details Page</a></li>
                                            <li><a href=\"signup-page.html\">Sign Up Page</a></li>
                                        </ul>
                                        <!-- sub menu Ends -->
                                    </li>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li><a href=\"#\">Administrar categorías</a></li>
                                        <li><a href=\"{{ path('adminProductos') }}\">Administrar productos</a></li>
                                        <li><a href=\"#\">Administrar apuntes</a></li>
                                    {% endif %}
                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class=\"navbar-search-cart d-none d-lg-flex\">
                                <!-- navbar search start -->
                                <div class=\"navbar-search search-style-5\">
                                    <div class=\"search-select\">
                                        <select>
                                            <option value=\"\">All</option>
                                            <option value=\"1\">option 01</option>
                                            <option value=\"2\">option 02</option>
                                            <option value=\"3\">option 03</option>
                                            <option value=\"4\">option 04</option>
                                            <option value=\"5\">option 05</option>
                                        </select>
                                    </div>
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
                                        <span class=\"icon-text text-style-1\">88</span>
                                    </a>
    
                                    <div class=\"navbar-cart-dropdown\">
                                        <div class=\"checkout-style-2\">
                                            <div class=\"checkout-header d-flex justify-content-between\">
                                                <h6 class=\"title\">Shopping Cart</h6>
                                            </div>
    
                                            <div class=\"checkout-table\">
                                                <table class=\"table\">
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-thumb\">
                                                                        <img src=\"images/product-cart/product-1.png\"
                                                                            alt=\"Product\">
                                                                    </div>
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">Hollow Port</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Brown</span></li>
                                                                            <li><span>XL</span></li>
                                                                            <li>
                                                                                <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                    <i class=\"mdi mdi-delete\"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                        <i class=\"mdi mdi-minus\"></i>
                                                                    </button>
                                                                    <input type=\"text\" value=\"1\">
                                                                    <button type=\"button\" id=\"add\" class=\"add\">
                                                                        <i class=\"mdi mdi-plus\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">\$36.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-thumb\">
                                                                        <img src=\"images/product-cart/product-2.png\"
                                                                            alt=\"Product\">
                                                                    </div>
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">Mist Black Triblend</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Brown</span></li>
                                                                            <li><span>XL</span></li>
                                                                            <li>
                                                                                <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                    <i class=\"mdi mdi-delete\"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                        <i class=\"mdi mdi-minus\"></i>
                                                                    </button>
                                                                    <input type=\"text\" value=\"1\">
                                                                    <button type=\"button\" id=\"add\" class=\"add\">
                                                                        <i class=\"mdi mdi-plus\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">\$36.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-thumb\">
                                                                        <img src=\"images/product-cart/product-3.png\"
                                                                            alt=\"Product\">
                                                                    </div>
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">Realm Bone</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Brown</span></li>
                                                                            <li><span>XL</span></li>
                                                                            <li>
                                                                                <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                    <i class=\"mdi mdi-delete\"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                        <i class=\"mdi mdi-minus\"></i>
                                                                    </button>
                                                                    <input type=\"text\" value=\"1\">
                                                                    <button type=\"button\" id=\"add\" class=\"add\">
                                                                        <i class=\"mdi mdi-plus\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">\$36.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-thumb\">
                                                                        <img src=\"images/product-cart/product-4.png\"
                                                                            alt=\"Product\">
                                                                    </div>
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">Circular Sienna</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Brown</span></li>
                                                                            <li><span>XL</span></li>
                                                                            <li>
                                                                                <a class=\"delete\" href=\"javascript:void(0)\">
                                                                                    <i class=\"mdi mdi-delete\"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <button type=\"button\" id=\"sub\" class=\"sub\">
                                                                        <i class=\"mdi mdi-minus\"></i>
                                                                    </button>
                                                                    <input type=\"text\" value=\"1\">
                                                                    <button type=\"button\" id=\"add\" class=\"add\">
                                                                        <i class=\"mdi mdi-plus\"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">\$36.00</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
    
                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Subtotal Price:</p>
                                                    <p class=\"price\">\$144</p>
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

", "menu.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\menu.html.twig");
    }
}
