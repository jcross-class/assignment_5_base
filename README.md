Assignment 5
============

Purpose
-------
* Learn how cookies and PHP sessions work.
* Use PHP sessions as part of a simple PHP program.
* Use twig to render the HTML output from a PHP program.
* Review the basics of using HTML forms and PHP together
* Review how to embed PHP in HTML
* Review using git and github.com

Collaboration
-------------
You can talk about the assignment with your peers in the class.  However, you should perform the work yourself and turn in a copy of your work.

Prerequisites
-------------
Nothing new.  You will use git and PhpStorm for this assignment.

Use git to clone your private assignment 5 repo to your computer.  Then in PhpStorm, use File->Open Directory and select your local repo.

You will be using the web server built into PhpStorm.  For any file you want to open in a web browser, right click on the editor window and select Open in Browser and then select the browser you want to use, or Default.  The file you are editing will then open in your web browser.

After opening your repo in PhpStorm, the first time you run a PHP program it will ask you to select your PHP interpreter.  When running PHP in your web browser, you will receive the error `502 Bad Gateway`.  Go back to PhpStorm.  There should be a pop-up box in the top right of the window that says:

    PHP interpreter is not configure
    Please configure PHP interpreter to use built-in web server

Click on the link "configure PHP interpreter" link.  A window will pop-up.  Click on the interpreter drop-down menu and select the version of PHP you want to use.  Then hit ok.  Your PHP program should now work in your web browser.

Resources and Examples
----------------------
* The official twig [documentation](http://twig.sensiolabs.org/documentation).
* The official PHP.net [documentation](http://php.net/manual/en/features.cookies.php) for cookies in PHP.
* The official PHP.net [documentation](http://php.net/manual/en/features.sessions.php) for sessions in PHP.
* The PHP scripts in the examples directory of you repo.
* w3schools.com has a good basic overview of HTML forms [here](http://www.w3schools.com/html/html_forms.asp).


Instructions
------------
There are 2 parts to this assignment.

### Part 1
From PhpStorm, open `examples/cookies_sessions_example.php` in your web browser.

The output from  `cookies_sessions_example.php` is broken down into 4 sections:
* Test Cookies and Sessions: Allows you to control the actions taken on cookies and sessions.
* Messages: Reports the action the PHP script took.
* Cookies Sent by Browser: The cookies the browser sent to the PHP script.
* PHP Session Data: The session data the PHP script had access to when it rendered the page.

Next, open the developer tools built into your web browser and go to the network section.  You will need to look at the request and response headers.  Here are links on how to do that for [Firefox](https://developer.mozilla.org/en-US/docs/Tools/Network_Monitor) and [Chrome](http://stackoverflow.com/questions/4423061/view-http-headers-in-google-chrome).

With the developer network tools open, fill in:
* First Name
* Last Name
* Age
* Gender
* Select Set Cookie.

Then go through the following steps:
1. Hit submit.
* Look at the response headers.  You should see Set-Cookie= followed by the data you entered.
* Take a screen shot of the headers or copy/paste them into a document. (Label it response-headers.)
* Make sure that Do Nothing is selected for Cookie Action.  Then hit submit.
* Look at the request headers.  You should see Cookie= followed by the data you entered.
* Take a screen shot of the headers or copy/paste them into a document.  (Label it request-headers.)

Answer the following questions by experimenting with the form and/or looking at the source code:
1. Which is available to the PHP script immediately after it is set (within the same running script): cookies or sessions?
* When the web browser sends a cookie to the PHP script, and the PHP script deletes the cookie, is the original cookie available to the PHP script still?
* What is the difference between Delete Session and Clear & Delete Session?

#### How to Turn in Part 1
You can turn in part 1 by putting your answer file or files into your git repo or through the D2L dropbox.

### Part 2
You need to finish the program in the `part_2` directory.  It has 5 files in it which have been stubbed out for you:
* `step1_form.html`: The HTML form that sends the user input to PHP.
* `step2_process_form.php`: The PHP script that processes the form and sets the PHP session data.
* `step3_view_session_data.php`: The PHP script the retrieves the stored session data and displays this.
* `step3_view_session_data.twig`: A twig template used to render the HTML output for `step3_view_session_data.php`.
* `delete_session_data.php`: A PHP script that will delete the stored PHP session data.

You need to complete all the files except for `delete_session_data.php`.  Each file starts out working enough that you can go through the whole process and see how it works for First Name.

There is a twig example that shows you what you need to know to finish the twig template:
http://twigfiddle.com/pr3mk1

To see how to use twig and PHP together, look at the files:
* `examples/twig_example.php`
* `examples/twig_example_template.twig`

#### How to Turn in Part 2
You need to clone your private git repo for assignment 5 to your computer and make the required changes.  Once you are done, commit your modifications to your master branch and push them to GitHub.  Then go to D2L and turn in the assignment to let me know I can go look at your repo and grade you.  D2L requires you to upload a file, so just upload a blank file or one with a link to your git repo in github.

Grading
-------
Points|Part|Requirement
------|------------
2 | 1 | response-headers
2 | 1 | request-headers
2 | 1 | Question 1
2 | 1 | Question 2
2 | 1 | Question 3
3 | 2 | `step1_form.html` - add 3 input fields: Last Name, Age, and Favorite Numbers
5 | 2 | `step2_process_form.php` - fill in 5 `// your code here` sections
3 | 2 | `step3_view_session_data.php` - fill in 3 more session values to pass to twig to render (favorite numbers should be passed as an array)
1 | 2 | `step3_view_session_data.twig` - render first name capitalized using a twig filter
2 | 2 | `step3_view_session_data.twig` - render last name capitalized using a twig filter
1 | 2 | `step3_view_session_data.twig` - render age
2 | 2 | `step3_view_session_data.twig` - render favorite numbers separated by commas using a twig filter
4 | 2 | `step3_view_session_data.twig` - calculate and render the average of the favorite numbers using twig to do the calculation
5 | 2 | Turn in part 2 via github.
**36**| | **Total**
