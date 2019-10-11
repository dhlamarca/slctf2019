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
}
pre, input {
  font-family:TopazPlus-a1200;
  font-size:16px;
  font-weight:normal;
  color:#00b600;
  line-height: 16px;
  margin: 0; padding: 0;
  margin-bottom: 1px;
}
br {
  
}
.g {color:#007700}
.lg {color:#00b600}
.w {color:#00ff00}
.by {color:#0c1d12}

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
  padding:16px 8px 16px 8px;
  animation: textShadow 1.033s infinite;
  max-width:440px;
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

    </style>
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
    </script>
    
  </head>
<body onclick="document.forms[0].cmd.focus()">
    <?php
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
    ?>
<div class="scanlines"></div>
<div class="scanline"></div>
<div class="flicker"></div>
<div class="body">
    <pre>
     <span class="lg">
        <span style="display:block;line-height:10px; font-size: 10px; font-weight:bold; font-family: monospace, monospace;">
                           .;c:,;;;;;;;;,;;;;;,;,,.
                      .....,lkxloooloooolooooolol:,.....
                     ..:l:::loolooololodldoooolooooolll..
                 .';;,;locccllllooololooldoddoloooddooo;,,,';.
               ...;xdoddolcclllloolclclololddoloooddooddool,o:.
               :lcldolodolllolcclllccclololdoollllooooooooolllc'.
           ..,,cololcclllccclc;:ccl:c:clcllooccc:clollolccc:cc:''''
          .::cllololcccllccclc;;::c:l::lloloolcc;clolloc:;;;;:;:lc;...
        .cc::::loloc:;:::cc:ccc:cc::l;,cloloooc:::col::,'',,,::clc:::...
       ',ll::c:llclc:;;;;;:;::::c:;:l:;::c:ccccc:cclc::::ccclolllllll,'.
       ldolllccclclc:;;;;;:;;;::c:::l:;;;:::cccolloolldolooodolllolllll.
     .;dddoloc:clll;',;;;:;'',;:lcccc,':lc;:cccoolol;,oo:;:xdolloooooll,'.
     ,cdddoloc:,,',...........,llcc,...',.'cclcll:;'..'.. .:;;;looooooo::.
    .loooollll:.             .;oc:c.      .lllc;l:.          ..:ooooooolc.
   ',lllllllc'.               .,ccl.      .ccl; ..             ..,lxdloc:;;.
   .,lllllc;,.                 'ccl,       ';l,                  .;xdoolc::'..
   .'cccll:                    ':;c;.      .lx'                    cololc,',,..
  .,;::'':;                  ..,c...        ,dc:,                  :o,:dc;;...
  .:::c::c;              ....',;c'          .:ld;.'                ;c,:olcl,.   
  .;;;:c:c:             .:c;;;,;c'.          .d0::x,               ;lclooll..
  .,,;:::c:        ..,,,,;:,,,,..             'dccdo:::;,',::.     ;lclolll,..
 ..'';;::c:......',;cl:cc::,,,,.       ...    .lcloollolccodo,'....:ccllccl:;.
.;;'',,cccccc:;:::cccllllll:;,;.      ;c;.    .olloollooloooooooooollcl:,:cc:.
.;;,;c;;:c:cc:;:::cccloc::cllcc;;'',;;ll,;,,,;:olodoloooloooddoodollccl:;:c::.
.;;,:o:,;:;:c:;::::cccc:;;;clc:cl:;:lccl:lccllclcloollooooolooololccccl;,::cc..
.,,;:::;;:::cc::;::cccc:;lcclclccllcccoooloodocllcccoooloooddoooolllcl;':lll,,.
.,,,,:;...':;'....,c:coccccccclccclcoloooloddocclcolooolll,,'''',,','''':olc...
.,,',::.  ..          .:;c:clllllcllclcllolllllccoddoc;..        .. ...',coll...
.,,,,::,:,.          :;clllocc:::ccc:::clclcloolllooccoodl.           .:dlcol:.
.,;;,;;,:l,....      .'clcl::,,;::c;,,:c:lclllcccloolll,'      .''''',cllllc:..
.,,;;:::clcccc;      .'clcl;,,,;:cl::;:c:lc:clc::loolol''.     ;lolllllllcc:,..
  .;,,,:cc:lc,;.     coolcc:;,,;:cc:::ccclccc::ccloolllll.     ;:lollcl:;;;..
  ...',::c:::;;...   :lllcc;;,';:;,,,;:;,;,,:;::lolcllol......clccclcc;;,....
     ',;:cc::c:,c' .'loollloooo;;@@@@@@@@@@@@@;llool':;..;oo::cccccc.
     ',;::::ccccl;..'ddolll;:c;@@@@@@@@@@@@@@@@@;llooc... .cd;,,;;;:cc.
     .',,;;:ccc:l:..,ldolo:;,;@@@@@@        @@@@@@;,:odc',. .ld;;;:ccl::..
     .',',,;::::l:',;co;;;;;;@@@@@,           @@@@@;;;;;o; .okooololo';:..
       ...,::::::. ..':;@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@;;... :olool,..'...
         ..ccc:c:    .,;@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@;'.   :cldoo'....
           ;:c:::      ;@@@@@@@@@@@@@@@@@@@@@@@###@@@@@;     cllooo...
         ..;::::;      ;@@@@@                ######@@@@;     colooo,.. 
         ..:::;,'      ;@@@@@               #####*@@@@@;    .ldoddo,,'.
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
                 .colcccooclcldl:ooololooclcl:olccccllclccclo...
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
     </span> 
    </pre>
<br/>
<div class="w">
    <form id="bash">
    ~$ <input id="cmd" type="text" autocomplete="off" />
    <input id="submit" type="submit" style="display: none;"/></form>
</div>
<div id="display" class="lg"></div></br></br>
</div>

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

