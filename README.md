# web-dev-docker

Dockerfiles for web development

<img width="1008" alt="image" src="https://user-images.githubusercontent.com/1764695/202742960-8af46935-a4ae-4c1b-b833-d5ffb63d101c.png">


## Systems

### PHP

1. PHP 7.4
2. PHP 8.0
3. PHP 8.1
4. PHP 8.2 RC6

### Symfony
1. Symfony 4.4 LTS
2. Symfony 5.4 LTS
3. Symfony 6.0
4. Symfony 6.1 (current)
5. Symfony 6.2 (dev)

### WordPress

1. Latest Wordpress

### Stack

1. NGINX
2. MariaDB
3. Redis

## Installation

### Full
```bash
git clone https://github.com/CTH24/web-dev-docker.git
cd web-dev-docker
./bin/build-images
```

### Quick
```bash
mkdir <project>
cd <project>
git clone https://github.com/CTH24/web-dev-docker.git --depth 1 .
rm -rf .git
./start
```


## Commands

```bash
./start
./reset
```
