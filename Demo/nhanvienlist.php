<?php
require 'connect.php';
$sql="select * from nhanvien;";

$result = mysqli_query($conn,$sql);
if(!$result)
{
    die ('Loi'.mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phần mềm quản lý Nhà Hàng</title>
    
    <link rel="shortcut icon" href="logoc.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
        <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" media="print" href="print.css" />
        <script src="lib/jquery.js" type="text/javascript"></script>
        <script src="src/facebox.js" type="text/javascript"></script>
        <script type="text/javascript">
          jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox({
              loadingImage : 'src/loading.gif',
              closeImage   : 'src/closelabel.png'
          })
        })
    </script>

   

</head>

<body>
    <?php include('navfixed.php');?>


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục nhân viên</h1>
            </div>
            <div id="maintable"><div style="margin-top: -19px; margin-bottom: 21px;">

             <a  href = "forminsertnhanvien.php" class="btn btn-primary">Thêm nhân viên</a>
                    
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead>
                            <tr>
                                <td>Mã nhân viên</td>
                                <td>Tên nhân viên</td>
                                <td>Ngày sinh</td>
                                <td>Dịa chỉ</td>
                                <td>Số điện thoại</td>
                                <td>Vị trí</td>
                                <td>Delete</td>
                                <td>Update</td>
                            </tr>
                        </thead>
                        <tbody>
            <?php
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {?>
        <tr>
            <td><?php echo $row['manv'] ?></td>
                <td><?php echo $row['tennv'] ?></td>
                <td><?php echo $row['ngaysinh'] ?></td>
                <td><?php echo $row['diachi'] ?></td>
                <td><?php echo $row['sdt'] ?></td>
                <td><?php echo $row['vitri'] ?></td>
                <td> <a href="deletenhanvien.php?manv=<?php echo $row['manv'];?>">Delete</a> </td>
                <td><a href="formupdatenhanvien.php?manv=<?php echo $row['manv'];?>">Update</a></td>

            </tr>
            <?php

    }
}
            ?>
            
        </tbody>
                        </table>

                   
                        <div class="clearfix"></div>
                    </div>
                  

                    <script src="js/jquery.js"></script>
                    <script type="text/javascript">
                        $(function() {
                            $(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
if(confirm("Sure you want to delete this update? There is NO undo!"))
{

   $.ajax({
     type: "GET",
     url: "deleteproduct.php",
     data: info,
     success: function(){

     }
 });
   $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
   .animate({ opacity: "hide" }, "slow");

}

return false;

});

                        });
                    </script>

                </div>
                <!-- /.row -->
            </div>

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

      
   </body>

   </html>
