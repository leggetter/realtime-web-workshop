## Exercise 0.5 - WebSockets

The purpose of this exercise is to let you have a play with an interface that is as close to the native `WebSocket` interface as possible.

### The code

Go to: <http://jsbin.com/ayOZabOX/1/edit>

### SimpleWebSocket

Within the `init` function you can see a `SimpleWebSocket` object has been created. This is an object which pretends to be a normal WebSocket object.

### Log when the connection is opened

Within the `ws.onopen` handler function use the `log` function to display when the connection has been established.

### Log when a message is received

Within the `ws.onmessage` function use the `log` function to output the contents of the event data. The data is available 

### Send data

*The fun part* when the `send_btn` is clicked use the `ws.send` function to send data to anybody else that is connected. The `sendSomething` function is already set up to handle the button click event and get the text from the `textarea`.