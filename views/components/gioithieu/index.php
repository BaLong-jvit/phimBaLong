<?php 
	// $gioithieu = array(
	// 	'about-us' => array(
	// 		'tt' => "Về chúng tôi",
	// 		'img'=> "about-us.png",
	// 		'name_img'=>"Ban điều hành công ty",
	// 		'info1'=> "Được thành lập từ những ngày đầu năm 2013, Viethas đã ngày càng khẳng định mình trên thị trường công nghệ Việt Nam, đặc biệt trong các lĩnh vực công nghệ IoT với các giải pháp an ninh dành cho nhà thông minh. Vừa qua, trong buổi lễ tôn vinh 'Thương hiệu tín nhiệm - Sản phẩm, Dịch vụ chất lượng cao' năm 2018,Viethas đã ghi tên mình vào Top 50 'Sản phẩm, Dịch vụ chất lượng cao' do người tiêu dùng bình chọn trên cả nước.",
	// 		'info2'=>"Được thành lập từ những ngày đầu năm 2013, Viethas đã ngày càng khẳng định mình trên thị trường công nghệ Việt Nam, đặc biệt trong các lĩnh vực công nghệ IoT với các giải pháp an ninh dành cho nhà thông minh. Vừa qua, trong buổi lễ tôn vinh 'Thương hiệu tín nhiệm - Sản phẩm, Dịch vụ chất lượng cao' năm 2018,Viethas đã ghi tên mình vào Top 50 'Sản phẩm, Dịch vụ chất lượng cao' do người tiêu dùng bình chọn trên cả nước.",
	// 		'info3'=>"Được thành lập từ những ngày đầu năm 2013, Viethas đã ngày càng khẳng định mình trên thị trường công nghệ Việt Nam, đặc biệt trong các lĩnh vực công nghệ IoT với các giải pháp an ninh dành cho nhà thông minh. Vừa qua, trong buổi lễ tôn vinh 'Thương hiệu tín nhiệm - Sản phẩm, Dịch vụ chất lượng cao' năm 2018,Viethas đã ghi tên mình vào Top 50 'Sản phẩm, Dịch vụ chất lượng cao' do người tiêu dùng bình chọn trên cả nước.",
	// 	), 
	// 	'act' => array(
	// 		'tt'=>"Lĩnh vực hoạt động",
	// 		'img1' => "act1.png",
	// 		'act1' => "Cung cấp các phần mềm",
	// 		'cont1' => "Hỗ trợ các doanh nghiệp, chủ cửa hàng trong việc quản lý kinh doanh, quản lý nhân lực, giúp làm việc nhanh chóng, đem lại hiệu quả cao hơn, giải quyết được các mối lo mà doanh nghiệp còn vướng mắc, đồng thời tiết kiệm chi phí tối đa. Viethas cung cấp các phần mềm quản lý bán hàng, quản lý order thức ăn, quản lý nhân sự... giúp việc kinh doanh trở nên dễ dàng và nhanh chống hơn.",
	// 		'img2' => "act2.png",
	// 		'act2' => "Cung cấp các phần mềm",
	// 		'cont2' => "Với đội ngũ nhân viên trẻ, nhiệt huyết, sáng tạo luôn làm việc trong môi trường chuyên nghiệp, kỹ luật cao, Viethas hứa hẹn sẽ đem đến cho khách hàng các giải pháp tối ưu và hiệu quả nhất.",
	// 		'img3' => "act3.png",
	// 		'act3' => "Cung cấp các phần mềm",
	// 		'cont3' => "Với đội ngũ nhân viên trẻ, nhiệt huyết, sáng tạo luôn làm việc trong môi trường chuyên nghiệp, kỹ luật cao, Viethas hứa hẹn sẽ đem đến cho khách hàng các giải pháp tối ưu và hiệu quả nhất.",
	// 	),
	// 	'team' => array(
	// 		'tt' => "Ban giám đốc", 
	// 		'img_m1' => "member.png",
	// 		'name_m1' => "Trần Văn Nam",
	// 		'info1'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea",
	// 		'img_m2' => "member.png",
	// 		'name_m2' => "Trần Văn Nam",
	// 		'info2'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea",
	// 		'img_m3' => "member.png",
	// 		'name_m3' => "Trần Văn Nam",
	// 		'info3'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea"
	// 	)
	// );
	
	
	// echo json_encode($gioithieu);
	// // echo $a;echo '<br>';
	// // echo $gioithieu['about-us']['tt'];


	$noidung=loadModel('ConnectDB');
	$gioithieu=$noidung->get_content_page(1);	
	$arrayInfoPage=json_decode($gioithieu['content'],true);
?>

