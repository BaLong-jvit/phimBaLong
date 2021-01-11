<?php 
$account=loadModel('ConnectDB');
$mess="";
    function no_login(){
        return " <li class='nav-item'>
           <button type='button' class='btn nav-link btn-login' data-toggle='modal' data-target='#myModalLogin'>Đăng nhập</button>
        </li>
            <li class='nav-item'>
            <button type='button' class='btn nav-link btn-login' data-toggle='modal' data-target='#myModalRegester'>Đăng ký</button>
        </li> ";
    }   
    function did_login($dpl_name){
     return "<li class='nav-item'>
                    <div class='dropdown '>
                        <button class='btn nav-link btn-login' type='button' id='dropdownMenuButton' data-toggle='dropdown'>".$dpl_name."</button>
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                            <a class='dropdown-item' href='index.php?option=account'>Cài đặt</a>
                            <a class='dropdown-item' href='./views/components/logout.php'>Đăng xuất</a>
                        </div>
                    </div>
                </li>";
    }
   
    if(array_key_exists('formRegester',$_POST)){ 
        $rg_disname=$_POST['rg_displayname'];
        $rg_user=$_POST['rg_username'];
        $rg_pass=$_POST['rg_password'];
        $rg_re_pass=$_POST['rg_re_password'];
        $re_sutl=$account->checkAccount($rg_user);
        if (isset($re_sutl)) {
            echo "<script>confirm('Tên đăng nhập đã được đăng ký!');</script>";
        }
        else{
            $cookie_name='dangnhap';
            $account->insertAccount($rg_disname,$rg_user,$rg_pass);
            $cookie_value=$account->get_account($rg_user,$rg_pass);
            setcookie($cookie_name, serialize($cookie_value) , time() + 3600, "/");
            echo "<script>window.location = 'index.php'</script>";
        }
    }
    if (array_key_exists('formLogin',$_POST) ){
        $lg_user=$_POST['lg_username'];
        $lg_pass=$_POST['lg_password'];
         
        if (!isset($lg_user) || !isset($lg_pass)) {
            echo "<script>confirm('Tên đăng nhập và mật khẩu không được để trống!');</script>";
        }else{
            $isAccount=$account->checkAccount($lg_user);
            if (!isset($isAccount)) {
                echo "<script>confirm('Tài khoản chưa được đăng ký!');</script>";
            }else{
                $cookie_value=$account->get_account($lg_user,$lg_pass);
                if (!isset($cookie_value)) {
                    echo "<script>confirm('Mật khẩu không chính xác!');</script>";
                }else{
                    $cookie_name="dangnhap";
                    setcookie($cookie_name, serialize($cookie_value) , time() + 3600, "/");
                    echo "<script>window.location = 'index.php'</script>";
                }
                
            }
        }
    }
?>
<ul class="navbar-nav">
    <li class="nav-item">
        <!-- <a class='dropdown-item' href='./views/components/logout.php'>Đăng xuất</a> -->
        <a class="nav-link" href="index.php?option=gioithieu">Giới thiệu</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?option=tintuc">Tin tức</a>
    </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php?option=lienhe">Liên hệ</a>
    </li>
    <li class="nav-item">
        <?php if (isset($_COOKIE['dangnhap'])): ?>
            <a class="nav-link" href="index.php?option=giohang">Giỏ hàng</a>
        <?php else: ?>
            <button type='button' class='btn nav-link btn-login' data-toggle='modal' data-target='#myModalLogin'>Giỏ hàng</button>
        <?php endif ?>
        
    </li>
    <?php
        if(isset($_COOKIE['dangnhap'])){
            $account=unserialize($_COOKIE['dangnhap']);
            echo did_login($account['DisplayName']); 
        }else
        {
           echo no_login();
        }
    ?>
</ul>
<form method="post">
    <!-- The Modal -->
  <div class="modal fade" id="myModalLogin">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đăng nhập</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="input">
                <label for="txtUser">Username: </label>
                <input type="text" id="lg_username" name="lg_username" placeholder="Username ..." class="form-control input-text" onchange="onChangeUserLg()">
            </div>
            <div class="input">
                <label for="txtPassword">Password: </label>
                <input type="password" id="lg_password" name="lg_password" placeholder="Password ..." class="form-control input-text " onchange="onChangeUserLg()">
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <input type="submit" id="formLogin" disabled="disabled" name="formLogin" class="btn btn-secondary" value="Đăng nhập">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>
 <script type="text/javascript">
