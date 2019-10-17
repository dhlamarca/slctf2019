<?php
/* Template
    echo "$cmd";
    echo "</br></br>";
    
    [your content]
    
    echo "</br></br>";
    break;


Final key for each challenge should be formatted as "slctf[blank]" and I will breakup and input the final key parts.
*/

/*idea... GET request process seperately for a challenge*/

$cmd = htmlspecialchars($_REQUEST['cmd1']);
$cmd = strtolower("$cmd");
$filename = "cmd.log";
$userid = htmlspecialchars($_COOKIE["slctf"]);
$filecontent = "$userid :: $cmd\n";
file_put_contents($filename, $filecontent, FILE_APPEND);

switch ($cmd) {
    
    case "hi":
        echo "$cmd";
        echo "</br></br>";
        echo "Oh Hi Mark!";
        break;
    
    case "help":
        echo "$cmd";
        echo "</br></br>";
        echo "Welcome to the SiteLock Research 2019 CTF (Capture The Flag) challenge to celebrate our Open House.<br><br>
        
        Upon sucessful completion of this trial you will win a prize and enter to win a raffle.<br>
        Ahead you will find challenges of varying difficulty but keep your <span style=\"font-weight:bold; class=\"eyes\" font-size:18px;\">eyes</span> on the prize and victory may be yours.<br>
        There are clues everywhere. Leave no byte unexplored.<br><br>
        ----------------------------------<br>
        <br>
        ADDESS: <a class=\"w\" href=\"http://passion8cheese.com\">passion8cheese.com/slctf2019</a><br>
        PRIZE: [TBD]<br><br>
    
        TARGET: Collect all the keys and crack the final puzzle to find the code word and enter the winners circle.<br><br>
        KEY:This is what a keye loooks like = slctf[xxxxxxxx]<br><br>
        
        TOOLS: The following are tools that might be handy.";
        break;

    case "ls":
    case "tree":
    case "ll":
    case "file":
    case "files":
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
    case "who":
    case "who am i":
        echo "$cmd";
        if($_COOKIE["user"] === "root"){
            echo "</br></br>";
            echo "root";
            echo "</br></br>";
        }
        else {
            echo "</br></br>";
            echo "research";
            echo "</br></br>";
        }
        break;
    
    case "pwd":
    case "directory":
        echo "$cmd";
        echo "</br></br>";
        echo "/home/research";
        echo "</br></br>";
        break;
    
    case "binarykey":
    case "binary":
    case "binary key":
        echo "$cmd";
        echo "</br></br>";
        echo "slctf[xxxxxxxxx]</br>";
        echo "{next clue}";
        echo "</br></br>";
        break;
    
    case "sudo":
    case "sudo su -":
    case "sudo su":
    case "sudo su-":
        $cookie_name = "user";
        $cookie_value = "root";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
        echo "$cmd";
        echo "</br></br>";
        echo "User changed";
        echo "</br></br>";
        break;
    
    case "cookie":
        echo "</br></br>";
        echo "$userid";
        echo "</br></br>";
        break;
    
    case "eyebinary":
        echo "</br></br>";
        echo "01100101 01111001 01100101 01110011 00100000 01100110 01110101 01101100 01101100 00100000 01101111 01100110 00100000 01101011 01100101 01111001 01110011 00100000 01111110 00100100 01100010 01101001 01101110 01100001 01110010 01111001 01101011 01100101 01111001";
        echo "</br></br>";
        break;
        
    default:
        //if (!$cmd)
        echo "Command \"$cmd\" not recognized, please try again.";
}
