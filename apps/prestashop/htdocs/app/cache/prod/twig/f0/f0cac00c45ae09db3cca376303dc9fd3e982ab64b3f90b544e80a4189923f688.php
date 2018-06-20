<?php

/* @AdvancedParameters/performance.html.twig */
class __TwigTemplate_aaba103ec1bf7d579c3b8bd4dbe76a5e85322f8cca1afc8e9fbe63c9f70683cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@AdvancedParameters/performance.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'perfs_form_smarty_cache' => array($this, 'block_perfs_form_smarty_cache'),
            'perfs_form_debug_mode' => array($this, 'block_perfs_form_debug_mode'),
            'perfs_form_optional_features' => array($this, 'block_perfs_form_optional_features'),
            'perfs_form_ccc' => array($this, 'block_perfs_form_ccc'),
            'perfs_form_media_servers' => array($this, 'block_perfs_form_media_servers'),
            'perfs_form_caching' => array($this, 'block_perfs_form_caching'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        list($context["smartyForm"], $context["debugModeForm"], $context["optionalFeaturesForm"], $context["combineCompressCacheForm"], $context["mediaServersForm"], $context["cachingForm"], $context["memcacheForm"]) =         array($this->getAttribute(        // line 30
($context["form"] ?? null), "smarty", array()), $this->getAttribute(($context["form"] ?? null), "debug_mode", array()), $this->getAttribute(($context["form"] ?? null), "optional_features", array()), $this->getAttribute(($context["form"] ?? null), "ccc", array()), $this->getAttribute(($context["form"] ?? null), "media_servers", array()), $this->getAttribute(($context["form"] ?? null), "caching", array()), $this->getAttribute(($context["form"] ?? null), "add_memcache_server", array()));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "    <div class=\"container\">
        ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form")));
        echo "
        <div class=\"row\">
            ";
        // line 37
        $this->displayBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 78
        echo "
            ";
        // line 79
        $this->displayBlock('perfs_form_debug_mode', $context, $blocks);
        // line 110
        echo "        </div>

        <div class=\"row\">
            ";
        // line 113
        $this->displayBlock('perfs_form_optional_features', $context, $blocks);
        // line 152
        echo "
            ";
        // line 153
        $this->displayBlock('perfs_form_ccc', $context, $blocks);
        // line 187
        echo "        </div>

        <div class=\"row\">
            ";
        // line 190
        $this->displayBlock('perfs_form_media_servers', $context, $blocks);
        // line 224
        echo "
            ";
        // line 225
        $this->displayBlock('perfs_form_caching', $context, $blocks);
        // line 252
        echo "        </div>
        ";
        // line 253
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    // line 37
    public function block_perfs_form_smarty_cache($context, array $blocks = array())
    {
        // line 38
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">business_center</i> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smarty", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Template compilation", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "template_compilation", array()), 'errors');
        echo "
                                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "template_compilation", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cache", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Should be enabled except for debugging.", array(), "Admin.Advparameters.Feature")), "method"), "html", null, true);
        echo "
                                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "cache", array()), 'errors');
        echo "
                                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "cache", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group smarty-cache-option\">
                                ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multi-front optimizations", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Should be enabled if you want to avoid to store the smarty cache on NFS.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "multi_front_optimization", array()), 'errors');
        echo "
                                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "multi_front_optimization", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group smarty-cache-option\">
                                <label class=\"form-control-label\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching type", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "caching_type", array()), 'errors');
        echo "
                                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "caching_type", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group smarty-cache-option\">
                                <label class=\"form-control-label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clear cache", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "clear_cache", array()), 'errors');
        echo "
                                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? null), "clear_cache", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
    }

    // line 79
    public function block_perfs_form_debug_mode($context, array $blocks = array())
    {
        // line 80
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">bug_report</i> ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Debug mode", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable non PrestaShop modules", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable non PrestaShop Modules.", array(), "Admin.Advparameters.Feature")), "method"), "html", null, true);
        echo "
                                ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? null), "disable_non_native_modules", array()), 'errors');
        echo "
                                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? null), "disable_non_native_modules", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable all overrides", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable all classes and controllers overrides.", array(), "Admin.Advparameters.Feature")), "method"), "html", null, true);
        echo "
                                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? null), "disable_overrides", array()), 'errors');
        echo "
                                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? null), "disable_overrides", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Debug mode", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable debug mode.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? null), "debug_mode", array()), 'errors');
        echo "
                                ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? null), "debug_mode", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
    }

    // line 113
    public function block_perfs_form_optional_features($context, array $blocks = array())
    {
        // line 114
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">extension</i> ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional features", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "infotip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some features can be disabled in order to improve performance.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "

                            <div class=\"form-group\">
                                ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Product Combinations.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? null), "combinations", array()), 'errors');
        echo "
                                ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? null), "combinations", array()), 'widget');
        echo "
                            </div>

                            ";
        // line 130
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["optionalFeaturesForm"] ?? null), "combinations", array()), "vars", array()), "disabled", array())) {
            // line 131
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "warningtip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You cannot set this parameter to No when combinations are already used by some of your products", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
            echo "
                            ";
        }
        // line 133
        echo "
                            <div class=\"form-group\">
                                ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Product Features.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? null), "features", array()), 'errors');
        echo "
                                ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? null), "features", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer groups", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Customer Groups.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? null), "customer_groups", array()), 'errors');
        echo "
                                ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? null), "customer_groups", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
    }

    // line 153
    public function block_perfs_form_ccc($context, array $blocks = array())
    {
        // line 154
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">zoom_out_map</i> ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC (Combine, Compress and Cache)", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            ";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "infotip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.4+. Otherwise, CCC will cause problems.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "

                            <div class=\"form-group\">
                                <label class=\"form-control-label\">";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smart cache for CSS", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? null), "smart_cache_css", array()), 'errors');
        echo "
                                ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? null), "smart_cache_css", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-control-label\">";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smart cache for JavaScript", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? null), "smart_cache_js", array()), 'errors');
        echo "
                                ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? null), "smart_cache_js", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apache optimization", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will add directives to your .htaccess file, which should improve caching and compression.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? null), "apache_optimization", array()), 'errors');
        echo "
                                ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? null), "apache_optimization", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
    }

    // line 190
    public function block_perfs_form_media_servers($context, array $blocks = array())
    {
        // line 191
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">link</i> ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media servers (use only with CCC)", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            ";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "infotip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", array(), "Admin.Advparameters.Feature")), "method"), "html", null, true);
        echo "

                            <div class=\"form-group\">
                                ";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #1", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the second domain of your shop, (e.g. myshop-media-server-1.com). If you do not have another domain, leave this field blank.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? null), "media_server_one", array()), 'errors');
        echo "
                                ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? null), "media_server_one", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #2", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the third domain of your shop, (e.g. myshop-media-server-2.com). If you do not have another domain, leave this field blank.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? null), "media_server_two", array()), 'errors');
        echo "
                                ";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? null), "media_server_two", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #3", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the fourth domain of your shop, (e.g. myshop-media-server-3.com). If you do not have another domain, leave this field blank.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? null), "media_server_three", array()), 'errors');
        echo "
                                ";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? null), "media_server_three", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
    }

    // line 225
    public function block_perfs_form_caching($context, array $blocks = array())
    {
        // line 226
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">link</i> ";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use cache", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? null), "use_cache", array()), 'errors');
        echo "
                                ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? null), "use_cache", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group memcache\" id=\"caching_systems\">
                                <label class=\"form-control-label\">";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching system", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? null), "caching_system", array()), 'errors');
        echo "
                                ";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? null), "caching_system", array()), 'widget');
        echo "
                            </div>
                            ";
        // line 243
        echo twig_include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", array("form" => ($context["memcacheForm"] ?? null)));
        echo "
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
    }

    // line 257
    public function block_javascripts($context, array $blocks = array())
    {
        // line 258
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        echo "\"></script>
    <script>
        var configuration = {
            'addServerUrl': '";
        // line 262
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_add"), "js"), "html", null, true);
        echo "',
            'removeServerUrl': '";
        // line 263
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_delete"), "js"), "html", null, true);
        echo "',
            'testServerUrl': '";
        // line 264
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_test"), "js"), "html", null, true);
        echo "'
        };
        var app = new PerformancePage(
            configuration.addServerUrl,
            configuration.removeServerUrl,
            configuration.testServerUrl
        );

        window.addEventListener('load', function() {
            var addServerBtn = document.getElementById('add-server-btn');
            var testServerBtn = document.getElementById('test-server-btn');

            addServerBtn.addEventListener('click', function(event) {
                event.preventDefault();
                app.addServer();
            });

            testServerBtn.addEventListener('click', function(event) {
                event.preventDefault();
                app.testServer();
            });
        });
    </script>

    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@AdvancedParameters/performance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 288,  575 => 264,  571 => 263,  567 => 262,  561 => 259,  556 => 258,  553 => 257,  544 => 247,  537 => 243,  532 => 241,  528 => 240,  524 => 239,  518 => 236,  514 => 235,  510 => 234,  502 => 229,  497 => 226,  494 => 225,  485 => 219,  477 => 214,  473 => 213,  469 => 212,  463 => 209,  459 => 208,  455 => 207,  449 => 204,  445 => 203,  441 => 202,  435 => 199,  427 => 194,  422 => 191,  419 => 190,  410 => 182,  402 => 177,  398 => 176,  394 => 175,  388 => 172,  384 => 171,  380 => 170,  374 => 167,  370 => 166,  366 => 165,  360 => 162,  352 => 157,  347 => 154,  344 => 153,  335 => 147,  327 => 142,  323 => 141,  319 => 140,  313 => 137,  309 => 136,  305 => 135,  301 => 133,  295 => 131,  293 => 130,  287 => 127,  283 => 126,  279 => 125,  273 => 122,  265 => 117,  260 => 114,  257 => 113,  248 => 105,  240 => 100,  236 => 99,  232 => 98,  226 => 95,  222 => 94,  218 => 93,  212 => 90,  208 => 89,  204 => 88,  196 => 83,  191 => 80,  188 => 79,  179 => 73,  171 => 68,  167 => 67,  163 => 66,  157 => 63,  153 => 62,  149 => 61,  143 => 58,  139 => 57,  135 => 56,  129 => 53,  125 => 52,  121 => 51,  115 => 48,  111 => 47,  107 => 46,  99 => 41,  94 => 38,  91 => 37,  84 => 253,  81 => 252,  79 => 225,  76 => 224,  74 => 190,  69 => 187,  67 => 153,  64 => 152,  62 => 113,  57 => 110,  55 => 79,  52 => 78,  50 => 37,  45 => 35,  42 => 34,  39 => 33,  35 => 25,  33 => 30,  32 => 29,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdvancedParameters/performance.html.twig", "/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/performance.html.twig");
    }
}
