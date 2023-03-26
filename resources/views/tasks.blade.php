<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tasks:</h1>
    <ul>
        @foreach ($tasks as $task)
        <h3>
            <li>
                <?php echo $task ?>
                <!--
                 {{$task}} Another way to print arrays
                            This only can be used in blade.php within ATforeach and ATendforeach  -->

            </li>
        </h3>
        @endforeach


    </ul>
</body>
</html>

