<div id="header-wrapper" class="header-wrapper gradient ">
    <nav id="nav-container" class="navbar container" role="navigation">
        <div class="header-subwrapper">
            <div class="navbar-header row">

                <div id="header-left">
    <a href="http://www.uncg.edu/" title="The University of North Carolina at Greensboro" class="logo-uncg">
        <span class="sr-only">The University of North Carolina at Greensboro</span>
    </a>
</div>


                <div id="header-right" class="col-xs-12 col-sm-7">
    <div id="header-extras" class="row">
        <div id="searchContainer" class="hidden-xs col-sm-6 col-md-5 col-sm-pull-1 col-md-pull-0">
            <form id="uncgSearch" class="navbar-form navbar-right search-form" action="//search.uncg.edu/s/search.html" method="get">
                <div class="input-group">

                    <input id="q" name="query" type="text" placeholder="Search UNCG" class="form-control input-sm" aria-label="search string"  />
                    <span class="input-group-btn">
                        <button id="searchSub" type="submit" title="Submit Search" class="btn btn-sm btn-default">Go</button>
                    </span>
                    <input type="hidden" name="collection" value="uncg-search">
                </div>
                <div id="searchInContainer" role="radiogroup" aria-labelledby="searchTarget">
                    <span id="searchTarget" class="sr-only">Search Target</span>
                    <label><input id="eduSearch" name="scope" type="radio" value="" checked="checked" aria-checked="true"  /> UNCG.edu</label>
                    <label><input class="hidden" id="siteSearch" name="scope" type="radio" value="" aria-checked="false"  /> this site</label>
                </div>
                <div class="col-xs-2 search-control visible-xs">
                    <button type="submit" class="btn search-submit main-nav">
                        <span class="sr-only">Submit Search</span>
                        <span class="glyphicon glyphicon-play"></span>
                    </button>
                </div>

                <?php include_once('unit-search.php'); ?>
            </form>
        </div>
        <div id="tools-nav" class="hidden-xs col-sm-5 col-md-4">
            <ul id="navlist-tools">
                <li>
                    <a href="http://ispartan.uncg.edu/" title="iSpartan Email" class="icon-iSpartan">
                        <span class="sr-only">iSpartan Email</span>
                    </a>
                </li>
                <li>
                    <a href="https://ssb.uncg.edu/" title="UNCGenie System" class="icon-uncgenie">
                        <span class="sr-only">UNCGenie System</span>
                    </a>
                </li>
                <li>
                    <a href="https://directory.uncg.edu" title="UNCG Directory" class="icon-directory">
                        <span class="sr-only">UNCG Directory</span>
                    </a>
                </li>
                <li>
                    <a href="https://uncg.instructure.com/" title="Canvas at UNCG" class="icon-lms">
                        <span class="sr-only">Canvas &commat; UNCG</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-xs-12" id="mobileToggle">
            <button class="dropdown-toggle main-nav btn" type="button" data-toggle="dropdown" id="navMenu1">
                <span class="sr-only">Toggle navigation</span>
                <span class="glyphicon glyphicon-th-list"></span>
            </button>
            <button class="navbar-toggle main-nav btn hidden-sm hidden-md hidden-lg" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle search</span>
                <span class="glyphicon glyphicon-search"></span>
            </button>
            <ul class="dropdown-menu unit-nav" role="menu" aria-labelledby="navMenu1">
                <li class="visible-xs">
                    <div class="col-xs-3">
                        <div class="mobileIcons">
                            <a href="http://ispartan.uncg.edu/" title="iSpartan Email" class="icon-iSpartan">
                                <span class="sr-only">iSpartan Email</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="mobileIcons">
                            <a href="https://ssb.uncg.edu/" title="UNCGenie System" class="icon-uncgenie">
                                <span class="sr-only">UNCGenie System</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="mobileIcons">
                            <a href="https://directory.uncg.edu" title="UNCG Directory" class="icon-directory">
                                <span class="sr-only">UNCG Directory</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="mobileIcons">
                            <a href="https://uncg.instructure.com/" title="Canvas at UNCG" class="icon-lms">
                                <span class="sr-only">Canvas &commat; UNCG</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="audience"><a href="http://www.uncg.edu/future-students/">Future Students</a>
                </li>
                <li class="audience"><a href="http://www.uncg.edu/current-students/">Current Students</a>
                </li>
                <li class="audience"><a href="http://www.uncg.edu/faculty-staff/">Faculty &amp; Staff</a>
                </li>
                <li class="audience"><a href="http://alumni.uncg.edu/">Alumni</a>
                </li>
                <li class="audience"><a href="http://communityengagement.uncg.edu/">Community &amp; Friends</a>
                </li>
                <li class="audience mobile-cl"><a href="http://www.uncg.edu/campus-links/" id="cllink">CAMPUS LINKS</a>
                </li>
                <li id="site-nav-m" >
                    <?php include_once('unit-mobile-menu.php'); ?>
                </li>
            </ul>
        </div>
    </div>
    <div id="header-audience-nav" class="visible-md visible-lg row">
        <ul id="navlist-audience">
            <li><a href="http://www.uncg.edu/future-students/">Future Students</a></li>
            <li><a href="http://www.uncg.edu/current-students/">Current Students</a></li>
            <li><a href="http://www.uncg.edu/faculty-staff/">Faculty &amp; Staff</a></li>
            <li><a href="http://alumni.uncg.edu/">Alumni</a></li>
            <li class="noBorder"><a href="http://communityengagement.uncg.edu/">Community &amp; Friends</a></li>
        </ul>
    </div>
