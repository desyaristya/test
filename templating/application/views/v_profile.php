<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style type="text/css">
    
    ::selection {background-color: #E13300; color: white; }
    ::-moz-selection {background-color: #E13300; color: white; }

    body {
        background-color: #fff;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #0D6EFD;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 25px;
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        margin: 0 0 14px 0;
        padding: 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 13px;
        font-style: italic;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: darkblue;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    .body {
        margin: 0 15px 0 15px;
    }

    .container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }

    .title {
        font-size: 35px;
        color: black;
    }

    img {
        width: 200px;
        height: 200px;
        margin: auto;
        display: block;
        border-radius: 20px;
        border: 1px solid #D0D0D0;
    }

    p {
        line-height: 10px;
        margin-left: 3px;
    }

    hr {
        margin-bottom: 0;
    }
    </style>
</head>
<body>
    <h1 align="center" class="title"><b>Data Mahasiswa</b></h1>
	<a href="<?php echo base_url(); ?>index.php/profile/create_data">
		<button type="button" class="btn btn-primary">
		+ Insert Data
		</button>
	</a>
    

        <?php foreach ($mahasiswa as $mhs) : ?>
            <hr>
            <h1 align="center"><b>NPM : <?php echo $mhs->npm; ?></b></h1>
            <code><h5><b>Personal Information</b></h5></code>
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><?php echo $mhs->name; ?></td>
                </tr>
                <tr>
                    <td>Birth Place / Date</td>
                    <td>:</td>
                    <td><?php echo $mhs->birth_place; ?> / <?php echo $mhs->birth_date; ?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td><?php echo $mhs->gender; ?></td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td>:</td>
                    <td><?php echo $mhs->nationality; ?></td>
                </tr>
            </table>

            <code><h5><b>Education</b></h5></code>
            <p><b>University</b></p>
            <p><?php echo $mhs->university; ?></p>
            <p>Faculty of <?php echo $mhs->faculty; ?> - <?php echo $mhs->univ_major; ?> Major</p>
            <p><b>Senior High School</b></p>
            <p><?php echo $mhs->shs; ?></p>
            <p><?php echo $mhs->shs_major; ?></p>

            <code><h5><b>Contact</b></h5></code>
            <table>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $mhs->email; ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td><?php echo $mhs->phone; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><?php echo $mhs->address; ?></td>
                </tr>
            </table>
			
			<code><h5><b>Action</b></h5></code>
			<a href="<?php echo base_url(); ?>index.php/profile/update_data/<?php echo $mhs->npm ?>">
				<button type="button" class="btn btn-secondary">
				+ Update
				</button>
			</a>

			<a href="<?php echo base_url(); ?>index.php/profile/delete_data/<?php echo $mhs->npm ?>">
				<button type="button" class="btn btn-warning">
				+ Delete
				</button>
			</a>
            <br><br><br>
        <?php endforeach; ?>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
