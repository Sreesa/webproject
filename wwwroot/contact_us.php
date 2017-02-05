<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Neomorph Technologies | Offsite Development | Application Development | Mobile Technologies | Software Development</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="images/favicon.ico">
		    	
		<!-- CSS StyleSheets -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/prettyPhoto.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="rs-plugin/css/settings.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<!--[if lt IE 9]>
	    	<link rel="stylesheet" href="css/ie.css">
	    	<script type="text/javascript" src="js/html5.js"></script>
	    <![endif]-->

		
		<!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
		<link rel="stylesheet" id="skinCSS" href="css/skins/default.css">
<script type="text/javascript">

function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}

function MM_swapImgRestore() { //v3.0

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}

function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}

function MM_swapImage() { //v3.0

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}

function ValidateCnt() {
    var sErrMsg = "";
    if (trim(document.getElementById("txtFName").value) == '')
        sErrMsg += 'First Name \n';
    if (trim(document.getElementById("txtLName").value) == '')
        sErrMsg += 'Last Name \n';
    if (trim(document.getElementById("txtCmpName").value) == '')
        sErrMsg += 'Company Name \n';    
    if (trim(document.getElementById("txtTelephone").value) == '')
        sErrMsg += 'Telephone \n';
    else if (isNaN(document.getElementById("txtTelephone").value)) {
        sErrMsg += 'Valid Telephone \n';
    }
    if (trim(document.getElementById("txtEmail").value) == '')
        sErrMsg += 'Enter Email Address \n';
    else
        sErrMsg += validateEmail(document.getElementById("txtEmail").value, "Entered email-id", false, null, 50);
    if (trim(document.getElementById("txtDescription").value) == '')
        sErrMsg += 'Enter Project Description \n';    
    if (sErrMsg != "") {
        alert("The form could not be submitted because of the following.\n\n" + sErrMsg); return false;
    }
    else { return true; }
}

