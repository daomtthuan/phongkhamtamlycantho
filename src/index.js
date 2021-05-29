const nuxt = require('nuxt');
const express = require('express');
const dotenv = require('dotenv');
const http = require('http');

dotenv.config();

const app = express();
const server = http.createServer(app);

nuxt.loadNuxt('start').then(({ render }) => {
  app.use(render);
  server.listen(process.env.PORT, () => console.log(`Server listening on port ${process.env.PORT}`));
});
