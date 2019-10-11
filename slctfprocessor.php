<?php

$cmd = $_POST['cmd1'];
if ($cmd == "help"){
    echo "$cmd";
    echo "</br></br>";
    echo "This is the SiteLock Research Open House 2019 CTF (Capture The Flag) challenge. If you complete it you can get a prize!<br>
This guide will help you to understand the basics of how this works and how to collect the clues needed.<br><br>
----------------------------------<br>
THE CHALLENGE<br><br>

ADDESS: <a class=\"w\" href=\"http://passion8cheese.com\">passion8cheese.com/slctf2019.php</a><br>
PRIZE: [TBD]<br><br>

TARGET: Collect 5 strings and crack them to find the code word, then [TBD] to collect the prize and /join #solved [codeword] to enter a secret slack channel and discuss with the other winners.<br><br>";
}

elseif($cmd === "ls"){
    echo "$cmd";
    echo "</br></br>";
    echo"└─.root</br>&ensp;&ensp;&ensp;└─folder</br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;└─secretFile";
}

elseif($cmd ==="echo"){
    echo "$cmd";
    echo "</br></br>";
}
else {
    echo "Command not recognized";
}
?>
