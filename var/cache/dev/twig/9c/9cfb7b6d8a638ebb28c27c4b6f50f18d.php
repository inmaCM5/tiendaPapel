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

/* contacto.html.twig */
class __TwigTemplate_c98ecbfdda522a9aaa73acd7cdb3bf3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacto.html.twig", 1);
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
                                    <span class=\"icon-text text-style-1\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 59, $this->source); })()), "html", null, true);
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
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 73
            echo "                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 78), "getNombre", [], "method", false, false, false, 78), "html", null, true);
            echo "</a>
                                                                        </h5>
                                                                        <ul>
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
                                                                    <form id=\"form_seleccion\" action=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 92), "getId", [], "method", false, false, false, 92)]), "html", null, true);
            echo "\" method=\"post\">
                                                                        <input type=\"number\" name=\"unidades\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 93), "html", null, true);
            echo "\" size=\"3\">
                                                                        <input type='hidden' name='codProduc' value= \"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 94), "getCodigo", [], "method", false, false, false, 94), "html", null, true);
            echo "\" />
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 99), "getPvp", [], "method", false, false, false, 99), "html", null, true);
            echo "€</p>
                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                                </tbody>
                                            </table>
                                        </div>

                                        <div class=\"checkout-footer\">
                                            <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                <p class=\"value\">Subtotal Price:</p>
                                                <p class=\"price\">";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 110, $this->source); })()), "html", null, true);
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
        // line 152
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
        // line 165
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "user", [], "any", false, false, false, 165)) {
            // line 166
            echo "\t\t\t\t\t\t\t\t\t\t<li>
                                            <a href=\"";
            // line 167
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "username", [], "any", false, false, false, 168), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 171
            echo "                                        <li>
                                            <a href=\"";
            // line 172
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
                                        </li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 175
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
        // line 189
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
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 202, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 203
            echo "                                                        <li class=\"mega-dropdown-list menu-item-has-children\">  
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 204), "nombre", [], "any", false, false, false, 204), "html", null, true);
            echo "
                                                            </h6>
                                                            <ul>
                                                            ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lista"], 1, [], "array", false, false, false, 207));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 208
                echo "                                                                <li>
                                                                    <a href=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosCat", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "getId", [], "method", false, false, false, 209)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 209), "html", null, true);
                echo "</a>
                                                                </li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "                                                            </ul>
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- sub mega dropdown Ends -->
                                    </li>
                                    <li><a href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\">Productos</a></li>
                                    <li><a href=\"#\">Imprimir apuntes</a></li>
                                    ";
        // line 223
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 224
            echo "                                        <li class=\"menu-item-has-children\">
                                            <a href=\"#\">Administrar...</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"#\">Administrar categorías</a></li>
                                                <li><a href=\"";
            // line 228
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProductos");
            echo "\">Administrar productos</a></li>
                                                <li><a href=\"#\">Administrar apuntes</a></li>
                                            </ul>
                                        </li>
                                    ";
        }
        // line 232
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
        // line 251
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 251, $this->source); })()), "html", null, true);
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
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 264, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 265
            echo "                                                            <tr>
                                                                <td class=\"checkout-product\">
                                                                    <div class=\"product-cart d-flex\">
                                                                        <div class=\"product-content media-body\">
                                                                            <h5 class=\"title\">
                                                                                <a href=\"product-details-page.html\">";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 270), "getNombre", [], "method", false, false, false, 270), "html", null, true);
            echo "</a>
                                                                            </h5>
                                                                            <ul>
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
                                                                        <form id=\"form_seleccion\" action=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 284), "getId", [], "method", false, false, false, 284)]), "html", null, true);
            echo "\" method=\"post\">
                                                                            <input type=\"number\" name=\"unidades\" value=\"";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 285), "html", null, true);
            echo "\" size=\"3\">
                                                                            <input type='hidden' name='codProduc' value= \"";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 286), "getCodigo", [], "method", false, false, false, 286), "html", null, true);
            echo "\" />
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-price\">
                                                                    <p class=\"price\">";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 291), "getPvp", [], "method", false, false, false, 291), "html", null, true);
            echo "€</p>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Subtotal Price:</p>
                                                    <p class=\"price\">";
        // line 302
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 302, $this->source); })()), "html", null, true);
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

    <section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Contacto</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Contacto</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"contact-wrapper pt-50 pb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"contact-style-2 mt-50\">
                        <h4 class=\"heading-4 mb-3 font-weight-500 title\">Contacte con nosotros</h4>
                        <ul class=\"contact-info\">
                            <li>
                                <div class=\"single-contact-info d-flex\">
                                    <div class=\"contact-info-icon\">
                                        <i class=\"mdi mdi-map-marker\"></i>
                                    </div>
                                    <div class=\"contact-info-content media-body\">
                                        <p>Pl. el Juncal, 6, B, 41005 Sevilla</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"single-contact-info d-flex\">
                                    <div class=\"contact-info-icon\">
                                        <i class=\"mdi mdi-email\"></i>
                                    </div>
                                    <div class=\"contact-info-content media-body\">
                                        <p>impresionacopisteria@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"single-contact-info d-flex\">
                                    <div class=\"contact-info-icon\">
                                        <i class=\"mdi mdi-phone\"></i>
                                    </div>
                                    <div class=\"contact-info-content media-body\">
                                        <p>+34 684 00 10 65</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h4 class=\"heading-4 font-weight-500 title\">Horario y redes sociales</h4>
                        <ul>
                            <li class=\"paragraph-small sub-title\">Lunes 9:00-13:30, 17:00-20:30</li>
                            <li class=\"paragraph-small sub-title\">Martes 9:00-13:30, 17:00-20:30</li>
                            <li class=\"paragraph-small sub-title\">Miércoles 9:00-13:30, 17:00-20:30</li>
                            <li class=\"paragraph-small sub-title\">Jueves 9:00-13:30, 17:00-20:30</li>
                            <li class=\"paragraph-small sub-title\">Viernes 9:00-13:30, 17:00-20:00</li>
                            <li class=\"paragraph-small sub-title\">Sábado 10:00-13:30</li>
                            <li class=\"paragraph-small sub-title\">Domingo cerrado</li>
                        </ul>
                        <div class=\"contact-social d-flex\">
                            <p>Síguenos:</p>
                            <ul class=\"social media-body\">
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
                 <div class=\"col-lg-7\">
