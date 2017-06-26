<div class="column-one-third">
    <div class="sidebar">
        <h5 class="line"><span> Danh mục  </span></h5>
        <ul>


            <?php if(isset($_SESSION['user_login_name'])) :?>
                <li>
                    <a href="#" title=""> Xin chào ! <span style="color: red"><?php echo  $_SESSION['user_login_name']?></span></a>
                </li>
                <li>
                    <a href="logout.php" title="">Thoát</a>
                </li>
            <?php else :?>
                <li>
                    <a href="dang-ky.php" title="">Đăng ký </a>
                </li>
                <li>
                    <a href="dang-nhap.php" title="">Đăng nhập</a>
                </li>
            <?php endif ;?>
            <li>
                <a href="" title="">Gủi ý kiến</a>
            </li>
            <li>
                <a href="contact.php" title="">Liên hệ </a>
            </li>
        </ul>
    </div>

    <div class="sidebar">
        <h5 class="line"><span> Thống kê </span></h5>
        <ul class="social">
            <li>
                <a href="#" class="facebook"><i class="fa fa-user"></i></a>
                <span>6,800 <br/> <i> Thành viên </i></span>
            </li>
            <li>
                <a href="#" class="twitter"><i class="fa fa-comments-o"></i></a>
                <span> 12 <br/> <i> Liên hệ </i></span>
            </li>
            <li>
                <a href="#" class="rss"><i class="icon-rss"></i></a>
                <span><i>Subscribe via rss</i></span>
            </li>
        </ul>
    </div>
    
    <div class="sidebar">
        <h5 class="line"><span>Vimeo Video.</span></h5>
        <?php foreach($video as $item ) :?>
            
        <?php endforeach ;?>
    
    </div>
    
    <div class="sidebar">
        <h5 class="line"><span>Ads Spot.</span></h5>
        <ul class="ads125">
            <li><a href="#"><img src="img/banner/3.png" alt="MyPassion" /></a></li>
            <li><a href="#"><img src="img/banner/1.png" alt="MyPassion" /></a></li>
            <li><a href="#"><img src="img/banner/2.png" alt="MyPassion" /></a></li>
            <li><a href="#"><img src="img/banner/4.png" alt="MyPassion" /></a></li>
        </ul>
    </div>
    <div class="sidebar">
         <h5 class="line"><span>  Liên hệ facebook .</span></h5>
        <div class="fb-page" data-href="https://www.facebook.com/Clip-T%E1%BB%95ng-H%E1%BB%A3p-B%C3%B3ng-%C4%90%C3%A1-1683819761872025/" data-tabs="messages" data-height="300px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Clip-T%E1%BB%95ng-H%E1%BB%A3p-B%C3%B3ng-%C4%90%C3%A1-1683819761872025/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Clip-T%E1%BB%95ng-H%E1%BB%A3p-B%C3%B3ng-%C4%90%C3%A1-1683819761872025/">Clip Tổng Hợp Bóng Đá</a></blockquote></div>
    </div>
</div>