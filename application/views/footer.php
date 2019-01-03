 <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
<footer class="footer_wrap bg_tint_light footer_style_light widget_area">
                <div class="content_wrap">
                    <div class="columns_wrap">
						<!-- Calendar widget -->
                        <aside class="column-1_3 widget widget_calendar">
                            <h5 class="widget_title">Calendar</h5>
                            <?php  $data = array(
            'year' => $this->uri->segment(3),
            'month' => $this->uri->segment(4)
        );

        $prefs['template'] = '
        {table_open}<table cellpadding="1" cellspacing="2">{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}<th class="prev_sign"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th class="next_sign"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr class="week_name" >{/week_row_start}
        {week_day_cell}<td >{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr>{/cal_row_start}
        {cal_cell_start}<td>{/cal_cell_start}

        {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
        {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

        {cal_cell_no_content}{day}{/cal_cell_no_content}
        {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close}
        ';
        
        $prefs['day_type'] = 'short';
        $prefs['show_next_prev'] = true;
        $prefs['next_prev_url'] = 'http://sjesgzp.com/index.php/CI_Calendar_Tutorial/index';
        
        // Loading calendar library and configuring table design
        $this->load->library('calendar', $prefs);
        // Load view page
        $this->load->view('calendar_show', $data);
                            
       
                            ?>
                         
                        </aside>
						<!-- /Calendar widget -->
						<!-- Popular courses widget -->
						<aside class="column-1_3 widget">
                            <h5 class="widget_title">Memorable Events </h5>
                            <article class="post_item with_thumb first">
                                <div class="post_thumb">
									<img alt="Principles of Written English, Part 1" src="<?php echo base_url(); ?>assets/images/masonry_05-75x75.jpg"></div>
                                <div class="post_content">
                                    <h6 class="post_title">
										<a href="paid-course.html">Principles of Written English, Part 1</a>
									</h6>
                                    <div class="post_info"><span class="post_info_item post_info_posted">
										<a href="paid-course.html" class="post_info_date">December 24, 2014</a></span>
										<span class="post_info_item post_info_posted_by">by 
											<a href="#" class="post_info_author">John Doe</a>
										</span>
										<span class="post_info_item post_info_counters">
											<a href="paid-course.html" class="post_counters_item post_counters_rating icon-star-1">
												<span class="post_counters_number">86.8</span>
											</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                          
                        
                         
                        </aside>
						<!-- /Popular courses widget -->
						<!-- Recent courses widget -->
                        <aside class="column-1_3 widget">
                            <h5 class="widget_title">Recent Events</h5>
                            <article class="post_item with_thumb first">
                                <div class="post_thumb">
									<img alt="Principles of Written English, Part 2" src="<?php echo base_url(); ?>assets/images/masonry_15-75x75.jpg">
								</div>
                                <div class="post_content">
                                    <h6 class="post_title">
										<a href="paid-course.html">Principles of Written English, Part 2</a>
									</h6>
                                    <div class="post_info">
										<span class="post_info_item post_info_posted">
											<a href="paid-course.html" class="post_info_date">February 10, 2015</a>
										</span>
										<span class="post_info_item post_info_posted_by">by 
											<a href="#" class="post_info_author">John Doe</a>
										</span>
										<span class="post_info_item post_info_counters">
											<a href="paid-course.html" class="post_counters_item post_counters_views icon-eye">
												<span class="post_counters_number">749</span>
											</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                           
                            <article class="post_item with_thumb">
                                <div class="post_thumb">
									<img alt="Evaluating Social  Programs" src="<?php echo base_url(); ?>assets/images/masonry_04-75x75.jpg">
								</div>
                                <div class="post_content">
                                    <h6 class="post_title">
										<a href="free-course.html">Evaluating Social  Programs</a>
									</h6>
                                    <div class="post_info">
										<span class="post_info_item post_info_posted">
											<a href="free-course.html" class="post_info_date">January 1, 2015</a>
										</span>
										<span class="post_info_item post_info_posted_by">by 
											<a href="#" class="post_info_author">John Doe</a>
										</span>
										<span class="post_info_item post_info_counters">
											<a href="free-course.html" class="post_counters_item post_counters_views icon-eye">
												<span class="post_counters_number">1154</span>
											</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                          
                        </aside>
						<!-- /Recent courses widget -->
                    </div>
                </div>
            </footer>
			<!-- /Widgets Footer -->
			<!-- Testimonials footer -->
			
			<!-- /Testimonials footer -->
			<!-- Contacts Footer -->
            <footer class="contacts_wrap bg_tint_dark contacts_style_dark">
                <div class="content_wrap">
                    <div class="logo">
                        <a href="index.html">
							<img src="<?php echo base_url(); ?>assets/images/logo_footer.png" alt="">
						</a>
                    </div>
                    <div class="contacts_address">
                        <address class="address_right">
							Email  : info@sjesgzp.com<br>
                            Mobile: 09451214137, 09451006698
						</address>
                        <address class="address_left">
							Shivnagar Colony, Mithanpara,<br>	
							 Ghazipur (UP) -233001
						</address>
                    </div>
                    <div class="sc_socials sc_socials_size_big">
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_facebook">
								<span class="sc_socials_hover social_facebook"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_pinterest">
								<span class="sc_socials_hover social_pinterest"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_twitter">
								<span class="sc_socials_hover social_twitter"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_gplus">
								<span class="sc_socials_hover social_gplus"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_rss">
								<span class="sc_socials_hover social_rss"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_dribbble">
								<span class="sc_socials_hover social_dribbble"></span>
							</a>
						</div>
                    </div>
                </div>
            </footer>
            <!-- /Contacts Footer -->
			<!-- Copyright -->
            <div class="copyright_wrap">
                <div class="content_wrap">
                    <p>2017 &copy All Rights Reserved. <a href="#">Powered</a> By <a href="http://gfinch.in">Niktech Software</a></p>
                </div>
            </div>
			<!-- /Copyright -->
       
  
    
     <a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>

    <div class="custom_html_section"></div>
		
</body>