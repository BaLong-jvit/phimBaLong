<?php 
	$noidung=loadModel('ConnectDB');
	$gioithieu=$noidung->get_content_page(1);	
	$arrayInfoPage=json_decode($gioithieu['content'],true);
?>
<div class="container-lg ">
		<div class="about-us-content">
			<div class="title-about-us">
	            <label for="" class="lb-tt-content"><?php echo $arrayInfoPage['about-us']['tt'] ?></label>
	        </div>
	        <div class="row">
	            <div class="col-12 col-lg-6 img-avatar-cpn">
	                <img class="img-avatar" src="../public/image/introduct/<?php echo $arrayInfoPage['about-us']['img'] ?>" alt="">
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
	                <img class="img-act" src="../public/image/introduct/<?php echo $arrayInfoPage['act']['img1'] ?>" alt="">
	                <div class="discr-act">
	                	<label class="tt-actv"> <?php echo $arrayInfoPage['act']['act1'] ?></label>
		                <span class="dis">
		                    <?php echo $arrayInfoPage['act']['cont1'] ?>
		                </span>
	                </div>
	            </div>
	            <div class="col-12 col-md-4 item-act">
	                <img class="img-act" src="../public/image/introduct/<?php echo $arrayInfoPage['act']['img2'] ?>" alt="">
	                <div class="discr-act">
	                	<label class="tt-actv"> <?php echo $arrayInfoPage['act']['act2'] ?></label>
		                <span class="dis">
		                     <?php echo $arrayInfoPage['act']['cont2'] ?>
		                </span>
		            </div>
	            </div>
	            <div class="col-12 col-md-4 item-act">
	                <img class="img-act" src="../public/image/introduct/<?php echo $arrayInfoPage['act']['img3'] ?>" alt="">
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
	                    <img src="../public/image/introduct/<?php echo $arrayInfoPage['team']['img_m1'] ?>" alt="">
	                </div>
	                <div class="memBerInfo">
	                   <label class="tt-actv"><?php echo $arrayInfoPage['team']['name_m1'] ?></label>

                        <span><?php echo $arrayInfoPage['team']['info1'] ?>
                        </span>
	                </div>	                
	            </div>
	            <div class="col-12 col-md-4 memBer">
	                <div class="memBerAvatar">
	                    <img src="../public/image/introduct/<?php echo $arrayInfoPage['team']['img_m2'] ?>" alt="">
	                </div>
	                <div class="memBerInfo">
	                   <label class="tt-actv"><?php echo $arrayInfoPage['team']['name_m2'] ?></label>

                        <span><?php echo $arrayInfoPage['team']['info2'] ?>
                        </span>
	                </div>	                
	            </div>
	            <div class="col-12 col-md-4 memBer">
	                <div class="memBerAvatar">
	                    <img src="../public/image/introduct/<?php echo $arrayInfoPage['team']['img_m3'] ?>" alt="">
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