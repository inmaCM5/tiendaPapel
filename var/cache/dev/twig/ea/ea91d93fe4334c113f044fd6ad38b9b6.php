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

/* pruebaMenu.html.twig */
class __TwigTemplate_3031e1b362ef66675194b36bad98c3b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pruebaMenu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pruebaMenu.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"keywords\" content=\"htmlcss bootstrap, multi level menu, submenu, treeview nav menu examples\" />
<meta name=\"description\" content=\"Bootstrap 5 navbar multilevel treeview examples for any type of project, Bootstrap 5\" />  

<title>Demo - Bootstrap 5 multilevel dropdown submenu sample</title>

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>

<style type=\"text/css\">

/* ============ desktop view ============ */
@media all and (min-width: 992px) {

\t.dropdown-menu li{
\t\tposition: relative;
\t}
\t.dropdown-menu .submenu{ 
\t\tdisplay: none;
\t\tposition: absolute;
\t\tleft:100%; top:-7px;
\t}
\t.dropdown-menu .submenu-left{ 
\t\tright:100%; left:auto;
\t}

\t.dropdown-menu > li:hover{ background-color: #f1f1f1 }
\t.dropdown-menu > li:hover > .submenu{
\t\tdisplay: block;
\t}
}\t
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {

.dropdown-menu .dropdown-menu{
\t\tmargin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
}

}\t
/* ============ small devices .end// ============ */

</style>


<script type=\"text/javascript\">
//\twindow.addEventListener(\"resize\", function() {
//\t\t\"use strict\"; window.location.reload(); 
//\t});


\tdocument.addEventListener(\"DOMContentLoaded\", function(){
        

    \t/////// Prevent closing from click inside dropdown
\t\tdocument.querySelectorAll('.dropdown-menu').forEach(function(element){
\t\t\telement.addEventListener('click', function (e) {
\t\t\t  e.stopPropagation();
\t\t\t});
\t\t})



\t\t// make it as accordion for smaller screens
\t\tif (window.innerWidth < 992) {

\t\t\t// close all inner dropdowns when parent is closed
\t\t\tdocument.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
\t\t\t\teverydropdown.addEventListener('hidden.bs.dropdown', function () {
\t\t\t\t\t// after dropdown is hidden, then find all submenus
\t\t\t\t\t  this.querySelectorAll('.submenu').forEach(function(everysubmenu){
\t\t\t\t\t  \t// hide every submenu as well
\t\t\t\t\t  \teverysubmenu.style.display = 'none';
\t\t\t\t\t  });
\t\t\t\t})
\t\t\t});
\t\t\t
\t\t\tdocument.querySelectorAll('.dropdown-menu a').forEach(function(element){
\t\t\t\telement.addEventListener('click', function (e) {
\t\t
\t\t\t\t  \tlet nextEl = this.nextElementSibling;
\t\t\t\t  \tif(nextEl && nextEl.classList.contains('submenu')) {\t
\t\t\t\t  \t\t// prevent opening link if link needs to open dropdown
\t\t\t\t  \t\te.preventDefault();
\t\t\t\t  \t\tconsole.log(nextEl);
\t\t\t\t  \t\tif(nextEl.style.display == 'block'){
\t\t\t\t  \t\t\tnextEl.style.display = 'none';
\t\t\t\t  \t\t} else {
\t\t\t\t  \t\t\tnextEl.style.display = 'block';
\t\t\t\t  \t\t}

\t\t\t\t  \t}
\t\t\t\t});
\t\t\t})
\t\t}
\t\t// end if innerWidth

\t}); 
\t// DOMContentLoaded  end
</script>

</head>
<body>

<header class=\"section-header py-4\">
<div class=\"container\">
\t<h2>Demo page </h2> 
</div>
</header>



<div class=\"container\">

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
 <div class=\"container-fluid\">
 \t <a class=\"navbar-brand\" href=\"#\">Brand</a>
  <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#main_nav\"  aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  <div class=\"collapse navbar-collapse\" id=\"main_nav\">
\t

\t<ul class=\"navbar-nav\">
\t\t<li class=\"nav-item active\"> <a class=\"nav-link\" href=\"#\">Home </a> </li>
\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"> About </a></li>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\">  Treeview menu  </a>
\t\t    <ul class=\"dropdown-menu\">
\t\t\t  <li><a class=\"dropdown-item\" href=\"#\"> Dropdown item 1 </a></li>
\t\t\t  <li><a class=\"dropdown-item\" href=\"#\"> Dropdown item 2 &raquo; </a>
\t\t\t  \t <ul class=\"submenu dropdown-menu\">
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 1</a></li>
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 2</a></li>
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 3 &raquo; </a>
\t\t\t\t    \t<ul class=\"submenu dropdown-menu\">
\t\t\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Multi level 1</a></li>
\t\t\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Multi level 2</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t    </li>
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 4</a></li>
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 5</a></li>
\t\t\t\t </ul>
\t\t\t  </li>
\t\t\t  <li><a class=\"dropdown-item\" href=\"#\"> Dropdown item 3 </a></li>
\t\t\t  <li><a class=\"dropdown-item\" href=\"#\"> Dropdown item 4 </a>
\t\t    </ul>
\t\t</li>
\t</ul>
  </div>
 </div>