var sErrMsg;
var sErrValidateEmail = " is not a valid e-mail address.\n";
function ltrim(sValue) { while (1) { if (sValue.substring(0, 1) != " ") { break; } sValue = sValue.substring(1, sValue.length); } return sValue; }
function rtrim(sValue) { while (1) { if (sValue.substring(sValue.length - 1, sValue.length) != " ") { break; } sValue = sValue.substring(0, sValue.length - 1); } return sValue; }
function trim(sValue) { var sTemp = ltrim(sValue); return rtrim(sTemp); }
function validateEmail(sEmail, sName, bAllowEmpty) { var exclude = /[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/; var check = /@[\w\-]+\./; var checkend = /\.[a-zA-Z]{2,3}$/; var sErrorMsg = ""; sEmail = trim(sEmail); if (!bAllowEmpty && sEmail == "") { sErrorMsg = sName + sErrIsEmpty; } else if (sEmail != "") { if (((sEmail.search(exclude) != -1) || (sEmail.search(check)) == -1) || (sEmail.search(checkend) == -1)) { sErrorMsg = sName + sErrValidateEmail; } } return sErrorMsg; }

</script> 	
	</head>
	<body style="overflow:hidden">
	    
	    <!-- site preloader start -->
	    <div class="page-loader">
	    	<div class="loader-in"></div>
	    </div>
	    <!-- site preloader end -->
	    
	    <div class="pageWrapper">
		    <div id="headWrapper" class="clearfix">
		    	
		    	<!-- top bar start -->
		    	<div class="top-bar">
				    <div class="container">
						<div class="row">
							<div class="cell-5">
							    <ul>
								    <li><a href="mailto:info@neo-elite.com"><i class="fa fa-envelope"></i>info@neo-elite.com</a></li>
								    <li><span><i class="fa fa-phone"></i> Call Us: +91-20-60500068/66487514</span></li>
							    </ul>
							</div>
							<div class="cell-7 right-bar">
					    		<ul class="right">
									
						    	    <li><a href="sitemap.html"><i class="fa fa-sitemap"></i>Site Map</a></li>
						        </ul>
							</div>
						</div>
				    </div>
			    </div>
			    <!-- top bar end -->
			    
			    <!-- Logo, global navigation menu and search start -->
			    <header class="top-head">
				    <div class="container">
					    <div class="row">
					    	<div class="cell-3">
						    	<a href="index.html"><img src="images/logo.png"></a></div>
						    <div class="cell-9 top-menu">
							    
							    <!-- top navigation menu start -->
							    <nav class="top-nav">
								    <ul class="mega-menu">
								      
								      <li><a href="#"><i class="fa"></i><span>About Company</span></a>
								      		<div class="div-mega main-bg">
												<div class="div-mega-section">
													<h4>About Company</h4>
														<ul>
                                                            <li><a href="about_us.html">About Us</a></li>
															<li><a href="vision_mission.html">Vision & Mission</a></li>
															<li><a href="values.html">Our Values</a></li>
                                                        </ul>
												</div>
												
												<div class="div-mega-section">
													<h4>Delivery Models</h4>
														<ul>
                                                            <li><a href="global_delivery_model.html">Global Delivery Model</a></li>
															<li><a href="project_based_model.html">Project Based Models</a></li>
															<li><a href="office_development.html">Offsite Development and Support Models</a></li>
                                                        </ul>
												</div>
												
											</div>
								      </li>
								      
								      <li><a href="#"><i class="fa"></i><span>Why Neomorph</span></a>
								      		<div class="div-mega main-bg">
												<div class="div-mega-section">
													<h4>Centre Of Excellence</h4>
														<ul>
                                                            <li><a href="net.html">.NET</a></li>
															<li><a href="java.html">Java</a></li> 
															<li><a href="data_warehousing.html">Data Warehousing</a></li>
															<li><a href="mainframes.html">Mainframes</a></li>
															<li><a href="ibm.html">IBM </a></li>
															<li><a href="cloud_computing.html">Cloud Computing</a></li>
															<li><a href="mobile_technologies.html">Mobile Technologies</a></li>
                                                        </ul>
												</div>
												
												<div class="div-mega-section">
													<h4>Our Expertise</h4>
														<ul>
                                                            <li><a href="sap.html">SAP</a></li>
															<li><a href="sas.html">SAS</a></li>
															<li><a href="outsourcing.html">Outsourcing</a></li>
															<li><a href="bpo.html">BPO</a></li>
															<li><a href="oracle_applications.html">Oracle Applications</a></li>
															<li><a href="middleware.html">Middleware</a></li>
                                                        </ul>
												</div>
												
												<div class="div-mega-section">
													<h4>Services</h4>
														<ul>
                                                            <li><a href="application_development.html">Application Development</a></li>
															<li><a href="application_management.html">Application Management</a></li>
															<li><a href="it_consulting.html">IT Consulting</a></li>
															
															<li><a href="enterprise_integration.html">Enterprise Integration</a></li>
															<li><a href="embedded_systems.html">Embedded System</a></li>
															<li><a href="infrastructure_management.html">Infrastructure Management</a></li>
															<li><a href="software_development.html">Software Development</a></li>
															<li><a href="web_development.html">Web Development</a></li>
                                                        </ul>
												</div>
												
												<div class="div-mega-section">
													<h4>Solutions</h4>
														<ul>
															<li><a href="mobile_data_services.html">Mobile Data Services</a></li>
															<li><a href="mobile_apps_development.html">Mobile Application Development</a></li>
															<li><a href="healthcare.html">Health Care</a></li>
															<li><a href="sas_solutions.html">SAS</a></li>
															<li><a href="digital_marketing.html">Digital Marketing</a></li>
															<li><a href="business_intelligence.html">Business Intelligence & Data Warehousing</a></li>
										      			</ul>
												</div>
											</div>
								      </li>
									  <li><a href="#"><i class="fa"></i><span>Industry</span></a>
								      		<ul>
                                                <li><a href="banking_services.html">Banking & Financial Services</a></li>
												<li><a href="education.html">Education</a></li>
												<li><a href="retail.html">Retail</a></li>
												<li><a href="insurance.html">Insurance</a></li>
												<li><a href="supply_chain_management.html">Supply chain Management</a></li>
												<li><a href="jobs_recruitment.html">Jobs & Recruitment</a></li>
												<li><a href="hospitality.html">Hospitality</a></li>
                                            </ul>
								      </li>
								      <li><a href="technology.html"><i class="fa"></i><span>Technology</span></a></li>
								      <li><a href="products.html"><i class="fa"></i><span>Products</span></a></li>
									  <li><a href="careers.html"><i class="fa"></i><span>Careers</span></a></li>
								      <li class="selected"><a href="contact_us.php"><i class="fa"></i><span>Contact Us</span></a></li>
								    </ul>
							    </nav>
							    <!-- top navigation menu end -->
							    
							    <!-- top search start -->
							    
							    <!-- top search end -->
							</div>
					    </div>
				    </div>
			    </header>
			    <!-- Logo, Global navigation menu and search end -->
			    
			</div>
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Contact <span>Neomorph</span></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="padd-top-45">
			    	<div class="container">
			    		<!--<div class="row">
			    		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
							<div id="map_canvas" style="height: 450px; width: 100%;">
						    <script type="text/javascript"> 
						    	function init_map(){
						    		var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),
						    		mapTypeId: google.maps.MapTypeId.ROADMAP};
						    		map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
						    		marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});
						    		infowindow = new google.maps.InfoWindow({content:"<div class='noScroll'><b>Headquarter</b><br/>2880 Broadway<br/> New York</div>" });
						    		google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
						    		infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
						    </script>
			    		</div>
			    	</div>-->
		    	</div>
				
			</div>
				<div class="padd-vertical-45">
					<div class="container">
						<div class="row">
			    			<div class="cell-7 contact-form fx" data-animate="fadeInLeft" id="contact">
			    				<h3 class="block-head">Get in Touch</h3>
			    				<form id="frmFlintCnt" name="frmFlintCnt" method="post" action="contact.php" onSubmit="javascript:return ValidateCnt();" enctype="multipart/form-data">
  <table border="0" cellspacing="4" cellpadding="4" width="65%">
    <tr>
      <td width="33%" valign="top"><span style="color:#ff0000">*</span> <strong>Marked fields are mandatory</strong></td>
      <td width="27%" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td width="33%" valign="top"><strong>First Name</strong>:<span style="color:#ff0000">*</span><br />
              <input type="text" maxlength="30" size="40" id="txtFName" name="txtFName" />
      </td>
      <td width="27%" valign="top"><strong>Last Name</strong>:<span style="color:#ff0000">*</span>&nbsp;<br />
              <input type="text" maxlength="80" size="40" id="txtLName" name="txtLName" />
      </td>
    </tr>
    <tr>
      <td valign="top"><strong>Company Name</strong>:<span style="color:#ff0000">*</span><br />
              <input type="text" maxlength="40" size="40" id="txtCmpName" name="txtCmpName" />
      </td>
      <td valign="top"><strong>Job Title</strong>:<br />
              <input type="text" maxlength="40" size="40" id="txtJobTitle" name="txtJobTitle" />
      </td>
    </tr>
    <tr>
      <td valign="top"><strong>Telephone</strong>:<span style="color:#ff0000">*</span><br />
              <input type="text" maxlength="40" size="40" id="txtTelephone" name="txtTelephone" />
      </td>
      <td valign="top"><strong>Email</strong>:<span style="color:#ff0000">*</span> <br />
              <input type="text" maxlength="80" size="40" id="txtEmail" name="txtEmail" />
      </td>
    </tr>
    <tr>
      <td width="33%" valign="top"><strong>Country</strong>:<br />
	  <select id="ddlCountry" name="ddlCountry" style="width:260px;">
                    <option value="US">UNITED STATES  
                      </option><option value="GB">UNITED KINGDOM  
                      </option><option value="CA">CANADA  
                      </option><option value="AU">AUSTRALIA  
                      </option><option value="IE">IRELAND  
                      </option><option value="AF">AFGHANISTAN  
                      </option><option value="AX">ALAND ISLANDS  
                      </option><option value="AL">ALBANIA  
                      </option><option value="DZ">ALGERIA  
                      </option><option value="AS">AMERICAN SAMOA  
                      </option><option value="AD">ANDORRA  
                      </option><option value="AO">ANGOLA  
                      </option><option value="AI">ANGUILLA  
                      </option><option value="AQ">ANTARCTICA  
                      </option><option value="AG">ANTIGUA AND BARBUDA  
                      </option><option value="AR">ARGENTINA  
                      </option><option value="AM">ARMENIA  
                      </option><option value="AW">ARUBA  
                      </option><option value="AT">AUSTRIA  
                      </option><option value="AZ">AZERBAIJAN  
                      </option><option value="BS">BAHAMAS  
                      </option><option value="BH">BAHRAIN  
                      </option><option value="BD">BANGLADESH  
                      </option><option value="BB">BARBADOS  
                      </option><option value="BY">BELARUS  
                      </option><option value="BE">BELGIUM  
                      </option><option value="BZ">BELIZE  
                      </option><option value="BJ">BENIN  
                      </option><option value="BM">BERMUDA  
                      </option><option value="BT">BHUTAN  
                      </option><option value="BO">BOLIVIA  
                      </option><option value="BA">BOSNIA AND HERZEGOVINA  
                      </option><option value="BW">BOTSWANA  
                      </option><option value="BV">BOUVET ISLAND  
                      </option><option value="BR">BRAZIL  
                      </option><option value="IO">BRITISH INDIAN OCEAN TERRITORY  
                      </option><option value="BN">BRUNEI DARUSSALAM  
                      </option><option value="BG">BULGARIA  
                      </option><option value="BF">BURKINA FASO  
                      </option><option value="BI">BURUNDI  
                      </option><option value="KH">CAMBODIA  
                      </option><option value="CM">CAMEROON  
                      </option><option value="CV">CAPE VERDE  
                      </option><option value="KY">CAYMAN ISLANDS  
                      </option><option value="CF">CENTRAL AFRICAN REPUBLIC  
                      </option><option value="TD">CHAD  
                      </option><option value="CL">CHILE  
                      </option><option value="CN">CHINA  
                      </option><option value="CX">CHRISTMAS ISLAND  
                      </option><option value="CC">COCOS (KEELING) ISLANDS  
                      </option><option value="CO">COLOMBIA  
                      </option><option value="KM">COMOROS  
                      </option><option value="CG">CONGO  
                      </option><option value="CD">CONGO,THE DEMOCRATIC REPUBLIC OF THE  
                      </option><option value="CK">COOK ISLANDS  
                      </option><option value="CR">COSTA RICA  
                      </option><option value="CI">
                    </option><option value="HR">CROATIA  
                      </option><option value="CU">CUBA  
                      </option><option value="CY">CYPRUS  
                      </option><option value="CZ">CZECH REPUBLIC  
                      </option><option value="DK">DENMARK  
                      </option><option value="DJ">DJIBOUTI  
                      </option><option value="DM">DOMINICA  
                      </option><option value="DO">DOMINICAN REPUBLIC  
                      </option><option value="EC">ECUADOR  
                      </option><option value="EG">EGYPT  
                      </option><option value="SV">EL SALVADOR  
                      </option><option value="GQ">EQUATORIAL GUINEA  
                      </option><option value="ER">ERITREA  
                      </option><option value="EE">ESTONIA  
                      </option><option value="ET">ETHIOPIA  
                      </option><option value="FK">FALKLAND ISLANDS (MALVINAS)  
                      </option><option value="FO">FAROE ISLANDS  
                      </option><option value="FJ">FIJI  
                      </option><option value="FI">FINLAND  
                      </option><option value="FR">FRANCE  
                      </option><option value="GF">FRENCH GUIANA  
                      </option><option value="PF">FRENCH POLYNESIA  
                      </option><option value="TF">FRENCH SOUTHERN TERRITORIES  
                      </option><option value="GA">GABON  
                      </option><option value="GM">GAMBIA  
                      </option><option value="GE">GEORGIA  
                      </option><option value="DE">GERMANY  
                      </option><option value="GH">GHANA  
                      </option><option value="GI">GIBRALTAR  
                      </option><option value="GR">GREECE  
                      </option><option value="GL">GREENLAND  
                      </option><option value="GD">GRENADA  
                      </option><option value="GP">GUADELOUPE  
                      </option><option value="GU">GUAM  
                      </option><option value="GT">GUATEMALA  
                      </option><option value="GG">GUERNSEY  
                      </option><option value="GN">GUINEA  
                      </option><option value="GW">GUINEA-BISSAU  
                      </option><option value="GY">GUYANA  
                      </option><option value="HT">HAITI  
                      </option><option value="HM">HEARD ISLAND AND MCDONALD ISLANDS  
                      </option><option value="VA">VATICAN CITY STATE  
                      </option><option value="HN">HONDURAS  
                      </option><option value="HK">HONG KONG  
                      </option><option value="HU">HUNGARY  
                      </option><option value="IS">ICELAND  
                      </option><option selected="" value="IN">INDIA  
                      </option><option value="ID">INDONESIA  
                      </option><option value="IR">IRAN,ISLAMIC REPUBLIC OF  
                      </option><option value="IQ">IRAQ  
                      </option><option value="IM">ISLE OF MAN  
                      </option><option value="IL">ISRAEL  
                      </option><option value="IT">ITALY  
                      </option><option value="JM">JAMAICA  
                      </option><option value="JP">JAPAN  
                      </option><option value="JE">JERSEY  
                      </option><option value="JO">JORDAN  
                      </option><option value="KZ">KAZAKHSTAN  
                      </option><option value="KE">KENYA  
                      </option><option value="KI">KIRIBATI  
                      </option><option value="KP">KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF  
                      </option><option value="KR">KOREA,REPUBLIC OF  
                      </option><option value="KW">KUWAIT  
                      </option><option value="KG">KYRGYZSTAN  
                      </option><option value="LA">LAO PEOPLE'S DEMOCRATIC REPUBLIC  
                      </option><option value="LV">LATVIA  
                      </option><option value="LB">LEBANON  
                      </option><option value="LS">LESOTHO  
                      </option><option value="LR">LIBERIA  
                      </option><option value="LY">LIBYAN ARAB JAMAHIRIYA  
                      </option><option value="LI">LIECHTENSTEIN  
                      </option><option value="LT">LITHUANIA  
                      </option><option value="LU">LUXEMBOURG  
                      </option><option value="MO">MACAO  
                      </option><option value="MK">MACEDONIA,THE FORMER YUGOSLAV REPUBLIC OF  
                      </option><option value="MG">MADAGASCAR  
                      </option><option value="MW">MALAWI  
                      </option><option value="MY">MALAYSIA  
                      </option><option value="MV">MALDIVES  
                      </option><option value="ML">MALI  
                      </option><option value="MT">MALTA  
                      </option><option value="MH">MARSHALL ISLANDS  
                      </option><option value="MQ">MARTINIQUE  
                      </option><option value="MR">MAURITANIA  
                      </option><option value="MU">MAURITIUS  
                      </option><option value="YT">MAYOTTE  
                      </option><option value="MX">MEXICO  
                      </option><option value="FM">MICRONESIA,FEDERATED STATES OF  
                      </option><option value="MD">MOLDOVA,REPUBLIC OF  
                      </option><option value="MC">MONACO  
                      </option><option value="MN">MONGOLIA  
                      </option><option value="ME">MONTENEGRO  
                      </option><option value="MS">MONTSERRAT  
                      </option><option value="MA">MOROCCO  
                      </option><option value="MZ">MOZAMBIQUE  
                      </option><option value="MM">MYANMAR  
                      </option><option value="NA">NAMIBIA  
                      </option><option value="NR">NAURU  
                      </option><option value="NP">NEPAL  
                      </option><option value="NL">NETHERLANDS  
                      </option><option value="AN">NETHERLANDS ANTILLES  
                      </option><option value="NC">NEW CALEDONIA  
                      </option><option value="NZ">NEW ZEALAND  
                      </option><option value="NI">NICARAGUA  
                      </option><option value="NE">NIGER  
                      </option><option value="NG">NIGERIA  
                      </option><option value="NU">NIUE  
                      </option><option value="NF">NORFOLK ISLAND  
                      </option><option value="MP">NORTHERN MARIANA ISLANDS  
                      </option><option value="NO">NORWAY  
                      </option><option value="OM">OMAN  
                      </option><option value="PK">PAKISTAN  
                      </option><option value="PW">PALAU  
                      </option><option value="PS">PALESTINIAN TERRITORY,OCCUPIED  
                      </option><option value="PA">PANAMA  
                      </option><option value="PG">PAPUA NEW GUINEA  
                      </option><option value="PY">PARAGUAY  
                      </option><option value="PE">PERU  
                      </option><option value="PH">PHILIPPINES  
                      </option><option value="PN">PITCAIRN  
                      </option><option value="PL">POLAND  
                      </option><option value="PT">PORTUGAL  
                      </option><option value="PR">PUERTO RICO  
                      </option><option value="QA">QATAR  
                      </option><option value="RE">
                    </option><option value="RO">ROMANIA  
                      </option><option value="RU">RUSSIAN FEDERATION  
                      </option><option value="RW">RWANDA  
                      </option><option value="BL">
                    </option><option value="SH">SAINT HELENA  
                      </option><option value="KN">SAINT KITTS AND NEVIS  
                      </option><option value="LC">SAINT LUCIA  
                      </option><option value="MF">SAINT MARTIN  
                      </option><option value="PM">SAINT PIERRE AND MIQUELON  
                      </option><option value="VC">SAINT VINCENT AND THE GRENADINES  
                      </option><option value="WS">SAMOA  
                      </option><option value="SM">SAN MARINO  
                      </option><option value="ST">SAO TOME AND PRINCIPE  
                      </option><option value="SA">SAUDI ARABIA  
                      </option><option value="SN">SENEGAL  
                      </option><option value="RS">SERBIA  
                      </option><option value="SC">SEYCHELLES  
                      </option><option value="SL">SIERRA LEONE  
                      </option><option value="SG">SINGAPORE  
                      </option><option value="SK">SLOVAKIA  
                      </option><option value="SI">SLOVENIA  
                      </option><option value="SB">SOLOMON ISLANDS  
                      </option><option value="SO">SOMALIA  
                      </option><option value="ZA">SOUTH AFRICA  
                      </option><option value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS  
                      </option><option value="ES">SPAIN  
                      </option><option value="LK">SRI LANKA  
                      </option><option value="SD">SUDAN  
                      </option><option value="SR">SURINAME  
                      </option><option value="SJ">SVALBARD AND JAN MAYEN  
                      </option><option value="SZ">SWAZILAND  
                      </option><option value="SE">SWEDEN  
                      </option><option value="CH">SWITZERLAND  
                      </option><option value="SY">SYRIAN ARAB REPUBLIC  
                      </option><option value="TW">TAIWAN,PROVINCE OF CHINA  
                      </option><option value="TJ">TAJIKISTAN  
                      </option><option value="TZ">TANZANIA,UNITED REPUBLIC OF  
                      </option><option value="TH">THAILAND  
                      </option><option value="TL">TIMOR-LESTE  
                      </option><option value="TG">TOGO  
                      </option><option value="TK">TOKELAU  
                      </option><option value="TO">TONGA  
                      </option><option value="TT">TRINIDAD AND TOBAGO  
                      </option><option value="TN">TUNISIA  
                      </option><option value="TR">TURKEY  
                      </option><option value="TM">TURKMENISTAN  
                      </option><option value="TC">TURKS AND CAICOS ISLANDS  
                      </option><option value="TV">TUVALU  
                      </option><option value="UG">UGANDA  
                      </option><option value="UA">UKRAINE  
                      </option><option value="AE">UNITED ARAB EMIRATES  
                      </option><option value="UM">UNITED STATES MINOR OUTLYING ISLANDS  
                      </option><option value="UY">URUGUAY  
                      </option><option value="UZ">UZBEKISTAN  
                      </option><option value="VU">VANUATU  
                      </option><option value="VE">VENEZUELA,BOLIVARIAN REPUBLIC OF  
                      </option><option value="VN">VIET NAM  
                      </option><option value="VG">VIRGIN ISLANDS,BRITISH  
                      </option><option value="VI">VIRGIN ISLANDS,U.S.  
                      </option><option value="WF">WALLIS AND FUTUNA  
                      </option><option value="EH">WESTERN SAHARA  
                      </option><option value="YE">YEMEN  
                      </option><option value="ZM">ZAMBIA  
                      </option><option value="ZW">ZIMBABWE  
                    </option></select>
	  </td>
      <td width="27%" valign="top"><strong>Website</strong>:<br />
              <input type="text" maxlength="80" size="40" id="txtURL" name="txtURL" value="http://" /></td>
    </tr>
    <tr>
      <td colspan="2" valign="top">Which Currency would you like your    project quoted in? : &nbsp; </td>
    </tr>
    <tr>
      <td colspan="2" valign="top"><strong>Project Description</strong>:<span style="color:#ff0000">*</span><br />
              <textarea rows="4" cols="65" id="txtDescription" name="txtDescription"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" valign="top"><strong>Attachment</strong>:<br />
	  <input id="attachment" name="attachment" type="file" /></td>
    </tr>
    <tr>
      <td valign="top" colspan="2">I would like to receive newsletter from Neomorph
        <input type="checkbox" checked="checked" id="chkNL" name="chkNL" value="1" /></td>
    </tr>
    <tr>
      <td colspan="2" valign="top"><p>
        <input type="submit" id="btnSubmit" value="Submit" class="btn btn-large main-bg" />
		<input name="Reset" type="button" value="Reset" class="btn btn-large main-bg" onClick="javascript:reset();" />
		</p></td>
    </tr>
    <tr>
      <td colspan="2" valign="top"><p><span style="color:#ff0000">*</span> We assure you that your personal data will not be shared    with anyone.</p></td>
    </tr>
  </table>
  </form>
			    			</div>
			    			<div class="cell-5 contact-detalis">
			    				<h3 class="block-head">Contact Details</h3>
			    				
			    				<div class="padding-vertical">
			    					<div class="cell-5 fx" data-animate="fadeInRight">
				    					<h4 class="main-color bold">Corporate Office:</h4>
				    					<h5>Address</h5>
				    					<p>Neomorph Technologies (P) Ltd. <br>Platinum Towers, Level 8, No. 1, Naylor Road, Pune-411001</p>
				    					<h5>Email:</h5>
				    					<p><a href="mailto:info@neo-elite.com">info@neo-elite.com</a></p>
				    					<h5 >Phone:</h5>
				    					<p>+91-20-6648 7514</p>
				    					<h5 >FAX:</h5>
				    					<p>+91-20-6648 7503</p>
                                        <h5>Website:</h5>
                                        <p>www.neo-elite.com</p>
				    				</div>
				    				<div class="cell-2"><br></div>
				    				<div class="cell-5 fx" data-animate="fadeInRight">
				    					<h4 class="main-color bold">Branch Office</h4>
				    					<h5>Address</h5>
				    				<p>Neomorph Technologies (P) Ltd.<br>102,Level-1, Pentagon P-4 <br>Magarpatta City<br>Hadapsar, <br>Pune-India</p>
