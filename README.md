# Setup

Install & Setup Homestead:
https://laravel.com/docs/8.x/homestead

Add to /etc/hosts file

    192.168.10.10 lob.test

Update Homestead.yaml with folders, sites, databases, and mysql8 feature

    ---
    ip: "192.168.10.10"
    memory: 2048
    cpus: 2
    provider: virtualbox
    
    authorize: ~/.ssh/id_rsa.pub
    
    keys:
    - ~/.ssh/id_rsa
    
    folders:
    - map: ~/code
    to: /home/vagrant/code
    - map: ~/Documents/Lob/1-take-home/address
    to: /home/vagrant/lob
    
    sites:
    - map: homestead.test
    to: /home/vagrant/code/public
    - map: lob.test
    to: /home/vagrant/lob/public
    
    databases:
    - homestead
    - lob
    
    features:
    - mariadb: false
    - mysql8: true
    - ohmyzsh: false
    - webdriver: false

Start vagrant

    vagrant up

TODO:
    Unit Tests
    Require filters to not be empty
    Pagination    

Productionize:

    Authentication
    Docker container
    Helm chart
    SQL database w/ Elastic Search
