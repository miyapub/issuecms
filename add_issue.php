<?
session_start();
require "conn.php";
require "ip.php";
require "authorize.php";
require "is_admin.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='POST'){
    $title=mysql_real_escape_string($_POST['title']);
    $sub_title=mysql_real_escape_string($_POST['sub_title']);
    $user_id=$_SESSION['user_id'];
    require 'uppicfile.php';
    $file=get_up_load_file('file');
    $sql="INSERT INTO `issues` (`id`, `title`, `sub_title`, `pic`, `time`) VALUES (NULL, '$title', '$sub_title', '$file', CURRENT_TIMESTAMP);";
    $result = mysql_query($sql,$conn);
    $id=mysql_insert_id($conn);
    ?>
    添加成功，<a href="issue.php?id=<?=$id?>" target="_blank">查看</a>
    <script>
      window.parent.location.href="issue.php?id=<?=$id?>";
    </script>
  <?
    //echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url='project.php?id=$id'\">";
    exit;
}
?>
<html lang="zh-CN" class="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>添加期刊</title>
    <link rel="stylesheet" id="animate.styles-css" href="issue_css/animate.min.css?ver=1.8.0" type="text/css" media="all">
    <link rel="stylesheet" id="cptch_stylesheet-css" href="issue_css/front_end_style.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="issue_css/dashicons.min.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="cptch_desktop_style-css" href="issue_css/desktop_style.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="smartideo_css-css" href="issue_css/smartideo.css?ver=2.0.9" type="text/css" media="screen">
    <link rel="stylesheet" id="wp-content-permission-plugin-styles-css" href="issue_css/public.css?ver=1.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="issuem_style-css" href="issue_css/issuem.css?ver=2.4.0" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-issuem-flexslider-css" href="issue_css/flexslider.css?ver=2.4.0" type="text/css" media="all">
    <link rel="stylesheet" id="chld_thm_cfg_parent-css" href="issue_css/style.css?ver=4.4.3" type="text/css" media="all">
    <link rel="stylesheet" id="um_minified-css" href="issue_css/um.min.css?ver=1.3.52" type="text/css" media="all">
    <script type="text/javascript" src="issue_js/jquery.js?ver=1.11.3"></script>
    <link rel="icon" href="icons/cropped-bird_favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="icons/cropped-bird_favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="icons/cropped-bird_favicon-180x180.png">
    <meta name="msapplication-TileImage" content="icons/cropped-bird_favicon-270x270.png">
    <link rel="stylesheet" href="css/form.css?ver=1.0" type="text/css" media="all">
</head>
<body class="page page-template-default browser-chrome os-windows aesop-core aesop-on-cover-child-for-offline">
  <?
  require 'header.php';
  ?>
  <div id="page" class="hfeed site">
    <div id="content" class="site-content">
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <div class="cover">
            <div class="cover-background" role="img"></div>
            <header class="cover-header">
              <h1 class="cover-title">添加</h1>
            </header>
          </div>
          <article id="post-438" class="post-438 page type-page status-publish hentry">
            <div class="entry-content aesop-entry-content">
              <div class="um um-login um-1477 uimob500" style="opacity: 1;">
	                    <div class="um-form">             
                        <iframe class="msg" name="msg" style="width: 100%;height: 40px;"></iframe>
                          <form method="post" target="msg" enctype="multipart/form-data" autocomplete="off">
                          <div class="um-row _um_row_1 " style="margin: 0 0 30px 0;">
                            <div class="um-col-1">
                              <div class="um-field um-field-username um-field-text" data-key="title">
                                <div class="um-field-label">
                                  <label for="username-1477">标题</label>
                                  <div class="um-clear"></div>
                                </div>
                                <div class="um-field-area">
                                  <input class="um-form-field valid " type="text" name="title" id="title" value="" placeholder="标题" data-validate="unique_username" data-key="title">
                                </div>
                              </div>
                              
                              <div class="um-field um-field-user_password um-field-password" data-key="sub_title">
                                <div class="um-field-label">
                                  <label for="user_password-1477">副标题</label>
                                  <div class="um-clear"></div>
                                </div>
                                <div class="um-field-area">
                                  <input class="um-form-field valid " type="text" name="sub_title" id="sub_title" value="" placeholder="副标题" data-validate="" data-key="sub_title">
                                </div>
                              </div>

                              <div class="um-field um-field-user_password um-field-password">
                                <div class="um-field-label">
                                  <label for="user_password-1477">头图</label>
                                  <div class="um-clear"></div>
                                </div>
                                <div class="um-field-area">
                                  <input class="um-form-field valid " type="file" name="file" id="file" />
                                </div>
                              </div>

                              

                              
                            </div>
                          </div>
                          <input type="hidden" name="timestamp" id="timestamp" value="<?=date()?>">		
                          <div class="um-col-alt">
                            <div class="um-clear"></div>
                            <div class="um-left um-half">
                              <input type="submit" value="发布" class="um-button">
                            </div>
                            <div class="um-clear"></div>
                          </div>
                        </form>
                      </div>
                    </div>
            </div>
            <!-- .entry-content -->
          </article>
          <!-- #post-## -->
        </main>
        <!-- #main -->
      </div>
      <!-- #primary -->
    </div>
    <!-- #content -->
    <?
    require 'footer.php';
    ?>
    <!-- #colophon -->
  </div>
  <!-- #page -->
  <div id="um_upload_single" style="display:none">
  </div>
  <div id="um_view_photo" style="display:none">
    <a href="#" data-action="um_remove_modal" class="um-modal-close"><i class="um-faicon-times"></i></a>
    <div class="um-modal-body photo">
      <div class="um-modal-photo">
      </div>
    </div>
  </div>
  <script type="text/javascript" src="issue_js/headroom.min.js"></script>
  <script type="text/javascript" src="issue_js/cover.js"></script>
</body>
</html>