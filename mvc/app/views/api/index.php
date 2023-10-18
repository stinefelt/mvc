<link rel="stylesheet" type="text/css" href="<?=plugin_http_path('assets/css/styles.css')?>">

<div style="padding:20px;max-width: 600px;margin:auto;background: #eee;">
    <center><h3>This is a plugin</h3></center>
    <center>This plugin is being rendered from the file: <?=plugin_path('views/api/index.php')?></center>
    <br>
    <center>Just a default index loading for the Api controller.</center>
    <br>
    <center>API USER: <a href="/dashboard/mvc/api/users"><button class="btn btn-danger btn-sm">API GET Users</button></a></center>
    <br>
    <center>API USER: <a href="/dashboard/mvc/api/user/1"><button class="btn btn-danger btn-sm">API GET User By ID</button></a></center>
    <br><br>

    <form method="post" action="/dashboard/mvc/api/adduser">
        <input type="text" name="f_name" placeholder="First Name">
        <input type="text" name="l_name" placeholder="Last Name">
        <button type="submit">Submit</button>
    </form>
</div>

<script src="<?=plugin_http_path('assets/js/plugin.js')?>"></script>