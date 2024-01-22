const http = require('http');

const text = Array(100).fill('Hello World! \n').join('');

const handler = (req, res) => {
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end(text);
};

const server = http.createServer(handler);

server.listen(8081, () => {
    console.log('Server listening on port 8081');
});