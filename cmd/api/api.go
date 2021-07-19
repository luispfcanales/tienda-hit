package api

import (
	"fmt"
	"log"
	"net/http"

	"github.com/luispfcanales/tienda-hit/internal/server"
)

//Run execute server
func Run(port string) {
	s := server.New()
	log.Fatal(http.ListenAndServe(fmt.Sprintf(":%s", port), s))
}
