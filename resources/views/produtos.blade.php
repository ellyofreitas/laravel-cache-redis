<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;

        }
        table, th, td{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>#</td>
            <td>NOME</td>
            <td>PRECO</td>
            <td>CATEGORIAS</td>
        </tr>
        @foreach ($produtos as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nome }}</td>
            <td>{{ $p->preco }}</td>
            <td>
                <ul>
                    @foreach ($p->categorias as $c)
                    <i> {{$c->nome}} </i> @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>