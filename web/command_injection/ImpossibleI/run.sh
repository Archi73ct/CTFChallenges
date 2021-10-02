docker build -t hardi .
docker run --rm -p80:80 --name hardi-running hardi
