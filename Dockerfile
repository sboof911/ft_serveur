FROM debian:buster
ENV    DEBIAN_FRONTEND noninteractive
COPY srcs/ .
EXPOSE 80 443
RUN bash help.sh
CMD bash start.sh
