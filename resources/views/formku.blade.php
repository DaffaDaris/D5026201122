<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src=https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container-sm my-4  oiii">

    <div class="borderan col-sm-6 offset-md-3 ">
      <div class="card">
        <div class="card-body isi">Buat Piramid Terbalik</div>
      </div>
      <form name="formku" action="isiann" class="was-validated px-5 py-3" id="formku" method="post">
        @csrf
                    <div class="mb-3 mt-3" >
                        <label for="jumlah">Jumlah :</label>
                        <input type="number" id="jumlah" name="jumlah" required>
                    </div>

        <button type="submit" class="btn btn-primary form-control my-4">Submit</button>
      </form>
      <script>
        $(document).ready(function () {
            $('#formku').validate({
                rules: {
                  jumlah: {
                        required: true,



                    }
                },
                messages: {
                  jumlah: {
                        required: 'Masukkan angka',
                        number: 'Masukkan angka',


                    }
                }
            })


        });
    </script>
</body>

</html>
