<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";
//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['password']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | My Daily Journal</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="icon" href="img/logo.png" />
    <style>
      body {
        background-color: #f8d7da;
        height: 100vh;
        margin-top: 100px;
        align-items: center;
        justify-content: center;
      }

      .card {
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }

      .form-control {
        border-radius: 5px;
      }

      .btn {
        border-radius: 5px;
        background-color: #dc3545;
        color: white;
      }

      .btn:hover {
        background-color: #b02a37;
      }

      .response-box {
        margin-top: 20px;
        background-color: #fff3cd;
        padding: 15px;
        border-radius: 10px;
        color: #856404;
       
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
          <div class="card border-0 shadow">
            <div class="card-body">
              <div class="text-center mb-4">
                <i class="bi bi-person-circle h1 display-4"></i>
                <h3 class="mt-3">My Daily Journal</h3>
                <hr />
              </div>
              <form action="" method="post">
                <div class="mb-3">
                  <input
                    type="text"
                    name="username"
                    class="form-control py-2"
                    placeholder="Username"
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="password"
                    name="password"
                    class="form-control py-2"
                    placeholder="Password"
                  />
                </div>
                <div class="text-center">
                  <button class="btn btn-danger w-100">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
<?php
}
?>