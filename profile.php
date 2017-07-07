<?
session_start();
require "conn.php";
require "ip.php";
?>
  <?
$id=mysql_real_escape_string($_GET['id']);
$sql ="SELECT * FROM `users` where id=$id";
$result = mysql_query($sql,$conn);
if($row = mysql_fetch_array($result)){
    $user_name=$row['name'];
    $avatar=$row['avatar'];
    $bio=$row['bio'];
    $user_banner=$row['banner'];
    if($bio===''){
      $bio='ta好懒惰，还没有设置介绍呢';
    }
}else{
    
}
?>
<html lang="zh-CN" class="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$user_name?></title>
    <link rel="stylesheet" id="animate.styles-css" href="issue_css/animate.min.css?ver=1.8.0" type="text/css" media="all">
    <link rel="stylesheet" id="cptch_stylesheet-css" href="issue_css/front_end_style.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="issue_css/dashicons.min.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="cptch_desktop_style-css" href="issue_css/desktop_style.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="smartideo_css-css" href="issue_css/smartideo.css?ver=2.0.9" type="text/css" media="screen">
    <link rel="stylesheet" id="wp-content-permission-plugin-styles-css" href="issue_css/public.css?ver=1.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="issuem_style-css" href="issue_css/issuem.css?ver=2.4.0" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-issuem-flexslider-css" href="issue_css/flexslider.css?ver=2.4.0" type="text/css" media="all">
    <link rel="stylesheet" id="chld_thm_cfg_parent-css" href="issue_css/style.css?ver=4.4.5" type="text/css" media="all">
    <link rel="stylesheet" id="um_minified-css" href="issue_css/um.min.css?ver=1.3.52" type="text/css" media="all">
    <script type="text/javascript" src="issue_js/jquery.js?ver=1.11.3"></script>
    <link rel="icon" href="icons/cropped-bird_favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="icons/cropped-bird_favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="icons/cropped-bird_favicon-180x180.png">
    <meta name="msapplication-TileImage" content="icons/cropped-bird_favicon-270x270.png">
</head>
<body class="page-template-default browser-chrome os-windows aesop-core aesop-on-cover-child-for-offline">
  <?
  require 'header.php';
  ?>
  <div id="page" class="hfeed site">
    <div id="content" class="site-content">
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <div class="cover">
            <div class="cover-background darken" style="background-image: url('<?=$user_banner?>');"></div>
            <header class="cover-header">
              <div class="profile">
	              <div class="profile-avatar">
		              <img src="<?=$avatar?>" class="func-um_user gravatar avatar avatar-120 um-avatar" width="120" height="120" alt="">	</div>
                <div class="profile-info">
                    <h1 class="cover-title"><?=$user_name?></h1>
                </div>
                <div class="profile-bio">
                  <?=$bio?>
                </div>
              </div>
            </header>
          </div>
          
              <?
              $sql ="SELECT * FROM `articles` where user_id='$id' ORDER BY id DESC"; //SQL语句
              $result = mysql_query($sql,$conn); //查询
              while($row = mysql_fetch_array($result)){
              ?>
          <article id="post-<?=$row['id']?>" class="post-7569 article type-article status-publish format-standard has-post-thumbnail hentry category-feature issuem_issue-80">
            <div class="entry-featured-image" style="background-image: url('<?=$row['headpic']?>');">
              <a href="article.php?id=<?=$row['id']?>"></a>
			      </div>
            <header class="entry-header">
              <h1 class="entry-title">
                <a href="article.php?id=<?=$row['id']?>" rel="bookmark"><?=$row['title']?></a>
              </h1>
            </header>
            <div class="entry-summary">
              <p><?=$row['quote']?></p>
            </div>
            <header class="entry-header">
              <div class="entry-meta">
                <!--
                <span class="entry-subtitle">
                  <a rel="category tag"><?=$row['time']?></a>
                </span>｜-->
                <p>
                  <a title="<?=$row['time']?>" rel="author"><?=$row['time']?></a>
                </p>
                
                <?
                    if(isset($_SESSION['is_admin'])){
                      if ($_SESSION['is_admin']===1 || $_SESSION['is_admin']==="1") {
                        ?>
                        <a href="edit_post.php?id=<?=$row['id']?>">编辑</a>｜<a href="del_post.php?id=<?=$row['id']?>">删除</a>  
                        <?
                      }
                    }
                    ?>
              </div>
            </header>
          </article>
          <?
          }
          ?>
          
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