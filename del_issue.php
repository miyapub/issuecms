<?
session_start();
require "conn.php";
require "ip.php";
require "authorize.php";
require "is_admin.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='POST'){
    $id=mysql_real_escape_string($_POST['id']);
    $sql="DELETE FROM `issues` WHERE `id` = $id;";
    mysql_query($sql,$conn);
    ?>
    <script>
        window.parent.location.href="all-issues.php";
    </script>
    <?
    exit;
}
if($method==='GET'){
    $id=mysql_real_escape_string($_GET['id']);
    if(isset($id)){
        $sql ="SELECT * FROM `issues` where id='$id'";
        $result = mysql_query($sql,$conn);
        if($row = mysql_fetch_array($result)){
            $issue_id=$row['id'];
            $title=$row['title'];
            $flag=true;
        }else{
            $title="没有该期刊";
            $flag=false;
        }
    }else{
        exit;
    }
}
?>
  <html lang="zh-CN">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>煮豆 · <?=$title?></title>
    <link rel="stylesheet" id="animate.styles-css" href="issue_css/animate.min.css?ver=1.8.0" type="text/css" media="all">
    <link rel="stylesheet" id="cptch_stylesheet-css" href="issue_css/front_end_style.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="issue_css/dashicons.min.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="cptch_desktop_style-css" href="issue_css/desktop_style.css?ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="smartideo_css-css" href="issue_css/smartideo.css?ver=2.0.9" type="text/css" media="screen">
    <link rel="stylesheet" id="wp-content-permission-plugin-styles-css" href="issue_css/public.css?ver=1.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="issuem_style-css" href="issue_css/issuem.css?ver=2.4.0" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-issuem-flexslider-css" href="issue_css/flexslider.css?ver=2.4.0" type="text/css" media="all">
    <link rel="stylesheet" id="chld_thm_cfg_parent-css" href="issue_css/style.css?ver=4.4.4" type="text/css" media="all">
    <link rel="stylesheet" id="um_minified-css" href="issue_css/um.min.css?ver=1.3.52" type="text/css" media="all">
    <script type="text/javascript" src="issue_js/jquery.js?ver=1.11.3"></script>
    <meta name="theme-color" content="#232323">
    <link rel="icon" href="icons/cropped-bird_favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="icons/cropped-bird_favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="icons/cropped-bird_favicon-180x180.png">
    <meta name="msapplication-TileImage" content="icons/cropped-bird_favicon-270x270.png">
  </head>
  <body class="archive tax-issuem_issue term-80 browser-chrome os-windows aesop-core aesop-on-cover-child-for-offline">
    <?
    require 'header.php';
    ?>
    <div id="page" class="hfeed site">
      <div id="content" class="site-content">
        <section id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
            <div class="cover">
              <div class="cover-background darken" style="background-image: url('<?=$row['pic']?>');"></div>
              <header class="cover-header">
                <h2 class="cover-subtitle" style="display: inline-block">
    Issue <?=$row['id']?>		</h2>
                <h1 class="cover-title">
    <div class="issuem_title"><?=$title?></div>
    </h1>
                <div class="taxonomy-description">
                  <p><?=$row['sub_title']?></p>
                  <?
                    if(isset($_SESSION['is_admin'])){
                      if ($_SESSION['is_admin']===1 || $_SESSION['is_admin']==="1") {
                        ?>   
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" value="确定删除">
                        </form>
                        <?
                      }
                    }
                    ?>
                </div>
              </header>
            </div>
            <div id="posts" class="grid card-3 masonry" style="position: relative; height: 1280px;">
              <?
              if($flag){
                ?>
<?
              $sql ="SELECT * FROM `articles` where issue_id=$issue_id and display=1 ORDER BY id DESC"; //SQL语句
              $result = mysql_query($sql,$conn); //查询
              while($row = mysql_fetch_array($result)){
                $user_id=$row['user_id'];
                $user_sql="select * from users where id=$user_id";
                $user_result = mysql_query($user_sql,$conn);
                $user_row = mysql_fetch_array($user_result);
              ?>
              <article id="post-<?=$row['id']?>" class=" article type-article status-publish format-standard has-post-thumbnail hentry category-feature issuem_issue-80 masonry-brick" style="position: absolute; left: 0%; top: 50px;">
                <div class="entry-featured-image" style="background-image: url('<?=$row['headpic']?>');">
                  <a href="article.php?id=<?=$row['id']?>"></a>
                </div>
                <header class="entry-header">
                  <h1 class="entry-title"><a href="article.php?id=<?=$row['id']?>" rel="bookmark"><?=$row['title']?></a></h1>
                </header>
                <!-- .entry-header -->
                <div class="entry-summary">
                  <p><?=$row['quote']?></p>
                </div>
                <!-- .entry-summary -->
                <header class="entry-header">
                  <div class="entry-meta">
                    <?
                    if(isset($_SESSION['is_admin'])){
                      if ($_SESSION['is_admin']===1 || $_SESSION['is_admin']==="1") {
                        ?>
                        <a href="edit_article.php?id=<?=$row['id']?>">编辑</a>｜<a href="del_article.php?id=<?=$row['id']?>">删除</a>  
                        <?
                      }
                    }
                    ?>
                    <!--<span class="entry-subtitle"><a href="category.php?keywords=feature" rel="category tag">专题</a></span>｜--><a href="profile.php?id=<?=$user_row['id']?>" title="admin" rel="author"><?=$user_row['name']?></a> </div>
                  <!-- .entry-meta -->
                </header>
              </article>
              <?
              }
              ?>
                <?
              }else{
                ?>
                  
                <?
              }
              ?>
              
            </div>
          </main>
          <!-- #main -->
        </section>
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
    <script type="text/javascript" src="issue_js/headroom.min.js?ver=20140814"></script>
    <script type="text/javascript" src="issue_js/cover.js?ver=20140210"></script>
    <script type="text/javascript" src="issue_js/masonry.min.js?ver=3.1.2"></script>
    <script type="text/javascript" src="issue_js/cover-masonry.js?ver=20150730"></script>
    <div id="ppsPopupBgOverlay"></div>
  </body>
  </html>
  <?
    mysql_close();
    ?>