## GitHubby

Githubby connects to your github account using OAuth. Once authenticated you'll be displayed a random reposity you have access to along with the last 3 commit messages. 

### Requirements

+ Vagrant 1.8.5
+ VirtualBox >=4.3.336 

Note: The application uses local file storage as cache please make sure the storage folder is writable. 

### Setup

1 .`git clone https://github.com/peterlehto/githubby.git`

2. `composer install`

3. `create .env`

4. `php vendor/bin/homestead make`

5. `vagrant up`

6. `http://localhost:7777/`


#### .env example 

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=WfI3OSymWly1Tagcs7U8yXqu1gpqPDNv

DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

```