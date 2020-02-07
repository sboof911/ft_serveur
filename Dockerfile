FROM debian:buster
COPY srcs/ .
RUN bash help.sh
CMD bash start.sh
