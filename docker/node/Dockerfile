FROM node:12

WORKDIR /app

COPY package*.json ./

RUN npm install && \
    npm install -g sass

COPY . .

EXPOSE 8080

CMD [ "node", "server.js" ]