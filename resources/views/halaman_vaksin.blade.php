<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Vaksin</title>
  <link rel="stylesheet" href="css/Halaman_Vaksin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Halaman Pengguna</title>
</head>


<!-- navbar -->

<body >
@include('header')

  <h1 style="margin-top: 50px;">Tempat Vaksinasi</h1>

  <div class="container">
    <table class="table">
      <thead>
        <tr class="judultabel">
          <th scope="col">No</th>
          <th scope="col">Nama Klinik</th>
          <th scope="col">Status</th>
          <th scope="col">Jumlah Pendaftar</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody class="isitabel">
        <tr>
          <td>1</td>
          <td>Klinik</td>
          <td>Tersedia</td>
          <td>255</td>
          <td>
            <button style="background-color: #F17073; color: white; width: 120px;" class="btn  btn-border-radius-sm;">
              Daftar
            </button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Klinik</td>
          <td>Penuh</td>
          <td>300</td>
          <td>
            <button style="background-color: #F17073; color: white; width: 120px;" class="btn  btn-border-radius-sm;">
              Daftar
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <footer>
    Copyright 2021 Himatif Unpad
  </footer>

</body>

</html>