FROM mysql:8.1

ENV TZ UTC

ADD dbschema.sql /docker-entrypoint-initdb.d/
COPY docker/local/mysql/custom.cnf /etc/mysql/conf.d/custom.cnf

EXPOSE 3306
