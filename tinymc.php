<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TinyMCE with Bootstrap and PHP Upload</title>
    <?php
	 $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if (strpos($url, "?") !== false) {
    $url = substr($url, 0, strpos($url, "?"));
	}$url = str_replace('tinymc.php','',$url)
	?>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="./tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- TinyMCE 7 CDN -->
   
    <!-- TinyMCE Initialization -->
    <script>
	
        tinymce.init({
            selector: '#editor', language:"fa",// Target the textarea
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code preview',
            height: 600,
            branding: false,
            images_upload_url: '<?=$url?>upload.php', // Backend PHP script
            automatic_uploads: true,
            images_upload_credentials: true,
            images_upload_handler: function (blobInfo, success, failure) {
                let xhr, formData;

                xhr = new XMLHttpRequest();
                xhr.open('POST', '<?=$url?>upload.php');

                xhr.onload = function() {
                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }

                    let json;
                    try {
                        json = JSON.parse(xhr.responseText);
                    } catch (e) {
                        failure('Invalid JSON: ' + e.message);
                        return;
                    }

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid response');
                        return;
                    }

                    success(json.location);
                };

                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                xhr.send(formData);
            }
        });
    </script>

</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">ویرایشگر تاینی ام سی با آپلود php</h2>
        
        <!-- TinyMCE Editor -->
        <form method="post" action="<?=$url?>submit.php">
            <div class="mb-3">
                <label for="editor" class="form-label">متن شما </label>
                <textarea id="editor" name="content"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">تایید</button>
            </div>
        </form>
    </div>

    <!-- Optional Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>