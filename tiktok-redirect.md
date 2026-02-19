# Redirect Vulnerability
Tiktok allows for open redirect, which allows a user to control a redirect to another URL. An attacker could supply a URL that redirects a victim from tiktok to their phishing site. One could argue it's not technically a vulnerability, but it can be taken advantage of.

# Let's exploit it
## Explanation
We are going take advantage of the redirect to create a more convincing phishing campaign. Once the link is finished, the means of getting it to the user is based on circumstance. Tech illeterate people will ignore any suspicious text in the url as long as it says tiktok as the domain.

## Create php for password harvesting
1. Have ai do it for you

## Create html
1. Copy the html of the tiktok login page, or have ai make it for you.
2. Point the html login to your php file

## Host fake website online
1. Go to localhost.run
2. Copy the command given in terminal
3. Spin up php server with php -S localhost:80
4. Visit given url and see that no alert page is shown

   
