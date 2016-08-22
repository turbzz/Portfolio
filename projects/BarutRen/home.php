<?php include 'header.php'; ?>

<body>
<!--begin menu area-->

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

  <script>
  $(function() {
    $( "#datepicker" ).datetimepicker({ dateFormat: 'dd/mm/yy' ,  firstDay: 1 });
  });
  </script>
<script type="text/javascript" src="http://barutren.dk/intranet/assets/js/weekpicker.js"></script>

  <div class="box sidebar_box birthday">
      <div class="box_head">Birthday <span class="box_head_icon icon"><a href="#" class="calendar_icon dropdown_btm"><img src="http://barutren.dk/intranet/assets/images/icons/calendar.png" /></a></span></div>
      <p id="nobdays">No birthdays this week.</p>
  </div>
  <div class="box sidebar dropdown_calendar">
    <div class="box_txt"> 
      <div class="weekpicker"></div>
    </div>
  </div>

<div class="box sidebar_box news">
  <div class="box_head">News</div>
    <div class="box_btm dropdown_add">
      <div class="box_txt"> 
        <form action="http://barutren.dk/intranet/index.php/news/create" method="post" accept-charset="utf-8">      <label>Title<span class="input_required">*</span></label>
        <input type="text" name="title" />
        <label>Content<span class="input_required">*</span></label>
        <textarea name="text"></textarea>
        <br />
        <input type="submit" value="Publish" />
        </form>
      </div>
    </div>
    <div class="box_btm dropdown_options">
      <div class="box_txt"> 
      <form action="http://barutren.dk/intranet/index.php/news/limit" method="post" accept-charset="utf-8">      <p>How many news items should we show?</p>
        <select name="limit">
                  <option  value="1">1</option>
                  <option  value="2">2</option>
                  <option  value="3">3</option>
                  <option  value="4">4</option>
                  <option  value="5">5</option>
                  <option  value="6">6</option>
                  <option  value="7">7</option>
                  <option  value="8">8</option>
                  <option  value="9">9</option>
                  <option  value="10">10</option>
                  <option selected='selected' value="999">Show all</option>
        </select>
        <br />
        <br />
        <input type="submit" value="Submit" />
        </form>
      </div>
    </div>
  <div class="box_btm">
    <div class="box_txt">
            <div class="news_item sidebar_item">
        <span><p class="news_calendar">23 <em>Dec</em></p>
        <p class="news_title">Holiday phone support</p></span>
        <p class="news_text">Please call Ihsan 28 78 20 26 in the period December 24 - January 4, 2016 in case you need some assistance during holidays. Merry Xmas!</p>
        <div class="edit_sidebar_item"> <a href="#" class="sidebar_item_edit_icon icon"><img src="http://barutren.dk/intranet/assets/images/icons/edit.png"></a> <a href="http://barutren.dk/intranet/index.php/news/delete/40" class="news_item_delete_icon icon" onclick="return confirm('Are you sure you want to delete this news item?')"><img src="http://barutren.dk/intranet/assets/images/icons/delete.png"></a> </div>
        <div class="sidebar_edit_form">
    <form action="http://barutren.dk/intranet/index.php/news/update/40" method="post" accept-charset="utf-8">      <label>Title</label>
      <input type="text" name="title" value="Holiday phone support">
      <label>Content</label>
      <textarea name="text">Please call Ihsan 28 78 20 26 in the period December 24 - January 4, 2016 in case you need some assistance during holidays. Merry Xmas!</textarea>
      <label>Date &amp; time</label>
      <input type="text" name="datetime" id="datepicker" value="23/12/2015 18:28" class="hasDatepicker">
      <br>
      <input type="submit" value="Update">

        </form>
        </div>
      </div>
            <div class="news_item sidebar_item">
        <p class="news_calendar">18 <em>Dec</em></p>
        <p class="news_title">JuleHygge</p>
        <p class="news_text">Wednesday 23rd of December 2015, 14.00 we are having some cosy Christmas time in the office with coffee and cake. Everyone is welcome!</p>
        <div class="edit_sidebar_item"> <a href="#" class="sidebar_item_edit_icon icon"><img src="http://barutren.dk/intranet/assets/images/icons/edit.png"></a> <a href="http://barutren.dk/intranet/index.php/news/delete/39" class="news_item_delete_icon icon" onclick="return confirm('Are you sure you want to delete this news item?')"><img src="http://barutren.dk/intranet/assets/images/icons/delete.png"></a> </div>
        <div class="sidebar_edit_form">
    <form action="http://barutren.dk/intranet/index.php/news/update/39" method="post" accept-charset="utf-8">      <label>Title</label>
      <input type="text" name="title" value="JuleHygge">
      <label>Content</label>
      <textarea name="text">Wednesday 23rd of December 2015, 14.00 we are having some cosy Christmas time in the office with coffee and cake. Everyone is welcome!</textarea>
      <label>Date &amp; time</label>
      <input type="text" name="datetime" id="datepicker" value="18/12/2015 12:00">
      <br>
      <input type="submit" value="Update">

        </form>
        </div>
      </div>
            <div class="news_item sidebar_item">
        <p class="news_calendar">3 <em>Dec</em></p>
        <p class="news_title">Post Christmas Dinner</p>
        <p class="news_text">It was a great evening. Thanks everyone for coming!</p>
        <div class="edit_sidebar_item"> <a href="#" class="sidebar_item_edit_icon icon"><img src="http://barutren.dk/intranet/assets/images/icons/edit.png"></a> <a href="http://barutren.dk/intranet/index.php/news/delete/38" class="news_item_delete_icon icon" onclick="return confirm('Are you sure you want to delete this news item?')"><img src="http://barutren.dk/intranet/assets/images/icons/delete.png"></a> </div>
        <div class="sidebar_edit_form">
    <form action="http://barutren.dk/intranet/index.php/news/update/38" method="post" accept-charset="utf-8">      <label>Title</label>
      <input type="text" name="title" value="Post Christmas Dinner">
      <label>Content</label>
      <textarea name="text">It was a great evening. Thanks everyone for coming!</textarea>
      <label>Date &amp; time</label>
      <input type="text" name="datetime" id="datepicker" value="03/12/2015 12:06">
      <br>
      <input type="submit" value="Update">

        </form>
       </div>
      </div>
    </div>
  </div>
  </div>

  <script> 
    $(function(){	$('.fancybox').fancybox({padding: 0, topRatio: 0.1});	}); 
    function refrsh() {	location.reload(); }
    function drag() {	$(".fancybox-wrap").easydrag(); }
  </script>

  <script>
    function showWeekBdays(date1,date2) {
    $("table.birthdays tr").hide();

    var mm1 = parseInt(date1.split("/")[0]); //get month int
    var mm2 = parseInt(date2.split("/")[0]);

    var dd1 = parseInt(date1.split("/")[1]); //get day int
    var dd2 = parseInt(date2.split("/")[1]);

    //create an array of "mm-dd" in between range date1 to date2

    var rangeDates = new Array();

    if (dd1 < dd2) {
    	for (var i = dd1; dd1 <= dd2; dd1++) {
    	rangeDates.push(mm1+"-"+dd1);	
    	}
    }
    else {
    	for (var i = dd1; dd1 <= 31; dd1++) {
    	rangeDates.push(mm1+"-"+dd1);	
    	}
    	for (var i = dd2; dd2 >= 1; dd2--) {
    	rangeDates.push(mm2+"-"+dd2);	
    	}
    }

    var birthdays = new Array('1987-07-17-1','1987-04-24-12','1979-06-01-42','1987-11-07-43','0000-00-00-46','1975-08-07-50','2013-04-09-71','1991-04-01-79','0000-00-00-87','0000-00-00-90','1989-12-20-94','1978-09-26-97','1976-09-09-98','2014-05-19-102','1989-12-08-104','1983-12-29-107','1993-07-06-111','1988-07-10-113','1995-01-06-115','1986-04-14-116','1990-04-12-117','1981-07-23-118','1992-12-07-119','1986-07-05-120','1997-02-05-121','1993-05-28-123','1995-09-14-124');
    var countRangeBdays = 0;

    //check if birthday is within the range
    $.each(birthdays, function(i, birthday) {

    var mmdd3 = parseInt(birthday.split("-")[1]) + "-" + parseInt(birthday.split("-")[2]);
    var user_id = birthday.split("-")[3];


    if (rangeDates.indexOf(mmdd3) != -1) {
    	$("#bday_usr_"+user_id).show();
    	countRangeBdays++;
    }

    });

    if (countRangeBdays>0) {
    	$("#bday_usr_th").show();
    	$("#nobdays").hide();
    }
    else {
    	$("#nobdays").show();
    }

    }
  </script>
</div><!-- Content -->


</body>
</html>