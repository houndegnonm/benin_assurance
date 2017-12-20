<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_self",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"dashboard" => array(
		"title" => "DashBoard",
		"icon" => "fa-home",
		"sub" => array(
			"analytics" => array(
				"title" => "Home",
				"url" => APP_URL."/home.php"
			)
		)
	),
	
	"apps" => array(
		"title" => "Apps",
		"icon" => "fa-cube txt-color-blue",
		"sub" => array(
			"tracker" => array(
				"title" => "Customer Manager",
				"icon" => "fa-gear",
				"url" => APP_URL."/layouts.php"
			)
		)
	),
	
	"report" => array(
		"title" => "Graphs",
		"icon" => "fa-bar-chart-o",
		"sub" => array(
			
		)
	),
	
	"config" => array(
		"title" => "Configuration",
		"icon" => "fa-puzzle-piece",
		"sub" => array(
			"insurance" => array(
				"title" => "Insurance Company",
				"icon" => "fa fa-comments",
				"sub" => array(
					"company" => array(
						"title" => "Manage Company",
						"url" => APP_URL."/forum.php"
					),
					"user" => array(
						"title" => "Manage Users",
						"url" => APP_URL."/forum-topic.php"
					)
				)
			)
		)
	),
	
	"smartchat" => array(
		"title" => "Messenger <sup>beta</sup>",
		"icon" => "fa fa-lg fa-fw fa-comment-o",
		"icon_badge" => array(
			'content' => '!',
			'class' => 'bg-color-pink flash animated'
		),
		"li_class" => array("chat-users", "top-menu-invisible"),
		"sub" => '
			<div class="display-users">
				<input class="form-control chat-user-filter" placeholder="Filter" type="text">
				
			  	<a href="#" class="usr" 
				  	data-chat-id="cha1" 
				  	data-chat-fname="Sadi" 
				  	data-chat-lname="Orlaf" 
				  	data-chat-status="busy" 
				  	data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!" 
				  	data-chat-alertshow="true" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/5.png\' alt=\'Sadi Orlaf\'>
							<div class=\'usr-card-content\'>
								<h3>Sadi Orlaf</h3>
								<p>Marketing Executive</p>
							</div>
						</div>
					"> 
				  	<i></i>Sadi Orlaf
			  	</a>
			
				<a href="#" class="usr" 
				  	data-chat-id="cha2" 
				  	data-chat-fname="Jessica" 
				  	data-chat-lname="Dolof" 
				  	data-chat-status="online" 
				  	data-chat-alertmsg="" 
				  	data-chat-alertshow="false" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/1.png\' alt=\'Jessica Dolof\'>
							<div class=\'usr-card-content\'>
								<h3>Jessica Dolof</h3>
								<p>Sales Administrator</p>
							</div>
						</div>
					"> 
				  	<i></i>Jessica Dolof
				</a>
		
				<a href="#" class="usr" 
				  	data-chat-id="cha3" 
				  	data-chat-fname="Zekarburg" 
				  	data-chat-lname="Almandalie" 
				  	data-chat-status="online" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/3.png\' alt=\'Zekarburg Almandalie\'>
							<div class=\'usr-card-content\'>
								<h3>Zekarburg Almandalie</h3>
								<p>Sales Admin</p>
							</div>
						</div>
					"> 
				  	<i></i>Zekarburg Almandalie
				</a>
				
				<a href="#" class="usr" 
				  	data-chat-id="cha4" 
				  	data-chat-fname="Barley" 
				  	data-chat-lname="Krazurkth" 
				  	data-chat-status="away" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/4.png\' alt=\'Barley Krazurkth\'>
							<div class=\'usr-card-content\'>
								<h3>Barley Krazurkth</h3>
								<p>Sales Director</p>
							</div>
						</div>
					"> 
				  	<i></i>Barley Krazurkth
				</a>
			
				<a href="#" class="usr offline" 
				  	data-chat-id="cha5" 
				  	data-chat-fname="Farhana" 
				  	data-chat-lname="Amrin" 
				  	data-chat-status="incognito" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/female.png\' alt=\'Farhana Amrin\'>
							<div class=\'usr-card-content\'>
								<h3>Farhana Amrin</h3>
								<p>Support Admin <small><i class=\'fa fa-music\'></i> Playing Beethoven Classics</small></p>
							</div>
						</div>
					"> 
				  	<i></i>Farhana Amrin (offline)
				</a>
		
				<a href="#" class="usr offline" 
					data-chat-id="cha6" 
				  	data-chat-fname="Lezley" 
				  	data-chat-lname="Jacob" 
				  	data-chat-status="incognito" 
				  	data-rel="popover-hover" 
				  	data-placement="right" 
				  	data-html="true" 
				  	data-content="
						<div class=\'usr-card\'>
							<img src=\'img/avatars/male.png\' alt=\'Lezley Jacob\'>
							<div class=\'usr-card-content\'>
								<h3>Lezley Jacob</h3>
								<p>Sales Director</p>
							</div>
						</div>
					"> 
				  	<i></i>Lezley Jacob (offline)
				</a>

				<a href="ajax/chat.php" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>
			</div>'
	)
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>