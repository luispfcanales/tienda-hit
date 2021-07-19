package main

import (
	"os"

	"github.com/luispfcanales/tienda-hit/cmd/api"
)

func main() {
	PORT := os.Getenv("PORT")
	if PORT == "" {
		PORT = "8000"
	}

	api.Run(PORT)
}