</nav>

</div>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pruebaMenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"keywords\" content=\"htmlcss bootstrap, multi level menu, submenu, treeview nav menu examples\" />
<meta name=\"description\" content=\"Bootstrap 5 navbar multilevel treeview examples for any type of project, Bootstrap 5\" />  

<title>Demo - Bootstrap 5 multilevel dropdown submenu sample</title>

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>

<style type=\"text/css\">

/* ============ desktop view ============ */
@media all and (min-width: 992px) {

\t.dropdown-menu li{
\t\tposition: relative;
\t}
\t.dropdown-menu .submenu{ 
\t\tdisplay: none;
\t\tposition: absolute;
\t\tleft:100%; top:-7px;
\t}
\t.dropdown-menu .submenu-left{ 
\t\tright:100%; left:auto;
\t}

\t.dropdown-menu > li:hover{ background-color: #f1f1f1 }
\t.dropdown-menu > li:hover > .submenu{
\t\tdisplay: block;
\t}
}\t
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {

.dropdown-menu .dropdown-menu{
\t\tmargin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
}

}\t
/* ============ small devices .end// ============ */

</style>


<script type=\"text/javascript\">
//\twindow.addEventListener(\"resize\", function() {
//\t\t\"use strict\"; window.location.reload(); 
//\t});


\tdocument.addEventListener(\"DOMContentLoaded\", function(){
        

    \t/////// Prevent closing from click inside dropdown
\t\tdocument.querySelectorAll('.dropdown-menu').forEach(function(element){
\t\t\telement.addEventListener('click', function (e) {
\t\t\t  e.stopPropagation();
\t\t\t});
\t\t})



\t\t// make it as accordion for smaller screens
\t\tif (window.innerWidth < 992) {

\t\t\t// close all inner dropdowns when parent is closed
\t\t\tdocument.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
\t\t\t\teverydropdown.addEventListener('hidden.bs.dropdown', function () {
\t\t\t\t\t// after dropdown is hidden, then find all submenus
\t\t\t\t\t  this.querySelectorAll('.submenu').forEach(function(everysubmenu){
\t\t\t\t\t  \t// hide every submenu as well
\t\t\t\t\t  \teverysubmenu.style.display = 'none';
\t\t\t\t\t  });
\t\t\t\t})
\t\t\t});
\t\t\t
\t\t\tdocument.querySelectorAll('.dropdown-menu a').forEach(function(element){
\t\t\t\telement.addEventListener('click', function (e) {
\t\t
\t\t\t\t  \tlet nextEl = this.nextElementSibling;
\t\t\t\t  \tif(nextEl && nextEl.classList.contains('submenu')) {\t
\t\t\t\t  \t\t// prevent opening link if link needs to open dropdown
\t\t\t\t  \t\te.preventDefault();
\t\t\t\t  \t\tconsole.log(nextEl);
\t\t\t\t  \t\tif(nextEl.style.display == 'block'){
\t\t\t\t  \t\t\tnextEl.style.display = 'none';
\t\t\t\t  \t\t} else {
\t\t\t\t  \t\t\tnextEl.style.display = 'block';
\t\t\t\t  \t\t}

\t\t\t\t  \t}
\t\t\t\t});
\t\t\t})
\t\t}
\t\t// end if innerWidth

\t}); 
\t// DOMContentLoaded  end
</script>

</head>
<body>

<header class=\"section-header py-4\">
<div class=\"container\">
\t<h2>Demo page </h2> 
</div>
</header>



<div class=\"container\">

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
 <div class=\"container-fluid\">
 \t <a class=\"navbar-brand\" href=\"#\">Brand</a>
  <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#main_nav\"  aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  <div class=\"collapse navbar-collapse\" id=\"main_nav\">
\t

\t<ul class=\"navbar-nav\">
\t\t<li class=\"nav-item active\"> <a class=\"nav-link\" href=\"#\">Home </a> </li>
\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"> About </a></li>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\">  Treeview menu  </a>
\t\t    <ul class=\"dropdown-menu\">
\t\t\t  <li><a class=\"dropdown-item\" href=\"#\"> Dropdown item 1 </a></li>
\t\t\t  <li><a class=\"dropdown-item\" href=\"#\"> Dropdown item 2 &raquo; </a>
\t\t\t  \t <ul class=\"submenu dropdown-menu\">
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 1</a></li>
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 2</a></li>
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 3 &raquo; </a>
\t\t\t\t    \t<ul class=\"submenu dropdown-menu\">
\t\t\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Multi level 1</a></li>
\t\t\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Multi level 2</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t    </li>
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 4</a></li>
\t\t\t\t    <li><a class=\"dropdown-item\" href=\"#\">Submenu item 5</a></li>
\t\t\t\t </ul>
\t\t\t  </li>
\t\t\t  <li><a class=\"dropdown-item\" href=\"#\"> Dropdown item 3 </a></li>
\t\t\t  <li><a class=\"dropdown-item\" href=\"#\"> Dropdown item 4 </a>
\t\t    </ul>
\t\t</li>
\t</ul>
  </div>
 </div>
</nav>

</div>

</body>
</html>", "pruebaMenu.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\pruebaMenu.html.twig");
    }
}
