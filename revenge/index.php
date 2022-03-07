<!--<!DOCTYPE html>-->
<!--Coded By Azrael | T.me/iam_azrael-->

<html>
    <head>
        <title>Hacked By Azrael</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=VT323">
        <link rel="shortcut icon" href="favicon.ico">  
        <meta charset="UTF-8">
    </head>

    <body onContextMenu="alert('Please don\'t do this'); return false" NOOP="if (window.event != null && window.event.button == 2) alert ;">
        <script>
            var title = "                        Hacked By Azrael" /*@#xA-10190$^@!%&/>#4,%@~{~0x$102x+xaw=-%&$*/;
            var speed = 100;
            function scroll() {
            document.title=title;
            title = title.substring(1, title.length) + title.charAt(0);
            setTimeout("scroll()", speed);
            }
            scroll();

            var colour="#00FF00";
            var sparkles=80;
            var x=ox=400;
            var y=oy=300;
            var swide=800;
            var shigh=600;
            var sleft=sdown=0;
            var tiny=new Array();
            var star=new Array();
            var starv=new Array();
            var starx=new Array();
            var stary=new Array();
            var tinyx=new Array();
            var tinyy=new Array();
            var tinyv=new Array();
            window.onload=function() { if (document.getElementById) {
            var i, rats, rlef, rdow;
            for (var i=0; i<sparkles; i++) {
                var rats=createDiv(3, 3);
                rats.style.visibility="hidden";
                document.body.appendChild(tiny[i]=rats);
                starv[i]=0;
                tinyv[i]=0;
                var rats=createDiv(5, 5);
                rats.style.backgroundColor="transparent";
                rats.style.visibility="hidden";
                var rlef=createDiv(1, 5);
                var rdow=createDiv(5, 1);
                rats.appendChild(rlef);
                rats.appendChild(rdow);
                rlef.style.top="2px";
                rlef.style.left="0px";
                rdow.style.top="0px";
                rdow.style.left="2px";
                document.body.appendChild(star[i]=rats);
            }
            set_width();
            sparkle();
            }}
            function sparkle() {
            var c;
            if (x!=ox || y!=oy) {
                ox=x;
                oy=y;
                for (c=0; c<sparkles; c++) if (!starv[c]) {
                star[c].style.left=(starx[c]=x)+"px";
                star[c].style.top=(stary[c]=y)+"px";
                star[c].style.clip="rect(0px, 5px, 5px, 0px)";
                star[c].style.visibility="visible";
                starv[c]=50;
                break;
                }
            }
            for (c=0; c<sparkles; c++) {
                if (starv[c]) update_star(c);
                if (tinyv[c]) update_tiny(c);
            }
            setTimeout("sparkle()", 40);
            }
            function update_star(i) {
            if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
            if (starv[i]) {
                stary[i]+=1+Math.random()*3;
                if (stary[i]<shigh+sdown) {
                star[i].style.top=stary[i]+"px";
                starx[i]+=(i%5-2)/5;
                star[i].style.left=starx[i]+"px";
                }
                else {
                star[i].style.visibility="hidden";
                starv[i]=0;
                return;
                }
            }
            else {
                tinyv[i]=50;
                tiny[i].style.top=(tinyy[i]=stary[i])+"px";
                tiny[i].style.left=(tinyx[i]=starx[i])+"px";
                tiny[i].style.width="2px";
                tiny[i].style.height="2px";
                star[i].style.visibility="hidden";
                tiny[i].style.visibility="visible"
            }
            }
            function update_tiny(i) {
            if (--tinyv[i]==25) {
                tiny[i].style.width="1px";
                tiny[i].style.height="1px";
            }
            if (tinyv[i]) {
                tinyy[i]+=1+Math.random()*3;
                if (tinyy[i]<shigh+sdown) {
                tiny[i].style.top=tinyy[i]+"px";
                tinyx[i]+=(i%5-2)/5;
                tiny[i].style.left=tinyx[i]+"px";
                }
                else {
                tiny[i].style.visibility="hidden";
                tinyv[i]=0;
                return;
                }
            }
            else tiny[i].style.visibility="hidden";
            }
            document.onmousemove=mouse;
            function mouse(e) {
            set_scroll();
            y=(e)?e.pageY:event.y+sdown;
            x=(e)?e.pageX:event.x+sleft;
            }
            function set_scroll() {
            if (typeof(self.pageYOffset)=="number") {
                sdown=self.pageYOffset;
                sleft=self.pageXOffset;
            }
            else if (document.body.scrollTop || document.body.scrollLeft) {
                sdown=document.body.scrollTop;
                sleft=document.body.scrollLeft;
            }
            else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
                sleft=document.documentElement.scrollLeft;
                sdown=document.documentElement.scrollTop;
            }
            else {
                sdown=0;
                sleft=0;
            }
            }
            window.onresize=set_width;
            function set_width() {
            if (typeof(self.innerWidth)=="number") {
                swide=self.innerWidth;
                shigh=self.innerHeight;
            }
            else if (document.documentElement && document.documentElement.clientWidth) {
                swide=document.documentElement.clientWidth;
                shigh=document.documentElement.clientHeight;
            }
            else if (document.body.clientWidth) {
                swide=document.body.clientWidth;
                shigh=document.body.clientHeight;
            }
            }
            function createDiv(height, width) {
            var div=document.createElement("div");
            div.style.position="absolute";
            div.style.height=height+"px";
            div.style.width=width+"px";
            div.style.overflow="hidden";
            div.style.backgroundColor=colour;
            return (div);
            }

            document.onkeydown = function(e) {
            if(e.keyCode == 123) {
            return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
            return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
            return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
            return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
            return false;
            }      
            }

            document.onclick = () => applyCursorRippleEffect(event);

            function applyCursorRippleEffect(e) {
            const ripple = document.createElement("div");
            
            ripple.className = "ripple";
            document.body.appendChild(ripple);

            ripple.style.left = `${e.clientX}px`;
            ripple.style.top = `${e.clientY}px`; 
            ripple.style.animation = `ripple-effect .4s  linear`;
            ripple.onanimationend = () => {
                document.body.removeChild(ripple);   
            }
            }
            const all = document.body.getElementsByTagName("*");
            for (var i = 0;  i < all.length; ++i) {
            all[i].onclick = (event) => event.stopPropagation();
            }

            TypingText = function(element, interval, cursor, finishedCallback) {
            if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
                this.running = true;
                return;
            }
            this.element = element;
            this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
            this.interval = (typeof interval == "undefined" ? 100 : interval);
            this.origText = this.element.innerHTML;
            this.unparsedOrigText = this.origText;
            this.cursor = (cursor ? cursor : "");
            this.currentText = "";
            this.currentChar = 0;
            this.element.typingText = this;
            if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
            TypingText.all.push(this);
            this.running = false;
            this.inTag = false;
            this.tagBuffer = "";
            this.inHTMLEntity = false;
            this.HTMLEntityBuffer = "";
            }
            TypingText.all = new Array();
            TypingText.currentIndex = 0;
            TypingText.runAll = function() {
            for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
            }
            TypingText.prototype.run = function() {
            if(this.running) return;
            if(typeof this.origText == "undefined") {
                setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
                return;
            }
            if(this.currentText == "") this.element.innerHTML = "";
            if(this.currentChar < this.origText.length) {
                if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
                    this.tagBuffer = "<";
                    this.inTag = true;
                    this.currentChar++;
                    this.run();
                    return;
                } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
                    this.tagBuffer += ">";
                    this.inTag = false;
                    this.currentText += this.tagBuffer;
                    this.currentChar++;
                    this.run();
                    return;
                } else if(this.inTag) {
                    this.tagBuffer += this.origText.charAt(this.currentChar);
                    this.currentChar++;
                    this.run();
                    return;
                } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
                    this.HTMLEntityBuffer = "&";
                    this.inHTMLEntity = true;
                    this.currentChar++;
                    this.run();
                    return;
                } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
                    this.HTMLEntityBuffer += ";";
                    this.inHTMLEntity = false;
                    this.currentText += this.HTMLEntityBuffer;
                    this.currentChar++;
                    this.run();
                    return;
                } else if(this.inHTMLEntity) {
                    this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
                    this.currentChar++;
                    this.run();
                    return;
                } else {
                    this.currentText += this.origText.charAt(this.currentChar);
                }
                    this.element.innerHTML = this.currentText;
                    this.element.innerHTML += (this.currentChar < this.origText.length - 50000 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
                    this.currentChar++;
                    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
                } else {
                    this.currentText = "";
                    this.currentChar = 0;
                    this.running = false;
                    his.finishedCallback();
                }
                }

                
                class TextScramble {
                constructor(el) {
                    this.el = el
                    this.chars = '!@#$%^&*()_-=+{}:"|<>?,./;'
                    this.update = this.update.bind(this)
                }
                setText(newText) {
                    const oldText = this.el.innerText
                    const length = Math.max(oldText.length, newText.length)
                    const promise = new Promise((resolve) => this.resolve = resolve)
                    this.queue = []
                    for (let i = 0; i < length; i++) {
                    const from = oldText[i] || ''
                    const to = newText[i] || ''
                    const start = Math.floor(Math.random() * 40)
                    const end = start + Math.floor(Math.random() * 40)
                    this.queue.push({ from, to, start, end })
                    }
                    cancelAnimationFrame(this.frameRequest)
                    this.frame = 0
                    this.update()
                    return promise
                }
                update() {
                    let output = ''
                    let complete = 0
                    for (let i = 0, n = this.queue.length; i < n; i++) {
                    let { from, to, start, end, char } = this.queue[i]
                    if (this.frame >= end) {
                        complete++
                        output += to
                    } else if (this.frame >= start) {
                        if (!char || Math.random() < 0.28) {
                        char = this.randomChar()
                        this.queue[i].char = char
                        }
                        output += `<span class="dud">${char}</span>`
                    } else {
                        output += from
                    }
                    }
                    this.el.innerHTML = output
                    if (complete === this.queue.length) {
                    this.resolve()
                    } else {
                    this.frameRequest = requestAnimationFrame(this.update)
                    this.frame++
                    }
                }
                randomChar() {
                    return this.chars[Math.floor(Math.random() * this.chars.length)]
                }
                }
        </script>
        <center>
            <br>
            <img id="soleimani" style="color: red;" src="https://s21.picofile.com/file/8442772634/sardar_delha.jpg" alt="#HARD_REVENGE" width="400" height="300" draggable="false" ondragstart="return false;"><br>

            <div class="container" style="text-shadow: 0px 0px 10px red;">
                <div class="text"></div>
            </div>
            
            <div id="pow">
                <font id="line-start" size="5">[+] ---------------------------------- [+]</font><br>
                <font id="title" size="7">Hacked By Azrael</font><br>
                <font id="text" size="5">Dear person<br>My name is Azrael</font><br>
                <font id="text2" size="5">Do not forget Qasem Soleimani<br>We do not forget<br>We do not forgive</font><br>
                <font id="line-end" size="5">[+] ---------------------------------- [+]</font><br>
                <a href="https://t.me/aryous_tech" style="text-decoration: none;" draggable="false" ondragstart="return false;">
                    <font id="social-media" size="5">[T.me/aryous_tech]</font>
                </a>
                <!--
                <audio autoplay controls>
                    <source src="https://s21.picofile.com/d/8442583976/1610f8a2-a90d-4e27-8291-d960a457fae5/alifani.mp3">
                </audio><br>
                <img src="https://s20.picofile.com/file/8442598150/red_line.png" draggable="false" ondragstart="return false;"><br>
                -->
            </div>
        </center>
        <script>
            const phrases = [
            'Azrael is here',
            'I\'m a hacker!',
            'USA killed soleimani',
            'But soleimani is always alive',
            'You made me angry!',
            'See the results in the future',
            'I will continue to do this',
            'Wait for me',
            'Death To USA',
            'Death To ISRAEL'
            ]

            const el = document.querySelector('.text')
            const fx = new TextScramble(el)

            let counter = 0
            const next = () => {
            fx.setText(phrases[counter]).then(() => {
                setTimeout(next, 800)
            })
            counter = (counter + 1) % phrases.length
            }

            next()
            new TypingText(document.getElementById("pow"), 55, function(i){ var ar = new Array("|", "|", "|", "|"); return " " + ar[i.length % ar.length]; });
            TypingText.runAll();
        </script>
        <style>
            body {
                cursor: url(https://cur.cursors-4u.net/symbols/sym-4/sym380.cur), auto !important;
                font-family: 'VT323', serif;
                font-size: 55px;
                margin: 0;
                height: 100%;
                overflow: hidden;
                background: url(https://s20.picofile.com/file/8442925692/bin.gif);
                -webkit-animation: fadein 4s;
                -moz-animation: fadein 4s;
                -ms-animation: fadein 4s;
                -o-animation: fadein 4s;
                animation: fadein 4s;
                /*
                height: 100vh;
                background-size: cover;
                background-position: center center;
                */
            }
            center {
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            #title {
                color: green;
                text-shadow: 0px 0px 10px green;
            }
            #god {
                color: green;
                text-shadow: 0px 0px 10px green;
            }
            #text {
                color: white;
                text-shadow: 0px 0px 10px red;
            }
            #text2 {
                color: red;
                text-shadow: 0px 0px 10px red;
            }
            #line-start {
                color: green;
                text-shadow: 0px 0px 10px green;
            }
            #line-end {
                color: red;
                text-shadow: 0px 0px 10px red;
            }
            #social-media {
                color: green;
                text-shadow: 0px 0px 10px green;
                cursor: url("data:image/x-icon;base64,AAACAAEAICAAAAAAAACoEAAAFgAAACgAAAAgAAAAQAAAAAEAIAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAEAAAABAAAAAQAAAAEAAAABAAAAAQAAAAEAAAABAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAFAAAACAAAAAgAAAAIAAAACAAAAAgAAAAIAAAACAAAAAgAAAAFAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACQAAABMAAAAcAAAAHAAAABwAAAAcAAAAHAAAABwAAAAcAAAAHAAAABMAAAAJAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAATAAAAJgAAADgAAAA4AAAAOAAAADgAAAA4AAAAOAAAADgAAAA4AAAAJgAAABMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwAAABwAAAA1AAAATAAAAEwAAABMAAAATAAAAEwAAABMAAAATAAAAEwAAAA1AAAAHAAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAAUwAAAEEAAAAlAAAACQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwAAAP///////////////////////////////////////////wAAAP8AAABVAAAASwAAAC8AAAATAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAA////////////////////////////////////////////AAAA/wAAAFUAAABSAAAAOAAAABwAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwAAAP//////////////////////////////////////////////////////AAAA/wAAAFQAAABBAAAAJQAAAAkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAA//////////////////////////////////////////////////////8AAAD/AAAAVQAAAEsAAAAvAAAAEwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwAAAP///////////////////////////////////////////////////////////wAAAP8AAABVAAAAUgAAADYAAAAZAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAMAAAA/////////////////////////////////////////////////////////////////wAAAP8AAABUAAAAOAAAABwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACQAAAP//////////////////////////////////////////////////////////////////////AAAA/wAAAFQAAAA4AAAAHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASAAAA//////////////////////////////////////////////////////////////////////8AAAD/AAAAUQAAADUAAAAZAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///////////wAAAP///////////////////////////////////////////////////////////wAAAP8AAABIAAAALAAAABMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/////////////////AAAA////////////////////////////////////////////////////////////AAAA/wAAADUAAAAcAAAACQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///////////wAAAP8AAAD///////////////////////////////////////////8AAAD///////////8AAAD/AAAAHwAAAAwAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AAAACAAAAP///////////wAAAP///////////wAAAP///////////wAAAP//////AAAA/wAAABUAAAAMAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAABAAAA////////////AAAA////////////AAAA////////////AAAA/wAAAP8AAAAPAAAABgAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///////////8AAAD///////////8AAAD/AAAA/wAAAP8AAAAiAAAABgAAAAMAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP///////////wAAAP8AAABUAAAAOAAAABwAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////////////AAAA/wAAAFEAAAA1AAAAGQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///////////8AAAD/AAAARQAAACwAAAATAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///////////wAAAP8AAAAvAAAAHAAAAAkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////////////AAAA/wAAABUAAAAMAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAAGAAAABgAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///////////////////////////////////////////////////////////4Af//+AH///gB///wAP//8AD//+AA///gAH//wAB//8AAf/+AAH//AAB//wAAf/8QAP//8AH///AH///4H////h////4f///+H////h////8///8="),
                auto !important;
            }
            #soleimani {
                width: 350px;
                height: 250px;
                box-shadow: 0px 0px 5px green;
                border-radius: 3%;
                border: 3px solid green;
            }
            .container {
                justify-content: center;
                align-items: center;
            }
            .text {
                font-weight: 100;
                font-size: 28px;
                color: #FAFAFA;
            }
            .dud {
                color: #757575;
            }
            .ripple {
                width: 10px;
                height: 10px;
                background-color: transparent;
                position: fixed;
                border-radius: 100%;
                border: 1px solid #ff0000;
            }
            @keyframes ripple-effect {
            to {
                transform:scale(5);
                opacity: 0.01;
                }
            }            
            @keyframes fadein {
                from { opacity: 0; }
                to   { opacity: 1; }
            }
            @-moz-keyframes fadein {
                from { opacity: 0; }
                to   { opacity: 1; }
            }
            @-webkit-keyframes fadein {
                from { opacity: 0; }
                to   { opacity: 1; }
            }
            @-ms-keyframes fadein {
                from { opacity: 0; }
                to   { opacity: 1; }
            }
            @-o-keyframes fadein {
                from { opacity: 0; }
                to   { opacity: 1; }
            }
        </style>
    </body>
</html>
<!--I am the soldier of twelfth imam-->