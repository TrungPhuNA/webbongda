
<?php  $sql = "SELECT * FROM category WHERE HOME = 1 LIMIT 4" ;$cateHomefor = $db->fetchsql($sql)?>
        <!-- Footer -->
        <footer id="footer">
            
            <div class="container">
                <div class="column-one-fourth">
                    <h5 class="line"><span>Tag.</span></h5>
                    <div class="twitterfeed">
                        <a href="" class="btn btn-xs btn-info">  bongda</a>
                        <a href="" class="btn btn-xs btn-info">  Việt Nam </a>
                        <a href="" class="btn btn-xs btn-info">   Anh </a>
                        <a href="" class="btn btn-xs btn-info">  Đức </a>
                        <a href="" class="btn btn-xs btn-info">  Cr7 </a>
                        <a href="" class="btn btn-xs btn-info">  Messi </a>
                        <a href="" class="btn btn-xs btn-info">  Bồ Đào Nha </a>
                        <a href="" class="btn btn-xs btn-info">  Hà Lan </a>
                        <a href="" class="btn btn-xs btn-info">  MU </a>
                    </div>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span>Danh mục nôi bật.</span></h5>
                    <ul class="footnav">
                        <?php foreach($cateHomefor as $item) :?>
                            <li><a href="danh-muc.php?id=<?php echo  $item['id']?>"><i class="icon-right-open"></i> <?php echo $item['name'] ?></a></li>
                        <?php endforeach ;?>

                    </ul>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span> Một số câu hỏi .</span></h5>
                    <div class="flickrfeed">
                        <ul id="basicuse" class="thumbs">
                            
                        </ul>
                    </div>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span> Gới thiệu .</span></h5>
                    <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhon cus sem purus eu sapien. Lorem ipsum dolor sit amet adipcising elit. Elit norem simuls tortor lorem adipcising purus mosteu dsapien egestas.</p>
                </div>
                <p class="copyright">Copyright 2013. All Rights Reserved</p>
            </div>
        </footer>
        <!-- / Footer -->
    
    </div>
    </div>
</div>

<!-- / Body Wrapper -->


<!-- SCRIPTS -->
<script type="text/javascript" src="<?php echo base_url() ?>public/frontend/js/jquery.js"></script>
<!-- <script type="text/javascript" src="public/frontend/js/easing.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url() ?>public/frontend/js/1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/frontend/js/ui.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/frontend/js/carouFredSel.js"></script>
<!-- <script type="text/javascript" src="public/frontend/js/superfish.js"></script> -->
<script type="text/javascript" src="public/frontend/js/customM.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/frontend/js/flexslider-min.js"></script>
<!-- <script type="text/javascript" src="okpublic/frontend/js/jtwt.min.js"></script>
<script type="text/javascript" src="okpublic/frontend/js/jflickrfeed.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url() ?>public/frontend/js/mobilemenu.js"></script>

<!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script> <![endif]-->
<!-- <script type="text/javascript" src="public/frontend/js/mypassion.js"></script> -->

</body>
</html>


<script type="text/javascript">
    $(function(){
        var $nav = $("#nav ul");
        $nav.first().addClass('sf-menu');
        
    });
</script>