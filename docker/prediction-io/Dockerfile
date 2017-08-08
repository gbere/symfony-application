FROM sphereio/predictionio

RUN echo n | pio template get PredictionIO/template-scala-parallel-universal-recommendation RecommendationEngine --name endroid --package nl.endroid --email info@endroid.nl

RUN sed -i 's/"handmade"/"endroid"/g' RecommendationEngine/engine.json
RUN pip install --upgrade pip
RUN pip install -U setuptools
RUN pip install predictionio

RUN apt-get update && apt-get install -y cron vim

ADD ./import_sample_data.py /RecommendationEngine/import_sample_data.py
ADD ./delete_sample_data.py /RecommendationEngine/delete_sample_data.py

RUN pio-start-all && \
    cd RecommendationEngine && \
    pio app new endroid && \
    pio app list | sed '2q;d' | cut -d '|' -f 3 | xargs > /access_key && \
    python import_sample_data.py --access_key "$(cat /access_key)" && \
    pio build --verbose && \
    pio train --skip-sanity-check && \
    pio app list | sed '2q;d' | cut -d '|' -f 3 | xargs > /access_key && \
    python delete_sample_data.py --access_key "$(cat /access_key)" && \
    pio train --skip-sanity-check

ADD ./entrypoint.sh entrypoint.sh
ADD ./piocron piocron

RUN chmod 777 -R ./entrypoint.sh

RUN touch /var/spool/cron/crontabs/root
RUN crontab piocron
RUN rm piocron

EXPOSE 7070 8000

ENTRYPOINT ./entrypoint.sh