<h5 >Phone:</h5>
				    					<p>+91-20-60500068</p>
				    					<h5>Email:</h5>
				    					<p><a href="mailto:info@neo-elite.com">info@neo-elite.com</a></p>
				    				</div>
			    				</div>
                                
                                <hr class="hr-style4">
			    				<div class="clearfix"></div>
                                <div class="cell-10 fx" data-animate="fadeInRight">
                                    <p><strong>Jobs:</strong>  Please send your profiles to <a href="mailto:jobs@neo-elite.com">jobs@neo-elite.com</a> for career opportunities. </p>
                                    <p><strong>Support:</strong> Please send mails to <a href="mailto:support@neo-elite.com">support@neo-elite.com</a>, if any support related queries.</p>
                                    
                                    <h5>For Marketing :</h5>
                                    <p><a href="mailto:marketing@neo-elite.com">marketing@neo-elite.com</a> </p>
                                    <h5>For Sales :</h5>
                                    <p><a href="mailto:sales@neo-elite.com">sales@neo-elite.com</a></p>
                                    <h5>For Support :</h5>
                                    <p><a href="mailto:support@neo-elites.com">support@neo-elite.com</a></p>
                                    </div>


                                
			    			</div>
						</div>
					</div>
				</div>
				
		    <!-- Back to top Link -->
	    	<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
	    
	    </div>
		
		<footer id="footWrapper">
		    	<div class="footer-top">
				    <div class="container">
					    <div class="row">
					    	<!-- main menu footer cell start -->
						    <div class="cell-3">
							    <h3 class="block-head">Centre Of Excellence</h3>
							    <ul class="footer-menu">
								    <li><a href="net.html">.NET</a></li>
									<li><a href="java.html">Java</a></li> 
									<li><a href="data_warehousing.html">Data Warehousing</a></li>
									<li><a href="mainframes.html">Mainframes</a></li>
									<li><a href="ibm.html">IBM </a></li>
									<li><a href="cloud_computing.html">Cloud Computing</a></li>
									<li><a href="mobile_technologies.html">Mobile Technologies</a></li>
							    </ul>
						    </div>
						    <!-- main menu footer cell start -->
						    
						    <!-- Our Friends footer cell start -->
						    <div class="cell-3">
							    <h3 class="block-head">Our Expertise</h3>
							    <ul class="footer-menu">
								    <li><a href="sap.html">SAP</a></li>
									<li><a href="sas.html">SAS</a></li>
									<li><a href="outsourcing.html">Outsourcing</a></li>
									<li><a href="bpo.html">BPO</a></li>
									<li><a href="oracle_applications.html">Oracle Applications</a></li>
									<li><a href="middleware.html">Middleware</a></li>
							    </ul>
						    </div>
						    <!-- Our Friends footer cell start -->
						    
						    <!-- Useful Links footer cell start -->
						    <div class="cell-3">
						    	<h3 class="block-head">Services</h3>
						    	<ul class="footer-menu">
								    <li><a href="application_development.html">Application Development</a></li>
									<li><a href="application_management.html">Application Management</a></li>
									<li><a href="it_consulting.html">IT Consulting</a></li>
									
									<li><a href="enterprise_integration.html">Enterprise Integration</a></li>
									<li><a href="embedded_systems.html">Embedded System</a></li>
									<li><a href="infrastructure_management.html">Infrastructure Management</a></li>
									<li><a href="software_development.html">Software Development</a></li>
									<li><a href="web_development.html">Web Development</a></li>
							    </ul>
						    </div>
						    <!-- Useful Links footer cell start -->
						    
						    <!-- Tags Cloud footer cell start -->
						    <div class="cell-3">
							    <h3 class="block-head">Industry</h3>
							    <ul class="footer-menu">
								    <li><a href="banking_services.html">Banking & Financial Services</a></li>
									<li><a href="education.html">Education</a></li>
									<li><a href="retail.html">Retail</a></li>
									<li><a href="insurance.html">Insurance</a></li>
									<li><a href="supply_chain_management.html">Supply chain Management</a></li>
									<li><a href="jobs_recruitment.html">Jobs & Recruitment</a></li>
									<li><a href="hospitality.html">Hospitality</a></li>
							    </ul>
						    </div>
						    <!-- Tags Cloud footer cell start -->
						    
						    <div class="clearfix"></div>
						    
					    </div>
				    </div>	
			    </div>
			    
			    <!-- footer bottom bar start -->
			    <div class="footer-bottom">
				    <div class="container">
			    		<div class="row">
				    		<!-- footer copyrights left cell -->
				    		<div class="copyrights cell-5">&copy; Copyrights <b>Neomorph Technologies Pvt. Ltd.</b> 2007-2015 All rights reserved. </div>
				    		
				    		<!-- footer social links right cell start -->
						    <div class="cell-7">
							    <ul class="social-list right">
								    <li class="skew-25"><a href="https://www.facebook.com/" target="_blank" data-title="facebook" data-tooltip="true"><span class="fa fa-facebook skew25"></span></a></li>
								    <li class="skew-25"><a href="https://twitter.com/" target="_blank" data-title="twitter" data-tooltip="true"><span class="fa fa-twitter skew25"></span></a></li>
							    </ul>
						    </div>
						    <!-- footer social links right cell end -->
						    
			    		</div>
				    </div>
			    </div>
			    <!-- footer bottom bar end -->
			    
		    </footer>
		
	    </div>
	    <!-- Load JS siles -->
	    <script type="text/javascript" src="js/jquery.min.js"></script>
	    
	    <!-- Waypoints script -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		
		<!-- SLIDER REVOLUTION SCRIPTS  -->
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="js/jquery.animateNumber.min.js"></script>
		
		<!-- slick slider carousel -->
		<script type="text/javascript" src="js/slick.min.js"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
		
		<!-- PrettyPhoto script -->
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		
		<!-- Share post plugin script -->
		<script type="text/javascript" src="js/jquery.sharrre.min.js"></script>
		
		<!-- Product images zoom plugin -->
		<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>
		
		<!-- Input placeholder plugin -->
		<script type="text/javascript" src="js/jquery.placeholder.js"></script>
		
		<!-- Contact us js file -->
		<script type="text/javascript" src="js/contact.js"></script>
		
		<!-- Tweeter API plugin -->
		<script type="text/javascript" src="js/twitterfeed.js"></script>
		
		<!-- Tweeter API plugin -->
		<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
		
		<!-- general script file -->
		<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function () {
//Contact form
    $(function () {
        var v = $("#contactform").validate({
            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    target: "#result",
                    clearForm: true
                });
            }
        });
    });
    //To clear message field on page refresh (you may clear other fields too, just give the 'id to input field' in html and mention it here, as below)
    $('#contactform #message').val('');
});	
</script>         
	</body>
</html>