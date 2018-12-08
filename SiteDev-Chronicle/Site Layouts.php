

/*---------------------------------------------(3)-5th Dec 2018)----------------------------------------------------*/  
                                              Header Navigation


SRC:https://wponlinecoach.com/tutorial/menus-desktop-and-mobile/
 .main-navigation ul ul {
    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
    float: left;
    position: absolute;
    top: 179px;
    left: 0;
    z-index: 99999;
    background-color: #106ccc;
    width: 100%;
    display: none; /* Added */
}
.main-navigation ul li:hover>ul, .main-navigation ul li.focus>ul {
    /* left: auto; */
    display: block; /* Added */
}

.main-navigation ul li:hover>ul, .main-navigation ul li.focus>ul {
    /* left: auto; */
    display: block; /* Added */
}
@media only screen and (min-width: 50em) {
	.menu-click, .menu-panel, .mobile-menu {
		display: none;
}
.main-navigation {
	display: flex;
	flex-flow: column nowrap;
	clear: both;
	height: 50px;
	line-height: 50px;
	background: #0d434e;
	border-radius: 2px;
	box-shadow: inset 0 0 1px 1px #012d35;
	position: fixed;
	top: 30px;
	left:0;
	width: 100%;
	z-index:20;
}

.main-navigation ul {
	display: flex;
	flex-flow: row nowrap;
	justify-content: flex-end;
	list-style: none;
	margin: 0;
	padding-left: 0;
	width: 100%;
	max-width: 70rem;
	margin: 0 auto;
}

.main-navigation ul ul {
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
	float: left;
	position: absolute;
	top: 100%;
	left: -999em;
	z-index: 99999;
	background:#225c67;
	width: 200px;
	display: flex;
	flex-flow: column nowrap;
}
.main-navigation ul ul ul {
	left: -999em;
	top: 0;
}

.main-navigation ul ul li:hover > ul,
.main-navigation ul ul li.focus > ul {
	left: 100%;
}

.main-navigation ul ul a {
	width: 200px;
}

.main-navigation ul li:hover > ul,
.main-navigation ul li.focus > ul {
	left: auto;
}
.main-navigation ul.menu > li:last-of-type:hover > ul {
	right: 0;
	left: auto;
}
.main-navigation li {
	float: left;
	position: relative;
	line-height: 50px;
	height: 50px;
	border-right: 1px solid #417882;
}
.main-navigation li:last-of-type, .main-navigation ul ul li { border-right: none; }
.main-navigation a {
	display: block;
	text-decoration: none;
	line-height: 50px;
	height: 50px;
	color: #f0f0f0;
	padding: 0 1em;
	text-transform: uppercase;
}
.main-navigation ul ul li { border-right:none; }
.main-navigation li.menu-item-has-children {
	padding-right: 1.2em;
}
.main-navigation li.menu-item-has-children:after {
	position: absolute;
	content:'';
	width:0;
	height: 0;
	border-top: 6px solid #417882;
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	top: 50%;
	margin-top: -2px;
	right: 1.1em;
}
.main-navigation ul ul li.menu-item-has-children:after {
	border-left: 6px solid #639aa4;
	border-top: 5px solid transparent;
	border-bottom: 5px solid transparent;
	border-right: none;
	margin-top: -7px;
	right: 0.1em;
}
}
/* Circle */
nav.circle ul li a {
  position: relative;
  overflow: hidden;
  z-index: 1;
}
nav.circle ul li a:after {
  display: block;
  position: absolute;
  margin: 0;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: '.';
  color: transparent;
  width: 1px;
  height: 1px;
  border-radius: 50%;
  background: transparent;
}
nav.circle ul li a:hover:after {
  -webkit-animation: circle 1.5s ease-in forwards;
}
/*---------------------------------------------(2)-2nd Dec 2018)----------------------------------------------------*/  
                                              Front page layout

  i) created a new folder in the sass folder named template: this is to uniquely style any template 
  ii) first template to style will be the front-page template
          
    <section id="frontpage" class="widget-area">

          The front page main content consists of a widget area
          which is given an id of frontpage and a class of widget-area.
          This section will be the overall container for all widgets on the front page.
          
          Each course module (eg: Algebra 101 ) will be displayed in the sidebar as a widget (hence this must be 
          configured from the widget area in dashboard)

    <div class="frontpage-widget">
          each widget will be governed by the class of frontpage-widget

/*---------------------------------------------------------------------------------------------------*/ 



/*---------------------------------------------(1)----------------------------------------------------*/  
Front page Widget

    build custom widget to populate the front page
      build as a plugin deltaPc-widget
    in this widget wrer an image
                           title
                           url linking image to video lessons page
                           description 
                           button to read 
  /*-------------------------------------------------------------------------------------------------*/