";
        // line 414
        echo "                    <div id=\"map\">hola</div>
                 </div> 
                
            </div>
        </div>
    </section>

    <!--====== Footer Style 3 Part Start ======-->
    <section class=\"footer-style-3 pt-100 pb-100\">
        <div class=\"container\">
            <div class=\"footer-top\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5 col-md-7 col-sm-10\">
                        <div class=\"footer-logo text-center\">
                            <a href=\"";
        // line 428
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                                <img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
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

    // line 553
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 554
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mapa.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBgMqsi66T1iAti4NFIHm7ckoRoa1Lrjyc&callback=initMap&v=weekly\"
      async
    ></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  866 => 566,  862 => 565,  858 => 564,  854 => 563,  850 => 562,  846 => 561,  842 => 560,  838 => 559,  834 => 558,  830 => 557,  826 => 556,  822 => 555,  817 => 554,  807 => 553,  674 => 429,  670 => 428,  654 => 414,  571 => 332,  538 => 302,  529 => 295,  519 => 291,  511 => 286,  507 => 285,  503 => 284,  486 => 270,  479 => 265,  475 => 264,  459 => 251,  438 => 232,  430 => 228,  424 => 224,  422 => 223,  417 => 221,  409 => 215,  401 => 212,  390 => 209,  387 => 208,  383 => 207,  377 => 204,  374 => 203,  370 => 202,  352 => 189,  336 => 175,  330 => 172,  327 => 171,  321 => 168,  317 => 167,  314 => 166,  312 => 165,  296 => 152,  251 => 110,  242 => 103,  232 => 99,  224 => 94,  220 => 93,  216 => 92,  199 => 78,  192 => 73,  188 => 72,  172 => 59,  158 => 50,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
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
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Contacto</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Contacto</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"contact-wrapper pt-50 pb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"contact-style-2 mt-50\">
                        <h4 class=\"heading-4 mb-3 font-weight-500 title\">Contacte con nosotros</h4>
                        <ul class=\"contact-info\">
                            <li>
                                <div class=\"single-contact-info d-flex\">
                                    <div class=\"contact-info-icon\">
                                        <i class=\"mdi mdi-map-marker\"></i>
                                    </div>
                                    <div class=\"contact-info-content media-body\">
                                        <p>Pl. el Juncal, 6, B, 41005 Sevilla</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"single-contact-info d-flex\">
                                    <div class=\"contact-info-icon\">
                                        <i class=\"mdi mdi-email\"></i>
                                    </div>
                                    <div class=\"contact-info-content media-body\">
                                        <p>impresionacopisteria@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"single-contact-info d-flex\">
                                    <div class=\"contact-info-icon\">
                                        <i class=\"mdi mdi-phone\"></i>
                                    </div>
                                    <div class=\"contact-info-content media-body\">
                                        <p>+34 684 00 10 65</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h4 class=\"heading-4 font-weight-500 title\">Horario y redes sociales</h4>
                        <ul>
                            <li class=\"paragraph-small sub-title\">Lunes 9:00-13:30, 17:00-20:30</li>
                            <li class=\"paragraph-small sub-title\">Martes 9:00-13:30, 17:00-20:30</li>
                            <li class=\"paragraph-small sub-title\">Miércoles 9:00-13:30, 17:00-20:30</li>
                            <li class=\"paragraph-small sub-title\">Jueves 9:00-13:30, 17:00-20:30</li>
                            <li class=\"paragraph-small sub-title\">Viernes 9:00-13:30, 17:00-20:00</li>
                            <li class=\"paragraph-small sub-title\">Sábado 10:00-13:30</li>
                            <li class=\"paragraph-small sub-title\">Domingo cerrado</li>
                        </ul>
                        <div class=\"contact-social d-flex\">
                            <p>Síguenos:</p>
                            <ul class=\"social media-body\">
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
                 <div class=\"col-lg-7\">
{#                     <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12682.672708410544!2d-5.9673155!3d37.3740277!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb152915ec6c34c1f!2sImpresi%C3%B2na%2C%20Servicio%20de%20Papeler%C3%ADa%20y%20Copister%C3%ADa!5e0!3m2!1ses!2ses!4v1650362018296!5m2!1ses!2ses\" width=\"800\" height=\"650\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
 #}
                    <div id=\"map\">hola</div>
                 </div> 
                
            </div>
        </div>
    </section>

    <!--====== Footer Style 3 Part Start ======-->
    <section class=\"footer-style-3 pt-100 pb-100\">
        <div class=\"container\">
            <div class=\"footer-top\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5 col-md-7 col-sm-10\">
                        <div class=\"footer-logo text-center\">
                            <a href=\"{{ path('index') }}\">
                                <img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"\">
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
    <script src=\"{{ asset('js/mapa.js') }}\"></script>
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
    <script
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBgMqsi66T1iAti4NFIHm7ckoRoa1Lrjyc&callback=initMap&v=weekly\"
      async
    ></script>
{% endblock %} 

", "contacto.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\contacto.html.twig");
    }
}
