<!-- Header-Top -->
<div class="header-top">
  <nav class="navbar navbar-dark bg-inverse">
<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#topMenu">
  &#9776;
</button>
<div class="collapse navbar-toggleable-xs" id="topMenu">
    <div class="<?php echo $classContainer; ?>">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <?php if ($this->countModules('position-1')) : ?>
        <jdoc:include type="modules" name="position-1" style="none" />
      <?php endif; ?>
    </div> <!-- End Container -->
  </div>
  </nav>
  <!-- Login button -->
<!--   <div class="login-menu">
    <a class="btn-login icon-user hasTooltip" title="" data-original-title="
      <?php
      if ($user->name) {
        echo "Привет <strong>$user->name</strong>";
      }else{  
        echo "Авторизоваться";
      }?>"
        <?php if (!$user->name) {
         echo "href='index.php?option=com_users'>&nbsp;&nbsp;Авторизация"; }else{
         echo "href='index.php?option=com_users&view=profile'>&nbsp;&nbsp;$user->name";} ?>
    </a>
    <ul>
      <?php if(!$user->name){echo "<li><a href='index.php?option=com_users'>Войти</a></li>";}?>
      <?php if(!$user->name){echo "<li><a href='index.php?option=com_users&view=reset'>Забыли пароль?</a></li>";}?>
      <?php if(!$user->name){echo "<li><a href='index.php?option=com_users&view=remind'>Забыли логин?</a></li>";}?>
      <?php if(!$user->name){echo "<li><a href='index.php?option=com_users&view=registration'>Зарегистрироваться</a></li>";}?>
      <?php if($user->name){echo "<li><a href='index.php?option=com_users&task=logout'>Выйти</a></li>";}?>
      <?php if($user->name){echo "<li><a href='index.php?option=com_users&view=profile'>Настройки</a></li>";}?>
    </ul>
  </div> --> <!-- End login button -->
</div><!-- End Header-Top -->
