			<div class="page-sidebar sidebar horizontal-bar">
                <div class="page-sidebar-inner">
                    <ul class="menu accordion-menu">
                        <li class="nav-heading"><span>Navigation</span></li>
                        <li <?php if($this->uri->segment(2) == ''){?>class="active"<?php }?>>
                        	<a href="<?php echo base_url();?>apanel">
                        		<span class="menu-icon icon-speedometer"></span>
                        		<p>Dashboard</p>
                        	</a>
                        </li>
                      
                        <li class="nav-heading"><span>Features</span></li>
                        <li class="droplink">
                        	<a href="#">
                        		<span class="fa fa-globe"></span>
                        		<p>&nbsp;&nbsp;&nbsp;Website</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>apanel/noticeBoard">NOTICE BOARD</a></li>
                               
                                <li><a href="<?php echo base_url();?>apanel/latestNews">THOUGHTS</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            
            <div class="page-inner">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb container">
                        <li class="active"><?php echo $smallTitle; ?></li>
                    </ol>
                </div>
                <div class="page-title">
                    <div class="container">
                        <h3><?php echo $bigTitle; ?></h3>
                    </div>
                </div>
              