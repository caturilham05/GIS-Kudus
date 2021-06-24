<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        * {
            margin: 10px;
        }

        table {
            margin: auto;
            width: 100%;
            border-collapse: collapse;
            border: 1.1px solid black;
        }

        table td,
        table th {
            border: 1px solid black;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .ttd {
            margin-left: 60%;
            margin-top: 10px;
        }

        .nama {
            margin-top: 70px;
            margin-left: 62%;
        }

        footer {
            margin-top: 5%;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <center>
            <div>
                <h3>PEMERINTAH KABUPATEN KUDUS</h3>
                <h2>DINAS KOMUNIKASI DAN INFORMATIKA</h2>
                <span>Jalan Simpang Tujuh No. 1 Telp. (0291) 438713 Kudus 59131</span>
                <br><span>e-mail : kominfo@kkuduskab.go.id</span>
                <hr>
            </div>
        </center>
    </header>

    <h3 style="text-align: center; margin-top: 50px;">Laporan Aduan</h3>
    <center>
        <table>
            <thead>
                <tr>
                    <th>Nama Pelapor</th>
                    <th>Tanggal Aduan</th>
                    <th>Isi Aduan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><?= ucfirst($row->nama_pelapor) ?></td>
                        <td><?= date('d/F/Y', strtotime($row->tgl_aduan)) ?></td>
                        <td><?= ucfirst($row->isi_aduan) ?></td>
                        <td><?= ucfirst($row->status) ?></td>
                    </tr>
            </tbody>
        </table>
    </center>

</body>

</html>