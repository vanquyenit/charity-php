<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Chien dich tu thien" />
    <link rel="shortcut icon" href="./images/001-world.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet'  href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,italic,600,600italic,700,700italic,800,800italic&#038;subset=greek-ext,greek,cyrillic-ext,latin-ext,latin,vietnamese,cyrillic' type='text/css' media='all' />
    <link rel='stylesheet'  href='//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&#038;subset=greek-ext,greek,cyrillic-ext,latin-ext,latin,vietnamese,cyrillic' type='text/css' media='all' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" media="all" href="./css/style.css" rel="stylesheet" />
    <link type="text/css" media="screen" href="./css/autoptimize.css" rel="stylesheet" />
    <link type="text/css" media="screen" href="./css/index.css" rel="stylesheet" />
    <title>Event - Chien dich tu thien</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type='text/javascript' src='./js/jquery-migrate.min.js'></script>
</head>
<style type="text/css" media="screen">


    .comments-container h1 {
        font-size: 36px;
        color: #283035;
        font-weight: 400;
    }

    .comments-container h1 a {
        font-size: 18px;
        font-weight: 700;
    }

    .comments-list {
        margin: 0;
        position: relative;
    }
    .comment-main-level .comment-box {
        padding-left: 0;
    }
/**
* Lineas / Detalles
-----------------------*/
/* .comments-list:before {
content: '';
width: 2px;
height: 100%;
background: #c7cacb;
position: absolute;
left: 32px;
top: 0;
}

.comments-list:after {
content: '';
position: absolute;
background: #c7cacb;
bottom: 0;
left: 27px;
width: 7px;
height: 7px;
border: 3px solid #dee1e3;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
}*/

/*.reply-list:before, .reply-list:after {display: none;}
.reply-list li:before {
content: '';
width: 70px;
height: 2px;
background: #c7cacb;
position: absolute;
top: 25px;
left: -55px;
}
*/

.comments-list li {
    margin-bottom: 15px;
    display: block;
    position: relative;
}

.comments-list li:after {
    content: '';
    display: block;
    clear: both;
    height: 0;
    width: 0;
}

.reply-list {
    padding-left: 88px;
    clear: both;
    margin-top: 15px;
}
/**
* Avatar
---------------------------*/


.comments-list .comment-avatar img {
    width: 100%;
    height: 100%;
    border: 3px solid #FFF;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    overflow: hidden;
}

.reply-list .comment-box {
    padding-left: 0;
}

.comment-main-level:after {
    content: '';
    width: 0;
    height: 0;
    display: block;
    clear: both;
}


.comments-list .comment-box:before, .comments-list .comment-box:after {
    content: '';
    height: 0;
    width: 0;
    position: absolute;
    display: block;
    border-width: 10px 12px 10px 0;
    border-style: solid;
    border-color: transparent rgba(0,0,0,.075);
    top: 8px;
    left: -11px;
}

.comments-list .comment-box:before {
    border-width: 11px 13px 11px 0;
    border-color: transparent rgba(0,0,0,0.05);
    left: -12px;
}


.comment-box .comment-head {
    background: rgba(0,0,0,.075);
    padding: 10px 12px;
    border-bottom: 1px solid #E5E5E5;
    overflow: hidden;
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
    float: right;
    margin-left: 14px;
    position: relative;
    top: 2px;
    color: #A6A6A6;
    cursor: pointer;
    -webkit-transition: color 0.3s ease;
    -o-transition: color 0.3s ease;
    transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
    color: #f8b864;
}

.comment-box .comment-name {
    color: #283035;
    font-size: 14px;
    font-weight: 700;
    float: left;
    margin-right: 10px;
}

