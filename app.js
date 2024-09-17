const express = require("express");
const app = express();

app.use(express.static("public"))

app.set("view engine", "ejs")

app.get("/", function(req,res){
    res.render("landingPage")
});


app.listen(3000);