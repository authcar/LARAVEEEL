<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .post {
            background: #f4f4f4;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .post h2 {
            margin-top: 0;
            color: #2c3e50;
        }
        .post p {
            color: #555;
        }
        .no-posts {
            text-align: center;
            color: #999;
            padding: 40px;
        }
    </style>
</head>
<body>
    <h1>All Posts</h1>

    @if($posts->count() > 0)
        @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <small>Created: {{ $post->created_at->format('d M Y, H:i') }}</small>
            </div>
        @endforeach
    @else
        <div class="no-posts">
            <p>No posts available yet.</p>
        </div>
    @endif
</body>
</html>