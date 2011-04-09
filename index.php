	     <?php
/*	     error_reporting(E_ALL);
		 ini_set('display_errors', false);
     	 require_once('functions-db.php');
		 $db_control = new dataBase();
*/
	     ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--<link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/jquery.hrzAccordion.examples.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/jquery.hrzAccordion.defaults.css" type="text/css" media="all"/>-->
<link rel="stylesheet" href="css/main.css" type="text/css" media="all"/>
<!--<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js" type="text/javascript"></script>
<script src="scripts/jquery.quicksand.js" type="text/javascript"></script>

<title>IDES Graduates 2011</title>
</head>

<body>
	<script>
		(function($) {
		  $.fn.sorted = function(customOptions) {
			var options = {
			  reversed: false,
			  by: function(a) { return a.text(); }
			};
			$.extend(options, customOptions);
			$data = $(this);
			arr = $data.get();
			arr.sort(function(a, b) {
			  var valA = options.by($(a));
			  var valB = options.by($(b));
			  if (options.reversed) {
				return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;				
			  } else {		
				return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;	
			  }
			});
			return $(arr);
		  };
		})(jQuery);
		
		// DOMContentLoaded
		$(function() {
		
		  // bind radiobuttons in the form
		  var $filterGroup = $('#filter input[name="group"]');
		  var $filterSort = $('#filter input[name="sort"]');
		
		  // get the first collection
		  var $students = $('#students');
		
		  // clone students to get a second collection
		  var $data = $students.clone();
		
		  // attempt to call Quicksand on every form change
		  $filterGroup.add($filterSort).change(function(e) {
			if ($($filterGroup+':checked').val() == 'all') {
			  var $filteredData = $data.find('li');
			} else {
			  var $filteredData = $data.find('li[data-type=' + $($filterGroup+":checked").val() + ']');
			}
		
			// sorted by first name
			if ($('#filter input[name="sort"]:checked').val() == "first") {
				//if sorted by first name
			  var $sortedData = $filteredData.sorted({
				by: function(v) {
					return $(v).find('strong').text().toLowerCase();
				}
			  });
			}
			// sorted by first name
			else if ($('#filter input[name="sort"]:checked').val() == "last") {
			  // if sorted by last name
			  var $sortedData = $filteredData.sorted({
				by: function(v) {
					return $(v).find('span[data-type="last"]').text().toLowerCase();
				}
			  });
			}  
		
			// finally, call quicksand
			$students.quicksand($sortedData, {
			  duration: 800,
			  easing: 'easeInOutQuad'
			});
		
		  });
		
		});
		
		
		jQuery(document).ready(function() 
		{
			lastBlock = $("#home");
			maxWidth = 740;
			minWidth = 30;	
			
			//$(lastBlock).animate({width: maxWidth+"px"}, { queue:false, duration:400 });
			
			//main navigation
			$("ul.mainContent li.mainNav").mousedown
			(
				function()
				{
					$(lastBlock).animate({width: minWidth+"px"}, { queue:false, duration:400});
					
					$(this).animate({width: maxWidth+"px"}, { queue:false, duration:400});
					lastBlock = this;
				}
			);
			
			$('.sorting_box #groups :radio').focus(updateSelectedStyle);
       		$('.sorting_box #groups :radio').blur(updateSelectedStyle);
        	$('.sorting_box #groups :radio').change(updateSelectedStyle);
    	
	    	function updateSelectedStyle() 
	    	{
		        $('.sorting_box #groups :radio').parent().removeClass('focused');//.next().removeClass('focused');
		        $('.sorting_box #groups :radio:checked').parent().addClass('focused');//.next().addClass('focused');
		    }
			
		});
		
	</script>	
	<div class="full">
		<div class="header"></div>
		<ul class="mainContent">
			<li class="mainNav" id="home" title="Home">
			  <div class="nav" id="nav_home"> 
		  	  <div class="content">
			        <div id="theme">
                    	
                      <div id="map">
						<img src="images/home/map.png" />
                        <hr />
                        <p>Industrial designers improve upon existing products and develop new products that 
                        	enhance our ever-changing lifestyles. From concept to production, Carleton University 
                            Industrial Design students continually define, refine, and redefine problems and solutions.</p>
                           <p>The School of Industrial Design welcomes you to visit the 33rd Annual Graduation 
                           Exhibition, to explore student projects completed within the Bachelor of 
                           Industrial Design program.</p>
                           <p>Parking available in Lot P2. Free weekend parking. Free admission.</p>
                      </div>
		            <img src="images/home/exhibitlogo_green.png" /></div>
			    </div>
			  </div>    
      </li>
			<li class="mainNav" id="projects" title="Projects">
			  <div class="nav" id="nav_projects">
			    <div class="content">
			      <ul id="students" class="image-grid">
				
                
                	<?php
