<?php
/*
Plugin Name: LIVE TV
Description: All live tv channels in one page, make your website more interested to your visitors.
Version: 1.2
Author: OmarTeacher
Author URI: mailto:omarteacher@gmail.com
*/
if (!class_exists('live_Tv'))
{
  class live_Tv
  {
    public $_name;
    public $page_title;
    public $page_name;
    public $page_id;

    public function __construct()
    {
      $this->_name      = 'livelivetv';
      $this->page_title = 'LIVE TV';
      $this->page_name  = $this->_name;
      $this->page_id    = $pageid1;

      register_activation_hook(__FILE__, array($this, 'activate'));
      register_deactivation_hook(__FILE__, array($this, 'deactivate'));
      register_uninstall_hook(__FILE__, array($this, 'uninstall'));

      add_filter('parse_query', array($this, 'query_parser'));
      add_filter('the_postes', array($this, 'page_filter'));
// Widget scripts and css code
		add_action( 'widgets_init', array( $this, 'include_widget' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'livetv_scripts' ) );
		add_action( 'custom_init', array( $this, 'get_page_url' ) );
 add_shortcode('adsense', 'get_adsense');
    }

/**
 *  livetv scripts and styles.
 */
    public function livetv_scripts() {
    wp_enqueue_style( 'livelivetv-style', plugins_url( 'css/style.css', __FILE__ ));
    wp_enqueue_script( 'livelivetv-screenfull', plugins_url( 'js/screenfull.js', __FILE__ ));
    wp_enqueue_script( 'livelivetv-full', plugins_url( 'js/full.js', __FILE__ ));

}

function get_adsense($atts) {
	return 'test111';
}


    public function activate()
    {
      global $wpdb;      

      delete_option($this->_name.'_page_title');
      add_option($this->_name.'_page_title', $this->page_title, '', 'yes');

      delete_option($this->_name.'_page_name');
      add_option($this->_name.'_page_name', $this->page_name, '', 'yes');

      delete_option($this->_name.'_page_id');
      add_option($this->_name.'_page_id', $this->page_id, '', 'yes');

      $the_page = get_page_by_title($this->page_title);

      if (!$the_page)
      {
        // Create post object
        $_p = array();
        $_p['post_title']     = $this->page_title;
        $_p['post_content']   = '[livetv=full]';
        $_p['post_status']    = 'publish';
        $_p['post_type']      = 'page';
        $_p['comment_status'] = 'closed';
        $_p['ping_status']    = 'closed';
        $_p['post_category'] = array(1); // the default 'Uncatrgorised'

        // Insert the post into the database
        $this->page_id = wp_insert_post($_p);
      }
      else
      {
        // the plugin may have been previously active and the page may just be trashed...
        $this->page_id = $the_page->ID;

        //make sure the page is not trashed...
        $the_page->post_status = 'publish';
        $this->page_id = wp_update_post($the_page);
      }

      delete_option($this->_name.'_page_id');
      add_option($this->_name.'_page_id', $this->page_id);
    }

    public function deactivate()
    {
      $this->deletePage();
      $this->deleteOptions();
    }

    public function uninstall()
    {
      $this->deletePage(true);
      $this->deleteOptions();
    }

    public function query_parser($q)
    {
      if(isset($q->query_vars['page_id']) AND (intval($q->query_vars['page_id']) == $this->page_id ))
      {
        $q->set($this->_name.'_page_is_called', true);
      }
      elseif(isset($q->query_vars['pagename']) AND (($q->query_vars['pagename'] == $this->page_name) OR ($_pos_found = strpos($q->query_vars['pagename'],$this->page_name.'/') === 0)))
      {
        $q->set($this->_name.'_page_is_called', true);
      }
      else
      {
        $q->set($this->_name.'_page_is_called', true);
      }
    }


    function page_filter($postes)
    {
      global $wp_query;

      if($wp_query->get($this->_name.'_page_is_called'))
      {

        $postes[0]->post_title = __('LIVE TV');

        $postes[0]->post_content = '<div class="containerdiv" ><iframe class="livewidget" id="container1" width="100%" height="600"  border="0" scrolling="no" frameborder="0" src="' . plugins_url('live.php', __FILE__ ) . ''. getpageurl() .''. getpageurl2() .'"></iframe>
<iframe class="listwidget" width=100% height=1700 onload="resizeIframe(this);" scrolling=no src="' . plugins_url( 'list.php', __FILE__ ) . '" name=tvlist border=0 frameborder=0></iframe>
<div class="requestdiv" id="request"></div>
</div>';
      }
      return $postes;
    }

    private function deletePage($hard = false)
    {
      global $wpdb;

      $id = get_option($this->_name.'_page_id');
      if($id && $hard == true)
        wp_delete_post($id, true);
      elseif($id && $hard == false)
        wp_delete_post($id);
    }

	/**
	 * Include widget
	 */
	public function include_widget() {
		include_once( 'widget.php' );
	}

    private function deleteOptions()
    {
      delete_option($this->_name.'_page_title');
      delete_option($this->_name.'_page_name');
      delete_option($this->_name.'_page_id');
    }
  }
}
$livetv = new live_Tv();
?>
<?php
add_shortcode("livetv", "livetv_process_shortcode");
add_action('admin_menu', 'livetv_plugin_setup_menu');
 function getpageurl() {
   $geturl= $_GET[url]; 
return $geturl;
}
 function getpageurl2() {
   $geturl2= $_GET[play]; 
return $geturl2;
}
function livetv_process_shortcode(){
                return '<div style="display:none;"><a rel="follow" title="omarteachertvpluging" href="http://www.livetvone.com/live-tv">omarteachertvplugin</a><a  rel="follow"  title="omarteachertvpluging" href="https://www.ilwareed.info">ilwareed online</a></div><div class="containerdiv" ><iframe class="livewidget" id="container1" width="100%" height="600"  border="0" scrolling="no" frameborder="0" src="' . plugins_url('live.php', __FILE__ ) . '?url='. getpageurl() .'&play='. getpageurl2() .'"></iframe>
<iframe class="listwidget" width=100% height=1700 onload="resizeIframe(this);" scrolling=no src="' . plugins_url( 'list.php', __FILE__ ) . '" name=tvlist border=0 frameborder=0></iframe>
<div class="requestdiv" id="request"></div>
</div>';
}
function livetv_plugin_setup_menu(){
        add_menu_page( 'Live TV', 'Live TV', 'manage_options', 'livetv-plugin', 'livetv_init',$icon_url = '' . plugins_url( 'images/icon.png', __FILE__ ) . '' );
}
 
function livetv_init(){

?>
        <h1>Live TV Panel</h1>
        <h2>How To Use</h2>
<h2>Adding The Menu: <h2><img src="<?php echo '' . plugins_url( 'images/menu.png', __FILE__ ) . ''; ?>" width="100%">

<h2>Adding The Widget: <h2><img src="<?php echo '' . plugins_url( 'images/widgetadding.png', __FILE__ ) . ''; ?>" width="600">

<hr>
</hr>
<h2>Like us on Facebook.</h2>
<iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/hividyapp&tabs&width=270&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=265370096815783" width="270" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

<?php

}

?>