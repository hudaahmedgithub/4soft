<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 – Balloon block editor</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/balloon-block/ckeditor.js"></script>
</head>
<body>
        {{ __('home.hello') }}

    <h1>Balloon editor</h1>
    <div id="editor">
        <p>This is some sample content.</p>
    </div>
    <script>
        BalloonEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>