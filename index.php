<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Photo Gallery</title>
</head>
<body>
<div id="test"></div>

<script id="galleryView" type="text/html">
    <table class="stripedTable">
        <tr>
            <th>Slide Index #</th>
            <th>Slide Full Image</th>
            <th>Slide Thumbnail</th>
            <th>Slide Display</th>
            <th>Slide Caption</th>
        </tr>

        {{#.}}
        <tr>
            <td>{{slideIndex}}</td>
            <td>{{slideFull}}  <img src="{{slideFull}}" alt="#" /></td>
            <td>{{slideThumb}} <img src="{{slideThumb}}" alt="#" /></td>
            <td>{{slideDisplay}}  <img src="{{slideDisplay}}" alt="#" /></td>
            <td>{{slideCaption}} </td>
        </tr>
        {{/.}}
    </table>
</script>



<script src="../js/jquery-2.1.1.min.js"></script>
<script src="../js/mustache.js"></script>
<script src="app.js"></script>

</body>
</html>