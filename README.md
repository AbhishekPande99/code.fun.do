code.fun.do
===========

Author: Satyam Kumar Shivam, Vivek Kumar, Abhay Kumar, Ashutosh Kumar
-------

Description
------------

This is a Windows Phone 8 application which updates website content of a given website by taking "server admin id‟, "server admin password‟, "HTML tag id‟ and "content to be updated‟ as input. This application was presented in Microsoft code.fun.do 2014. This apllication uses a local server for processing the input and updating the target website's content as a medium between user's mobile and target website.

This application works as follows:

1. First of all, it fetches the input from user's windows 8 mobile application to the local mediator server.
2. Then, the mediator server fetches the source code of the target website and search for the specified tag whose content is to be updated using HTML DOM.
3. After that, it replaces the content of the specified tag by the the new input content.
4. Finally, the mediator server sends the new source code to the terget website.
5. The target website has now updated content.

This application is able to update the target website at real-time.

Bug
----

1. Updation of website takes some delay around 2-3 minutes.
