# ip-tools
Automatically exported from code.google.com/p/ip-tools

A simple PHP website that provides basic TCP/IP diagnostic utilities such as ping, traceroute, TCP port scan, and browser IP and user agent information.

I created this project during the summer of 2014 to familiarize myself with web programing using HTML, PHP and CSS. I originally hosted this on a Ubuntu DigitalOcean VPS running NGINX.
**Note:** DigitalOcean did not support IPv6 at the time this web application was being developed. 

**Note:** The image files for this site have appeared to have been lost.

### Docker Usage

1.) Pull [stenote's](https://hub.docker.com/r/stenote/docker-lemp/) lemp Docker image:
- `docker pull stenote/docker-lemp`

2.) Run the container
- `docker run -d --name=lemp -v ${PWD}:/var/www/ -p 9999:80 stenote/docker-lemp:latest`

3.) Open in a web browser
- `localhost:9999`
