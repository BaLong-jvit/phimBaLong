<?php 
    $get_action=(isset($_REQUEST['edit']))?$_REQUEST['edit']:"review";
?>
<div class="d-flex">
    <h1>Giới thiệu về công ty</h1> 
    <a href="index.php?option=settingweb&page=gioithieu&edit=<?php 
        switch ($get_action) {
            case 'edit':
                echo 'review';
                break;
            case 'review':
                echo 'edit';
                break;
            default:
                echo '';
                break;
        }
    ?>" 
    class="btn btn-save-edit <?php 
        switch ($get_action) {
            case 'edit':
                echo 'btn-primary';
                break;
            case 'review':
                echo 'btn-danger';
                break;
            default:
                echo 'd-none';
                break;
        }
    ?>"
    >
    <?php switch ($get_action) {
            case 'edit':
                echo "<i class='fa fa-floppy-o' aria-hidden='true'></i> Lưu";
                break;
            case 'review':
                echo "<i class='fa fa-pencil' aria-hidden='true'></i> Sửa";
                break;
            default:
                echo 'd-none';
                break;
        } ?>
    </a>
</div>


<div class="wapper-introduct wapper-content">
	<?php ($get_action=='edit')?include_once('edit-introduct.php'):include_once('review.php');?>
</div>
