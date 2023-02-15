# Playing Card Distribution

This project is a simple implementation of a playing card distribution system, developed by Na'im Zaid. The system is designed to simulate the distribution of playing cards to a specified number of players. 

## Requirements
- Docker

## Usage

1. Clone this repository to your local machine

```bash 
git clone https://github.com/naimzaid/card-distribution.git
```


2. Change into the newly created directory

```bash
cd Playing-Card-Distribution
```

3. Run the following command to build a Docker image based on the Dockerfile.

```docker
docker build -t my-php-app .
```

Note: The . at the end is important and specifies the build context, which is the current directory.

4. Once the build is complete, run the following command to start a new container based on the image you just built:

```docker
docker run -p 8080:80 -v <your-file-location>:/var/www/html my-php-app
```

5. Open a web browser and navigate to `http://localhost:8080` to view the application.

# Alternatively

You can use a docker-compose.yml file to define and start your container. In your project directory, create a new file called docker-compose.yml with the following code:

```yml
javascript

version: '3'

services:
  web:
    image: my-php-app
    ports:
      - "8080:80"
    volumes:
      - ~/Documents/interview-tyrell:/var/www/html
```


This docker-compose.yml file defines a web service that uses the my-php-app image, maps port 8080 on your machine to port 80 inside the container, and mounts your local <project-location> directory as a volume at the /var/www/html directory inside the container.

To start the container using Docker Compose, run the following command in your project directory:

```docker
    docker-compose up
```

This will start the container and display the container logs in your terminal.

### Access the PHP application:

You should now be able to access your PHP application by navigating to http://localhost:8080 in your web browser. This should display the PHP info page with information about your PHP installation.

If you want to modify your PHP application, simply edit the files in your local <project-location> directory, and the changes will be automatically reflected in the container.


6. Enter the number of players and click the "Submit" button to receive the playing card distribution.

## Support

For support or questions, please contact Na'im Zaid at m.naim.zaid@gmail.com.
