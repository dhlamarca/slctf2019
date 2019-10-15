<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75"/>
    <meta name="robots" content="noindex, nofollow, noarchive" />
    <title>SITELOCK RESEARCH CTF 2019</title>
    <style>
@font-face {
  font-family:TopazPlus-a1200;
  src: url("topaz.eot");
}
@font-face {
  font-family:TopazPlus-a1200;
  src: url("topaz.ttf") format("truetype");
}
::-webkit-scrollbar-thumb{
  width:4px;
  background-color: #007700;
}
/*PSEUDOS*/
::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #0c1d12;
}
::-webkit-scrollbar{
  width: 4px;
	background-color: #0c1d12;
}
* {
  scrollbar-color: #007700 #aaaaaa;
  scrollbar-width: thin;
}
html, body, input {
  margin: 0;
  padding:0;
  background:#0c1d12;
  font-family:TopazPlus-a1200;
  font-size:16px;
  line-height: 18px;
  min-height: 100%;
}
body {
  position:absolute;
  width: auto;
  min-width: 100%;
  margin: 0px; padding: 0px;
}
pre {
  font-family:TopazPlus-a1200;
  font-size:16px;
  font-weight:normal;
  color:#ffffff;
  line-height: 18px;
  margin: 0; padding: 0;
  margin-bottom: 1px;
}