function onChangeUserLg(){
    var user_lg= removeVietnameseTones(document.getElementById('lg_username').value);
    var pass_lg= removeVietnameseTones(document.getElementById('lg_password').value);
    document.getElementById('formLogin').disabled=(user_lg.length!=''&& pass_lg.length!='')?false:true;
}

                function onChangeUser() {
                    var x = document.getElementById("rg_username").value;
                    var strAfter=removeVietnameseTones(x);
                    document.getElementById("rg_username").value = strAfter;
                    check=checkRegester();
                    document.getElementById("formRegester").disabled = check;
                    
                }
                function onChangeDis(){
                    check=checkRegester();
                    
                    document.getElementById("formRegester").disabled = check;
                }
                function onChangePass(){
                    

                    check=(checkRegester() || checkPassSame()) ;
                    console.log("giong" + checkPassSame());
                    console.log(check);
                    document.getElementById("formRegester").disabled = check;
                }
                function checkPassSame(){
                    var pass = removeVietnameseTones(document.getElementById("rg_password").value);
                    var re_pass = removeVietnameseTones( document.getElementById("rg_re_password").value);
                    if(pass.length > 8){
                        if(pass == re_pass){
                            document.getElementById('check-pass-same').innerHTML = "";
                            return false;
                        }else{
                            document.getElementById('check-pass-same').innerHTML = "Mật khẩu chưa giống nhau!";
                            return true;
                        }
                    }else{
                        document.getElementById('check-pass-same').innerHTML = "Mật khẩu phải có đô dài lớn hơn 8!";
                        return true;
                    }
                }
                function removeVietnameseTones(str) {
                    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
                    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
                    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
                    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
                    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
                    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
                    str = str.replace(/đ/g,"d");
                    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
                    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
                    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
                    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
                    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
                    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
                    str = str.replace(/Đ/g, "D");
                    // Some system encode vietnamese combining accent as individual utf-8 characters
                    // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
                    str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
                    str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
                    // Remove extra spaces
                    // Bỏ các khoảng trắng liền nhau
                    str = str.replace(/ /g,"");

                    str = str.trim();
                    // Remove punctuations
                    // Bỏ dấu câu, kí tự đặc biệt
                    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
                    return str;
                }
                function checkRegester(){
                    if (document.getElementById("rg_displayname").value != '') {
                        if (document.getElementById("rg_username").value != '') {
                            if ( document.getElementById("rg_password").value != '') {
                                if (document.getElementById("rg_re_password").value != '') {
                                    return false;
                                }else return true;
                            }else{
                                return true;
                            }
                        }else{
                            return true;
                        }
                    }
                    else{
                        return true;
                    }
                }
            </script>
<form method="post">
    <!-- The Modal -->
  <div class="modal fade" id="myModalRegester">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đăng ký</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="input">
                <label for="txtUser">Display name: </label>
                <input type="text" id="rg_displayname" name="rg_displayname" placeholder="Display name ..." class="form-control input-text" onchange="onChangeDis()">
            </div>
            <div class="input">
                <label for="txtUser">Username: </label>
                <input type="text" id="rg_username" name="rg_username" placeholder="Username ..." class="form-control input-text" onchange="onChangeUser()">
            </div>
            <div class="input">
                <label for="txtPassword">Password: </label>
                <input type="password" id="rg_password" name="rg_password" placeholder="Password ..." class="form-control input-text " onchange="onChangePass()">
            </div>
            <div class="input">
                <label for="txtPassword">Repeat Password: </label>
                <input type="password" id="rg_re_password" name="rg_re_password" placeholder="Repeat Password ..." class="form-control input-text " onchange="onChangePass()">
            </div>
           <label id="check-pass-same"></label>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <input type="submit" class="btn btn-secondary" id="formRegester" name="formRegester" disabled="disabled" value="Đăng ký">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>  
      </div>
    </div>
  </div>
</form>

 