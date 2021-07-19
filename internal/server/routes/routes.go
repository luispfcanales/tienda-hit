package routes

import (
	"html/template"
	"net/http"
)

var t = template.Must(template.ParseGlob("internal/templates/*"))

func Home(w http.ResponseWriter, _ *http.Request) {
	t.ExecuteTemplate(w, "Home", nil)
}
func Products(w http.ResponseWriter, _ *http.Request) {
	t.ExecuteTemplate(w, "Products", nil)
}
