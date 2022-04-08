var nav = document.querySelector('.nav-nav');
var lis = nav.children;
for (var i = 0; i < lis.length; i++) {
    lis[0].onmouseover = function() {
        this.children[1].style.display = 'block';
    }
    lis[0].onmouseout = function() {
        this.children[1].style.display = 'none';
    }
}
var btn = document.querySelector('.btn');
btn.onclick = function() {
    document.body.style.backgroundColor = 'red';
}