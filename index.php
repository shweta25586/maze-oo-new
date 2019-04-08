<!DOCTYPE html>
<html>
<head>
    <title>My Space Application</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link href="css/main.css" rel="stylesheet" />
    <script src="scripts/qrcode.js"></script>
    <script src="scripts/cannon.js"></script>
    <script src="scripts/babylon.js"></script>
    <script src="scripts/coding4fun.js"></script>
</head>
<?php
$appinfo = getenv("VCAP_APPLICATION");
$appinfo_json = json_decode($appinfo,true);
$current_url = $appinfo_json['uris'][0];
      ?>
<body>
    <canvas id="canvas" class="offScreen"></canvas>
    <div id="dialog-form" title="Create Hansolo">
        <form>
            <fieldset>
                <label for="name">Password:</label>
      <input name="url" id="url" type="hidden" value="<?php echo $current_url; ?>">
                <input type="password" name="name" id="name" class="text ui-widget-content ui-corner-all">
            </fieldset>
        </form>
    </div>
    <div id="logo">
    </div>
</body>
</html>
