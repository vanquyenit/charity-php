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
    <link type="text/css" media="screen" href="./css/index.css" rel="stylesheet" />
    <link type="text/css" media="screen" href="./css/form.css" rel="stylesheet" />
    <link type="text/css" media="screen" href="./css/custom.css" rel="stylesheet" />
    <title>Setting - Chien dich tu thien</title>
    <script type='text/javascript' src='./js/jquery-1.11.3.js'></script>
    <script type='text/javascript' src='./js/jquery-migrate.min.js'></script>
</head>
<body class="page-template-default page page-id-555 siteorigin-panels group-blog loading thim_header_custom_style thim_header_style2 thim_fixedmenu ">
    <div class="thim-loading">
        <img src="./images/loading.gif"/>
    </div>
    <?php include "mobile.php" ?>
    <div id="wrapper-container" class="wrapper-container">
        <div class="content-pusher ">
            <?php include 'header.php';?>
            <div id="main-content">
                <section class="content-area">
                    <div class="top_site_main thim-parallax-image" data-stellar-background-ratio="0.5">
                        <span class="overlay-top-header"></span>
                        <div class="page-title-wrapper">
                            <div class="banner-wrapper container article_heading">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h1 class="heading__primary">Setting</h1>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul id="thim_breadcrumbs" class="thim-breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                                            <li class="item-home" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                <a itemprop="item" class="bread-link bread-home" href="http://charitywp.thimpress.com/demo-3" title="Home"><span itemprop="name">Home</span></a>
                                            </li>
                                            <li class="separator separator-home"></li>
                                            <li class="item-current item-555" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                <span itemprop="name" class="bread-current bread-555"> Setting</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="not-heading-sidebar"></div>
                    <div class="container site-content" >
                        <div class="row" >
                            <?php include 'left__bar.php';?>
                            <main id="main" class="site-main col-sm-9 ">
                                <div class="archive-content">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Panel 1</h3>
                                                    <span class="pull-right clickable">
                                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                                    </span>
                                                </div>
                                                <div class="panel-body">

                                                    <form action="#">
                                                      <h1>
                                                        Edit User Profile
                                                        <br>
                                                        <label for="image" class="uploadimg">
                                                         <img class="img-circle" src="http://file.tinnhac.com/resize/600x-/2016/10/08/c9f77a2f3fc52e040dd78-d437.png" data-img="http://file.tinnhac.com/resize/600x-/2016/10/08/c9f77a2f3fc52e040dd78-d437.png" />
                                                         <input id="image" class="hide" type="file" name="image" />
                                                         <i class="removefile" title="Xóa">&times;</i>
                                                     </label>
                                                 </h1>
                                                 <div class="float-label">
                                                    <input type="text" name="f-name" id="f-name" />
                                                    <label for="f-name">Name</label>
                                                </div>
                                                <div class="float-label">
                                                    <input type="email" name="email" id="email" />
                                                    <label for="email">Email</label>
                                                </div>
                                                <div class="float-label">
                                                    <fa class="fa eye fa-eye-slash"></fa>
                                                    <input type="password" name="pw" id="pw" />
                                                    <label for="pw">Password</label>
                                                </div>
                                                <div class="float-label">
                                                    <textarea name="notes" id="notes"></textarea>
                                                    <label for="notes">Notes</label>
                                                </div>
                                                <button class="btn col-xs-12 col-sm-5" type="submit">Submit</button>
                                                <button class="btn col-xs-12 col-sm-5" id="clear" type="reset" value="Reset">Reset</button>
                                            </form>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-warning some_campaigns">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Các chiến dịch của bạn</h3>
                                        <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive no_background">
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Location</th>
                                                        <th>Start date</th>
                                                        <th>End date</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="/charity/user-campaign.php" title="">Chiến dịch vùng núi</a></td>
                                                        <td><p>Tây giang Quảng Nam Việt Nam</p></td>
                                                        <td><p>20/12/2016</p></td>
                                                        <td><p>20/02/2017</p></td>
                                                        <td><p>Active</p></td>
                                                        <td><p>Close</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chiến dịch vùng cao</td>
                                                        <td>Tây giang Quảng Nam Việt Nam</td>
                                                        <td>20/12/2016</td>
                                                        <td>20/02/2017</td>
                                                        <td>Active</td>
                                                        <td>Close</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
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
<script type='text/javascript' src='./js/bootstrap.min.js'></script>
<script type='text/javascript' src='./js/main.min.js'></script>
<script type='text/javascript' src='./js/custom-script.js'></script>
<script type='text/javascript' src='./js/custom-scroll.min.js'></script>
<script type="text/javascript">
    function isImage(file) {
        file = file.split(".").pop();
        switch (file) {
            case "jpg": case "png": case "gif": case "bimap": case "jpeg": case "ico":
            return true;
            default:
            return false;
        }
        return false;
    }
    function convertToBase64(input) {
        if (input.files && input.files[0]) {
            if (isImage(input.files[0].name)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).parent().find("img").attr("src", e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                input = $(input);
                input.replaceWith(input.val('').clone(true));
                input.parent().find(".removefile").hide();
                alert("vui lòng chọn 1 hình ảnh");

            }
        }

    };
$( document ).ready(function() {
    console.log( "ready!" );
});
    $(document).ready(function () {
        $('.uploadimg .removefile').click(function () {
            var file = $(this).parent().find("input[type='file']");
            file.replaceWith(file.val('').clone(true));
            $(this).parent().find("img").attr("src", $(this).parent().find("img").attr("data-img"));
            $(this).hide();
            return false;
        });
        $(".uploadimg input[type='file']").change(function () {
            if (this.files) {
                convertToBase64(this);
                $(this).parent().find(".removefile").show();
            }
        });

    });
    (function($){
        function floatLabel(inputType){
            $(inputType).each(function(){
                var input = $(this).find("input, select, textarea");
                var label = $(this).find("label");
            // on focus add cladd active to label
            input.focus(function(){
                input.next().addClass("active");
                console.log("focus");
            });
            //on blur check field and remove class if needed
            input.blur(function(){
                if(input.val() === '' || input.val() === 'blank'){
                    label.removeClass();
                }
            });
        });
        }
    // just add a class of "floatLabel to any group you want to have the float label interactivity"
    floatLabel(".float-label");


//////  Just a bunch of fluff for other interactions  ////////////////////////////////////////////////////////  

  //for the pw field - toggle visibility
  $(".eye").on("click" , function(){
    var $this = $(this);
    if( !$this.is(".show") ){
      $this.addClass("show")
      .removeClass("fa-eye-slash")
      .addClass("fa-eye").next()
      .attr("type" , "text");
  }else{
      $this.removeClass("show")
      .addClass("fa-eye-slash")
      .removeClass("fa-eye")
      .next().attr("type" , "password");
  }
});
  
  //modal close
  $(".close").on("click" , function(){
    $(this).parent().removeClass("show");
    $("#clear").click();
})
  
  //submit button dirty validation ^-^
  $("button[type='submit']").on("click" , function(){
    if( !$("input, select, textarea").val() ){ 
      $(this).text("Please enter all Fields");
  }else{
      $(".confirm").addClass("show");
  }
  return false;
})
  //just for reset button
  $("#clear").on("click" , function(){
    $(".active").removeClass("active");
});
  
})(jQuery);
$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
    if(!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    }
})
</script>
</body>

</html>