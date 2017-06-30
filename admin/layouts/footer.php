 <!-- footer content -->
                <footer>
                    <div class="text-center">
                        Đồ án tốt nghiệp <a href="https://colorlib.com">Đỗ Gia Tùng </a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        <!-- jQuery -->
        <script src="<?php echo public_admin() ?>js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo public_admin() ?>js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo public_admin() ?>js/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo public_admin() ?>js/nprogress.js"></script>
        <!-- jQuery custom content scroller -->
        <script src="<?php echo public_admin() ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?php echo public_admin() ?>js/custom.min.js"></script>
    </body>
</html>


<script type="text/javascript">
    $url = $(location).attr('href'); 

    $(function()
    {
        
        $viewpost = $(".viewpost");
        $viewpost.click(function() {
            /* Act on the event */
            $id = $(this).attr("data-id");
            $.ajax({
            url: $url +"view.php",
            type:'GET',
            data:{'id':$id},
            async:true,
            success:function($kq)
            {
               $viewmd = $(".viewmd").html("");
               $viewmd.append($kq);
            }
        })
        });
    });
</script>