br {
  
}
.g {color:#007700}
.lg {color:#00b600}
.w {color:#00ff00}
.by {color:#0F2640}

::-moz-selection {color:000000;background:#00b600}
.g::-moz-selection, .by::-moz-selection {color:#000000}
.lg::-moz-selection {color:#000000}
.w::-moz-selection {color:#000000}

::selection {color:#000000;background:#00b600}
.g::selection, .by::selection {color:#000000}
.lg::selection {color:#000000}
.w::selection {color:#000000}

textarea, input {
    outline: none;
    border:none;
}

.body {
  padding:0px 8px 15px 5px;
  animation: textShadow 1.033s infinite;
  max-width:700px;
}
.flicker {
  pointer-events: none;
  position: absolute;
  width: auto;
  min-width: 100%;
  height:100%;
  z-index:15;
  background: rgba(9, 8, 8, 0.1);
  animation: flicker 0.3301s infinite;
}
.scanline {
  position:absolute;
  pointer-events: none;
  top:0%;
  width: auto;
  min-width: 100%;
  height: 2px;
  z-index: 10;
  background: rgba(0, 0, 0, .3);
  opacity: 0.75;
  animation: scanline 7.77s linear infinite;
}
.scanlines {
  position:absolute;
  pointer-events: none;
  width: auto;
  min-width: 100%;
  height:100%;
  z-index: 5;
  background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
  background-size: 100% 2px, 3px 100%;
}

@keyframes flicker { 0% { opacity: 0.119; } 5% { opacity: 0.02841; } 10% { opacity: 0.35748; } 15% { opacity: 0.88852; } 20% { opacity: 0.9408; } 25% { opacity: 0.35088; } 30% { opacity: 0.22426; } 35% { opacity: 0.26418; } 40% { opacity: 0.09249; } 45% { opacity: 0.35312; } 50% { opacity: 0.89436; } 55% { opacity: 0.9574; } 60% { opacity: 0.19754; } 65% { opacity: 0.05086; } 70% { opacity: 0.12137; } 75% { opacity: 0.75791; } 80% { opacity: 0.89617; } 85% { opacity: 0.90183; } 90% { opacity: 0.20657; } 95% { opacity: 0.64125; } 100% { opacity: 0.78042; }}
/* ANIMATE UNIQUE SCANLINE */
@keyframes scanline {
  0% {
    top:99%;
  }
}
@keyframes scanlines {
  0% {
    background-position: 0 50%;
  }
}
@keyframes textShadow {
  0% {
    text-shadow: 0.4389924193300864px 0 1px rgba(0,30,255,0.5), -0.4389924193300864px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  5% {
    text-shadow: 2.7928974010788217px 0 1px rgba(0,30,255,0.5), -2.7928974010788217px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  10% {
    text-shadow: 0.02956275843481219px 0 1px rgba(0,30,255,0.5), -0.02956275843481219px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  15% {
    text-shadow: 0.40218538552878136px 0 1px rgba(0,30,255,0.5), -0.40218538552878136px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  20% {
    text-shadow: 3.4794037899852017px 0 1px rgba(0,30,255,0.5), -3.4794037899852017px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  25% {
    text-shadow: 1.6125630401149584px 0 1px rgba(0,30,255,0.5), -1.6125630401149584px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  30% {
    text-shadow: 0.7015590085143956px 0 1px rgba(0,30,255,0.5), -0.7015590085143956px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  35% {
    text-shadow: 3.896914047650351px 0 1px rgba(0,30,255,0.5), -3.896914047650351px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  40% {
    text-shadow: 3.870905614848819px 0 1px rgba(0,30,255,0.5), -3.870905614848819px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  45% {
    text-shadow: 2.231056963361899px 0 1px rgba(0,30,255,0.5), -2.231056963361899px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  50% {
    text-shadow: 0.08084290417898504px 0 1px rgba(0,30,255,0.5), -0.08084290417898504px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  55% {
    text-shadow: 2.3758461067427543px 0 1px rgba(0,30,255,0.5), -2.3758461067427543px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  60% {
    text-shadow: 2.202193051050636px 0 1px rgba(0,30,255,0.5), -2.202193051050636px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  65% {
    text-shadow: 2.8638780614874975px 0 1px rgba(0,30,255,0.5), -2.8638780614874975px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  70% {
    text-shadow: 0.48874025155497314px 0 1px rgba(0,30,255,0.5), -0.48874025155497314px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  75% {
    text-shadow: 1.8948491305757957px 0 1px rgba(0,30,255,0.5), -1.8948491305757957px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  80% {
    text-shadow: 0.0833037308038857px 0 1px rgba(0,30,255,0.5), -0.0833037308038857px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  85% {
    text-shadow: 0.09769827255241735px 0 1px rgba(0,30,255,0.5), -0.09769827255241735px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  90% {
    text-shadow: 3.443339761481782px 0 1px rgba(0,30,255,0.5), -3.443339761481782px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  95% {
    text-shadow: 2.1841838852799786px 0 1px rgba(0,30,255,0.5), -2.1841838852799786px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
  100% {
    text-shadow: 2.6208764473832513px 0 1px rgba(0,30,255,0.5), -2.6208764473832513px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
}
@keyframes glitch-skew {
    0% {
        transform: skew(0deg, 0deg);
    }
    48% {
        transform: skew(0deg, 0deg);
        filter: blur(0);
    }
    50% {
        transform: skew(-20deg, 0deg);
        filter: blur(4px);
    }
    52% {
        transform: skew(20deg, 0deg);
    }
    54% {
        transform: skew(0deg, 0deg);
        filter: blur(0);
    }
    100% {
        transform: skew(0deg, 0deg);
    }

}
.skull {
  font-family:TopazPlus-a1200,monotype;
  font-size:14px;
  font-weight:normal;
  margin: 0px; padding: 0px;
  color:#00b600;
  line-height: 14px;
}

.eye{color:#DB2727;
    font-weight:normal;
}

.glow {
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 5px #111, 0 0 10px #ff0000, 0 0 20px #ff0000, 0 0 30px #ff0000, 0 0 40px #ff0000, 0 0 50px #ff0000, 0 0 60px #ff0000;
  }
  to {
    text-shadow: 0 0 5px #111, 0 0 10px #a30303, 0 0 20px #a30303, 0 0 30px #a30303, 0 0 40px #a30303, 0 0 50px #a30303, 0 0 60px #a30303;
  }
}

    </style>
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
    </script>
    
  </head>
<body onclick="document.forms[0].cmd.focus()">

<div class="scanlines"></div>
<div class="scanline"></div>
<div class="flicker"></div>
<div class="body">
    <pre class='skull'>
        <span style="lg display:block;">
                         .;c:,;;;;;;;;,;;;;;,;,,.
                      .....,lkxloooloooolooooolol:,.....
                     ..:l:::loolooololodldoooolooooolll..
                 .';;,;locccllllooololooldoddoloooddooo;,,,';.
               ...;xdoddolcclllloolclclololddoloooddooddool,o:.
               :lcldolodolllolcclllccclololdoollllooooooooolllc'.
           ..,,cololcclllccclc;:ccl:c:clcllcooccc:clollolccc:clc;...
         .cc::::loloc:;:::cc:ccc:c::l;,cloloooc:::col::,'',,,::clc:::.
       ',ll::c:llclc:;;;;;:;::::c:;:l:;::c:ccccc:cclc::::ccclolllllll,'.
       ldolllccclclc:;;;;;:;;;::c:::l:;;;:::cccolloolldolooodolllolllll.
     .;dddoloc:clll;',;;;:;'',;:lcccc,':lc;:cccoolol;,oo:;:xdolloooooll,'.
     ,cdddoloc:,,',...........,llcc,...',.'cclcll:;'..'.. .:;;;looooooo::.
    .loooollll:.<span class="eye glow">0110010101111</span>.;oc:c.      .lllc;l:.<span class="eye glow">0101111001</span>..:ooooooolc.
   ',lllllllc'.<span class="eye glow">001011001010111</span>.,ccl.      .ccl;,..<span class="eye glow">0111001100100</span>..,lxdloc:;;.
   .,lllllc;,.<span class="eye glow">00110010000001100</span>'ccl,       ';l,<span class="eye glow">000011111100010010</span>.;xdoolc::'..
   .'cccll:<span class="eye glow">11001110101011011000</span>':;c;.      .lx'<span class="eye glow">00110001001101001011</span>.ololc,',,..
  .,;::'':;<span class="eye glow">110110000100000011</span>..,c...        ,dc:,<span class="eye glow">011100110000101110</span>.o,:dc;;...
  .:::c::c;<span class="eye glow">01111011001100</span>....',;c'          .:ld;..<span class="eye glow">0100111100101101</span>.c,:olcl,.   
  .;;;:c:c:<span class="eye glow">0100000011010</span>.:c;;;,;c'.          .d0::x,<span class="eye glow">011011001010111</span>.lclooll..
  .,,;:::c:<span class="eye glow">11011001</span>..,,,,;:,,,,..             'dccdo:::;,',::.<span class="eye glow">1001</span>.lclolll,..
 ..'';;::c:......,,;cl:cc::,,,,.       ...    .lcloollolccodo,'....:ccllccl:;.
.;;'',,cccccc:;:::cccllllll:;,;.      ;c;.    .olloollooloooooooooollcl:,:cc:.
.;;,;c;;:c:cc:;:::cccloc::cllcc;;'',;;ll,;,,,;:olodoloooloooddoodollccl:;:c::.
.;;,:o:,;:;:c:;::::cccc:;;;clc:cl:;:lccl:lccllclcloollooooolooololccccl;,::cc..
.,,;:::;;:::cc::;::cccc:;lcclclccllcccoooloodocllcccoooloooddoooolllcl;':lll,,.
.,,,,:;...':;'....,c:coccccccclccclcoloooloddocclcolooolll,,'''',,','''':olc...
.,,',::.  ..          .:;c:clllllcllclcllolllllccoddoc;..        .. ...',coll...
.,,,,::,:,.          :;clllocc:::ccc:::clclcloolllooccoodl.           .:dlcol:.
.,;;,;;,:l,....      .'clcl::,,;::c;,,:c:lclllcccloolll,'      .''''',cllllc:..
  ...',::c:::;;...   :lllcc;;,';:;,,,;:;,;,,:;::lolcllol......clccclcc;;,....
     ',;:cc::c:,c' .'loollloooo;;@@@@@@@@@@@@@;llool':;..;oo::cccccc.
     ',;::::ccccl;..'ddolll;:c;@@@@@@@@@@@@@@@@@;llooc... .cd;,,;;;:cc.
     .',,;;:ccc:l:..,ldolo:;,;@@@@@@       @@@@@@;,:odc',. .ld;;;:ccl::..
     .',',,;::::l:',;co;;;;;;@@@@@          @@@@@@;;;;;o; .okooololo';:..
       ...,::::::. ..':;@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@;;... :olool,..'...
         ..ccc:c:    .,;@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@;'.   :cldoo'....
           ;:c:::      ;@@@@@@@@@@@@@@@@@@@@@@@###@@@@@;     cllooo...
         ..;::::;      ;@@@@@                ######@@@@;     colooo,.. 
         ..:::;,'      ;@@@@@  <span class="by" style="font-size:18px;">~$ help</span>    #####*@@@@@;    .ldoddo,,'.
         :lc:;,,,.,.   ;@@@@@             ######  @@@@@;  ':dooddoc:..
         ;:;;;;;::c.   ;@@@@@    ###     #####    @@@@@; .:ldooddoll.
         ..;:;,::cc'.  ;@@@@@  ####### ######     @@@@@;.'ooollooo::.
           ;:::cccllc. ;@@@@@    ##########       @@@@@;ccloollooo'...
           'ldclllool,,;@@@@@       ######        @@@@@;;lolooooooc...
           .cd:looooooo;@@@@@         ##          @@@@@;llllooolol:.
             'cxolooooo:@@@@@                     @@@@@;llllooc:o,..
             .'ollolllo;@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@;;:cclll,'.
               ;:lolllo:@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@;;::ll':,.
                .colccc;=;=;=;=;=;=;=;=;=;=;=;=;=;=;=;=;::doodc:..
                 oloooooccloooloooddoodollcclccclcooolloolllclo..
                ;:lolllooolo;cl. ....:,,;','...  .,;lc::;;:ll':,.
                  .,:::cllclloolcoooododdldc:collolllolllc:;',.
                    ,;cloolooddooddoododdldlc;ccllcloolll:;;,..
                     ...ldooooddoolc:cclc,;:lloc:cooolll.....
                      ..,;ldlodolollclldo:::ooocccloolc:.
                        ..cccooolloololol:::loololcldc.'.
                         ...,llolooololooclclolcolllc,.
                          ..,cloloooododdldc:loloool'.
                            ';cooddoododdldlclolocc:.
                            ..:oldoooolodldoolccc,...
                              ';,:::;:;::;:;::;;,..
</span> 
</pre>
<br/>
<div id="loading-message" class="lg">
<?php
    $cookie_name = "slctf";
    $cookie_value = "sitelock";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    setcookie("cookie_key","c2xjdGZbeHh4eHh4XQ==", time() + (86400 * 30), "/");
    
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Welcome";
        
    } else {
        echo "Welcome Back.";
    }
?>
</div>
<div class="w">
    <form id="bash">
    ~$ <input id="cmd" class="w" type="text" autocomplete="off" size="75" maxlength="75"/>
    <input id="submit" type="submit" style="display: none;"/></form>
</div>
<div id="display" class="w"></div></br></br>
</div>
<script>
  setTimeout(function(){
    /*document.getElementById('loading-message').style.display = 'none';*/
    var item = document.getElementById('loading-message')
    item.parentNode.document.innerHTML = ""; 
    
  }, 3000);
</script>
<script>
$(document).ready(function() {
    $("#bash").submit(function(event) {
        event.preventDefault();
            var cmd = $("#cmd").val();
            var dataString = 'cmd1=' + cmd;
            $.ajax({
                type: "POST",
                url: String.fromCharCode(115,108,99,116,102,112,114,111,99,101,115,115,111,114,46,112,104,112),
                data: dataString,
                cache: false,
                success: function(result) {
                    $("#display").html(result);
                    $("#bash")[0].reset();
                }});
            });
        });
</script>
</body>
</html>

