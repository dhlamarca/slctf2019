<?php
/* Template
    echo "$cmd";
    echo "</br></br>";
    
    [your content]
    
    echo "</br></br>";
    break;


Final key for each challenge should be formatted as "slctf[blank]" and I will breakup and input the final key parts.
*/

$cmd = htmlspecialchars($_REQUEST['cmd1']);
switch ($cmd) {
    
    case "help":
        echo "$cmd";
        echo "</br></br>";
        echo "Welcome to the SiteLock Research Open House 2019 CTF (Capture The Flag) challenge.<br>
        Upon sucessful completion of this trial you will win a prize and enter to win a raffle.<br>
        There will be various difficult challenges ahead of you but keep your <span style=\"font-weight:bold; font-size:18px;\">eyes</span> on the prize and victory may be yours.<br>
        There are clues everywhere. Leave no byte undecoded.<br><br>
        ----------------------------------<br>
        <br>
        ADDESS: <a class=\"w\" href=\"http://passion8cheese.com\">passion8cheese.com/slctf2019</a><br>
        PRIZE: [TBD]<br><br>
    
        TARGET: Collect all the keys and crack the final puzzle to find the code word and enter the winners circle.<br><br>
        Helpful note: all commands entered will be lowercase.<br><br>";
        break;

    case "ls":
    case "tree":
    case "ll":
        echo "$cmd";
        echo "</br></br>";
        echo"└─.root</br>&ensp;&ensp;&ensp;└─folder</br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;└─secretFile";
        echo "</br></br>";
        break;

    case "research":
        echo "$cmd";
        echo "</br></br>";
        echo "Your humble host for this capture the flag event.<br>If asked nicely they may offer a hint or guidance for helpful decoding tools. The magic word is \"Honey Pot\"";
        echo "</br></br>";
        break;
    
    case "whoami":
        echo "$cmd";
        echo "</br></br>";
        echo "research";
        echo "</br></br>";
        break;
    
    case "pwd":
        echo "$cmd";
        echo "</br></br>";
        echo "/root";
        echo "</br></br>";
        break;
    
    case "binarykey":
        echo "$cmd";
        echo "</br></br>";
        echo "slctf[xxxxxxxxx]</br>";
        echo "{next clue}";
        echo "</br></br>";
        break;
    default:
        echo "Command not recognized";
}
