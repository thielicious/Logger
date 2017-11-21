# Logger
##### Small logger class in which lets you record actions done in a text file.
---

<br>

## INTRODUCTION

**Logger** is a small class which you can use for logging actions in a TXT file.

<br>

## SETUP INFORMATION

Use your CLI and enter the following to clone:<br>
`git clone https://github.com/thielicious/Logger.git`

<br>

## USAGE

Create an object :
```
$log = new Logger("log.txt");
$log->setTimestamp("D M d 'y h.i A");
```

For example, when a user logs in, use it like this to store:<br>
```
if (isset($_POST["logged_in"])) {
    $log->putLog("Successful Login: ".$_SESSION["user_name"]);
}
if (isset($_GET["logout"])) {
    $log->putLog("Logout: ".$_SESSION["user_name"]);
}
```

If you want to see the log, use this:<br>
```
$log->getLog();
```


It will render like this:<br>
```
Sun Jul 02 '17 05.45 PM » Successful Login: JohnDoe
Sun Jul 02 '17 05.46 PM » Logout: JohnDoe
```

<br>

## METHODS

**Logger::__construct(string $filename)**
* Choose a filename to store the log.<br>
<br>

**Logger::setTimestamp(string $format)**
* Use a format for the timestamp eg. `d-m-y h:i:s`.<br>
<br>

**Logger::putLog(string $content)**
* This will store the log in the file.<br>
<br>

**Logger::getLog()**
* To display the content of a log file, simply use this method.<br>
<br>

**Logger::clear()**
* Deletes the log file.<br>

<br>
<br>

###### If you encounter any bugs, feel free to open up an **[issue](https://github.com/thielicious/Logger/issues)**, thank you.

---
**[thielicious.github.io](http://thielicious.github.io)**
