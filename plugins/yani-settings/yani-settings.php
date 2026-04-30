<?php
/**
 * Plugin Name: Yani Settings - Dynamic Text Manager
 * Description: CRUD text content cho 8 page template của theme Yani (khong can sua template thu cong).
 * Version: 1.0.0
 * Author: Yani
 * Requires at least: 5.8
 * Requires PHP: 7.4
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('Yani_Settings_Dynamic_Text_Plugin')) {
    class Yani_Settings_Dynamic_Text_Plugin
    {
        const OPTION_KEY = 'yani_dynamic_text_rules';
        const NONCE_ACTION = 'yani_settings_save_rules';
        const SEED_NONCE_ACTION = 'yani_settings_seed_rules';

        /**
         * 8 pages theo theme.
         *
         * @return array<string, array<string, string>>
         */
        private function get_supported_pages()
        {
            return array(
                'home' => array(
                    'label' => 'Home',
                    'template' => 'page-templates/page-home.php',
                ),
                'about' => array(
                    'label' => 'About',
                    'template' => 'page-templates/page-about.php',
                ),
                'service' => array(
                    'label' => 'Service',
                    'template' => 'page-templates/page-service.php',
                ),
                'price' => array(
                    'label' => 'Price',
                    'template' => 'page-templates/page-price.php',
                ),
                'contact' => array(
                    'label' => 'Contact',
                    'template' => 'page-templates/page-contact.php',
                ),
                'blog' => array(
                    'label' => 'Blog',
                    'template' => 'page-templates/page-blog.php',
                ),
                'strategy' => array(
                    'label' => 'Strategy',
                    'template' => 'page-templates/page-strategy.php',
                ),
                'single' => array(
                    'label' => 'Single Post',
                    'template' => 'single',
                ),
            );
        }

        public function __construct()
        {
            add_action('admin_menu', array($this, 'register_admin_menu'));
            add_action('admin_post_yani_save_dynamic_text_rules', array($this, 'handle_save_rules'));
            add_action('admin_post_yani_seed_dynamic_text_rules', array($this, 'handle_seed_rules'));
            add_action('template_redirect', array($this, 'start_output_buffer'));
        }

        public function register_admin_menu()
        {
            add_menu_page(
                'Yani Settings',
                'Yani Settings',
                'manage_options',
                'yani-settings',
                array($this, 'render_admin_page'),
                'dashicons-edit-page',
                58
            );
        }

        public function render_admin_page()
        {
            if (!current_user_can('manage_options')) {
                wp_die(esc_html__('Ban khong co quyen truy cap.', 'yani-settings'));
            }

            $supported_pages = $this->get_supported_pages();
            $rules = get_option(self::OPTION_KEY, array());
            if (!is_array($rules)) {
                $rules = array();
            }
            if (empty($rules)) {
                $rules = $this->build_default_rules_from_theme();
                update_option(self::OPTION_KEY, $rules, false);
            }
            ?>
            <div class="wrap yani-settings-wrap">
                <h1>Yani Settings - Dynamic Text CRUD</h1>
                <p>Quan ly noi dung text (khong bao gom anh) cho 8 trang trong theme Yani.</p>
                <style>
                    .yani-settings-wrap .nav-tab-wrapper { margin-top: 18px; border-bottom: 1px solid #dcdcde; }
                    .yani-settings-wrap .nav-tab { border-radius: 8px 8px 0 0; padding: 8px 14px; }
                    .yani-settings-wrap .yani-tab-panel { margin-top: 14px; background: #fff; border: 1px solid #dcdcde; border-radius: 10px; padding: 16px; box-shadow: 0 1px 2px rgba(0, 0, 0, .04); }
                    .yani-settings-wrap .widefat th { font-weight: 600; }
                    .yani-settings-wrap .widefat td { vertical-align: top; }
                    .yani-settings-wrap textarea { border-radius: 8px; border: 1px solid #c3c4c7; min-height: 90px; }
                    .yani-settings-wrap .button-secondary { border-radius: 8px; }
                </style>

                <?php if (!empty($_GET['saved'])): ?>
                    <div class="notice notice-success is-dismissible">
                        <p>Da luu thay doi noi dung thanh cong.</p>
                    </div>
                <?php endif; ?>

                <?php if (!empty($_GET['seeded'])): ?>
                    <div class="notice notice-success is-dismissible">
                        <p>Da nap lai bo rule mac dinh tu text hien co trong theme.</p>
                    </div>
                <?php endif; ?>

                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" style="margin: 16px 0;">
                    <input type="hidden" name="action" value="yani_seed_dynamic_text_rules" />
                    <?php wp_nonce_field(self::SEED_NONCE_ACTION, '_yani_seed_nonce'); ?>
                    <?php submit_button('Nap lai text mac dinh tu theme', 'secondary', 'submit', false); ?>
                    <span style="margin-left:8px;color:#646970;">Nut nay se reset rules ve text hien co trong cac template.</span>
                </form>

                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="yani_save_dynamic_text_rules" />
                    <?php wp_nonce_field(self::NONCE_ACTION, '_yani_nonce'); ?>

                    <h2 class="nav-tab-wrapper">
                        <?php foreach ($supported_pages as $page_key => $page_config): ?>
                            <a href="#yani-tab-<?php echo esc_attr($page_key); ?>" class="nav-tab <?php echo $page_key === 'home' ? 'nav-tab-active' : ''; ?>">
                                <?php echo esc_html($page_config['label']); ?>
                            </a>
                        <?php endforeach; ?>
                    </h2>

                    <?php foreach ($supported_pages as $page_key => $page_config): ?>
                        <?php
                        $page_rules = isset($rules[$page_key]) && is_array($rules[$page_key]) ? $rules[$page_key] : array();
                        ?>
                        <div id="yani-tab-<?php echo esc_attr($page_key); ?>" class="yani-tab-panel" style="<?php echo $page_key === 'home' ? '' : 'display:none;'; ?>">
                            <h3><?php echo esc_html($page_config['label']); ?> - Text Rules</h3>
                            <p><strong>Template:</strong> <?php echo esc_html($page_config['template']); ?></p>
                            <p><strong>So rule hien co:</strong> <?php echo esc_html((string) count($page_rules)); ?></p>
                            <p>Them/Xoa/Sua cac dong ben duoi. Moi dong la 1 rule thay text.</p>

                            <table class="widefat striped">
                                <thead>
                                <tr>
                                    <th style="width:45%;">Text goc can tim</th>
                                    <th style="width:45%;">Text thay the</th>
                                    <th style="width:10%;">Xoa?</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($page_rules)): ?>
                                    <?php foreach ($page_rules as $index => $rule): ?>
                                        <tr>
                                            <td>
                                                <input type="hidden"
                                                       name="rules[<?php echo esc_attr($page_key); ?>][<?php echo esc_attr($index); ?>][key]"
                                                       value="<?php echo esc_attr($rule['key'] ?? ''); ?>" />
                                                <textarea rows="3" style="width:100%;"
                                                          name="rules[<?php echo esc_attr($page_key); ?>][<?php echo esc_attr($index); ?>][find]"><?php echo esc_textarea($rule['find'] ?? ''); ?></textarea>
                                            </td>
                                            <td>
                                                <textarea rows="3" style="width:100%;"
                                                          name="rules[<?php echo esc_attr($page_key); ?>][<?php echo esc_attr($index); ?>][replace]"><?php echo esc_textarea($rule['replace'] ?? ''); ?></textarea>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="checkbox"
                                                           name="rules[<?php echo esc_attr($page_key); ?>][<?php echo esc_attr($index); ?>][deleted]"
                                                           value="1" />
                                                    Xoa
                                                </label>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <?php for ($new = 0; $new < 3; $new++): ?>
                                    <tr>
                                        <td>
                                            <input type="hidden"
                                                   name="rules[<?php echo esc_attr($page_key); ?>][new_<?php echo esc_attr($new); ?>][key]"
                                                   value="" />
                                            <textarea rows="3" style="width:100%;"
                                                      name="rules[<?php echo esc_attr($page_key); ?>][new_<?php echo esc_attr($new); ?>][find]"
                                                      placeholder="dan dung text goc tren template"></textarea>
                                        </td>
                                        <td>
                                            <textarea rows="3" style="width:100%;"
                                                      name="rules[<?php echo esc_attr($page_key); ?>][new_<?php echo esc_attr($new); ?>][replace]"
                                                      placeholder="text moi khach hang muon hien thi"></textarea>
                                        </td>
                                        <td>Moi</td>
                                    </tr>
                                <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; ?>

                    <?php submit_button('Luu Yani Settings'); ?>
                </form>
            </div>

            <script>
                (function() {
                    const tabs = document.querySelectorAll('.nav-tab-wrapper .nav-tab');
                    const panels = document.querySelectorAll('.yani-tab-panel');

                    tabs.forEach((tab) => {
                        tab.addEventListener('click', function(e) {
                            e.preventDefault();
                            tabs.forEach(t => t.classList.remove('nav-tab-active'));
                            panels.forEach(panel => panel.style.display = 'none');
                            this.classList.add('nav-tab-active');
                            const target = document.querySelector(this.getAttribute('href'));
                            if (target) {
                                target.style.display = '';
                            }
                        });
                    });
                })();
            </script>
            <?php
        }

        public function handle_save_rules()
        {
            if (!current_user_can('manage_options')) {
                wp_die(esc_html__('Ban khong co quyen thuc hien thao tac nay.', 'yani-settings'));
            }

            check_admin_referer(self::NONCE_ACTION, '_yani_nonce');

            $supported_pages = $this->get_supported_pages();
            $raw_rules = isset($_POST['rules']) && is_array($_POST['rules']) ? wp_unslash($_POST['rules']) : array();
            $clean_rules = array();

            foreach ($supported_pages as $page_key => $unused_config) {
                $clean_rules[$page_key] = array();
                if (empty($raw_rules[$page_key]) || !is_array($raw_rules[$page_key])) {
                    continue;
                }

                foreach ($raw_rules[$page_key] as $row) {
                    if (!empty($row['deleted'])) {
                        continue;
                    }

                    $rule_key = isset($row['key']) ? sanitize_key($row['key']) : '';
                    $find = isset($row['find']) ? wp_kses_post($row['find']) : '';
                    $replace = isset($row['replace']) ? wp_kses_post($row['replace']) : '';

                    if ($rule_key === '' && $find === '' && $replace === '') {
                        continue;
                    }
                    if ($find === '') {
                        continue;
                    }

                    if ($rule_key === '') {
                        $rule_key = 'rule_' . substr(md5($find), 0, 10);
                    }

                    $clean_rules[$page_key][] = array(
                        'key' => $rule_key,
                        'find' => $find,
                        'replace' => $replace,
                    );
                }
            }

            update_option(self::OPTION_KEY, $clean_rules, false);
            wp_safe_redirect(add_query_arg(array(
                'page' => 'yani-settings',
                'saved' => '1',
            ), admin_url('admin.php')));
            exit;
        }

        public function handle_seed_rules()
        {
            if (!current_user_can('manage_options')) {
                wp_die(esc_html__('Ban khong co quyen thuc hien thao tac nay.', 'yani-settings'));
            }

            check_admin_referer(self::SEED_NONCE_ACTION, '_yani_seed_nonce');

            update_option(self::OPTION_KEY, $this->build_default_rules_from_theme(), false);
            wp_safe_redirect(add_query_arg(array(
                'page' => 'yani-settings',
                'seeded' => '1',
            ), admin_url('admin.php')));
            exit;
        }

        /**
         * Bat output buffer de thay text dong theo trang.
         */
        public function start_output_buffer()
        {
            if (is_admin() || wp_doing_ajax() || wp_doing_cron() || is_feed()) {
                return;
            }

            $page_key = $this->detect_current_page_key();
            if ($page_key === '') {
                return;
            }

            $rules = get_option(self::OPTION_KEY, array());
            if (empty($rules[$page_key]) || !is_array($rules[$page_key])) {
                return;
            }

            ob_start(function ($html) use ($rules, $page_key) {
                foreach ($rules[$page_key] as $rule) {
                    $find = isset($rule['find']) ? (string) $rule['find'] : '';
                    $replace = isset($rule['replace']) ? (string) $rule['replace'] : '';
                    if ($find === '') {
                        continue;
                    }
                    $updated_html = str_replace($find, $replace, $html);
                    $exact_replaced = ($updated_html !== $html);
                    $html = $updated_html;

                    // Chi fallback regex neu exact match khong thay doi gi,
                    // tranh replace 2 lan gay duplicate text.
                    if ($exact_replaced) {
                        continue;
                    }

                    $pattern = $this->build_flexible_text_pattern($find);
                    if ($pattern !== '') {
                        $updated_html = preg_replace($pattern, $replace, $html);
                        if (is_string($updated_html)) {
                            $html = $updated_html;
                        }
                    }
                }
                return $html;
            });
        }

        /**
         * Tao regex match text co the bi xuong dong/chen khoang trang trong template.
         *
         * @param string $find Text goc.
         * @return string
         */
        private function build_flexible_text_pattern($find)
        {
            $normalized = trim((string) $find);
            if ($this->text_length($normalized) < 3) {
                return '';
            }

            $parts = preg_split('/(?:\s+|&nbsp;)+/u', $normalized);
            if (!is_array($parts) || count($parts) < 2) {
                return '';
            }

            $parts = array_filter($parts, static function ($part) {
                return $part !== '';
            });
            if (count($parts) < 2) {
                return '';
            }

            $escaped_parts = array_map(static function ($part) {
                return preg_quote($part, '/');
            }, $parts);

            return '/' . implode('(?:\s|&nbsp;)+', $escaped_parts) . '/u';
        }

        /**
         * Tao bo rule mac dinh bang cach doc text hien co trong cac template cua theme.
         *
         * @return array<string, array<int, array<string, string>>>
         */
        private function build_default_rules_from_theme()
        {
            $rules = array();

            foreach ($this->get_supported_pages() as $page_key => $page_config) {
                $rules[$page_key] = array();
                $template_file = $this->get_template_file_path($page_config['template']);
                if ($template_file === '' || !file_exists($template_file)) {
                    continue;
                }

                $texts = $this->extract_template_texts($template_file);
                foreach ($texts as $index => $text) {
                    $rules[$page_key][] = array(
                        'key' => $this->make_default_rule_key($page_key, $text, $index),
                        'find' => $text,
                        'replace' => $text,
                    );
                }
            }

            return $rules;
        }

        /**
         * @param string $template Relative template path hoac "single".
         * @return string
         */
        private function get_template_file_path($template)
        {
            if ($template === 'single') {
                return trailingslashit(get_template_directory()) . 'single.php';
            }

            return trailingslashit(get_template_directory()) . ltrim($template, '/');
        }

        /**
         * Tach visible text, PHP translation strings, placeholder/value tu template.
         *
         * @param string $template_file Template file path.
         * @return array<int, string>
         */
        private function extract_template_texts($template_file)
        {
            $source = file_get_contents($template_file);
            if (!is_string($source) || $source === '') {
                return array();
            }

            $texts = array();
            $seen = array();

            $add_text = function ($text) use (&$texts, &$seen) {
                $normalized = $this->normalize_default_text($text);
                if (!$this->looks_like_content_text($normalized)) {
                    return;
                }

                $dedupe_key = $this->text_lower($normalized);
                if (isset($seen[$dedupe_key])) {
                    return;
                }

                $seen[$dedupe_key] = true;
                $texts[] = $normalized;
            };

            $php_source = '';
            if (preg_match_all('/<\?(?:php)?([\s\S]*?)\?>/u', $source, $php_matches)) {
                $php_source = implode("\n", $php_matches[1]);
            }

            if (preg_match_all('/(?:esc_html_e|esc_attr_e|esc_html__|esc_attr__|esc_html|esc_attr|__|_e)\s*\(\s*([\'"])((?:\\\\.|(?!\1).)*)\1/su', $php_source, $matches)) {
                foreach ($matches[2] as $raw_text) {
                    $text = stripcslashes($raw_text);
                    $add_text(esc_html($text));
                }
            }

            if (preg_match_all('/([\'"])((?:\\\\.|(?!\1).)*)\1/su', $php_source, $matches)) {
                foreach ($matches[2] as $raw_text) {
                    $text = stripcslashes($raw_text);
                    if (strpos($text, '/') !== false || strpos($text, '\\') !== false) {
                        continue;
                    }
                    $add_text(esc_html($text));
                }
            }

            if (preg_match_all('/\s(?:placeholder|value|title|aria-label|data-label)=([\'"])(.*?)\1/su', $source, $matches)) {
                foreach ($matches[2] as $raw_text) {
                    $add_text($raw_text);
                }
            }

            $html_only = preg_replace('/<!--.*?-->/su', '', $source);
            $html_only = preg_replace('/<\?(?:php)?[\s\S]*?\?>/u', '', $html_only);
            $html_only = preg_replace('/<(script|style|svg)\b[\s\S]*?<\/\1>/iu', '', $html_only);

            if (preg_match_all('/>([^<>]+)</u', $html_only, $matches)) {
                foreach ($matches[1] as $raw_text) {
                    $add_text($raw_text);
                }
            }

            return $texts;
        }

        /**
         * @param string $text Raw text.
         * @return string
         */
        private function normalize_default_text($text)
        {
            $text = str_replace(array("\r\n", "\r", "\n", "\t"), ' ', (string) $text);
            $text = preg_replace('/\s+/u', ' ', $text);
            return trim((string) $text);
        }

        /**
         * @param string $text Text da normalize.
         * @return bool
         */
        private function looks_like_content_text($text)
        {
            if ($text === '' || $this->text_length($text) < 2) {
                return false;
            }

            if (preg_match('/^\{.*\}$/', $text) || preg_match('/^[.#]?[a-z0-9_-]+$/i', $text)) {
                return false;
            }

            return (bool) preg_match('/[\p{L}\p{N}]/u', $text);
        }

        /**
         * @param string $page_key Page key.
         * @param string $text Text rule.
         * @param int    $index Rule index.
         * @return string
         */
        private function make_default_rule_key($page_key, $text, $index)
        {
            return sanitize_key($page_key . '_' . str_pad((string) ($index + 1), 3, '0', STR_PAD_LEFT) . '_' . substr(md5($text), 0, 8));
        }

        /**
         * @param string $text Text can dem.
         * @return int
         */
        private function text_length($text)
        {
            if (function_exists('mb_strlen')) {
                return mb_strlen($text, 'UTF-8');
            }

            return strlen($text);
        }

        /**
         * @param string $text Text can lowercase.
         * @return string
         */
        private function text_lower($text)
        {
            if (function_exists('mb_strtolower')) {
                return mb_strtolower($text, 'UTF-8');
            }

            return strtolower($text);
        }

        /**
         * Helper page key theo template hien tai.
         *
         * @return string
         */
        private function detect_current_page_key()
        {
            if (is_page_template('page-templates/page-home.php') || is_front_page() || is_home()) {
                return 'home';
            }
            if (is_page_template('page-templates/page-about.php')) {
                return 'about';
            }
            if (is_page_template('page-templates/page-service.php')) {
                return 'service';
            }
            if (is_page_template('page-templates/page-price.php')) {
                return 'price';
            }
            if (is_page_template('page-templates/page-contact.php')) {
                return 'contact';
            }
            if (is_page_template('page-templates/page-blog.php')) {
                return 'blog';
            }
            if (is_page_template('page-templates/page-strategy.php')) {
                return 'strategy';
            }
            if (is_single()) {
                return 'single';
            }

            return '';
        }
    }
}

new Yani_Settings_Dynamic_Text_Plugin();

/**
 * Helper API cho theme/plugin khac goi:
 * yani_get_dynamic_text('home', 'hero_title', 'Default text');
 */
if (!function_exists('yani_get_dynamic_text')) {
    function yani_get_dynamic_text($page_key, $rule_key, $default = '')
    {
        $rules = get_option(Yani_Settings_Dynamic_Text_Plugin::OPTION_KEY, array());
        if (!is_array($rules) || empty($rules[$page_key]) || !is_array($rules[$page_key])) {
            return $default;
        }

        foreach ($rules[$page_key] as $rule) {
            if (($rule['key'] ?? '') === $rule_key) {
                return isset($rule['replace']) ? (string) $rule['replace'] : $default;
            }
        }

        return $default;
    }
}
