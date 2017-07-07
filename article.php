<?
session_start();
require "conn.php";
require "ip.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    $id=mysql_real_escape_string($_GET['id']);
    $sql ="SELECT * FROM `articles` WHERE id=$id";
    $result = mysql_query($sql,$conn);
    $row = mysql_fetch_array($result);
    $user_id=$row['user_id'];
    
    $user_sql="select * from users where id=$user_id";
    $user_result = mysql_query($user_sql,$conn);
    $user_row = mysql_fetch_array($user_result);
    
    mysql_query("update articles set viewed=viewed+1 where id='$id'",$conn);
}
?>
  <html lang="zh-CN">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?=$row['title']?>
    </title>
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
  </head>
  <body class="single single-article postid-7540 single-format-standard browser-chrome os-windows aesop-core aesop-on-cover-child-for-offline">
    <?
require 'header.php';
?>
      <div id="page" class="hfeed site">
        <div id="content" class="site-content">
          <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
              <div class="cover featured-image full">
                <div class="cover-background" style="background-image: url('<?=$row['headpic']?>');" role="img"></div>
                <header class="cover-header">
                  <h1 class="cover-title"><?=$row['title']?>
                  
                  <?
                  if(isset($_SESSION['is_admin'])){
                    //admin
                      ?>
                      <a href="edit_article.php?id=<?=$id?>">编辑</a>
                      <a href="del_article.php?id=<?=$id?>">删除</a>
                      <?
                  }else{
                    //作者
                    if(isset($_SESSION['user_id'])){
                      if($_SESSION['user_id']===$user_id){
                        ?>
                        <a href="edit_article.php?id=<?=$id?>">编辑</a>
                        <a href="del_article.php?id=<?=$id?>">删除</a>
                        <?
                      }
                    }
                  }

                  
                  ?>
                  
                  </h1>
                  <div class="entry-meta">
                    <span class="posted-on"><a class="author vcard url fn n" href="profile.php?id=<?=$user_row['id']?>"><img src="<?=$user_row['avatar']?>" class="func-um_user gravatar avatar avatar-35 um-avatar" width="35" height="35" alt="">  <span class="name"><?=$user_row['name']?></span></a>
                    &nbsp;
                    <a href="https://the-offline.com/article/science-of-crispy/" rel="bookmark">
<time class="entry-date published" datetime="<?=$row['time']?>"><?=$row['time']?> <?=$row['viewed']?></time>
<!--<time class="updated" datetime="2017-02-06T05:43:12+00:00">2017年2月6日</time>-->
</a>
                    </span>
                  </div>

                </header>

                <a href="#post-<?=$id?>" class="cover-background-jump"><i class="fa fa-fw fa-angle-down"></i></a>


              </div>


              <article id="post-<?=$id?>" class="article type-article status-publish format-standard has-post-thumbnail hentry category-feature issuem_issue-80">

                <div class="entry-content aesop-entry-content">
                  <?=$row['text']?>
                    <!-- .entry-content -->
                    <!--
<footer class="entry-meta">
<div class="profile">
<div class="profile-avatar">
<img src="<?=$user_row['avatar']?>" class="func-um_user gravatar avatar avatar-80 um-avatar" width="80" height="80" alt=""> </div>
<div class="profile-info">
<h4><a class="author-link" href="profile.php?id=<?=$user_row['id']?>" rel="author"><?=$user_row['name']?></a></h4>
</div>
<div class="profile-bio">
<?=$user_row['bio']?>
</div>
</div>
</footer>-->
                    <!-- .entry-meta -->
                </div>
              </article>
              <!-- #post-## -->
              <div id="comments" class="comments-area">
                <h2>评论</h2>
                <ol class="comment-list">
                  <?
$sql ="SELECT comments.created_by as user_id,users.avatar as avatar,comments.text as comment_text,comments.pic as pic,users.name as user_name, comments.time as time FROM `comments`,users WHERE comments.created_by=users.id and comments.article_id=$id";
$result = mysql_query($sql,$conn);
while($row = mysql_fetch_array($result)){
    ?>
                    <li id="comment-<?=$row['id']?>" class="comment even thread-odd thread-alt depth-1">
                      <article id="div-comment-<?=$row['id']?>" class="comment-body">
                        <footer class="comment-meta">
                          <div class="comment-author vcard">
                            <a href="profile.php?id=<?=$row['user_id']?>">
    <img src="<?=$row['avatar']?>" width="35" height="35" alt="" class="avatar avatar-35wp-user-avatar wp-user-avatar-35 alignnone photo avatar-default"> <b class="fn"><?=$row['user_name']?></b></a><span class="says">说道：</span></div>
                          <!-- .comment-author -->

                          <div class="comment-metadata">

                            <time datetime="<?=$row['time']?>">
                              <?=$row['time']?>
                            </time>

                          </div>
                          <!-- .comment-metadata -->

                        </footer>
                        <!-- .comment-meta -->

                        <div class="comment-content">
                          <p>
                            <?=$row['comment_text']?>
                          </p>
                          <p>
                            <?
    $tmp_arr = explode('.',$row['pic']);
    $ext_name=$tmp_arr[count($tmp_arr)-1];
    
    if($ext_name==="jpg" || $ext_name==="gif" || $ext_name==="jpeg" || $ext_name==="png"){
        ?>
                              <img src="<?=$row['pic']?>" alt="">
                              <?
    }
    ?>
                          </p>
                        </div>
                        <!-- .comment-content -->
                        <!--
    <div class="reply"><a rel="nofollow" class="comment-reply-link" href="https://the-offline.com/article/discuss-books-you-never-read/?replytocom=374#respond" onclick="return addComment.moveForm( &quot;div-comment-374&quot;, &quot;374&quot;, &quot;respond&quot;, &quot;6766&quot; )"
    aria-label="回复给小红">回复</a></div>-->
                      </article>
                      <!-- .comment-body -->
                    </li>
                    <?
}
?>
                </ol>
                <!-- .comment-list -->
                <?
if(isset($_SESSION['user_id'])){
    ?>




                  <div id="respond" class="comment-respond">
                    <iframe class="msg" name="msg"></iframe>
                    <h3 id="reply-title" class="comment-reply-title">发表评论 <small>
    <form action="save_comment.php" method="post" enctype="multipart/form-data" target="msg" class="comment-form">
    
    <input type="hidden" name="type" value="article">
    <input type="hidden" name="article_id" value="<?=$id?>">
    
    <div class="check-code-pan">
    <input type="text" class="check-code" placeholder="验证码" name="code" /><img class="code" src="code.php?id=<?=rand()?>" alt="">
    </div>
    
    <p>
    <label for="text">评论</label>
    <textarea id="text" name="text" cols="45" rows="8" aria-required="true" required="required"></textarea>
    </p>
    
    <p>
    <input type="file" name="file" id="file" />
    </p>
    
    <p class="form-submit">
    <input name="submit" type="submit" id="submit" class="submit" value="发表评论">
    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
    </p>
    </form>
    </div>
    
    
    
    <?
}else{
    ?>
    <a href="login.php">登录后才能发表评论</a>
    <?
}
?>


<!-- #respond -->

</div>
<!-- #comments -->

<!-- .navigation -->

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
<?
mysql_close();
?>