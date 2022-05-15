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

/* indexAdmin.html.twig */
class __TwigTemplate_f1f260d7ae7fe3d8ef703836e804518b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "indexAdmin.html.twig", 1);
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
        echo "\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
\t<link href=\"css/slick.css\" rel=\"stylesheet\">
\t<link href=\"css/slick-theme.css\" rel=\"stylesheet\">
\t<link href=\"css/style.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 13
        echo "\t<div class=\"header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<nav class=\"navbar bg-light\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-bag\"></i>Best Selling</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square\"></i>New Arrivals</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-female\"></i>Fashion & Beauty</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-child\"></i>Kids & Babies Clothes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tshirt\"></i>Men & Women Clothes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-mobile-alt\"></i>Gadgets & Accessories</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-microchip\"></i>Electronics & Accessories</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"header-slider normal-slider\">
\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t<img src=\"img/slider-1.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t<img src=\"img/slider-2.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t<img src=\"img/slider-3.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"header-img\">
\t\t\t\t\t\t<div class=\"img-item\">
\t\t\t\t\t\t\t<img src=\"img/category-1.jpg\"/>
\t\t\t\t\t\t\t<a class=\"img-text\" href=\"\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"img-item\">
\t\t\t\t\t\t\t<img src=\"img/category-2.jpg\"/>
\t\t\t\t\t\t\t<a class=\"img-text\" href=\"\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!-- Main Slider End --><!-- Brand Start --><div class=\"brand\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"brand-slider\">
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-1.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-2.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-3.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-4.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-5.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-6.png\" alt=\"\"></div>
\t\t\t</div>
\t\t</div>
\t</div><!-- Brand End --><!-- Feature Start--><div class=\"feature\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 feature-col\">
\t\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t\t<i class=\"fab fa-cc-mastercard\"></i>
\t\t\t\t\t\t<h2>Secure Payment</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur elit
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 feature-col\">
\t\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t\t<i class=\"fa fa-truck\"></i>
\t\t\t\t\t\t<h2>Worldwide Delivery</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur elit
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 feature-col\">
\t\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t\t<i class=\"fa fa-sync-alt\"></i>
\t\t\t\t\t\t<h2>90 Days Return</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur elit
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 feature-col\">
\t\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t<h2>24/7 Support</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur elit
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!-- Feature End--><!-- Category Start--><div class=\"category\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"category-item ch-400\">
\t\t\t\t\t\t<img src=\"img/category-3.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"category-item ch-250\">
\t\t\t\t\t\t<img src=\"img/category-4.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"category-item ch-150\">
\t\t\t\t\t\t<img src=\"img/category-5.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"category-item ch-150\">
\t\t\t\t\t\t<img src=\"img/category-6.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"category-item ch-250\">
\t\t\t\t\t\t<img src=\"img/category-7.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"category-item ch-400\">
\t\t\t\t\t\t<img src=\"img/category-8.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"call-to-action\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h1>call us for any queries</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<a href=\"tel:684001065\">+34 684 00 10 65</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!-- Call to Action End --><!-- Featured Product Start --><div class=\"featured-product product\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"section-header\">
\t\t\t\t<h1>Featured Product</h1>
\t\t\t</div>
\t\t\t<div class=\"row align-items-center product-slider product-slider-4\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"img/product-1.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-2.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-3.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-4.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-5.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"newsletter\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h1>Subscribe Our Newsletter</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form\">
\t\t\t\t\t\t<input type=\"email\" value=\"Your email here\">
\t\t\t\t\t\t<button>Submit</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"recent-product product\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"section-header\">
\t\t\t\t<h1>Recent Product</h1>
\t\t\t</div>
\t\t\t<div class=\"row align-items-center product-slider product-slider-4\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-6.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-7.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-8.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-9.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-10.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"review\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row align-items-center review-slider normal-slider\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t<img src=\"img/review-1.jpg\" alt=\"Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t<img src=\"img/review-2.jpg\" alt=\"Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t<img src=\"img/review-3.jpg\" alt=\"Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2>Get in Touch</h2>
\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>Pl. el Juncal, 6, B, 41005 Sevilla</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>impresionacopisteria@gmail.comgital.es</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>+34 684 00 10 65</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2>Follow Us</h2>
\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2>Company Info</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Terms & Condition</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2>Purchase Info</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Pyament Policy</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Shipping Policy</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Return Policy</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row payment align-items-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"payment-method\">
\t\t\t\t\t\t<h2>We Accept:</h2>
\t\t\t\t\t\t<img src=\"img/payment-method.png\" alt=\"Payment Method\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"payment-security\">
\t\t\t\t\t\t<h2>Secured By:</h2>
\t\t\t\t\t\t<img src=\"img/godaddy.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t<img src=\"img/norton.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t<img src=\"img/ssl.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<a href=\"#\" class=\"back-to-top\">
\t\t<i class=\"fa fa-chevron-up\"></i>
\t</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 754
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 755
        echo "\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t<script src=\"js/easing.min.js\"></script>
\t<script src=\"js/slick.min.js\"></script>
\t<script src=\"js/main.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  855 => 755,  845 => 754,  96 => 13,  86 => 12,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
\t<link href=\"css/slick.css\" rel=\"stylesheet\">
\t<link href=\"css/slick-theme.css\" rel=\"stylesheet\">
\t<link href=\"css/style.css\" rel=\"stylesheet\">
{% endblock %}

