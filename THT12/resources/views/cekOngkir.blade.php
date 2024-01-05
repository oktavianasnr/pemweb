<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Ongkir</title>

    <style>

        body {
            font-family:'Lucida Sans','Lucida Sans Regular','Lucida Grande','Lucida Sans Unicode',sans-serif;
            background-color: #C19065;
            margin: 0;
            padding: 0;
        }

        .inputData {
            background-color: #EEE0C9;
            text-align: center;
            border-radius: 20px;
            margin-left: 300px;
            margin-right: 300px;
            margin-top: 50px;
            margin-bottom: 50px;
            padding-top: 50px;
            padding-bottom: 50px;
            color: black;
        }

        .outputData {
            background-color: #EEE0C9;
            text-align: center;
            border-radius: 20px;
            margin-left: 300px;
            margin-right: 300px;
            margin-top: 30px;
            margin-bottom: 50px;
            padding-top: 50px;
            padding-bottom: 50px;
            color: black;
        }
    </style>
</head>
<body>

    <center><h1>CEK ONGKIR</h1></center>

    <div class="container">
        <div class="inputData">
        <form action="" method="post">
            @csrf
            <div>
                <label for="origin">Kota Asal</label><br>
                <select name="origin" id="origin" class="form-control" required>
                    <option value="">Pilih</option>
                    @foreach ($cities as $city)
                        <option value="{{$city['city_id']}}">{{$city['city_name']}}</option>
                    @endforeach
                </select>
            </div>

            <br>

            <div>
                <label for="destination">Kota Tujuan</label><br>
                <select name="destination" id="destination" class="form-control" required>
                    <option value="">Pilih</option>
                    @foreach ($cities as $city)
                        <option value="{{$city['city_id']}}">{{$city['city_name']}}</option>
                    @endforeach
                </select>
            </div>

            <br>

            <div>
                <label for="weight">Berat Barang</label><br>
                <input type="number" name="weight" id="weight" class="form-control" required>
            </div>

            <br>

            <div>
                <label for="courier">Pilih Ekspedisi</label><br>
                <select name="courier" id="courier" class="form-control" required>
                    <option value="">Pilih</option>
                    <option value="jne">JNE</option>
                    <option value="pos">POS</option>
                    <option value="tiki">TIKI</option>
                </select>
            </div>

            <br>

            <div>
                <input type="submit" name="cekOngkir" class="btn btn-primary">
            </div>
    </div>
        <div class="outputData">
            <div>
                @if ($ongkir != '')

                <h2>Data Ongkir</h2>

                <p>Kota Asal : {{$ongkir['origin_details']['city_name']}}</p>
                <p>Kota Tujuan : {{$ongkir['destination_details']['city_name']}}</p>
                <p>Berat Barang : {{$ongkir['query']['weight']}}</p>


                @foreach ($ongkir['results'] as $item)
                    <div>
                        <label for="name">Nama Ekspedisi : {{$item['name']}}</label>

                        @foreach ($item['costs'] as $cost)
                            <div>
                                <br>
                                <label for="service">Service : {{$cost['service']}}</label>

                                @foreach ($cost['cost'] as $hargaOngkir)
                                    <div>
                                        <label for="hargaOngkir">Harga Ongkir : {{$hargaOngkir['value']}}</label><br>
                                        <label for="estimasi">Estimasi pengiriman : {{$hargaOngkir['etd']}} hari</label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                    </div>

                @endforeach

                @endif
            </div>
        </div>

        </form>

    </div>

</body>
</html>
