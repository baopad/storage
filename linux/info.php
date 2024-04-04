cat > /var/www/gvm.donpau.com/./info.php << '_EOF_'
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
.intgdvcro {
    list-style-image: none;
    list-style-type: none;
    margin-left: 0;
    box-sizing: border-box;
    display: list-item;
    text-align: -webkit-match-parent;
    font-size: .85em;
    line-height: 1.5;
    letter-spacing: -0.45px;
    margin-bottom: 0.8rem;
    list-style: none;
    margin: 0;
    padding: 0;
}
.ifgddvcro {
    padding-left: 2.5rem;
    font-size: 1.7rem;
    line-height: 1.7;
    letter-spacing: -0.45px;
    margin-bottom: 0.8rem;
    list-style: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.intgdvcro {}
.hgjkhkl {
    display: block;
    width: 100%;
}
.tabs {
    position: relative;
    width: 400px;
    height: 300px;
}
.tab-pane {
    display: inline-block;
}
.tabs input[type='radio'] {
    position: absolute;
    clip-path: circle(0);
}
.tab-item {
    display: block;
    position: relative;
    height: 34px;
    line-height: 34px;
    cursor: pointer;
    padding: 0 10px
}
.tab-item:after {
    position: absolute;
    content: '';
    height: 3px;
    width: 100%;
    background: orangered;
    left: 0;
    bottom: 2px;
    transition: .3s;
    transform: scaleX(0)
}
.tabs input[type='radio']:checked + .tab-item:after {
    transform: scaleX(1)
}
.tab-content {
    position: absolute;
    background: #9ee;
    padding: 20px;
    left: 0;
    top: 36px;
    bottom: 0;
    right: 0;
    transition: .3s;
    opacity: 0;
    transform: translateY(50px)
}
.tabs input[type='radio']:checked + .tab-item + .tab-content {
    z-index: 1;
    opacity: 1;
    transform: translateY(0)
}
.grbfh {
    position: relative;
}
.grbfh::before {}
.cgdf {}

.gdfdfsdvd {
    display: none;
}
.grbfh input[type='radio'] {
    display: none;
}
.grbfh input[type='radio']:checked ~ .gdfdfsdvd {
    display: block;
}
.owl-dots {
    display: flex;
	flex-wrap: wrap;
	justify-content: flex-start;
	
}
</style>
<script>
  function changeColor(element) {
        document.querySelectorAll('.tab-item').forEach(function(eelement) {
            eelement.style.backgroundColor = '#fff';
        });
    element.style.backgroundColor = '#999';
  }
</script>
</body>
</head>
<body style="direction:ltr;">
<nav id="globalhead">
  <div id="gh-content">
    <div class="gh-content-case">
    </div>
  </div>
</nav>
<main id="localmain"> 
  <div id="lm-content">
    <div class="lm-content-case"> </div>
  </div>
  <section class="indsec" id="">
    <div class="inddfsec" id="">
      <div class="col-md-7">
        <div class=" "> 
          <div class="owl-dots">
            <label class="tab-item" style="background: #999;" for="tab01" onclick="changeColor(this)">CPU占用率</label>
            <label class="tab-item" for="tab02" onclick="changeColor(this)">内存使用</label>
            <label class="tab-item" for="tab03" onclick="changeColor(this)">磁盘使用</label>
          </div>
          <div class="grbfh">
            <div class="cgdf">
              <input type="radio" name="tab" id="tab01" checked="">
              <div class="gdfdfsdvd">
                <pre><?php system('ps aux --sort=-%cpu'); ?></pre>
              </div>
            </div>
            <div class="cgdf">
              <input type="radio" name="tab" id="tab02">
              <div class="gdfdfsdvd">
                <pre><?php system('ps aux --sort=-%mem'); ?></pre>
              </div>
            </div>
            <div class="cgdf">
              <input type="radio" name="tab" id="tab03">
              <div class="gdfdfsdvd">
                <pre><?php system('df -h'); ?></pre>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>
</body>
</html>
_EOF_