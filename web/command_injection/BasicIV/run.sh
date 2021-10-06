docker build -t basiciv .
docker run --rm -p80:80 --name basiciv-running basiciv