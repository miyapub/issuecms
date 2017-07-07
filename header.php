<header class="header headroom headroom--not-bottom headroom--pinned headroom--top">
  <div class="backdrop"></div>
  <div class="site-nav">
    <a class="site-search" href="all-issues.php">往期</a>
    <!--<a class="site-search" href="devices.php">设备</a>-->
    <!--<a class="site-search" href="companys.php">公司</a>-->
    
    <?
if(isset($_SESSION['user_id'])){
    ?>
      <a class="site-search" href="user.php">
        <?=$_SESSION['user_name']?>
      </a>
      <a class="site-search" href="logout.php">退出</a>
      <?
}else{
    ?>
        <a class="site-search" href="login.php">登录</a>
        <?
}
?>
  </div>
  <div class="site-info">
    <a href="index.php" class="site-title">煮豆</a>
    <span class="site-description"></span>
  </div>
</header>