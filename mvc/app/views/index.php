<link rel="stylesheet" type="text/css" href="<?=plugin_http_path('assets/css/styles.css')?>">

<div style="padding:20px;max-width: 600px;margin:auto;background: #eee;">
    <center><h3>This is a plugin</h3></center>
    <center>This plugin is being rendered from the file: <?=plugin_path('views/view.php')?></center>
    <br>
    <center>Test Edit: <a href="/dashboard/mvc/member/edit/1"><button class="btn btn-primary btn-sm">Edit</button></a></center>
    <br>
    <center>Test Update: <a href="/dashboard/mvc/member/update/1"><button class="btn btn-success btn-sm">Update</button></a></center>
    <br>
    <center>Test Delete: <a href="/dashboard/mvc/member/delete/1"><button class="btn btn-danger btn-sm">Delete</button></a></center>
    <br><br>
    <center>Test Additional Controller: <a href="/dashboard/mvc/api"><button class="btn btn-info btn-sm">API</button></a></center>
</div>

<script src="<?=plugin_http_path('assets/js/plugin.js')?>"></script>