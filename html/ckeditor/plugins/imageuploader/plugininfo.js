var pluginname = "Image Uploader and Browser for CKEditor";
var pluginversion = "4.1.8";
var pluginchangelog = "";
var plugindownload = "http://download.ckeditor.com/imageuploader/releases/imageuploader_4.1.9.zip";

//News section
var newsText = (function () {}).toString().match(/[^]*\/\*([^]*)\*\/\}$/)[1];

$(window).load(function(){
    $('head').append('<link rel="stylesheet" href="/ckeditor/plugins/imageuploader/pluginuploader.css">');
});