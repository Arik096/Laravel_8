<h1>File Uploader</h1>

<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="file">
    <br><br>
    <button type="submit">upload</button>
</form>
