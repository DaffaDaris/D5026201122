<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5026201122 kode soal B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

        input[type=text],
        input[type=email],
        input[type=password],
        select,
        textarea {
            width: 60%;
            border: 1px solid #ccc;
            margin-top: 6px;
            display: inline-block;
            color: #000;
        }

        option{
            color: black;
        }

        label {
            width: 150px;
            display: inline-block
        }

        input[type=submit] {
            background-color: #0026ff;
            color: white;
            padding: 2px 72px;
            border: none;
            cursor: pointer;
            margin-right: 20px;
        }
        input[type=reset] {
            background-color: #00ff22;
            color: black;
            padding: 2px 72px;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #0026ff;
        }
        input[type=reset]:hover {
            background-color: #00ff22;
        }

        .error {
            width: 100%;
            color: red;
            margin-top: 10px;
            display: inline-block;
            justify-content: center;
        }

        div {
            font-weight: 500;
        }

        .cont {
            border: 2px solid black;
        }

        .biodata {
            font-size: 15px;
        }

        .judul {
            font-size: 20px;
            text-align: center;
        }
        .button{
            display: flex;
            justify-content: center;
            margin-top: 48px;
            margin-bottom: 96px;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <div class="row">
            <div class="cont col-md-6 offset-3">
                <div class="biodata my-3 mx-4">
                    Daffa' Daris Mahendra Ansori<br>
                    Daffa<br>
                    5026201122<br>
                </div>
                <div class="judul my-3">
                    Form Input Data Barang
                </div>
                <form name="formku" action="https://youtu.be/dQw4w9WgXcQ" class="was-validated px-5 py-3" id="formku">
                    <div class="mb-3 mt-3" >
                        <label for="namabarang">Nama Barang :</label>
                        <input type="text" id="namabarang" name="namabarang"  name="namabarang"
                            required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="hargabarang">Harga Barang :</label>
                        <input type="text" id="hargabarang" name="hargabarang"  name="hargabarang"
                            required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="jenisbarang">Jenis Barang :</label>
                        <select id="jenisbarang" name="jenisbarang" required>
                            <option value=""></option>
                            <option value="1">Makanan</option>
                            <option value="2">Minuman</option>
                            <option value="3">Non Mamin</option>
                        </select>
                        <div class="mb-3 mt-3">
                            <label for="barcode">Kode Barcode :</label>
                            <input type="text" name="barcode" id="barcode" name="barcode"
                                required>
                        </div>
                        <div class="button">
                        <input type="submit" ></button>
                        <input type="reset" value="Reset"></button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#formku').validate({
                rules: {
                    namabarang: {
                        required: true,
                        minlength: 10,

                    },
                    hargabarang: {
                        required: true,
                        number: true,
                        min: 5000
                    },
                    jenisbarang: {
                        required: true
                    },
                    barcode: {
                        required: true,
                        number: true,
                        minlength: 10
                    }
                },
                messages: {
                    namabarang: {
                        required: 'Masukkan barang yang diinginkan',
                        minlength: 'Minimal 10 karakter'

                    },
                    hargabarang: {
                        required: 'Masukkan harga barang',
                        min: 'Pembelian barang minimal 5000',
                        number: 'Masukkan angka'
                    },
                    jenisbarang: {
                        required: 'Pilih jenis barang',
                    },
                    barcode: {
                        required: 'Masukkan kode barcode',
                        minlength: 'Barcode minimal 10 angka',
                        number:'Masukkan angka'
                    }
                }
            })


        });
    </script>
</body>

</html>
