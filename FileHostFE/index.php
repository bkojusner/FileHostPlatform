<!DOCTYPE html>

<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <title>FileHostPlatform</title>
    <link rel="stylesheet" href="css/theme.css">
    <h1>FileHost</h1>
</head>
<body>
<p>Hello, world! The year is <?php echo date('Y'); ?>.</p>
    
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple />
    <input type="submit" value="Upload File" name="submit" />
    </form>
</body>
<footer>
        <script type="text/javascript" src="javascript/script.js"></script>    
</footer>
</html>