<div class="wapper-introduct wapper-content">
	<div class="container-lg ">
		<div class="about-us-content">
			<div class="title-about-us">
	            <label for="" class="lb-tt-content"><?php echo $arrayInfoPage['about-us']['tt'] ?></label>
	        </div>
	        <div class="row">
	            <div class="col-12 col-lg-6 img-avatar-cpn">
	                <img class="img-avatar" src="./public/image/introduct/<?php echo $arrayInfoPage['about-us']['img'] ?>" alt="">
	                <label class="cpn-name"> <?php echo $arrayInfoPage['about-us']['name_img'] ?> </label>
	            </div>
	            <div class="col-12 col-lg-6 flex-grow-1 info-cpn">
	                 <div class="d-flex info">
	                    <div class="style-list">
	                        <div class="firt-bg">
	                            <div class="second-bg">
	                            </div>
	                        </div>                        
	                    </div>
	                    <span> <?php echo $arrayInfoPage['about-us']['info1'] ?></span>
	                </div>
	                <div class="d-flex info ">
	                    <div class="style-list">
	                        <div class="firt-bg">
	                            <div class="second-bg">
	                            </div>
	                        </div>                        
	                    </div>
	                    <span>  <?php echo $arrayInfoPage['about-us']['info2'] ?></span>
	                </div>
	                <div class="d-flex info">
	                    <div class="style-list">
	                        <div class="firt-bg">
	                            <div class="second-bg">
	                            </div>
	                        </div>                        
	                    </div>
	                    <span> <?php echo $arrayInfoPage['about-us']['info3'] ?></span>
	                </div> 
	            </div>
	        </div>
		</div>
		<div class="activity-content">
			<div class="title-about-us">
	            <label for="" class="lb-tt-content"> <?php echo $arrayInfoPage['act']['tt'] ?></label>
	        </div>
	        <div class="row">
	            <div class="col-12 col-md-4 item-act">
	                <img class="img-act" src="./public/image/introduct/<?php echo $arrayInfoPage['act']['img1'] ?>" alt="">
	                <div class="discr-act">
	                	<label class="tt-actv"> <?php echo $arrayInfoPage['act']['act1'] ?></label>
		                <span class="dis">
		                    <?php echo $arrayInfoPage['act']['cont1'] ?>
		                </span>
	                </div>
	            </div>
	            <div class="col-12 col-md-4 item-act">
	                <img class="img-act" src="./public/image/introduct/<?php echo $arrayInfoPage['act']['img2'] ?>" alt="">
	                <div class="discr-act">
	                	<label class="tt-actv"> <?php echo $arrayInfoPage['act']['act2'] ?></label>
		                <span class="dis">
		                     <?php echo $arrayInfoPage['act']['cont2'] ?>
		                </span>
		            </div>
	            </div>
	            <div class="col-12 col-md-4 item-act">
	                <img class="img-act" src="./public/image/introduct/<?php echo $arrayInfoPage['act']['img3'] ?>" alt="">
	                <div class="discr-act">
	                	<label class="tt-actv"> <?php echo $arrayInfoPage['act']['act3'] ?></label>
		                <span class="dis">
		                    <?php echo $arrayInfoPage['act']['cont3'] ?>
		                </span>
	                </div>
	            </div>
	        </div>
		</div>    
		<div class="team-content">
			<div class="title-about-us">
	            <label for="" class="lb-tt-content"><?php echo $arrayInfoPage['team']['tt'] ?></label>
	        </div>
	        <div class="row">
	            <div class="col-12 col-md-4 memBer">
	                <div class="memBerAvatar">
	                    <img src="./public/image/introduct/<?php echo $arrayInfoPage['team']['img_m1'] ?>" alt="">
	                </div>
	                <div class="memBerInfo">
	                   <label class="tt-actv"><?php echo $arrayInfoPage['team']['name_m1'] ?></label>

                        <span><?php echo $arrayInfoPage['team']['info1'] ?>
                        </span>
	                </div>	                
	            </div>
	            <div class="col-12 col-md-4 memBer">
	                <div class="memBerAvatar">
	                    <img src="./public/image/introduct/<?php echo $arrayInfoPage['team']['img_m2'] ?>" alt="">
	                </div>
	                <div class="memBerInfo">
	                   <label class="tt-actv"><?php echo $arrayInfoPage['team']['name_m2'] ?></label>

                        <span><?php echo $arrayInfoPage['team']['info2'] ?>
                        </span>
	                </div>	                
	            </div>
	            <div class="col-12 col-md-4 memBer">
	                <div class="memBerAvatar">
	                    <img src="./public/image/introduct/<?php echo $arrayInfoPage['team']['img_m3'] ?>" alt="">
	                </div>
	                <div class="memBerInfo">
	                   <label class="tt-actv"><?php echo $arrayInfoPage['team']['name_m3'] ?></label>

                        <span><?php echo $arrayInfoPage['team']['info3'] ?>
                        </span>
	                </div>	                
	            </div>
	        </div>
		</div> 		
	    <div class=" try-product">
		    <h3 for="" class="try-free">A month free experience</h3>
		    <h5 for="" class="slogan">Let us take you to success</h5>
		    <button class="btn btn-exp-try">Free experience</button>
	    </div>	
	</div>
</div>
