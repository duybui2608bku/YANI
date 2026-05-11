<?php
/**
 * Plugin Name: Yani Fixed TOC
 * Description: Tao nut muc luc noi cho bai blog, mo popover va cuon den heading trong noi dung bai viet.
 * Version: 1.0.0
 * Author: Yani
 * Requires at least: 5.8
 * Requires PHP: 7.4
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('Yani_Fixed_TOC_Plugin')) {
    class Yani_Fixed_TOC_Plugin
    {
        const VERSION = '1.0.0';

        /**
         * @var array<int, array{id: string, text: string, level: int}>
         */
        private $headings = array();

        public function __construct()
        {
            add_filter('the_content', array($this, 'add_heading_ids'), 12);
            add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));
            add_action('wp_footer', array($this, 'render_fixed_toc'));
        }

        public function enqueue_assets()
        {
            if (!$this->should_run()) {
                return;
            }

            $plugin_url = plugin_dir_url(__FILE__);
            $plugin_dir = plugin_dir_path(__FILE__);

            wp_enqueue_style(
                'yani-fixed-toc',
                $plugin_url . 'assets/css/yani-fixed-toc.css',
                array(),
                $this->asset_version($plugin_dir . 'assets/css/yani-fixed-toc.css')
            );

            wp_enqueue_script(
                'yani-fixed-toc',
                $plugin_url . 'assets/js/yani-fixed-toc.js',
                array(),
                $this->asset_version($plugin_dir . 'assets/js/yani-fixed-toc.js'),
                true
            );
        }

        /**
         * Them id cho h2/h3 trong content va luu heading de render popover.
         *
         * @param string $content Post content HTML.
         * @return string
         */
        public function add_heading_ids($content)
        {
            if (!$this->should_run() || !is_string($content) || trim($content) === '') {
                return $content;
            }

            if (!preg_match('/<h[2-3]\b/i', $content)) {
                return $content;
            }

            $this->headings = array();
            $used_ids = array();

            return preg_replace_callback(
                '/<h([2-3])([^>]*)>(.*?)<\/h\1>/is',
                function ($matches) use (&$used_ids) {
                    $level = (int) $matches[1];
                    $attributes = (string) $matches[2];
                    $inner_html = (string) $matches[3];
                    $text = trim(wp_strip_all_tags($inner_html));

                    if ($text === '') {
                        return $matches[0];
                    }

                    if (preg_match('/\sid=(["\'])(.*?)\1/i', $attributes, $id_matches)) {
                        $id = sanitize_title($id_matches[2]);
                    } else {
                        $id = sanitize_title($text);
                        if ($id === '') {
                            $id = 'yani-toc-section-' . (count($this->headings) + 1);
                        }

                        $attributes .= ' id="' . esc_attr($id) . '"';
                    }

                    $id = $this->unique_id($id, $used_ids);
                    $used_ids[$id] = true;

                    if (preg_match('/\sid=(["\'])(.*?)\1/i', $attributes)) {
                        $attributes = preg_replace('/\sid=(["\'])(.*?)\1/i', ' id="' . esc_attr($id) . '"', $attributes, 1);
                    }

                    $this->headings[] = array(
                        'id' => $id,
                        'text' => $text,
                        'level' => $level,
                    );

                    return '<h' . $level . $attributes . '>' . $inner_html . '</h' . $level . '>';
                },
                $content
            );
        }

        public function render_fixed_toc()
        {
            if (!$this->should_run() || empty($this->headings)) {
                return;
            }
            ?>
            <div class="yani-fixed-toc" data-yani-fixed-toc>
                <button class="yani-fixed-toc__toggle" type="button" aria-label="Mo muc luc bai viet" aria-expanded="false" aria-controls="yani-fixed-toc-popover">
                    <span class="yani-fixed-toc__toggle-icon" aria-hidden="true">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <nav class="yani-fixed-toc__popover" id="yani-fixed-toc-popover" aria-label="Muc luc bai viet">
                    <div class="yani-fixed-toc__header">
                        <span class="yani-fixed-toc__title">Muc luc bai viet</span>
                        <button class="yani-fixed-toc__close" type="button" aria-label="Dong muc luc">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <ul class="yani-fixed-toc__list">
                        <?php foreach ($this->headings as $heading): ?>
                            <li class="yani-fixed-toc__item yani-fixed-toc__item--h<?php echo esc_attr((string) $heading['level']); ?>">
                                <a href="#<?php echo esc_attr($heading['id']); ?>" class="yani-fixed-toc__link">
                                    <?php echo esc_html($heading['text']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
            <?php
        }

        private function should_run()
        {
            return !is_admin() && !is_feed() && !wp_doing_ajax() && is_singular('post');
        }

        private function asset_version($file)
        {
            return file_exists($file) ? (string) filemtime($file) : self::VERSION;
        }

        /**
         * @param string              $base_id
         * @param array<string, bool> $used_ids
         * @return string
         */
        private function unique_id($base_id, $used_ids)
        {
            $id = $base_id;
            $index = 2;

            while (isset($used_ids[$id])) {
                $id = $base_id . '-' . $index;
                $index++;
            }

            return $id;
        }
    }
}

new Yani_Fixed_TOC_Plugin();
