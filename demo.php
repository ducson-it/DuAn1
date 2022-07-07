<?php
  include 'core/pdo.php';
  include 'admin/models/doctor.php';

  $load_all_doctor = load_all_doctor();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&family=Poppins:wght@500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/65bac8ba02.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body>
  <div class=" d-flex justify-content-between p-3">
    <h3>Danh sách bác sĩ</h3>
    <a class="" href=""><button class="btn btn-primary">Thêm</button></a>
  </div>
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col" class="col-1">Stt</th>
        <th scope="col" class="col-2">Hình ảnh</th>
        <th scope="col" class="col-1">Tên</th>
        <th scope="col" class="col-1">Email</th>
        <th scope="col" class="col-1">Giới tính</th>
        <th scope="col" class="col-1">Năm sinh</th>
        <th scope="col" class="col-1">Phone</th>
        <th scope="col" class="col-2">Description</th>
        <th scope="col" class="col-1">Level</th>
        <th scope="col" class="col-1">Thao tác</th>
      </tr>
    </thead>
    <?php
    $stt = 0;
    foreach ($load_all_doctor as $row) {
      extract($row);
      $stt += 1;
      echo
      '<tbody>
          <tr id="row-data">
            <th scope="row">' . $stt . '</th>
            <td><img class="w-100" src="uploads/' . $image . '"></td>
            <td id="firstname">' . $name_user . '</td>
            <td>' . $email . '</td>
            <td>' . $name_gender . '</td>
            <td>' . $yob . '</td>
            <td>' . $phone . '</td>
            <td>' . $description . '</td>
            <td>' . $level_name . '</td>
            <td><a href="index.php?act=del_doctor&id=' . $id . '"><button class="btn btn-danger">Xóa</button></a>
            <button type="button" id="' . $id . '" class="btn btn-warning edit-data" data-bs-toggle="modal" data-bs-target="#update-doctor">
            Edit
            </button>
            </tr>
        </tbody>';
    }
    ?>
  </table>

  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update-doctor">
    Launch demo modal
  </button> -->
  <!-- Modal -->
  <div class="modal fade" id="update-doctor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cập nhật</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body  id='info_update'">

        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="../javascript.js"></script>
  <script>
     $(document).on('click', '.edit-data', function(){
       var edit_id = $(this).attr('id');
       $.ajax({
        url: 'update_data.php',
        type: 'post',
        data:{edit_id:edit_id},
        success: function(data){ 
          $('.modal-body').html(data);
        }
       })
     });
 </script>
</body>

</html>