</div>


                <div class="navbar-collapse collapse col-xs-12">
    <form class="navbar-form navbar-right search-form visible-xs" role="search" action="//search.uncg.edu/s/search.html" method="get">
        <div class="form-group search-group">
            <div class="col-xs-10 search-control">
                <label class="sr-only" for="bsq">Search UNCG</label>
                <input type="hidden" name="collection" value="uncg-search">
                <input type="text" id="bsq" class="form-control search-box" placeholder="Search UNCG" name="query" autofocus="autofocus" />
            </div>
            <div class="col-xs-2 search-control">
                <button type="submit" class="btn search-submit main-nav">
                    <span class="sr-only">Search Submit</span>
                    <span class="glyphicon glyphicon-play"></span>
                </button>
            </div>
        </div>
    </form>
</div>


            </div>

            <div class="row" id="header-bottom">
    <div id="header-yellow-nav" class="hidden-xs hidden-sm col-md-12">
        <ul id="navlist-yellow">
            <li id="cl" class="noBorder current"> <a id="campusLinks" href="http://www.uncg.edu/campus-links/">CAMPUS LINKS</a>
                <ul class="subitems">
                    <li><a href="http://www.uncg.edu/inside-uncg/" title="Learn About UNCG">Inside <abbr title="The University of North Carolina at Greensboro">UNCG</abbr></a>
                    </li>
                    <li><a href="http://www.uncg.edu/academics/">Academics</a>
                    </li>
                    <li><a href="http://www.uncg.edu/administration/">Administration</a>
                    </li>
                    <li><a href="http://www.uncg.edu/admissions/">Admissions</a>
                    </li>
                    <li><a href="http://www.uncg.edu/arts-entertainment/">Arts &amp; Entertainment</a>
                    </li>
                    <li><a href="http://www.uncg.edu/employment/">Employment</a>
                    </li>
                    <li><a href="http://diversity-inclusion.uncg.edu/">Equity, Diversity  &amp; Inclusion</a>
                    </li>
                    <li><a href="http://giving.uncg.edu">Giving to UNCG</a>
                    </li>
                    <li><a href="http://www.uncg.edu/ipg/" title="International Programs">International Programs</a>
                    </li>
                    <li><a href="http://library.uncg.edu/" title="Jackson Library">Libraries</a>
                    </li>
                    <li><a href="http://online.uncg.edu/" title="Online Courses &amp; Degrees">Online Courses &amp; Degrees</a>
                    </li>
                    <li><a href="http://research.uncg.edu/">Research</a>
                    </li>
                    <li><a href="http://sa.uncg.edu/">Student Affairs</a>
                    </li>
                    <li><a href="http://its.uncg.edu/">Technology</a>
                    </li>
                    <li><a href="http://newsandfeatures.uncg.edu/">University News</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>


        </div>
    </nav>
</div>