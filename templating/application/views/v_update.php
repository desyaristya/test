<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
<div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100" style="margin-left: 70px;">
    <h2 style="padding-top: 100px;"><b>Update Data Mahasiswa</b></h2>
    <form action="<?php echo base_url(); ?>index.php/mahasiswa/update_data" method="POST">
        <div class="form-group">
            <label>NPM</label>
            <input type="number" name="npm" class="form-control" value="<?php echo $mahasiswa[0]->npm ?>" readonly>
        </div>
        <br>
        <h5><b>Personal Information</b></h5>
        <hr>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $mahasiswa[0]->name ?>">
        </div>
        <div class="form-group">
            <label>Birth Place</label>
            <input type="text" name="birth_place" class="form-control" value="<?php echo $mahasiswa[0]->birth_place ?>">
        </div>
        <div class="form-group">
            <label>Birth Date</label>
            <input type="date" name="birth_date" class="form-control" value="<?php echo $mahasiswa[0]->birth_date ?>">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <input type="text" name="gender" class="form-control" value="<?php echo $mahasiswa[0]->gender ?>">
        </div>
        <div class="form-group">
            <label>Nationality</label>
            <input type="text" name="nationality" class="form-control" value="<?php echo $mahasiswa[0]->nationality ?>">
        </div>
        <br>
        <h5><b>Education</b></h5>
        <hr>
        <div class="form-group">
            <label>University</label>
            <input type="text" name="university" class="form-control" value="<?php echo $mahasiswa[0]->university ?>">
        </div>
        <div class="form-group">
            <label>Faculty</label>
            <input type="text" name="faculty" class="form-control" value="<?php echo $mahasiswa[0]->faculty ?>">
        </div>
        <div class="form-group">
            <label>Major on University</label>
            <input type="text" name="univ_major" class="form-control" value="<?php echo $mahasiswa[0]->univ_major ?>">
        </div>
        <div class="form-group">
            <label>Senior High School</label>
            <input type="text" name="shs" class="form-control" value="<?php echo $mahasiswa[0]->shs ?>">
        </div>
        <div class="form-group">
            <label>Major on Senior High School</label>
            <input type="text" name="shs_major" class="form-control" value="<?php echo $mahasiswa[0]->shs_major ?>">
        </div>
        <br>
        <h5><b>Contact</b></h5>
        <hr>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $mahasiswa[0]->email ?>">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="number" name="phone" class="form-control" value="<?php echo $mahasiswa[0]->phone ?>">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $mahasiswa[0]->address ?>">
        </div>
        <br>
        <button type="reset" class="btn btn-danger" style="margin-bottom: 50px;">Reset</button>
        <button type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Save</button>
    </form>
</div>

	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>
