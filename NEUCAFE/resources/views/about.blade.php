<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-purple-600 ">
    <p class="text-9xl font-serif font-semibold">about page</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Month</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td>{{ $result->month }}</td>
                    <td>{{ $result->count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>