<!DOCTYPE html>
<!--[if lt IE 7]>

<html class="lt-ie9 lt-ie8 lt-ie7" lang="en">

<![endif]-->
<!--[if IE 7]>

<html class="lt-ie9 lt-ie8" lang="en">

<![endif]-->
<!--[if IE 8]>

<html class="lt-ie9" lang="en">

<![endif]-->
<!--[if gt IE 8]>
<!-->

<html lang="en">
  
  <!--
<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>
      Blue Moon - Responsive Admin Dashboard
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
    </script>
    <link href="icomoon/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet"> <!-- Important. For Theming change primary-color variable in main.css  -->
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js">
    </script>
    <![endif]-->
  <link href="css/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet">
  <link href="css/wysiwyg/wysiwyg-color.css" rel="stylesheet">
  <link href="css/charts-graphs.css" rel="stylesheet">
  <link href="css/clockface.css" rel="stylesheet">
  <link href="css/timepicker.css" rel="stylesheet">
  <link href="css/alertify.core.css" rel="stylesheet" id="toggleCSS">
  
  </head>
  <body>
    <header>
      <a href="#" class="logo">
        <img src="img/logo.png" alt="Logo"/>
      </a>
      <div class="btn-group">
        <button class="btn btn-primary">
          Srinu Baswa
        </button>
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
          <span class="caret">
          </span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li>
            <a href="#">
              Edit Profile
            </a>
          </li>
          <li>
            <a href="#">
              Account Settings
            </a>
          </li>
          <li>
            <a href="#">
              Logout
            </a>
          </li>
        </ul>
      </div>
      <ul class="mini-nav">
        <li>
          <a href="#">
            <div class="fs1" aria-hidden="true" data-icon="&#xe040;"></div>
            <span class="info-label badge badge-warning">
              3
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="fs1" aria-hidden="true" data-icon="&#xe04c;"></div>
            <span class="info-label badge badge-info">
              5
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="fs1" aria-hidden="true" data-icon="&#xe037;"></div>
            <span class="info-label badge badge-success">
              9
            </span>
          </a>
        </li>
      </ul>
    </header>
    <div class="container-fluid">
      <div class="dashboard-container">
        <div class="top-nav">
          <ul>
            <li>
              <a href="index.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></div>
                Dashboard
              </a>
            </li>
            <li>
              <a href="forms.html" >
                <div class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></div>
                Forms
              </a>
            </li>
            <li>
              <a href="graphs.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe096;"></div>
                Graphs
              </a>
            </li>
            <li>
              <a href="ui-elements.html" class="selected">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0d2;"></div>
                UI Elements
              </a>
            </li>
            <li>
              <a href="icons.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0a9;"></div>
                Icons
              </a>
            </li>
            <li>
              <a href="tables.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe14a;"></div>
                Tables
              </a>
            </li>
            <li>
              <a href="media.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe00d;"></div>
                Media
              </a>
            </li>
            <li>
              <a href="calendar.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe052;"></div>
                Calendar
              </a>
            </li>
            <li>
              <a href="typography.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe100;"></div>
                Typography
              </a>
            </li>
            <li>
              <a href="edit-profile.html">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0aa;"></div>
                Extras
              </a>
            </li>
          </ul>
          <div class="clearfix">
          </div>
        </div>
        <div class="sub-nav">
          <ul>
            <li><a href="" class="heading">UI Elements</a></li>
            <li>
              <a href="#tabs">
                Tabs
              </a>
            </li>
            <li>
              <a href="#accordion">
                Accordion
              </a>
            </li>
            <li>
              <a href="#popover">
                Popover
              </a>
            </li>
            <li>
              <a href="#tooltips">
                Tooltips
              </a>
            </li>
            <li>
              <a href="#12columngrid">
                12 Columns Grid
              </a>
            </li>
            <li>
              <a href="#progressbar">
                Progress Bars
              </a>
            </li>
          </ul>
          <div class="btn-group pull-right">
            <button class="btn btn-primary">
              Main Menu
            </button>
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
              <span class="caret">
              </span>
            </button>
            <ul class="dropdown-menu pull-right">
              <li>
                <a href="index.html" data-original-title="">
                  Dashboard
                </a>
              </li>
              <li>
                <a href="forms.html" data-original-title="">
                  Forms
                </a>
              </li>
              <li>
                <a href="graphs.html" data-original-title="">
                  Graphs
                </a>
              </li>
              <li>
                <a href="ui-elements.html" data-original-title="">
                  UI Elements
                </a>
              </li>
              <li>
                <a href="icons.html" data-original-title="">
                  Icons
                </a>
              </li>
              <li>
                <a href="tables.html" data-original-title="">
                  Tables
                </a>
              </li>
              <li>
                <a href="media.html" data-original-title="">
                  Media
                </a>
              </li>
              <li>
                <a href="calendar.html" data-original-title="">
                  Calendar
                </a>
              </li>
              <li>
                <a href="typography.html" data-original-title="">
                  Typography
                </a>
              </li>
              <li>
                <a href="edit-profile.html" data-original-title="">
                  Edit Profile
                </a>
              </li>
              <li>
                <a href="invoice.html" data-original-title="">
                  Invoice
                </a>
              </li>
              <li>
                <a href="login.html" data-original-title="">
                  Login
                </a>
              </li>
              <li>
                <a href="404.html" data-original-title="">
                  404 Page
                </a>
              </li>
              <li>
                <a href="500.html" data-original-title="">
                  500 Page
                </a>
              </li>
              <li>
                <a href="help.html" data-original-title="">
                  Help
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="dashboard-wrapper">
          <div class="left-sidebar">
            
            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Alerts
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <a class="btn btn-warning2 bottom-margin" href="#" id="alert">
                      Alert
                    </a>
                    <a class="btn btn-success bottom-margin" href="#" id="confirm">
                      Confirm
                    </a>
                    <a class="btn btn-info bottom-margin" href="#" id="prompt">
                      Prompt
                    </a>
                    <a class="btn btn-inverse bottom-margin" href="#" id="notification">
                      Standard
                    </a>
                    <a class="btn btn-success bottom-margin" href="#" id="success">
                      Success
                    </a>
                    <a class="btn btn-danger bottom-margin" href="#" id="error">
                      Error
                    </a>
                    <a class="btn btn-warning bottom-margin" href="#" id="delay">
                      Hide in 8 Sec
                    </a>
                    <a class="btn btn-info bottom-margin" href="#" id="forever">
                      Persistent
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row-fluid">
              
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Navbars
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    
                    <div class="navbar">
                      <div class="navbar-inner">
                        <div class="container">
                          <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                          </a>
                          <a href="#" class="brand">
                            Title
                          </a>
                          <div class="nav-collapse collapse navbar-responsive-collapse">
                            <ul class="nav">
                              <li class="active">
                                <a href="#">
                                  Home
                                </a>
                              </li>
                              <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                  Dropdown 
                                  <b class="caret">
                                  </b>
                                </a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a href="#">
                                      Action
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      Another action
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      Something else here
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      Separated link
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      One more separated link
                                    </a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                            <form class="navbar-search pull-left">
                              <input type="text" placeholder="Search" class="search-query input-large">
                            </form>
                          </div>
                          <!-- /.nav-collapse -->
                        </div>
                      </div>
                      <!-- /navbar-inner -->
                    </div>
                    
                    <div class="navbar navbar-static" id="navbar-example">
                      <div class="navbar-inner">
                        <div style="width: auto;" class="container">
                          <a href="#" class="brand">
                            Name
                          </a>
                          <ul role="navigation" class="nav">
                            <li class="dropdown">
                              <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">
                                Dropdown 
                                <b class="caret">
                                </b>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="http://google.com" tabindex="-1">
                                    Action
                                  </a>
                                </li>
                                <li>
                                  <a href="#anotherAction" tabindex="-1">
                                    Another action
                                  </a>
                                </li>
                                <li>
                                  <a href="#" tabindex="-1">
                                    Something else here
                                  </a>
                                </li>
                                <li>
                                  <a href="#" tabindex="-1">
                                    Separated link
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="dropdown">
                              <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">
                                Dropdown 2 
                                <b class="caret">
                                </b>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="#" tabindex="-1">
                                    Action
                                  </a>
                                </li>
                                <li>
                                  <a href="#" tabindex="-1">
                                    Another action
                                  </a>
                                </li>
                                <li>
                                  <a href="#" tabindex="-1">
                                    Something else here
                                  </a>
                                </li>
                                <li>
                                  <a href="#" tabindex="-1">
                                    Separated link
                                  </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    
                    <div class="navbar no-margin">
                      <div class="navbar-inner">
                        <form class="navbar-form">
                          <div class="input-append">
                            <input class="span2" id="appendedInputButtons" type="text">
                            <button class="btn" type="button">
                              Search
                            </button>
                            <button class="btn btn-info" type="submit">
                              Submit
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
              
            </div>
            
            
            <div class="row-fluid">
              <div class="span6">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Awesome Tab<a id="tabs">s</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <ul class="nav nav-tabs no-margin myTabBeauty">
                      <li class="">
                        <a data-toggle="tab" href="#home">
                          Home
                        </a>
                      </li>
                      <li class="active">
                        <a data-toggle="tab" href="#profile">
                          Profile
                        </a>
                      </li>
                      <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          Dropdown 
                          <b class="caret">
                          </b>
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a data-toggle="tab" href="#dropdown1">
                              @fat
                            </a>
                          </li>
                          <li>
                            <a data-toggle="tab" href="#dropdown2">
                              @mdo
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div id="home" class="tab-pane fade">
                        <p>
                          Nesciunt tofu stumptown aliqua, retro synth master cleanse. Reprehenderit butcher retro keffiyeh dreamcatcher synth terry richardsoAustin.
                        </p>
                        <p>
                          Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.prehenderit butcher retro keffiyeh dreamcatcher synth. Cosby Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure squid.Raw denim you probably haven't heard of them jean shorts Austin.
                        </p>
                      </div>
                      <div id="profile" class="tab-pane fade active in">
                        <p>
                          Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Reprehenderit butcher retro keffiyeh dreamcatcher synth terry richardsoAustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                        </p>
                        <p>
                          Mustache cliche tempor, williamsburg carles vegan helvetica.prehenderit butcher retro keffiyeh dreamcatcher synth. Cosby Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                        </p>
                      </div>
                      <div id="dropdown1" class="tab-pane fade">
                        <p>
                          Cosby Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                        </p>
                        <p>
                          Reprehenderit butcher retro keffiyeh dreamcatcher synth terry richardsoAustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.prehenderit butcher retro keffiyeh dreamcatcher synth.
                        </p>
                      </div>
                      <div id="dropdown2" class="tab-pane fade">
                        <p>
                          Reprehenderit butcher retro keffiyeh dreamcatcher synth terry richardsoAustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                        </p>
                        <p>
                          Mustache cliche tempor, williamsburg carles vegan helvetica.prehenderit butcher retro keffiyeh dreamcatcher synth. Cosby Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt stumptown aliqua, master cleanse.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="span6">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Accordio<a id="accordion">n</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <div id="accordion1" class="accordion no-margin">
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a href="#collapseOne" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle">
                            <i class="icon-user">
                            </i>
                            About me :)
                          </a>
                        </div>
                        <div class="accordion-body in collapse" id="collapseOne" style="height: auto;">
                          <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                          </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a href="#collapseTwo" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle">
                            <i class="icon-th">
                            </i>
                            Portfolio
                          </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
                          <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                          </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a href="#collapseThree" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle">
                            <i class="icon-envelope">
                            </i>
                            Contact me
                          </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
                          <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            
            <div class="row-fluid">
              <div class="span6">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Tooltip<a id="tooltips">s</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <p>
                      Tight pants next level keffiyeh 
                      <a href="#" data-original-title="Default tooltip" style="color: #0C9ABB">
                        you probably
                      </a>
                      haven't heard of fixie sustainable quinoa 8-bit american apparel 
                      <a title="Another tooltip" href="#" style="color: #0C9ABB">
                        have a terry
                      </a>
                      richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. 
                      <a title="Another one here too" href="#" style="color: #0C9ABB">
                        whatever keytar
                      </a>
                      , scenester farm-to-table banksy Austin 
                      <a title="The last tip!" href="#" style="color: #0C9ABB">
                        twitter handle
                      </a>
                      freegan cred raw denim single-origin coffee viral.
                    </p>
                    <a data-original-title="tooltips in top" data-placement="top" class="btn btn-info">
                      Top
                    </a>
                    <a data-original-title="tooltips in right" data-placement="right" class="btn btn-success">
                      Right
                    </a>
                    <a data-original-title="tooltips in bottom" data-placement="bottom" class="btn btn-warning2">
                      Bottom
                    </a>
                    <a data-original-title="tooltips in left" data-placement="left" class="btn btn-warning">
                      Left
                    </a>
                  </div>
                </div>
              </div>
              
              <div class="span6">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Popove<a id="popover">r</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <p>
                      Tight pants next level keffiyeh 
                      <span data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" class="popover-pop" data-original-title="Popover on top" style="color: #0C9ABB; cursor: pointer">
                        you probably
                      </span>
                      haven't heard of fixie sustainable quinoa 8-bit american apparel 
                      <span data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" class="popover-pop" data-original-title="Popover on right" style="color: #0C9ABB; cursor: pointer">
                        have a terry
                      </span>
                      richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. 
                      <span data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" class="popover-pop" data-original-title="Popover on bottom" style="color: #0C9ABB; cursor: pointer">
                        whatever keytar
                      </span>
                      , scenester farm-to-table banksy Austin 
                      <span data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" class="popover-pop" data-original-title="Popover on left" style="color: #0C9ABB; cursor: pointer">
                        twitter handle
                      </span>
                      freegan cred raw denim single-origin coffee viral.
                    </p>
                    <button data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" class="btn btn-info popover-pop" data-original-title="Popover on top">
                      Top
                    </button>
                    <button data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" class="btn btn-success popover-pop" data-original-title="Popover on right">
                      Right
                    </button>
                    <button data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" class="btn btn-warning2 popover-pop" data-original-title="Popover on bottom">
                      Bottom
                    </button>
                    <button data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" class="btn btn-warning popover-pop" data-original-title="Popover on left">
                      Left
                    </button>
                  </div>
                </div>
              </div>
              
            </div>
            
            <div class="row-fluid">
              
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      12 columns grid with a responsiv<a id="12columngrid">e</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <div class="container-fluid">
                      <div class="row-fluid" style="margin-bottom: 20px;">
                        <div class="span12">
                          <button type="button" class="btn btn-block">
                            Span 12
                          </button>
                        </div>
                      </div>
                      <div class="row-fluid" style="margin-bottom: 20px;">
                        <div class="span6">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 6
                          </button>
                        </div>
                        <div class="span6">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 6
                          </button>
                        </div>
                      </div>
                      <div class="row-fluid" style="margin-bottom: 20px;">
                        <div class="span4">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 4
                          </button>
                        </div>
                        <div class="span4">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 4
                          </button>
                        </div>
                        <div class="span4">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 4
                          </button>
                        </div>
                      </div>
                      <div class="row-fluid" style="margin-bottom: 20px;">
                        <div class="span3">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 3
                          </button>
                        </div>
                        <div class="span3">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 3
                          </button>
                        </div>
                        <div class="span3">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 3
                          </button>
                        </div>
                        <div class="span3">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 3
                          </button>
                        </div>
                      </div>
                      <div class="row-fluid" style="margin-bottom: 20px;">
                        <div class="span2">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 2
                          </button>
                        </div>
                        <div class="span2">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 2
                          </button>
                        </div>
                        <div class="span2">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 2
                          </button>
                        </div>
                        <div class="span2">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 2
                          </button>
                        </div>
                        <div class="span2">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 2
                          </button>
                        </div>
                        <div class="span2">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 2
                          </button>
                        </div>
                      </div>
                      <div class="row-fluid" style="margin-bottom: 20px;">
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                        <div class="span1">
                          <button type="button" class="btn btn-block input-bottom-margin">
                            Span 1
                          </button>
                        </div>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
              
            </div>
            
            
            <div class="row-fluid">
              
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      Pagination
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <div class="pagination no-margin">
                      <ul>
                        <li class="disabled">
                          <a href="#">
                            Prev
                          </a>
                        </li>
                        <li class="active">
                          <a href="#">
                            1
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            2
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            3
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            4
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            5
                          </a>
                        </li>
                        <li class="hidden-phone">
                          <a href="#">
                            6
                          </a>
                        </li>
                        <li class="hidden-phone">
                          <a href="#">
                            7
                          </a>
                        </li>
                        <li class="hidden-phone">
                          <a href="#">
                            8
                          </a>
                        </li>
                        <li class="hidden-phone">
                          <a href="#">
                            9
                          </a>
                        </li>
                        <li class="hidden-phone">
                          <a href="#">
                            10
                          </a>
                        </li>
                        <li class="hidden-phone">
                          <a href="#">
                            11
                          </a>
                        </li>
                        <li class="hidden-phone">
                          <a href="#">
                            12
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Next
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            
            
            
            <div class="row-fluid">
              
              <div class="span4">
                <div class="widget no-margin">
                  <div class="widget-header">
                    <div class="title">
                      Progress bars - Basi<a id="progressbar">c</a>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <div class="progress progress-info">
                      <div class="bar" style="width: 20%">
                      </div>
                    </div>
                    <div class="progress progress-success">
                      <div class="bar" style="width: 40%">
                      </div>
                    </div>
                    <div class="progress progress-warning">
                      <div class="bar" style="width: 60%">
                      </div>
                    </div>
                    <div class="progress progress-danger">
                      <div class="bar" style="width: 80%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="span4">
                <div class="widget no-margin">
                  <div class="widget-header">
                    <div class="title">
                      Progress bars - Striped
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <div class="progress progress-info progress-striped">
                      <div class="bar" style="width: 20%">
                      </div>
                    </div>
                    <div class="progress progress-success progress-striped">
                      <div class="bar" style="width: 40%">
                      </div>
                    </div>
                    <div class="progress progress-warning progress-striped">
                      <div class="bar" style="width: 60%">
                      </div>
                    </div>
                    <div class="progress progress-danger progress-striped">
                      <div class="bar" style="width: 80%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="span4">
                <div class="widget no-margin">
                  <div class="widget-header">
                    <div class="title">
                      Progress bars - Animated
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <div class="progress progress-info progress-striped active">
                      <div class="bar" style="width: 20%">
                      </div>
                    </div>
                    <div class="progress progress-success progress-striped active">
                      <div class="bar" style="width: 40%">
                      </div>
                    </div>
                    <div class="progress progress-warning progress-striped active">
                      <div class="bar" style="width: 60%">
                      </div>
                    </div>
                    <div class="progress progress-danger progress-striped active">
                      <div class="bar" style="width: 80%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            
            
          </div>
          
          
          
          <div class="right-sidebar">
            
            <div class="wrapper">
              <a href="#myModal" role="button" class="btn btn-large btn-warning2 btn-block" data-toggle="modal">
                Launch demo modal
              </a>
              
              <!-- Modal -->
              <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                  </button>
                  <h3 id="myModalLabel">
                    Modal header
                  </h3>
                </div>
                <div class="modal-body">
                  <p>
                    One fine body�?
                  </p>
                </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">
                    Close
                  </button>
                  <button class="btn btn-primary">
                    Save changes
                  </button>
                </div>
              </div>
            </div>
            
            <div class="wrapper">
              <button class="btn btn-large btn-info btn-block" type="button">
                Large button
              </button>
              <button class="btn btn-warning btn-block" type="button">
                Default button
              </button>
              <button class="btn btn-small btn-success btn-block" type="button">
                Small button
              </button>
              <button class="btn btn-small btn-warning2 btn-block" type="button">
                Small button
              </button>
              <button class="btn btn-mini btn-primary btn-block" type="button">
                Mini button
              </button>
              <button class="btn btn-small btn-inverse btn-block" type="button">
                Small button
              </button>
              <button class="btn btn-small btn-block" type="button">
                Small button
              </button>
              <a href="#" class="btn btn-mini btn-warning2 disabled btn-block">
                Primary link disabled
              </a>
              <a href="#" class="btn btn-mini disabled btn-block">
                Link disabled
              </a>
            </div>
            
            
            
            <div class="wrapper">
              <button class="btn btn-block btn-info" type="button">
                Block level button
              </button>
            </div>
            
            <div class="wrapper">
              <div class="btn-toolbar no-margin">
                <div class="btn-group">
                  <a href="#" class="btn btn-warning2 disabled">
                    Thumbs Up
                  </a>
                  <a href="#" class="btn disabled">
                    <i class="icon-hand-right">
                    </i>
                  </a>
                </div>
                <div class="btn-group">
                  <a href="#" class="btn btn-warning">
                    Off
                  </a>
                  <a href="#" class="btn btn-warning2">
                    <i class="icon-white icon-off">
                    </i>
                  </a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <!--/.fluid-container-->
    </div>
    <footer>
      <p>
        &copy; baswaAdmin 2014
      </p>
    </footer>
    <script src="js/jquery.min.js">
    </script>

    <script src="js/bootstrap.js">
    </script> 
    
    <script type="text/javascript" src="js/alertify.min.js">
    </script>
    
    
    <script type="text/javascript">
      //Tooltip
      $('a').tooltip('hide');

      //Popover
      $('.popover-pop').popover('hide');


      //Collapse
      $('#myCollapsible').collapse({
        toggle: false
      })

      //Tabs
      $('.myTabBeauty a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      })


      //Dropdown
      $('.dropdown-toggle').dropdown();


      //Alertify JS
      $ = function (id) {
        return document.getElementById(id);
      },
      reset = function () {
        $("toggleCSS").href = "css/alertify.core.css";
        alertify.set({
          labels: {
            ok: "OK",
            cancel: "Cancel"
          },
          delay: 5000,
          buttonReverse: false,
          buttonFocus: "ok"
        });
      };

      // Standard Dialogs
      $("alert").onclick = function () {
        reset();
        alertify.alert("This is an alert Dialog");
        return false;
      };

      $("confirm").onclick = function () {
        reset();
        alertify.confirm("This is a confirm dialog", function (e) {
          if (e) {
            alertify.success("You've clicked OK");
          } else {
            alertify.error("You've clicked Cancel");
          }
        });
        return false;
      };

      $("prompt").onclick = function () {
        reset();
        alertify.prompt("This is a prompt dialog", function (e, str) {
          if (e) {
            alertify.success("You've clicked OK and typed: " + str);
          } else {
            alertify.error("You've clicked Cancel");
          }
        }, "Default Value");
        return false;
      };

      // Standard Dialogs
      $("notification").onclick = function () {
        reset();
        alertify.log("Standard log message");
        return false;
      };

      $("success").onclick = function () {
        reset();
        alertify.success("Success log message");
        return false;
      };

      $("error").onclick = function () {
        reset();
        alertify.error("Error log message");
        return false;
      };

      // Custom Properties
      $("delay").onclick = function () {
        reset();
        alertify.set({
          delay: 10000
        });
        alertify.log("Hiding in 10 seconds");
        return false;
      };

      $("forever").onclick = function () {
        reset();
        alertify.log("Will stay until clicked", "", 0);
        return false;
      };

      //Alertify JS end
    </script>


    <script src="js/jquery.min.js">
    </script>
    <script src="js/jquery.scrollUp.js">
    </script>
     <script type="text/javascript">
      //ScrollUp
      $(document).ready(function () {
        $.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 300, // Speed back to top (ms)
          animation: 'fade', // Fade, slide, none
          animationInSpeed: 400, // Animation in speed (ms)
          animationOutSpeed: 400, // Animation out speed (ms)
          scrollText: 'Scroll to top', // Text for element
          activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
      });
    </script>
  <div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>