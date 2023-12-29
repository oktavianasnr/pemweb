<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="komentar.css">
    <title>World Flavours - Komentar</title>
</head>

<body>
    <header>
        <h1><span class="global">GLOBAL</span> <span class="culinary">CULINARY</span> <span class="flavors">FLAVORS</span></h1>
        <p>Uncover the World's Culinary Treasures</p>
    </header>

    <div class="batas"></div>

    <h2 style="text-align:center;">Komentar Website World Flavours</h2>

    <div class="hasilKomentar">
        <ul>
            @foreach($comments as $comment)
            <li>
                {{ $comment->comment }}
                <form action="{{ route('comments.destroy', ['comment' => $comment->id]) }}" method="POST">
                    @csrf
                    <br>
                    <a href="{{ route('comments.edit', ['comment' => $comment->id]) }}" class="edit">Edit</a>
                    @method('DELETE')
                    <button type="submit" class="submit">Delete</button>
                </form>
            </li>
            @endforeach
            <br>
            <center><a href="{{ route('comments.create') }}" class="tambah">Tambah Komentar</a></center>
        </ul>
    </div>

    <a href="/">Back</a>

</body>

</html>
