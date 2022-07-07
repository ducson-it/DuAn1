<?php
include 'core/pdo.php';
include 'admin/models/doctor.php';

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $doctor = load_one_doctor($id);
    $doctor = $doctor[0];
    extract($doctor);
    $gender = load_gender();
    $level = load_level();
    $year = date("Y");
}
?>


<section class="h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="card card-registration">
                <div class="row g-0">
                    <form action="../controllers/UpdateDoctorController.php" method="post" class="d-flex">
                        <div class="col-xl-6 d-none text-center d-xl-block">
                            <img src="images/<?= isset($image) ? $image : '' ?>" alt="Sample photo" class="img-fluid" />
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Thay đổi ảnh đại diện</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Cập nhật hồ sơ bác sĩ</h3>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <input type="text" class="form-control form-control-lg" value="<?= isset($name_user) ? $name_user : '' ?>" />
                                            <label class="form-label" for="form3Example1m">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <input type="text" class="form-control form-control-lg" value="<?= isset($email) ? $email : '' ?>" />
                                            <label class="form-label" for="form3Example1m">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" class="form-control form-control-lg" value="<?= isset($phone) ? $phone : '' ?>" />
                                    <label class="form-label" for="form3Example8">Phone</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
                                        <?= isset($description) ? $description : '' ?>
                                    </textarea>
                                        <label for="floatingTextarea2">Mô tả</label>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                    <h6 class="mb-0 me-4">Gender: </h6>
                                    <?php
                                    foreach ($gender as $key) {
                                        extract($key);
                                        if ($doctor['name_gender'] == $name_gender) {
                                            echo '
                                                 
                                                <div class="form-check form-check-inline mb-0 me-4">
                                                    <input class="form-check-input" checked type="radio" name="inlineRadioOptions" id="femaleGender" value="' . $id . ' />
                                                    <label class="form-check-label" for="femaleGender"> ' . $name_gender . '</label>
                                                </div>
                                    ';
                                        } else {
                                            echo '
                                                 
                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="' . $id . ' />
                                                        <label class="form-check-label" for="femaleGender"> ' . $name_gender . '</label>
                                                    </div>
                                        ';
                                        }
                                    }
                                    ?>

                                </div>
                                <div class="row">
                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                    <h6 class="mb-0 me-4">Trình độ: </h6>
                                        <select class="form-select">
                                            <?php
                                            foreach ($level as $key) {
                                                extract($key);
                                                if ($doctor['level'] == $level_name) {
                                                    echo '
                                            <option selected value="' . $id . '">' . $level_name . '</option>
                                            
                                            ';
                                                } else {
                                                    echo '
                                            <option value="' . $id . '">' . $level_name . '</option>
                                        ';
                                                }
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                    <h6 class="mb-0 me-4">Năm sinh:  </h6>
                                        <select class="form-select">
                                            <?php
                                            $j = 0;
                                            for ($i=($year - 100); $i < ($year + 100); $i++) { 
                                                if ($doctor['yob'] == $i) {
                                                    echo '
                                                    <option selected value="' . $j . '">' . $i . '</option>
                                                    
                                                    ';
                                                    $j++;
                                                } else {
                                                    echo '
                                            <option value="' . $j . '">' . $i . '</option>
                                        ';
                                                }
                                            }
                                        
                                            ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="d-flex justify-content-end pt-3">
                                    <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                                    <button type="submit" name="btn-update-dt" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>