.comment-box .comment-name a {
    color: #283035;
}
.comment-box textarea {
    height:70px;
    margin:0;
}
.comment-box .comment-head span {
    float: left;
    color: #999;
    font-size: 13px;
    position: relative;
    top: 1px;
}
.comment_area {height:70px;}
.comment-box .comment-content {
    background: #fcfcfc;
    padding: 12px;
    font-size: 15px;
    color: #595959;
    -webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #f8b864;}
.comment-box .comment-name.by-author:after {
    content: 'autor';
    background: #f8b864;
    color: #FFF;
    font-size: 12px;
    padding: 3px 5px;
    font-weight: 700;
    margin-left: 10px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.reply-list li {
    margin-bottom: 0;
    border-left: 1px solid #ccc;
    padding-bottom: 15px;
}
.reply-list li:last-child {
    padding-bottom:0;
}
.nav-tabs { border-bottom: 2px solid #DDD; }
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
.nav-tabs > li > a { border: none; color: #666; }
.nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #f8b864 !important; background: transparent; }
.nav-tabs > li > a::after { content: ""; background: #f8b864; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}

.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
</style>
<body class="tp_event-template-default single single-tp_event postid-4934 siteorigin-panels group-blog loading thim_header_custom_style thim_header_style2 thim_fixedmenu ">
    <div class="thim-loading">
        <img src="./images/loading.gif"/>
    </div>
    <?php include "mobile.php" ?>
    <div id="wrapper-container" class="wrapper-container">
        <div class="content-pusher ">
            <?php include 'header.php';?>
            <div id="main-content">
                <section class="content-area">
                    <div class="top_site_main thim-parallax-image" style="background-image: url(http://charitywp.thimpress.com/demo-3/wp-content/themes/charitywp/images/page_top_image.jpg)" data-stellar-background-ratio="0.5"> <span class="overlay-top-header"></span>
                        <div class="page-title-wrapper">
                            <div class="banner-wrapper container article_heading">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h1 class="heading__primary">Detail Events</h1>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul id="thim_breadcrumbs" class="thim-breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                                            <li class="item-home" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" class="bread-link bread-home" href="http://charitywp.thimpress.com/demo-3" title="Home"><span itemprop="name">Home</span></a>
                                            </li>
                                            <li class="separator separator-home"></li>
                                            <li class="item-current item-cat item-custom-post-type-tp_event" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" class="bread-cat bread-custom-post-type-tp_event" href="http://charitywp.thimpress.com/demo-3/events/" title="Events"><span itemprop="name">All Events</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="not-heading-sidebar"></div>
                    <div class="container site-content">
                        <div class="row">
                            <main id="main" class="site-main col-sm-9">
                                <article id="tp_event-4934" class="tp_single_event post-4934 tp_event type-tp_event status-tp-event-upcoming has-post-thumbnail hentry">
                                    <div class="entry-header">
                                        <h1 class="blog_title"> Bright Future 5K</h1>
                                    </div>
                                    <div class="summary entry-summary">
                                        <div class='post-formats-wrapper'>
                                            <a class="post-image" href="http://charitywp.thimpress.com/demo-3/events/bright-future-5k/"><img width="870" height="500" src="http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/03/wordpress-nonprofit-theme.jpg" class="attachment-full size-full wp-post-image" alt="wordpress nonprofit theme" srcset="http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/03/wordpress-nonprofit-theme.jpg 870w, http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/03/wordpress-nonprofit-theme-300x172.jpg 300w, http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/03/wordpress-nonprofit-theme-768x441.jpg 768w" sizes="(max-width: 870px) 100vw, 870px" />
                                            </a>
                                        </div>
                                        <div class="entry-countdown">
                                            <div class="tp_event_counter" data-time="May 15, 2017 14:20:00 +0000"></div>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <div id="pl-4934">
                                            <div class="panel-grid" id="pg-4934-0">
                                                <div class="panel-grid-cell col-xs-12 col-sm-7">
                                                    <div class="so-panel widget widget_sow-editor panel-first-child panel-last-child" id="panel-4934-0-0-0" data-index="0">
                                                        <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                                            <div class="siteorigin-widget-tinymce textwidget">
                                                                <h5>Event Description</h5>
                                                                <p>Bright Future, Inc is a non-profit organization founded in 2000 to provide childcare and other vital services to homeless families in DC. Since then, more then 1,500 homeless families have been served by the Bright Future program.</p>
                                                                <h5>Event content</h5>
                                                                <ul>
                                                                    <li>The auction will be started in the morning of Thursday, April 13, 2017 at Center Hotel.</li>
                                                                    <li>There are over 100 featured pictures that will be auctioned in this charity event.</li>
                                                                    <li>Expected the starting price of photograph is 20,000$. </li>
                                                                    <li>The winner is the bidder offering the highest price.</li>
                                                                    <li>Other bidders also can contribute our fund by our charity box.</li>
                                                                    <li>All money earned in this charity event will donate to people that our volunteer photographers went to.</li>
                                                                    <li>Any philanthropist, nonprofit organization, NGO want to donate or ask any question, let contact with our staff.</li>
                                                                </ul>
                                                                <h5>Who come with us?</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-grid-cell col-xs-12 col-sm-5">
                                                    <div class="so-panel widget widget_event-info panel-first-child panel-last-child" id="panel-4934-0-1-0" data-index="1">
                                                        <div style="magrin-top: 15px;" class="panel-widget-style">
                                                            <div class="thim-widget-event-info thim-widget-event-info-base">
                                                                <div class="thim-event-info">
                                                                    <div class="inner-box">
                                                                        <div class="box start">
                                                                            <div class="icon"><i class="fa fa-clock-o"></i>
                                                                            </div>
                                                                            <div class="info-detail">
                                                                                <div class="title"><strong>Start Time</strong>
                                                                                </div>
                                                                                <div class="info-content">
                                                                                    <div class="time">12:00 AM</div>
                                                                                    <div class="date">Monday, June 05, 2017</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box finish">
                                                                            <div class="icon"><i class="fa fa-flag"></i>
                                                                            </div>
                                                                            <div class="info-detail">
                                                                                <div class="title"><strong>Finish Time</strong>
                                                                                </div>
                                                                                <div class="info-content">
                                                                                    <div class="time">11:59 PM</div>
                                                                                    <div class="date">Monday, June 05, 2017</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box address">
                                                                            <div class="icon"><i class="fa fa-map-marker"></i>
                                                                            </div>
                                                                            <div class="info-detail">
                                                                                <div class="title"><strong>Address</strong>
                                                                                </div>
                                                                                <div class="info-content"> Houston, Texas</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-grid" id="pg-4934-1">
                                                <div class="panel-grid-cell" id="pgc-4934-1-0">
                                                    <div class="so-panel widget widget_team panel-first-child panel-last-child" id="panel-4934-1-0-0" data-index="2">
                                                        <div class="thim-widget-team thim-widget-team-base">
                                                            <div class="thim-our-team template-carousel" id="id_58ef60515ddf6">
                                                                <div class="members">
                                                                    <div class="member">
                                                                        <div class="inner">
                                                                            <div class="avatar-wrapper">
                                                                                <div class="avatar-inner"><img src="http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/02/team-1-110x110.jpg" alt="Jack David" title="Jack David" />
                                                                                </div>
                                                                                <div class="social">
                                                                                    <ul>
                                                                                        <li><a href="http://charitywp.thimpress.com/demo-3/our_team/jack-david/"><i class="fa fa-link"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info">
                                                                                <div class="name"><a href="http://charitywp.thimpress.com/demo-3/our_team/jack-david/"> Jack David </a>
                                                                                </div>
                                                                                <div class="regency">Support Staff</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="member">
                                                                        <div class="inner">
                                                                            <div class="avatar-wrapper">
                                                                                <div class="avatar-inner"><img src="http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/02/member122-570x570-110x110.jpg" alt="Kevin Harris" title="Kevin Harris" />
                                                                                </div>
                                                                                <div class="social">
                                                                                    <ul>
                                                                                        <li><a href="http://charitywp.thimpress.com/demo-3/our_team/kevin-harris/"><i class="fa fa-link"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info">
                                                                                <div class="name"><a href="http://charitywp.thimpress.com/demo-3/our_team/kevin-harris/"> Kevin Harris </a>
                                                                                </div>
                                                                                <div class="regency">Support Staff</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="member">
                                                                        <div class="inner">
                                                                            <div class="avatar-wrapper">
                                                                                <div class="avatar-inner"><img src="http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/02/staff51-570x570-110x110.jpg" alt="Alex Roberts" title="Alex Roberts" />
                                                                                </div>
                                                                                <div class="social">
                                                                                    <ul>
                                                                                        <li><a href="http://charitywp.thimpress.com/demo-3/our_team/alex-roberts/"><i class="fa fa-link"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info">
                                                                                <div class="name"><a href="http://charitywp.thimpress.com/demo-3/our_team/alex-roberts/"> Alex Roberts </a>
                                                                                </div>
                                                                                <div class="regency">Support Staff</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="member">
                                                                        <div class="inner">
                                                                            <div class="avatar-wrapper">
                                                                                <div class="avatar-inner"><img src="http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/02/team-2-110x110.jpg" alt="Tony" title="Tony" />
                                                                                </div>
                                                                                <div class="social">
                                                                                    <ul>
                                                                                        <li><a href="http://charitywp.thimpress.com/demo-3/our_team/tony/"><i class="fa fa-link"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info">
                                                                                <div class="name"><a href="http://charitywp.thimpress.com/demo-3/our_team/tony/"> Tony </a>
                                                                                </div>
                                                                                <div class="regency">Support Staff</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="member">
                                                                        <div class="inner">
                                                                            <div class="avatar-wrapper">
                                                                                <div class="avatar-inner"><img src="http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/02/member82-570x570-110x110.jpg" alt="Kenny Martinez" title="Kenny Martinez" />
                                                                                </div>
                                                                                <div class="social">
                                                                                    <ul>
                                                                                        <li><a href="http://charitywp.thimpress.com/demo-3/our_team/kenny-martinez/"><i class="fa fa-link"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info">
                                                                                <div class="name"><a href="http://charitywp.thimpress.com/demo-3/our_team/kenny-martinez/"> Kenny Martinez </a>
                                                                                </div>
                                                                                <div class="regency">Support Staff</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="member">
                                                                        <div class="inner">
                                                                            <div class="avatar-wrapper">
                                                                                <div class="avatar-inner"><img src="http://charitywp.thimpress.com/demo-3/wp-content/uploads/sites/3/2016/02/testimonials-3-110x110.jpg" alt="Steven Walker" title="Steven Walker" />
                                                                                </div>
                                                                                <div class="social">
                                                                                    <ul>
                                                                                        <li><a href="http://charitywp.thimpress.com/demo-3/our_team/steven-sloan/"><i class="fa fa-link"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info">
                                                                                <div class="name"><a href="http://charitywp.thimpress.com/demo-3/our_team/steven-sloan/"> Steven Walker </a>
                                                                                </div>
                                                                                <div class="regency">CEO</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-location"></div>
                                    <div class="event_register_area">
                                        <div class="inner"> You must <a href="http://charitywp.thimpress.com/demo-3/events/bright-future-5k/?redirect_to=http://charitywp.thimpress.com/demo-3/events/bright-future-5k/">Login</a> to Our site to register this event!</div>
                                    </div>
                                </article>
                                <div class="share-wrapper">
                                    share button fb, google .v.v
                                </div>
                                <h3>comment</h3>
                                <div class="tab__comment">
                                    <div>
                                        <div class="card">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Account</a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Facebook comment</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <div id="comments" class="comments-area">
                                                        <div class="comment-respond-area">
                                                            <div id="respond" class="comment-respond">
                                                                <form action="http://charitywp.thimpress.com/demo-3/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
                                                                    <p class="comment-form-comment">
                                                                        <textarea id="comment" class="comment_area" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment *"></textarea>
                                                                    </p>
                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit" class="submit" value="Post Comment" />
                                                                    </p>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="comment-list-inner">
                                                            <h2 class="comments-title"> 1 Comments</h2>
                                                            <div class="comments-container">
                                                                <ul id="comments-list" class="comments-list">
                                                                    <li data-comment-id="1" class="area__comment">
                                                                        <div class="comment-main-level">
                                                                            <div class="comment-avatar col-xs-1">
                                                                                <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt="">
                                                                            </div>
                                                                            <div class="comment-box col-xs-11">
                                                                                <div class="comment-head">
                                                                                    <h6 class="comment-name"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                                                                                    <span>hace 20 minutos</span>
                                                                                    <i class="fa fa-reply"></i>
                                                                                    <i class="fa fa-heart"></i>
                                                                                </div>
                                                                                <div class="comment-content">
                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="comments-list reply-list">
                                                                            <li>
                                                                                <div class="comment-avatar col-xs-1 ">
                                                                                    <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt="">
                                                                                </div>
                                                                                <div class="comment-box col-xs-11">
                                                                                    <div class="comment-head">
                                                                                        <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                                                                                        <span>hace 10 minutos</span>
                                                                                        <i class="fa fa-reply"></i>
                                                                                        <i class="fa fa-heart"></i>
                                                                                    </div>
                                                                                    <div class="comment-content">
                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li data-comment-id="2" class="area__comment">
                                                                        <div class="comment-main-level">
                                                                            <div class="comment-avatar col-xs-1"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                                                                            <div class="comment-box col-xs-11">
                                                                                <div class="comment-head">
                                                                                    <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                                                                                    <span>hace 10 minutos</span>
                                                                                    <i class="fa fa-reply"></i>
                                                                                    <i class="fa fa-heart"></i>
                                                                                </div>
                                                                                <div class="comment-content">
                                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="comments-list reply-list">
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="profile">
                                                    facebook
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </main>
                            <?php include 'right_bar.php'; ?>
                            <div class="clear"></div>
                        </div>
                    </div>
                </section>
                <?php include 'footer.php'; ?>
                <a id='back-to-top' class="scrollup show" title="Go To Top"></a>
            </div>
            <div id="footer-bottom">
                <div class="container">
                    <aside id="siteorigin-panels-builder-10" class="widget widget_siteorigin-panels-builder">
                        <div id="pl-w5701effebe0cf">
                            <div class="panel-grid" id="pg-w5701effebe0cf-0">
                                <div class="siteorigin-panels-stretch panel-row-style thim-overlay-color" data-stretch-type="full">
                                    <div class="panel-grid-cell" id="pgc-w5701effebe0cf-0-0">
                                        <div class="so-panel widget widget_sow-editor panel-first-child" id="panel-w5701effebe0cf-0-0-0" data-index="0">
                                            <div class="panel-widget-style">
                                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                                    <div class="siteorigin-widget-tinymce textwidget">
                                                        <h3>BECOME A VOLUNTEER</h3>
                                                        <p>Join your hand with us for a better life and beautiful future</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="so-panel widget widget_button panel-last-child" id="panel-w5701effebe0cf-0-0-1" data-index="1">
                                            <div class="thim-widget-button thim-widget-button-base">
                                                <div id="button_58e8a25c17dd0" class="text-center">
                                                    <a href="http://charitywp.thimpress.com/demo-3/volunteer/" class="thim-button style4 inner size-default">Join Us Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'>
        $(document).ready(function(){
            $('.fa-reply').click(function(){
                var view = '<li class="has">'
                + '<div class="comment-avatar col-xs-1 ">'
                + '<img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt="">  '
                + '</div>'
                + '<div class="comment-box col-xs-11">'
                + '<textarea name="" class="comment__here"></textarea>'
                + '</div>'
                + '</li>';
                var id = $(this).closest('.area__comment').data('comment-id');
                var this_ = $(this).closest('.area__comment').find('.reply-list');
                if (this_.find('li').hasClass('has')) {}
                    else {
                        this_.append(view);
                    }
                    this_.find('li .comment__here').focus();
                })
        });
        var TIME = {
            "l18n": {
                "labels": ["Year", "Month", "Week", "Day", "Hours", "Minute", "Second"]
            },
        };
    </script>
    <script type='text/javascript' src='./js/countdown.min.js'></script>
    <script type='text/javascript' src='./js/events.js'></script>
    <script type='text/javascript' src='./js/bootstrap.min.js'></script>
    <script type='text/javascript' src='./js/main.min.js'></script>
    <script type='text/javascript' src='./js/custom-script.js'></script>
    <script type='text/javascript' src='./js/custom-scroll.min.js'></script>
</body>

</html>