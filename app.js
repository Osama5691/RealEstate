const express = require("express");
const connectDB = require("./mongoose-connection");
const app = express();
const userRoutes = require("./routes/userRoutes");


app.use(express.static("public"));
app.use(express.urlencoded({ extended: true })); 

// Connect to MongoDB
connectDB();


app.set("view engine", "ejs");


app.use("/", userRoutes); 


const port = process.env.PORT || 3000;
app.listen(port, () => {
    console.log(`Server running on port ${port}`);
});
