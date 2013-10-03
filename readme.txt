
Database
    mysql
    Design Client table from registration, include IP etc
    table for model use 
    table for client billing { date billed, amount , other stats such as total capital, rates etc. }
    
RESTful interface 
    select REST framework
    get json of client data 
    get json of model use
    set model use using json

    unregister client
    register client

    backup database?

    test suites

CSS / Less
    Using ZURB framework.
    Less (Lesscss.org either js or php compilers or both) conversion of CSS
    see http://stackoverflow.com/questions/8477025/setting-up-new-framework-based-projects-and-using-less/8891928#8891928
    before proceeding

    Pull common colors etc to top

Deployment Testing
    Initially site will deploy to OSX server at out site and have CDN projection from CloudFlare.  When site is close to release you will
    use CloudFlare to deploy and test in that environment.

    Apache / php 5.3+ / mysql 

    
