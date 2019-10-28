 # kit-starter-symfony4-lamp-docker
 Symfony 4 on LAMP and Docker starter application

## Create docker-machine instance in Linux:
1. cd to root directory of the project but different from /home as linux uses it e.g /home/current_user
```
cd /home/rafal
```
2. Export VIRTUALBOX_SHARE_FOLDER
```
export VIRTUALBOX_SHARE_FOLDER="$PWD:$PWD"
```
3. Create docker-machine
```
docker-machine create -d virtualbox kit-starter-lamp-docker
```
4.
```
eval "$(docker-machine env kit-starter-lamp-docker)"
```

## Create docker-machine instance in Windows:
1. Create docker-machine using specifig boot2docker.iso
```
docker-machine create -d virtualbox --virtualbox-boot2docker-url https://github.com/boot2docker/boot2docker/releases/download/v18.09.8/boot2docker.iso kit-starter-lamp-docker
```
2.
```
eval "$(docker-machine env kit-starter-lamp-docker)"
```

## Add current unix user to docker group
1. Create the docker group
```
sudo groupadd docker
```
2. Add your user to the docker group.
```   
sudo usermod -aG docker $USER
```
3. Log out and log back in so that your group membership is re-evaluated. 
   If testing on a virtual machine, it may be necessary to restart the virtual machine for changes to take effect.
   On a desktop Linux environment such as X Windows, log out of your session completely and then log back in.
   On Linux, you can also run the following command to activate the changes to groups:
```
newgrp docker 
```
4. Verify that you can run docker commands without sudo.
```
docker run hello-world
```

 ## Start service in CLI:
 ```
docker-machine start kit-starter-lamp-docker
docker-compose -f /home/rafal/PhpstormProjects/kit-starter-lamp-docker/docker-compose.yml up -d --build
```
 
 ## Check the docker-machine IP and run the project in Browser:
 ```
 docker-machine ls
 ```
 
