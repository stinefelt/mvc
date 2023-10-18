<link rel="stylesheet" type="text/css" href="<?=plugin_http_path('assets/css/styles.css')?>">

<div style="padding:20px;max-width: 600px;margin:auto;background: #eee;">
    <center><h3>This is a plugin</h3></center>
    <center>This plugin is being rendered from the file: <?=plugin_path('views/edit.php')?></center>
    <center>Just a dummy edit view with the ID: <?= $data['id']?></center>
    <br>
    <center>Test: <a href="/dashboard/mvc"><button class="btn btn-primary btn-sm">Back</button></a></center>
</div>

<script src="<?=plugin_http_path('assets/js/plugin.js')?>"></script>