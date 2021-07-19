package server

import (
	"net/http"

	"github.com/gorilla/mux"
	"github.com/luispfcanales/tienda-hit/internal/server/routes"
)

func New() *mux.Router {
	server := mux.NewRouter()
	server.HandleFunc("/", routes.Home).Methods(http.MethodGet)
	server.HandleFunc("/producto", routes.Products).Methods(http.MethodGet)
	return server
}
