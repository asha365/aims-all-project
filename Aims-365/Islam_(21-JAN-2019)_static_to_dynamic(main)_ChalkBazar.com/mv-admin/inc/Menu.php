<?php 
  $usertype = $_SESSION['type']; 
?>
<!----------------------------------------------->		
<nav class="navbar navbar-default menu">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php 
  if($usertype == 'admin'){
?>
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if($pg=='Home'){ echo 'active'; } ?>"><a href="index.php?page=Home">Home</a></li>
        <li class="<?php if($pg=='Product'){ echo 'active'; } ?>"><a href="index.php?page=Product">Product</a></li>
        <li class="<?php if($pg=='Menu-option'){ echo 'active'; } ?>"><a href="index.php?page=Menu-option">Menu</a></li>
        <li class="<?php if($pg=='Siteoption'){ echo 'active'; } ?>"><a href="index.php?page=Siteoption">Site Option</a></li>
        <li class="<?php if($pg=='Inbox'){ echo 'active'; } ?>"><a href="index.php?page=Inbox">Inbox (12)</a></li>
        <li class="<?php if($pg=='Cosmatics'){ echo 'active'; } ?>"><a href="index.php?page=Adds">Adds</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Option <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?page=Profile">Profile</a></li>
            <li><a href="index.php?page=Changepassword">Change Password!</a></li>            
            <li role="separator" class="divider"></li>
            <li><a href="index.php?page=Useroption">User Option</a></li>                 
            <li role="separator" class="divider"></li>
            <li><a href="Logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
<?php 
  }elseif($usertype == 'manager'){
?>
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if($pg=='Home'){ echo 'active'; } ?>"><a href="index.php?page=Home">Home</a></li>
        <li class="<?php if($pg=='Product'){ echo 'active'; } ?>"><a href="index.php?page=Product">Product</a></li>
        <li class="<?php if($pg=='Menu-option'){ echo 'active'; } ?>"><a href="index.php?page=Menu-option">Menu</a></li>
        <li class="<?php if($pg=='Inbox'){ echo 'active'; } ?>"><a href="index.php?page=Inbox">Inbox (12)</a></li>
        <li class="<?php if($pg=='Cosmatics'){ echo 'active'; } ?>"><a href="index.php?page=Adds">Adds</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Option <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?page=Profile">Profile</a></li>
            <li><a href="index.php?page=Changepassword">Change Password!</a></li>                 
            <li role="separator" class="divider"></li>
            <li><a href="Logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
<?php 
  }elseif($usertype == 'editor'){
?>
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if($pg=='Home'){ echo 'active'; } ?>"><a href="index.php?page=Home">Home</a></li>
        <li class="<?php if($pg=='Inbox'){ echo 'active'; } ?>"><a href="index.php?page=Inbox">Inbox (12)</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Option <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?page=Profile">Profile</a></li>
            <li><a href="index.php?page=Changepassword">Change Password!</a></li>                
            <li role="separator" class="divider"></li>
            <li><a href="Logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
<?php 
  }elseif($usertype=='production'){
?>
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if($pg=='Home'){ echo 'active'; } ?>"><a href="index.php?page=Home">Home</a></li>
        <li class="<?php if($pg=='Product'){ echo 'active'; } ?>"><a href="index.php?page=Product">Product</a></li>
        <li class="<?php if($pg=='Menu-option'){ echo 'active'; } ?>"><a href="index.php?page=Menu-option">Menu</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Option <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?page=Profile">Profile</a></li>
            <li><a href="index.php?page=Changepassword">Change Password!</a></li>            
            <li role="separator" class="divider"></li>    
            <li><a href="Logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
<?php 
  }
?>    



    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<hr/>
<!----------------------------------------------->	