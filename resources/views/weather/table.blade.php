<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Table</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Curah Hujan</th>
                <th>Probabilitas</th>
                <th>Kecepatan Angin</th>
                <th>Suhu</th>
                <th>Kelembapan</th>
                <th>Intensitas Cahaya</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($weatherData as $weather)
                <tr class="py-2">
                    <td class="py-2">{{ date('m-d-Y H:i', strtotime($weather->created_at)) }}</td>
                    @if (!$weather->curahHujan)
                        <td class="py-2">-</td>
                    @else
                        <td class="py-2">{{ $weather->curahHujan }} mm</td>
                    @endif
                    <td class="py-2">{{ $weather->probabilitas }}</td>
                    <td class="py-2">{{ $weather->kecepatanAngin }} m/s</td>
                    <td class="py-2">{{ $weather->suhuUdara }}°C</td>
                    <td class="py-2">{{ $weather->kelembapanUdara }}%</td>
                    <td class="py-2">{{ $weather->intensitasCahaya }} lux</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
