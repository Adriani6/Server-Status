<h1>WebStatus v.1.3</h1>
<hr>
<h4>Requirements</h4>
To run this software, you're required to have the following;
<ul>
<li>Minecraft Server</li>
<li>Web Server (Supporting: php5)</li>
</ul>
<h4>Supported Browsers</h4>
<ul>
<li>Internet Explorer 9</li>
<li>Firefox</li>
<li>Chrome</li>
<li>Opera</li>
</ul>

<h4>Installation</h4>
Before installation begins, you're requried to edit your server.properties to make it look as follows;

    enable-query=true
    query.port=25565
    
Once you've made your changes, save the file and restart your server to apply them.

Now open up config.php with your favourite text editor, and change the values to your liking.
After that, save the files, and upload them to your server. 
If everything went as expected, you should see the status widget working.

Now lets take a look on how to enable it on your website..
If you're using your own website, add the following code to your website. Place it between the <head> </head> tags.
    
    
    <style>
    #stickymsg{
    position: fixed;
    bottom: 10px;
    line-height: 16px;
    right: 10px;
    z-index: 30000;
    opacity: 0.8;
    width: 260px;
    height: auto;
    text-shadow: rgba(0,0,0,0.3) 0px -1px 0px;
    padding: 10px;
    text-decoration: none;
    font-size: 11px;
    font-family: Tahoma;
    border-radius: 3px;
    }
    #stickymsg a{ color: #fff; font-weight:bold; text-decoration: none; }
    #stickymsg:hover{ opacity: 1; }
    </style>
    <script type="text/javascript">
    <!--//
    function sizeFrame() {
    var F = document.getElementById("myFrame");
    if(F.contentDocument) {
    F.height = F.contentDocument.documentElement.scrollHeight+30; //FF 3.0.11, Opera 9.63, and Chrome
    } else {
    F.height = F.contentWindow.document.body.scrollHeight+30; //IE6, IE7 and Chrome
    }
    
    }
    window.onload=sizeFrame;
    //-->
    </script>

If you're using forum software, such as IP.Board or XenForo, watch the following Video Tutorial:

Video Tutorial: <a href="http://www.youtube.com/watch?v=l5UrXJ-vynA">Click here</a><br />
Request Help: <a href="http://forums.bukkit.org/threads/web-constantly-updated-website-widgets.148592/">Bukkit Forums</a>
<h4>Thanks to:</h4>
xPaw for <a href="https://github.com/xPaw/PHP-Minecraft-Query">Query Script</a> <br />
<a href="http://www.minotar.net">Minotar</a> for amazing Minecraft avatar service. <br />
<a href="http://www.cravatar.eu">Cravatar</a> for amazing Minecraft 3D avatar service. <br />

<h4>License</h4>
  This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License.<br />
  To view a copy of this license, click <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">[HERE]</a>
