<?php include 'header.php'; ?>


<div id="topNav">
    <nav id="mobile">

        <div id="toggle-bar">
            <a href="home.php" style="margin-right:-80px;"><img id="logo_img" src="imgs/logo_mini2.png" /></a>
            <a class="navicon mtoggle" href="#">Main Menu</a>
        </div>

        <ul id="mmenu" style="margin-top: 40px;">
          <li><a href="home.php">News</a></li>
          <li><a href="calendar.php">Calendar</a></li>
          <li><a href="#">Transfers</a></li>
          <li><a href="#">Me</a></li>    
        </ul>

    </nav>
</div>

<!--end mennu area-->

<div class="mainContent">

<div class="box cal full_width">
  <div class="box_head">Calendar</div>

    <!-- dropdown options -->
  <div class="box_btm dropdown_options">
    <div class="box_txt">
      <p><strong>Sort by</strong></p>
      <p> <a href="http://barutren.dk/intranet/index.php/employee/calendar/show/2016-01-16/company" class="sort_link">Name (A-Z)</a> </p>
      <p> <a href="http://barutren.dk/intranet/index.php/employee/calendar/show/2016-01-16/group" class="sort_link">Group &amp; Name (A-Z)</a> </p>
      <br>

      <p><strong>Filter clients</strong></p>
      <select onchange="document.location.href = jQuery(this).find('option:selected').attr('value');">
      <option value="http://barutren.dk/intranet/index.php/employee/calendar/show/2016-01-16/group">Show all</option>
            <option value="http://barutren.dk/intranet/index.php/employee/calendar/show/2016-01-16/company-37">Cafe Casablanca</option>
            <option value="http://barutren.dk/intranet/index.php/employee/calendar/show/2016-01-16/company-70">Novicell</option>
            </select>
      </div>
  </div>  
    
    <!-- dropdown add template -->
  <div class="box_btm dropdown_add">
    <div class="box_txt">
      <form action="http://barutren.dk/intranet/index.php/admin/calendar/apply_template" method="post" accept-charset="utf-8">      <select name="tpl">
            <option value="15">Casual</option>
            </select>
      <br>
	  <br>
      
