FROM ubuntu:latest
LABEL authors="karel"

ENTRYPOINT ["top", "-b"]
