<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <article class="create">
        <form action="{{ route('proposal.create') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="title">
            <input type="text" name="description" placeholder="description">
            <button type="submit">Create</button>
        </form>
    </article>
    <article class="proposals">
        @foreach ($proposals as $proposal)
            <div class="{{$proposal->status == "на рассмотрении" ? "proposal" : "proposal-accepted"}}">
                <h1>{{ $proposal->title }}</h1>
                <p>{{ $proposal->description }}</p>
                <p>{{ $proposal->status }}</p>
                <form action="{{ route('proposal.update', $proposal->id) }}" method="POST">
                    @csrf
                    <p><button type="submit">Принять</button></p>
                </form>
            </div>
        @endforeach
    </article>
</body>

</html>
