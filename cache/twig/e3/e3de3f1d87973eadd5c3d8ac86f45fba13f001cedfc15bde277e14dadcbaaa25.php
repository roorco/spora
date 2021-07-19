<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_bbbca9a71a347d97a21acd39a9514b59c5d598670f81a5817ce7fe331552cd36 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('assets', $context, $blocks);
        // line 42
        echo "</head>
<body id=\"top\" class=\"";
        // line 43
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 76
        echo "
    ";
        // line 77
        $this->displayBlock('hero', $context, $blocks);
        // line 78
        echo "
        <section id=\"start\">
        ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "        </section>

    </div>

    ";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "
    ";
        // line 98
        $this->displayBlock('mobile', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        $this->displayBlock('bottom', $context, $blocks);
        // line 114
        echo "
</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'head');
    }

    // line 8
    public function block_head_deferred($context, array $blocks = array())
    {
        // line 9
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;700;800&family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,800;1,200;1,600;1,800&family=Zen+Loop:ital@0;1&display=swap\" rel=\"stylesheet\"> 
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 25
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 26
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 34
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 35
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 38
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 40
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 43
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        // line 46
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 47
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 50
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 55
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 58
        echo "                        </nav>

                        ";
        // line 60
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 61
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 61)->display($context);
            echo "</span>
                        ";
        }
        // line 63
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 55
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 56
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "                        ";
    }

    // line 77
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        // line 81
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 82
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 83
        $this->displayBlock('messages', $context, $blocks);
        // line 86
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 83
    public function block_messages($context, array $blocks = [])
    {
        // line 84
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 84);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 85
        echo "                    ";
    }

    // line 94
    public function block_footer($context, array $blocks = [])
    {
        // line 95
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 95)->display($context);
        // line 96
        echo "    ";
    }

    // line 98
    public function block_mobile($context, array $blocks = [])
    {
        // line 99
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 102
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 102)->display(twig_array_merge($context, ["mobile" => true]));
        // line 103
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 105
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 105)->display(twig_array_merge($context, ["tree" => true]));
        // line 106
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 111
    public function block_bottom($context, array $blocks = [])
    {
        // line 112
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 112,  378 => 111,  371 => 106,  369 => 105,  365 => 103,  363 => 102,  358 => 99,  355 => 98,  351 => 96,  348 => 95,  345 => 94,  341 => 85,  330 => 84,  327 => 83,  318 => 86,  316 => 83,  312 => 82,  309 => 81,  306 => 80,  301 => 77,  297 => 57,  294 => 56,  291 => 55,  275 => 63,  269 => 61,  267 => 60,  263 => 58,  261 => 55,  255 => 51,  253 => 50,  247 => 47,  244 => 46,  241 => 45,  235 => 43,  228 => 40,  223 => 39,  220 => 38,  210 => 35,  207 => 34,  204 => 33,  201 => 32,  196 => 29,  193 => 28,  190 => 27,  185 => 26,  180 => 25,  177 => 24,  174 => 23,  164 => 17,  160 => 16,  157 => 15,  155 => 14,  144 => 10,  141 => 9,  138 => 8,  125 => 114,  123 => 111,  120 => 110,  118 => 98,  115 => 97,  113 => 94,  107 => 90,  105 => 80,  101 => 78,  99 => 77,  96 => 76,  94 => 45,  89 => 43,  86 => 42,  84 => 38,  81 => 37,  79 => 32,  76 => 31,  74 => 23,  71 => 22,  69 => 8,  64 => 6,  61 => 5,  59 => 3,  57 => 2,  55 => 1,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;700;800&family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,800;1,200;1,600;1,800&family=Zen+Loop:ital@0;1&display=swap\" rel=\"stylesheet\"> 
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
    {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %}
    {% do assets.addCss('theme://css/custom.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/home/boro/Http/SPORAA/user/themes/sporspora/templates/partials/base.html.twig");
    }
}
