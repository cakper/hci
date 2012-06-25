<?php

/* layout.html.twig */
class __TwigTemplate_b8865ade8a3287b66dcc3266ee8f3e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'container_content' => array($this, 'block_container_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

\t<title></title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<meta name=\"viewport\" content=\"width=device-width\">

\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
\t<style>
\tbody {
\t  padding-top: 60px;
\t  padding-bottom: 40px;
\t}
\t</style>
\t<link rel=\"stylesheet\" href=\"css/bootstrap-responsive.min.css\">
\t<link rel=\"stylesheet\" href=\"css/style.css\">

\t<script src=\"js/libs/modernizr-2.5.3-respond-1.1.0.min.js\"></script>
</head>
<body>
    <div class=\"navbar navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"#\">Project name</a>
          <div class=\"nav-collapse\">
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"#\">Home</a></li>
              <li><a href=\"#about\">About</a></li>
              <li><a href=\"#contact\">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container\">
        
        ";
        // line 48
        $this->displayBlock('container_content', $context, $blocks);
        // line 49
        echo "        <hr>

        <footer>
            <p>&copy; Company 2012</p>
        </footer>

    </div> <!-- /container -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"js/libs/jquery-1.7.1.min.js\"><\\/script>')</script>

<script src=\"js/libs/bootstrap/transition.js\"></script>
<script src=\"js/libs/bootstrap/collapse.js\"></script>

<script src=\"js/script.js\"></script>
</body>
</html>
";
    }

    // line 48
    public function block_container_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

}
