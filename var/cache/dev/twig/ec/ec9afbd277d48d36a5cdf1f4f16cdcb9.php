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

/* footer.html.twig */
class __TwigTemplate_fce5cfd51793a0a5dcf7f4dd9f9f29ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "footer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 4
        echo "\t<div class=\"footer\">
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block footer %}
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
{% endblock %}
", "footer.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\footer.html.twig");
    }
}
