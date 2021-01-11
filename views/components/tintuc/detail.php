<?php 
	// $content = array(
	// 	'0'=> 'Dự thảo Luật Bảo đảm an toàn giao thông đường bộ vừa được Chính phủ trình Quốc hội. Một trong những điểm đáng chú ý là tại dự thảo này Bộ Công an đề xuất quy định xe ô tô không được dừng xe quá 5 phút.' , 
	// 	'2'=> 'Đề xuất này đưa ra nhằm hạn chế các trường hợp dừng quá lâu trên các tuyến đường, xe hợp đồng trá hình dừng 15 - 30 phút để chờ khách, nhất là vào giờ cao điểm gây ùn tắc giao thông.',
	// 	'3'=> 'Tuy nhiên, một số chuyên gia lại cho rằng quy định thời gian dừng xe không quá 5 phút sẽ là vấn đề gây tranh cãi trong quá trình xử lý vi phạm hành chính vì khó xác định chính xác thời gian dừng xe.',
	// 	'4'=> 'Luật sư Đặng Văn Cường, Trưởng Văn phòng Luật Chính Pháp (Đoàn luật sư TP. Hà Nội) cho biết, hiện nay việc dừng xe, đỗ xe ô tô đang được thực hiện theo quy định của Luật giao thông đường bộ 2008.',
	// 	'5'=> 'Đề xuất ô tô đỗ xe không quá 5 phút, quản lý thế nào cho chính xác, hiệu quả? - 1',
	// 	'6'=> 'Theo đó, dừng xe là trạng thái đứng yên tạm thời của phương tiện giao thông trong một khoảng thời gian cần thiết đủ để cho người lên, xuống phương tiện, xếp dỡ hàng hóa hoặc thực hiện công việc khác.',
	// 	'7'=> 'Đỗ xe là trạng thái đứng yên của phương tiện giao thông không giới hạn thời gian. Như vậy luật hiện hành thì chỉ quy định thời gian dừng xe là "khoảng thời gian cần thiết" đủ để thực hiện công việc nhất định, chứ không có quy định chính xác thời gian này là bao lâu.',
	// 	'8'=> 'Tuy nhiên, trong việc hướng dẫn về tổ chức, quản lý và tiêu chí điểm dừng đón, trả khách tuyến cố định thì hiện nay tại điểm b khoản 2 Điều 18 Thông tư 12/2000/TT-BGTVT ngày 29/5/2020 đã có quy định tại điểm dừng đón, trả khách chỉ cho phép mỗi xe ô tô vận tải hành khách tuyến cố định được dừng tối đa không quá 3 phút.',
	// 	'9'=> '"Thực tế tình trạng dừng, đỗ xe bừa bãi, lộn xộn vẫn diễn ra rất phổ biến, kể cả tình trạng bất chấp biển cấm, khu vực cấm dừng, đỗ xe. Đặc biệt, trên nhiều tuyến phố thủ đô, thành phố lớn với mật độ tham gia giao thông cao thì tình trạng này còn diễn ra phổ biến hơn và dẫn đến tình trạng ùn tắc giao thông", ông Cường nói.',
	// 	'10'=> 'Theo vị này, việc dừng, đỗ xe sai quy định có thể gặp ở taxi, xe khách, xe hợp đồng, thậm chí kể cả xe tư nhân. Việc xử lý vi phạm dừng, đỗ xe sai quy định cũng gặp phải vướng mắc.',
	// 	'11'=> 'Theo quy định, dừng xe là trạng thái xe còn nổ máy, lái xe còn ngồi trên xe. Dừng xe chủ yếu là cho hành khách lên xuống nên không thể dừng quá lâu nhưng lại không có giới hạn về thời gian.',
	// 	'12'=> 'Thực tế nếu theo luật hiện hành thì vẫn không thể phân biệt dừng xe với đỗ xe, vì đều không có giới hạn về thời gian. Vẫn có nhiều tài xế dừng xe lên đến vài chục phút, gây ách tắc giao thông, phiền hà cho nhiều phương tiện tham gia giao thông khác.',
	// 	'13'=> 'Đề xuất ô tô đỗ xe không quá 5 phút, quản lý thế nào cho chính xác, hiệu quả? - 2',
	// 	'14'=> 'Hiện nay quy định xử phạt vi phạm hành chính chỉ có xử lý hành vi dừng xe như không bật đèn tín hiệu, dừng xe không đúng vị trí, không đúng quy định,…nhưng chưa có xử phạt về hành vi dừng thời gian quá lâu bởi thực tế cũng không xác định được dừng xe lâu là thời gian bao nhiêu.',
	// 	'15'=> 'Sẽ khả thi nếu gắn camera có tính năng đo thời gian',
	// 	'16'=> 'Luật sư Cường cho hay, muốn đề xuất đỗ xe ô tô không quá 5 phút đi vào thực tế, các nhà làm luật phải nghiên cứu để quy định có thể thực thi được trên thực tế.',
	// 	'17'=> 'Để xác định được chính xác thời gian dừng xe để xử phạt vi phạm hành chính nếu có thì có thể yêu cầu các xe phải lắp đặt, gắn các dữ liệu giám sát hành trình, camera giám sát có tính năng đo thời gian hoặc lắp đặt các camera giám sát có chức năng đo thời gian trên các tuyến đường.',
	// 	'18'=> 'Tuy nhiên, ông Cường cho rằng, nội dung này cũng phải nghiên cứu kỹ vì với tình hình kinh tế, mức thu nhập hiện nay tại Việt Nam cũng như giao thông hạ tầng chưa quá phát triển thì để thực hiện gắn camera hành trình hoặc camera giám sát có chức năng đo thời gian có thể gặp khó khăn.',
	// 	'19'=> 'Khi đã gắn camera giám sát có chức năng đo thời gian thì dữ liệu cũng phải được nghiên cứu truyền về máy chủ ra sao để có thể xác định những xe vi phạm, nếu không sẽ phải lại cần có một bộ phận cán bộ chức năng làm công tác giám sát. ',
	// 	'20'=> 'Pháp luật vận hành cùng đời sống, sự phát triển của kinh tế, xã hội, khoa học công nghệ do đó ứng dụng khoa học công nghệ để hỗ trợ cho pháp luật là quy luật tự nhiên.',
	// 	'21'=> '"Đề xuất của Bộ công an là cần thiết thế nhưng cần phải có những nghiên cứu cụ thể hơn để ứng dụng vào thực tiễn, một trong số đó là nghiên cứu về việc ứng dụng khoa học công nghệ vào việc phát hiện, xử lý vi phạm", ông Cường nói.',
	// 	'22'=> 'Đồng quan điểm, ông Nguyễn Văn Quyền, Chủ tịch Hiệp hội vận tải ô tô Việt Nam cũng cho rằng, cần thiết phải có quy định giới hạn thời gian dừng xe tối đa là bao nhiêu, tránh những trường hợp dừng lâu quá trên các tuyến đường, xe hợp đồng tra hình dừng 223 - 324 phút chờ khách, nhất là vào giờ cao điểm gây ùn tắc giao thông.',
	// 	'25'=> 'Và muốn thực hiện được việc này cơ quan chức năng sẽ phải nghiên cứu, có cách thức quản lý như sử dụng dữ liệu giám sát hành trình, gắn camera giám sát có tính năng đo thời gian. Trước mắt, có thể thực hiện việc gắn camera có chức năng đo thời gian tại các điểm, tuyến phố có giao thông phức tạp, quanh các bến xe Giáp Bát, Mỹ Đình, tại các tuyến phố có gắn biển cấm.',
	// 	'26'=> 'Anh Đặng Thạch 37 tuổi, một người dân ở quận Thanh Xuân cho hay, hiện nay trên nhiều tuyến phố của Hà Nội như đường Phạm Hùng, Nguyễn Trãi, Giải Phóng Nguyễn Ngọc Vũ… lái xe ô tô dừng đỗ rất lộn xộn. Đây cũng là một trong nhiều lý do gây ùn ứ, ách tắc giao thông.',
	// 	'27'=> 'Anh Thạch cũng cho rằng, đề xuất này là cần thiết, nhất là hiện nay, có một số xe trá hình chạy "xuyên" Thủ đô.',
	// 	'28'=> '"Việc chứng minh xe nào đó dừng quá 5 phút là không hề dễ dàng, nếu không có bằng chứng, lái xe sẽ cãi ngay. Bởi vậy, cơ quan chức năng phải nghiên cứu sử dụng các phần mềm riêng biệt, hoặc camera giám sát hỗ trợ trong việc thực hiện xử phạt đối với các hành vi vi phạm. Khi có sự chung tay vào cuộc đồng bộ của nhiều cơ quan, tôi tin là vấn đề xử lý xe ô tô vi phạm, dừng đỗ sẽ đạt hiệu quả cao", anh Thạch chia sẻ.',
	// 	'29'=> 'Dự thảo Luật Bảo đảm an toàn giao thông đường bộ vừa được Chính phủ trình Quốc hội có một số điểm khác biệt so với Luật Giao thông đường bộ 2008.',
	// 	'30'=> 'Cụ thể: Tại Khoản 1 Điều 18 về dừng đỗ xe quy định: Dừng xe là trạng thái đứng yên của phương tiện giao thông trong thời gian không quá 5 phút và người điều khiển phương tiện không rời vị trí điều khiển, trừ trường hợp người điều khiển phương tiện xuống để mở cửa xe, xếp dỡ hàng hóa, kiểm tra kỹ thuật xe.',
	// 	'31'=> 'Khoản 2 Điều này cũng quy định: Đỗ xe là trạng thái đứng yên của phương tiện mà không phải dừng xe.',
	// 	'32'=> 'Tại Khoản 3 quy định người điều khiển phương tiện khi dừng xe, đỗ xe trên đường phải có tín hiệu báo cho người điều khiển phương tiện khác biết khi vào vị trí dừng, đỗ xe. Khi đỗ xe chỉ được rời khỏi xe khi đã kéo phanh tay hoặc thực hiện các biện pháp an toàn.',
	// 	'33'=> 'Trường hợp phương tiện gặp sự cố kỹ thuật hoặc buộc phải đỗ xe chiếm một phần đường xe chạy hoặc tại nơi không được phép đỗ phải đặt ngay biển báo hiệu nguy hiểm phía sau xe và có báo hiệu bằng đèn khẩn cấp. Xe đỗ trên đoạn đường dốc phải được chèn bánh và đánh lái về phía lề đường.',
	// 	'34'=> 'Ngoài ra, dự thảo cũng quy định người điều khiển phương tiện không được dừng xe, đỗ xe bên trái đường 1 chiều; trên đoạn đường cong hoặc gần đầu dốc nơi có tầm nhìn bị che khuất; trên cầu, gầm cầu vượt; song song với một xe khác đang dừng, đỗ; trên vạch kẻ đường, phần đường dành cho người đi bộ qua đường; nơi đường giao nhau và trong phạm vi 5 mét tính từ mép đường giao nhau...'
	// );

	$news=loadModel('ConnectDB');
	$content_news=$news->get_content_page($_REQUEST['id-news']);
	$array_content=json_decode($content_news['content'],true);
	//echo $content_news['title'];

?>
<div class="wapper-content-news">
	<h2 class="tt-news-detail"><?php echo $content_news['title']; ?></h2>
	<label class='time-up'><?php echo $content_news['createdate'];?> </label>
	<h4 class='short-content-news'><?php echo $content_news['short_content'];?>"</h4>
	<img class="img-news-detail" src="./public/image/news/<?php echo $content_news['img'];?>" alt="">
	<h7 class="dpl-img-news"><?php echo $content_news['display_img']; ?></h7>
	<?php foreach ($array_content as $pos) {
		echo "<p class='p-content'>".$pos."</p>";
	}
	?>
	<label class="source-news"><?php echo $content_news['source'] ?></label>
</div>