<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crane Property Management System</title>

<link href="<?php echo base_url(); ?>css/chozen.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css' />

<!--<script src="<?php echo base_url(); ?>js/jquery-1.4.4.js" type="text/javascript"></script>-->
<script src="<?php echo base_url(); ?>js/jquery.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/spinner/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/spinner/ui.spinner.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/fileManager/elfinder.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/wysiwyg/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wysiwyg/wysiwyg.image.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wysiwyg/wysiwyg.link.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wysiwyg/wysiwyg.table.js"></script>

<!--<script type="text/javascript" src="js/flot/jquery.flot.js"></script>
<script type="text/javascript" src=js/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="js/flot/excanvas.min.js"></script> -->

<script type="text/javascript" src="<?php echo base_url(); ?>js/dataTables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/dataTables/colResizable.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/forms/forms.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/forms/autotab.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/forms/jquery.filestyle.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/colorPicker/colorpicker.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/uploader/plupload.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/ui/progress.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/ui/jquery.alerts.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jBreadCrumb.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/cal.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.smartWizard.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ToTop.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.listnav.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.sourcerer.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/forms/jquery.chosen.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom_silo.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/custom_Aziz.js"></script>

</head>
<body>

<!-- Top navigation bar -->
<div id="topNav">
    <div class="fixed">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="images/icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><img src="images/icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">8</span>
                        <ul class="menu_body">
                            <li><a href="#" title="">new message</a></li>
                            <li><a href="#" title="">inbox</a></li>
                            <li><a href="#" title="">outbox</a></li>
                            <li><a href="#" title="">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
                    <li><a href="login.html" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </div>
</div>

<!-- Header -->
<div id="header" class="wrapper">
    <div class="logo"><a href="/" title=""><img src="images/loginLogo.png" alt="" /></a></div>
    <div class="middleNav">
    	<ul>
        	<li class="iMes"><a href="#" title=""><span>Support tickets</span></a><span class="numberMiddle">9</span></li>
            <li class="iStat"><a href="#" title=""><span>Statistics</span></a></li>
            <li class="iUser"><a href="#" title=""><span>User list</span></a></li>
            <li class="iOrders"><a href="#" title=""><span>Billing panel</span></a></li>
        </ul>
    </div>
    <div class="fix"></div>
</div>

<!-- Main wrapper -->
<div class="wrapper">

	<!-- Left navigation -->
    <div class="leftNav">
    	<ul id="menu">
        	<li class="dash"><a href="index.html" title=""><span>Dashboard</span></a></li>
            <li class="graphs"><a href="charts.html" title=""><span>Graphs and charts</span></a></li>
            <li class="forms"><a href="form_elements.html" title=""><span>Form elements</span></a></li>
            <li class="login"><a href="ui_elements.html" title=""><span>Interface elements</span></a></li>
            <li class="typo"><a href="typo.html" title=""><span>Typography</span></a></li>
            <li class="tables"><a href="tables.html" title=""><span>Tables</span></a></li>
            <li class="cal"><a href="calendar.html" title="" class="active"><span>Calendar</span></a></li>
            <li class="gallery"><a href="gallery.html" title=""><span>Gallery</span></a></li>
            <li class="widgets"><a href="widgets.html" title=""><span>Widgets</span></a></li>
            <li class="files"><a href="file_manager.html" title=""><span>File manager</span></a></li>
            <li class="errors"><a href="#" title="" class="exp"><span>Error pages</span><span class="numberLeft">6</span></a>
            	<ul class="sub">
                    <li><a href="403.html" title="">403 page</a></li>
                    <li><a href="404.html" title="">404 page</a></li>
                    <li><a href="405.html" title="">405 page</a></li>
                    <li><a href="500.html" title="">500 page</a></li>
                    <li><a href="503.html" title="">503 page</a></li>
                    <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                </ul>
            </li>
            <li class="pic"><a href="icons.html" title=""><span>Buttons and icons</span></a></li>
            <li class="contacts"><a href="contacts.html" title=""><span>Contact list</span></a></li>
        </ul>
    </div>

	<!-- Content -->
    <div class="content">
    	<div class="title"><h5>Calendar</h5></div>

        <!-- Statistics -->
        <div class="stats">
        	<ul>
            	<li><a href="#" class="count grey" title="">52</a><span>new pending tasks</span></li>

                <li><a href="#" class="count grey" title="">520</a><span>pending orders</span></li>
                <li><a href="#" class="count grey" title="">14</a><span>new opened tickets</span></li>
                <li class="last"><a href="#" class="count grey" title="">48</a><span>new user registrations</span></li>
            </ul>
            <div class="fix"></div>
        </div>

        <!-- Calendar -->
        <div class="widget first">
            <div class="head"><h5 class="iDayCalendar">Schedule</h5></div>
            <div id="schedule_calendar"></div>
        </div>

    </div>
    <div class="fix"></div>
</div>

<!-- Footer -->
<div id="footer">
	<div class="wrapper">
    	<span>&copy; Copyright 2011. All rights reserved. It's Brain admin theme by <a href="#" title="">Eugene Kopyov</a></span>
    </div>
</div>

<script>
    //===== Calendar =====//

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	$('#schedule_calendar').fullCalendar({
		header: {
			left: 'prev,next',
			center: 'title',
			right: 'month,basicWeek,basicDay'
		},
		editable: true,
                eventClick: function(){

                },
		events: [
			{
				title: 'All day event',
				start: new Date(y, m, 1)
			},
			{
				title: 'Long event',
				start: new Date(y, m, 5),
				end: new Date(y, m, 8)
			},
			{
				id: 999,
				title: 'Repeating event',
				start: new Date(y, m, 2, 16, 0),
				end: new Date(y, m, 3, 18, 0),
				allDay: false
			},
			{
				id: 999,
				title: 'Repeating event',
				start: new Date(y, m, 9, 16, 0),
				end: new Date(y, m, 10, 18, 0),
				allDay: false
			},
			{
				title: 'Actually any color could be applied for background',
				start: new Date(y, m, 30, 10, 30),
				end: new Date(y, m, d+1, 14, 0),
				allDay: false,
				color: '#B55D5C'
			},
			{
				title: 'Lunch',
				start: new Date(y, m, 14, 12, 0),
				end: new Date(y, m, 15, 14, 0),
				allDay: false
			},
			{
				title: 'Birthday PARTY',
				start: new Date(y, m, 18),
				end: new Date(y, m, 20),
				allDay: false
			},
			{
				title: 'Click for Google',
				start: new Date(y, m, 27),
				end: new Date(y, m, 29),
				url: 'http://google.com/'
			}
		]
	});

</script>

</body>
</html>
