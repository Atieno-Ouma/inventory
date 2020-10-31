        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"> <span>Inventory </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url('assets/build/profiles/'.$this->session->userdata('image'))?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('username'); ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Inventory Menu</h3>
                <ul class="nav side-menu">
                    <li class="side-items"><a href="<?=base_url('Reports');?>"><i class="fa fa-print"></i> Dashboard</a></li>
                    <li class="side-items"><a href="<?=base_url('Computers');?>"><i class="fa fa-desktop"></i> Equipments<!-- <span class="label label-info pull-right">80%</span><span class="label label-danger pull-right">D</span> --></a></li>                     
                    <li class="side-items"><a href="<?=base_url('Peripherals-category');?>"><i class="fa fa-support"></i> Rooms</a></li>
                    <li class="side-items"><a href="<?=base_url('Peripherals-item');?>"><i class="fa fa-plug"></i> Books</a></li>
                    <?php if($this->session->userdata('usertype') != 'User'): ?>
                      <li class="side-items"><a href="<?=base_url('navigation/user');?>"><i class="fa fa-user"></i> User</a></li>
                    <?php endif; ?>
                   
                </ul>
              </div>
            </div>
          </div>
        </div>