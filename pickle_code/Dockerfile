FROM python:3.7

ARG PIP_MIRROR="https://pypi.tuna.tsinghua.edu.cn/simple"
ADD ./app/requirements.txt /requirements.txt

RUN set -ex \
    && pip install -i $PIP_MIRROR -r /requirements.txt
# RUN rm /bin/sh
RUN rm /bin/sh && cp /bin/bash /bin/sh

COPY ./app/ /usr/src/
COPY ./flag /flag

WORKDIR /usr/src
EXPOSE 8888

CMD ["python3", "app.py"]
