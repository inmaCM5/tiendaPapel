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

/* adminCategorías.html.twig */
class __TwigTemplate_ba17f17778e3e28b38f25120810f51e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminCategorías.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminCategorías.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminCategorías.html.twig", 1);
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
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
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
        // line 270
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
        // line 283
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "user", [], "any", false, false, false, 283)) {
            // line 284
            echo "\t\t\t\t\t\t\t\t\t\t<li>
                                            <a href=\"";
            // line 285
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "user", [], "any", false, false, false, 286), "username", [], "any", false, false, false, 286), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 289
            echo "                                        <li>
                                            <a href=\"";
            // line 290
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
                                        </li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 293
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
        // line 307
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
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
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 320, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 321
            echo "                                                        <li class=\"mega-dropdown-list menu-item-has-children\">  
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 322
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 322), "nombre", [], "any", false, false, false, 322), "html", null, true);
            echo "
                                                            </h6>
                                                            <ul>
                                                            ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lista"], 1, [], "array", false, false, false, 325));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 326
                echo "                                                                <li>
                                                                    <a href=\"";
                // line 327
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosCat", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "getId", [], "method", false, false, false, 327)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 327), "html", null, true);
                echo "</a>
                                                                </li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "                                                            </ul>
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- sub mega dropdown Ends -->
                                    </li>
                                    <li><a href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\">Productos</a></li>
                                    <li><a href=\"#\">Imprimir apuntes</a></li>
                                    <li><a href=\"#\">Accessories</a></li>
                                    ";
        // line 342
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 343
            echo "                                        <li class=\"menu-item-has-children\">
                                            <a href=\"#\">Administrar...</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"#\">Administrar categorías</a></li>
                                                <li><a href=\"";
            // line 347
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProductos");
            echo "\">Administrar productos</a></li>
                                                <li><a href=\"#\">Administrar apuntes</a></li>
                                            </ul>
                                        </li>
                                    ";
        }
        // line 351
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

    <section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 571
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Administrar productos</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Administrar productos</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
\t<section class=\"footer-style-3 pt-100 pb-100\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t\t\t\t\t<div class=\"footer-logo text-center\">
\t\t\t\t\t\t\t<a href=\"";
        // line 591
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
\t\t\t\t\t\t<ul class=\"footer-follow text-center\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-original\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-widget-wrapper text-center pt-20\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Quest</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Rift S</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Gear VR</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Oculus for Business</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">DEVELOPERS</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Centre</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Docs</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Downloads</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Tools</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Blog</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Forums</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Blog</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Careers</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Brand Centre</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Connect</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">VR for Good</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Launch Pad</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Creators Lab</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Forums</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Support</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-copyright text-center\">
\t\t\t\t<p>Developed by
\t\t\t\t\t<a href=\"https://graygrids.com/\" rel=\"nofollow\" target=\"_blank\">GrayGrids</a>. Basesd on
\t\t\t\t\t<a href=\"https://ecommercehtml.com/\" rel=\"nofollow\" target=\"_blank\">eCommerceHTML</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 722
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 723
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 726
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "adminCategorías.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  969 => 734,  965 => 733,  961 => 732,  957 => 731,  953 => 730,  949 => 729,  945 => 728,  941 => 727,  937 => 726,  933 => 725,  929 => 724,  924 => 723,  914 => 722,  775 => 592,  771 => 591,  748 => 571,  526 => 351,  518 => 347,  512 => 343,  510 => 342,  504 => 339,  496 => 333,  488 => 330,  477 => 327,  474 => 326,  470 => 325,  464 => 322,  461 => 321,  457 => 320,  439 => 307,  423 => 293,  417 => 290,  414 => 289,  408 => 286,  404 => 285,  401 => 284,  399 => 283,  383 => 270,  158 => 50,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
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
                                <a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
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
                                <a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
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
                                                                    <a href=\"{{ path('productosCat', {'categoria': categoriaSecu.getId()}) }}\">{{ categoriaSecu.nombre }}</a>
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
                                    <li><a href=\"#\">Accessories</a></li>
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

    <section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"{{ path('index') }}\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Administrar productos</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Administrar productos</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
\t<section class=\"footer-style-3 pt-100 pb-100\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t\t\t\t\t<div class=\"footer-logo text-center\">
\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
\t\t\t\t\t\t<ul class=\"footer-follow text-center\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-original\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-widget-wrapper text-center pt-20\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Quest</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Rift S</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Gear VR</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Oculus for Business</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">DEVELOPERS</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Centre</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Docs</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Downloads</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Tools</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Blog</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Forums</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Blog</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Careers</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Brand Centre</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Connect</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">VR for Good</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Launch Pad</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Creators Lab</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Forums</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Support</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-copyright text-center\">
\t\t\t\t<p>Developed by
\t\t\t\t\t<a href=\"https://graygrids.com/\" rel=\"nofollow\" target=\"_blank\">GrayGrids</a>. Basesd on
\t\t\t\t\t<a href=\"https://ecommercehtml.com/\" rel=\"nofollow\" target=\"_blank\">eCommerceHTML</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</section>
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
{% endblock %}", "adminCategorías.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\adminCategorías.html.twig");
    }
}
