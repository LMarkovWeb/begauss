FROM node:16-alpine

# install simple http server for serving static content
RUN npm install -g http-server

# set working directory
WORKDIR /app

# add `/app/node_modules/.bin` to $PATH
ENV PATH="/app/node_modules/.bin:$PATH"

COPY package*.json ./

# install project dependencies
RUN npm install

# copy project files and folders to the current working directory (i.e. 'app' folder)
COPY . .

# build app for production with minification
RUN npm run build

EXPOSE 8080
CMD [ "http-server", "dist" ]
