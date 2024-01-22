package main

import (
    "fmt"
    "log"
    "net/http"
)

func handler(w http.ResponseWriter, r *http.Request) {
	var text string
    for i := 0; i < 100; i++ {
        text += "Hello World! \n"
    }
    
    fmt.Fprintf(w, text)
}

func main() {
    http.HandleFunc("/", handler)
    log.Fatal(http.ListenAndServe(":8080", nil))
}
