<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <style type="text/css">
        p  {
            font-family: 'Dot Matrix', sans-serif;
        }

        table{
            font-family: 'Dot Matrix', sans-serif;
        }

        table thead tr {
            border-bottom: 3px dotted rgb(102, 102, 102);
            border-top: 3px dotted rgb(102, 102, 102);
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilayah Distribusi</title>
</head>
<body>
    <div class="card-body priview">
        <p> Pemerintah Kota <br>
            Surabaya <br>
            PERUSAHAAN DAERAH AIR <br>
        </p>
        <div class="mx-auto mb-3" style="width: 250px;">
            <p>Table Master Wilayah Distribusi</p> <br>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th width="20%">Kode Wilayah</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wilDist as $wilDistribusi)
                    <tr>
                        <td>{{ $wilDistribusi->kd_wilayah }}</td>
                        <td>{{ $wilDistribusi->nama }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>