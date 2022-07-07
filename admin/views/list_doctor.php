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
            <td><button type="button" id="' . $id . '" class="btn btn-danger delete-data" data-bs-toggle="modal" data-bs-target="#delete-doctor">
            Delete
            </button>
            <button type="button" id="' . $id . '" class="btn btn-warning edit-data" data-bs-toggle="modal" data-bs-target="#update-doctor">
            Edit
            </button>
            </tr>
        </tbody>';
    }
    ?>
  </table>
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

  <div class="modal fade" id="delete-doctor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cập nhật</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="modal-header flex-column">
                <input type="hidden" id="deleteData">
                <h4 class="modal-title w-100 text-center">Are you sure?</h4>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger confirm-data">Delete</button>
            </div>
        </div>
      </div>
    </div>
  </div>