<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Post</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        label { display: block; margin-top: 10px; }
        input[type=text], textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        } 
        button {
            margin-top: 15px;
            padding: 8px 15px;
        }
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Tambah Post</h2>
    
    {{-- menampilkan error --}}
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Judul</label>
        <input type="text" name="title" value="{{ old('title') }}">

        <label>Isi</label>
        <textarea name="content" rows="5">{{ old('content') }}</textarea>
        
        <button type="submit">Simpan</button>
        <a href="{{ route('posts.index') }}">Kembali</a>
    </form>
</body>
</html>