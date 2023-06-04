<div id="header">
  <h1><a href="home.php">Biblioteca-IMPN</a></h1>
</div>

<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a>
  <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom"
    title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a
    class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
</div>

<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">

    <li class=""><a title="" href="userGest.php"><i class="icon icon-cog"></i> <span class="text"></span></a>
    </li>


    <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages"
        class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text"><?=$_SESSION['username']?></span> <b
          class="caret"></b></a>
      <ul class="dropdown-menu" style="margin-left:-80px;font-family:calibri;">
        <li><a class="sAdd" style="background: transparent;color:#333;" href="profile.php"><i
              class="icon-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meu Perfil</a></li>

        <li><a class="sInbox" title="" style="background: transparent;color:#333;" href="../login.php"><i
              class="icon-off"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terminar Sessão</a></li>
        <li><a class="sOutbox" title="" style="background: transparent;color:#333;"><img
              src="../assets/image/icons/ao.png">&nbsp;&nbsp;&nbsp;Portugues (Angola)</a></li>

      </ul>
    </li>
  </ul>
</div>



<div id="sidebar">
  <a href="#" style="text-decoration: none;" class="visible-phone"><i class="icon icon-align-justify"></i></a>
  <ul>
    <li> <a href="listBook.php"><i class="icon icon-list"></i> <span>Listagem dos Manuais</span></a> </li>
    <li> <a href="regiterBook.php"><i class="icon icon-upload"></i> <span>Cadastro de Manuais</span></a> </li>
    <li><a href="home.php"><i class="icon icon-home"></i> <span>Pagina Inicial</span></a> </li>
  </ul>
</div>