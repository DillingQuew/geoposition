FROM node

WORKDIR /var/www/laravel
# Copy your code in the docker image
COPY ./src/package.json /var/www/laravel/package.json
# Install your project dependencies
#RUN npm install
# Expose the port 3000
EXPOSE 3000
# Set the default command to run when a container starts
#CMD ["npm", "start"]