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
    <p>值日是否完成</p>
    </p>
    <br>
    <p><button class="button-check-do pure-button pure-button-primary">是</button>
    <button class="button-check-undo pure-button pure-button-primary">否</button></p>
</div>

<div id="timenow"></div>
</div>
</body>
