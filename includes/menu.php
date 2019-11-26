		<!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div>
                    <h2><a href="<?=$BASE?>index.php">Alianza Revelde</a></h2>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li  <?php if($MENU==0) echo "class='active'";?>>
                                <a href="<?=$BASE?>index.php"><i class="ti-dashboard"></i><span>Actualidad</span></a>
                            </li>
                            <li <?php if($MENU>0&&$MENU<4) echo "class='active'";?>>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-folder"></i><span>Documentos</span></a>
                                <ul class="collapse">
                                    <li <?php if($MENU==1) echo "class='active'";?>><a href="<?=$BASE?>alianzas">Alianzas</a></li>
                                    <li <?php if($MENU==2) echo "class='active'";?>><a href="<?=$BASE?>bajas">Bajas</a></li>
                                    <li <?php if($MENU==3) echo "class='active'";?>><a href="<?=$BASE?>batallas">Batallas</a></li>
                                </ul>
                            </li>
							<li  <?php if($MENU==4) echo "class='active'";?>>
                                <a href="<?=$BASE?>jedis.php"><i class="fa fa-bar-chart"></i><span>Jedis</span></a>
                            </li>
                            <li  <?php if($MENU==5) echo "class='active'";?>>
                                <a href="<?=$BASE?>admin"><i class="ti-dashboard"></i><span>Administración</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->