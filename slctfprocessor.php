<?php
ob_start();

/* Initialize */
$cmd = htmlentities($_REQUEST['cmd1']);
$cmd = strtolower("$cmd");
$badword = file_get_contents("badwords.txt");
$badword = explode("\r\n", $badword);

/* Logging */
$filename = "cmd.log";
$userid = htmlentities($_COOKIE["slctf"]);
$filecontent = "$userid :: $cmd\r\n";
file_put_contents($filename, $filecontent, FILE_APPEND);

/* Functions */
function startsWith ($string, $startString){ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
}
function endsWith($string, $endString){ 
    $len = strlen($endString); 
    if ($len == 0) { 
        return true; 
    } 
    return (substr($string, -$len) === $endString); 
}
if (!isset($_COOKIE["user"])) {
        setcookie("user", "user", time() + (86400 * 7), "/");
    }
elseif ($_COOKIE["user"] === htmlentities("root") || htmlentities("research") || htmlentities("42")){
        //do nothing
    }

/* Switch cases */

switch ($cmd) {
    case endsWith($cmd, ";"):
    case startsWith($cmd, "\\");
        echo "~\$$cmd</br>";
        echo "Clever but no...</br>";
        break;

    case startsWith($cmd, "eval"):
    case startsWith($cmd, "echo"):
    case startsWith($cmd, "phpinfo"):
        echo "~\$$cmd</br>";
        echo "haha no...</br>";
        break;

    case in_array($cmd, $badword):
    case "ah ah ah":
        echo "<img src=\"not_cool.gif\"></br>";
        echo "ah ah ah...";
        echo "</br>";
        break;

    case "hi":
        echo "~\$$cmd</br>";
        echo "Oh Hi Mark!";
        echo "</br>";
        break;
    
    case "help":
        echo "~\$$cmd</br>";
        echo "Welcome to the SiteLock Research 2019 CTF (Capture The Flag) challenge to celebrate the Research Team Open House.</br></br>
        
        Ahead you will find challenges of varying difficulty, but keep your <span style=\"font-weight:bold;\" class=\"eye glow\">eyes</span> on the prize.</br></br>
        There are clues everywhere.</br></br>
        ----------------------------------</br>
        </br>
        \"So what is all this?\"</br>
        I'm glad you asked.  This is an interactive challenge that can win you prizes.  What else do you need to know?</br></br>

        \"No, Like what am I supposed to do?\"</br>
        You'll get questions and provide answers.  Each correct answer will get you a key.</br></br>

        \"What are keys?\"</br>
        A key is a hidden bit of text that you will submit to Research, once you have enough you will get an entry into a raffle.</br>
        For each tier of the challenge you complete, you will receive an entry in the prize drawing.  Each entry earns you a chance to win!  
        Even if you can only solve one, you could still win.</br></br>

        Helpful tips:</br>
        Don't be afraid to use online resources.</br>
        If you've identified the type of decoding that needs to be done, there's nothing wrong with finding an online decoder for it.</br>
        Google it!</br>
        If you see a keyword you don't recognize, try to learn more about it. It's what we do in Research every day.</br>
        If you decode something and it still doesn't look right, maybe there are still extra steps to perform on the new code you've found.</br></br>

        \"Where do I send the keys once I find them?\"</br>
        To this Google Form: <a class=\"w\" target=\"_blank\" href=\"https://forms.gle/qUKK9ga7PEKzFJLZ9\">Submission Form</a></br></br>
    
        KEY: This is what a keys looks like = <span style=\"font-weight:bold;\" class=\"lock lock-glow\">slctf[xxxxxxxx]</span><br><br><br>

        To get started type the command ~\$tier1-start</br></br>

        ----------------------------------<br>
        TOOLS: The following are tools that might be handy.</br>
        <a class=\"w\" href=\"https://morsecode.scphillips.com/translator.html\">Morse Code Translator</a></br>
        <a class=\"w\" href=\"https://www.base64decode.net/\">Base64 decoder</a></br>
        <a class=\"w\" href=\"https://lingojam.com/BinaryEncoder&Decoder\">Binary decoder</a></br>
        <a class=\"w\" href=\"https://www.asciitohex.com/\">Multi decoder</a></br>
        <a class=\"w\" href=\"https://gchq.github.io/CyberChef/\">Cyber Chef</a></br></br>";
        break;

//Tier 1
    case "tier1-start":
        echo "~\$$cmd</br>";
        echo "----------------------------------<br>";
        echo "Let's start out easy.</br>What is one of the ip addresses of sitelock.com?</br></br>";
        echo "Type the answer as the next command. It might be helpful to write down your answers just in case.</br>";
        echo "----------------------------------<br>";
        break;
    
    case "45.60.12.54":
    case "45.60.102.54":
        echo "~\$$cmd</br>";
        echo "----------------------------------<br>";
        echo "Good Job, here is the key <span style=\"font-weight:bold;\" class=\"key lock-glow\">slctf[VmxWb2]</span></br>";
        echo "For the next question use command ~\$t1q2</br>";
        echo "----------------------------------<br>";
        break;
    
    case "t1q2":
        echo "~\$$cmd</br>";
        echo "----------------------------------<br>";
        echo "What is the number 1 OWASP top 10 vulnerability?</br></br>";
        echo "Type the answer as the next command.</br>";
        echo "----------------------------------<br>";
        break;
    
    case "injection":
        echo "~\$$cmd</br>";
        echo "----------------------------------<br>";
        echo "Good Job, here is the key <span style=\"font-weight:bold;\" class=\"key lock-glow\">slctf[EyUlhS]</span></br>";
        echo "For the next question use command ~\$t1qiii</br>";
        echo "----------------------------------<br>";
        break;

    case "t1qiii":
        echo "~\$$cmd</br>";
        echo "----------------------------------<br>";
        echo "What is the word used to describe a weakness or bug of a system through which intruders can attack?</br></br>";
        echo "Type the answer as the next command.</br>";
        echo "----------------------------------<br>";
        break;

    case "vulnerability":
        echo "~\$$cmd</br>";
        echo "Good Job, here is the key <span style=\"font-weight:bold;\" class=\"key lock-glow\">slctf[bGhPVn]</span></br></br>";
        echo "Congratulations, You hav finished Tier 1 of the CTF. Submit the three keys you've found to be entered into the drawing.</br>";
        echo "<a class=\"w\" target=\"_blank\" href=\"https://forms.gle/qUKK9ga7PEKzFJLZ9\">Submission Form</a></br></br>";
        echo "Now for the real challenge, Tier2. Use command ~\$t2q01";
        echo "</br>";
        break;

//Tier 2 Question 1
    case "t2q01":
        echo "~\$$cmd</br>";
        echo "----------------------------------<br>";
        echo "CHALLENGE:\"Et tu, Brute.\"</br></br>";
        echo "Gur svefg bar vf nyjnlf rnfl.</br>Gur pbzznaq sbe gur arkg punyyratr vf ~\$g2dav</br></br>";
        echo "----------------------------------<br>";
        echo "For a hint you can use the command ~\$t2q1hint1</br>";
        break;
        
    case "t2q1hint1":
        echo "~\$$cmd</br>";
        echo "HINT1: Find the name of the person who first uttered the title of this challenge. His name is the type of cipher used here.</br></br>";
        echo "For another hint you can use the command ~\$t2q1hint2</br>";
        break;

    case "t2q1hint2":
        echo "~\$$cmd</br>";
        echo "HINT 2: There's a specific implementation of the Caesar Cipher used commonly in malware obfuscation. It even has a built-in PHP function.</br></br>";
        echo "For another hint you can use the command ~\$t2q1hint3</br>";
        break;

    case "t2q1hint3":
        echo "~\$$cmd</br>";
        echo "HINT 3: Looks like each character is rotated halfway through the alphabet. How many characters makes up half of the alphabet?</br></br>";
        echo "No more hints. Good Luck.</br>";
        break;

//Tier 2 Question 2

    case "t2qni":
        echo "~\$$cmd</br>";
        echo "Excellent: <span style=\"font-weight:bold;\" class=\"key lock-glow\">slctf[pWS1Uw]</span></br>";
        echo "----------------------------------<br>";
        echo "CHALLENGE:\"A different sort of rotation.\"</br></br>";
        echo "==AVoFGdgU2cjVGbhRXZkBSc1l2YrxWeuogTlhHdgM2bt1WYuRGI+RCdyEHZyVWa</br></br>";
        echo "----------------------------------<br>";
        echo "For a hint you can use the command ~\$t2qnihint1</br>";
        break;

    case "t2qnihint1":
        echo "~\$$cmd</br>";
        echo "HINT 1: This challenge will require multiple steps to decode.</br></br>";
        echo "For another hint you can use the command ~\$t2qnihint2</br>";
        break;

    case "t2qnihint2":
        echo "~\$$cmd</br>";
        echo "HINT 2: This guy has 64 of something that may help you.</br></br>";
        echo "For another hint you can use the command ~\$t2qnihint3</br>";
        break;

    case "t2qnihint3":
        echo "~\$$cmd</br>";
        echo "HINT 3: Where do equals signs in base64-encoded strings usually go?</br></br>";
        echo "No more hints. Good Luck.</br>";
        break;

//Tier 2 Question 3

    case "t2qdrei":
        echo "~\$$cmd</br>";
        echo "Excellent: <span style=\"font-weight:bold;\" class=\"key lock-glow\">slctf[WktkbG]</span></br>";
        echo "----------------------------------<br>";
        echo "CHALLENGE:\"What's the Password?\"</br></br>";
        echo "66 65 66 63 66 70 66 146 62 60 66 67 67 141 66 71 66 145 66 66 66 143 66 61 67 64 66 65 62 70 66 62 66 61 67 63 66 65 63 66 63 64 65 146 66 64 66 65 66 63 66 146 66 64 66 65 62 70 62 62 64 63 63 70 66 143 64 71 65 66 65 63 66 70 64 71 64 143 64 63 63 64 67 65 67 141 67 71 63 71 64 142 65 65 66 63 66 67 67 63 65 66 66 142 66 141 64 144 64 142 65 65 62 142 67 63 64 143 64 66 65 141 65 61 67 61 66 143 64 144 64 62 64 63 63 66 65 66 66 143 64 66 66 144 66 63 66 146 64 61 65 61 64 61 63 144 62 62 62 71 62 71 63 142</br>";
        echo "----------------------------------<br>";
        echo "For a hint you can use the command ~\$t2qdreihint1</br>";
        break;

    case "t2qdreihint1":
        echo "~\$$cmd</br>";
        echo "HINT 1: Just like before, this challenge requires multiple steps. There's more variety in the types of operations performed now, too.</br></br>";
        echo "For another hint you can use the command ~\$t2qdreihint2</br>";
        break;

    case "t2qdreihint2":
        echo "~\$$cmd</br>";
        echo "HINT 2: It's dangerous to go alone. Take <a target=\"_blank\" href=\"https://simple.wikipedia.org/wiki/Computer_numbering_formats\">this</a>. Various number formats can be converted to text easily online, but which formats are being used here?</br></br>";
        echo "For another hint you can use the command ~\$t2qdreihint3</br>";
        break;

    case "t2qdreihint3":
        echo "~\$$cmd</br>";
        echo "HINT 3: Once you've gotten through the hex and octal decoding, the final step of the process closely resembles a type of obfuscation we see very commonly in our industry. There are probably several tools online to decode it. Or, if you have a way to parse PHP yourself, that would work as well.</br></br>Also, the literal output of the code won't necessarily be the password this time.</br></br>";
        echo "No more hints. Good Luck.</br>";
        break;

//Tier 3

    case "swordfish":
        echo "~\$$cmd</br>";
        echo "Excellent: <span style=\"font-weight:bold;\" class=\"key lock-glow\">slctf[RzVGtO]</span></br></br>";
        echo "Good job on completing the tier 2 challenges.</br>Don't forget to submit your keys to research.</br>";
        echo "<a class=\"w\" target=\"_blank\" href=\"https://forms.gle/qUKK9ga7PEKzFJLZ9\">Submission Form</a></br></br>";
        echo "Now if you're feeling confident see if you can find all 3 of the hidden keys.</br>Each hidden key will get you an additinoal entry into the raffle.</br></br>";
        echo "Tier 3....<a class=\"w\" target=\"_blank\" href=\"https://twitter.com/numberstation42\">Number Station 42</a></br>";
        break;

    case startsWith($cmd, "ls"):
    case "tree":
    case "ll":
    case "file":
    case "files":
        echo "~\$$cmd</br>";
        echo"└─root</br>
            &ensp;&ensp;└─home</br>
            &ensp;&ensp;&ensp;&ensp;├─research</br>            
            &ensp;&ensp;&ensp;&ensp;└─user";
        echo "</br>";
        break;

    case startsWith($cmd, "cd"):
        echo "~\$$cmd</br>";

        echo "You're stuck here. Finde another way.</br>";
        break;

    case "research":
        echo "~\$$cmd</br>";
        echo "Your humble host for this capture the flag event.<br>If asked nicely they may offer a hint or a cookie.</br>";
        break;
    
    case startsWith($cmd, "who"):
        echo "~\$$cmd</br>";
        if ($_COOKIE["user"] === "root"){
            echo $_COOKIE["user"];
            echo "</br>";
            echo "<span style=\"font-weight:bold;\" class=\"key lock-glow\">slctf[a1JteF]</span></br>";
        }
        elseif ($_COOKIE["user"] === "research"){
            echo $_COOKIE["user"];
            echo "</br>";
            echo "Clever, Clever! Have you checked your cookies?<br>";
            echo "Cookies are the answer to life the universe and everything</br>";
        }
        elseif ($_COOKIE["user"] === "42"){
            echo "<span style=\"font-weight:bold; font-size:25px;\" class=\"lock lock-glow\">42</span></br>";
            echo "</br>";
            echo "You Win Tier 3!!!</br>";
            echo "<span style=\"font-weight:bold;\" class=\"key lock-glow\">slctf[1Eaz0=]</span></br>";
        }
        else {
            echo $_COOKIE["user"];
            echo "</br>";
        }
        break;
    
    case "pwd":
    case "directory":
        echo "~\$$cmd</br>";
        if ($_COOKIE["user"] === "root"){
            echo "/";
        }
        elseif ($_COOKIE["user"] === "research"){
            echo "/home/research";
        }
        elseif ($_COOKIE["user"] === "42"){
            echo "/deep_thought";
        }
        else {
            echo "/home/user";
        }
        break;
    
    case "binarykey":
    case "binary key":
        echo "~\$$cmd</br>";
        echo "<span style=\"font-weight:bold;\" class=\"key lock-glow\">slctf[laVWhD]</span></br>";
        echo "{next clue}";
        echo "</br>";
        break;
    
    case "sudo":
    case "sudo su -":
    case "sudo su":
    case "sudo su-":
    case "root":
        $cookie_name = "user";
        $cookie_value = "root";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
        echo "~\$$cmd</br>";
        echo "User changed";
        echo "</br>";
        break;

    case "sudo research":
    case "sudo su - research":
    case "sudo su research":
    case "sudo su- research":
        $cookie_name = "user";
        $cookie_value = "research";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
        echo "~\$$cmd</br>";
        echo "User changed";
        echo "</br>";
        break;

    case "sudo user":
    case "sudo su - user":
    case "sudo su user":
    case "sudo su- user":
    case "user":
        $cookie_name = "user";
        $cookie_value = "user";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
        echo "~\$$cmd</br>";
        echo "User changed";
        echo "</br>";
        break;

    case "cookie":
        echo "~\$$cmd</br>";
        echo $_COOKIE["user"];
        echo "</br>";
        break;
    
    case "eyebinary":
    case "eyes":
        echo "~\$$cmd</br>";
        echo "01100101 01111001 01100101 01110011 00100000 01100110 01110101 01101100 01101100 00100000 01101111 01100110 00100000 01101011 01100101 01111001 01110011 00100000 01111110 00100100 01100010 01101001 01101110 01100001 01110010 01111001 01101011 01100101 01111001";
        echo "</br>";
        break;
    
    case "top":
    case "htop":
        echo "~\$$cmd</br>";
        echo ("<pre class=\"lg\" style=\"font-size:75%; line-height:110%; display:block;\">".file_get_contents("top.txt")."</pre>");
        echo "</br>";
        break;
    
    case "reset":
    case "home":
        break;

    case "42";
        echo "~\$$cmd</br></br>";
        echo "<span style=\"font-weight:bold; font-size:25px;\" class=\"lock lock-glow\">42</span></br>";
        echo "The answer to life the universe and everything.<br>";
        echo "Cookies are also the answer to life the universe and everything.";
        echo "</br>";
        break;

    case startsWith($cmd, "cat"):
    case startsWith($cmd, "less"):
    case startsWith($cmd, "vim"):
    case startsWith($cmd, "head"):
    case startsWith($cmd, "tail"):
    case startsWith($cmd, "more"):
        echo "~\$$cmd</br>";    
        if ($_COOKIE["user"] === "user"){
            echo "Command Not Allowed.</br>";
        }
        elseif ($_COOKIE["user"] === "research" || $_COOKIE["user"] === "root"){
            echo "Command Still Not Allowed.</br>";
        }
        break;

    default:
        echo "~\$$cmd</br>";
        echo "Command \"$cmd\" Not Recognized";
        echo "</br>";
        break;
}
