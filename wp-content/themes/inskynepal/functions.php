<?php

    // Creates options pages for the theme
    require get_template_directory() . '/inc/options.php';
    require get_template_directory() . '/inc/custom_post_types.php';
    require get_template_directory() . '/inc/meta_boxes.php';

    //setup admin panel styles
    function inskynepal_admin_scripts(){
        //add css files to the admin page
        wp_register_style('inskynepal_admin_css', get_template_directory_uri() . '/assets/css/inskynepal.admin.css', array(), '1.0.0', 'all' );
        
        wp_enqueue_style('inskynepal_admin_css');
        
        //enqueue media to handle media uploader in option page
        wp_enqueue_media();

        //add javascript files to the admin page
        wp_register_script('inskynepal_admin_script', get_template_directory_uri() . '/assets/js/admin.scripts.js', array('jquery'), '1.0.0', true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('inskynepal_admin_script');
    }
    add_action('admin_enqueue_scripts', 'inskynepal_admin_scripts');

    //setup front-end side styles and scripts
    function inskynepal_styles(){
        // Adding CSS Files
        wp_register_style('inskynepal_bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), '1.0.0', 'all');
        wp_register_style('inskynepal_css', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.0.0', 'all');

        wp_enqueue_style('inskynepal_bootstrap_css');
        wp_enqueue_style('inskynepal_css');

        // Adding JS Files

        if( is_page( 'booking' ) ){
            wp_register_script('insky_booking_js', get_template_directory_uri() . '/assets/js/booking.min.js', NULL, '1.0.0', true);
            wp_enqueue_script( 'insky_booking_js' );
            
        }

        wp_register_script('inskyjs', get_template_directory_uri() . '/assets/js/insky.min.js', NULL, '1.0.0', true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('inskyjs');

    }
    add_action('wp_enqueue_scripts', 'inskynepal_styles');

    // setup featured image
    function inskynepal_setup(){
        add_theme_support('post-thumbnails');

    }
    add_action('after_setup_theme', 'inskynepal_setup');

    // setup menus
    function inskynepal_menus(){
        register_nav_menus(array(
            'header-menu' => __('Header Menu', 'inskynepal')

        ));

    }
    add_action('init','inskynepal_menus');

    // Adding Excerpt in Wordpress Pages
    add_post_type_support( 'page', 'excerpt' );
    
    //-----------------------------------------------------------------------
    
    class FLHM_HTML_Compression
{
protected $flhm_compress_css = true;
protected $flhm_compress_js = true;
protected $flhm_info_comment = true;
protected $flhm_remove_comments = true;
protected $html;
public function __construct($html)
{
if (!empty($html))
{
$this->flhm_parseHTML($html);
}
}
public function __toString()
{
return $this->html;
}
protected function flhm_bottomComment($raw, $compressed)
{
$raw = strlen($raw);
$compressed = strlen($compressed);
$savings = ($raw-$compressed) / $raw * 100;
$savings = round($savings, 2);
return '<!--HTML compressed, size saved '.$savings.'%. From '.$raw.' bytes, now '.$compressed.' bytes-->';
}
protected function flhm_minifyHTML($html)
{
$pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
$overriding = false;
$raw_tag = false;
$html = '';
foreach ($matches as $token)
{
$tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
$content = $token[0];
if (is_null($tag))
{
if ( !empty($token['script']) )
{
$strip = $this->flhm_compress_js;
}
else if ( !empty($token['style']) )
{
$strip = $this->flhm_compress_css;
}
else if ($content == '<!--wp-html-compression no compression-->')
{
$overriding = !$overriding; 
continue;
}
else if ($this->flhm_remove_comments)
{
if (!$overriding && $raw_tag != 'textarea')
{
$content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
}
}
}
else
{
if ($tag == 'pre' || $tag == 'textarea')
{
$raw_tag = $tag;
}
else if ($tag == '/pre' || $tag == '/textarea')
{
$raw_tag = false;
}
else
{
if ($raw_tag || $overriding)
{
$strip = false;
}
else
{
$strip = true; 
$content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content); 
$content = str_replace(' />', '/>', $content);
}
}
} 
if ($strip)
{
$content = $this->flhm_removeWhiteSpace($content);
}
$html .= $content;
} 
return $html;
} 
public function flhm_parseHTML($html)
{
$this->html = $this->flhm_minifyHTML($html);
if ($this->flhm_info_comment)
{
$this->html .= "\n" . $this->flhm_bottomComment($html, $this->html);
}
}
protected function flhm_removeWhiteSpace($str)
{
$str = str_replace("\t", ' ', $str);
$str = str_replace("\n",  '', $str);
$str = str_replace("\r",  '', $str);
while (stristr($str, '  '))
{
$str = str_replace('  ', ' ', $str);
}   
return $str;
}
}
function flhm_wp_html_compression_finish($html)
{
return new FLHM_HTML_Compression($html);
}
function flhm_wp_html_compression_start()
{
ob_start('flhm_wp_html_compression_finish');
}
add_action('get_header', 'flhm_wp_html_compression_start');

?>