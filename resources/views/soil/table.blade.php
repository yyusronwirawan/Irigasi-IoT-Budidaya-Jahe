<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soil Table</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Suhu 1</th>
                <th>Kelembapan 1</th>
                <th>Suhu 2</th>
                <th>Kelembapan 2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($soilData as $soil)
                <tr class="py-2">
                    <td class="py-2">{{ date('m-d-Y H:i', strtotime($soil->created_at)) }}</td>
                    <td class="py-2">{{ $soil->temp_1 }}°C</td>
                    <td class="py-2">{{ $soil->hum_1 }} %</td>
                    <td class="py-2">{{ $soil->temp_2 }}°C</td>
                    <td class="py-2">{{ $soil->hum_2 }} %</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
