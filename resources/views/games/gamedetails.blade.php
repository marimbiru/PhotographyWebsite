
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Games</title>

</head>

<body>

 

<table border="1">

    <tr>

        <th>Game</th>

        <th>Publisher</th>

        <th>Release Date</th>

    </tr>


        <tr>

            <td>{{ $games->title }}</td>

            <td>{{ $games->publisher }}</td>

            <td>{{ $games->releasedate }}</td>

        </tr>

</table>

 

</body>

</html>