/*					 	$query =  $db_control->query_getStudents();
						$i=1;
						while($row = mysql_fetch_array($query)){ 
							echo '<li data-id="id-'.$i.'" data-type="'.$row["grp_name"].'">';
							echo '<img src="./images/students/'.$row["stu_fname"].'_'.$row["std_lname"].'.jpg" />';
							echo '<div class="StuName"><strong>'. $row["stu_fname"] .'</strong> ';
							echo '<span data-type="last">'.$row["std_lname"].'</span></div>';
							echo '</li>';
							$i++;
						}
	*/
					?>
			
			      </ul>
			      <div class="sorting_box" id="filter">
			            <fieldset id="groups">
			              <legend>View:</legend>
			              <label id="all"><input type="radio" name="group" value="all" checked="checked">All Students</label>
                          <legend>By group:</legend>
                          <div id="groupBox">
			              <label id="rim"><input type="radio" name="group" value="rim">Mobile Life</label>
			              <label id="omnr"><input type="radio" name="group" value="omnr">OMNR: Firetactics</label>
			              <label id="cpc"><input type="radio" name="group" value="cpc">CPC: Adaptive Sports</label>
			              <label id="st"><input type="radio" name="group" value="st">Smart Technologies: </label>
			              <label id="lt"><input type="radio" name="group" value="lt">Lota Renovación</label>
                          <label id="Teknion"><input type="radio" name="group" value="Teknion">Workspace Next</label>
                          </div>
			            </fieldset>
			            <fieldset id="fullnames">
			              <legend>Sort by Name</legend>
			              <label><input type="radio" name="sort" value="first" checked="checked">First</label>
			              <label><input type="radio" name="sort" value="last">Last</label>      
			            </fieldset>
					</div>
			    </div>
			  </div>
			</li>
			<li class="mainNav" id="alumni" title="Alumni">
			  <div class="nav" id="nav_alumni">
			  	<div class="content">
                       	<div id="#AlumniTitle">
                        	<h1>Alumni Night</h1>
                            <p>APRIL 16TH, 2011, 5–8PM, UNIVERSITY CENTRE GALLERIA</p>
                        </div>
                        <div id="AlumniMap">
                        	<p>The School of Industrial Design and the Carleton University Alumni Association, Industrial Design Chapter, invite you to the annual Alumni Night, on April 16th, 2011 at 5PM, to honour the contributions of Jacques Ostiguy to the School of Industrial Design. Featuring presentations by Floyd Pushelberg and many others.</p>
                            <p>Please register at <a href="alumni.carleton.ca/events">alumni.carleton.ca/events</a></p>
                            <hr />
                            <img src="images/Alumni Night/Map.png" />
                        </div>
                        <div id="AlumniPics">
                        	<img src="images/Alumni Night/Important-guy.gif" />
                            <img src="images/Alumni Night/CarletonSeal.png" />
                            <p>
                            	Complimentary refreshments.<br />
								Free parking available in Lot P2.
                           	</p>
                        </div>
			    </div>	  
			  </div>
			</li>
			<li class="mainNav" id="sponsor" title="Sponsors">
			  <div class="nav" id="nav_sponsors">
			  		<div class="content">
                    	<h1>Sponsors + Thanks</h1>
                        <p>The School of Industrial Design and the 2010-11 Bachelor of Industrial Design graduating class would like to sincerely thank this year’s collaborators and sponsors for their contributions and support.</p>
                        <div id="sponsor_LogoBox">
                        	<img src="images/sponcers/cpc.png" />
                            <img src="images/sponcers/oce.png" />
                            <img src="images/sponcers/omnr.png" />
                            <img src="images/sponcers/rim.png" />
                            <img src="images/sponcers/smart.png" />
                            <img src="images/sponcers/teknion.png" />
                        </div>
			    	</div>	  
			  	</div>  
			</li>
			<li class="mainNav" id="staff" title="Staff and Supporters">
				<div class="nav" id="nav_staff">
			  		<div class="content">
                    	<div id="staff_header">
			        	<h1>Staff + Support</h1>
                        <p>In addition to their sponsors, the 2010-11 Bachelor of Industrial Design graduating 
                        class would like to also thank the faculty and staff at the School of Industrial Design.</p>
                        </div>
                        <div id="staff_faculty">
                        	<span class="staff_type">FACULTY:</span><br />
                              Thomas Garvey<br />
								<span class="staff_smlTxt">Director, School of Industrial Design</span><br />
                              Brian Burns<br />
								<span class="staff_smlTxt">Associate Professor,School of Industrial Design</span><br />
                              WonJoon Chung<br />
								<span class="staff_smlTxt">Associate Professor, School of Industrial Design</span><br />
                              Stephen Field<br />
								<span class="staff_smlTxt">Instructor, School of Industrial Design</span><br />
                              Lois Frankel<br />
								<span class="staff_smlTxt">Associate Professor, School of Industrial Design</span><br />
                              Bjarki Hallgrimsson<br />
								<span class="staff_smlTxt">Associate Professor, School of Industrial Design</span><br />
                           	  Lorenzo Imbesi<br />
								<span class="staff_smlTxt">Associate Professor, School of Industrial Design</span>
                       	</div>
                        <div id="staff_staff">
                        	<span class="staff_type">STAFF:</span><br />
                                Diane Smyth<br />
									<span class="staff_smlTxt">Administrator, School of Industrial Design</span><br />
                                Valerie Daley<br />
									<span class="staff_smlTxt">Administrative Assistant, School of Industrial Design</span><br />
                                Walter Zanetti<br />
									<span class="staff_smlTxt">Chief Technician, School of Industrial Design</span><br />
                                Jim Dewar<br />
									<span class="staff_smlTxt">Machine Shop Technician, School of Industrial Design</span><br />
                                Terry Flaherty<br />
									<span class="staff_smlTxt">Wood Shop Technician, School of Industrial Design</span><br />
                                Andrew Pullin<br />
									<span class="staff_smlTxt">Computer Technician, School of Industrial Design</span></div>
			    	</div>	  
			  	</div> 
			</li>
		</ul>
	</div>
</body>
</html>
