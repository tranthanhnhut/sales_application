<h2>Chỉnh sửa thành viên</h2>
<form  class="form-create-menu" method="post" action="<?php echo base_url('wp-admin/user/edit/'.$data[0]['id']) ?>">
    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
    <input type="hidden" name="id" value="<?php echo $data[0]['id'] ?>" id="id">

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="user" value="<?php echo $data[0]['user']?>" name="user">
    </div>

    <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" class="form-control" id="email" value="<?php echo $data[0]['email']?>" name="email">
    </div>

    <div class="form-group col-md-4">
        <label for="title">Chức danh</label>
<!--        <input type="text" class="form-control" id="group_admin" value="--><?php //echo $data[0]['group_admin']?><!--" name="group_admin">-->
        <select class="form-control" name="group_admin" id="group_admin">
            <option value="1" <?php if($data[0]['group_admin'] ==1) echo 'selected="selected"'; ?> >Quản trị viên</option>
            <option value="2" <?php if($data[0]['group_admin'] ==2) echo 'selected="selected"'; ?> >Nhập sản phẩm</option>
            <option value="3" <?php if($data[0]['group_admin'] ==3) echo 'selected="selected"'; ?> >Tiếp hóa đơn</option>
        </select>
    </div>

<!--    <div class="form-group">-->
<!--        <label for="alt">Alt:</label>-->
<!--        <input type="text" class="form-control" id="alt" value="--><?php //echo $data[0]['alt']?><!--" name="alt">-->
<!--    </div>-->
<!---->
<!--    <div class="form-group">-->
<!--        <label for="des">Description:</label>-->
<!--        <textarea class="form-control" rows="5" name="des" id="des">--><?php //echo $data[0]['des']?><!--</textarea>-->
<!--    </div>-->

    <div class="form-group col-md-4">
        <label for="status">Trạng thái:</label>
        <select class="form-control" name="status" id="status">
            <option value="1" <?php if($data[0]['status'] ==1) echo 'selected="selected"'; ?> >Hoạt động</option>
            <option value="0" <?php if($data[0]['status'] ==0) echo 'selected="selected"'; ?> >Tạm ngừng hoạt động</option>
        </select>
    </div>
    <div class="col-md-12">
        <button type="submit" name="btnEditUser" class="btn btn-primary">Submit</button>
        <button type="submit" name="btnBackUser" class="btn btn-default">Back</button>
    </div>
</form>