<input type="hidden" name="date" value="2016-01-16">
      <input type="submit" name="submit" value="Apply template">	  </form>    </div>
  </div>

  <div class="box_btm">
    <div class="box_txt"> 
      <!-- box content -->
      <table cellpadding="0" cellspacing="0" width="100%" class="calendar scrollTable">
        <thead class="fixedHeader">
        <tr>
                  <th class="pick_week"> <a href="http://barutren.dk/intranet/index.php/employee/calendar/show/2016-01-09/group"><img class="icon" src="http://barutren.dk/intranet/assets/images/icons/previous.png"></a> <span>Week 2</span> <a href="http://barutren.dk/intranet/index.php/employee/calendar/show/2016-01-23/group"><img class="icon" src="http://barutren.dk/intranet/assets/images/icons/next.png"></a> </th>
        
                    <th class="dateth"> <a href="#"> Monday 11. Jan </a> </th>
                    <th class="dateth"> <a href="#"> Tuesday 12. Jan </a> </th>
                    <th class="dateth"> <a href="#"> Wednesday 13. Jan </a> </th>
                    <th class="dateth"> <a href="#"> Thursday 14. Jan </a> </th>
                    <th class="dateth"> <a href="#"> Friday 15. Jan </a> </th>
                    <th class="dateth"> <a href="#"> Saturday 16. Jan </a> </th>
                    <th class="dateth"> <a href="#"> Sunday 17. Jan </a> </th>
                              <th> </th>
        </tr>
        </thead>
        <tbody class="scrollContent" style="height: 800px;">
                    
          <tr class="row_odd">
          <td class="cal_company_and_feedback" style="background:rgba(transparent,0.6)"><p class="calendar_company_name"><a href="http://barutren.dk/intranet/index.php/employee/feedback/37">Cafe Casablanca<br>(4)</a></p>
                              <div class="download-link icon">
          <a target="_blank" href="http://barutren.dk/intranet/./uploads/cleaningplans/cleaning_plan_37.docx"><img src="http://barutren.dk/intranet//assets/images/icons/plan.png"></a></div>
                    <div class="infobox infobox_cal_fb">
          <p class="info_title">Latest feedback:</p>
          			<table width="100%">
                        <tbody><tr>
            <td width="25%"><p>2014-09-01</p></td>
            <td width="5%"><p><b>4/5</b></p></td>
            <td><p></p></td>
            </tr>
                        </tbody></table>
                      </div>
          </td>
	              	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                            <td class="cal_cell has_stats">
              <p class="totals total_for_customer">00:00</p>
          
                        </td>
	          </tr>

			                                                                                                                                          
                    
          <tr class="row_even">
          <td class="cal_company_and_feedback" style="background:rgba(transparent,0.6)"><p class="calendar_company_name"><a href="http://barutren.dk/intranet/index.php/employee/feedback/70">Novicell<br>(4.5)</a></p>
                              <div class="infobox infobox_cal_fb">
          <p class="info_title">Latest feedback:</p>
          			<table width="100%">
                        <tbody><tr>
            <td width="25%"><p>2015-05-04</p></td>
            <td width="5%"><p><b>4/5</b></p></td>
            <td><p>Vi er godt tilfredse.</p></td>
            </tr>
                        <tr>
            <td width="25%"><p>2015-03-02</p></td>
            <td width="5%"><p><b>5/5</b></p></td>
            <td><p></p></td>
            </tr>
                        </tbody></table>
                      </div>
          </td>
	              	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                  	      <td class="cal_cell ">
                            </td>
                            <td class="cal_cell has_stats">
              <p class="totals total_for_customer">13:45</p>
          
                        </td>
	          </tr>

			                                                  			
        <tr class="row_even">
          <td style="background:rgba(transparent,0.6)"> </td>
          
	              	      <td class="cal_cell ">
                          
			    	      </td><td class="cal_cell ">
              			              
            <div class="event_unconfirmed"> 
                        <a href="http://barutren.dk/intranet/index.php/employee/calendar/update/2016-01-12/70/23476" class="fancybox  fancybox.iframe edit_event"> 
                        <strong>Thorben L </strong><br>
              16:00-20:00 </a> 
             
                          <a href="http://barutren.dk/intranet/index.php/employee/calendar/propose_transfer/2016-01-12/70/23476" class="fancybox  fancybox.iframe edit_event"> 
             <img class="icon trans_icon" src="http://barutren.dk/intranet//assets/images/icons/male.png">
             </a>
                                       </div>
            
                                     
			    	      </td><td class="cal_cell ">
              			              
            <div class="event_unconfirmed"> 
                        <a href="http://barutren.dk/intranet/index.php/employee/calendar/update/2016-01-13/70/23502" class="fancybox  fancybox.iframe edit_event"> 
                        <strong>Thorben L </strong><br>
              16:00-20:15 </a> 
             
                          <a href="http://barutren.dk/intranet/index.php/employee/calendar/propose_transfer/2016-01-13/70/23502" class="fancybox  fancybox.iframe edit_event"> 
             <img class="icon trans_icon" src="http://barutren.dk/intranet//assets/images/icons/male.png">
             </a>
                                       </div>
            
                                     
			    	      </td><td class="cal_cell ">
                          
			    	      </td><td class="cal_cell ">
              			              
            <div class="event_unconfirmed"> 
                        <a href="http://barutren.dk/intranet/index.php/employee/calendar/update/2016-01-15/70/23477" class="fancybox  fancybox.iframe edit_event"> 
                        <strong>Thorben L </strong><br>
              16:00-21:30 </a> 
             
                          <a href="http://barutren.dk/intranet/index.php/employee/calendar/propose_transfer/2016-01-15/70/23477" class="fancybox  fancybox.iframe edit_event"> 
             <img class="icon trans_icon" src="http://barutren.dk/intranet//assets/images/icons/male.png">
             </a>
                                       </div>
            
                                     
			    	      </td><td class="cal_cell ">
                          
			    	      </td><td class="cal_cell ">
                          
			            </td>
            <td class="cal_cell has_stats">
            <p class="totals total_for_employee">
			            </p></td>
                              </tr>
                        </tbody>
        <tfoot class="fixedFooter">
        <tr class="row_even last_cal_row">
          <td class="firstcellfoot"></td>
                              <td class="cal_cell has_stats"><p class="totals total_for_today">
		  00:00          </p>

          
          </td>
                                        <td class="cal_cell has_stats"><p class="totals total_for_today">
		  04:00          </p>

          
          </td>
                                        <td class="cal_cell has_stats"><p class="totals total_for_today">
		  04:15          </p>

          
          </td>
                                        <td class="cal_cell has_stats"><p class="totals total_for_today">
		  00:00          </p>

          
          </td>
                                        <td class="cal_cell has_stats"><p class="totals total_for_today">
		  05:30          </p>

          
          </td>
                                        <td class="cal_cell has_stats"><p class="totals total_for_today">
		  00:00          </p>

          
          </td>
                                        <td class="cal_cell has_stats"><p class="totals total_for_today">
		  00:00          </p>

          
          </td>
                              <td class="cal_cell has_stats total_of_totals_cell"><p class="totals total_of_totals">13:45</p>
          
                    </td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>




</div><!-- Content -->

</body>
</html>