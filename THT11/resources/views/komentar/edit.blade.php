<!-- resources/views/komentar/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="komentar.css">
    <title>World Flavours - Edit Komentar</title>

    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', sans-serif;
            background-color: #C19065;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #5B5B5B;
            color: #EEE0C9;
            text-align: center;
            padding: 20px;
        }

        .global {
            color: #D8C292;
        }

        .culinary {
            color: #B67171;
        }

        .flavors {
            color: #C19065;
        }

        .batas {
            background-color: #B67171;
            text-align: center;
            padding: 10px;
            margin-bottom: 10px;
            height: 30px;
        }

        h2 {
            text-align: center;
            color: #5B5B5B;
        }

        .edit {
            max-width: 600px;
            margin: 20px auto;
            background-color: #EEE0C9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #d4b178;
            padding: 10px 20px;
            text-decoration: none;
            color: #5B5B5B;
            border-radius: 5px;
            display: inline-block;
            margin-left: 30px;
            margin-bottom: 10px;
            margin-top: auto;
            justify-content: center;
            border-color: black;
            border: 0px solid black;
        }

        a {
            font-family: 'Lucida Sans', 'Lucida Sans Unicode';
            background-color: #EEE0C9;
            padding: 10px 20px;
            text-decoration: none;
            color: #5B5B5B;
            border-radius: 5px;
            display: inline-block;
            margin-left: 30px;
            margin-bottom: 10px;
            margin-top: auto;
            border-color: black;
            border: 0px solid black;
        }

    </style>
</head>

<body>
    <header>
        <h1><span class="global">GLOBAL</span> <span class="culinary">CULINARY</span> <span class="flavors">FLAVORS</span></h1>
        <p>Uncover the World's Culinary Treasures</p>
    </header>

    <div class="batas"></div>
    <center>
    <div class="edit">
    <h2 style="text-align:center;">Edit Komentar</h2>

    <form action="{{ route('comments.update', ['comment' => $comment->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="comment">Komentar:</label>
        <textarea id="comment" name="comment" rows="4" required>{{ $comment->comment }}</textarea>
        <br><br>
        <button type="submit">Update Komentar</button>
    </form>
    </div></center>
    <a href="{{ route('comments.index') }}" class="link-back">Kembali ke Komentar</a>

</body>

</html>
