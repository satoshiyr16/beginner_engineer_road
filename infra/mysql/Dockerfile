FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=laravel \
  MYSQL_USER=beginner_engineer_road \
  MYSQL_PASSWORD=secret_code_16 \
  MYSQL_ROOT_PASSWORD=secret_code_16 \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf
