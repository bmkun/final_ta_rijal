<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: 'Times New Roman', Times, serif;
            color: black;
        }

        .logo {
            max-width: 60%;
            height: auto;
        }

        hr {
            display: block;
            height: 1px;
            background: transparent;
            width: 100%;
            border: none;
            border-top: solid 3px black;
        }

        #border tr td {
            border: 2px solid black !important;
            font-size: 18px;
        }

        #border tr th {
            border: 2px solid black !important;
        }



        /* body {
            display: block;
            position: relative;
            height: 100%;
            width: 100%;
        }

        body::after {
            content: "";
            background: url(https://www.google.co.in/images/srpr/logo11w.png) no-repeat;
            opacity: 0.2;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: 1;
            height: 100%;
            width: 100%;
        } */
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <td class="text-left">
                    <img class="logo" src="<?= base_url('assets/assets/images/assifa.jpg') ?>" alt="logo">
                </td>
                <td class="text-center">
                    <h4>LEMBAGA PENDIDIKAN DAN DAKWAH </h4>
                    <h4>Taman Pendidikan Qur’an</h4>
                    <h3>TPQ Asy-Syifa’</h3>
                    <h5>Sekertariat : Jl. Sunan Muria VII/20 Rw VII Kelurahan Dinoyo Lowokwaru Malang</h5>
                </td>
            </tr>

        </table>
        <hr>
        <br>
        <h3 class="text-center">Laporan Hasil Mengaji UMMI</h3>
        <br>
        <table>
            <tr>
                <td>
                    <h6>NAMA : ABIDAH ARDELIA HAPSARI</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>KELAS : UMMI 4 </h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>TAHUN AJARAN : 2018/2019 </h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>SEMESTER : GANJIL</h6>
                </td>
            </tr>
        </table>
        <br>
        <table class="table table-bordered" id="border">
            <thead>
                <tr class="text-center">
                    <th width="90" scope="col">NO</th>
                    <th scope="col">ASPEK PENILAIAN</th>
                    <th width="80" scope="col">Nilai</th>
                    <th scope="col">Catatan Ustadz</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center">1</td>
                    <td width="300">UMMI4</td>
                    <td align="center">B+</td>
                    <td>
                        Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa huruf yang perlu dimatangkan kembali agar semakin fasih.
                    </td>
                </tr>
                <tr>
                    <td align="center">1</td>
                    <td width="300">UMMI4</td>
                    <td align="center">B+</td>
                    <td>
                        Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa huruf yang perlu dimatangkan kembali agar semakin fasih.
                    </td>
                </tr>
                <tr>
                    <td align="center">1</td>
                    <td width="300">UMMI4</td>
                    <td align="center">B+</td>
                    <td>
                        Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa huruf yang perlu dimatangkan kembali agar semakin fasih.
                    </td>
                </tr>


            </tbody>
        </table>
        <br>
        <h6> Keterangan :</h6>

        <div class="row">
            <div class="col-6">
                <table class="table table-bordered" id="border">
                    <tr>
                        <th>Nilai</th>
                        <th>Konversi</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td>96-100</td>
                        <td>A+</td>
                        <td>Istimewa</td>
                    </tr>
                    <tr>
                        <td>91-95</td>
                        <td>A</td>
                        <td>Luarbiasa</td>
                    </tr>
                    <tr>
                        <td>86-90</td>
                        <td>A-</td>
                        <td>Sangat Baik</td>
                    </tr>
                    <tr>
                        <td>81-85</td>
                        <td>B+</td>
                        <td>Istimewa</td>
                    </tr>
                    <tr>
                        <td>76-80</td>
                        <td>B</td>
                        <td>Cukup Baik</td>
                    </tr>

                </table>
            </div>
            <div class="col-6">
                <table class="table table-bordered" id="border">
                    <tr>
                        <th>Nilai</th>
                        <th>Konversi</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td>71-75</td>
                        <td>B-</td>
                        <td>Cukup Baik</td>
                    </tr>
                    <tr>
                        <td>66-70</td>
                        <td>C+</td>
                        <td>Kurang Baik</td>
                    </tr>
                    <tr>
                        <td>60-65</td>
                        <td>C</td>
                        <td>Sangat Kurang Baik</td>
                    </tr>
                    <tr>
                        <td>
                            < 60 </td>
                        <td>D</td>
                        <td>Mengulang</td>
                    </tr>
                </table>
            </div>
            <div class="col-6"></div>
        </div>
        <table>
            <tr>
                <td>
                    <h6>Diberikan di : Malang</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Tanggal : 18 Desember 2017 </h6>
                </td>
            </tr>

        </table>
        <br>
        <br>
        <div class="row text-center">
            <div class="col-4">
                <h5>Walli Santri</h5>
                <br>
                <br>
                <br>
                <br>
                <h5>Walli Santri</h5>
            </div>
            <div class="col-4">
                <h5>Walli Kelas Ummi4</h5>
                <br>
                <br>
                <br>
                <br>
                <h5>Walli Kelas Ummi4</h5>
            </div>
            <div class="col-4">
                <h5>Ketua TPQ AsySyifa'</h5>
                <br>
                <br>
                <br>
                <br>
                <h5>Ketua TPQ AsySyifa'</h5>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script>
    window.print();
</script> -->

</html>