{% block contenido %}
\t<div class=\"header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<nav class=\"navbar bg-light\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-bag\"></i>Best Selling</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-square\"></i>New Arrivals</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-female\"></i>Fashion & Beauty</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-child\"></i>Kids & Babies Clothes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tshirt\"></i>Men & Women Clothes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-mobile-alt\"></i>Gadgets & Accessories</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-microchip\"></i>Electronics & Accessories</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"header-slider normal-slider\">
\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t<img src=\"img/slider-1.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t<img src=\"img/slider-2.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t<img src=\"img/slider-3.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"header-img\">
\t\t\t\t\t\t<div class=\"img-item\">
\t\t\t\t\t\t\t<img src=\"img/category-1.jpg\"/>
\t\t\t\t\t\t\t<a class=\"img-text\" href=\"\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"img-item\">
\t\t\t\t\t\t\t<img src=\"img/category-2.jpg\"/>
\t\t\t\t\t\t\t<a class=\"img-text\" href=\"\">
\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!-- Main Slider End --><!-- Brand Start --><div class=\"brand\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"brand-slider\">
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-1.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-2.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-3.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-4.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-5.png\" alt=\"\"></div>
\t\t\t\t<div class=\"brand-item\"><img src=\"img/brand-6.png\" alt=\"\"></div>
\t\t\t</div>
\t\t</div>
\t</div><!-- Brand End --><!-- Feature Start--><div class=\"feature\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 feature-col\">
\t\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t\t<i class=\"fab fa-cc-mastercard\"></i>
\t\t\t\t\t\t<h2>Secure Payment</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur elit
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 feature-col\">
\t\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t\t<i class=\"fa fa-truck\"></i>
\t\t\t\t\t\t<h2>Worldwide Delivery</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur elit
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 feature-col\">
\t\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t\t<i class=\"fa fa-sync-alt\"></i>
\t\t\t\t\t\t<h2>90 Days Return</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur elit
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 feature-col\">
\t\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t\t<i class=\"fa fa-comments\"></i>
\t\t\t\t\t\t<h2>24/7 Support</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet consectetur elit
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!-- Feature End--><!-- Category Start--><div class=\"category\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"category-item ch-400\">
\t\t\t\t\t\t<img src=\"img/category-3.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"category-item ch-250\">
\t\t\t\t\t\t<img src=\"img/category-4.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"category-item ch-150\">
\t\t\t\t\t\t<img src=\"img/category-5.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"category-item ch-150\">
\t\t\t\t\t\t<img src=\"img/category-6.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"category-item ch-250\">
\t\t\t\t\t\t<img src=\"img/category-7.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"category-item ch-400\">
\t\t\t\t\t\t<img src=\"img/category-8.jpg\"/>
\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"call-to-action\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h1>call us for any queries</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<a href=\"tel:684001065\">+34 684 00 10 65</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!-- Call to Action End --><!-- Featured Product Start --><div class=\"featured-product product\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"section-header\">
\t\t\t\t<h1>Featured Product</h1>
\t\t\t</div>
\t\t\t<div class=\"row align-items-center product-slider product-slider-4\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"img/product-1.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-2.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-3.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-4.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-5.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"newsletter\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h1>Subscribe Our Newsletter</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form\">
\t\t\t\t\t\t<input type=\"email\" value=\"Your email here\">
\t\t\t\t\t\t<button>Submit</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"recent-product product\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"section-header\">
\t\t\t\t<h1>Recent Product</h1>
\t\t\t</div>
\t\t\t<div class=\"row align-items-center product-slider product-slider-4\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-6.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-7.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-8.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-9.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t<img src=\"img/product-10.jpg\" alt=\"Product Image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Comprar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"review\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row align-items-center review-slider normal-slider\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t<img src=\"img/review-1.jpg\" alt=\"Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t<img src=\"img/review-2.jpg\" alt=\"Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t<img src=\"img/review-3.jpg\" alt=\"Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2>Get in Touch</h2>
\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>Pl. el Juncal, 6, B, 41005 Sevilla</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>impresionacopisteria@gmail.comgital.es</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>+34 684 00 10 65</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2>Follow Us</h2>
\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2>Company Info</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Terms & Condition</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h2>Purchase Info</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Pyament Policy</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Shipping Policy</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Return Policy</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row payment align-items-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"payment-method\">
\t\t\t\t\t\t<h2>We Accept:</h2>
\t\t\t\t\t\t<img src=\"img/payment-method.png\" alt=\"Payment Method\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"payment-security\">
\t\t\t\t\t\t<h2>Secured By:</h2>
\t\t\t\t\t\t<img src=\"img/godaddy.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t<img src=\"img/norton.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t<img src=\"img/ssl.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<a href=\"#\" class=\"back-to-top\">
\t\t<i class=\"fa fa-chevron-up\"></i>
\t</a>
{% endblock %}

{% block javascripts %}
\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t<script src=\"js/easing.min.js\"></script>
\t<script src=\"js/slick.min.js\"></script>
\t<script src=\"js/main.js\"></script>
{% endblock %}
", "indexAdmin.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\indexAdmin.html.twig");
    }
}
