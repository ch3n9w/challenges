FROM node:10

# Create app directory
RUN mkdir -p /app
RUN useradd appuser

WORKDIR /app

COPY ./public /app/public
COPY ./package.json /app
COPY ./source /app

RUN touch /flag && chmod 644 /flag && echo "flag{this_is_the_flag}" > /flag
RUN chmod 777 /app/public

RUN npm install
EXPOSE 3000

USER appuser:appuser
CMD [ "node", "app.js"]
