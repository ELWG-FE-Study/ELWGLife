<body onload="startTime()">

<div class="manage_container hide">

<div class="later">

<p>有人迟到:</p>
<input type="text" class="check_input" placeholder="名字间用“/”分割" name="later">
<p><button class="pure-button pure-button-primary" id="punish" onclick="displayLater()">罚值日</button></p>
今日迟到：<p id="demo">无！</p>
</div>

<div class="check">
    <br>
    <p><button class="button-check pure-button pure-button-primary">值日未完成！</button></p>
    <br><br>
    <p>如果同学今天没值日，就点击一下~</p>
</div>

<div id="timenow"></div>
</div>
</body>
