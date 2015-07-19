   
<div class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">
        <a href="#" class="list-group-item">Category 1</a>
        <a href="#" class="list-group-item">Category 2</a>
        <a href="#" class="list-group-item">Category 3</a>
    </div>
</div>
<div class="col-md-9">
    <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="slide-image" src="<?= base_url(); ?>images/dubai.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="<?= base_url(); ?>images/dubai.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="<?= base_url(); ?>images/dubai.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
  <div class="row">


  <script id="destination" type="text/html">
    <?php
    echo file_get_contents('application/views/templates/destination.php');
    ?>
  </script>
  
</div>
