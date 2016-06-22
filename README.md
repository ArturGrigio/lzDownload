# Resize Images and Create a ZIP via REST API

This composer package will allow you to do a get request to a server, which will parse the request, resize the requested images, and pack them up in a zip. The images are resized via using fork(), so it will utilize all the processor cores (should be a bit faster), and the finally the server will send a response with the link of the files to be downloaded.


## Get Request

`www.example.com?images[]=image1.jpg&images[]=image2.jpg&size=1500`
