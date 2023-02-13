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
docker build -t [image_name] .
```

Note: The . at the end is important and specifies the build context, which is the current directory.

4. Once the build is complete, run the following command to start a new container based on the image you just built:

```docker
docker run -p 80:80 --name card_distribution -d playing-card-distribution
```

5. Open a web browser and navigate to `http://localhost` to view the application.

6. Enter the number of players and click the "Submit" button to receive the playing card distribution.

## Support

For support or questions, please contact Na'im Zaid at m.naim.zaid@gmail.com.
