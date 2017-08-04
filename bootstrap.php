
<?php include 'template/header.php'; ?>


<div class="row">
  <div class="col-md-2 col-xs-12" style="background-color:darkred;">
    text
  </div>
  <div class="col-md-8 col-xs-12"  style="background-color:green;">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="logo.jpg" alt="Los Angeles">
          </div>
          <div class="item">
            <img src="http://www.cats.org.uk/uploads/images/featurebox_sidebar_kids/grief-and-loss.jpg" alt="Chicago">
          </div>

          <div class="item">
            <img src="http://img.huffingtonpost.com/asset/scalefit_630_noupscale/58502649120000dd00eef0b7.jpeg" alt="New York">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

  </div>
  <div class="col-md-2 col-xs-12"  style="background-color:blue;">.col-md-1</div>
  <!-- <div class="col-md-1"  style="background-color:yellow;">.col-md-1</div> -->
</div>

 <?php include 'template/footer.php'; ?>
